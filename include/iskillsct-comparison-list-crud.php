<?php
$timezone = date_default_timezone_set('Asia/Karachi');


if (!function_exists('load_media_files')) {
    function load_media_files() {
        wp_enqueue_media();
    }
}
add_action( 'admin_enqueue_scripts', 'load_media_files' );

// start from here listing data
function iskills_comparison_tables_handler()
{
    global $wpdb;
    $table = new Custom_Table_Comparison_List_Table();
    $table->prepare_items();
    
    $message = '';
    if ('delete' === $table->current_action()) {
        $message = '<div class="updated below-h2" id="message"><p>' . sprintf(__('Items deleted: %d', 'iskills'), isset($_REQUEST['ids']) ? $_REQUEST['ids'] : 1)  . '</p></div>';
    }
    ?>
<div class="wrap" style="margin-left: -210px;">

    <div class="icon32 icon32-posts-post" id="icon-edit"><br></div>
    <h2><?php _e('All Tables', 'iskills')?>   </h2>
  
    <?php echo $message; ?>
  
    <div class="alignleft">
                <label for="bulk-action-selector-top" class="screen-reader-text">Select bulk action</label>
                <select name="delete_table" id="delete_table">
                    <option value="-1">Bulk actions</option>
                    <option value="delete">Delete</option>
                </select>
                <input type="button" id="delete_table_submit" class="button action" value="Apply" onclick="BulkDelete()">
    </div>
  
    <form id="comparison-table" method="POST">
        <input type="hidden" name="page" value="<?php echo $_REQUEST['page'] ?>"/>
        <?php $table->display() ?>
    </form>

</div>
<script>
    function BulkDelete(){
        var checkedRows = jQuery("input[name='id[]']:checked")
                         .map(function(){return jQuery(this).val();})
                         .get();
        var action = jQuery("#delete_table").val();

    // jQuery('input[name="id[]"]:checked').each(function() {
    //     console.log(this.value);
    // });
    console.log(checkedRows);
    // Sending ajax call
    if(action == "delete"){
    var pluginUrl = '<?php echo plugins_url(); ?>' ;
    var adminUrl = '<?php echo get_admin_url(get_current_blog_id(), 'admin.php?page=iskills_comparison_table&tab=all_tables');?>';
            jQuery.ajax({
                url: pluginUrl + '/iskills-affiliate-box/include/iskillsct-bulk-action.php',
                type: 'get',
                data: jQuery.param(
                    {
                        'ids': checkedRows,
                        'adminUrl': adminUrl,
                    }
                ),
                success: function(response){
                    console.log(response);
                    res = JSON.parse(response);
                    window.open(res,'_self');
                },
                error: function(){
                    alert("Something is wrong");
                }
            });
        }
}
</script>
<?php
}

function iskills_comparisons_form_page_handler()
{
    global $wpdb;
    $table_name = $wpdb->prefix . 'posts'; 
    $message = '';
    $notice = '';


    $default = array(
        'ID' => 0,
        'post_title'      => '',
        'shortcode'  => '',
    );

    // insertion if
    if ( isset($_REQUEST['nonce']) && wp_verify_nonce($_REQUEST['nonce'], basename(__FILE__))) {
        
        $item = shortcode_atts($default, $_REQUEST);     
        
        // $item_valid = iskills_validate_comparison_table($item);
        $item_valid = true;
        if ($item_valid === true) {
            if ($item['ID'] == 0) {
                $result = $wpdb->insert($table_name, $item);
                $item['ID'] = $wpdb->insert_id;
                if ($result) {
                    $message = __('Item was successfully saved', 'iskills');
                } else {
                    $notice = __('There was an error while saving item', 'iskills');
                }
            } else {
                $result = $wpdb->update($table_name, $item, array('ID' => $item['ID']));
                if ($result) {
                    $message = __('Item was successfully updated', 'iskills');
                } else {
                    $notice = __('There was an error while updating item', 'iskills');
                }
            }
        } else {
            
            $notice = $item_valid;
        }
    }
    else {
        
        $item = $default;
        if (isset($_REQUEST['id'])) {
            $item = $wpdb->get_row($wpdb->prepare("SELECT * FROM $table_name WHERE id = %d", $_REQUEST['id']), ARRAY_A);
            if (!$item) {
                $item = $default;
                $notice = __('Item not found', 'iskills');
            }
        }
    }

    
    add_meta_box('comparisons_form_meta_box', __('Comparison Table data', 'iskills'), 'iskills_comparisons_form_meta_box_handler', 'comparison', 'normal', 'default');
    ?>
<div class="wrap">
    <div class="icon32 icon32-posts-post" id="icon-edit"><br></div>
    <h2><?php _e('Comparison Tables', 'iskills')?> <a class="add-new-h2"
                                href="<?php echo get_admin_url(get_current_blog_id(), 'admin.php?page=iskills_comparison_table&tab=all_tables');?>"><?php _e('back to list', 'iskills')?></a>
    </h2>
    <?php if (!empty($notice)): ?>
    <div id="notice" class="error"><p><?php echo $notice ?></p></div>
    <?php endif;?>
    <?php if (!empty($message)): ?>
    <div id="message" class="updated"><p><?php echo $message ?></p></div>
    <?php endif;?>

    <form id="form" method="POST">
        <input type="hidden" name="nonce" value="<?php echo wp_create_nonce(basename(__FILE__))?>"/>
        
        <input type="hidden" name="id" value="<?php echo $item['ID'] ?>"/>

        <div class="metabox-holder" id="poststuff">
            <div id="post-body">
                <div id="post-body-content">
                    
                    <?php do_meta_boxes('comparison', 'normal', $item); ?>
                    <input type="submit" value="<?php _e('Save', 'iskills')?>" id="submit" class="button-primary" name="submit">
                </div>
            </div>
        </div>
    </form>
</div>
<?php
}


