//jQuery(function ($) {
var iskillsrbModule = {};
(function() {
    // console.log("init 0");
    // console.log(tinymce);
    tinymce.create('tinymce.plugins.iskillsrb_rating_popup_plugin', {
        //url argument holds the absolute url of our plugin directory		
        init: function(ed, url) {
            // console.log("init 11");
            // console.log(ed);
            //add new button
            ed.addButton('iskillsrb_rating_popup_button', {
                title: 'iskills Rating Box',
                cmd: 'iskillsrb_rating_popup_shortcode_command',
                image: url + '/../img/Favicon.png'
            });

            //button functionality.
            ed.addCommand('iskillsrb_rating_popup_shortcode_command', function(ui, v) {
                // console.log(ui);
                // console.log(v);
                //console.log(tinyMCE.activeEditor.selection.getContent());
                var content = tinyMCE.activeEditor.selection.getContent();
                console.log(content);
                var attrs = wp.shortcode.attrs(content).named;
                console.log(attrs);

                iskillsrbModule.iskillsrb_show_popup(attrs, content);

            });
        },

        getInfo: function() {
            return {
                longname: 'iskills Rating Box Popup',
                author: 'Bitsoft Solutions',
                version: '1'
            };
        }
    });

    tinymce.PluginManager.add('iskillsrb_rating_popup_button', tinymce.plugins.iskillsrb_rating_popup_plugin);
})();


jQuery(function($) {
    iskillsrbModule.iskillsrb_show_popup = function(attrs, content) {

            // console.log("inside show rb popup");

            $('#show_quality').on('change', function() {
                if (this.checked) {
                    $('#quality-bar').stop().slideDown();;
                } else {
                    $('#quality-bar').stop().slideUp();
                }
            });


            $('#show_price').on('change', function() {
                if (this.checked) {
                    $('#price-bar').stop().slideDown();;
                } else {
                    $('#price-bar').stop().slideUp();
                }
            });

            $('#show_design').on('change', function() {
                if (this.checked) {
                    $('#design-bar').stop().slideDown();;
                } else {

                    $('#design-bar').stop().slideUp();
                }
            });

            $('#show_usability').on('change', function() {
                if (this.checked) {
                    $('#usability-bar').stop().slideDown();;
                } else {
                    $('#usability-bar').stop().slideUp();
                }
            });


            $('#iskillsrb_rating_editor_popup').addClass('iskillsrb-rating-popup-display');
            $('body').css('overflow', 'hidden');
        }
        //iskillsrbModule.iskillsrb_show_popup = iskillsrb_show_popup;

    $('#iskillsrb-rating-submit').on('click', function(e) {
        e.preventDefault();
        console.log("Inside submit");
        //[iskillsrb][iskillspros]Line by line Pros here[/iskillspros][iskillscons]Line by line Cons here [/iskillscons][/iskillsrb]

        var attributes = '';

        var qb_title = $('#quality_title').val();
        if (!qb_title.isEmpty()) {
            attributes += ' qb_title="' + qb_title + '"';
        } else {
            attributes += ' qb_title=""';
        }

        var pb_title = $('#price_title').val();
        if (!pb_title.isEmpty()) {
            attributes += ' pb_title="' + pb_title + '"';
        } else {
            attributes += ' pb_title=""';
        }

        var db_title = $('#design_title').val();
        if (!db_title.isEmpty()) {
            attributes += ' db_title="' + db_title + '"';
        } else {
            attributes += ' db_title=""';
        }

        var ub_title = $('#usability_title').val();
        if (!ub_title.isEmpty()) {
            attributes += ' ub_title="' + ub_title + '"';
        } else {
            attributes += ' ub_title=""';
        }

        // adding percentage to the attributes
        var qb_percentage = $('#quality_percentage').val();
        if (!qb_percentage.isEmpty()) {
            attributes += ' qb_percentage="' + qb_percentage + '"';
        } else {
            attributes += ' qb_percentage=""';
        }

        var pb_percentage = $('#price_percentage').val();
        if (!pb_percentage.isEmpty()) {
            attributes += ' pb_percentage="' + pb_percentage + '"';
        } else {
            attributes += ' pb_percentage=""';
        }


        var db_percentage = $('#design_percentage').val();
        if (!db_percentage.isEmpty()) {
            attributes += ' db_percentage="' + db_percentage + '"';
        } else {
            attributes += ' db_percentage=""';
        }


        var ub_percentage = $('#usability_percentage').val();
        if (!ub_percentage.isEmpty()) {
            attributes += ' ub_percentage="' + ub_percentage + '"';
        } else {
            attributes += ' ub_percentage=""';
        }


        if ($('#show_quality:checkbox:checked').length == 1) {
            attributes += ' show_qb="true"';
        } else {
            attributes += ' show_qb="false"';
        }

        if ($('#show_design:checkbox:checked').length == 1) {
            attributes += ' show_db="true"';
        } else {
            attributes += ' show_db="false"';
        }

        if ($('#show_price:checkbox:checked').length == 1) {
            attributes += ' show_pb="true"';
        } else {
            attributes += ' show_pb="false"';
        }

        if ($('#show_usability:checkbox:checked').length == 1) {
            attributes += ' show_ub="true"';
        } else {
            attributes += ' show_ub="false"';
        }






        //pros_title cons_title heading_pros_icon heading_cons_icon button_icon link_text link



        tinymce.execCommand('mceInsertContent', false, '[iskillsrb ' + attributes + ' ][/iskillsrb]');
        $("#iskillsrb-rating-popup").trigger('reset');
        $('.iskillspc-ce-close').trigger('click');
    });

    $('#footer-close, .iskillspc-ce-close').on('click', function(e) {
        e.preventDefault();
        $('#iskillspc_ce_editor_popup').removeClass('iskillspc-ce-popup-display');
        $('body').css('overflow', '');
    });

    $('#show_title').on('change', function() {
        if (this.checked) {
            $('#wr-main-title').stop().slideDown();
        } else {
            $('#wr-main-title').stop().slideUp();
        }
    });
    $('#show_button').on('change', function() {
        console.log(this);
        if (this.checked) {
            $('#iskillsrb-wr-btn-amazon').stop().slideDown();
        } else {
            $('#iskillsrb-wr-btn-amazon').stop().slideUp();
        }
    });
    String.prototype.isEmpty = function() {
        return this.length === 0 || !this.trim();
    };
});