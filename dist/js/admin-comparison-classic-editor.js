//jQuery(function ($) {
    var iskillsctModule = {};
    (function() {
        console.log("init 0");
        console.log(tinymce);
        tinymce.create('tinymce.plugins.iskillsct_ce_popup_plugin', {
            //url argument holds the absolute url of our plugin directory		
            init: function(ed, url) {
    
                console.log(ed);
                //add new button
                ed.addButton('iskillsct_ce_popup_button', {
                    title: 'iskills Affiliate Box',
                    cmd: 'iskillsct_ce_popup_shortcode_command',
                    image: url + '/../img/Favicon.png'
                });
    
                //button functionality.
                ed.addCommand('iskillsct_ce_popup_shortcode_command', function(ui, v) {
                    // console.log(ui);
                    // console.log(v);
                    //console.log(tinyMCE.activeEditor.selection.getContent());
                    var content = tinyMCE.activeEditor.selection.getContent();
                    //console.log(content);
                    //console.log(wp.shortcode.regexp('iskillspb').test(content));
                    // console.log(wp.shortcode.next('iskillspb', content, 0));
                    var attrs = wp.shortcode.attrs(content).named;
                    // console.log(attrs);
                    iskillspbModule.iskillsct_show_popup(attrs, content);
    
                });
            },
    
            getInfo: function() {
                return {
                    longname: 'iskills Comparison Tables',
                    author: 'Bitsoft Solutions',
                    version: '1'
                };
            }
        });
    
        tinymce.PluginManager.add('iskillsct_ce_popup_button', tinymce.plugins.iskillsct_ce_popup_plugin);
    })();
    
    jQuery(function($) {
        iskillsctModule.iskillsct_show_popup = function(attrs, content) {
                //console.log($('#iskillspb_ce_editor_popup').length);
                $('#iskillsct_ce_editor_popup').addClass('iskillsct-ce-popup-display');
                $('body').css('overflow', 'hidden');
            }
            //iskillspbModule.iskillspb_show_popup = iskillspb_show_popup;
    
        
        $('#footer-close, .iskillsct-ce-close').on('click', function(e) {
            e.preventDefault();
            $('#iskillspc_ce_editor_popup').removeClass('iskillspc-ce-popup-display');
            $('body').css('overflow', '');
        });
    
        String.prototype.isEmpty = function() {
            return this.length === 0 || !this.trim();
        };
    });