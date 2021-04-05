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
    <div class="stars">';
    $originalValue = $tableData['c_rows_rating'][$i];
    $roundedValue = ceil($tableData['c_rows_rating'][$i]);
    for($j=0; $j < ceil($tableData['c_rows_rating'][$i]); $j++){
      if($j+1 == $roundedValue){
        if($originalValue != $roundedValue){
          $data .= '<i class="fa fa-star-half-o checked">&nbsp;</i>';
          break;
        }
      }
      $data .='<i class="fa fa-star checked">&nbsp;</i>';
    }
    $data .=  '</div>
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

$table_name = $wpdb->prefix . "posts";
$postId = $tableData['c_post_id'];

wp_update_post(array(
  'ID' => $postId,
  'post_title' => $_POST['c_title'],
  'post_content' => $data, 
));

if($postId){
  // inserting the values into postmeta table
  update_post_meta( $postId, '_wp_page_template', json_encode($tableData) );
  $shortcode = '[iskillsct id='.$postId.' /]';
  $message = 'Successfully Updated!';
  $redirectUrl = $tableData['redirect_url'];
  }
  $response = array('success' => true, 'post_id'=> $shortcode, 'message' => $message, 'redirect_url' => $redirectUrl);
}
else {
  $response = array('success' => false);
}
echo json_encode($response);





