<?php
add_filter("mce_external_plugins", "iskillsrb_rating_enqueue_editor_scripts");
add_filter("mce_external_plugins", "iskillspc_ce_enqueue_editor_scripts");
add_filter("mce_external_plugins", "iskillspb_ce_enqueue_editor_scripts");
add_filter("mce_external_plugins", "iskillsct_ce_enqueue_editor_scripts");


function iskillsrb_rating_enqueue_editor_scripts($plugin_array)
{
    //enqueue TinyMCE plugin script with its ID.
    $plugin_array["iskillsrb_rating_popup_button"] =   plugins_url('../dist/js/admin-rating-popup-classic-editor.js', __FILE__);
    return $plugin_array;
}

function iskillspc_ce_enqueue_editor_scripts($plugin_array)
{
    //enqueue TinyMCE plugin script with its ID.
    $plugin_array["iskillspc_ce_popup_button"] =   plugins_url('../dist/js/admin-popup-classic-editor.js', __FILE__);
    return $plugin_array;
}

function iskillspb_ce_enqueue_editor_scripts($plugin_array)
{
    //enqueue TinyMCE plugin script with its ID.
    $plugin_array["iskillspb_ce_popup_button"] =   plugins_url('../dist/js/admin-price-popup-classic-editor.js', __FILE__);
    return $plugin_array;
}

function iskillsct_ce_enqueue_editor_scripts($plugin_array)
{
    //enqueue TinyMCE plugin script with its ID.
    $plugin_array["iskillsct_ce_popup_button"] =   plugins_url('../dist/js/admin-comparison-classic-editor.js', __FILE__);
    return $plugin_array;
}

add_filter("mce_buttons", "iskillspc_ce_register_buttons_editor");

function iskillspc_ce_register_buttons_editor($buttons)
{
    //register buttons with their id.
    array_push($buttons, "iskillspc_ce_popup_button");
    return $buttons;
}


function iskillspc_ce_editor_style($hook)
{
    if (($hook == 'post-new.php' || $hook == 'post.php') && get_user_option('rich_editing') == 'true') {
        wp_enqueue_style('iskillspc_ce_editor_style', plugins_url('../dist/css/admin-ce-popup.css', __FILE__), null, iskillsPC_CSS_VER);
        add_filter('admin_footer', 'iskillspc_ce_editor_popup');
    }
}
function iskillsrb_rating_editor_style($hook)
{
    if (($hook == 'post-new.php' || $hook == 'post.php') && get_user_option('rich_editing') == 'true') {
        wp_enqueue_style('iskillsrb_rating_editor_style', plugins_url('../dist/css/admin-rating-popup.css', __FILE__), null, iskillsPC_CSS_VER);
        add_filter('admin_footer', 'iskillsrb_rating_editor_popup');
    }
}
function iskillspb_ce_editor_style($hook)
{
    if (($hook == 'post-new.php' || $hook == 'post.php') && get_user_option('rich_editing') == 'true') {
        wp_enqueue_style('iskillspb_ce_editor_style', plugins_url('../dist/css/admin-price-popup.css', __FILE__), null, iskillsPC_CSS_VER);
        add_filter('admin_footer', 'iskillspb_ce_editor_popup');
    }
}
add_action('admin_enqueue_scripts', 'iskillspc_ce_editor_style');
add_action('admin_enqueue_scripts', 'iskillsrb_rating_editor_style');
add_action('admin_enqueue_scripts', 'iskillspb_ce_editor_style');

