<?php
$inlineStyle = "";
$options = get_option( 'iskills_pros_and_cons', iskills_pros_and_cons_options_default());

    $useBorder = $options['use_border'] != null ? $options['use_border'] : '';
    $borderColor = $options['border_color'] != null ? $options['border_color'] : '';
    $borderSize = $options['border_size'] != null ? $options['border_size'] : '';
    $useBorderShadow = $options['use_border_shadow'] != null ? $options['use_border_shadow'] : '';
    $useSpaceBetweenColumn = $options['use_space_between_column'] != null ? $options['use_space_between_column'] : '';

    $headingTitleCenter = $options['heading_title_center'] != null ? $options['heading_title_center'] : '';
    $headingTitleColor = $options['heading_title_color'] != null ? $options['heading_title_color'] : '';
    $headingTitleBackground = $options['heading_title_background'] != null ? $options['heading_title_background'] : '';
    $useOuterBorder = $options['use_outer_border'] != null ? $options['use_outer_border'] : '';
    

    $headingCenter = $options['heading_center'] != null ? $options['heading_center'] : '';
    $headingFontSize = $options['heading_font_size'] != null ? $options['heading_font_size'] : '';
    $headingColor = $options['heading_color'] != null ? $options['heading_color'] : '';
    $prosHeadingBackground = $options['pros_heading_background'] != null ? $options['pros_heading_background'] : '';
    $consHeadingBackground = $options['cons_heading_background'] != null ? $options['cons_heading_background'] : '';

    $useHeadingIcon = $options['use_heading_icon'] != null ? $options['use_heading_icon'] : '';
    $headingProsIconColor = $options['heading_pros_icon_color'] != null ? $options['heading_pros_icon_color'] : '';
    $headingConsIconColor = $options['heading_cons_icon_color'] != null ? $options['heading_cons_icon_color'] : '';


    $textUnderline = $options['text_underline'] != null ? $options['text_underline'] : '';
    $sectionFontSize = $options['body_font_size'] != null ? $options['body_font_size'] : '';
    $sectionColor = $options['body_color'] != null ? $options['body_color'] : '';
    $prosBackground = $options['pros_background'] != null ? $options['pros_background'] : '';
    $consBackground = $options['cons_background'] != null ? $options['cons_background'] : '';

    $useIcon = $options['use_icons'] != null ? $options['use_icons'] : '';
    $iconTop = $options['icon_top'] != null ? $options['icon_top'] : '';

    $prosIconColor = $options['pros_icon_color'] != null ? $options['pros_icon_color'] : '';
    $consIconColor = $options['cons_icon_color'] != null ? $options['cons_icon_color'] : '';





    if($useBorder == 1){
        $inlineStyle .= " .iskills-pros-cons-wrapper .iskills-cons,.iskills-pros-cons-wrapper .iskills-pros{border: {$borderSize}px solid {$borderColor};}";
        if($useSpaceBetweenColumn == 1){
            $inlineStyle .= " .iskills-pros-cons-wrapper .iskills-pros{border-right: {$borderSize}px solid {$borderColor} !important;}";   
        }
        if($useOuterBorder == 1){
        $inlineStyle .= " .iskills-pros-cons-wrapper .iskills-pros{border-left: none; border-top:none;} .iskills-pros-cons-wrapper .iskills-cons{border-right: none; border-top:none}";  
          $inlineStyle .= " .no-button .iskills-pros, .no-button .iskills-cons{border-bottom:none;}";  
          $inlineStyle .= " .has-title .iskills-pros, .has-title .iskills-cons{border-top:{$borderSize}px solid {$borderColor} !important;}";  
        }
    }

    if($useBorderShadow == 1){
        $inlineStyle .= " .iskills-pros-cons-wrapper .iskills-pros::before, .iskills-pros-cons-wrapper .iskills-cons::before {content: '';position: absolute;width: 100%;bottom: 0px;z-index: -1;-webkit-box-shadow: -30px 6px 15px 1px rgba(212, 212, 212, 0.55) !important;box-shadow: -30px 6px 15px 1px rgba(212, 212, 212, 0.55)!important; }";
        $inlineStyle .= " .iskills-pros-cons-wrapper .iskills-pros-title::before, .iskills-pros-cons-wrapper .iskills-cons-title::before {content: '';position: absolute;top: 40px;bottom: 0px;width: 1px;left: 0;z-index: -1;background-color: transparent; -webkit-box-shadow: -4px 3px 10px 0px #d4d4d4 !important;box-shadow: -4px 3px 10px 0px #d4d4d4!important; }";
    }
    if($useSpaceBetweenColumn == 1){
        $inlineStyle .= " .iskills-pros-cons-wrapper .iskills-cons,.iskills-pros-cons-wrapper .iskills-pros{width: 48%;}";  
        $inlineStyle .= " .iskills-pros-cons-wrapper .iskills-spacer{width: 4%; display:block;}";  
    }

    if($useOuterBorder == 1){
      $inlineStyle .= " .iskills-pros-cons-main-wrapper{border: {$options['border_outer_size']}px solid {$borderColor};}";
    }
    if($headingTitleCenter == 1)
     $inlineStyle .= " .iskills-pros-cons-main-wrapper .iskillspctitle{text-align: center!important;}";

     if($headingTitleColor != '')
     $inlineStyle .= " .iskills-pros-cons-main-wrapper .iskillspctitle{color: {$headingTitleColor}!important;}";

     if($headingTitleBackground != '')
     $inlineStyle .= " .iskills-pros-cons-main-wrapper .iskillspctitle{background-color: {$headingTitleBackground}!important;}";

    if($headingCenter == 1)
    $inlineStyle .= " .iskills-pros-cons-wrapper .iskills-cons-title,.iskills-pros-cons-wrapper .iskills-pros-title{text-align: center!important;}";

    if($headingFontSize != '')
    $inlineStyle .= " .iskills-pros-cons-wrapper .iskills-cons-title,.iskills-pros-cons-wrapper .iskills-pros-title{font-size: {$headingFontSize}px!important;}";

    if($headingColor != '')
    $inlineStyle .= " .iskills-pros-cons-wrapper .iskills-cons-title,.iskills-pros-cons-wrapper .iskills-pros-title{color: {$headingColor}!important;}";

    if($prosHeadingBackground != '')
    $inlineStyle .=  ".iskills-pros-cons-wrapper .iskills-pros-title {background-color: {$prosHeadingBackground} !important;}";

    if($consHeadingBackground != '')
    $inlineStyle .= " .iskills-pros-cons-wrapper .iskills-cons-title{background-color: {$consHeadingBackground}!important;}";

    if($useHeadingIcon == 1){
        $prosBorderColor = iskillspc_rgba_onverter($prosIconColor);
        $consBorderColor = iskillspc_rgba_onverter($consIconColor);
        $inlineStyle .= " .iskills-pros-cons-wrapper .iskills-cons-title,.iskills-pros-cons-wrapper .iskills-pros-title{display:none;}";
        $inlineStyle .= " .iskills-pros-cons-wrapper .iskills-cons,.iskills-pros-cons-wrapper .iskills-pros{padding-top:90px;}";
        $inlineStyle .= " .iskills-pros-cons-wrapper {padding-top:80px;}";
        $inlineStyle .= " .iskills-pros-cons-wrapper .iskills-pros .heading-icon i {background-color:{$prosIconColor};}";
        $inlineStyle .= " .iskills-pros-cons-wrapper .iskills-cons .heading-icon i {background-color:{$consIconColor};}";
        $inlineStyle .= " .iskills-pros-cons-wrapper .iskills-pros  {border-color:{$prosIconColor}; border-right-color:{$prosIconColor} !important;border-color:{$prosBorderColor};border-right-color:{$prosBorderColor}!important;}";
        $inlineStyle .= " .iskills-pros-cons-wrapper .iskills-cons  {border-color:{$consIconColor};border-color:{$consBorderColor};}";
        $inlineStyle .= " .iskills-pros-cons-wrapper .section{padding-right:5%; padding-left:5%;}";
        $inlineStyle .= " @media only screen and (max-width: 992px) {.iskills-pros-cons-wrapper .iskills-pros{margin-bottom:85px;}}";


    }


    if($textUnderline == 1)
    $inlineStyle .= " .iskills-pros-cons-wrapper .section ul li{text-decoration: underline!important;}";

    if($sectionFontSize != '')
    $inlineStyle .= " .iskills-pros-cons-wrapper ul li {font-size: {$sectionFontSize}px!important; line-height : "  . $sectionFontSize * 1.3 . "px;}";

    if($sectionColor != '')
    $inlineStyle .= " .iskills-pros-cons-wrapper .iskills-pros,.iskills-pros-cons-wrapper .iskills-cons {color: {$sectionColor}!important;}";

    if ($prosBackground != '')
    $inlineStyle .= " .iskills-pros-cons-wrapper .iskills-pros{background-color: {$prosBackground}!important;}";

    if($consBackground != '')
    $inlineStyle .= " .iskills-pros-cons-wrapper .iskills-cons{background-color: {$consBackground}!important;}";
   



   if(isset($prosIcon) && $prosIcon != '' && $prosIcon != '0')
   $inlineStyle .= " .iskills-pros-cons-wrapper .iskills-pros li{background-image: url('{$imgUrl}y{$prosIcon}.png')!important;}";

    if(isset($consIcon) && $consIcon != '' && $consIcon != '0')
    $inlineStyle .= " .iskills-pros-cons-wrapper .iskills-cons li{background-image: url('{$imgUrl}n{$consIcon}.png')!important;}";
    
    if(isset($prosIcon) && $prosIcon == '0'){
        $inlineStyle .= " .iskills-pros-cons-wrapper .iskills-pros li{background-image: none!important; padding-left: 15px !important;}";  
    }
    if(isset($consIcon) && $consIcon == '0'){
        $inlineStyle .= " .iskills-pros-cons-wrapper .iskills-cons li{background-image: none!important;padding-left: 15px !important;}";  
    }

    if($iconTop != ''){
        $inlineStyle .= " .iskills-pros-cons-wrapper .section ul li i{top: {$iconTop}px!important;}";  
    }
    if($prosIconColor != ''){
        $inlineStyle .= " .iskills-pros-cons-wrapper .iskills-pros  ul li i{color: {$prosIconColor}!important;}";  
    }
    if($consIconColor != ''){
        $inlineStyle .= " .iskills-pros-cons-wrapper .iskills-cons ul li i{color: {$consIconColor}!important;}";  
    }

  if($options['button_theme'] != "no-style"){

    $buttonColor = $options['button_color'] != null ? $options['button_color'] : '';
    $buttonGradientColor = $options['button_gradient_color'] != null ? $options['button_gradient_color'] : '';

    $buttonTextColor = $options['button_text_color'] != null ? $options['button_text_color'] : '';
    $buttonRadius = $options['button_radius'] != null ? $options['button_radius'] : '';
    $buttonRadiusInPercent = $options['button_radius_in_percent'] == 1 ? "%" : 'px';
    $buttonLineHeight = $options['button_line_height'] != null ? $options['button_line_height'] : '';
    $buttonMinWidth = $options['button_min_width'] != 'auto' ? $options['button_min_width'] . "%" : '';  
    $buttonFontSize = $buttonLineHeight != '' ? $buttonLineHeight * .55  : '';  

    if($buttonTextColor != ''){
      $inlineStyle .= " .iskills-pros-cons-main-wrapper .iskills-button-wrapper a{color: {$buttonTextColor}!important;}";  
    }
    if($buttonColor != ''){
      $inlineStyle .= " .iskills-pros-cons-main-wrapper .iskills-button-wrapper a{background-color: {$buttonColor}; border-color:{$buttonColor};}";  
    } 
    if($buttonGradientColor != ''){
      $inlineStyle .= " .iskills-pros-cons-main-wrapper .iskills-button-wrapper a:hover{background-color: {$buttonGradientColor}; border-color:{$buttonGradientColor};}";  
    } 
    if($buttonRadius != ''){
      $inlineStyle .= " .iskills-pros-cons-main-wrapper .iskills-button-wrapper a{-moz-border-radius: {$buttonRadius}{$buttonRadiusInPercent}!important;-webkit-border-radius: {$buttonRadius}{$buttonRadiusInPercent}!important; border-radius: {$buttonRadius}{$buttonRadiusInPercent}!important;}";  
    }  
    if($buttonLineHeight != ''){
      $inlineStyle .= " .iskills-pros-cons-main-wrapper .iskills-button-wrapper a{line-height : {$buttonLineHeight}px; font-size:{$buttonFontSize}px;}";  
    } 
    if($buttonMinWidth != ''){
      $inlineStyle .= " .iskills-pros-cons-main-wrapper .iskills-button-wrapper a{min-width:{$buttonMinWidth}; }";  
    } 

    switch ($options['button_theme']) {
         case 'iskillspc-btn-theme-00' : // 'default'
        $shadow = luminanceLight($buttonColor, 0.48) ;
        $inlineStyle .= " .iskills-pros-cons-main-wrapper .iskills-button-wrapper a{background-color: {$buttonColor}!important;
        -moz-box-shadow: 0px 1px 0px 0px {$shadow};
        -webkit-box-shadow: 0px 1px 0px 0px {$shadow};
        box-shadow: 0px 1px 0px 0px {$shadow};
        background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, {$buttonColor}), color-stop(1, {$buttonGradientColor}));
        background:-moz-linear-gradient(top, {$buttonColor} 5%, {$buttonGradientColor} 100%);
        background:-webkit-linear-gradient(top, {$buttonColor} 5%, {$buttonGradientColor} 100%);
        background:-o-linear-gradient(top, {$buttonColor} 5%, {$buttonGradientColor} 100%);
        background:-ms-linear-gradient(top, {$buttonColor} 5%, {$buttonGradientColor} 100%);
        background:linear-gradient(to bottom, {$buttonColor} 5%, {$buttonGradientColor} 100%);
        filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='{$buttonColor}', endColorstr='{$buttonGradientColor}',GradientType=0);
        border:1px solid {$buttonColor};
        text-shadow:0px 1px 0px {$buttonColor};
        }";  
        $inlineStyle .= " .iskills-pros-cons-main-wrapper .iskills-button-wrapper a:hover {
        background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, {$buttonGradientColor}), color-stop(1, {$buttonColor}));
        background:-moz-linear-gradient(top, {$buttonGradientColor} 5%, {$buttonColor} 100%);
        background:-webkit-linear-gradient(top, {$buttonGradientColor} 5%, {$buttonColor} 100%);
        background:-o-linear-gradient(top, {$buttonGradientColor} 5%, {$buttonColor} 100%);
        background:-ms-linear-gradient(top, {$buttonGradientColor} 5%, {$buttonColor} 100%);
        background:linear-gradient(to bottom, {$buttonGradientColor} 5%, {$buttonColor} 100%);
        filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='{$buttonGradientColor}', endColorstr='{$buttonColor}',GradientType=0);
        background-color:{$buttonGradientColor};
        }";   
        break;
        case 'iskillspc-btn-theme-02' : // '3d' :

        $inlineStyle .= " .iskills-pros-cons-main-wrapper .iskills-button-wrapper a{background-color: {$buttonColor}!important;
        -moz-box-shadow: inset 0px 1px 0px 0px {$shadow};
        -webkit-box-shadow: inset 0px 1px 0px 0px {$shadow};
        box-shadow: inset 0px 1px 0px 0px {$shadow};
        background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, {$buttonColor}), color-stop(1, {$buttonGradientColor}));
        background:-moz-linear-gradient(top, {$buttonColor} 5%, {$buttonGradientColor} 100%);
        background:-webkit-linear-gradient(top, {$buttonColor} 5%, {$buttonGradientColor} 100%);
        background:-o-linear-gradient(top, {$buttonColor} 5%, {$buttonGradientColor} 100%);
        background:-ms-linear-gradient(top, {$buttonColor} 5%, {$buttonGradientColor} 100%);
        background:linear-gradient(to bottom, {$buttonColor} 5%, {$buttonGradientColor} 100%);
        filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='{$buttonColor}', endColorstr='{$buttonGradientColor}',GradientType=0);
        border:1px solid {$buttonColor};
        text-shadow:0px 1px 0px {$buttonColor};
        }";  
        $inlineStyle .= " .iskills-pros-cons-main-wrapper .iskills-button-wrapper a:hover {
        background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, {$buttonGradientColor}), color-stop(1, {$buttonColor}));
        background:-moz-linear-gradient(top, {$buttonGradientColor} 5%, {$buttonColor} 100%);
        background:-webkit-linear-gradient(top, {$buttonGradientColor} 5%, {$buttonColor} 100%);
        background:-o-linear-gradient(top, {$buttonGradientColor} 5%, {$buttonColor} 100%);
        background:-ms-linear-gradient(top, {$buttonGradientColor} 5%, {$buttonColor} 100%);
        background:linear-gradient(to bottom, {$buttonGradientColor} 5%, {$buttonColor} 100%);
        filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='{$buttonGradientColor}', endColorstr='{$buttonColor}',GradientType=0);
        background-color:{$buttonGradientColor};
        }";   
      }    
  }