// add new comparison table
function iskills_comparisons_form_meta_box_handler($item)
{
    ?>

<!-- COMPARISON TABLE -->
<div id="comparison_option"style="margin-left:-210px; background:white;">
           <div class="iskillspc-ce-header" style="background-color: #f8f8ff;">
                <div class="iskillspc-fl">
                    <div class="clear"></div>
                    <h3><img width="50" src="<?php echo plugins_url('../dist/img/Favicon.png', __FILE__); ?>"> <span><b style="position:absolute; margin-top:10px;">iskills Comparison Tables</b> <small><small></small></small></span></h3>
                    <div class="clear"></div>
                </div>
                
                <div class="iskillspc-fr">
                </div>
                <div class="clear"></div>
            </div>
             <form autocomplete="off" id="iskillsct-ce-popup">
                <div class="iskillsct-content" style="margin-left:22px;">
                    <div class="form-group inline-group">
                        <label for="iskillsct-c_rows">No. of rows</label>
                        <input class="form-control inline-control" type="number" value="" id="comparison_rows" name="comparison_rows" />
                        <input type="button" id='insert_c_rows' value="Insert" class="button-secondary iskillsct-success" style="color: white;"> 
                    
                        <label for="iskillsct-c_title" style="margin-left: 10px;">Table Title</label>
                        <input class="form-control" value="" id="c_table_title" name="c_table_title" />
                    </div>

                    <div style="margin-left:70%; margin-top:-40px; margin-bottom:10px;">
                        <div>
                        <label>Show Button 1 &nbsp;</label>
                            <label class="switch">
                                <input type="checkbox" name="c_show_button1" id="c_show_button1" checked>
                                <span class="slider round"></span>
                            </label>
                        </div>
                        
                        <div>
                        <label> Show Button 2 &nbsp;</label>
                            <label class="switch">
                                <input type="checkbox" name="c_show_button2" id="c_show_button2" checked> 
                                <span class="slider round"></span>
                        </label>
                        </div>
                    </div>

                    <div id="message12" style="text-align: center; font-weight:bolder;"></div>

                    <table class="table" id="iskillsct_table">

                        <thead style="background-color: #FFFDD0;">
                            <tr>
                                <th scope="col" style="text-transform: uppercase;">Image</th>
                                <th scope="col" style="text-transform: uppercase;">Product Name</th>
                                <th scope="col" style="text-transform: uppercase;">Product Features</th>
                                <th width="8%" scope="col" style="text-transform: uppercase;">Rating</th>
                                <th id="show_buttons" scope="col" style="text-transform: uppercase;">Button</th>
                            </tr>
                        </thead>
                        <tbody>
                         
                        </tbody>
                    </table>                
                </div>
                <div class="clear"></div>
                <div class="iskillsct-ce-footer">
                    <a href="#" id="footer-close" class="iskillsct-button iskillsct-default iskillsct-fr">Cancel</a>
                    <a href="#" id="iskillsct-ce-submit" class="iskillsct-button iskillsct-success  iskillsct-fr">Save Table</a>
                </div>
            </form>
            </div>

    <!-- / COMPARISON TABLE -->
<style>
    /* COMPARISON TABLE STYLES */
                        #comparison_option .iskillsct-ce-header {
                            background-color: #f1f1f1;
                            border-top: 4px solid #4285f4;
                            padding: 0px 15px;
                            margin-bottom: 15px;
                        }

                        #comparison_option #comparison_rows {
                            width: 7%;
                            margin-bottom: 10px;
                            display: inline;
                        }
                        #comparison_option #comparison_rows {
                            display: inline;
                        }

                        #comparison_option #c_table_title {
                            width: 10%;
                            margin-bottom:10px;
                            display: inline;
                        }
                        #comparison_option #c_table_slug {
                            width: 10%;
                            margin-bottom:10px;
                        }

                        #comparison_option .table{
                            width: 98%;
                        }

                        #comparison_option .form-input{
                            text-align: center;
                            width: 100px;
                        }

                        #comparison_option .iskillsct-button {
                            background-color: #4285f4;
                            padding: 10px 15px;
                            font-size: 11px;
                            font-weight: bold;
                            text-transform: uppercase;
                            color: #fff !important;
                            box-shadow: none !important;
                            text-decoration: none;
                            border-radius: 3px;
                            margin-top: 12px;
                            display: inline-block;
                        }
                        #comparison_option .iskillsct-default {
                            background-color: #6c757d;
                        }

                        #comparison_option .iskillsct-ce-footer{
                            text-align: center;
                            margin-top: 20px;
                        }
                       
                        #comparison_option .iskillsct-success {
                            background-color: #28a745;
                        }
                        .form-table td {
                            padding: 0px;
                        }
                        .form-table th {
                            padding: 10px 10px 10px 0;
                        }
            /* END OF COMPARISON TABLES STYLES */
