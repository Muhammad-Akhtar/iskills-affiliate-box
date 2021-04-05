//jQuery(function ($) {
var iskillspbModule = {};
(function() {
    console.log("init 0");
    console.log(tinymce);
    tinymce.create('tinymce.plugins.iskillspb_ce_popup_plugin', {
        //url argument holds the absolute url of our plugin directory		
        init: function(ed, url) {
            console.log("init 11");
            console.log(ed);
            //add new button
            ed.addButton('iskillspb_ce_popup_button', {
                title: 'iskills Affiliate Box',
                cmd: 'iskillspb_ce_popup_shortcode_command',
                image: url + '/../img/Favicon.png'
            });

            //button functionality.
            ed.addCommand('iskillspb_ce_popup_shortcode_command', function(ui, v) {
                // console.log(ui);
                // console.log(v);
                //console.log(tinyMCE.activeEditor.selection.getContent());
                var content = tinyMCE.activeEditor.selection.getContent();
                //console.log(content);
                //console.log(wp.shortcode.regexp('iskillspb').test(content));
                // console.log(wp.shortcode.next('iskillspb', content, 0));
                var attrs = wp.shortcode.attrs(content).named;
                console.log(attrs);
                iskillspbModule.iskillspb_show_popup(attrs, content);

            });
        },

        getInfo: function() {
            return {
                longname: 'iskills Top 3 Boxes Popup',
                author: 'Bitsoft Solutions',
                version: '1'
            };
        }
    });

    tinymce.PluginManager.add('iskillspb_ce_popup_button', tinymce.plugins.iskillspb_ce_popup_plugin);
})();




