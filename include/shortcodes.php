<?php
function iskills_comparison_table($atts, $content=null){
    $atts = shortcode_atts([
        'id' => '',
    ], $atts, 'iskillsct_comparison_table');
    $options = get_option('iskillsct_comparison_table', iskills_comparison_table_options_default());
    $table_id = $atts['id'] == '' ? $options['id'] : $atts['id']; 
    $tableHtml = '';
    $my_postid = $table_id;//This is page id or post id
    $content_post = get_post($my_postid);
    
    if($content_post != '')
    $tableHtml = $content_post->post_content;
    $comparisonTableThemeOne = false;
    if (isset($options['theme']) && $options['theme'] == 'iskillsct-table-01') {
        $comparisonTableThemeOne = true;
    }
    $data = '';
    if($comparisonTableThemeOne && !empty($tableHtml)){
        $data .= '<div class="iskills-pros-cons-icons iskills-pros-cons-wrapper " style="max-width:65rem;">
        <div id="table-1" class="table-1">'. $tableHtml . '</div> </div>';
        return $data;
    }
}

function iskills_price_box($atts, $content = null)
{
    $atts = shortcode_atts([
        'p1_title' => '',
        'p1_pkg' => '',
        'p1_img' => '',
        'p1-icon' => '',
        'pb_button_icon1' => '',
        'pb_link_text1' => '',
        'pb_link1' => '',
        'p2_title' => '',
        'p2_pkg' => '',
        'p2_img' => '',
        'p2-icon' => '',
        'pb_button_icon2' => '',
        'pb_link_text2' => '',
        'pb_link2' => '',
        'p3_title' => '',
        'p3_pkg' => '',
        'p3_img' => '',
        'p3-icon' => '',
        'pb_button_icon3' => '',
        'pb_link_text3' => '',
        'pb_link3' => '',
    ], $atts, 'iskills_price_box');

    if (strlen($content) > 10) {
        $data = explode("###ER##GF####", do_shortcode($content), 4);
        $atts['p1'] = $data[0];
        $atts['p2'] = $data[1];
        $atts['p3'] = $data[2];
    } 
    $options = get_option('iskills_price_box', iskills_price_box_options_default());
    $p1_title = $atts['p1_title'] == '' ? $options['p1_title'] : $atts['p1_title'];
    $p1_pkg = $atts['p1_pkg'] == '' ? $options['p1_pkg'] : $atts['p1_pkg'];
    $p1_img = $atts['p1_img'] == '' ? $options['p1_img'] : $atts['p1_img'];
    $p1_icon = $atts['p1-icon'] == '' ? $options['p1_icon'] : $atts['p1-icon'];
    $pb_button_icon1 = $atts['pb_button_icon1'] == '' ? $options['pb_button_icon1'] : $atts['pb_button_icon1'];
    $pb_link_text1 = $atts['pb_link_text1'] == '' ? $options['pb_link_text1'] : $atts['pb_link_text1'];
    $pb_link1 = $atts['pb_link1'] == '' ? $options['pb_link1'] : $atts['pb_link1'];
    $p2_title = $atts['p2_title'] == '' ? $options['p2_title'] : $atts['p2_title'];
    $p2_pkg = $atts['p2_pkg'] == '' ? $options['p2_pkg'] : $atts['p2_pkg'];
    $p2_img = $atts['p2_img'] == '' ? $options['p2_img'] : $atts['p2_img'];
    $p2_icon = $atts['p2-icon'] == '' ? $options['p2_icon'] : $atts['p2-icon'];
    $pb_button_icon2 = $atts['pb_button_icon2'] == '' ? $options['pb_button_icon2'] : $atts['pb_button_icon2'];
    $pb_link_text2 = $atts['pb_link_text2'] == '' ? $options['pb_link_text2'] : $atts['pb_link_text2'];
    $pb_link2 = $atts['pb_link2'] == '' ? $options['pb_link2'] : $atts['pb_link2'];

    $p3_title = $atts['p3_title'] == '' ? $options['p3_title'] : $atts['p3_title'];
    $p3_pkg = $atts['p3_pkg'] == '' ? $options['p3_pkg'] : $atts['p3_pkg'];
    $p3_img = $atts['p3_img'] == '' ? $options['p3_img'] : $atts['p3_img'];
    $p3_icon = $atts['p3-icon'] == '' ? $options['p3_icon'] : $atts['p3-icon'];
    $pb_button_icon3 = $atts['pb_button_icon3'] == '' ? $options['pb_button_icon3'] : $atts['pb_button_icon3'];
    $pb_link_text3 = $atts['pb_link_text3'] == '' ? $options['pb_link_text3'] : $atts['pb_link_text3'];
    $pb_link3 = $atts['pb_link3'] == '' ? $options['pb_link3'] : $atts['pb_link3'];

    $parent_theme = $options['parent_price_theme'];

    $priceBoxThemeOne = false;
    if (isset($options['theme']) && $options['theme'] == 'iskillspb-box-01') {
        $priceBoxThemeOne = true;
    }

    $priceBoxThemeTwo = false;
    if (isset($options['theme']) && $options['theme'] == 'iskillspb-box-02') {
        $priceBoxThemeTwo = true;
    }

    $priceBoxThemeThree = false;
    if (isset($options['theme']) && $options['theme'] == 'iskillspb-box-03') {
        $priceBoxThemeThree = true;
    }

    if($priceBoxThemeThree){
        $data = '';

        $data .= '<div class="iskills-pros-cons-icons iskills-pros-cons-wrapper " style="max-width:65rem;"><div class="price-box-2">
                <div class="price-box-3">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 padding-0">
                        <div class="card price-box-i1 rounded-0">
                            <div class="inside-border">
                            <div class="card-body price-box-i-body1">
                                <div class="rounded-0 price-box-o-header-i1">
                                <div class="price-box-3-subheading text-center">
                                    '.$p1_pkg.'
                                </div>
                                </div>
                                <div class="price-box-i-heading text-center">
                                    '.$p1_title.'
                                </div>
                                <!-- Image will be chosen by user -->
                                <div class="price-box-i-img text-center">';
                                if($p1_img !== ''){
                                    $data .='<img src="'.$p1_img.'" alt="">
                                    ';
                                }
                                $data .= '</div>
                                <!-- if user do not chose img then default img will be used -->

                                <!-- after image list content -->
                                <div class="price-box-3-list">
                                '.iskills_price_box_list($atts['p1'], $options['use_icons'], $p1_icon).'
                                </div>
                            </div>
                            <!-- card body ends -->

                            <div class="card-footer price-box-3-footer1 text-center">
                            <a href="'.$pb_link1.'" class="price-box-3-btn" target="_blank">  '.$pb_link_text1.'</a>
            
                            </div>
                            <!-- card footer ends here -->
                            </div>
                        </div>
                        <!-- card ends -->
                        </div>
                        <!-- 1st col ends -->

                        <div class="col-lg-4 col-md-4 price-box-ii1 padding-0">
                        <div class="card price-box-i1 rounded-0">
                            <div class="inside-border">
                            <div class="card-body price-box-i-body1">
                                <div class="price-box-ii-header-i1">
                                <div class="price-box-3-subheading text-center">
                                    '.$p2_pkg.'
                                </div>
                                </div>
                                <div class="price-box-i-heading text-center">
                                    '.$p2_title.'
                                </div>
                                <!-- Image will be chosen by user -->
                                <div class="price-box-i-img text-center">';
                                if($p2_img !== ''){
                                    $data .='<img src="'.$p2_img.'" alt="">
                                    ';
                                }
                                $data .= '</div>
                                <!-- if user do not chose img then default img will be used -->

                                <!-- after image list content -->
                                <div class="price-box-3-list">
                                '.iskills_price_box_list($atts['p2'], $options['use_icons'], $p2_icon).'
                                </div>
                            </div>
                            <!-- card body ends -->

                            <div class="card-footer price-box-3-footer1 text-center">
                            <a href="'.$pb_link2.'" class="price-box-3-btn" target="_blank">  '.$pb_link_text2.'</a>
                
                            </div>
                            <!-- card footer ends here -->
                            </div>
                        </div>
                        </div>

                        <div class="col-lg-4 col-md-4 price-box-iii1 padding-0">
                        <div class="card price-box-i1 rounded-0">
                            <div class="inside-border">
                            <div class="card-body price-box-i-body1">
                                <div class="price-box-iii-header-i1">
                                <div class="price-box-3-subheading text-center">
                                    '.$p3_pkg.'
                                </div>
                                </div>
                                <div class="price-box-i-heading text-center">
                                    '.$p3_title.'
                                </div>
                                <!-- Image will be chosen by user -->
                                <div class="price-box-i-img text-center">';
                                if($p3_img !== ''){
                                    $data .='<img src="'.$p3_img.'" alt="">
                                    ';
                                }
                                
                                $data .= '</div>
                                <!-- if user do not chose img then default img will be used -->

                                <!-- after image list content -->
                                <div class="price-box-3-list">
                                '.iskills_price_box_list($atts['p3'], $options['use_icons'], $p3_icon).'
                                </div>
                            </div>
                            <!-- card body ends -->

                            <div class="card-footer price-box-3-footer1 text-center">
                                <a href="'.$pb_link3.'" class="price-box-3-btn" target="_blank">  '.$pb_link_text3.'</a>
                            </div>
                            <!-- card footer ends here -->
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
        </div>';
    }

    if($priceBoxThemeTwo){
        $data = '';

        $data .= '<div class="iskills-pros-cons-icons iskills-pros-cons-wrapper " style="max-width:65rem;"><div class="price-box-2 m-5">
          <div class="row">
            <div class="col-lg-4 col-md-4">
              <div class="card price-box-i1 rounded-0 shadow bg-white">
                <div class="card-header rounded-0 price-box-i-header-i1">
                  <div class="price-box-i-subheading text-center">
                    '.$p1_pkg.'
                  </div>
                </div>
                <!-- card header ends -->
      
                <!-- Triangle -->
                <div class="arrow-down arrow-down-i"></div>
      
                <div class="card-body price-box-i-body1">
                  <div class="price-box-i-heading text-center">
                    '.$p1_title.'
                  </div>
                  <!-- Image will be chosen by user -->
                  <div class="price-box-i-img text-center">';
                  if($p1_img !== ''){
                        $data .='<img src="'.$p1_img.'" alt="">
                        ';
                    }
                
                $data .= '</div>
                  <!-- if user do not chose img then default img will be used -->
      
                  <!-- after image list content -->
                  <div class="price-box-i-list">
                  '.iskills_price_box_list($atts['p1'], $options['use_icons'], $p1_icon).'
                  </div>
                </div>
                <!-- card body ends -->
      
                <div class="card-footer price-box-i-footer1">
                    <a href="'.$pb_link1.'" class="price-box-i-btn" target="_blank">  '.$pb_link_text1.' <i class="'.$pb_button_icon1.'" aria-hidden="true"></i></a>
                </div>
                <!-- card footer ends here -->
      
              </div>
              <!-- card ends -->
            </div>
            <!-- 1st col ends -->
      
            <div class="col-lg-4 col-md-4 price-box-ii1">
              <div class="card price-box-i1 rounded-0">
                <div class="card-header price-box-i-header-i1">
                  <div class="price-box-i-subheading text-center">
                  '.$p2_pkg.'
                  </div>
                </div>
                <!-- card header ends -->
      
                <!-- Triangle -->
                <div class="arrow-down-ii arrow-down"></div>
      
                <div class="card-body price-box-i-body1">
                  <div class="price-box-i-heading text-center">
                  '.$p2_title.'
                  </div>
                  <!-- Image will be chosen by user -->
                  <div class="price-box-i-img text-center">';
                  if($p2_img !== ''){
                    $data .='<img src="'.$p2_img.'" alt="">
                    ';
                    }
            
                  $data .= '</div>
                  <!-- if user do not chose img then default img will be used -->
      
                  <!-- after image list content -->
                  <div class="price-box-i-list">
                  '.iskills_price_box_list($atts['p2'], $options['use_icons'], $p2_icon).'
                  </div>
                </div>
                <!-- card body ends -->
      
                <div class="card-footer price-box-i-footer1">
                    <a href="'.$pb_link2.'" class="price-box-i-btn" target="_blank">  '.$pb_link_text2.' <i class="'.$pb_button_icon2.'" aria-hidden="true"></i></a>
                </div>
                <!-- card footer ends here -->
              </div>
            </div>
      
            <div class="col-lg-4 col-md-4 price-box-iii1">
              <div class="card price-box-i1 rounded-0">
                <div class="card-header price-box-i-header-i1">
                  <div class="price-box-i-subheading text-center">
                  '.$p3_pkg.'
                  </div>
                </div>
                <!-- card header ends -->
                <!-- Triangle -->
                <div class="arrow-down-iii arrow-down"></div>
                <div class="card-body price-box-i-body1">
                  <div class="price-box-i-heading text-center">
                  '.$p3_title.'
                  </div>
                  <!-- Image will be chosen by user -->
                  <div class="price-box-i-img text-center">';
                if($p3_img !== ''){
                    $data .='<img src="'.$p3_img.'" alt="">
                    ';
                }
                $data .= '</div>
                  <!-- if user do not chose img then default img will be used -->
      
                  <!-- after image list content -->
                  <div class="price-box-i-list">
                  '.iskills_price_box_list($atts['p3'], $options['use_icons'], $p3_icon).'
                  </div>
                </div>
                <!-- card body ends -->
      
                <div class="card-footer price-box-i-footer1">
                <a href="'.$pb_link3.'" class="price-box-i-btn" target="_blank">  '.$pb_link_text3.' <i class="'.$pb_button_icon3.'" aria-hidden="true"></i></a>
                </div>
                <!-- card footer ends here -->
              </div>
            </div>
      
          </div>
        </div>
      </div>';
    }

    if ($priceBoxThemeOne) {
        
        $data = '';

        $data .= '<div class="iskills-pros-cons-icons iskills-pros-cons-wrapper " style="max-width:65rem;"><div class="price-box-1 m-5">
          <div class="row">
            <div class="col-lg-4 col-md-4">
              <div class="card price-box-i1 rounded-0">
                <div class="card-header price-box-i-header-i1">
                  <div class="card-header price-box-i-header-i2">
                    <!-- stylish header as given -->
                    <div class="price-box-i-heading">
                      ' . $p1_title . '
                    </div>
                    <div class="card-header price-box-i-header-i3">
                      <!-- stylish header as given -->
                      <div class="price-box-i-subheading">
                        '.$p1_pkg.'
                      </div>
                    </div>
                  </div>
                </div>
                <!-- card header ends -->
                
      
                <div class="card-body price-box-i-body1">
                  <!-- Image will be chosen by user -->
                  <div class="price-box-i-img">';
                
                if($p1_img !== ''){
                    $data .='<img src="'.$p1_img.'" alt="">
                    ';
                }
            $data .= '</div>

                  <!-- if user do not chose img then default img will be used -->
      
                  <!-- after image list content -->
                  <div class="price-box-i-list">
                  '.iskills_price_box_list($atts['p1'], $options['use_icons'], $p1_icon).'
                  </div>
                </div>
                <!-- card body ends -->
      
                <div class="card-footer price-box-1-footer1 text-center">
                  <a href="'.$pb_link1.'" class="price-box-1-btn" target="_blank">  '.$pb_link_text1.' <i class="'.$pb_button_icon1.'" aria-hidden="true"></i></a>
                </div>
                <!-- card footer ends here -->
      
              </div>
              <!-- card ends -->
            </div>
            <!-- 1st col ends -->
      
            <div class="col-lg-4 col-md-4 price-box-ii1">
              <div class="card price-box-i1 rounded-0">
                <div class="card-header price-box-i-header-i1">
                  <div class="card-header price-box-i-header-i2">
                    <!-- stylish header as given -->
                    <div class="price-box-i-heading">
                      '.$p2_title.'
                    </div>
                    <div class="card-header price-box-i-header-i3">
                      <!-- stylish header as given -->
                      <div class="price-box-i-subheading">
                        '.$p2_pkg.'
                      </div>
                    </div>
                  </div>
                </div>
                <!-- card header ends -->
      
                <div class="card-body price-box-i-body1">
                  <!-- Image will be chosen by user -->
                  <div class="price-box-i-img">';
                
                  if($p2_img !== ''){
                      $data .='<img src="'.$p2_img.'" alt="">
                  ';
                  }
                 
                      
                  $data .= '</div>
                  <!-- if user do not chose img then default img will be used -->
      
                  <!-- after image list content -->
                  <div class="price-box-i-list">
                  '.iskills_price_box_list($atts['p2'], $options['use_icons'], $p2_icon).'
                  </div>
                </div>
                <!-- card body ends -->
      
                <div class="card-footer price-box-1-footer1 text-center">
                <a href="'.$pb_link2.'" class="price-box-1-btn" target="_blank">  '.$pb_link_text2.' <i class="'.$pb_button_icon2.'" aria-hidden="true"></i></a>
                </div>
                <!-- card footer ends here -->
              </div>
            </div>
      
            <div class="col-lg-4 col-md-4 price-box-iii1">
              <div class="card price-box-i1 rounded-0">
                <div class="card-header price-box-i-header-i1">
                  <div class="card-header price-box-i-header-i2">
                    <!-- stylish header as given -->
                    <div class="price-box-i-heading">
                      ' . $p3_title . '
                    </div>
                    <div class="card-header price-box-i-header-i3">
                      <!-- stylish header as given -->
                      <div class="price-box-i-subheading">
                        '. $p3_pkg .'
                      </div>
                    </div>
                  </div>
                </div>
                <!-- card header ends -->
      
                <div class="card-body price-box-i-body1">
                  <!-- Image will be chosen by user -->
                  <div class="price-box-i-img">';
                
                  if($p3_img !== ''){
                      $data .='<img src="'.$p3_img.'" alt="">
                      ';
                  }
              $data .= '</div>
                  <!-- if user do not chose img then default img will be used -->
      
                  <!-- after image list content -->
                  <div class="price-box-i-list">
                    '.iskills_price_box_list($atts['p3'], $options['use_icons'], $p3_icon).'
                  </div>
                </div>
                <!-- card body ends -->
      
                <div class="card-footer price-box-1-footer1 text-center">
                <a href="'.$pb_link3.'" class="price-box-1-btn" target="_blank">  '.$pb_link_text3.' <i class="'.$pb_button_icon3.'" aria-hidden="true"></i></a>
                </div>
                <!-- card footer ends here -->
              </div>
            </div>
      
          </div>
        </div>
      </div>';
    }

   
    return $data;
}

