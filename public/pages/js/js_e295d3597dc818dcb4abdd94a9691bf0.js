var is_mobile = false;
Drupal.behaviors.unbxdsearch = function (context) {
    $jq('#edit-keys-wrapper.form-item-indent').remove();
    var $sidebar = $jq('body.page-search .region-sidebar-first-search');
    if ($sidebar.length > 0) {
        decorate_search_mobile_sort();

        make_search_as_selected();
        decoratefilters();
        $jq(window).resize(function () {
            is_mobile = false;
            var screen_width = window.innerWidth;
            if (screen_width < 768) {
                is_mobile = true;
                $sidebar.addClass('veritcal-slider');
                $sidebar.css('height', $(window).height() + 'px');
                make_mobile_filters();
            } else {
                $sidebar.removeClass('veritcal-slider');
                unmake_mobile_filters();
                $sidebar.css('height', 'auto');
                $jq('body').css('overflow-y', 'auto');
                $sidebar.show();
            }
        });
        if ($jq('.block-unbxdsearch_search').length > 0) {
            $jq('.block-unbxdsearch_search .form-item-checkbox div.option .unbxd-checkbox-label').on('click', function () {
                $(this).parent('div.option').find('input[type=checkbox]').trigger('click');
            });
            $jq('#cleanall').on('click', function () {
                $jq('.block-unbxdsearch_search input[type=checkbox]').attr('checked', false);
                $jq('#search-form').find('input[name=keys]').val('');
                $jq('.block-unbxdsearch_search #sort').val('');
//                $jq('.block-unbxdsearch_search #sort').val('created-desc');
                $jq('#search-form').trigger('submit');
            });
            $jq('.remove-facet').on('click', function () {
                var $name = $(this).attr('data-fq-name');
                var $value = $(this).attr('data-fq-value');
                var $fq = $jq('.block-unbxdsearch_search input[name="' + $name + '"][value="' + $value + '"]');
                $fq.attr('checked', false);
                $jq('#search-form').trigger('submit');
            });
            $jq('.block-unbxdsearch_search input[type=checkbox]').on('change', function () {
                if (!is_mobile) {
                    if ($jq(this).attr('name') == 'category[]' && !$jq(this).is(':checked')) {
                        $jq('.block-unbxdsearch_search input[type=checkbox][name="sub_cat[]"]').attr('checked', false);
                    }
                    if ($jq(this).attr('name') == 'price' && $jq(this).is(':checked')) {
                        $jq('.block-unbxdsearch_search input[type=checkbox][name="price"][value!="' + $jq(this).val() + '"]').attr('checked', false);
                    }
                    $jq('#search-form').trigger('submit');
                }
            });
            $jq('.block-unbxdsearch_search #sort').on('change', function () {
//                if (!is_mobile) {
                $jq('#search-form').trigger('submit');
//                }
            });

        }
    }
    $jq('form#search-form').on('submit', function () {
        make_search_as_selected();
        $jq('#kixifyLoader').height($(window).height());
        $jq('#kixifyLoader').width($(window).width());
        $jq('#kixifyLoader').show();
        var $checkboses = $jq('.block-unbxdsearch_search input[type=checkbox]:checked');
        var $sort = $jq('.block-unbxdsearch_search #sort');
        var $keys = $jq(this).find('input[name=keys]').val();
        $keys = strip_special_chars(stripTags($jq.trim($keys)));
        var $url = '/search';
        if ($jq(this).parent().attr('id') != 'search-box' && $jq('.release_dates_event').length > 0) {
            var a = $jq('<a>', {href: window.location})[0];
            $url = a.pathname;
        }
        $queryString = '';
        var $queryString = [];
        if ($keys.length > 0) {
//            $keys = $keys.replace(/\-\\/g, ' ');
            var attr = 's=' + $keys;
            $queryString.push(attr);
        }
        if ($checkboses.length > 0) {
            $jq.each($checkboses, function () {
                var attr = $(this).attr('name') + "=" + stripTags($jq.trim($(this).val()));
                $queryString.push(attr);
            });
        }
        if ($sort.length > 0) {
            var sort = stripTags($jq.trim($sort.val()));
//            if (sort != 'created-desc') {
            if (sort != '') {
                $queryString.push("sort=" + sort);
            }
        }
        if ($queryString.length > 0) {
            $url += '?' + $queryString.join('&').replace(/\s/g, "+");
        }
        window.location.href = $url;
        $jq('#kixifyLoader').hide();
        return false;
    });
    /*$jq('#acount-nav-search #cargoh-helper-search-form, #search-box #cargoh-helper-search-form').on('submit', function () {
     $jq('#kixifyLoader').height($(window).height());
     $jq('#kixifyLoader').width($(window).width());
     $jq('#kixifyLoader').show();
     var $keys = $jq(this).find('input[name=keys]').val();
     $keys = stripTags($jq.trim($keys));
     var $url = '/search';
     $queryString = '';
     var $queryString = [];
     if ($keys.length > 0) {
     var attr = 's=' + $keys;
     $queryString.push(attr);
     }
     if ($queryString.length > 0) {
     $url += '?' + $queryString.join('&').replace(/\s/g, "+");
     }
     window.location.href = $url;
     return false;
     });*/
    $jq(window).trigger('resize');
};
function stripTags(str) {
    return str.replace(/(<([^>]+)>)/ig, "");
    return $jq.trim(str);
}