jQuery(function($) {
    iskillspbModule.iskillspb_show_popup = function(attrs, content) {
            console.log("Hello");
            console.log(attrs);

            if (attrs.hasOwnProperty('p1-icon')) {
                $('#p1_icon').val(attrs.p1_icon);
            }
            if (attrs.hasOwnProperty('p2-icon')) {
                $('#p2_icon').val(attrs.p2_icon);
            }
            if (attrs.hasOwnProperty('p3-icon')) {
                $('#p3_icon').val(attrs.p3_icon);
            }

            if (attrs.hasOwnProperty('p1_title')) {
                $('#p1_title').val(attrs.p1_title);
            }
            if (attrs.hasOwnProperty('p2_title')) {
                $('#p2_title').val(attrs.p2_title);
            }
            if (attrs.hasOwnProperty('p3_title')) {
                $('#p3_title').val(attrs.p3_title);
            }
            if (attrs.hasOwnProperty('pb_button_icon')) {
                $('#pb_button_icon').val(attrs.pb_button_icon);
            }
            if (attrs.hasOwnProperty('pb_link_text')) {
                $('#pb_link_text').val(attrs.pb_link_text);
            }
            if (attrs.hasOwnProperty('pb_link')) {
                $('#pb_link').val(attrs.pb_link);
            }

            if (wp.shortcode.regexp('iskillspb').test(content)) {
                var iskillspros = content.match(wp.shortcode.regexp('iskillspros'))[0];
                iskillspros = iskillspros.substr(8, iskillspros.length - 17);
                $('#iskillspb_ce_editor_popup #iskillspb-pros').val(iskillspros.replace(/<br\s*[\/]?>/gi, '\n'));

                var iskillscons = content.match(wp.shortcode.regexp('iskillscons'))[0];
                iskillscons = iskillscons.substr(8, iskillscons.length - 17);
                $('#iskillspb_ce_editor_popup #iskillspb-cons').val(iskillscons.replace(/<br\s*[\/]?>/gi, '\n'));
            }

            //console.log($('#iskillspb_ce_editor_popup').length);
            $('#iskillspb_ce_editor_popup').addClass('iskillspb-ce-popup-display');
            $('body').css('overflow', 'hidden');
        }
        //iskillspbModule.iskillspb_show_popup = iskillspb_show_popup;

    $('#iskillspb-ce-submit').on('click', function(e) {
        e.preventDefault();
        //[iskillspb][iskillspros]Line by line Pros here[/iskillspros][iskillscons]Line by line Cons here [/iskillscons][/iskillspb]
        var content =
            '[iskillsp1]' +
            $('#iskillspb-p1').val().replace(/\n/g, '<br />') +
            '[/iskillsp1][iskillsp2]' +
            $('#iskillspb-p2').val().replace(/\n/g, '<br />') +
            '[/iskillsp2][iskillsp3]' +
            $('#iskillspb-p3').val().replace(/\n/g, '<br />') +
            '[/iskillsp3]';
        //	console.log(content);
        var attributes = '';

        console.log(content);

        // Price Box icons 
        var p1_icon = $('#p1_icon').val();
        if (!p1_icon.isEmpty()) {
            attributes += ' p1-icon="' + p1_icon + '"';
        }

        var p2_icon = $('#p2_icon').val();
        if (!p2_icon.isEmpty()) {
            attributes += ' p2-icon="' + p2_icon + '"';
        }

        var p3_icon = $('#p3_icon').val();
        if (!p3_icon.isEmpty()) {
            attributes += ' p3-icon="' + p3_icon + '"';
        }

        var p1_img = $('#p1_img').val();
        if (!p1_img.isEmpty()) {
            attributes += ' p1_img="' + p1_img + '"';
        }

        var p2_img = $('#p2_img').val();
        if (!p2_img.isEmpty()) {
            attributes += ' p2_img="' + p2_img + '"';
        }

        var p3_img = $('#p3_img').val();
        if (!p3_img.isEmpty()) {
            attributes += ' p3_img="' + p3_img + '"';
        }

        // Price Boxes title and package names
        var p1_title = $('#p1_title').val();
        if (!p1_title.isEmpty()) {
            attributes += ' p1_title="' + p1_title + '"';
        }

        var p2_title = $('#p2_title').val();
        if (!p2_title.isEmpty()) {
            attributes += ' p2_title="' + p2_title + '"';
        }

        var p3_title = $('#p3_title').val();
        if (!p3_title.isEmpty()) {
            attributes += ' p3_title="' + p3_title + '"';
        }

        var p1_pkg = $('#p1_pkg').val();
        if (!p1_pkg.isEmpty()) {
            attributes += ' p1_pkg="' + p1_pkg + '"';
        }

        var p2_pkg = $('#p2_pkg').val();
        if (!p2_pkg.isEmpty()) {
            attributes += ' p2_pkg="' + p2_pkg + '"';
        }

        var p3_pkg = $('#p3_pkg').val();
        if (!p3_pkg.isEmpty()) {
            attributes += ' p3_pkg="' + p3_pkg + '"';
        }

        // Button of price boxes
        var pb_button_icon1 = $('#pb_button_icon1').val();
        if (!pb_button_icon1.isEmpty()) {
            attributes += ' pb_button_icon1="' + pb_button_icon1 + '"';
        }
        var pb_link_text1 = $('#pb_link_text1').val();
        if (!pb_link_text1.isEmpty()) {
            attributes += ' pb_link_text1="' + pb_link_text1 + '"';
        }
        var pb_link1 = $('#pb_link1').val();
        if (!pb_link1.isEmpty()) {
            attributes += ' pb_link1="' + pb_link1 + '"';
        }

        var pb_button_icon2 = $('#pb_button_icon2').val();
        if (!pb_button_icon2.isEmpty()) {
            attributes += ' pb_button_icon2="' + pb_button_icon2 + '"';
        }
        var pb_link_text2 = $('#pb_link_text2').val();
        if (!pb_link_text2.isEmpty()) {
            attributes += ' pb_link_text2="' + pb_link_text2 + '"';
        }
        var pb_link2 = $('#pb_link2').val();
        if (!pb_link2.isEmpty()) {
            attributes += ' pb_link2="' + pb_link2 + '"';
        }

        var pb_button_icon3 = $('#pb_button_icon3').val();
        if (!pb_button_icon3.isEmpty()) {
            attributes += ' pb_button_icon3="' + pb_button_icon3 + '"';
        }
        var pb_link_text3 = $('#pb_link_text3').val();
        if (!pb_link_text3.isEmpty()) {
            attributes += ' pb_link_text3="' + pb_link_text3 + '"';
        }
        var pb_link3 = $('#pb_link3').val();
        if (!pb_link3.isEmpty()) {
            attributes += ' pb_link3="' + pb_link3 + '"';
        }
        // console.log(attributes);
        tinymce.execCommand('mceInsertContent', false, '[iskillspb ' + attributes + ' ]' + content + '[/iskillspb]');
        $("#iskillspc-ce-popup").trigger('reset');
        $('.iskillspc-ce-close').trigger('click');
    });

    $('#footer-close, .iskillspb-ce-close').on('click', function(e) {
        e.preventDefault();
        $('#iskillspc_ce_editor_popup').removeClass('iskillspc-ce-popup-display');
        $('body').css('overflow', '');
    });

    String.prototype.isEmpty = function() {
        return this.length === 0 || !this.trim();
    };
});