function iskills_price_box_list($data, $useIcon,$icon){
    
    $useIconClass = $useIcon == 1 ? "has-icon" : "no-icon";
    // $lines = explode("\n", $data);
    //  $lines = explode("\n", $data);
    $lines =  preg_split('/\r\n|\r|\n|<br[^>]*>/', $data);
    $list = "<ul class='{$useIconClass}'>";
    foreach ($lines as $key => $value) {
        if (strlen($value) > 0) {
            $list .= "<li>" . ($useIcon == 1 ? "<i class='{$icon}' style='margin-right:10px'></i>" : "") . $value . "</li>";
        }
    }
    return    $list . '</ul>';
}

function iskills_rating_box($atts, $content = null)
{    
    $atts = shortcode_atts([
        'qb_title' => '',
        'qb_percentage' => 0,
        'pb_title' => '',
        'pb_percentage' => 0,
        'db_title' => '',
        'db_percentage' => 0,
        'ub_title' => '',
        'ub_percentage'  => 0,
        'show_qb' => false,
        'show_db' => false,
        'show_pb' => false,
        'show_ub' => false,
    ], $atts, 'iskills_rating_box');

    $options = get_option('iskills_rating_box', iskills_rating_box_options_default());

    $qb_title = $atts['qb_title'] == '' ? $options['qb_title'] : $atts['qb_title'];
    $qb_percentage = $atts['qb_percentage'] == '' ? $options['qb_percentage'] : $atts['qb_percentage'];

    $pb_title = $atts['pb_title'] == '' ? $options['pb_title'] : $atts['pb_title'];
    $pb_percentage = $atts['pb_percentage'] == '' ? $options['pb_percentage'] : $atts['pb_percentage'];

    $db_title = $atts['db_title'] == '' ? $options['db_title'] : $atts['db_title'];
    $db_percentage = $atts['db_percentage'] == '' ? $options['db_percentage'] : $atts['db_percentage'];

    $ub_title = $atts['ub_title'] == '' ? $options['ub_title'] : $atts['ub_title'];
    $ub_percentage = $atts['ub_percentage'] == '' ? $options['ub_percentage'] : $atts['ub_percentage'];

    // Calculate overall rating
    $given_rating = 0;
    $total_rating = 0;
    if ($atts['show_qb'] == 'true') {
        $given_rating += $qb_percentage;
        $total_rating += 100;
    }
    if ($atts['show_pb'] == 'true') {
        $given_rating += $pb_percentage;
        $total_rating += 100;
    }
    if ($atts['show_db'] == 'true') {
        $given_rating += $db_percentage;
        $total_rating += 100;
    }
    if ($atts['show_ub'] == 'true') {
        $given_rating += $ub_percentage;
        $total_rating += 100;
    }

    $overall_rating = ($given_rating / $total_rating) * 10;

    $parent_theme = $options['parent_rating_theme'];

    $ratingBoxThemeOne = false;
    if (isset($options['theme']) && $options['theme'] == 'iskillsrb-box-01') {
        $ratingBoxThemeOne = true;
    }

    $ratingBoxThemeTwo = false;
    if (isset($options['theme']) && $options['theme'] == 'iskillsrb-box-02') {
        $ratingBoxThemeTwo = true;
    }

    $ratingBoxThemeThree = false;
    if (isset($options['theme']) && $options['theme'] == 'iskillsrb-box-03') {
        $ratingBoxThemeThree = true;
    }

    $ratingBoxThemeFour = false;
    if (isset($options['theme']) && $options['theme'] == 'iskillsrb-box-04') {
        $ratingBoxThemeFour = true;
    }

    if ($ratingBoxThemeFour) {
        $data =  '';
        $data .= '
        <div class="progress-wid-hei mt-5 rating-box-4">
        <div class="progress-outer-line progress-2-outline mt-5 pt-5 mb-0 pb-0 ">';
        if ($options['circle_heading']) {
            $data .= '<div class="circle-outer-line progress-2-circle text-white">
                        <h3>' . number_format($overall_rating, 2, '.', '') . '</h3>
                        </div>
                 ';
        }

        $data .= '<div class="padding-col">';

        if ($atts['show_qb'] === 'true') {
            $data .= '<div class="box-col"><div class="prog-circle-4 ">
            <svg class="circle-svg" style="stroke-dashoffset: calc(350 - (350 * ' . $qb_percentage . ') / 100);">
                <circle cx="55" cy="55" r="55"></circle>
            </svg>
            <div class="inner-prog-circle-4">
                <div class="text-prog-circle-4" style="font-size:24px;">' . $qb_percentage . '%</div>
            </div>
            
            </div>
            <h4 class="text-center">' . $qb_title . '</h4>
            </div>';
        }

        if ($atts['show_pb'] === 'true') {
            $data .= '<div class="box-col">
            <div class="prog-circle-4 ">
        <div class="svg-circle-2">
        <svg class="circle-svg" style="stroke-dashoffset: calc(350 - (350 * ' . $qb_percentage . ') / 100);">
            <circle cx="55" cy="55" r="55"></circle>
            </svg>
        </div>
            <div class="inner-prog-circle-4">
                <div class="text-prog-circle-4" style="font-size:24px;">' . $pb_percentage . '%</div>
            </div>
            
            </div>
            <h4 class="text-center text-margin">' . $pb_title . '</h4>
        </div>';
        }

        if ($atts['show_db'] === 'true') {
            $data .= '<div class="box-col">
            <div class="prog-circle-4 ">
        <div class="svg-circle-3">
        <svg class="circle-svg" style="stroke-dashoffset: calc(350 - (350 * ' . $db_percentage . ') / 100);">
                <circle cx="55" cy="55" r="55"></circle>
            </svg>
        </div>
            <div class="inner-prog-circle-4">
                <div class="text-prog-circle-4" style="font-size:24px;">' . $db_percentage . '%</div>
            </div>
            
            </div>
            <h4 class="text-center">' . $db_title . '</h4>
        </div>';
        }
        if ($atts['show_ub'] === 'true') {
            $data .= '<div class="box-col">
            <div class="prog-circle-4 ">
            <div class="svg-circle-4">
            <svg class="circle-svg" style="stroke-dashoffset: calc(350 - (350 * ' . $ub_percentage . ') / 100);">
                <circle cx="55" cy="55" r="55"></circle>
            </svg>
        </div>
            <div class="inner-prog-circle-4">
                <div class="text-prog-circle-4" style="font-size:24px;">' . $ub_percentage . '%</div>
            </div>
            
            </div>
            <h4 class="text-center">' . $ub_title . '</h4>
        </div>';
        }
        $data .= '</div>
        </div>
        </div>';
    }



    if ($ratingBoxThemeThree) {

        $data = '';
        $data = '<div class="progress-wid-hei bg-dark">
                    <div class="progress-outer-line  mt-5 pt-5 ">';
        if ($options['circle_heading']) {
            $data .= '<div class="circle-outer-line">
                        <h3>' . number_format($overall_rating, 2, '.', '') . '</h3>
                    </div>
                 ';
        }

        if ($atts['show_qb'] === 'true') {
            $data .= '<div>
            <p class="ml-2 text-white mb-0 mt-0">' . $qb_title . '</p>
            <div class="progress progress-3 progress4-cus ">
                <div style="width: ' . $qb_percentage . '%;" class="progress-bar progress-3-cus-1 " role="progressbar" aria-valuenow="' . $qb_percentage . '" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            </div>';
        }
        if ($atts['show_pb'] === 'true') {
            $data .= '<div>
            <p class="ml-2 text-white mb-0 mt-3">' . $pb_title . '</p>
                <div class="progress progress-3 progress4-cus"> 
            <div style="width: ' . $pb_percentage . '%;" class="progress-bar progress-3-cus-2" role="progressbar" aria-valuenow="' . $pb_percentage . '" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            </div>';
        }

        if ($atts['show_db'] === 'true') {
            $data .= '<div>
            <p class="ml-2 text-white mb-0 mt-3">' . $db_title . '</p>
        <div class="progress progress-3 progress4-cus">
            <div style="width: ' . $db_percentage . '%;" class="progress-bar progress-3-cus-3" role="progressbar" aria-valuenow="' . $db_percentage . '" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        </div>';
        }
        if ($atts['show_ub'] === 'true') {
            $data .= '<div>
            <p class="ml-2 mb-0 mt-3 text-white">' . $ub_title . '</p>
        <div class="progress progress-3 progress4-cus">
            <div style="width: ' . $ub_percentage . '%;" class="progress-bar progress-3-cus-4" role="progressbar" aria-valuenow="' . $ub_percentage . '" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        </div>';
        }
        $data .= '</div></div>';
    }

    if ($ratingBoxThemeTwo) {
        $data = '';
        $data = '<div class="progress-wid-hei">
                    <div class="progress-outer-line progress-2-outline mt-5 pt-5 mb-0 pb-0 ">';
        if ($options['circle_heading']) {
            $data .= '<div class="circle-outer-line progress-2-circle text-white">
                        <h3>' . number_format($overall_rating, 2, '.', '') . '</h3>
                    </div>
                 ';
        }

        if ($atts['show_qb'] === 'true') {
            $data .= '<div>
            <p class="ml-2 mb-0 mt-0">' . $qb_title . '</p>
            <div class="progress2-cus ">
            <div class="progress progress-2-cus">  
                <div style="width: ' . $qb_percentage . '%;" class="progress-bar progress-2-cus-1 " role="progressbar" aria-valuenow="' . $qb_percentage . '" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            </div>
            </div>';
        }
        if ($atts['show_pb'] === 'true') {
            $data .= '<div>
            <p class="ml-2 mb-0 mt-2">' . $pb_title . '</p>
                <div class="progress2-cus">
                <div class="progress progress-2-cus">  
            <div style="width: ' . $pb_percentage . '%;" class="progress-bar progress-2-cus-2 n-bg-f-1" role="progressbar" aria-valuenow="' . $pb_percentage . '" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            </div>
            </div>';
        }

        if ($atts['show_db'] === 'true') {
            $data .= '<div>
            <p class="ml-2 mb-0 mt-2">' . $db_title . '</p>
        <div class="progress2-cus">
        <div class="progress progress-2-cus">  
            <div style="width: ' . $db_percentage . '%;" class="progress-bar progress-2-cus-3 n-bg-f-1" role="progressbar" aria-valuenow="' . $db_percentage . '" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        </div>
        </div>';
        }
        if ($atts['show_ub'] === 'true') {
            $data .= '<div class="mb-4">
            <p class="ml-2 mb-0 mt-2">' . $ub_title . '</p>
        <div class="progress2-cus">
        <div class="progress progress-2-cus">
            <div style="width: ' . $ub_percentage . '%;" class="progress-bar progress-2-cus-4 n-bg-f-1" role="progressbar" aria-valuenow="' . $ub_percentage . '" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        </div>
        </div>';
        }
        $data .= '</div></div>';
    }

    if ($ratingBoxThemeOne) {
        $data = '';
        $data = '<div class="progress-wid-hei">
                 <div class="progress-outer-line progress-outer-color mt-5 pt-5 ">
                    ';
        if ($options['circle_heading']) {
            $data .= '<div class="circle-outer-line bg-circle-outline text-white">
                        <h3>' . number_format($overall_rating, 2, '.', '') . '</h3>
                    </div>
                 ';
        }

        if ($atts['show_qb'] === 'true') {
            $data .= '<div><p class="ml-2 mb-0 mt-0">' . $qb_title . '</p>
        <div class="progress progress-1 ">  
            <div style="width: ' . $qb_percentage . '%;" class="progress-bar progress-cus-1 n-bg-f-1" role="progressbar" aria-valuenow="' . $qb_percentage . '" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        </div>
        <div>';
        }
        if ($atts['show_pb'] === 'true') {
            $data .= '<p class="ml-2 mt-3 mb-0" >' . $pb_title . '</p>
        <div class="progress progress-1">  
            <div style="width: ' . $pb_percentage . '%;" class="progress-bar progress-cus-2 n-bg-f-2" role="progressbar" aria-valuenow="' . $pb_percentage . '" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        </div>
        <div>';
        }

        if ($atts['show_db'] === 'true') {
            $data .= '<p class="ml-2 mt-3 mb-0">' . $db_title . '</p>
        <div class="progress progress-1">  
            <div style="width: ' . $db_percentage . '%;" class="progress-bar progress-cus-3 n-bg-f-1" role="progressbar" aria-valuenow="' . $db_percentage . '" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        </div>
        <div>';
        }
        if ($atts['show_ub'] === 'true') {
            $data .= '<p class="ml-2 mt-3 mb-0">' . $ub_title . '</p>
        <div class="progress progress-1">  
            <div style="width: ' . $ub_percentage . '%;" class="progress-bar progress-cus-4 n-bg-f-3" role="progressbar" aria-valuenow="' . $ub_percentage . '" aria-valuemin="0" aria-valuemax="100"></div>
        </div>';
        }
        $data .= '</div>
        </div>
        </div>';
    }
    return $data;
}