</style>





<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<script>

// COMPARISON TABLE FRONT-END DOM Manipulation VIA JAVASCRIPT // 
                // generating row 
                
                jQuery("#insert_c_rows").click(function(e){
                    e.preventDefault();
                    $("#message12").html('');
                    let no_of_rows = jQuery("#comparison_rows").val();
                    let row = `<tr>
                             <td>
                                 <input class="form-control c_rows_img" value="" name="c_rows_img[]" style="margin-top: 12px;" />
                                 <input type="button" name="c_rows_upload-btn[]" class="button-secondary c_rows_upload-btn" value="Upload Image">
                            </td>
                             <td>
                                 <input class="form-control c_rows_pro" value="NETGEAR Nighthawk Smart WiFi Router" name="c_rows_pro[]" style="padding:12px;" />
                            </td>
                             <td>
                                 <textarea class="form-control c_rows_features" value=""  name="c_rows_features[]">Features: 6 Gigabit Ethernet LAN ports, AD7200 Quad-stream router, and 1.7 GHz quad-core processor-stream architecture
Benefits: Minimal ping, lag-free wired connectivity and ultra-fast connection</textarea>
                            </td>
                             <td><input class="form-control c_rows_rating" value="4.0"  name="c_rows_rating[]" style="padding:12px; margin-top:-1px;" /></td>
                             <td>
                             <div class="buttons_1">

                                <div class="form-group inline-group show_btn_1">
                                    <input class="form-control c_rows_btn1_text" value="Buy Now"  name="c_rows_btn1_text[]"  style="width:100px;" />
                                    <input class="form-control c_rows_btn1_link" value="#"  name="c_rows_btn1_link[]" style="width:100px;" />
                                </div>
                             
                            </div>


                            <div class="buttons_2">

                             <div class="form-group inline-group show_btn_2">
                                 <input class="form-control c_rows_btn2_text" value="Buy Now"  name="c_rows_btn2_text[]" style="width: 100px; display:inline;" />
                                 <input class="form-control c_rows_btn2_link" value="#"  name="c_rows_btn2_link[]" style="width: 100px; display:inline;"/>
                             </div>  
                             
                            </div> 
                             </td>
                             <td>
                                <input type="button" class="iskillsct-button remove_c_row" value="X" style="border:none; margin-top:-4px; background:red; cursor:pointer;"> 
                             </td>
                            
                         </tr>`;

                         for(let i=0; i < no_of_rows; i++){
                            if(jQuery("#iskillsct_table > tbody >").length == 0){
                                jQuery("#iskillsct_table > tbody").html(row);
                            }
                            else {
                                jQuery("#iskillsct_table > tbody").append(row);
                            }
                        }

                        if(!jQuery("#c_show_button1").is(':checked')){
                            jQuery("#c_show_button1").trigger("change");
                        }
                        if(!jQuery("#c_show_button2").is(':checked')){
                            jQuery("#c_show_button2").trigger("change");
                        }

                });
                  
                jQuery("#c_show_button1").on('change',function(e){
                    if(!jQuery("#c_show_button1").is(":checked")){
                        jQuery(document).find('.show_btn_1').remove();
                    }else{
                        insertButton1();
                    }
                });

                jQuery("#c_show_button2").on('change',function(e){
                    if(!jQuery("#c_show_button2").is(":checked")){
                        jQuery(document).find('.show_btn_2').remove();
                    }else{
                        insertButton2();
                    }
                });

                function insertButton1(){
                    jQuery('#iskillsct_table > tbody > tr td:nth-child(5) .buttons_1').each(function(i,obj){
                        let btnHtml = `<div class="form-group inline-group show_btn_1">
                                 <input class="form-control" value="Buy Now"  name="c_rows_btn1_text[]" class="c_rows_btn1_text" style="width:100px;" />
                                 <input class="form-control" value="#"  name="c_rows_btn1_link[]" class="c_rows_btn1_link" style="width:100px;" />
                             </div>`;

                        // alert(jQuery(obj).length);
                        jQuery(obj).append(btnHtml);
                    });
                }

                function insertButton2(){
                    jQuery('#iskillsct_table > tbody > tr td:nth-child(5) .buttons_2').each(function(i,obj){
                        let btnHtml = `<div class="form-group inline-group show_btn_2">
                                 <input class="form-control" value="Buy Now"  name="c_rows_btn2_text[]" class="c_rows_btn2_text" style="width: 100px; display:inline;" />
                                 <input class="form-control" value="#"  name="c_rows_btn2_link[]" class="c_rows_btn2_link" style="width: 100px; display:inline;"/>
                             </div>  `;
                        jQuery(obj).append(btnHtml);
                    });
                }

                // to remove a row
                jQuery(document).on('click', '.remove_c_row', function(e){
                    e.preventDefault();
                    jQuery(this).closest('tr').remove();
                });

                // To Upload Image for comparison table
                jQuery(document).on('click', '.c_rows_upload-btn', function(e) {
                    let input = jQuery(this).closest('input').prev();
                    jQuery('#footer-close').trigger('click');
                                    e.preventDefault();
                                    var image = wp.media({ 
                                        title: 'Upload Image',
                                        // mutiple: true if you want to upload multiple files at once
                                        multiple: false
                                    }).open()
                                    .on('select', function(e){
                                        // This will return the selected image from the Media Uploader, the result is an object
                                        var uploaded_image = image.state().get('selection').first();
                                        // We convert uploaded_image to a JSON object to make accessing it easier
                                        // Output to the console uploaded_image
                                        // console.log(uploaded_image);
                                        var image_url = uploaded_image.toJSON().url;
                                        // Let's assign the url value to the input field
                                        // jQuery('#image_url_2').val(image_url);
                                        jQuery(input).val(image_url);
                                        // jQuery('#image_url2').attr('src',image_url);

                                        jQuery('#mceu_13-button').trigger('click');
                                    });
                });


                