function strip_special_chars(str) {
//    str = str.replace(/[\-\\]/g, " ");
    str = str.replace(/[\s+]/g, " ");
    return $jq.trim(str);
}
function decoratefilters() {
    $jq('.block-unbxdsearch_search:not(#block-unbxdsearch_search-unbxd_sort)').addClass('tab-pane');
    $jq('body.page-search .region-sidebar-first-search').prepend('<div id="search-filter-wrapper" class="visible-xs col-xs-4 remove-padding"><ul class="nav nav-pills nav-stacked" id="search-filter-nav" role="tablist"></ul></div>');
    $jq('body.page-search .region-sidebar-first-search').prepend('<div id="filter-buttons-wrapper"><button id="mobile-cacnel-btn" class="btn btn-default btn-sm pull-left">cancel</button><button id="mobile-apply-btn" class="btn btn-default btn-sm pull-right">Apply</button><div class="clearfix"></div></div>');
    $jq.each($jq('.block-unbxdsearch_search'), function () {
        var id = $(this).attr('id');
        if (id != 'block-unbxdsearch_search-unbxd_sort') {
            var title_el = $(this).find('h3');
            var title = title_el.text();
            $jq('#search-filter-nav').append('<li><a href="#' + id + '" role="tab" data-toggle="tab">' + title + '</a></li>');
        }
    });
    $jq('#mobile-cacnel-btn').on('click', function () {
        $jq('.region-sidebar-first-search').hide();
        $jq('body').css('overflow-y', 'auto');
        $jq("#page").removeClass("remove-padding");
        $jq('body.page-search .region-sidebar-first-search').css('position', 'relative');
        $jq('body.page-search .region-sidebar-first-search').css('top', '0');
        return false;
    });
    $jq('#mobile-filter-btn').on('click', function () {
        $jq("#page").addClass("remove-padding");
        $jq('body.page-search .region-sidebar-first-search').show();
        $jq('body.page-search .region-sidebar-first-search').height($(window).height());
        $jq('body.page-search .region-sidebar-first-search').css('position', 'fixed');
        $jq('body.page-search .region-sidebar-first-search').css('top', '54px');

        if (!($jq("#search-filter-nav li.active").length > 0)) {
            $jq("#search-filter-nav li:eq(0)").addClass("active"); //Activate second tab
            $jq(".region-sidebar-first.tab-content .tab-pane:eq(0)").addClass('active');
        }
        $jq('.region-sidebar-first.tab-content .block-unbxdsearch_search.tab-pane').each(function () {
            var $checked = $jq(this).find("input[type=checkbox]:checked");
            var $id = $jq(this).attr('id');
            var $item = $jq('ul#search-filter-nav').find('a[href=#' + $id + ']');
            if ($checked.length > 0) {
                $item.addClass('filter-selected');
            } else {
                var $selected = $jq(this).find("select");
                if ($selected.length > 0) {
                    $selected.each(function () {
                        if ($jq(this).val() != '') {
                            $item.addClass('filter-selected');
                            return;
                        }
                    });
                }
            }
        });
        $jq('body').css('overflow-y', 'hidden');
        return false;
    });

    $jq('#search-mobile-sort-btn').on('click', function () {
        var $sort_continer = $jq('#mobile-sort-wrapper');
        $sort_continer.show();
        $jq('body').css('overflow-y', 'hidden');
        return false;
    });

    $jq('#mobile-apply-btn').on('click', function () {
        $jq('.region-sidebar-first-search').hide();
        $jq("#page").removeClass("remove-padding");
        $jq('#search-form').trigger('submit');
    });
}
function make_mobile_filters() {
    $jq('.block-unbxdsearch_search').find('h3.title').hide();
    $jq('.block-unbxdsearch_search .checkboxes-wrapper').css('max-height', $(window).height() - 110);
    $jq('body.page-search .region-sidebar-first').addClass('col-xs-8 tab-content remove-padding');
    $jq('#block-unbxdsearch_search-unbxd_sort').hide();
}