function iskills_pros_and_cons($atts, $content = null)
{
    $atts = shortcode_atts([
        'pros' => '',
        'cons' => '',
        'show_title' => false,
        'title' => '',
        'show_button' => false,
        'link_text' => '',
        'link' => '',
        'pros_title' => __('Pros', 'iskills-pros-and-cons'),
        'cons_title' =>  __('Cons', 'iskills-pros-and-cons'),
        'button_icon' => '',
        'pros_icon' => '',
        'cons_icon' => '',
        'heading_pros_icon' => '',
        'heading_cons_icon' => '',
        'use_heading_icon' => '',
        'className' => '',
        'button_display_block' => false
    ], $atts, 'iskills_pros_and_cons');
    if (strlen($content) > 10) {
        $data = explode("###ER##GF####", do_shortcode($content), 2);
        
        $atts['pros'] = $data[0];
        $atts['cons'] = $data[1];
    }
    $options = get_option('iskills_pros_and_cons', iskills_pros_and_cons_options_default());
    // $icon =  isset( $atts['type'] ) && $atts['type'] == 'cons' ? $options['cons_icon'] : $options['pros_icon'];  
    // $useIcon = $options['use_icons'] == 1? "has-icon" : "no-icon"; 
    $prosIcon = $atts['pros_icon'] == '' ? $options['pros_icon'] : $atts['pros_icon'];
    $consIcon = $atts['cons_icon'] == '' ? $options['cons_icon'] : $atts['cons_icon'];
    $useHeadingIcon = $atts['use_heading_icon'] == '' ? $options['use_heading_icon'] : intval($atts['use_heading_icon']);
    // main wrapper classes
    $mwclasses = 'iskills-pros-cons-main-wrapper theme-' . $options['parent_theme'];

    $mwclasses .=  $atts['className'] != '' ? ' ' . $atts['className'] : '';
    $mwclasses .=  $atts['show_title'] == 'true' ? ' has-title' : ' no-title';
    $mwclasses .=  $atts['show_button'] == 'true' ? ' has-button' : ' no-button';
    $mwclasses .=  $options['use_space_between_column'] == 1 ? ' has-space-between-column' : ' no-space-between-column';
    $mwclasses .=  $options['use_outer_border'] == 1 ? ' has-outer-border' : ' no-outer-border';
    $mwclasses .=  $options['use_round_corner'] == 1 ? ' has-round-corner' : ' no-round-corner';
    $mwclasses .=  $useHeadingIcon == 1 ? ' has-heading-icon' : ' no-heading-icon';

    //  echo $prosIcon;
    //  echo $options['pros_icon'];
    //  echo $atts['pros_icon'];



    // $headingProsIcon = $atts['heading_pros_icon'] == '' ? $options['heading_pros_icon'] : $atts['heading_pros_icon'];
    // $headingConsIcon = $atts['heading_cons_icon'] == '' ? $options['heading_cons_icon'] : $atts['heading_cons_icon'];
    // $buttonIcon = $atts['button_icon'] == '' ? $options['button_icon'] : $atts['button_icon'];

    $data  = '<div class="iskills-pros-cons-icons ' . $mwclasses . '">';

    if ($atts['show_title'] == 'true') {
        $data .= '<h3 class="iskillspctitle">' . $atts['title']  . '</h3>';
    }

    $data .= '<div class="iskills-pros-cons-wrapper"><div class="iskills-pros">';
    if ($useHeadingIcon == 1) {
        $headingProsIcon = $atts['heading_pros_icon'] == '' ? $options['heading_pros_icon'] : $atts['heading_pros_icon'];
        $data .= "<div class='heading-icon'><i class='{$headingProsIcon}'></i></div>";
    }
    $data .= '<strong class="iskills-pros-title">' . $atts['pros_title']  . '</strong>';
    $data .= '<div class="section">';
    $data .= iskills_pros_cons_list($atts['pros'], $options['use_icons'], $prosIcon);
    $data .= '</div></div>';
    if ($options['use_space_between_column'] == 1) {
        $data .= '<div class="iskills-spacer"></div>';
    }
    $data .= '<div class="iskills-cons">';
    if ($useHeadingIcon == 1) {
        $headingConsIcon = $atts['heading_cons_icon'] == '' ? $options['heading_cons_icon'] : $atts['heading_cons_icon'];
        $data .= "<div class='heading-icon'><i class='{$headingConsIcon}'></i></div>";
    }
    $data .= '<strong class="iskills-cons-title">' . $atts['cons_title']  . '</strong>';
    $data .= '<div class="section">';
    $data .= iskills_pros_cons_list($atts['cons'], $options['use_icons'], $consIcon);
    $data .= '</div></div></div>';

    if ($atts['show_button'] == 'true') {
        // var_dump($atts['button_display_block']);
        if (substr($atts['link'], 0, 4) !== "http") {
            $atts['link'] = 'https://' . $atts['link'];
        }
        $data .= '<div class="iskills-button-wrapper' . ($atts['button_display_block'] == 'true' ? ' iskillspc-block' : '')  . '"><a class="' . $options['button_theme'] . '" href="' .  $atts['link'] . '" rel="nofollow" target="_blank"> <i class="' . ($atts['button_icon'] == '' ? $options['button_icon'] : $atts['button_icon']) . '"></i> <span class="iskillspc-btn-text">' .  $atts['link_text'] . '</span></a></div>';
    }
    $data .= '</div>';

    $useCustomThemeOne = false;
    if (isset($options['theme']) && $options['theme'] == 'iskillspc-theme-10') {
        $useCustomThemeOne = true;
    }

    $useCustomTheme2 = false;
    if (isset($options['theme']) && $options['theme'] == 'iskillspc-theme-11') {
        $useCustomTheme2 = true;
    }
    $useCustomTheme3 = false;
    if (isset($options['theme']) && $options['theme'] == 'iskillspc-theme-12') {
        $useCustomTheme3 = true;
    }

    $useCustomTheme4 = false;
    if (isset($options['theme']) && $options['theme'] == 'iskillspc-theme-13') {
        $useCustomTheme4 = true;
    }

    $useCustomTheme5 = false;
    if (isset($options['theme']) && $options['theme'] == 'iskillspc-theme-14') {
        $useCustomTheme5 = true;
    }

    $useCustomTheme6 = false;
    if (isset($options['theme']) && $options['theme'] == 'iskillspc-theme-15') {
        $useCustomTheme6 = true;
    }

    $useCustomTheme7 = false;
    if (isset($options['theme']) && $options['theme'] == 'iskillspc-theme-16') {
        $useCustomTheme7 = true;
    }

    $useCustomTheme8 = false;
    if (isset($options['theme']) && $options['theme'] == 'iskillspc-theme-17') {
        $useCustomTheme8 = true;
    }

    $useCustomTheme9 = false;
    if (isset($options['theme']) && $options['theme'] == 'iskillspc-theme-18') {
        $useCustomTheme9 = true;
    }

    $useCustomTheme10 = false;
    if (isset($options['theme']) && $options['theme'] == 'iskillspc-theme-19') {
        $useCustomTheme10 = true;
    }

    $useCustomTheme11 = false;
    if (isset($options['theme']) && $options['theme'] == 'iskillspc-theme-20') {
        $useCustomTheme11 = true;
    }

    $useCustomTheme12 = false;
    if (isset($options['theme']) && $options['theme'] == 'iskillspc-theme-21') {
        $useCustomTheme12 = true;
    }

    $useCustomTheme13 = false;
    if (isset($options['theme']) && $options['theme'] == 'iskillspc-theme-22') {
        $useCustomTheme13 = true;
    }

    $useCustomTheme14 = false;
    if (isset($options['theme']) && $options['theme'] == 'iskillspc-theme-23') {
        $useCustomTheme14 = true;
    }

    if ($useCustomTheme14) {
        $data = '<div class="iskills-pros-cons-wrapper"><div class="default-theme-14 iskills-pros-cons-icons ">
        <div class="container">';
        if ($atts['show_title'] == 'true') {
            $data .= '<div class="title text-center mb-4"><h3>' . $atts['title']  . '</h3> </div>';
        }
        $data .= '<div class="row">
                    <div class="col-md-6 col-sm-12 mb-4">			
                        <div class="card pros-card14">
                          <div class="card-header pros-header14 p-1 m-0">
                            <div class="heading14">';

        $data .= '<div class="pros-heading14">' . $atts['pros_title']  . '</div> </div> </div>';
        $data .= '<div class="pros-triangle-css8"></div>';
        $data .= '<span class="top-hr14"><hr></span><div class="card-body pros-body14 p-0 py-2 m-0">
				    <div class="pros-lists14">';
        $data .= iskills_pros_cons_list_custom_theme_14($atts['pros'], $options['use_icons'], $prosIcon, 'pros');
        $data .= '</div></div>
        
        </div></div>';
        if ($options['use_space_between_column'] == 1) {
            $data .= '<div class="iskills-spacer"></div>';
        }

        $data .= '<div class="col-md-6 col-sm-12 mb-4">			
                    <div class="card cons-card14">
                    <div class="card-header cons-header14 p-1 m-0">
                    <div class="heading14">';

        $data .= '<div class="cons-heading14">' . $atts['cons_title']  . '</div> </div> </div>';
        $data .= '<div class="cons-triangle-css8"></div>';
        $data .= '<span class="top-hr14"><hr></span><div class="card-body cons-body14 p-0 py-2 m-0">
                    <div class="cons-lists14">';
        $data .= iskills_pros_cons_list_custom_theme_14($atts['cons'], $options['use_icons'], $consIcon, 'cons');
        $data .= '</div></div>
        
        </div></div>';

        if ($atts['show_button'] == 'true') {
            // var_dump($atts['button_display_block']);
            if (substr($atts['link'], 0, 4) !== "http") {
                $atts['link'] = 'https://' . $atts['link'];
            }
            $data .= '<div class="btn btn-success' . ($atts['button_display_block'] == 'true' ? ' iskillspc-block' : '')  . '" style="margin-left:39% !important; margin-top:2% !important;"><a class="' . $options['button_theme'] . '" href="' .  $atts['link'] . '" rel="nofollow" target="_blank"> <i style="vertical-align:middle;" class="' . ($atts['button_icon'] == '' ? $options['button_icon'] : $atts['button_icon']) . '"></i> <span class="iskillspc-btn-text">' .  $atts['link_text'] . '</span></a></div>';
        }
        $data .= '</div></div></div></div> <h1> This is Heading </h1>';
    }

    if ($useCustomTheme13) {
        $data = '<div class="default-theme-13 iskills-pros-cons-icons ">
        <div class="container">';
        if ($atts['show_title'] == 'true') {
            $data .= '<div class="title text-center mb-4"><h3>' . $atts['title']  . '</h3> </div>';
        }
        $data .= '<div class="iskills-pros-cons-wrapper"><div class="row">
                    <div class="col-md-6 col-sm-12 mb-5 mt-3">			
                        <div class="card pros-card13">
                          <div class="card-header pros-header13 m-0">
                            <div class="heading13"></div> </div>';

        $data .= '<div class="card-body pros-body13 p-0 py-2 m-0">
                    <div class="pros-lists13">';
        $data .= '<div class="pros-heading13">' . $atts['pros_title']  . '</div> ';

        $data .= iskills_pros_cons_list_custom_theme_13($atts['pros'], $options['use_icons'], $prosIcon, 'pros');
        $data .= '</div></div>
        <div class="card-footer pros-footer13"> </div>
        </div></div>';
        if ($options['use_space_between_column'] == 1) {
            $data .= '<div class="iskills-spacer"></div>';
        }

        $data .= '<div class="col-md-6 col-sm-12 mb-5 mt-3">			
                    <div class="card cons-card13">
                    <div class="card-header cons-header13 m-0">
                    <div class="heading13"></div> </div>';


        $data .= '<div class="card-body cons-body13 p-0 py-2 m-0">
                    <div class="cons-lists13">';
        $data .= '<div class="cons-heading13">' . $atts['cons_title']  . '</div>';

        $data .= iskills_pros_cons_list_custom_theme_13($atts['cons'], $options['use_icons'], $consIcon, 'cons');
        $data .= '</div></div>
        <div class="card-footer cons-footer13"> </div>
        </div></div>';

        if ($atts['show_button'] == 'true') {
            // var_dump($atts['button_display_block']);
            if (substr($atts['link'], 0, 4) !== "http") {
                $atts['link'] = 'https://' . $atts['link'];
            }
            $data .= '<div class="btn btn-success' . ($atts['button_display_block'] == 'true' ? ' iskillspc-block' : '')  . '" style="margin-left:39% !important; margin-top:2% !important;"><a class="' . $options['button_theme'] . '" href="' .  $atts['link'] . '" rel="nofollow" target="_blank"> <i style="vertical-align:middle;" class="' . ($atts['button_icon'] == '' ? $options['button_icon'] : $atts['button_icon']) . '"></i> <span class="iskillspc-btn-text">' .  $atts['link_text'] . '</span></a></div>';
        }
        $data .= '</div></div></div></div>';
    }

    if ($useCustomTheme12) {
        $data = '<div class="default-theme-12 iskills-pros-cons-icons ">
        <div class="container">';
        if ($atts['show_title'] == 'true') {
            $data .= '<div class="title text-center mb-4"><h3>' . $atts['title']  . '</h3> </div>';
        }
        $data .= '<div class="row">
                    <div class="col-md-6 col-sm-12 mb-4">			
                        <div class="card pros-card12">
                          <div class="card-header pros-header12 p-1 m-0">
                            <div class="heading12">';

        $data .= '<div class="pros-heading12">' . $atts['pros_title']  . '</div> </div> </div>';

        $data .= '<div class="card-body pros-body12 p-0 py-2 m-0">
				    <div class="pros-lists12">';
        $data .= iskills_pros_cons_list_custom_theme_12($atts['pros'], $options['use_icons'], $prosIcon, 'pros');
        $data .= '</div></div>
        
        </div></div>';
        if ($options['use_space_between_column'] == 1) {
            $data .= '<div class="iskills-spacer"></div>';
        }

        $data .= '<div class="col-md-6 col-sm-12 mb-4">			
                    <div class="card cons-card12">
                    <div class="card-header cons-header12 p-1 m-0">
                    <div class="heading12">';

        $data .= '<div class="cons-heading12">' . $atts['cons_title']  . '</div> </div> </div>';

        $data .= '<div class="card-body cons-body12 p-0 py-2 m-0">
                    <div class="cons-lists12">';
        $data .= iskills_pros_cons_list_custom_theme_12($atts['cons'], $options['use_icons'], $consIcon, 'cons');
        $data .= '</div></div>
        
        </div></div>';

        if ($atts['show_button'] == 'true') {
            // var_dump($atts['button_display_block']);
            if (substr($atts['link'], 0, 4) !== "http") {
                $atts['link'] = 'https://' . $atts['link'];
            }
            $data .= '<div class="btn btn-success' . ($atts['button_display_block'] == 'true' ? ' iskillspc-block' : '')  . '" style="margin-left:39% !important; margin-top:2% !important;"><a class="' . $options['button_theme'] . '" href="' .  $atts['link'] . '" rel="nofollow" target="_blank"> <i style="vertical-align:middle;" class="' . ($atts['button_icon'] == '' ? $options['button_icon'] : $atts['button_icon']) . '"></i> <span class="iskillspc-btn-text">' .  $atts['link_text'] . '</span></a></div>';
        }
        $data .= '</div></div></div>';
    }

    if ($useCustomTheme11) {
        $data = '<div class="default-theme-11 iskills-pros-cons-icons ">
        <div class="container">';
        if ($atts['show_title'] == 'true') {
            $data .= '<div class="title text-center mb-4"><h3>' . $atts['title']  . '</h3> </div>';
        }
        $data .= '<div class="row">
                    <div class="col-md-6 col-sm-12 mb-5 mt-3">			
                        <div class="card pros-card11">
                          <div class="card-header pros-header11 p-1 m-0">
                            <div class="heading11"> <div class="pros-heading11">';
        if ($atts['heading_pros_icon']) {
            $headingProsIcon = $atts['heading_pros_icon'] == '' ? $options['heading_pros_icon'] : $atts['heading_pros_icon'];
            $data .= "<i class='{$headingProsIcon}' style='margin: 5px !important; vertical-align:middle !important; color:white'></i></div> </div> </div>";
        } else {
            $data .= "<i class='icon icon-thumbs-up' style='margin: 5px !important; vertical-align:middle !important; color:white'></i></div> </div> </div>";
        }
        $data .= '<div class="pros-triangle-css11"></div>';
        $data .= '<div class="card-body pros-body11 p-0 py-2 m-0">
        
                    <div class="pros-lists11">';
        $data .= '<h3>' . $atts['pros_title'] . '</h3>';
        $data .= iskills_pros_cons_list_custom_theme_11($atts['pros'], $options['use_icons'], $prosIcon, 'pros');
        $data .= '</div></div>
        </div></div>';
        if ($options['use_space_between_column'] == 1) {
            $data .= '<div class="iskills-spacer"></div>';
        }

        $data .= '<div class="col-md-6 col-sm-12 mb-5 mt-3">			
                    <div class="card cons-card11">
                    <div class="card-header cons-header11 p-1 m-0">
                    <div class="heading11"><div class="cons-heading11">';
        if ($atts['heading_cons_icon']) {
            $headingConsIcon = $atts['heading_cons_icon'] == '' ? $options['heading_cons_icon'] : $atts['heading_cons_icon'];
            $data .= "<i class='{$headingConsIcon}' style='margin: 5px !important; vertical-align:middle !important; color:white;'></i></div> </div> </div>";
        } else {
            $data .= "<i class='icon icon-thumbs-down' style='margin: 5px !important; vertical-align:middle !important; color:white'></i></div> </div> </div>";
        }
        $data .= '<div class="cons-triangle-css11"></div>';
        $data .= '<div class="card-body cons-body11 p-0 py-2 m-0">
                    <div class="cons-lists11">';
        $data .= '<h3>' . $atts['cons_title'] . '</h3>';
        $data .= iskills_pros_cons_list_custom_theme_11($atts['cons'], $options['use_icons'], $consIcon, 'cons');
        $data .= '</div></div>
        </div></div>';

        if ($atts['show_button'] == 'true') {
            // var_dump($atts['button_display_block']);
            if (substr($atts['link'], 0, 4) !== "http") {
                $atts['link'] = 'https://' . $atts['link'];
            }
            $data .= '<div class="btn btn-success' . ($atts['button_display_block'] == 'true' ? ' iskillspc-block' : '')  . '" style="margin-left:39% !important; margin-top:2% !important;"><a class="' . $options['button_theme'] . '" href="' .  $atts['link'] . '" rel="nofollow" target="_blank"> <i style="vertical-align:middle;" class="' . ($atts['button_icon'] == '' ? $options['button_icon'] : $atts['button_icon']) . '"></i> <span class="iskillspc-btn-text">' .  $atts['link_text'] . '</span></a></div>';
        }
        $data .= '</div></div></div>';
    }

    if ($useCustomTheme10) {
        $data = '<div class="default-theme-10 iskills-pros-cons-icons ">
        <div class="container">';
        if ($atts['show_title'] == 'true') {
            $data .= '<div class="title text-center mb-4"><h3>' . $atts['title']  . '</h3> </div>';
        }
        $data .= '<div class="row">
                    <div class="col-md-6 col-sm-12 mb-4">			
                        <div class="card pros-card10">
                          <div class="card-header pros-header10 p-1 m-0">
                            <div class="heading10">';

        $data .= '<div class="pros-heading10">' . $atts['pros_title']  . '</div> </div> </div>';
        $data .= '<div class="card-body pros-body10 p-0 py-2 m-0">
        
				    <div class="pros-lists10">';
        $data .= iskills_pros_cons_list_custom_theme_10($atts['pros'], $options['use_icons'], $prosIcon, 'pros');
        $data .= '</div></div>
        <div class="card-footer pros-footer10"> </div>
        </div></div>';
        if ($options['use_space_between_column'] == 1) {
            $data .= '<div class="iskills-spacer"></div>';
        }

        $data .= '<div class="col-md-6 col-sm-12 mb-4">			
                    <div class="card cons-card10">
                    <div class="card-header cons-header10 p-1 m-0">
                    <div class="heading10">';

        $data .= '<div class="cons-heading10">' . $atts['cons_title']  . '</div> </div> </div>';
        $data .= '<div class="card-body cons-body10 p-0 py-2 m-0">
                    <div class="cons-lists10">';
        $data .= iskills_pros_cons_list_custom_theme_10($atts['cons'], $options['use_icons'], $consIcon, 'cons');
        $data .= '</div></div>
        <div class="card-footer cons-footer10"> </div>
        </div></div>';

        if ($atts['show_button'] == 'true') {
            // var_dump($atts['button_display_block']);
            if (substr($atts['link'], 0, 4) !== "http") {
                $atts['link'] = 'https://' . $atts['link'];
            }
            $data .= '<div class="btn btn-success' . ($atts['button_display_block'] == 'true' ? ' iskillspc-block' : '')  . '" style="margin-left:39% !important; margin-top:2% !important;"><a class="' . $options['button_theme'] . '" href="' .  $atts['link'] . '" rel="nofollow" target="_blank"> <i style="vertical-align:middle;" class="' . ($atts['button_icon'] == '' ? $options['button_icon'] : $atts['button_icon']) . '"></i> <span class="iskillspc-btn-text">' .  $atts['link_text'] . '</span></a></div>';
        }
        $data .= '</div></div></div>';
    }

    if ($useCustomTheme9) {
        $data = '<div class="default-theme-9 iskills-pros-cons-icons ">
        <div class="container">';
        if ($atts['show_title'] == 'true') {
            $data .= '<div class="title text-center mb-4"><h3>' . $atts['title']  . '</h3> </div>';
        }
        $data .= '<div class="row">
                    <div class="col-md-6 col-sm-12 mb-4">			
                        <div class="card pros-card9">
                          <div class="card-header pros-header9 p-1 m-0">
                            <div class="heading9 text-center">';
        if ($atts['heading_pros_icon']) {
            $headingProsIcon = $atts['heading_pros_icon'] == '' ? $options['heading_pros_icon'] : $atts['heading_pros_icon'];
            $data .= "<i class='{$headingProsIcon} icon-9' style='margin: 5px !important; vertical-align:middle;'></i>";
        } else {
            $data .= "<i class='icon icon-thumbs-up icon-9' style='margin: 5px !important; vertical-align:middle;'></i>";
        }

        $data .= '<span class="pros-heading9">' . $atts['pros_title']  . '</div> </span> </div>';

        $data .= '<hr><div class="card-body pros-body9 p-0 py-2 m-0">
				    <div class="pros-lists9">';
        $data .= iskills_pros_cons_list_custom_theme_9($atts['pros'], $options['use_icons'], $prosIcon, 'pros');
        $data .= '</div></div>
        <div class="card-footer pros-footer9"> </div>
        </div></div>';
        if ($options['use_space_between_column'] == 1) {
            $data .= '<div class="iskills-spacer"></div>';
        }

        $data .= '<div class="col-md-6 col-sm-12 mb-4">			
                    <div class="card cons-card9">
                    <div class="card-header cons-header9 p-1 m-0">
                    <div class="heading9 text-center">';
        if ($atts['heading_cons_icon']) {
            $headingConsIcon = $atts['heading_cons_icon'] == '' ? $options['heading_cons_icon'] : $atts['heading_cons_icon'];
            $data .= "<i class='{$headingConsIcon}' style='margin: 5px !important; vertical-align:middle;'></i>";
        } else {
            $data .= "<i class='icon icon-thumbs-down' style='margin: 5px !important; vertical-align:middle;'></i>";
        }
        $data .= '<span class="cons-heading9">' . $atts['cons_title']  . '</span> </div> </div>';

        $data .= '<hr><div class="card-body cons-body9 p-0 py-2 m-0">
                    <div class="cons-lists9">';
        $data .= iskills_pros_cons_list_custom_theme_9($atts['cons'], $options['use_icons'], $consIcon, 'cons');
        $data .= '</div></div>
        <div class="card-footer cons-footer9"> </div>
        </div></div>';

        if ($atts['show_button'] == 'true') {
            // var_dump($atts['button_display_block']);
            if (substr($atts['link'], 0, 4) !== "http") {
                $atts['link'] = 'https://' . $atts['link'];
            }
            $data .= '<div class="btn btn-success' . ($atts['button_display_block'] == 'true' ? ' iskillspc-block' : '')  . '" style="margin-left:39% !important; margin-top:2% !important;"><a class="' . $options['button_theme'] . '" href="' .  $atts['link'] . '" rel="nofollow" target="_blank"> <i style="vertical-align:middle;" class="' . ($atts['button_icon'] == '' ? $options['button_icon'] : $atts['button_icon']) . '"></i> <span class="iskillspc-btn-text">' .  $atts['link_text'] . '</span></a></div>';
        }
        $data .= '</div></div></div>';
    }

    if ($useCustomTheme8) {
        $data = '<div class="default-theme-8 iskills-pros-cons-icons ">
        <div class="container">';
        if ($atts['show_title'] == 'true') {
            $data .= '<div class="title text-center mb-4"><h3>' . $atts['title']  . '</h3> </div>';
        }
        $data .= '<div class="row">
                    <div class="col-md-6 col-sm-12 mb-5 mt-4">			
                        <div class="card pros-card8">
                          <div class="card-header pros-header8 p-1 m-0">
                            <div class="heading8">';

        $data .= '<div class="pros-heading8">' . $atts['pros_title']  . '</div> </div> </div>';
        $data .= '<div class="pros-triangle-css8"></div>';
        $data .= '<div class="card-body pros-body8 p-0 py-2 m-0">
        
		<div class="pros-lists8"><p>This is some description of the pros of the pros</p><span class="pros-hr8"><hr></span>';
        $data .= iskills_pros_cons_list_custom_theme_8($atts['pros'], $options['use_icons'], $prosIcon, 'pros');
        $data .= '</div></div>
        </div></div>';
        if ($options['use_space_between_column'] == 1) {
            $data .= '<div class="iskills-spacer"></div>';
        }

        $data .= '<div class="col-md-6 col-sm-12 mb-5 mt-4">			
                        <div class="card cons-card8">
                          <div class="card-header cons-header8 p-1 m-0">
                            <div class="heading8">';

        $data .= '<div class="cons-heading8">' . $atts['cons_title']  . '</div> </div> </div>';
        $data .= '<div class="cons-triangle-css8"></div>';
        $data .= '<div class="card-body cons-body8 p-0 py-2 m-0">
        
				    <div class="cons-lists8"><p>This is some description of the cons of the cons</p><span class="cons-hr8"><hr></span>';
        $data .= iskills_pros_cons_list_custom_theme_8($atts['cons'], $options['use_icons'], $consIcon, 'cons');
        $data .= '</div></div>
        </div></div>';

        if ($atts['show_button'] == 'true') {
            // var_dump($atts['button_display_block']);
            if (substr($atts['link'], 0, 4) !== "http") {
                $atts['link'] = 'https://' . $atts['link'];
            }
            $data .= '<div class="btn btn-success' . ($atts['button_display_block'] == 'true' ? ' iskillspc-block' : '')  . '" style="margin-left:39% !important; margin-top:2% !important;"><a class="' . $options['button_theme'] . '" href="' .  $atts['link'] . '" rel="nofollow" target="_blank"> <i style="vertical-align:middle;" class="' . ($atts['button_icon'] == '' ? $options['button_icon'] : $atts['button_icon']) . '"></i> <span class="iskillspc-btn-text">' .  $atts['link_text'] . '</span></a></div>';
        }
        $data .= '</div></div></div>';
    }

    if ($useCustomTheme7) {
        $data = '<div class="default-theme-7 iskills-pros-cons-icons ">
        <div class="container">';
        if ($atts['show_title'] == 'true') {
            $data .= '<div class="title text-center mb-4"><h3>' . $atts['title']  . '</h3> </div>';
        }
        $data .= '<div class="row">
                    <div class="col-md-6 col-sm-12 mb-4">			
                        <div class="card pros-card7">
                          <div class="card-header pros-header7 p-1 m-0">
                            <div class="heading7">';

        $data .= '<div class="pros-heading7">' . $atts['pros_title']  . '</div> </div> </div>';

        $data .= '<hr><div class="card-body pros-body p-0 py-2 m-0">
				    <div class="pros-lists7">';
        $data .= iskills_pros_cons_list_custom_theme_7($atts['pros'], $options['use_icons'], $prosIcon, 'pros');
        $data .= '</div></div>
        <div class="card-footer pros-footer7"> </div>
        </div></div>';
        if ($options['use_space_between_column'] == 1) {
            $data .= '<div class="iskills-spacer"></div>';
        }

        $data .= '<div class="col-md-6 col-sm-12 mb-4">			
                    <div class="card cons-card7">
                    <div class="card-header cons-header7 p-1 m-0">
                    <div class="heading7">';

        $data .= '<div class="cons-heading7">' . $atts['cons_title']  . '</div> </div> </div>';

        $data .= '<hr><div class="card-body cons-body2 p-0 py-2 m-0">
                    <div class="cons-lists7">';
        $data .= iskills_pros_cons_list_custom_theme_7($atts['cons'], $options['use_icons'], $consIcon, 'cons');
        $data .= '</div></div>
        <div class="card-footer cons-footer7"> </div>
        </div></div>';

        if ($atts['show_button'] == 'true') {
            // var_dump($atts['button_display_block']);
            if (substr($atts['link'], 0, 4) !== "http") {
                $atts['link'] = 'https://' . $atts['link'];
            }
            $data .= '<div class="btn btn-success' . ($atts['button_display_block'] == 'true' ? ' iskillspc-block' : '')  . '" style="margin-left:39% !important; margin-top:2% !important;"><a class="' . $options['button_theme'] . '" href="' .  $atts['link'] . '" rel="nofollow" target="_blank"> <i style="vertical-align:middle;" class="' . ($atts['button_icon'] == '' ? $options['button_icon'] : $atts['button_icon']) . '"></i> <span class="iskillspc-btn-text">' .  $atts['link_text'] . '</span></a></div>';
        }
        $data .= '</div></div></div>';
    }

    if ($useCustomTheme6) {
        $data = '<div class="default-theme-5 iskills-pros-cons-icons ">
        <div class="container">';
        if ($atts['show_title'] == 'true') {
            $data .= '<div class="title text-center mb-4"><h3>' . $atts['title']  . '</h3> </div>';
        }
        $data .= '<div class="row">';
        $data .= '<div class="col-md-1 col-sm-1">
        
        <div class="pros-header5"><div class="pros-heading5">' . $atts['pros_title']  . '</div></div></div>';

        $data .= '<div class="col-md-5 col-sm-11 mb-4">';

        $data .= '<div id="pros-card5" class="card pros-card5"><div class="card-body pros-body5 p-0 py-2 m-0">
				    <div class="pros-lists5">';
        $data .= iskills_pros_cons_list_custom_theme_6($atts['pros'], $options['use_icons'], $prosIcon, 'pros');
        $data .= '</div></div></div></div>';
        if ($options['use_space_between_column'] == 1) {
            $data .= '<div class="iskills-spacer"></div>';
        }

        $data .= '<div class="col-md-1 col-sm-1"> <div class="cons-header5"><div class="cons-heading5">' . $atts['cons_title']  . '</div></div></div>';

        $data .= '<div class="col-md-5 col-sm-11 mb-4">';


        $data .= '<div class="card cons-card5">';

        $data .= '<div class="card-body cons-body5 p-0 py-2 m-0">
                    <div class="cons-lists5">';
        $data .= iskills_pros_cons_list_custom_theme_6($atts['cons'], $options['use_icons'], $consIcon, 'cons');
        $data .= '</div></div></div></div>';

        if ($atts['show_button'] == 'true') {
            // var_dump($atts['button_display_block']);
            if (substr($atts['link'], 0, 4) !== "http") {
                $atts['link'] = 'https://' . $atts['link'];
            }
            $data .= '<div class="btn btn-success' . ($atts['button_display_block'] == 'true' ? ' iskillspc-block' : '')  . '" style="margin-left:39% !important; margin-top:2% !important;"><a class="' . $options['button_theme'] . '" href="' .  $atts['link'] . '" rel="nofollow" target="_blank"> <i style="vertical-align:middle;" class="' . ($atts['button_icon'] == '' ? $options['button_icon'] : $atts['button_icon']) . '"></i> <span class="iskillspc-btn-text">' .  $atts['link_text'] . '</span></a></div>';
        }
        $data .= '</div></div></div>';
    }


    if ($useCustomTheme5) {
        $data = '<div class="default-theme-4 iskills-pros-cons-icons ">
        <div class="container">';
        if ($atts['show_title'] == 'true') {
            $data .= '<div class="title text-center mb-4"><h3>' . $atts['title']  . '</h3> </div>';
        }
        $data .= '<div class="iskills-pros-cons-wrapper"><div class="row">
                    <div class="col-md-6 col-sm-12">			
                        <div class="card pros-card4">
                          <div class="card-header pros-header4 p-1 m-0">
                            <div class="heading2">';

        $data .= '<div class="pros-heading4">' . $atts['pros_title']  . '</div> </div> </div>';
        $data .= '<div class="pros-circle-css4"></div>';
        if ($atts['heading_pros_icon']) {
            $headingProsIcon = $atts['heading_pros_icon'] == '' ? $options['heading_pros_icon'] : $atts['heading_pros_icon'];
            $data .= "<i class='{$headingProsIcon} fa-3x pros-icon4'></i>";
        } else {
            $data .= '<i class="icon icon-thumbs-s-up fa-3x pros-icon4"></i>';
        }
        $data .= '<h3 class="pros-heading4-1">' . $atts['pros_title']  . '</h3>';
        $data .= '<div class="card-body pros-body p-0 py-2 m-0">
				    <div class="pros-lists4">';
        $data .= iskills_pros_cons_list_custom_theme_5($atts['pros'], $options['use_icons'], $prosIcon, 'pros');
        $data .= '</div></div></div></div>';
        if ($options['use_space_between_column'] == 1) {
            $data .= '<div class="iskills-spacer"></div>';
        }

        $data .= '<div class="col-md-6 col-sm-12">			
                    <div class="card cons-card4">
                    <div class="card-header cons-header4 p-1 m-0">
                          <div class="heading4">';

        $data .= '<div class="cons-heading4">' . $atts['cons_title']  . '</div> </div> </div>';
        $data .= '<div class="cons-circle-css4"></div>';
        if ($atts['heading_cons_icon']) {
            $headingConsIcon = $atts['heading_cons_icon'] == '' ? $options['heading_cons_icon'] : $atts['heading_cons_icon'];
            $data .= "<i class='{$headingConsIcon} fa-3x cons-icon4'></i>";
        } else {
            $data .= '<i class="icon icon-thumbs-down fa-3x cons-icon4"></i>';
        }
        $data .= '<h3 class="cons-heading4-1">' . $atts['cons_title']  . '</h3>';
        $data .= '<div class="card-body cons-body4 p-0 py-2 m-0">
                    <div class="cons-lists4">';
        $data .= iskills_pros_cons_list_custom_theme_5($atts['cons'], $options['use_icons'], $consIcon, 'cons');
        $data .= '</div></div></div></div>';

        if ($atts['show_button'] == 'true') {
            // var_dump($atts['button_display_block']);
            if (substr($atts['link'], 0, 4) !== "http") {
                $atts['link'] = 'https://' . $atts['link'];
            }
            $data .= '<div class="btn btn-success' . ($atts['button_display_block'] == 'true' ? ' iskillspc-block' : '')  . '" style="margin-left:39% !important; margin-top:2% !important;"><a class="' . $options['button_theme'] . '" href="' .  $atts['link'] . '" rel="nofollow" target="_blank"> <i style="vertical-align:middle;" class="' . ($atts['button_icon'] == '' ? $options['button_icon'] : $atts['button_icon']) . '"></i> <span class="iskillspc-btn-text">' .  $atts['link_text'] . '</span></a></div>';
        }
        $data .= '</div></div></div>';
    }

    if ($useCustomTheme4) {
        $data = '<div class="default-theme-3 iskills-pros-cons-icons ">
        <div class="container">';

        if ($atts['show_title'] == 'true') {
            $data .= '<div class="title text-center mb-4"> <h3>' . $atts['title']  . '</h3> </div>';
        }
        $data .= '<div class="row">
                    <div class="col-md-6 col-sm-12">			
                        <div class="card pros-card3">
                            <div class="pros-lines3" style="width: 99%; height:99%; position:inherit; overflow: hidden;">
                                <div class="pros-vl-left3"></div>
                                <div class="pros-vl-right3"></div>
                          <div class="card-header pros-header3 p-1 m-0">
                            <div class="heading3">';
        if ($atts['heading_pros_icon']) {
            $headingProsIcon = $atts['heading_pros_icon'] == '' ? $options['heading_pros_icon'] : $atts['heading_pros_icon'];
            $data .= "<i class='{$headingProsIcon} fa-2x pros-icon2'  style='vertical-align:middle; margin-left:15px; color:#39b54a'></i>";
            $data .= '<span class="pros-heading3">' . $atts['pros_title']  . '</span> </div> </div>';
        } else {
            $data .= '<span class="pros-heading3 ml-5">' . $atts['pros_title']  . '</span> </div> </div>';
        }
        $data .= '<div class="card-body pros-body3 p-0 py-2 m-0">
				    <div class="pros-lists3">';
        $data .= iskills_pros_cons_list_custom_theme_4($atts['pros'], $options['use_icons'], $prosIcon, 'pros');
        $data .= '</div></div></div></div></div>';
        if ($options['use_space_between_column'] == 1) {
            $data .= '<div class="iskills-spacer"></div>';
        }

        $data .= '<div class="col-md-6 col-sm-12">			
                    <div class="card cons-card3">
                        <div class="pros-lines3" style="width: 99%; height:99%; position:inherit; overflow: hidden;">
                            <div class="cons-vl-left3"></div>
                            <div class="cons-vl-right3"></div>
                    <div class="card-header cons-header3 p-1 m-0">
                          <div class="heading3">';
        if ($atts['heading_cons_icon']) {
            $headingConsIcon = $atts['heading_cons_icon'] == '' ? $options['heading_cons_icon'] : $atts['heading_cons_icon'];
            $data .= "<i class='{$headingConsIcon} fa-2x cons-icon2' style='vertical-align:middle; margin-left:15px; color:#ff0000'></i>";
            $data .= '<span class="cons-heading3">' . $atts['cons_title']  . '</span> </div> </div>';
        } else {
            $data .= '<span class="cons-heading3 ml-5">' . $atts['cons_title']  . '</span> </div> </div>';
        }
        $data .= '<div class="card-body cons-body3 p-0 py-2 m-0">
                    <div class="cons-lists3">';
        $data .= iskills_pros_cons_list_custom_theme_4($atts['cons'], $options['use_icons'], $consIcon, 'cons');
        $data .= '</div></div></div></div></div>';

        if ($atts['show_button'] == 'true') {
            // var_dump($atts['button_display_block']);
            if (substr($atts['link'], 0, 4) !== "http") {
                $atts['link'] = 'https://' . $atts['link'];
            }
            $data .= '<div class="btn btn-success' . ($atts['button_display_block'] == 'true' ? ' iskillspc-block' : '')  . '" style="margin-left:39% !important; margin-top:2% !important;"><a class="' . $options['button_theme'] . '" href="' .  $atts['link'] . '" rel="nofollow" target="_blank"> <i style="vertical-align:middle;" class="' . ($atts['button_icon'] == '' ? $options['button_icon'] : $atts['button_icon']) . '"></i> <span class="iskillspc-btn-text">' .  $atts['link_text'] . '</span></a></div>';
        }
        $data .= '</div></div></div>';
    }


    if ($useCustomTheme3) {
        $data = '<div class="default-theme-2 iskills-pros-cons-icons ">
        <div class="container">';
        if ($atts['show_title'] == 'true') {
            $data .= '<div class="title text-center mb-4"><h3>' . $atts['title']  . '</h3> </div>';
        }
        $data .= '<div class="row">
                    <div class="col-md-6 col-sm-12">			
                        <div class="card pros-card2">
                          <div class="card-header pros-header2 p-1 m-0">
                            <div class="heading2">';

        $data .= '<div class="pros-heading2">' . $atts['pros_title']  . '</div> </div> </div>';
        $data .= '<div class="pros-circle-css2"></div>';
        if ($atts['heading_pros_icon']) {
            $headingProsIcon = $atts['heading_pros_icon'] == '' ? $options['heading_pros_icon'] : $atts['heading_pros_icon'];
            $data .= "<i class='{$headingProsIcon} fa-3x pros-icon2'></i>";
        } else {
            $data .= '<i class="icon icon-thumbs-s-up fa-3x pros-icon2"></i>';
        }
        $data .= '<div class="card-body pros-body p-0 py-2 m-0" style="z-index:1;">
				    <div class="pros-lists2">';
        $data .= iskills_pros_cons_list_custom_theme_3($atts['pros'], $options['use_icons'], $prosIcon, 'pros');
        $data .= '</div></div></div></div>';
        if ($options['use_space_between_column'] == 1) {
            $data .= '<div class="iskills-spacer"></div>';
        }

        $data .= '<div class="col-md-6 col-sm-12">			
                    <div class="card cons-card2">
                    <div class="card-header cons-header2 p-1 m-0">
                          <div class="heading2">';

        $data .= '<div class="cons-heading2">' . $atts['cons_title']  . '</div> </div> </div>';
        $data .= '<div class="cons-circle-css2"></div>';
        if ($atts['heading_cons_icon']) {
            $headingConsIcon = $atts['heading_cons_icon'] == '' ? $options['heading_cons_icon'] : $atts['heading_cons_icon'];
            $data .= "<i class='{$headingConsIcon} fa-3x cons-icon2'></i>";
        } else {
            $data .= '<i class="icon icon-thumbs-up fa-3x cons-icon2"></i>';
        }
        $data .= '<div class="card-body cons-body2 p-0 py-2 m-0" style="z-index:1;">
                    <div class="cons-lists2">';
        $data .= iskills_pros_cons_list_custom_theme_3($atts['cons'], $options['use_icons'], $consIcon, 'cons');
        $data .= '</div></div></div></div>';

        if ($atts['show_button'] == 'true') {
            // var_dump($atts['button_display_block']);
            if (substr($atts['link'], 0, 4) !== "http") {
                $atts['link'] = 'https://' . $atts['link'];
            }
            $data .= '<div class="btn btn-success' . ($atts['button_display_block'] == 'true' ? ' iskillspc-block' : '')  . '" style="margin-left:39% !important; margin-top:2% !important;"><a class="' . $options['button_theme'] . '" href="' .  $atts['link'] . '" rel="nofollow" target="_blank"> <i style="vertical-align:middle;" class="' . ($atts['button_icon'] == '' ? $options['button_icon'] : $atts['button_icon']) . '"></i> <span class="iskillspc-btn-text">' .  $atts['link_text'] . '</span></a></div>';
        }
        $data .= '</div></div></div>';
    }

    if ($useCustomTheme2) {
        $data = '<div class="default-theme-1 iskills-pros-cons-icons ">
                    <div class="container">';
        if ($atts['show_title'] == 'true') {
            $data .= '<div class="title text-center mb-4"><h3>' . $atts['title']  . '</h3> </div>';
        }
        $data .= '<div class="row pros_corn">
            <div class="col-md-6 col-sm-12">			
				<div class="card pros-card">
				  <div class="card-header pros-header p-1 m-0">
				    <div class="heading text-center">';
        if ($atts['heading_pros_icon']) {
            $headingProsIcon = $atts['heading_pros_icon'] == '' ? $options['heading_pros_icon'] : $atts['heading_pros_icon'];
            $data .= "<i class='{$headingProsIcon}' style='margin: 5px !important; vertical-align:middle !important; font-size:30px; color:white'></i>";
        }
        $data .= '<span style="vertical-align:middle !important;" class="pros-heading">' . $atts['pros_title']  . '</span> </div> </div>';
        $data .= '<div class="pros-triangle-css"></div> <div class="card-body pros-body p-0 py-2 m-0">
            <div class="pros-lists">';
        $data .= iskills_pros_cons_list_custom_theme_2($atts['pros'], $options['use_icons'], $prosIcon, 'pros');
        $data .= '</div></div></div></div>';
        if ($options['use_space_between_column'] == 1) {
            $data .= '<div class="iskills-spacer"></div>';
        }

        $data .= '<div class="col-md-6 col-sm-12">			
            <div class="card cons-card">
				<div class="card-header cons-header p-1 m-0">
				  	<div class="heading text-center">';
        if ($atts['heading_cons_icon']) {
            $headingConsIcon = $atts['heading_cons_icon'] == '' ? $options['heading_cons_icon'] : $atts['heading_cons_icon'];
            $data .= "<i class='{$headingConsIcon}' style='margin: 5px !important; vertical-align:middle !important; font-size:30px; color:white;'></i>";
        }
        $data .= '<span class="cons-heading" style="vertical-align:middle !important;">' . $atts['cons_title']  . '</span> </div> </div>';
        $data .= '<div class="cons-triangle-css"></div>
            <div class="card-body p-0 py-2 m-0">
                <div class="cons-lists">';
        $data .= iskills_pros_cons_list_custom_theme_2($atts['cons'], $options['use_icons'], $consIcon, 'cons');
        $data .= '</div></div></div></div>';

        if ($atts['show_button'] == 'true') {
            // var_dump($atts['button_display_block']);
            if (substr($atts['link'], 0, 4) !== "http") {
                $atts['link'] = 'https://' . $atts['link'];
            }
            $data .= '<div class="btn btn-success' . ($atts['button_display_block'] == 'true' ? ' iskillspc-block' : '')  . '" style="margin-left:39% !important; margin-top:2% !important;"><a class="' . $options['button_theme'] . '" href="' .  $atts['link'] . '" rel="nofollow" target="_blank"> <i style="vertical-align:middle;" class="' . ($atts['button_icon'] == '' ? $options['button_icon'] : $atts['button_icon']) . '"></i> <span class="iskillspc-btn-text">' .  $atts['link_text'] . '</span></a></div>';
        }
        $data .= '</div></div></div></div></div></div></div> </div>';
    }

    if ($useCustomThemeOne) {
        $data = '<div class="default-theme-free iskills-pros-cons-icons ">
                <div class="container"><div class="iskills-pros-cons-wrapper">';
        if ($atts['show_title'] == 'true') {
            $data .= '<div class="title text-center mb-4"><h3>' . $atts['title']  . '</h3> </div>';
        }
        $data .= '<div class="row">
                <div class="col-md-6 col-sm-12 mb-2">			
                    <div class="card pros-card">
                    <div class="card-header pros-header p-1 m-0">
                        <div class="heading text-center">';
        if ($atts['heading_pros_icon']) {
            $headingProsIcon = $atts['heading_pros_icon'] == '' ? $options['heading_pros_icon'] : $atts['heading_pros_icon'];
            $data .= "<i class='{$headingProsIcon}' style='margin: 5px !important; vertical-align:middle;'></i>";
        }
        $data .= '<strong class="pros-heading">' . $atts['pros_title']  . '</strong> </div> </div>';
        $data .= '<div class="card-body pros-body p-0 py-2 m-0"> <div class="pros-lists">';
        $data .= iskills_pros_cons_list_custom($atts['pros'], $options['use_icons'], $prosIcon, 'pros');
        $data .= '</div></div></div></div>';
        if ($options['use_space_between_column'] == 1) {
            $data .= '<div class="iskills-spacer"></div>';
        }

        $data .= '<div class="col-md-6 col-sm-12 mb-2">			
        <div class="card cons-card">
        <div class="card-header cons-header p-1 m-0">
              <div class="heading text-center">';
        if ($atts['heading_cons_icon']) {
            $headingConsIcon = $atts['heading_cons_icon'] == '' ? $options['heading_cons_icon'] : $atts['heading_cons_icon'];
            $data .= "<i class='{$headingConsIcon}' style='margin:3px !important; vertical-align:middle;'></i>";
        }
        $data .= '<strong class="cons-heading">' . $atts['cons_title']  . '</strong> </div> </div>';
        $data .= '<div class="card-body cons-body p-0 py-2 m-0"> <div class="cons-lists">';
        $data .= iskills_pros_cons_list_custom($atts['cons'], $options['use_icons'], $consIcon, 'cons');
        $data .= '</div></div></div></div>';

        if ($atts['show_button'] == 'true') {
            // var_dump($atts['button_display_block']);
            if (substr($atts['link'], 0, 4) !== "http") {
                $atts['link'] = 'https://' . $atts['link'];
            }
            $data .= '<div class="btn btn-success' . ($atts['button_display_block'] == 'true' ? ' iskillspc-block' : '')  . '" style="margin-left:39% !important; margin-top:2% !important;"><a class="' . $options['button_theme'] . '" href="' .  $atts['link'] . '" rel="nofollow" target="_blank"> <i style="vertical-align:middle;" class="' . ($atts['button_icon'] == '' ? $options['button_icon'] : $atts['button_icon']) . '"></i> <span class="iskillspc-btn-text">' .  $atts['link_text'] . '</span></a></div>';
        }
        $data .= '</div></div></div></div></div></div></div></div></div>';
    }

    return $data;

    //return "<{$atts['heading']}>{$atts['title']}</{$atts['heading']}>";
}
add_shortcode('iskills_pros_and_cons', 'iskills_pros_and_cons');
add_shortcode('iskills_rating_box', 'iskills_rating_box');
add_shortcode('iskills_price_box', 'iskills_price_box');
add_shortcode('iskills_comparison_table', 'iskills_comparison_table');