// add new comparison table
// Ajax Request
jQuery('#iskillsct-ce-submit').on('click', function(e) {
            e.preventDefault();
            let comparisonRows = 0;
            let cShowButton1 = '';
            comparisonRows = jQuery("#comparison_rows").val();
            cShowButton1 = 'off' 
            if(jQuery(".show_btn_1").val() !== undefined){
                cShowButton1 = jQuery("#c_show_button1").val();
            }
            let cShowButton2 = 'off';
            if(jQuery(".show_btn_2").val() !== undefined){
                cShowButton2 = jQuery("#c_show_button2").val();
            }
            let cTableTitle = jQuery("#c_table_title").val();
            let tableRows= new Array();

            // get input Arrays
            var cRowsImg = jQuery("input[name='c_rows_img[]']")
                         .map(function(){return jQuery(this).val();})
                         .get();
            var cRowsPro = jQuery("input[name='c_rows_pro[]']")
                         .map(function(){return jQuery(this).val();})
                         .get();
            var cRowsFeatures = jQuery("textarea[name='c_rows_features[]']")
                         .map(function(){return jQuery(this).val();})
                         .get();
            var cRowsRating = jQuery("input[name='c_rows_rating[]']")
                         .map(function(){return jQuery(this).val();})
                         .get();
            var cRowsBtn1Text = jQuery("input[name='c_rows_btn1_text[]']")
                         .map(function(){return jQuery(this).val();})
                         .get();
            var cRowsBtn1Link = jQuery("input[name='c_rows_btn1_link[]']")
                         .map(function(){return jQuery(this).val();})
                         .get();
            var cRowsBtn2Text = jQuery("input[name='c_rows_btn2_text[]']")
                         .map(function(){return jQuery(this).val();})
                         .get();
            var cRowsBtn2Link = jQuery("input[name='c_rows_btn2_link[]']")
                         .map(function(){return jQuery(this).val();})
                         .get();
        

            let attributes = '';
            if(comparisonRows){
                attributes += ' c_rows="' + comparisonRows + '"';
            }
            if(cShowButton1 != ''){
                attributes += ' c_show_btn1="' + cShowButton1 + '"';
            }
            if(cShowButton2 != ''){
                attributes += ' c_show_btn2="' + cShowButton2 + '"';
            }

            // tinymce.execCommand('mceInsertContent', false, response);

            // Sending ajax call
            var pluginUrl = '<?php echo plugins_url(); ?>' ;
            
            jQuery.ajax({
                url: pluginUrl + '/iskills-affiliate-box/include/iskillsct-save.php',
                type: 'post',
                data: jQuery.param(
                    {
                        'c_rows':comparisonRows, 
                        'c_title':cTableTitle,
                        'c_show_btn1' : cShowButton1,
                        'c_show_btn2' : cShowButton2,
                        'c_rows_img' : cRowsImg,
                        'c_rows_pro' : cRowsPro,
                        'c_rows_features' : cRowsFeatures,
                        'c_rows_rating' : cRowsRating,
                        'c_rows_btn1_text': cRowsBtn1Text,
                        'c_rows_btn1_link': cRowsBtn1Link,
                        'c_rows_btn2_text': cRowsBtn2Text,
                        'c_rows_btn2_link': cRowsBtn2Link,
                        'is_sent': 'Success',
                        'from_settings': 1,
                    }
                ),
                beforeSend: function(){
                },
                success: function(response){
                    console.log(response);
                    response = JSON.parse(response);
                    // console.log(response);
                    if(response.success){
                    var shortcode = response.post_id;
                    var message = response.message;
                    let rowShortcode = `
                                ${shortcode}
                             &nbsp;
                                ${message}
                             `;
                    jQuery("#message12").html(rowShortcode);
                    jQuery("#iskillsct_table > tbody >").html('');
                    }
        
                },
                error: function(){
                    alert("Something is wrong");
                }
            });
        });


</script>

<?php
}


