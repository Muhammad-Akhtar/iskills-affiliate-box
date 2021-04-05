

(function($) {
    $(document).ready(function() {
        $('.iskills-pros-cons-color-picker').wpColorPicker();
        var pattren = /_icon$/;
        $(document).on('focusin', '.iskills-pros-cons-icons input', function(event) {
            if (pattren.test($(this).data('id'))) {
                bindIcons(this);
            }
        });

        // Change comparison table theme
        $(document).on('change', '#iskills_comparison_table_use_comparison_theme', function(event) {
            var selectedTheme = $(this).val();
            if (selectedTheme == "iskillsct-table-01") {
                var imgHtml = `<div style="background-image:url(../wp-content/plugins/iskills-affiliate-box/dist/img/comparison-table1.png); background-size: contain;width: 450px;height: 300px; background-repeat:no-repeat;"></div>`;
                $(".preview div").remove();
                $('.preview').html(imgHtml);
            }
        });

        // change rating box theme
        $(document).on('change', '#iskills_rating_box_use_rating_theme', function(event) {

            var selectedTheme = $(this).val();

            if (selectedTheme == "iskillsrb-box-01") {
                var imgHtml = `<div style="background-image:url(../wp-content/plugins/iskills-affiliate-box/dist/img/iskillsrb-theme1.PNG); background-size: contain;width: 450px;height: 300px; background-repeat:no-repeat;"></div>">`;
                $(".previewrb div").remove();
                $('.previewrb').html(imgHtml);
            } else if (selectedTheme == "iskillsrb-box-02") {
                var imgHtml = `<div style="background-image:url(../wp-content/plugins/iskills-affiliate-box/dist/img/iskillsrb-theme2.PNG); background-size: contain;width: 450px;height: 300px; background-repeat:no-repeat;"></div>">`;
                $(".previewrb div").remove();
                $('.previewrb').html(imgHtml);
            } else if (selectedTheme == "iskillsrb-box-03") {
                var imgHtml = `<div style="background-image:url(../wp-content/plugins/iskills-affiliate-box/dist/img/iskillsrb-theme3.PNG); background-size: contain;width: 450px;height: 300px; background-repeat:no-repeat;"></div>">`;
                $(".previewrb div").remove();
                $('.previewrb').html(imgHtml);
            } else if (selectedTheme == "iskillsrb-box-04") {
                var imgHtml = `<div style="background-image:url(../wp-content/plugins/iskills-affiliate-box/dist/img/iskillsrb-theme4.PNG); background-size: contain;width: 450px;height: 300px; background-repeat:no-repeat;"></div>">`;
                $(".previewrb div").remove();
                $('.previewrb').html(imgHtml);
            }

        });

        $(document).on('change', '#iskills_price_box_use_price_theme', function(event) {
            var selectedTheme = $(this).val();
            if (selectedTheme == "iskillspb-box-01") {
                var imgHtml = `<div style="background-image:url(../wp-content/plugins/iskills-affiliate-box/dist/img/price_1.png); background-size: contain;width: 450px;height: 300px; background-repeat:no-repeat;"></div>`;
                $(".previewpb div").remove();
                $('.previewpb').html(imgHtml);
            } else if (selectedTheme == "iskillspb-box-02") {
                var imgHtml = `<div style="background-image:url(../wp-content/plugins/iskills-affiliate-box/dist/img//price_2.png); background-size: contain;width: 450px;height: 300px; background-repeat:no-repeat;"></div>`;
                $(".previewpb div").remove();
                $('.previewpb').html(imgHtml);
            }

            else if (selectedTheme == "iskillspb-box-03") {
                var imgHtml = `<div style="background-image:url(../wp-content/plugins/iskills-affiliate-box/dist/img//price_3.png); background-size: contain;width: 450px;height: 300px; background-repeat:no-repeat;"></div>`;
                $(".previewpb div").remove();
                $('.previewpb').html(imgHtml);
            }

            
        });


        $(document).on('change', '#iskills_pros_and_cons_use_theme', function(event) {
            var selectedTheme = $("#iskills_pros_and_cons_use_theme").val();
            // var check_domain = $("#check_domain").val();
            // if (selectedTheme != "iskillspc-theme-00" && check_domain == 0) {
            //     var parent = $(".promocodeInput").closest('tr').show();
            // } else {
            //     var parent = $(".promocodeInput").closest('tr').hide();
            // }

            var selectedTheme = $(this).val();

            if (selectedTheme == "iskillspc-theme-00") {
                ShowDefaultThemeHtml();
                var imgHtml = `<img class="preview-img" width="100%" src="../wp-content/plugins/iskills-affiliate-box/dist/img/default-theme.PNG">`;
                $(".preview img").remove();
                $('.preview').html(imgHtml);
            } else if (selectedTheme == "iskillspc-theme-01") {
                ShowDefaultThemeHtml();
                var imgHtml = `<img class="preview-img" width="100%" src="../wp-content/plugins/iskills-affiliate-box/dist/img/shadow-theme.PNG">`;
                $(".preview img").remove();
                $('.preview').html(imgHtml);
            } else if (selectedTheme == "iskillspc-theme-02") {
                ShowDefaultThemeHtml();
                var imgHtml = `<img class="preview-img" width="100%" src="../wp-content/plugins/iskills-affiliate-box/dist/img/background-theme.PNG">`;
                $(".preview img").remove();
                $('.preview').html(imgHtml);
            } else if (selectedTheme == "iskillspc-theme-03") {
                ShowDefaultThemeHtml();
                var imgHtml = `<img class="preview-img" width="100%" src="../wp-content/plugins/iskills-affiliate-box/dist/img/bordered-theme.PNG">`;
                $(".preview img").remove();
                $('.preview').html(imgHtml);
            } else if (selectedTheme == "iskillspc-theme-04") {
                ShowDefaultThemeHtml();
                var imgHtml = `<img class="preview-img" width="100%" src="../wp-content/plugins/iskills-affiliate-box/dist/img/underline-theme.PNG">`;
                $(".preview img").remove();
                $('.preview').html(imgHtml);
            } else if (selectedTheme == "iskillspc-theme-05") {
                ShowDefaultThemeHtml();
                var imgHtml = `<img class="preview-img" width="100%" src="../wp-content/plugins/iskills-affiliate-box/dist/img/spacer-theme.PNG">`;
                $(".preview img").remove();
                $('.preview').html(imgHtml);
            } else if (selectedTheme == "iskillspc-theme-06") {
                ShowDefaultThemeHtml();
                var imgHtml = `<img class="preview-img" width="100%" src="../wp-content/plugins/iskills-affiliate-box/dist/img/headicon-theme.PNG">`;
                $(".preview img").remove();
                $('.preview').html(imgHtml);
            } else if (selectedTheme == "iskillspc-theme-07") {
                ShowDefaultThemeHtml();
                var imgHtml = `<img class="preview-img" width="100%" src="../wp-content/plugins/iskills-affiliate-box/dist/img/fullheader-theme.PNG">`;
                $(".preview img").remove();
                $('.preview').html(imgHtml);
            } else if (selectedTheme == "iskillspc-theme-08") {
                ShowDefaultThemeHtml();
                var imgHtml = `<img class="preview-img" width="100%" src="../wp-content/plugins/iskills-affiliate-box/dist/img/darkgreen-theme.PNG">`;
                $(".preview img").remove();
                $('.preview').html(imgHtml);
            } else if (selectedTheme == "iskillspc-theme-09") {
                ShowDefaultThemeHtml();
                var imgHtml = `<img class="preview-img" width="100%" src="../wp-content/plugins/iskills-affiliate-box/dist/img/roundcorner-theme.PNG">`;
                $(".preview img").remove();
                $('.preview').html(imgHtml);
            } else if (selectedTheme == "iskillspc-theme-10") {
                ShowThemeHtml();
                var imgHtml = `<img class="preview-img" width="100%" src="../wp-content/plugins/iskills-affiliate-box/dist/img/iskills-theme1.PNG">`;
                $(".preview img").remove();
                $('.preview').html(imgHtml);
            } else if (selectedTheme == "iskillspc-theme-11") {
                ShowThemeHtml();
                var imgHtml = `<div style="background-image:url(../wp-content/plugins/iskills-affiliate-box/dist/img/iskills-theme2.PNG); background-size: contain;width: 450px;height: 300px; background-repeat:no-repeat;"></div>`;
                $(".preview img").remove();
                $('.preview').html(imgHtml);
            } else if (selectedTheme == "iskillspc-theme-12") {
                ShowThemeHtml();
                var imgHtml = `<div style="background-image:url(../wp-content/plugins/iskills-affiliate-box/dist/img/iskills-theme3.PNG); background-size: contain;width: 450px;height: 300px; background-repeat:no-repeat;"></div>`;
                $(".preview img").remove();
                $('.preview').html(imgHtml);
            } else if (selectedTheme == "iskillspc-theme-13") {
                ShowThemeHtml();
                var imgHtml = `<div style="background-image:url(../wp-content/plugins/iskills-affiliate-box/dist/img/iskills-theme4.PNG); background-size: contain;width: 450px;height: 300px; background-repeat:no-repeat;"></div>`;
                $(".preview img").remove();
                $('.preview').html(imgHtml);
            } else if (selectedTheme == "iskillspc-theme-14") {
                ShowThemeHtml();
                var imgHtml = `<div style="background-image:url(../wp-content/plugins/iskills-affiliate-box/dist/img/iskills-theme5.PNG); background-size: contain;width: 450px;height: 300px; background-repeat:no-repeat;"></div>`;
                $(".preview img").remove();
                $('.preview').html(imgHtml);
            } else if (selectedTheme == "iskillspc-theme-15") {
                ShowThemeHtml();
                var imgHtml = `<div style="background-image:url(../wp-content/plugins/iskills-affiliate-box/dist/img/iskills-theme6.PNG); background-size: contain;width: 450px;height: 300px; background-repeat:no-repeat;"></div>`;
                $(".preview img").remove();
                $('.preview').html(imgHtml);
            } else if (selectedTheme == "iskillspc-theme-16") {
                ShowThemeHtml();
                var imgHtml = `<div style="background-image:url(../wp-content/plugins/iskills-affiliate-box/dist/img/iskills-theme7.PNG); background-size: contain;width: 450px;height: 300px; background-repeat:no-repeat;"></div>`;
                $(".preview img").remove();
                $('.preview').html(imgHtml);
            } else if (selectedTheme == "iskillspc-theme-17") {
                ShowThemeHtml();
                var imgHtml = `<div style="background-image:url(../wp-content/plugins/iskills-affiliate-box/dist/img/iskills-theme8.PNG); background-size: contain;width: 450px;height: 300px; background-repeat:no-repeat;"></div>`;
                $(".preview img").remove();
                $('.preview').html(imgHtml);
            } else if (selectedTheme == "iskillspc-theme-18") {
                ShowThemeHtml();
                var imgHtml = `<div style="background-image:url(../wp-content/plugins/iskills-affiliate-box/dist/img/iskills-theme9.PNG); background-size: contain;width: 450px;height: 300px; background-repeat:no-repeat;"></div>`;
                $(".preview img").remove();
                $('.preview').html(imgHtml);
            } else if (selectedTheme == "iskillspc-theme-19") {
                ShowThemeHtml();
                var imgHtml = `<div style="background-image:url(../wp-content/plugins/iskills-affiliate-box/dist/img/iskills-theme10.PNG); background-size: contain;width: 450px;height: 300px; background-repeat:no-repeat;"></div>`;
                $(".preview img").remove();
                $('.preview').html(imgHtml);
            } else if (selectedTheme == "iskillspc-theme-20") {
                ShowThemeHtml();
                var imgHtml = `<div style="background-image:url(../wp-content/plugins/iskills-affiliate-box/dist/img/iskills-theme11.PNG); background-size: contain;width: 450px;height: 300px; background-repeat:no-repeat;"></div>`;
                $(".preview img").remove();
                $('.preview').html(imgHtml);
            } else if (selectedTheme == "iskillspc-theme-21") {
                ShowThemeHtml();
                var imgHtml = `<div style="background-image:url(../wp-content/plugins/iskills-affiliate-box/dist/img/iskills-theme12.PNG); background-size: contain;width: 450px;height: 300px; background-repeat:no-repeat;"></div>`;
                $(".preview img").remove();
                $('.preview').html(imgHtml);
            } else if (selectedTheme == "iskillspc-theme-22") {
                ShowThemeHtml();
                var imgHtml = `<div style="background-image:url(../wp-content/plugins/iskills-affiliate-box/dist/img/iskills-theme13.PNG); background-size: contain;width: 450px;height: 300px; background-repeat:no-repeat;"></div>`;
                $(".preview img").remove();
                $('.preview').html(imgHtml);
            } else if (selectedTheme == "iskillspc-theme-23") {
                ShowThemeHtml();
                var imgHtml = `<div style="background-image:url(../wp-content/plugins/iskills-affiliate-box/dist/img/iskills-theme14.PNG); background-size: contain;width: 450px;height: 300px; background-repeat:no-repeat;"></div>`;
                $(".preview img").remove();
                $('.preview').html(imgHtml);
            } else {
                var imgHtml = `<img class="preview-img" width="100%" src="../wp-content/plugins/iskills-affiliate-box/dist/img/default-theme.PNG">`;
                $(".preview img").remove();
                $('.preview').html(imgHtml);
            }
        });
        $('input.iskills-pros-cons-icons').each(function() {
            bindIcons(this);
        });
        //  $('input.iskills-pros-cons-icons').on('iconpickerSelected', function(event){
        //     // console.log(event.iconpickerValue);
        //    // return false;
        //   });
        function bindIcons(obj) {
            // $(obj).on('iconpickerSelected', function(event){
            //       console.log(obj.value);
            //       var ev = new Event('input', { onChange : true});
            //       obj.dispatchEvent(ev);
            //   });
            $(obj).iconpicker({
                hideOnSelect: true,
                showFooter: false,
                templates: {
                    popover: '<div class="iconpicker-popover popover"><div class="arrow"></div>' +
                        '<div class="popover-title"></div><div class="popover-content"></div></div>',
                    footer: '<div class="popover-footer"></div>',
                    buttons: '<button class="iconpicker-btn iconpicker-btn-cancel btn btn-default btn-sm">Cancel</button>' +
                        ' <button class="iconpicker-btn iconpicker-btn-accept btn btn-primary btn-sm">Accept</button>',
                    search: null,
                    iconpicker: '<div class="iconpicker"><div class="iconpicker-items"></div></div>',
                    iconpickerItem: '<a role="button" href="#" class="iconpicker-item"><i></i></a>'
                },
                icons: [{
                        title: 'icon icon-check-1',
                        searchTerms: ['web']
                    },
                    {
                        title: 'icon icon-check-2',
                        searchTerms: ['style']
                    },
                    {
                        title: 'icon icon-check-3',
                        searchTerms: ['style']
                    },
                    {
                        title: 'icon icon-check-4',
                        searchTerms: ['style']
                    },
                    {
                        title: 'icon icon-check-5',
                        searchTerms: ['style']
                    },
                    {
                        title: 'icon icon-square-1',
                        searchTerms: ['web']
                    },
                    {
                        title: 'icon icon-square-2',
                        searchTerms: ['style']
                    },
                    {
                        title: 'icon icon-square-3',
                        searchTerms: ['style']
                    },
                    {
                        title: 'icon icon-ban-1',
                        searchTerms: ['web']
                    },
                    {
                        title: 'icon icon-ban-2',
                        searchTerms: ['style']
                    },
                    {
                        title: 'icon icon-ban-3',
                        searchTerms: ['style']
                    },
                    {
                        title: 'icon icon-ban-4',
                        searchTerms: ['style']
                    },
                    {
                        title: 'icon icon-ban-5',
                        searchTerms: ['style']
                    },
                    {
                        title: 'icon icon-thumbs-up',
                        searchTerms: ['web']
                    },
                    {
                        title: 'icon icon-thumbs-down',
                        searchTerms: ['style']
                    },
                    {
                        title: 'icon icon-thumbs-o-up',
                        searchTerms: ['style']
                    },
                    {
                        title: 'icon icon-thumbs-o-down',
                        searchTerms: ['style']
                    },
                    {
                        title: 'icon icon-thumbs-s-up',
                        searchTerms: ['style']
                    },
                    {
                        title: 'icon icon-thumbs-s-down',
                        searchTerms: ['style']
                    },
                    {
                        title: 'icon icon-cancle',
                        searchTerms: ['style']
                    },
                    {
                        title: 'icon icon-cancle-2',
                        searchTerms: ['style']
                    },
                    {
                        title: 'icon icon-cancle-3',
                        searchTerms: ['style']
                    },

                    {
                        title: 'icon icon-link-3',
                        searchTerms: ['web']
                    },
                    {
                        title: 'icon icon-cart-7',
                        searchTerms: ['style']
                    },
                    {
                        title: 'icon icon-cart-1',
                        searchTerms: ['style']
                    },
                    {
                        title: 'icon icon-cart-2',
                        searchTerms: ['style']
                    },
                    {
                        title: 'icon icon-cart-3',
                        searchTerms: ['style']
                    },
                    {
                        title: 'icon icon-cart-4',
                        searchTerms: ['web']
                    },
                    {
                        title: 'icon icon-cart-5',
                        searchTerms: ['style']
                    },
                    {
                        title: 'icon icon-star-2',
                        searchTerms: ['style']
                    },
                    {
                        title: 'icon icon-star-4',
                        searchTerms: ['web']
                    },
                    {
                        title: 'icon icon-star-3',
                        searchTerms: ['style']
                    },
                    {
                        title: 'icon icon-star-1',
                        searchTerms: ['style']
                    },
                    {
                        title: 'icon icon-cercle-1',
                        searchTerms: ['style']
                    },
                    {
                        title: 'icon icon-ban-7',
                        searchTerms: ['style']
                    },
                    {
                        title: 'icon icon-alert',
                        searchTerms: ['web']
                    },
                    {
                        title: 'icon icon-plus-5',
                        searchTerms: ['style']
                    },
                    {
                        title: 'icon icon-minus-3',
                        searchTerms: ['style']
                    },
                    {
                        title: 'icon icon-check-6',
                        searchTerms: ['style']
                    },
                    {
                        title: 'icon icon-hand-o-right',
                        searchTerms: ['style']
                    },
                    {
                        title: 'icon icon-hand-o-left',
                        searchTerms: ['style']
                    },
                    {
                        title: 'icon icon-hand-paper-o',
                        searchTerms: ['style']
                    },
                    {
                        title: 'icon icon-hand-peace-o',
                        searchTerms: ['style']
                    },
                    {
                        title: 'icon icon-hand-scissors-o',
                        searchTerms: ['style']
                    },

                    {
                        title: 'icon icon-heart-5',
                        searchTerms: ['style']
                    },
                    {
                        title: 'icon icon-heart-4',
                        searchTerms: ['web']
                    },
                    {
                        title: 'icon icon-heart-break-1',
                        searchTerms: ['style']
                    },
                    {
                        title: 'icon icon-shopping-cart-1',
                        searchTerms: ['style']
                    },
                    {
                        title: 'icon icon-unlock',
                        searchTerms: ['style']
                    },
                    {
                        title: 'icon icon-unlock-alt',
                        searchTerms: ['style']
                    },
                    {
                        title: 'icon icon-trophy',
                        searchTerms: ['web']
                    },
                    {
                        title: 'icon icon-issue-opened',
                        searchTerms: ['style']
                    },
                    {
                        title: 'icon icon-issue-closed',
                        searchTerms: ['style']
                    },
                    {
                        title: 'icon icon-gift',
                        searchTerms: ['style']
                    },
                    {
                        title: 'icon icon-heart-1',
                        searchTerms: ['style']
                    },
                    {
                        title: 'icon icon-heart-3',
                        searchTerms: ['style']
                    },
                    {
                        title: 'icon icon-happy',
                        searchTerms: ['style']
                    },
                    {
                        title: 'icon icon-ban-9',
                        searchTerms: ['style']
                    },
                    {
                        title: 'icon icon-minus-thin',
                        searchTerms: ['style']
                    },
                    {
                        title: 'icon icon-minus-thick',
                        searchTerms: ['style']
                    },
                    {
                        title: 'icon icon-plus-thin',
                        searchTerms: ['style']
                    },
                    {
                        title: 'icon icon-plus-thick',
                        searchTerms: ['style']
                    }
                ]
            });
        }
        $("#iskills_pros_and_cons_use_theme").trigger("change");
        $(document).find('#iskills_rating_box_use_rating_theme').trigger('change');        
        $(document).find('#iskills_price_box_use_price_theme').trigger('change');        
        $(document).find('#iskills_comparison_table_use_comparison_theme').trigger('change');  
        
        function ShowThemeHtml(){
                $(".nav-tab-wrapper > a:nth-child(2)").hide();
                $(".nav-tab-wrapper > a:nth-child(3)").hide();
                $(".nav-tab-wrapper > a:nth-child(4)").hide();
                $(".nav-tab-wrapper > a:nth-child(5)").hide();
                $(".form-table tr:nth-child(3)").hide();
                $(".form-table tr:nth-child(4)").hide();
                $(".form-table tr:nth-child(5)").hide();
                $(".form-table tr:nth-child(6)").hide();
                $(".form-table tr:nth-child(7)").hide();
                $(".form-table tr:nth-child(8)").hide();
                $(".form-table tr:nth-child(9)").hide();
                $(".form-table tr:nth-child(10)").hide();
        }

        function ShowDefaultThemeHtml(){
                $(".nav-tab-wrapper > a:nth-child(2)").show();
                $(".nav-tab-wrapper > a:nth-child(3)").show();
                $(".nav-tab-wrapper > a:nth-child(4)").show();
                $(".nav-tab-wrapper > a:nth-child(5)").show();
                $(".form-table tr:nth-child(3)").show();
                $(".form-table tr:nth-child(4)").show();
                $(".form-table tr:nth-child(5)").show();
                $(".form-table tr:nth-child(6)").show();
                $(".form-table tr:nth-child(7)").show();
                $(".form-table tr:nth-child(8)").show();
                $(".form-table tr:nth-child(9)").show();
                $(".form-table tr:nth-child(10)").show();
        }
       
    });
})(jQuery);