if(!function_exists('iskills_pros_cons_custom_style')) {
    function iskills_pros_cons_custom_style()
    {
        global $inlineStyle;
         wp_add_inline_style( 'iskills-pros-cons-block-style-css', $inlineStyle );
     }
    } 

    if(!function_exists('iskills_pros_cons_admin_custom_style')) {
        function iskills_pros_cons_admin_custom_style()
        {
            global $inlineStyle;
             wp_add_inline_style( 'iskills_pro_cons_editor_style', $inlineStyle );
         }
        } 

   add_action( 'wp_enqueue_scripts', 'iskills_pros_cons_custom_style' );
   add_action( 'admin_enqueue_scripts', 'iskills_pros_cons_admin_custom_style' );


   function iskillspc_rgba_onverter($color) {
       if(strlen($color) !== 7){
           return $color;
       }
        $color = substr( $color, 1 );
        $hex = array( $color[0] . $color[1], $color[2] . $color[3], $color[4] . $color[5] );
        //Convert hexadec to rgb http://php.net/manual/en/function.hexdec.php
        $rgb =  array_map('hexdec', $hex);
        return 'rgba('.implode(",",$rgb).',.3)';
 
}

function luminanceLight($hexcolor, $percent)
{
  if ( strlen( $hexcolor ) < 6 ) {
    $hexcolor = $hexcolor[0] . $hexcolor[0] . $hexcolor[1] . $hexcolor[1] . $hexcolor[2] . $hexcolor[2];
  }
  $hexcolor = array_map('hexdec', str_split( str_pad( str_replace('#', '', $hexcolor), 6, '0' ), 2 ) );

  foreach ($hexcolor as $i => $color) {
    $from = $percent < 0 ? 0 : $color;
    $to = $percent < 0 ? $color : 255;
    $pvalue = ceil( ($to - $from) * $percent );
    $hexcolor[$i] = str_pad( dechex($color + $pvalue), 2, '0', STR_PAD_LEFT);
  }

  return '#' . implode($hexcolor);
}