// Edit Comparison Table
// add new comparison table
function iskills_comparisons_edit_form_meta_box_handler()
{
    global $wpdb;
    isset($_GET['id']) ? $id=$_GET['id'] : $id=0;
    $table_name = $wpdb->prefix . "postmeta";
    // get data query
    $results = $wpdb->get_results( "SELECT * FROM $table_name WHERE `post_id`=$id LIMIT 1");
    $tablesData = json_decode($results[0]->meta_value);    
    ?>
<!-- COMPARISON TABLE -->
<div id="comparison_option"style="margin-left:-210px; background:white;">
           <div class="iskillspc-ce-header" style="background-color: #f8f8ff;">
                <div class="iskillspc-fl">
                    <div class="clear"></div>
                    <h3><img width="50" src="<?php echo plugins_url('../dist/img/Favicon.png', __FILE__); ?>"> <span><b style="position:absolute; margin-top:10px;">Edit Comparison Table</b> <small><small></small></small></span></h3>
                    <div class="clear"></div>
                </div>
                <div class="iskillspc-fr">
                </div>
                <div class="clear"></div>
            </div>
             <form autocomplete="off" id="iskillsct-ce-popup">
                <div class="iskillsct-content" style="margin-left:22px;">
                    <input type="text" name="c_post_id" value="<?=$id?>" hidden>
                    <div class="form-group inline-group">
                        <label for="iskillsct-c_rows">No. of rows</label>
                        <input class="form-control inline-control" type="number" value="<?=$tablesData->c_rows?>" id="comparison_rows" name="comparison_rows" />
                        <input type="button" id='insert_c_rows_update' value="Insert" class="button-secondary iskillsct-success" style="color: white;"> 
                    
                        <label for="iskillsct-c_title" style="margin-left: 10px;">Table Title</label>
                        <input class="form-control" value="<?=$tablesData->c_title?>" id="c_table_title" name="c_table_title" />
                    </div>

                    <div style="margin-left:70%; margin-top:-40px; margin-bottom:10px;">
                        <div>
                        <label>Show Button 1 &nbsp;</label>
                            <label class="switch">
                                <input type="checkbox" name="c_show_button1" id="c_show_button1_update" <?php 
                                    if($tablesData->c_show_btn1 == 'on'){
                                        echo "checked";
                                    }
                                ?>
                                >
                                <span class="slider round"></span>
                            </label>
                        </div>
                        
                        <div>
                        <label> Show Button 2 &nbsp;</label>
                            <label class="switch">
                                <input type="checkbox" name="c_show_button2" id="c_show_button2_update" <?php 
                                    if($tablesData->c_show_btn2 == 'on'){
                                        echo "checked";
                                    }
                                ?>> 
                                <span class="slider round"></span>
                        </label>
                        </div>
                    </div>

                    <div id="message12" style="text-align: center; font-weight:bolder;"></div>

                    <table id="iskillsct_table" class="table">

                        <thead style="background-color: #FFFDD0;">
                            <tr>
                                <th scope="col" style="text-transform: uppercase;">Image</th>
                                <th scope="col" style="text-transform: uppercase;">Product Name</th>
                                <th scope="col" style="text-transform: uppercase;">Product Features</th>
                                <th width="8%" scope="col" style="text-transform: uppercase;">Rating</th>
                                <?php 
                                    if($tablesData->c_show_btn1 == 'on' || $tablesData->c_show_btn2 == 'on')
                                    { 
                                ?>
                                <th id="show_buttons" scope="col" style="text-transform: uppercase;">Button</th>
                                <?php } ?>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            for($i=0; $i < $tablesData->c_rows; $i++)
                            { 
                        ?>
                        <tr>
                             <td>
                                 <textarea class="form-control c_rows_img" name="c_rows_img[]" style="margin-top: 12px;"><?=$tablesData->c_rows_img[$i]?></textarea>
                                 <input type="button" name="c_rows_upload-btn[]" class="button-secondary c_rows_upload-btn" value="Upload Image">
                            </td>
                             <td>
                                 <textarea class="form-control c_rows_pro" name="c_rows_pro[]" rows="4" style="padding:12px;"><?=$tablesData->c_rows_pro[$i] ?></textarea>
                            </td>
                             <td>
                                 <textarea class="form-control c_rows_features" name="c_rows_features[]" rows="5" cols="25"><?=$tablesData->c_rows_features[$i]?></textarea>
                            </td>
                             <td><textarea class="form-control c_rows_rating"  name="c_rows_rating[]" rows="2" style="padding:12px; margin-top:-1px;"><?=$tablesData->c_rows_rating[$i]?></textarea></td>
                             <td>
                             <div class="buttons_1">
                            <?php
                            if($tablesData->c_show_btn1 == 'on')
                                 {
                            ?>
                                <div class="form-group inline-group show_btn_1">
                                    <textarea class="form-control c_rows_btn1_text" name="c_rows_btn1_text[]" rows="2"  style="width:100px;"><?=$tablesData->c_rows_btn1_text[$i]?></textarea>
                                    <textarea class="form-control c_rows_btn1_link" name="c_rows_btn1_link[]" rows="2" style="width:100px;"><?=$tablesData->c_rows_btn1_link[$i]?></textarea>
                                </div>
                            <?php } ?>
                             
                            </div>


                            <div class="buttons_2">
                            <?php
                            if($tablesData->c_show_btn2 == 'on')
                                 {
                            ?>
                             <div class="form-group inline-group show_btn_2">
                                 <textarea class="form-control c_rows_btn2_text" name="c_rows_btn2_text[]" style="width: 100px; display:inline;"><?=$tablesData->c_rows_btn2_text[$i]?></textarea>
                                 <textarea class="form-control c_rows_btn2_link" name="c_rows_btn2_link[]" style="width: 100px; display:inline;"><?=$tablesData->c_rows_btn2_link[$i]?></textarea>
                             </div>  
                             <?php } ?> 
                            </div> 
                             </td>
                             <td>
                                <input type="button" class="iskillsct-button remove_c_row" value="X" style="border:none; margin-top:-4px; background:red; cursor:pointer;"> 
                             </td>
                            
                         </tr>
                         <?php } ?>
                        </tbody>
                    </table>                
                </div>
                <div class="clear"></div>
                <div class="iskillsct-ce-footer">
                    <a href="#" id="footer-close" class="iskillsct-button iskillsct-default iskillsct-fr">Cancel</a>
                    <a href="#" id="iskillsct-ce-update" class="iskillsct-button iskillsct-success  iskillsct-fr">Update Table</a>
                </div>
            </form>
            </div>

    <!-- / COMPARISON TABLE -->
<style>
    /* COMPARISON TABLE STYLES */
                        #comparison_option .iskillsct-ce-header {
                            background-color: #f1f1f1;
                            border-top: 4px solid #4285f4;
                            padding: 0px 15px;
                            margin-bottom: 15px;
                        }

                        #comparison_option #comparison_rows {
                            width: 7%;
                            margin-bottom: 10px;
                            display: inline;
                        }
                        #comparison_option #comparison_rows {
                            display: inline;
                        }

                        #comparison_option #c_table_title {
                            width: 10%;
                            margin-bottom:10px;
                            display: inline;
                        }
                        #comparison_option #c_table_slug {
                            width: 10%;
                            margin-bottom:10px;
                        }

                        #comparison_option .table{
                            width: 98%;
                        }

                        #comparison_option .form-input{
                            text-align: center;
                            width: 100px;
                        }

                        #comparison_option .iskillsct-button {
                            background-color: #4285f4;
                            padding: 10px 15px;
                            font-size: 11px;
                            font-weight: bold;
                            text-transform: uppercase;
                            color: #fff !important;
                            box-shadow: none !important;
                            text-decoration: none;
                            border-radius: 3px;
                            margin-top: 12px;
                            display: inline-block;
                        }
                        #comparison_option .iskillsct-default {
                            background-color: #6c757d;
                        }

                        #comparison_option .iskillsct-ce-footer{
                            text-align: center;
                            margin-top: 20px;
                        }
                       
                        #comparison_option .iskillsct-success {
                            background-color: #28a745;
                        }
                        .form-table td {
                            padding: 0px;
                        }
                        .form-table th {
                            padding: 10px 10px 10px 0;
                        }
            /* END OF COMPARISON TABLES STYLES */