function iskillsrb_rating_editor_popup()
{

?>
    <div id="iskillsrb_rating_editor_popup" style="display:none;" class="">
        <div id="iskillsrb_rating_editor_popup_inner">
            <div class="iskillsrb-rating-top-head">
                <h2>iskills Rating Box</h2>
                <button type="button" class="iskillsrb-rating-close">&times;</button>
            </div>
            <div class="iskillsrb-rating-header">
                <div class="iskillsrb-fl">
                    <div class="clear"></div>
                    <h3><img src="<?php echo plugins_url('../dist/img/Favicon.png', __FILE__); ?>"> <span><b>iskills Rating Box</b> <small><small></small></small></span></h3>
                    <div class="clear"></div>
                </div>
                <div class="iskillsrb-fr">
                </div>
                <div class="clear"></div>
            </div>

            <div class="clear"></div>
            <form autocomplete="off" id="iskillsrb-rating-popup">
                <div class="iskillsrb-content">
                    <div id="quality-bar">
                        <div class="form-group inline-group">
                            <label for="iskillsrb-quality">Quality Bar Title</label>
                            <input class="form-control" placeholder="Quality" id="quality_title" name="quality_title" />
                        </div>
                        <div class="form-group inline-group">
                            <label for="iskillsrb-quality-percentage">Quality Bar Percentage</label>
                            <input type="number" class="form-control" placeholder="50" id="quality_percentage" name="quality_percentage" />
                        </div>
                    </div>

                    <div id="price-bar">
                        <div class="form-group inline-group">
                            <label for="iskillsrb-price">Price Bar Title</label>
                            <input class="form-control" placeholder="Price" id="price_title" name="price_title" />
                        </div>
                        <div class="form-group inline-group">
                            <label for="iskillsrb-price-percentage">Price Bar Percentage</label>
                            <input type="number" class="form-control" placeholder="50" id="price_percentage" name="price_percentage" />
                        </div>
                    </div>

                    <div id="design-bar">
                        <div class="form-group inline-group">
                            <label for="iskillsrb-design">Design Bar Title</label>
                            <input class="form-control" placeholder="Design" id="design_title" name="design_title" />
                        </div>
                        <div class="form-group inline-group">
                            <label for="iskillsrb-design-percentage">Design Bar Percentage</label>
                            <input type="number" class="form-control" placeholder="50" id="design_percentage" name="design_percentage" />
                        </div>
                    </div>

                    <div id="usability-bar">
                        <div class="form-group inline-group">
                            <label for="iskillsrb-usability">Usability Bar Title</label>
                            <input class="form-control" placeholder="Usability" id="usability_title" name="usability_title" />
                        </div>
                        <div class="form-group inline-group">
                            <label for="iskillsrb-usability-percentage">Usability Bar Percentage</label>
                            <input type="number" class="form-control" placeholder="50" id="usability_percentage" name="usability_percentage" />
                        </div>
                    </div>
                </div>
                <div class="iskillsrb-sidebar ">
                    <div class="form-group"><label>Show Quality &nbsp;</label>
                        <label class="switch">
                            <input type="checkbox" name="show_quality" id="show_quality" checked>
                            <span class="slider round"></span>
                        </label>
                    </div>
                    <div class="form-group"><label>Show Price &nbsp;</label>
                        <label class="switch">
                            <input type="checkbox" name="show_price" id="show_price" checked>
                            <span class="slider round"></span>
                        </label>
                    </div>
                    <div class="form-group"><label>Show Design &nbsp;</label>
                        <label class="switch">
                            <input type="checkbox" name="show_design" id="show_design" checked>
                            <span class="slider round"></span>
                        </label>
                    </div>
                    <div class="form-group"><label>Show Usability &nbsp;</label>
                        <label class="switch">
                            <input type="checkbox" name="show_usability" id="show_usability" checked>
                            <span class="slider round"></span>
                        </label>
                    </div>
                </div>
                <div class="clear"></div>
                <div class="iskillsrb-rating-footer">
                    <a href="#" id="footer-close" class="iskillsrb-button iskillsrb-default iskillsrb-fr">Cancel</a>
                    <a href="#" id="iskillsrb-rating-submit" class="iskillsrb-button iskillsrb-success  iskillsrb-fr">Insert Shortcode</a>
                </div>
            </form>
        </div>
    </div>
<?php
}
function iskillspb_ce_editor_popup()
{

?>
<div id="iskillspb_ce_editor_popup" style="display:none;" class="">
        <div id="iskillspb_ce_editor_popup_inner">
            <div class="iskillspb-ce-top-head">
            <h2>iskills Rating Box</h2>
            <button type="button" class="iskillsrb-rating-close">&times;</button>
            </div>
     <div class="iskillspb-ce-header">
                <div class="iskillspb-fl">
                    <div class="clear"></div>
                    <h3><img src="<?php echo plugins_url('../dist/img/Favicon.png', __FILE__); ?>"> <span><b>iskills Top 3 Boxes</b> <small><small></small></small></span></h3>
                    <div class="clear"></div>
                </div>
                
                <div class="iskillspb-fr">
                </div>
                <div class="clear"></div>
            </div>
            <!-- pros is replaced by p1 -->
             <form autocomplete="off" id="iskillspb-ce-popup">
                <div class="iskillspb-content">
                    <div class="form-group inline-group">
                        <label for="iskillspb-p1">Top Box 1 Title</label>
                        <input class="form-control" value="Netgear Nighthawk X10" id="p1_title" name="p1_title" />
                    </div>
                    <div class="form-group inline-group">
                        <label for="iskillspb-pkg1">Package Name</label>
                        <input class="form-control" value="Editor's Choice" id="p1_pkg" name="p1_pkg" />
                    </div>

                    <div class="form-group">
                        <label for="iskillspb-p1">Enter Box 1 offers</label>
                        <textarea class="form-control" id="iskillspb-p1" rows="11"></textarea>
                    </div>
                    <div class="form-group inline-group">
                        <label for="iskillspb-p2">Top Box 2 Title</label>
                        <input class="form-control" value="Netgear Nighthawk X10" id="p2_title" name="p2_title" />
                    </div>
                    <div class="form-group inline-group">
                        <label for="iskillspb-pkg2">Package Name</label>
                        <input class="form-control" value="Premium Pick" id="p2_pkg" name="p2_pkg" />
                    </div>
                    <div class="form-group">
                        <label for="iskillspb-p2">Enter Box 2 offers</label>
                        <textarea class="form-control" id="iskillspb-p2" rows="11"></textarea>
                    </div>
                    <div class="form-group inline-group">
                        <label for="iskillspb-p3">Top Box 3 Title</label>
                        <input class="form-control" value="Netgear Nighthawk X10" id="p3_title" name="p3_title" />
                    </div>
                    <div class="form-group inline-group">
                        <label for="iskillspb-pkg3">Package Name</label>
                        <input class="form-control" value="Budget Pick" id="p3_pkg" name="p3_pkg" />
                    </div>
                    <div class="form-group">
                        <label for="iskillspb-p3">Enter Box 3 offers</label>
                        <textarea class="form-control" id="iskillspb-p3" rows="11"></textarea>
                    </div>
                </div>
                <div class="iskillspc-sidebar">
                    <div class="form-group">
                        <label for="iskillspb-img1">Top Box 1 pic</label>
                        <input class="form-control" value="" id="p1_img" name="p1_img" />
                        <input type="hidden" name="image_url2" id="image_url_2" class="regular-text" value="">
                        <input type="button" name="upload-btn" id="upload-btn-2" class="button-secondary" value="Upload Image">

                    </div>
                    <div class="form-group">
                        <label for="p1_icon">Box 1 Icon : </label>
                        <input class="form-control iskills-pros-cons-icons" autocomplete="off" id="p1_icon" />
                    </div>
                    <hr />
                    <div class="form-group">
                        <label for="iskillspb-img2">Top Box 2 pic</label>
                        <input class="form-control" value="" id="p2_img" name="p2_img" />
                    </div>
                    <div class="form-group">
                        <label for="p2_icon">Box 2 Icon : </label>
                        <input class="form-control iskills-pros-cons-icons" autocomplete="off" id="p2_icon" />
                    </div>
                    <hr />
                    <div class="form-group">
                        <label for="iskillspb-img3">Top Box 3 pic</label>
                        <input class="form-control" value="" id="p3_img" name="p3_img" />
                    </div>
                    <div class="form-group">
                        <label for="p3_icon">Box 3 Icon : </label>
                        <input class="form-control iskills-pros-cons-icons" autocomplete="off" id="p3_icon" />
                    </div>
                    <hr />
                    <div id="iskillspc-wr-btn-amazon">
                        <div class="form-group">
                            <label for="iskillspc-cons">Button Icon</label>
                            <input class="form-control iskills-pros-cons-icons icon-input" id="pb_button_icon" name="pb_button_icon" />
                        </div>
                        <div class="form-group">
                            <label for="iskillspc-cons">Button Text</label>
                            <input class="form-control" id="pb_link_text" name="pb_link_text" />
                        </div>
                        <div class="form-group">
                            <label for="iskillspc-cons">Button Link</label>
                            <input class="form-control" id="pb_link" name="pb_link" />
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
                <div class="iskillspb-ce-footer">
                    <a href="#" id="footer-close" class="iskillspb-button iskillspb-default iskillspb-fr">Cancel</a>
                    <a href="#" id="iskillspb-ce-submit" class="iskillspb-button iskillspb-success  iskillspb-fr">Insert Shortcode</a>
                </div>
            </form>
        </div>
</div>
<?php
}