function iskills_pros_cons_list_custom_theme_14($data, $useIcon, $icon, $pros_cons)
{
    $color = 'black';
    if ($pros_cons == 'pros') {
        $color = '#27ae60';
    } else {
        $color = '#e74c3c';
    }

    $useIconClass = $useIcon == 1 ? "has-icon" : "no-icon";

    $lines =  preg_split('/\r\n|\r|\n|<br[^>]*>/', $data);
    if ($icon != '') {
        if ($useIconClass === 'has-icon') {
            $list = "<ul class='{$useIconClass}' style='list-style-type: none; margin-bottom:20px;'>";
        }
    } else {
        $list = "<ol class='{$useIconClass}'>";
    }

    foreach ($lines as $key => $value) {
        if (strlen($value) > 0) {
            $list .= "<li style='vertical-align:middle !important;'>" . ($useIcon == 1 ? "<i  class='{$icon} mr-1' style='color:{$color}; vertical-align:middle !important;'></i>" : "") . $value . "</li>";
        }
    }
    if ($useIconClass === 'has-icon')
        $list .= '</ul><span class="bottom-hr14"><hr></span>';
    else
        $list .= '</ol><span class="bottom-hr14"><hr></span>';

    return    $list;
}

function iskills_pros_cons_list_custom_theme_13($data, $useIcon, $icon, $pros_cons)
{
    $color = 'black';
    if ($pros_cons == 'pros') {
        $color = '#27ae60';
    } else {
        $color = '#e74c3c';
    }

    $useIconClass = $useIcon == 1 ? "has-icon" : "no-icon";

    $lines =  preg_split('/\r\n|\r|\n|<br[^>]*>/', $data);
    if ($icon != '') {
        if ($useIconClass === 'has-icon') {
            $list = "<ul class='{$useIconClass}' style='list-style-type: none;'>";
        }
    } else {
        $list = "<ol class='{$useIconClass}'>";
    }

    foreach ($lines as $key => $value) {
        if (strlen($value) > 0) {
            $list .= "<li style='vertical-align:middle !important;'>" . ($useIcon == 1 ? "<i  class='{$icon} mr-2' style='color:{$color}; vertical-align:middle !important;'></i>" : "") . $value . "</li>";
        }
    }
    if ($useIconClass === 'has-icon')
        $list .= '</ul>';
    else
        $list .= '</ol>';

    return    $list;
}