</style>





<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<script>

// COMPARISON TABLE FRONT-END DOM Manipulation VIA JAVASCRIPT // 
                // generating row 
                
                jQuery("#insert_c_rows_update").click(function(e){
                    e.preventDefault();
                    $("#message12").html('');
                    let no_of_rows = jQuery("#comparison_rows").val();
                    let row = `<tr>
                             <td>
                                 <textarea class="form-control c_rows_img" name="c_rows_img[]" style="margin-top: 12px;" rows="2"></textarea>
                                 <input type="button" name="c_rows_upload-btn[]" class="button-secondary c_rows_upload-btn" value="Upload Image">
                            </td>
                             <td>
                                 <textarea class="form-control c_rows_pro" name="c_rows_pro[]" style="padding:12px;" rows="4">NETGEAR Nighthawk Smart WiFi Router</textarea>
                            </td>
                             <td>
                                 <textarea class="form-control c_rows_features" name="c_rows_features[]" rows="5" cols="25">Features: 6 Gigabit Ethernet LAN ports, AD7200 Quad-stream router, and 1.7 GHz quad-core processor-stream architecture
Benefits: Minimal ping, lag-free wired connectivity and ultra-fast connection</textarea>
                            </td>
                             <td><textarea class="form-control c_rows_rating" name="c_rows_rating[]" rows="2" style="padding:12px; margin-top:-1px;">4.0</textarea></td>
                             <td>
                             <div class="buttons_1">

                                <div class="form-group inline-group show_btn_1">
                                    <textarea class="form-control c_rows_btn1_text" name="c_rows_btn1_text[]"  style="width:100px;" rows="2">Buy Now</textarea>
                                    <textarea class="form-control c_rows_btn1_link"  name="c_rows_btn1_link[]" style="width:100px;" rows="2">#</textarea>
                                </div>
                             
                            </div>


                            <div class="buttons_2">

                             <div class="form-group inline-group show_btn_2">
                                    <textarea class="form-control c_rows_btn2_text" name="c_rows_btn2_text[]"  style="width:100px;" rows="2">Buy Now</textarea>
                                    <textarea class="form-control c_rows_btn2_link"  name="c_rows_btn2_link[]" style="width:100px;" rows="2">#</textarea>
                             </div>  
                             
                            </div> 
                             </td>
                             <td>
                                <input type="button" class="iskillsct-button remove_c_row" value="X" style="border:none; margin-top:-4px; background:red; cursor:pointer;"> 
                             </td>
                            
                         </tr>`;

                         for(let i=0; i < no_of_rows; i++){
                            if(jQuery("#iskillsct_table > tbody >").length == 0){
                                jQuery("#iskillsct_table > tbody").html(row);
                            }
                            else {
                                jQuery("#iskillsct_table > tbody").append(row);
                            }
                        }

                        if(!jQuery("#c_show_button1_update").is(':checked')){
                            jQuery("#c_show_button1_update").trigger("change");
                        }
                        if(!jQuery("#c_show_button2_update").is(':checked')){
                            jQuery("#c_show_button2_update").trigger("change");
                        }

                });
                  
                jQuery("#c_show_button1_update").on('change',function(e){
                    if(!jQuery("#c_show_button1_update").is(":checked")){
                        jQuery(document).find('.show_btn_1').remove();
                    }else{
                        // alert(jQuery('#iskillsct_table > thead > tr th:nth-child(5)').length)
                        if(jQuery('#iskillsct_table > thead > tr th:nth-child(5)').length == 0){
                            let th5Html = `<th id="show_buttons" scope="col" style="text-transform: uppercase;">Button</th>`;
                            jQuery('#iskillsct_table > thead > tr').append(th5Html);
                        }
                        insertButton1();
                    }
                });

                jQuery("#c_show_button2_update").on('change',function(e){
                    if(!jQuery("#c_show_button2_update").is(":checked")){
                        jQuery(document).find('.show_btn_2').remove();
                    }else{
                        if(jQuery('#iskillsct_table > thead > tr th:nth-child(5)').length == 0){
                            let th5Html = `<th id="show_buttons" scope="col" style="text-transform: uppercase;">Button</th>`;
                            jQuery('#iskillsct_table > thead > tr').append(th5Html);
                        }
                        insertButton2();
                    }
                });

                function insertButton1(){
                    jQuery('#iskillsct_table > tbody > tr td:nth-child(5) .buttons_1').each(function(i,obj){
                        let btnHtml = `<div class="form-group inline-group show_btn_1">
                                 <textarea class="form-control" name="c_rows_btn1_text[]" class="c_rows_btn1_text" style="width:100px;">Buy Now</textarea>
                                 <textarea class="form-control" name="c_rows_btn1_link[]" class="c_rows_btn1_link" style="width:100px;">#</textarea>
                             </div>`;

                        // alert(jQuery(obj).length);
                        jQuery(obj).append(btnHtml);
                    });
                }

                function insertButton2(){
                    jQuery('#iskillsct_table > tbody > tr td:nth-child(5) .buttons_2').each(function(i,obj){
                        let btnHtml = `<div class="form-group inline-group show_btn_2">
                                 <textarea class="form-control" name="c_rows_btn2_text[]" class="c_rows_btn2_text" style="width: 100px; display:inline;">Buy Now</textarea>
                                 <textarea class="form-control" name="c_rows_btn2_link[]" class="c_rows_btn2_link" style="width: 100px; display:inline;">#</textarea>
                             </div>  `;
                        jQuery(obj).append(btnHtml);
                    });
                }

                // to remove a row
                jQuery(document).on('click', '.remove_c_row', function(e){
                    e.preventDefault();
                    jQuery(this).closest('tr').remove();
                });

                // To Upload Image for comparison table
                jQuery(document).on('click', '.c_rows_upload-btn', function(e) {
                    let input = jQuery(this).closest('input').prev();
                    jQuery('#footer-close').trigger('click');
                                    e.preventDefault();
                                    var image = wp.media({ 
                                        title: 'Upload Image',
                                        // mutiple: true if you want to upload multiple files at once
                                        multiple: false
                                    }).open()
                                    .on('select', function(e){
                                        // This will return the selected image from the Media Uploader, the result is an object
                                        var uploaded_image = image.state().get('selection').first();
                                        // We convert uploaded_image to a JSON object to make accessing it easier
                                        // Output to the console uploaded_image
                                        // console.log(uploaded_image);
                                        var image_url = uploaded_image.toJSON().url;
                                        // Let's assign the url value to the input field
                                        // jQuery('#image_url_2').val(image_url);
                                        jQuery(input).val(image_url);
                                        // jQuery('#image_url2').attr('src',image_url);

                                        jQuery('#mceu_13-button').trigger('click');
                                    });
                });


                