function iskillspc_ce_editor_popup()
{
?>
    <div id="iskillspc_ce_editor_popup" style="display:none;" class="">
        <div id="iskillspc_ce_editor_popup_inner">
            <div class="iskillspc-ce-top-head">
                <h2>iskills Affiliate Box</h2>
                <button type="button" class="iskillspc-ce-close">&times;</button>
                <form class="iskills_option">
                <select class="iskilss_value" style="width:100%; margin-bottom:20px">
                    <option value="pros">iSkills Pros & Cons</option>
                    <option value="rating">iSkills Rating Box</option>
                    <option value="price">iSkills Top 3 Boxes</option>
                    <option value="comparison">iSkills Comparison Tables</option>
                </select>
                </form>
            </div>
           <div id="pros_option">
           <div class="iskillspc-ce-header">
                <div class="iskillspc-fl">
                    <div class="clear"></div>
                    <h3><img src="<?php echo plugins_url('../dist/img/Favicon.png', __FILE__); ?>"> <span><b>iskills Pros &amp; Cons</b> <small><small></small></small></span></h3>
                    <div class="clear"></div>
                </div>
                
                <div class="iskillspc-fr">
                </div>
                <div class="clear"></div>
            </div>
             <form autocomplete="off" id="iskillspc-ce-popup">
                <div class="iskillspc-content">
                    <div class="form-group inline-group">
                        <label for="iskillspc-cons">Pros Title</label>
                        <input class="form-control" value="Pros" id="pros_title" name="pros_title" />
                    </div>
                    <div class="form-group">
                        <label for="iskillspc-pros">Enter Pros</label>
                        <textarea class="form-control" id="iskillspc-pros" rows="11"></textarea>
                    </div>
                    <div class="form-group inline-group">
                        <label for="iskillspc-cons">Cons Title</label>
                        <input class="form-control" value="Cons" id="cons_title" name="cons_title" />
                    </div>
                    <div class="form-group">
                        <label for="iskillspc-cons">Enter Cons</label>
                        <textarea class="form-control" id="iskillspc-cons" rows="11"></textarea>
                    </div>
                </div>
                <div class="iskillspc-sidebar">
                    <div class="form-group"><label>Show Main Title &nbsp;</label>
                        <label class="switch">
                            <input type="checkbox" name="show_title" id="show_title">
                            <span class="slider round"></span>
                        </label>
                    </div>
                    <div id="wr-main-title" class="form-group">
                        <label for="iskillspc-cons">Main Title</label>
                        <input class="form-control" value="Pros & Cons" id="main-title" />
                    </div>
                    <hr />
                    <div class="form-group">
                        <label for="pros-icon">Pros Icon : </label>
                        <input class="form-control iskills-pros-cons-icons" autocomplete="off" id="pros-icon" />
                    </div>
                    <div class="form-group">
                        <label for="cons-icon">Cons Icon : </label>
                        <input class="form-control iskills-pros-cons-icons" autocomplete="off" id="cons-icon" />
                    </div>
                    <hr />
                    <div class="form-group" style="display:none;">
                        <label for="iskillspc-cons">Use Icon in Heading</label>
                        <select id="use_heading_icon" class="form-control">
                            <option value="">Global</option>
                            <option value="1">Yes</option>
                            <option value="0">No</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="iskillspc-cons">Pros Title Icon</label>
                        <input class="form-control iskills-pros-cons-icons icon-input" id="heading_pros_icon" name="heading_pros_icon" />
                        <small class="help-block">icon will appear when setting 'Use Icon in Heading' are enabled</small>
                    </div>
                    <div class="form-group">
                        <label for="iskillspc-cons">Cons Title Icon</label>
                        <input class="form-control iskills-pros-cons-icons icon-input" id="heading_cons_icon" name="heading_cons_icon" />
                        <small class="help-block">icon will appear when setting 'Use Icon in Heading' are enabled</small>
                    </div>
                    <hr />
                    <div class="form-group"><label>Show Button &nbsp;</label>
                        <label class="switch">
                            <input type="checkbox" name="show_button" id="show_button">
                            <span class="slider round"></span>
                        </label>
                    </div>
                    <div id="iskillspc-wr-btn-amazon">
                        <div class="form-group">
                            <label for="iskillspc-cons">Button Icon</label>
                            <input class="form-control iskills-pros-cons-icons icon-input" id="button_icon" name="button_icon" />
                        </div>
                        <div class="form-group">
                            <label for="iskillspc-cons">Button Text</label>
                            <input class="form-control" id="link_text" name="link_text" />
                        </div>
                        <div class="form-group">
                            <label for="iskillspc-cons">Button Link</label>
                            <input class="form-control" id="link" name="link" />
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
                <div class="iskillspc-ce-footer">
                    <a href="#" id="footer-close" class="iskillspc-button iskillspc-default iskillspc-fr">Cancel</a>
                    <a href="#" id="iskillspc-ce-submit" class="iskillspc-button iskillspc-success  iskillspc-fr">Insert Shortcode</a>
                </div>
            </form>
            </div>
            
            <style>
                #rating_option .form-group{
                    margin-bottom: 0.45rem;
                    vertical-align: middle;
                 }
                 #rating_option label {
                    display: inline-block;
                    margin-bottom: 0.1rem;
                    font-weight: bold;
                    font-size: 0.7rem;
                    width: 20%;
                    margin-left: 5%;
                }
                #rating_option .iskillsrb-rating-footer {
                    border-top: 2px solid #d9d9d9;
                    text-align: right;
                    overflow: hidden;
                }
                #rating_option .iskillsrb-content{
                    width: 70%;
                    float: left;
                }
                #rating_option .iskillsrb-button {
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
                #rating_option .iskillsrb-default {
                    background-color: #6c757d;
                }
                #rating_option .iskillsrb-fr {
                    float: right;
                }
              #rating_option .iskillsrb-success {
                    background-color: #28a745;
                }
                #rating_option .iskillsrb-rating-header {
                    background-color: #f1f1f1;
                    border-top: 4px solid #4285f4;
                    padding: 0px 15px;
                    margin-bottom: 15px;
                }
                #rating_option .iskillsrb-fl {
                    float: left;
                }
                #rating_option .iskillsrb-fr {
                    float: right;
                }
                #rating_option .iskillsrb-rating-header h3 img {
                float: left;
                width: 40px;
                height: 40px;
                margin-top: -5px;
                margin-bottom: 12px;
                }
                #rating_option .iskillsrb-rating-header h3 > span {
                margin-top: 5px;
                display: inline-block;
                margin-left: 10px;
            }

            /* TOP 3 BOXES CSS */
        #price_option{
        display: none;
        }

        #price_option .iskillspb-ce-header {
            background-color: #f1f1f1;
            border-top: 4px solid #4285f4;
            padding: 0px 15px;
            margin-bottom: 15px;
        }

        #price_option .iskillspb-ce-header h3>span {
            margin-top: 5px;
            display: inline-block;
            margin-left: 10px;
        }

        #price_option .iskillspb-ce-header h3 img {
            float: left;
            width: 40px;
            height: 40px;
            margin-top: -5px;
            margin-bottom: 12px;
        }

        #price_option .iskillspb-ce-footer {
            border-top: 2px solid #d9d9d9;
            text-align: right;
            overflow: hidden;
        }

        #price_option .iskillspb-content {
            width: 70% !important;
            float: left;
        }

        #price_option .iskillspb-sidebar {
            width: 28%;
            float: right;
        }

        #price_option .form-group {
            margin-bottom: .35rem;
        }

        #price_option label {
            display: inline-block;
            margin-bottom: .1rem;
            font-weight: bold;
            font-size: .7rem;
        }

        #price_option .form-control {
            display: block;
            width: 100%;
            padding: .175rem .75rem;
            font-size: .8rem;
            line-height: 1;
            color: #495057;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #ced4da;
            border-radius: .25rem;
            transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
        }

        #price_option .icon-input {
            width: 80%;
        }

        #price_option select {
            padding: 2px;
            line-height: 28px;
            height: 28px;
            vertical-align: middle;
        }

        #price_option textarea.form-control {
            overflow: auto;
            resize: vertical;
            font-size: .9rem;
            line-height: 1.3;
        }

        #price_option .inline-group .form-control {
            width: 50%;
            display: inline-block;
        }

        #price_option .iskillspb-fl {
            float: left;
        }

        #price_option .iskillspb-fr {
            float: right;
        }

        #price_option #footer-close {
            margin-left: 5px;
        }

        #price_option hr {
            border-top: none;
            border-bottom: 1px solid #e2e4e7;
            margin-bottom: .75em 0;
        }

        #price_option #iskillspb-p1 {
            background-color: #f2fef2;
        }
        #price_option #iskillspb-p2 {
            background-color: #f2fef2;
        }
        #price_option #iskillspb-p3 {
            background-color: #f2fef2;
        }

        #price_option .iskillspb-button {
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
                        #price_option .iskillspb-default {
                            background-color: #6c757d;
                        }
                        #price_option .iskillspb-fr {
                            float: right;
                        }
                    #price_option .iskillspb-success {
                            background-color: #28a745;
                        }

                /* COMPARISON TABLE STYLES */
                        #comparison_option{
                            display: none;
                        }

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
                        #comparison_option .iskillsct-fr {
                            float: right;
                        }
                        #comparison_option .iskillsct-success {
                            background-color: #28a745;
                        }
            /* END OF COMPARISON TABLES STYLES */
            </style>
            <div id="rating_option" style="display:none">
            <div class="iskillsrb-rating-header">
                <div class="iskillsrb-fl">
                    <div class="clear"></div>
                    <h3><img src="<?php echo plugins_url('../dist/img/Favicon.png', __FILE__); ?>"> <span><b>iskills Rating Box</b> <small><small></small></small></span></h3>
                    <div class="clear"></div>
                </div>
                <div class="iskillsrb-fr">
                </div>
                <div class="clear"></div>
            </div>

            <form autocomplete="off" id="iskillsrb-rating-popup">
                <div class="iskillsrb-content">
                    <div id="quality-bar">
                        <div class="form-group inline-group">
                            <label for="iskillsrb-quality">Quality Bar Title</label>
                            <input class="form-control" placeholder="Quality" id="quality_title" name="quality_title" />
                        </div>
                        <div class="form-group inline-group">
                            <label for="iskillsrb-quality-percentage">Quality Bar Percentage</label>
                            <input type="number" class="form-control" placeholder="50" id="quality_percentage" name="quality_percentage" />
                        </div>
                    </div>

                    <div id="price-bar">
                        <div class="form-group inline-group">
                            <label for="iskillsrb-price">Price Bar Title</label>
                            <input class="form-control" placeholder="Price" id="price_title" name="price_title" />
                        </div>
                        <div class="form-group inline-group">
                            <label for="iskillsrb-price-percentage">Price Bar Percentage</label>
                            <input type="number" class="form-control" placeholder="50" id="price_percentage" name="price_percentage" />
                        </div>
                    </div>

                    <div id="design-bar">
                        <div class="form-group inline-group">
                            <label for="iskillsrb-design">Design Bar Title</label>
                            <input class="form-control" placeholder="Design" id="design_title" name="design_title" />
                        </div>
                        <div class="form-group inline-group">
                            <label for="iskillsrb-design-percentage">Design Bar Percentage</label>
                            <input type="number" class="form-control" placeholder="50" id="design_percentage" name="design_percentage" />
                        </div>
                    </div>

                    <div id="usability-bar">
                        <div class="form-group inline-group">
                            <label for="iskillsrb-usability">Usability Bar Title</label>
                            <input class="form-control" placeholder="Usability" id="usability_title" name="usability_title" />
                        </div>
                        <div class="form-group inline-group">
                            <label for="iskillsrb-usability-percentage">Usability Bar Percentage</label>
                            <input type="number" class="form-control" placeholder="50" id="usability_percentage" name="usability_percentage" />
                        </div>
                    </div>
                </div>
                <div class="iskillsrb-sidebar ">
                    <div class="form-group"><label>Show Quality &nbsp;</label>
                        <label class="switch">
                            <input type="checkbox" name="show_quality" id="show_quality" checked>
                            <span class="slider round"></span>
                        </label>
                    </div>
                    <div class="form-group"><label>Show Price &nbsp;</label>
                        <label class="switch">
                            <input type="checkbox" name="show_price" id="show_price" checked>
                            <span class="slider round"></span>
                        </label>
                    </div>
                    <div class="form-group"><label>Show Design &nbsp;</label>
                        <label class="switch">
                            <input type="checkbox" name="show_design" id="show_design" checked>
                            <span class="slider round"></span>
                        </label>
                    </div>
                    <div class="form-group"><label>Show Usability &nbsp;</label>
                        <label class="switch">
                            <input type="checkbox" name="show_usability" id="show_usability" checked>
                            <span class="slider round"></span>
                        </label>
                    </div>
                </div>
                <div class="clear"></div>
                <div class="iskillsrb-rating-footer">
                    <a href="#" id="footer-close" class="iskillsrb-button iskillsrb-default iskillsrb-fr">Cancel</a>
                    <a href="#" id="iskillsrb-rating-submit" class="iskillsrb-button iskillsrb-success  iskillsrb-fr">Insert Shortcode</a>
                </div>
            </form>
            </div>
            <!---  RATING BOX -------->


            <!---   PRICE BOX  ------->
    <div id="price_option">
           <div class="iskillspb-ce-header">
                <div class="iskillspb-fl">
                    <div class="clear"></div>
                    <h3><img src="<?php echo plugins_url('../dist/img/Favicon.png', __FILE__); ?>"> <span><b>iskills Top 3 Boxes</b> <small><small></small></small></span></h3>
                    <div class="clear"></div>
                </div>
                
                <div class="iskillspb-fr">
                </div>
                <div class="clear"></div>
            </div>
             <form autocomplete="off" id="iskillspb-ce-popup">
                <div class="iskillspb-content">
                    <div class="form-group inline-group">
                        <label for="iskillspb-p1">Top Box 1 Title</label>
                        <input class="form-control" value="Netgear Nighthawk X10" id="p1_title" name="p1_title" />
                    </div>
                    <div class="form-group inline-group">
                        <label for="iskillspb-pkg1">Package Name</label>
                        <input class="form-control" value="Editor's Choice" id="p1_pkg" name="p1_pkg" />
                    </div>

                    <div class="form-group">
                        <label for="iskillspb-p1">Enter Box 1 offers</label>
                        <textarea class="form-control" id="iskillspb-p1" rows="11"></textarea>
                    </div>
                    <div class="form-group inline-group">
                        <label for="iskillspb-p2">Top Box 2 Title</label>
                        <input class="form-control" value="Netgear Nighthawk X10" id="p2_title" name="p2_title" />
                    </div>
                    <div class="form-group inline-group">
                        <label for="iskillspb-pkg2">Package Name</label>
                        <input class="form-control" value="Premium Pick" id="p2_pkg" name="p2_pkg" />
                    </div>
                    <div class="form-group">
                        <label for="iskillspb-p2">Enter Box 2 offers</label>
                        <textarea class="form-control" id="iskillspb-p2" rows="11"></textarea>
                    </div>
                    <div class="form-group inline-group">
                        <label for="iskillspb-p3">Top Box 3 Title</label>
                        <input class="form-control" value="Netgear Nighthawk X10" id="p3_title" name="p3_title" />
                    </div>
                    <div class="form-group inline-group">
                        <label for="iskillspb-pkg3">Package Name</label>
                        <input class="form-control" value="Budget Pick" id="p3_pkg" name="p3_pkg" />
                    </div>
                    <div class="form-group">
                        <label for="iskillspb-p3">Enter Box 3 offers</label>
                        <textarea class="form-control" id="iskillspb-p3" rows="11"></textarea>
                    </div>
                </div>
                <div class="iskillspc-sidebar">
                    <div class="form-group">
                        <label for="iskillspb-img1">Top Box 1 pic</label>
                        <input class="form-control" value="" id="p1_img" name="p1_img" />
                        <input type="hidden" name="image_url2" id="image_url_2" class="regular-text" value="">
                        <input type="button" name="upload-btn" id="upload-btn-2" class="button-secondary" value="Upload Image">
                    </div>
                    <div class="form-group">
                        <label for="p1_icon">Box 1 Icon : </label>
                        <input class="form-control iskills-pros-cons-icons" autocomplete="off" id="p1_icon" />
                    </div>
                    <hr />
                    <div class="form-group">
                        <label for="iskillspb-img2">Top Box 2 pic</label>
                        <input class="form-control" value="" id="p2_img" name="p2_img" />
                        <input type="hidden" name="image_url3" id="image_url_3" class="regular-text" value="">
                        <input type="button" name="upload-btn" id="upload-btn-3" class="button-secondary" value="Upload Image">
                    </div>
                    <div class="form-group">
                        <label for="p2_icon">Box 2 Icon : </label>
                        <input class="form-control iskills-pros-cons-icons" autocomplete="off" id="p2_icon" />
                    </div>
                    <hr />
                    <div class="form-group">
                        <label for="iskillspb-img3">Top Box 3 pic</label>
                        <input class="form-control" value="" id="p3_img" name="p3_img" />
                        <input type="hidden" name="image_url4" id="image_url_4" class="regular-text" value="">
                        <input type="button" name="upload-btn" id="upload-btn-4" class="button-secondary" value="Upload Image">
                    </div>
                    <div class="form-group">
                        <label for="p3_icon">Box 3 Icon : </label>
                        <input class="form-control iskills-pros-cons-icons" autocomplete="off" id="p3_icon" />
                    </div>
                    <hr />
                    <div id="iskillspc-wr-btn-amazon">
                        <div class="form-group">
                            <label for="iskillspc-cons">Top Box 1 Button Icon</label>
                            <input class="form-control iskills-pros-cons-icons icon-input" id="pb_button_icon1" name="pb_button_icon1" />
                        </div>
                        <div class="form-group">
                            <label for="iskillspc-cons">Top Box 1 Button Text</label>
                            <input class="form-control" id="pb_link_text1" name="pb_link_text1" />
                        </div>
                        <div class="form-group">
                            <label for="iskillspc-cons">Top Box 1 Button Link</label>
                            <input class="form-control" id="pb_link1" name="pb_link1" />
                        </div>
                        <div class="form-group">
                            <label for="iskillspc-cons">Top Box 2 Button Icon</label>
                            <input class="form-control iskills-pros-cons-icons icon-input" id="pb_button_icon2" name="pb_button_icon2" />
                        </div>
                        <div class="form-group">
                            <label for="iskillspc-cons">Top Box 2 Button Text</label>
                            <input class="form-control" id="pb_link_text2" name="pb_link_text2" />
                        </div>
                        <div class="form-group">
                            <label for="iskillspc-cons">Top Box 2 Button Link</label>
                            <input class="form-control" id="pb_link2" name="pb_link2" />
                        </div>
                        <div class="form-group">
                            <label for="iskillspc-cons">Top Box 3 Button Icon</label>
                            <input class="form-control iskills-pros-cons-icons icon-input" id="pb_button_icon3" name="pb_button_icon3" />
                        </div>
                        <div class="form-group">
                            <label for="iskillspc-cons">Top Box 3 Button Text</label>
                            <input class="form-control" id="pb_link_text3" name="pb_link_text3" />
                        </div>
                        <div class="form-group">
                            <label for="iskillspc-cons">Top Box 3 Button Link</label>
                            <input class="form-control" id="pb_link3" name="pb_link3" />
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
                <div class="iskillspb-ce-footer">
                    <a href="#" id="footer-close" class="iskillspb-button iskillspb-default iskillspb-fr">Cancel</a>
                    <a href="#" id="iskillspb-ce-submit" class="iskillspb-button iskillspb-success  iskillspb-fr">Insert Shortcode</a>
                </div>
            </form>
            </div>
    <!-- / PRICE BOX -->


    <!-- COMPARISON TABLE -->
    <div id="comparison_option">
           <div class="iskillspc-ce-header">
                <div class="iskillspc-fl">
                    <div class="clear"></div>
                    <h3><img src="<?php echo plugins_url('../dist/img/Favicon.png', __FILE__); ?>"> <span><b>iskills Comparison Tables</b> <small><small></small></small></span></h3>
                    <div class="clear"></div>
                </div>
                
                <div class="iskillspc-fr">
                </div>
                <div class="clear"></div>
            </div>
             <form autocomplete="off" id="iskillsct-ce-popup">
                <div class="iskillsct-content">

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

                    <table class="table" id="iskillsct_table">
                        <thead class="thead-dark">
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
                    <a href="#" id="iskillsct-ce-submit" class="iskillsct-button iskillsct-success  iskillsct-fr">Insert Shortcode</a>
                </div>
            </form>
            </div>

    <!-- / COMPARISON TABLE -->

        </div>
    </div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>

    // COMPARISON TABLE FRONT-END DOM Manipulation VIA JAVASCRIPT // 
                // generating row 
                
                $("#insert_c_rows").click(function(e){
                    e.preventDefault();
                    let no_of_rows = $("#comparison_rows").val();
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
                            if($("#iskillsct_table > tbody >").length == 0){
                                $("#iskillsct_table > tbody").html(row);
                            }
                            else {
                                $("#iskillsct_table > tbody").append(row);
                            }
                        }

                        if(!$("#c_show_button1").is(':checked')){
                            $("#c_show_button1").trigger("change");
                        }
                        if(!$("#c_show_button2").is(':checked')){
                            $("#c_show_button2").trigger("change");
                        }

                        // if(!$("#c_show_button1").is(':checked')){
                        //     if(!$("#c_show_button2").is(':checked')){
                        //         $("#show_buttons").remove();
                        //         $("#c_show_button1").trigger("change");
                        //         $("#c_show_button2").trigger("change");
                        //     }
                        // }


                });
                  
                $("#c_show_button1").on('change',function(e){
                    if(!$("#c_show_button1").is(":checked")){
                        $(document).find('.show_btn_1').remove();
                    }else{
                        insertButton1();
                    }
                });

                $("#c_show_button2").on('change',function(e){
                    if(!$("#c_show_button2").is(":checked")){
                        $(document).find('.show_btn_2').remove();
                    }else{
                        insertButton2();
                    }
                });

                function insertButton1(){
                    $('#iskillsct_table > tbody > tr td:nth-child(5) .buttons_1').each(function(i,obj){
                        let btnHtml = `<div class="form-group inline-group show_btn_1">
                                 <input class="form-control" value="Buy Now"  name="c_rows_btn1_text[]" class="c_rows_btn1_text" style="width:100px;" />
                                 <input class="form-control" value="#"  name="c_rows_btn1_link[]" class="c_rows_btn1_link" style="width:100px;" />
                             </div>`;

                        // alert($(obj).length);
                        $(obj).append(btnHtml);
                    });
                }

                function insertButton2(){
                    $('#iskillsct_table > tbody > tr td:nth-child(5) .buttons_2').each(function(i,obj){
                        let btnHtml = `<div class="form-group inline-group show_btn_2">
                                 <input class="form-control" value="Buy Now"  name="c_rows_btn2_text[]" class="c_rows_btn2_text" style="width: 100px; display:inline;" />
                                 <input class="form-control" value="#"  name="c_rows_btn2_link[]" class="c_rows_btn2_link" style="width: 100px; display:inline;"/>
                             </div>  `;
                        $(obj).append(btnHtml);
                    });
                }

                // to remove a row
                $(document).on('click', '.remove_c_row', function(e){
                    e.preventDefault();
                    $(this).closest('tr').remove();
                });

                // To Upload Image for comparison table
                $(document).on('click', '.c_rows_upload-btn', function(e) {
                    let input = $(this).closest('input').prev();
                    $('#footer-close').trigger('click');
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
                                        // $('#image_url_2').val(image_url);
                                        $(input).val(image_url);
                                        // $('#image_url2').attr('src',image_url);

                                        $('#mceu_13-button').trigger('click');
                                    });
                });

    // COMPARISON TABLE FRONT-END DOM VIA JAVASCRIPT ENDS HERE //
    // Ajax Request
    $('#iskillsct-ce-submit').on('click', function(e) {
            e.preventDefault();
            let comparisonRows = $("#comparison_rows").val();
            let cShowButton1 = 'off' 
            if($(".show_btn_1").val() !== undefined){
                cShowButton1 = $("#c_show_button1").val();
            }
            let cShowButton2 = 'off';
            if($(".show_btn_2").val() !== undefined){
                cShowButton2 = $("#c_show_button2").val();
            }
            let cTableTitle = $("#c_table_title").val();
            let tableRows= new Array();

            // get input Arrays
            var cRowsImg = $("input[name='c_rows_img[]']")
                         .map(function(){return $(this).val();})
                         .get();
            var cRowsPro = $("input[name='c_rows_pro[]']")
                         .map(function(){return $(this).val();})
                         .get();
            var cRowsFeatures = $("textarea[name='c_rows_features[]']")
                         .map(function(){return $(this).val();})
                         .get();
            var cRowsRating = $("input[name='c_rows_rating[]']")
                         .map(function(){return $(this).val();})
                         .get();
            var cRowsBtn1Text = $("input[name='c_rows_btn1_text[]']")
                         .map(function(){return $(this).val();})
                         .get();
            var cRowsBtn1Link = $("input[name='c_rows_btn1_link[]']")
                         .map(function(){return $(this).val();})
                         .get();
            var cRowsBtn2Text = $("input[name='c_rows_btn2_text[]']")
                         .map(function(){return $(this).val();})
                         .get();
            var cRowsBtn2Link = $("input[name='c_rows_btn2_link[]']")
                         .map(function(){return $(this).val();})
                         .get();
        

            let attributes = '';
            if(!comparisonRows.isEmpty()){
                attributes += ' c_rows="' + comparisonRows + '"';
            }
            if(!cShowButton1.isEmpty()){
                attributes += ' c_show_btn1="' + cShowButton1 + '"';
            }
            if(!cShowButton2.isEmpty()){
                attributes += ' c_show_btn2="' + cShowButton2 + '"';
            }

            // tinymce.execCommand('mceInsertContent', false, response);

            // Sending ajax call
            var pluginUrl = '<?php echo plugins_url(); ?>' ;
            
            $.ajax({
                url: pluginUrl + '/iskills-affiliate-box/include/iskillsct-save.php',
                type: 'post',
                data: $.param(
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
                        'is_sent': 'Success'
                    }
                ),
                beforeSend: function(){
                    // $("#iskillsct-ce-popup").trigger('reset');
                    $('#footer-close').trigger('click');
                },
                success: function(response){
                    console.log(response);
                    response = JSON.parse(response);
                    // console.log(response);
                    if(response.success){
                    var shortcode = response.post_id;
                    tinymce.execCommand('mceInsertContent', false, shortcode);
                    }
        
                },
                error: function(){
                    alert("Something is wrong");
                }
            });
        $('#footer-close').trigger('click');
        });
    
                $('#upload-btn-3').click(function(e) {
                    $('#footer-close').trigger('click');
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
                                        $('#image_url_3').val(image_url);
                                        $('#p2_img').val(image_url);
                                        $('#image_url3').attr('src',image_url);

                                        $('#mceu_13-button').trigger('click');
                                    });
                });

                $('#upload-btn-4').click(function(e) {
                    $('#footer-close').trigger('click');
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
                                        $('#image_url_4').val(image_url);
                                        $('#p3_img').val(image_url);
                                        $('#image_url4').attr('src',image_url);

                                        $('#mceu_13-button').trigger('click');
                                    });
                });

                
                 $('#upload-btn-2').click(function(e) {
                    $('#footer-close').trigger('click');
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
                                        $('#image_url_2').val(image_url);
                                        $('#p1_img').val(image_url);
                                        $('#image_url2').attr('src',image_url);

                                        $('#mceu_13-button').trigger('click');
                                    });
                });
               
                $(".iskilss_value").on('change',function(){
                    var option = $(".iskilss_value").val();
                    if(option == 'rating'){
                        $("#pros_option").hide();
                        $("#price_option").hide();
                        $("#comparison_option").hide();
                        $("#rating_option").show();
                    }
                    else if(option == 'pros'){
                        $("#rating_option").hide();
                        $("#price_option").hide();
                        $("#comparison_option").hide();
                        $("#pros_option").show();
                        
                    }
                    else if(option == 'price') {
                        $("#pros_option").hide();
                        $("#rating_option").hide();
                        $("#comparison_option").hide();
                        $("#price_option").show();
                    }
                    else if(option == 'comparison'){
                        $("#pros_option").hide();
                        $("#rating_option").hide();
                        $("#price_option").hide();
                        $("#comparison_option").show();

                    }
                });

                // Rating boxes switch buttons dom 
                $('#show_quality').on('change', function () {
                    if (this.checked) {
                        $('#quality-bar').stop().slideDown();;
                    } else {
                        $('#quality-bar').stop().slideUp();
                    }
                });


                    $('#show_price').on('change', function () {
                    if (this.checked) {
                        $('#price-bar').stop().slideDown();;
                    } else {
                        $('#price-bar').stop().slideUp();
                    }
                    });

                    $('#show_design').on('change', function () {
                    if (this.checked) {
                        $('#design-bar').stop().slideDown();;
                    } else {
                        
                        $('#design-bar').stop().slideUp();
                    }
                    });

                    $('#show_usability').on('change', function () {
                    if (this.checked) {
                        $('#usability-bar').stop().slideDown();;
                    } else {
                        $('#usability-bar').stop().slideUp();
                    }
                    });

    </script>
<?php

}