function iskills_pros_cons_list_custom_theme_12($data, $useIcon, $icon, $pros_cons)
{
    $color = 'black';
    if ($pros_cons == 'pros') {
        $color = '#27ae60';
    } else {
        $color = '#e74c3c';
    }

    $useIconClass = $useIcon == 1 ? "has-icon" : "no-icon";

    $lines =  preg_split('/\r\n|\r|\n|<br[^>]*>/', $data);
    if ($icon != '') {
        if ($useIconClass === 'has-icon') {
            $list = "<ul class='{$useIconClass}' style='list-style-type: none;'>";
        }
    } else {
        $list = "<ol class='{$useIconClass}'>";
    }

    foreach ($lines as $key => $value) {
        if (strlen($value) > 0) {
            $list .= "<li style='vertical-align:middle !important;'>" . ($useIcon == 1 ? "<i  class='{$icon} mr-2' style='color:{$color}; vertical-align:middle !important;'></i>" : "") . $value . "</li>";
        }
    }
    if ($useIconClass === 'has-icon')
        $list .= '</ul>';
    else
        $list .= '</ol>';

    return    $list;
}

function iskills_pros_cons_list_custom_theme_11($data, $useIcon, $icon, $pros_cons)
{
    $color = 'black';
    if ($pros_cons == 'pros') {
        $color = '#39B54A';
    } else {
        $color = '#e74c3c';
    }

    $useIconClass = $useIcon == 1 ? "has-icon" : "no-icon";

    $lines =  preg_split('/\r\n|\r|\n|<br[^>]*>/', $data);
    if ($icon != '') {
        if ($useIconClass === 'has-icon') {
            $list = "<ul class='{$useIconClass}' style='list-style-type: none;'>";
        }
    } else {
        $list = "<ol class='{$useIconClass}'>";
    }

    foreach ($lines as $key => $value) {
        if (strlen($value) > 0) {
            $list .= "<li style='vertical-align:middle !important;'>" . ($useIcon == 1 ? "<i  class='{$icon} mr-2' style='color:{$color}; vertical-align:middle !important;'></i>" : "") . $value . "</li>";
        }
    }
    if ($useIconClass === 'has-icon')
        $list .= '</ul>';
    else
        $list .= '</ol>';

    return    $list;
}