function luminanceDark($hexcolor, $percent)
{
  if ( strlen( $hexcolor ) < 6 ) {
    $hexcolor = $hexcolor[0] . $hexcolor[0] . $hexcolor[1] . $hexcolor[1] . $hexcolor[2] . $hexcolor[2];
  }
  $hexcolor = array_map('hexdec', str_split( str_pad( str_replace('#', '', $hexcolor), 6, '0' ), 2 ) );

  foreach ($hexcolor as $i => $color) {
    $from = $percent < 0 ? 0 : $color;
    $to = $percent < 0 ? $color : 0;
    $pvalue = ceil( ($to - $from) * $percent );
    $hexcolor[$i] = str_pad( dechex($color + $pvalue), 2, '0', STR_PAD_LEFT);
  }

  return '#' . implode($hexcolor);
}

function darken_color($rgb, $darker=2) {

    $hash = (strpos($rgb, '#') !== false) ? '#' : '';
    $rgb = (strlen($rgb) == 7) ? str_replace('#', '', $rgb) : ((strlen($rgb) == 6) ? $rgb : false);
    if(strlen($rgb) != 6) return $hash.'000000';
    $darker = ($darker > 1) ? $darker : 1;

    list($R16,$G16,$B16) = str_split($rgb,2);

    $R = sprintf("%02X", floor(hexdec($R16)/$darker));
    $G = sprintf("%02X", floor(hexdec($G16)/$darker));
    $B = sprintf("%02X", floor(hexdec($B16)/$darker));

    return $hash.$R.$G.$B;
}