function unmake_mobile_filters() {
    $jq('.block-unbxdsearch_search').find('h3.title').show();
    $jq('.block-unbxdsearch_search .checkboxes-wrapper').css('max-height', 250);
    $jq('body.page-search .region-sidebar-first').removeClass('col-xs-8 tab-content');
    $jq('#block-unbxdsearch_search-unbxd_sort').show();
}

function make_search_as_selected() {
    $('#mobile-filter-btn').removeClass('kixify-red');
    var total_selected = 0;
    $jq('.region-sidebar-first .block-unbxdsearch_search .content').each(function () {
        var $checked = $jq(this).find('input[type=checkbox]:checked').length;
        if ($checked > 0) {
            total_selected++;
        }
    });

    if (total_selected > 0) {
        $('#mobile-filter-btn .selected-filters').text(total_selected);
        $('#mobile-filter-btn').addClass('kixify-red');
    } else {
        $('#mobile-filter-btn .selected-filters').text('');
        $('#mobile-filter-btn').removeClass('kixify-red');
    }

    $jq('#search-mobile-sort-btn').removeClass('kixify-red');
    if ($jq('select#sort').length > 0) {
        var ord_val = $jq('select#sort').val();
        if (ord_val != '') {
            $jq('#search-mobile-sort-btn').addClass('kixify-red')
        }
    }
}

function decorate_search_mobile_sort() {
    var $sidebar = $jq('body.page-search .region-sidebar-first-search');
    var $sort_continer = $jq('<div id="mobile-sort-wrapper" style="display:none"></div>');
    $sidebar.parent().prepend($sort_continer);
//    $sort_continer.hide();
    var $selected = $jq('select#sort').val();
    $jq.each($jq('select#sort>option'), function (k, op) {
        var option = $jq(this);
        var op_value = option.attr('value');
        var $current = op_value == $selected ? '<i class="fa fa-check"></i>' : '';
        $sort_continer.append('<div class="sort-options" data-value="' + op_value + '">' + $current + ' ' + option.text() + '</div>');
    });
    $jq('#mobile-sort-wrapper .sort-options').on('click', function () {
        $jq('#block-unbxdsearch_search-unbxd_sort select#sort').val($jq(this).attr('data-value'));
        $jq('#block-unbxdsearch_search-unbxd_sort  select#sort').trigger('change');
        $jq('#mobile-sort-wrapper').hide();
    });
    /*$jq('#mobile-sort-wrapper .sort-options').on('tap', function () {
     $(this).trigger('click');
     });*/
};
unbxdAutoSuggestFunction($jq, Handlebars);

