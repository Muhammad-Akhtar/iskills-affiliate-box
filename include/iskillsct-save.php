<?php
require_once('../../../../wp-load.php');
$timezone = date_default_timezone_set('Asia/Karachi');
global $wpdb;
if(isset($_POST['is_sent']) && $_POST['is_sent'] == 'Success'){
    $tableData = $_POST; 
    $data = '
    
<table class="table" style="border:0;">
  <thead class="thead-dark">
    <tr>
      <th scope="col" style="text-transform: uppercase;">Image</th>
      <th scope="col" style="text-transform: uppercase;">Product</th>
      <th scope="col" style="text-transform: uppercase;">Features</th>
      <th scope="col" style="text-transform: uppercase;"></th>';
      if($_POST['c_show_btn2'] == 'on' || $_POST['c_show_btn1'] == 'on')
      {
        $data .= '<th scope="col" style="text-transform: uppercase;">Price</th>';
      }

    $data .= '</tr>
  </thead>
  <tbody>';

for($i=0; $i < count($tableData['c_rows_pro']); $i++){
  
  $data .= '<tr>
      <th> <div class="table-1-img"> <img src="'.$tableData["c_rows_img"][$i].'"> </div></th>
      <td> <div class="table-1-product">'.$tableData['c_rows_pro'][$i].' </div></td>
      <td> <div class="table-1-product-desc"> '.$tableData['c_rows_features'][$i].' </div></td>
      <td>
    <div style="position:inherit !important;"> 
    <div class="rate">
      <div class="stars">
        <i class="fa fa-star checked">&nbsp;</i>
        <i class="fa fa-star checked">&nbsp;</i>
        <i class="fa fa-star checked">&nbsp;</i>
        <i class="fa fa-star checked">&nbsp;</i>
        <i class="fa fa-star">&nbsp;</i>
      </div>
    </div>
    </div>

    <div class="table1-rating-strip">
        <span class="rating-numeric1">'.$tableData['c_rows_rating'][$i].'</span>
        <span class="rating-text1">Rating</span>
    </div>

      </td>
      <td>';

      if(isset($_POST['c_show_btn1']) && $_POST['c_show_btn1'] == 'on'){
      $data .= '<button class="table-1-btn-i"><a href="'.$tableData['c_rows_btn1_link'][$i].'" target="_blank"> '.$tableData['c_rows_btn1_text'][$i].' >></a></button>';
      }
       
      if(isset($_POST['c_show_btn2']) && $_POST['c_show_btn2'] == 'on'){
      $data .= '<button class="table-1-btn-ii"><a href="'.$tableData['c_rows_btn2_link'][$i].'" target="_blank">'.$tableData['c_rows_btn2_text'][$i].' >></a></button>';
      }
      $data .= '</td>
    </tr>';
} // end of for loop
  $data.='</tbody>
</table>';

$text = preg_replace('~[^\pL\d]+~u', '-', $_POST['c_title']);
// transliterate
$text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
// remove unwanted characters
$text = preg_replace('~[^-\w]+~', '', $text);
// trim
$text = trim($text, '-');
// remove duplicate -
$text = preg_replace('~-+~', '-', $text);
// lowercase
$table_slug = strtolower($text);

$table_name = $wpdb->prefix . "posts";
$postId = wp_insert_post(array(
        'post_title' => $_POST['c_title'],
        'post_content' => $data,
        'post_name' => $table_slug,
        'comment_status' => 'closed',
        'ping_status'    => 'closed',
        'post_excerpt'   => '',
        'post_parent'    => 0,
        'post_status'    => 'publish',
        'post_title'     => $tableData['c_title'],
        'post_type'      => 'iskillsct',  
));

if($postId){
  // inserting the values into postmeta table
  update_post_meta( $postId, '_wp_page_template', json_encode($tableData) );
  
  $shortcode = '[iskillsct id='.$postId.' /]';
  $message = 'Successfully Saved!';
  if(isset($_POST['from_settings'])){
    wp_insert_post(array(
      'post_content' => $shortcode,
      'comment_status' => 'open',
      'ping_status'    => 'open',
      'post_excerpt'   => '',
      'post_parent'    => 0,
      'post_status'    => 'publish',
      'post_type'      => 'post',    
  
    ));
  }
  $response = array('success' => true, 'post_id'=> $shortcode, 'message' => $message);
}
else {
  $response = array('success' => false);
}
echo json_encode($response);
}

// function get_current_user_id() {
//   if ( ! function_exists( 'wp_get_current_user' ) ) {
//       return 0;
//   }
//   $user = wp_get_current_user();
//   return ( isset( $user->ID ) ? (int) $user->ID : 0 );
// }