// add new comparison table
// Ajax Request
jQuery('#iskillsct-ce-update').on('click', function(e) {
            e.preventDefault();
            let comparisonRows = 0;
            let cShowButton1 = '';
            cPostId = jQuery("input[name='c_post_id']").val();
            comparisonRows = jQuery(document).find("#iskillsct_table tr").length - 1;
            cShowButton1 = 'off' 
            if(jQuery(".show_btn_1").val() !== undefined){
                cShowButton1 = jQuery("#c_show_button1_update").val();
            }
            let cShowButton2 = 'off';
            if(jQuery(".show_btn_2").val() !== undefined){
                cShowButton2 = jQuery("#c_show_button2_update").val();
            }
            let cTableTitle = jQuery("#c_table_title").val();
            let tableRows= new Array();

            // get input Arrays
            var cRowsImg = jQuery("textarea[name='c_rows_img[]']")
                         .map(function(){return jQuery(this).val();})
                         .get();
            cRowsImg = ConvertQuotations(cRowsImg);    
            var cRowsPro = jQuery("textarea[name='c_rows_pro[]']")
                         .map(function(){return jQuery(this).val();})
                         .get();
            cRowsPro = ConvertQuotations(cRowsPro);
            var cRowsFeatures = jQuery("textarea[name='c_rows_features[]']")
                         .map(function(){return jQuery(this).val();})
                         .get();
            cRowsFeatures = ConvertQuotations(cRowsFeatures);
            var cRowsRating = jQuery("textarea[name='c_rows_rating[]']")
                         .map(function(){return jQuery(this).val();})
                         .get();
                         cRowsRating = ConvertQuotations(cRowsRating);
            var cRowsBtn1Text = jQuery("textarea[name='c_rows_btn1_text[]']")
                         .map(function(){return jQuery(this).val();})
                         .get();
            cRowsBtn1Text = ConvertQuotations(cRowsBtn1Text);
            var cRowsBtn1Link = jQuery("textarea[name='c_rows_btn1_link[]']")
                         .map(function(){return jQuery(this).val();})
                         .get();
                         cRowsBtn1Link = ConvertQuotations(cRowsBtn1Link);
            var cRowsBtn2Text = jQuery("textarea[name='c_rows_btn2_text[]']")
                         .map(function(){return jQuery(this).val();})
                         .get();
                         cRowsBtn2Text = ConvertQuotations(cRowsBtn2Text);
            var cRowsBtn2Link = jQuery("textarea[name='c_rows_btn2_link[]']")
                         .map(function(){return jQuery(this).val();})
                         .get();
                         cRowsBtn2Link = ConvertQuotations(cRowsBtn2Link);
        

            let attributes = '';
            if(comparisonRows){
                attributes += ' c_rows="' + comparisonRows + '"';
            }
            if(cShowButton1 != ''){
                attributes += ' c_show_btn1="' + cShowButton1 + '"';
            }
            if(cShowButton2 != ''){
                attributes += ' c_show_btn2="' + cShowButton2 + '"';
            }
            
            // tinymce.execCommand('mceInsertContent', false, response);

            // Sending ajax call
            var redirectUrl = '<?php echo get_admin_url(get_current_blog_id(), 'admin.php?page=iskills_comparison_table&tab=all_tables');?>';
            var pluginUrl = '<?php echo plugins_url(); ?>'
            jQuery.ajax({
                url: pluginUrl + '/iskills-affiliate-box/include/iskillsct-update.php',
                type: 'post',
                data: jQuery.param(
                    {
                        'redirect_url': redirectUrl,
                        'c_post_id': cPostId,
                        'c_rows':comparisonRows, 
                        'c_title':cTableTitle,
                        'c_show_btn1' : cShowButton1,
                        'c_show_btn2' : cShowButton2,
                        'c_rows_img' : cRowsImg,
                        'c_rows_pro' : cRowsPro,
                        'c_rows_features' : cRowsFeatures,
                        'c_rows_rating' : cRowsRating,
                        'c_rows_btn1_text': cRowsBtn1Text,
                        'c_rows_btn1_link': cRowsBtn1Link,
                        'c_rows_btn2_text': cRowsBtn2Text,
                        'c_rows_btn2_link': cRowsBtn2Link,
                        'is_sent': 'Success',
                    }
                ),
                beforeSend: function(){
                },
                success: function(response){
                    console.log(response);
                    response = JSON.parse(response);
                    // console.log(response);
                    if(response.success){
                        var shortcode = response.post_id;
                        var message = response.message;
                        let rowShortcode = `
                                    ${shortcode}
                                &nbsp;
                                    ${message}
                                `;
                        jQuery("#message12").html(rowShortcode);
                        jQuery("#iskillsct_table > tbody >").html('');
                        window.open(response.redirect_url,'_self');
                    }
        
                },
                error: function(){
                    alert("Something is wrong");
                }
            });
        });

        function ConvertQuotations(cRows){
            for(let i =0; i <cRows.length; i++){
                console.log(cRows[i]);
                let charArray = cRows[i].split('');
                console.log(charArray);
                for(let j=0; j<charArray.length; j++){
                    if(charArray[j] == "\'"){
                        charArray[j] = "\"";
                    }
                }
                charArray = charArray.join('');
                console.log(charArray);
                cRows[i] = charArray;
                console.log(cRows[i]);
            }
            return cRows;
        }
</script>

<?php
}