function load_trending() {
    var tranding_data = [];
    $jq.ajax({
        url: "/recommendations/trending",
        type: 'get',
        dataType: 'json',
        async: false,
        success: function (data) {
            tranding_data = data;
        }
    });
    return tranding_data;
}
$jq(function () {
    $jq(document).bind('click', function (event) {
        if ($jq('#tranding-data').length > 0 && !($jq(event.target).closest("#tranding-data").length || $jq(event.target).closest("#edit-keys").length)) {
            $jq('#tranding-data').remove();
        }
    });
    //on dom load set autocomplete options
    $jq("#search-form input[type=text]").unbxdautocomplete({
        siteName: Drupal.settings.unbxd_site_key, // Your site key which can be found on your dashboard.
        APIKey: Drupal.settings.unbxd_api_key, //Your api key which is mailed to you during account creation or can be found in the account section of the dashboard.
        minChars: 3,
        maxSuggestions: 10,
        delay: 50,
        loadingClass: 'unbxd-as-loading',
        mainWidth: 0,
        sideWidth: 180,
        zIndex: 0,
        position: 'absolute',
        template: "1column",
        mainTpl: ['inFields', 'keywordSuggestions', 'topQueries'], //['inFields', 'keywordSuggestions', 'topQueries', 'popularProducts'],
        sideTpl: [],
        sideContentOn: "right",
        showCarts: false,
        cartType: "separate",
        noResultTpl: function (query) {
            return 'No results found for ' + decodeURIComponent(query);
        },
        onSimpleEnter: function () {
            var thisval = this.input.value;
//            thisval = thisval.replace(/\-\\/g, ' ');
            thisval = strip_special_chars(stripTags(thisval));
            $jq("#search-form").find('input[name=keys]').val(thisval);
            $jq("#search-form").trigger('submit');
        },
        onItemSelect: function (data, original) {
            var thisval = this.input.value;
            thisval = strip_special_chars(stripTags(thisval));//.replace(/\-\\/g, ' ');
            $jq("#search-form").find('input[name=keys]').val(thisval);
            $jq("#search-form").trigger('submit');
        },
        onCartClick: function (data, original) {
            return true;
        },
        inFields: {
            count: 2,
            fields: {
                'brand': 3,
                'category': 3,
                'tags': 3
            },
            header: '',
            tpl: ''
        },
        topQueries: {
            count: 5,
            header: '',
            tpl: ''
        },
        keywordSuggestions: {
            count: 2,
            header: '',
            tpl: ''
        }/*,
         popularProducts: {
         count: 2,
         price: true,
         priceFunctionOrKey: "sellingPrice",
         image: true,
         imageUrlOrFunction: "imageUrl",
         currency: "$",
         header: '',
         tpl: ''
         }*/
    });
    $jq(document).on('click', '#tranding-data li.unbxd-as-keysuggestion', function () {
        $jq("#search-form input[type=text]").val($jq(this).attr('data-value'));
        $jq('form#search-form').trigger('submit');
        $jq('#tranding-data').remove();
    });

    $jq("#search-form input[type=text]").on('focus', function () {
        $jq('#tranding-data').remove();
        var tranding_data = load_trending();
        if (tranding_data.length > 0 && !($jq(this).val().length > 0)) {
            var $output = '<div id="tranding-data" class="unbxd-as-wrapper" style="position: absolute; top: ' + ($jq(this).offset().top + $jq(this).outerHeight()) + 'px; left: ' + $jq(this).offset().left + 'px; display: block;">';
            $output += '<ul class="unbxd-as-maincontent" style="width:' + ($jq(this).outerWidth() - 2) + 'px">';
            $jq.each(tranding_data, function (k, v) {
                $output += '<li class="unbxd-as-keysuggestion" data-index="' + k + '" data-value="' + v + '" data-type="IN_FIELD" data-source="category">' + v + '</li>';
            });
            $output += '</ul></div>';
            $jq('body').append($output);
        }
    });
    $jq("#search-form input[type=text]").on('keyup', function () {
        $jq('#tranding-data').remove();
        if (!($jq.trim($jq(this).val()).length > 0)) {
            $jq(this).trigger('focus');
        }
    });
});
;