function iskills_pros_cons_list_custom_theme_10($data, $useIcon, $icon, $pros_cons)
{
    $color = 'black';
    if ($pros_cons == 'pros') {
        $color = '#39B54A';
    } else {
        $color = '#e74c3c';
    }

    $useIconClass = $useIcon == 1 ? "has-icon" : "no-icon";

    $lines =  preg_split('/\r\n|\r|\n|<br[^>]*>/', $data);
    if ($icon != '') {
        if ($useIconClass === 'has-icon') {
            $list = "<ul class='{$useIconClass}' style='list-style-type: none;'>";
        }
    } else {
        $list = "<ol class='{$useIconClass}'>";
    }

    foreach ($lines as $key => $value) {
        if (strlen($value) > 0) {
            $list .= "<li style='vertical-align:middle !important;'>" . ($useIcon == 1 ? "<i  class='{$icon} mr-2' style='color:{$color}; vertical-align:middle !important;'></i>" : "") . $value . "<span class='lists-hr10'> </li><hr>";
        }
    }
    if ($useIconClass === 'has-icon')
        $list .= '</ul>';
    else
        $list .= '</ol>';

    return    $list;
}


function iskills_pros_cons_list_custom_theme_9($data, $useIcon, $icon, $pros_cons)
{
    $color = 'black';
    if ($pros_cons == 'pros') {
        $color = '#27ae60';
    } else {
        $color = '#e74c3c';
    }

    $useIconClass = $useIcon == 1 ? "has-icon" : "no-icon";

    $lines =  preg_split('/\r\n|\r|\n|<br[^>]*>/', $data);
    if ($icon != '') {
        if ($useIconClass === 'has-icon') {
            $list = "<ul class='{$useIconClass}' style='list-style-type: none;'>";
        }
    } else {
        $list = "<ol class='{$useIconClass}'>";
    }

    foreach ($lines as $key => $value) {
        if (strlen($value) > 0) {
            $list .= "<li style='vertical-align:middle !important;'>" . ($useIcon == 1 ? "<i  class='{$icon} mr-2' style='color:{$color}; vertical-align:middle !important;'></i>" : "") . $value . "</li>";
        }
    }
    if ($useIconClass === 'has-icon')
        $list .= '</ul>';
    else
        $list .= '</ol>';

    return    $list;
}