function iskillspc_color_luminance( $hex, $percent ) {
    

	// validate hex string
	
	$hex = preg_replace( '/[^0-9a-f]/i', '', $hex );
	$new_hex = '#';
	
	if ( strlen( $hex ) < 6 ) {
		$hex = $hex[0] + $hex[0] + $hex[1] + $hex[1] + $hex[2] + $hex[2];
	}
	
	// convert to decimal and change luminosity
	for ($i = 0; $i < 3; $i++) {
		$dec = hexdec( substr( $hex, $i*2, 2 ) );
		$dec = min( max( 0, $dec + $dec * $percent ), 255 ); 
		$new_hex .= str_pad( dechex( $dec ) , 2, 0, STR_PAD_LEFT );
	}		
	
	return $new_hex;
}

function iskillspc_color_luminance_2( $hexcolor, $percent ) {
    
    if ( strlen( $hexcolor ) < 6 ) {
        $hexcolor = $hexcolor[0] . $hexcolor[0] . $hexcolor[1] . $hexcolor[1] . $hexcolor[2] . $hexcolor[2];
      }
      $hexcolor = array_map('hexdec', str_split( str_pad( str_replace('#', '', $hexcolor), 6, '0' ), 2 ) );
    
      foreach ($hexcolor as $i => $color) {
        $from = $percent < 0 ? 0 : $color;
        $to = $percent < 0 ? $color : 255;
        $pvalue = ceil( ($to - $from) * $percent );
        $hexcolor[$i] = str_pad( dechex($color + $pvalue), 2, '0', STR_PAD_LEFT);
      }
    
      return '#' . implode($hexcolor);
}