function iskills_pros_cons_list_custom_theme_8($data, $useIcon, $icon, $pros_cons)
{
    $color = 'black';
    if ($pros_cons == 'pros') {
        $color = '#39B54A';
    } else {
        $color = '#e74c3c';
    }

    $useIconClass = $useIcon == 1 ? "has-icon" : "no-icon";

    $lines =  preg_split('/\r\n|\r|\n|<br[^>]*>/', $data);
    if ($icon != '') {
        if ($useIconClass === 'has-icon') {
            $list = "<ul class='{$useIconClass}' style='list-style-type: none;'>";
        }
    } else {
        $list = "<ol class='{$useIconClass}'>";
    }

    foreach ($lines as $key => $value) {
        if (strlen($value) > 0) {
            $list .= "<li style='vertical-align:middle !important;'>" . ($useIcon == 1 ? "<i  class='{$icon} mr-2' style='color:{$color}; vertical-align:middle !important;'></i>" : "") . $value . "</li><span class='li-hr8'><hr></span>";
        }
    }
    if ($useIconClass === 'has-icon')
        $list .= '</ul>';
    else
        $list .= '</ol>';

    return    $list;
}


function iskills_pros_cons_list_custom_theme_7($data, $useIcon, $icon, $pros_cons)
{
    $color = 'black';
    if ($pros_cons == 'pros') {
        $color = '#27ae60';
    } else {
        $color = '#e74c3c';
    }

    $useIconClass = $useIcon == 1 ? "has-icon" : "no-icon";

    $lines =  preg_split('/\r\n|\r|\n|<br[^>]*>/', $data);
    if ($icon != '') {
        if ($useIconClass === 'has-icon') {
            $list = "<ul class='{$useIconClass}' style='list-style-type: none;'>";
        }
    } else {
        $list = "<ol class='{$useIconClass}'>";
    }

    foreach ($lines as $key => $value) {
        if (strlen($value) > 0) {
            $list .= "<li style='vertical-align:middle !important;'>" . ($useIcon == 1 ? "<i  class='{$icon} mr-2' style='color:{$color}; vertical-align:middle !important;'></i>" : "") . $value . "</li>";
        }
    }
    if ($useIconClass === 'has-icon')
        $list .= '</ul>';
    else
        $list .= '</ol>';

    return    $list;
}

function iskills_pros_cons_list_custom_theme_6($data, $useIcon, $icon, $pros_cons)
{
    $color = 'black';
    if ($pros_cons == 'pros') {
        $color = '#27ae60';
    } else {
        $color = '#e74c3c';
    }

    $useIconClass = $useIcon == 1 ? "has-icon" : "no-icon";

    $lines =  preg_split('/\r\n|\r|\n|<br[^>]*>/', $data);
    if ($icon != '') {
        if ($useIconClass === 'has-icon') {
            $list = "<ul class='{$useIconClass}' style='list-style-type: none;'>";
        }
    } else {
        $list = "<ol class='{$useIconClass}'>";
    }

    foreach ($lines as $key => $value) {
        if (strlen($value) > 0) {
            $list .= "<li style='vertical-align:middle !important;'>" . ($useIcon == 1 ? "<i  class='{$icon}' style='color:{$color}; vertical-align:middle !important;'></i>" : "") . $value . "</li>";
        }
    }
    if ($useIconClass === 'has-icon')
        $list .= '</ul>';
    else
        $list .= '</ol>';

    return    $list;
}

function iskills_pros_cons_list_custom_theme_5($data, $useIcon, $icon, $pros_cons)
{
    $color = 'black';
    if ($pros_cons == 'pros') {
        $color = '#27ae60';
    } else {
        $color = '#e74c3c';
    }

    $useIconClass = $useIcon == 1 ? "has-icon" : "no-icon";

    $lines =  preg_split('/\r\n|\r|\n|<br[^>]*>/', $data);
    if ($icon != '') {
        if ($useIconClass === 'has-icon') {
            $list = "<ul class='{$useIconClass}' style='list-style-type: none;'>";
        }
    } else {
        $list = "<ol class='{$useIconClass}'>";
    }

    foreach ($lines as $key => $value) {
        if (strlen($value) > 0) {
            $list .= "<li class='py-1' style='vertical-align:middle !important;'>" . ($useIcon == 1 ? "<i  class='{$icon} mr-2' style='color:{$color}; vertical-align:middle !important;'></i>" : "") . $value . "</li>";
        }
    }
    if ($useIconClass === 'has-icon')
        $list .= '</ul>';
    else
        $list .= '</ol>';

    return    $list;
}


function iskills_pros_cons_list_custom_theme_4($data, $useIcon, $icon, $pros_cons)
{
    $color = 'black';
    if ($pros_cons == 'pros') {
        $color = '#27ae60';
    } else {
        $color = '#e74c3c';
    }
    if ($icon == '') {

        if ($pros_cons == 'pros') {
            $icon = "fa fa-plus-circle";
        } else {
            $icon = "fa fa-minus-circle";
        }
    }
    $useIconClass = $useIcon == 1 ? "has-icon" : "no-icon";

    $lines =  preg_split('/\r\n|\r|\n|<br[^>]*>/', $data);
    if ($icon != '') {
        if ($useIconClass === 'has-icon') {
            if ($pros_cons == 'pros') {
                $list = "<ul class='{$useIconClass} pros-ol3' style='list-style-type: none;'>
            ";
                $list .= "<div class='pros-li3' style='width: 100%; height:100%; position: relative; overflow-y: hidden;'>";
            } else {
                $list = "<ul class='{$useIconClass} cons-ol3' style='list-style-type: none; padding-left: 2.3em !important;'>
                ";
                $list .= "<div class='cons-li3' style='width: 100%; height:100%; position: relative; overflow-y: hidden;'>";
            }
        }
    } else {
        $list = "<ol class='{$useIconClass} pros-ol3'> ";
        if ($pros_cons == 'pros') {
            $list .= "<div class='pros-li3' style='width: 100%; height:100%; position: relative;>";
        } else {
            $list .= "<div class='cons-li3' style='width: 100%; height:100%; position: relative; '>";
        }
    }

    foreach ($lines as $key => $value) {
        if (strlen($value) > 0) {
            if ($icon == 'fa fa-plus-circle' || $icon == 'fa fa-minus-circle') {
                $list .= "<li class='py-1'>" . ($useIcon == 1 ? "<i  class='{$icon} mr-3' style='color:{$color}'></i>" : "") . $value . "</li>";
            } else {
                $list .= "<li class='py-1'>" . ($useIcon == 1 ? "<i  class='{$icon} mr-3' style='color:{$color}'></i>" : "") . $value . "</li>";
            }
        }
    }
    if ($useIconClass === 'has-icon')
        $list .= '</div></ul>';
    else
        $list .= '</div></ol>';

    return    $list;
}


function iskills_pros_cons_list_custom_theme_3($data, $useIcon, $icon, $pros_cons)
{
    $color = 'black';
    if ($pros_cons == 'pros') {
        $color = '#27ae60';
    } else {
        $color = '#e74c3c';
    }

    $useIconClass = $useIcon == 1 ? "has-icon" : "no-icon";

    $lines =  preg_split('/\r\n|\r|\n|<br[^>]*>/', $data);
    if ($icon != '') {
        if ($useIconClass === 'has-icon') {
            $list = "<ul class='{$useIconClass}' style='list-style-type: none;'>";
        }
    } else {
        $list = "<ol class='{$useIconClass}'>";
    }

    foreach ($lines as $key => $value) {
        if (strlen($value) > 0) {
            $list .= "<li style='vertical-align:middle !important;'>" . ($useIcon == 1 ? "<i  class='{$icon} mr-2' style='color:{$color}; vertical-align:middle !important;'></i>" : "") . $value . "</li>";
        }
    }
    if ($useIconClass === 'has-icon')
        $list .= '</ul>';
    else
        $list .= '</ol>';

    return    $list;
}


function iskills_pros_cons_list_custom_theme_2($data, $useIcon, $icon, $pros_cons)
{
    $color = 'black';
    if ($pros_cons == 'pros') {
        $color = '#27ae60';
    } else {
        $color = '#e74c3c';
    }
    // echo '<pre>'; 
    //  print_r($data); 
    //  echo '</pre>';
    $useIconClass = $useIcon == 1 ? "has-icon" : "no-icon";

    // $lines = explode("\n", $data);
    //  $lines = explode("\n", $data);
    $lines =  preg_split('/\r\n|\r|\n|<br[^>]*>/', $data);
    if ($icon != '') {
        if ($useIconClass === 'has-icon') {
            $list = "<ul class='{$useIconClass}' style='list-style-type: none;'>";
        }
    } else {
        $list = "<ol class='{$useIconClass}'>";
    }

    foreach ($lines as $key => $value) {
        if (strlen($value) > 0) {
            if ($pros_cons == 'pros') {
                if ($icon != '') {
                    $list .= "<li style='vertical-align:middle !important; margin-top: 5%;
                    margin-right: 7%;
                    padding-left: 4%;
                    list-style: outside none none !important;
                    position: relative;'>" . ($useIcon == 1 ? "<i  class='{$icon} mr-2' style='vertical-align:middle !important; color:{$color}; display: inline !important;
                    position: absolute;
                    margin-left: -28px !important;'></i>" : "") . $value . "</li>";
                } else {
                    $list .= '<li style="vertical-align:middle !important;"><span class="icon-icon2" style="vertical-align:middle !important;"><span class="path1"></span><span class="path4"></span></span>'  . $value . '</li>';
                }
            } else {
                if ($icon != '') {
                    $list .= "<li style='vertical-align:middle !important; margin-top: 5%;
                    margin-right: 7%;
                    padding-left: 4%;
                    list-style: outside none none !important;
                    position: relative;'>" . ($useIcon == 1 ? "<i  class='{$icon} mr-2' style='vertical-align:middle !important; color:{$color}; display: inline !important;
                    position: absolute;
                    margin-left: -28px !important;'></i>" : "") . $value . "</li>";
                } else {
                    $list .= '<li style="vertical-align:middle !important;"><span class="icon-cross" style="vertical-align:middle !important;"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>'  . $value . '</li>';
                }
            }
        }
    }
    if ($useIconClass === 'has-icon')
        $list .= '</ul>';
    else
        $list .= '</ol>';

    return $list;
}


function iskills_pros_cons_list_custom($data, $useIcon, $icon, $pros_cons)
{
    $color = 'black';
    if ($pros_cons == 'pros') {
        $color = '#27ae60';
    } else {
        $color = '#e74c3c';
    }
    // echo '<pre>'; 
    //  print_r($data); 
    //  echo '</pre>';
    $useIconClass = $useIcon == 1 ? "has-icon" : "no-icon";

    // $lines = explode("\n", $data);
    //  $lines = explode("\n", $data);
    $lines =  preg_split('/\r\n|\r|\n|<br[^>]*>/', $data);
    if ($icon != '') {
        if ($useIconClass === 'has-icon') {
            $list = "<ul class='{$useIconClass}' style='list-style-type: none;'>";
        }
    } else {
        $list = "<ol class='{$useIconClass}'>";
    }

    foreach ($lines as $key => $value) {
        if (strlen($value) > 0) {
            $list .= "<li style='vertical-align:middle !important;'>" . ($useIcon == 1 ? "<i  class='{$icon} ' style='vertical-align:middle !important; color:{$color}'></i>  " : "") . $value . "</li>";
        }
    }
    if ($useIconClass === 'has-icon')
        $list .= '</ul>';
    else
        $list .= '</ol>';

    return    $list;
}

function iskills_pros_cons_list($data, $useIcon, $icon)
{
    // echo '<pre>'; 
    //  print_r($data); 
    //  echo '</pre>';
    $useIconClass = $useIcon == 1 ? "has-icon" : "no-icon";
    // $lines = explode("\n", $data);
    //  $lines = explode("\n", $data);
    $lines =  preg_split('/\r\n|\r|\n|<br[^>]*>/', $data);
    $list = "<ul class='{$useIconClass}'>";
    foreach ($lines as $key => $value) {
        if (strlen($value) > 0) {
            $list .= "<li>" . ($useIcon == 1 ? "<i class='{$icon}'></i>" : "") . $value . "</li>";
        }
    }
    return    $list . '</ul>';
}

add_shortcode('iskillspc', 'iskills_pros_and_cons');
add_shortcode('iskillsrb', 'iskills_rating_box');
add_shortcode('iskillspb', 'iskills_price_box');
add_shortcode('iskillsct', 'iskills_comparison_table');

function iskills_cons_sc($attr, $content = null)
{
    return  $content;
}
function iskills_pros_sc($attr, $content = null)
{
    return  $content . "###ER##GF####";
}
function iskills_p1_sc($attr, $content = null)
{
    return  $content . "###ER##GF####";
}
function iskills_p2_sc($attr, $content = null)
{
    return  $content . "###ER##GF####";
}
function iskills_p3_sc($attr, $content = null)
{
    return  $content . "###ER##GF####";
}
add_shortcode('iskillspros', 'iskills_pros_sc');
add_shortcode('iskillscons', 'iskills_cons_sc');
add_shortcode('iskillsp1', 'iskills_p1_sc');
add_shortcode('iskillsp2', 'iskills_p2_sc');
add_shortcode('iskillsp3', 'iskills_p3_sc');

