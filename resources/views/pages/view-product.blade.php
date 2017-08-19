@extends('pages/layouts/master')
@section('content')
<div class="col-xs-12 col-sm-3 col-md-3 region-sidebar-first-search remove-padding">
                  <div class="region region-sidebar-first column sidebar">
                     <div id="block-unbxdsearch_search-unbxd_sort" class="block block-unbxdsearch_search first region-odd odd region-count-1 count-1">
                        <h3 class="title">Sort By</h3>
                        <div class="content">
                           <div class="form-group form-item form-item-select form-item-inline" id="sort-wrapper">
                              <select name="sort" class="form-control form-select" id="sort" >
                                 <option value="" selected="selected">Top Sellers</option>
                                 <option value="created-desc">Newest Items</option>
                                 <option value="price-asc">Price: Low to High</option>
                                 <option value="price-desc">Price: High to Low</option>
                              </select>
                           </div>
                        </div>
                        <div class="clearfix"></div>
                     </div>
                     <!-- /.block -->
                     <div id="block-unbxdsearch_search-unbxd_category" class="block block-unbxdsearch_search region-even even region-count-2 count-2">
                        <h3 class="title">Category</h3>
                        <div class="content">
                           <div class="checkboxes-wrapper">
                              <div class="form-checkboxes">
                                 <div class="form-group form-item form-item-checkbox form-item-indent" id="category-0-wrapper">
                                    <div class="option" for="category-0"><input type="checkbox" name="category[]" id="category-0" value="Adidas"   class="form-checkbox" /> <span class="unbxd-checkbox-label">Adidas (7)</span></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="clearfix"></div>
                     </div>
                     <!-- /.block -->
                     <div id="block-unbxdsearch_search-unbxd_gender" class="block block-unbxdsearch_search region-odd odd region-count-3 count-3">
                        <h3 class="title">Gender / Age</h3>
                        <div class="content">
                           <div class="checkboxes-wrapper">
                              <div class="form-checkboxes">
                                 <div class="form-group form-item form-item-checkbox form-item-indent" id="gender-0-wrapper">
                                    <div class="option" for="gender-0"><input type="checkbox" name="gender[]" id="gender-0" value="Men"   class="form-checkbox" /> <span class="unbxd-checkbox-label">Men (7)</span></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="clearfix"></div>
                     </div>
                     <!-- /.block -->
                     <div id="block-unbxdsearch_search-unbxd_condition" class="block block-unbxdsearch_search region-even even region-count-4 count-4">
                        <h3 class="title">Condition</h3>
                        <div class="content">
                           <div class="checkboxes-wrapper">
                              <div class="form-checkboxes">
                                 <div class="form-group form-item form-item-checkbox form-item-indent" id="condition-0-wrapper">
                                    <div class="option" for="condition-0"><input type="checkbox" name="condition[]" id="condition-0" value="Brand+New"   class="form-checkbox" /> <span class="unbxd-checkbox-label">Brand New (7)</span></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="clearfix"></div>
                     </div>
                     <!-- /.block -->
                     <div id="block-unbxdsearch_search-unbxd_size" class="block block-unbxdsearch_search region-odd odd region-count-5 count-5">
                        <h3 class="title">Size</h3>
                        <div class="content">
                           <div class="checkboxes-wrapper">
                              <div class="form-checkboxes">
                                 <div class="form-group form-item form-item-checkbox form-item-indent" id="size-0-wrapper">
                                    <div class="option" for="size-0"><input type="checkbox" name="size[]" id="size-0" value="4"   class="form-checkbox" /> <span class="unbxd-checkbox-label">4 (1)</span></div>
                                 </div>
                                 <div class="form-group form-item form-item-checkbox form-item-indent" id="size-1-wrapper">
                                    <div class="option" for="size-1"><input type="checkbox" name="size[]" id="size-1" value="4.5"   class="form-checkbox" /> <span class="unbxd-checkbox-label">4.5 (1)</span></div>
                                 </div>
                                 <div class="form-group form-item form-item-checkbox form-item-indent" id="size-2-wrapper">
                                    <div class="option" for="size-2"><input type="checkbox" name="size[]" id="size-2" value="5"   class="form-checkbox" /> <span class="unbxd-checkbox-label">5 (1)</span></div>
                                 </div>
                                 <div class="form-group form-item form-item-checkbox form-item-indent" id="size-3-wrapper">
                                    <div class="option" for="size-3"><input type="checkbox" name="size[]" id="size-3" value="5.5"   class="form-checkbox" /> <span class="unbxd-checkbox-label">5.5 (1)</span></div>
                                 </div>
                                 <div class="form-group form-item form-item-checkbox form-item-indent" id="size-4-wrapper">
                                    <div class="option" for="size-4"><input type="checkbox" name="size[]" id="size-4" value="6"   class="form-checkbox" /> <span class="unbxd-checkbox-label">6 (1)</span></div>
                                 </div>
                                 <div class="form-group form-item form-item-checkbox form-item-indent" id="size-5-wrapper">
                                    <div class="option" for="size-5"><input type="checkbox" name="size[]" id="size-5" value="6.5"   class="form-checkbox" /> <span class="unbxd-checkbox-label">6.5 (1)</span></div>
                                 </div>
                                 <div class="form-group form-item form-item-checkbox form-item-indent" id="size-6-wrapper">
                                    <div class="option" for="size-6"><input type="checkbox" name="size[]" id="size-6" value="7"   class="form-checkbox" /> <span class="unbxd-checkbox-label">7 (1)</span></div>
                                 </div>
                                 <div class="form-group form-item form-item-checkbox form-item-indent" id="size-7-wrapper">
                                    <div class="option" for="size-7"><input type="checkbox" name="size[]" id="size-7" value="8"   class="form-checkbox" /> <span class="unbxd-checkbox-label">8 (5)</span></div>
                                 </div>
                                 <div class="form-group form-item form-item-checkbox form-item-indent" id="size-8-wrapper">
                                    <div class="option" for="size-8"><input type="checkbox" name="size[]" id="size-8" value="8.5"   class="form-checkbox" /> <span class="unbxd-checkbox-label">8.5 (5)</span></div>
                                 </div>
                                 <div class="form-group form-item form-item-checkbox form-item-indent" id="size-9-wrapper">
                                    <div class="option" for="size-9"><input type="checkbox" name="size[]" id="size-9" value="9"   class="form-checkbox" /> <span class="unbxd-checkbox-label">9 (5)</span></div>
                                 </div>
                                 <div class="form-group form-item form-item-checkbox form-item-indent" id="size-10-wrapper">
                                    <div class="option" for="size-10"><input type="checkbox" name="size[]" id="size-10" value="9.5"   class="form-checkbox" /> <span class="unbxd-checkbox-label">9.5 (5)</span></div>
                                 </div>
                                 <div class="form-group form-item form-item-checkbox form-item-indent" id="size-11-wrapper">
                                    <div class="option" for="size-11"><input type="checkbox" name="size[]" id="size-11" value="10"   class="form-checkbox" /> <span class="unbxd-checkbox-label">10 (5)</span></div>
                                 </div>
                                 <div class="form-group form-item form-item-checkbox form-item-indent" id="size-12-wrapper">
                                    <div class="option" for="size-12"><input type="checkbox" name="size[]" id="size-12" value="10.5"   class="form-checkbox" /> <span class="unbxd-checkbox-label">10.5 (5)</span></div>
                                 </div>
                                 <div class="form-group form-item form-item-checkbox form-item-indent" id="size-13-wrapper">
                                    <div class="option" for="size-13"><input type="checkbox" name="size[]" id="size-13" value="11"   class="form-checkbox" /> <span class="unbxd-checkbox-label">11 (5)</span></div>
                                 </div>
                                 <div class="form-group form-item form-item-checkbox form-item-indent" id="size-14-wrapper">
                                    <div class="option" for="size-14"><input type="checkbox" name="size[]" id="size-14" value="11.5"   class="form-checkbox" /> <span class="unbxd-checkbox-label">11.5 (5)</span></div>
                                 </div>
                                 <div class="form-group form-item form-item-checkbox form-item-indent" id="size-15-wrapper">
                                    <div class="option" for="size-15"><input type="checkbox" name="size[]" id="size-15" value="12"   class="form-checkbox" /> <span class="unbxd-checkbox-label">12 (4)</span></div>
                                 </div>
                                 <div class="form-group form-item form-item-checkbox form-item-indent" id="size-16-wrapper">
                                    <div class="option" for="size-16"><input type="checkbox" name="size[]" id="size-16" value="13"   class="form-checkbox" /> <span class="unbxd-checkbox-label">13 (3)</span></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="clearfix"></div>
                     </div>
                     <!-- /.block -->
                     <div id="block-unbxdsearch_search-unbxd_shipping" class="block block-unbxdsearch_search region-even even region-count-6 count-6">
                        <h3 class="title">Shipping to</h3>
                        <div class="content">
                           <div class="checkboxes-wrapper">
                              <div class="form-checkboxes">
                                 <div class="form-group form-item form-item-checkbox form-item-indent" id="shipping-0-wrapper">
                                    <div class="option" for="shipping-0"><input type="checkbox" name="shipping[]" id="shipping-0" value="Canada"   class="form-checkbox" /> <span class="unbxd-checkbox-label">Canada (7)</span></div>
                                 </div>
                                 <div class="form-group form-item form-item-checkbox form-item-indent" id="shipping-1-wrapper">
                                    <div class="option" for="shipping-1"><input type="checkbox" name="shipping[]" id="shipping-1" value="Rest+of+the+world"   class="form-checkbox" /> <span class="unbxd-checkbox-label">Rest of the world (5)</span></div>
                                 </div>
                                 <div class="form-group form-item form-item-checkbox form-item-indent" id="shipping-2-wrapper">
                                    <div class="option" for="shipping-2"><input type="checkbox" name="shipping[]" id="shipping-2" value="United+States"   class="form-checkbox" /> <span class="unbxd-checkbox-label">United States (7)</span></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="clearfix"></div>
                     </div>
                     <!-- /.block -->
                     <div id="block-unbxdsearch_search-unbxd_price" class="block block-unbxdsearch_search region-odd odd region-count-7 count-7">
                        <h3 class="title">Price</h3>
                        <div class="content">
                           <div class="checkboxes-wrapper">
                              <div class="form-checkboxes">
                                 <div class="form-group form-item form-item-checkbox form-item-indent" id="price-0-wrapper">
                                    <div class="option" for="price-0"><input type="checkbox" name="price" id="price-0" value="100"   class="form-checkbox" /> <span class="unbxd-checkbox-label">$100 - $200 (2)</span></div>
                                 </div>
                                 <div class="form-group form-item form-item-checkbox form-item-indent" id="price-1-wrapper">
                                    <div class="option" for="price-1"><input type="checkbox" name="price" id="price-1" value="200"   class="form-checkbox" /> <span class="unbxd-checkbox-label">$200 - $300 (5)</span></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="clearfix"></div>
                     </div>
                     <!-- /.block -->
                  </div>
</div>
               <div class="col-xs-12 col-sm-9 col-md-9 remove-padding">
                  <a id="main-content"></a>
                  <div id="content-center-wrapper">
                     <!--<div id='release-breadcrumb'>-->
                     <!--        <span class='release-breadcrumb-item'><a href='/release-dates/'></a></span>
                        <span class='release-breadcrumb-divider'>&nbsp;>&nbsp;</span>-->
                     <!--</div>-->
                     <div id="event-4355" class="release_dates_event node-content-store-banner clearfix">
                        <div class="content">
                           <div id="content-container" class=" col-xs-12 col-sm-7 col-md-7 clear-padding-left add-paddings">
                              <div class="contained-content-main">
                                 <div id="product-royal" class="add-row-margins">
                                    <div id="product-image-continer" class="royalSlider rsDefaultInv">
                                       <div class="rsContent">
                                          <a class="rsImg" data-rsbigimg="https://4.kixify.com//sites/default/files/imagecache/product_full/externals/e469d4d7f284356a0c0fe3f39e5107c0.jpg" 
                                             href="{{asset('pages/images/product_full_4/externals/e469d4d7f284356a0c0fe3f39e5107c0.jpg')}}">
                                          <img  src="{{asset('pages/images/product_full_4/externals/e469d4d7f284356a0c0fe3f39e5107c0.jpg')}}" alt="adidas NMD R1 Zebra Black" class="img-responsive imagecache rsTmb imagecache-uc_thumbnail" />
                                          </a>
                                       </div>
                                       <div class="rsContent">
                                          <img  src="{{asset('pages/images/product_full_2/externals/3ee7783d1622882cfd53ece34e5a7e29.jpg')}}" alt="adidas NMD R1 Zebra Black" class="img-responsive imagecache rsTmb imagecache-uc_thumbnail" />
                                          <a class="rsImg" data-rsbigimg="https://2.kixify.com//sites/default/files/imagecache/product_full/externals/3ee7783d1622882cfd53ece34e5a7e29.jpg" 
                                             href="{{asset('pages/images/product_full_2/externals/3ee7783d1622882cfd53ece34e5a7e29.jpg')}}">
                                          <img  src="{{asset('pages/images/product_full_2/externals/3ee7783d1622882cfd53ece34e5a7e29.jpg')}}" alt="adidas NMD R1 Zebra Black" class="img-responsive imagecache rsTmb imagecache-uc_thumbnail" />
                                          </a>
                                       </div>
                                       <div class="rsContent">
                                          <a class="rsImg" data-rsbigimg="{{asset('pages/images/product_full_2/externals/4111d9cbc84e4441107da80620b9ddb6.jpg')}}" 
                                             href="{{asset('pages/images/product_full_2/externals/4111d9cbc84e4441107da80620b9ddb6.jpg')}}">
                                          <img  src="{{asset('pages/images/product_full_2/externals/4111d9cbc84e4441107da80620b9ddb6.jpg')}}" alt="adidas NMD R1 Zebra Black" class="img-responsive imagecache rsTmb imagecache-uc_thumbnail" />
                                          </a>
                                       </div>
                                       <div class="rsContent">
                                          <a class="rsImg" data-rsbigimg="{{asset('pages/images/product_full_2/externals/2e44d7fb45c05b1fc9694d86838d1a86.jpg')}}" 
                                             href="{{asset('pages/images/product_full_2/externals/2e44d7fb45c05b1fc9694d86838d1a86.jpg')}}">
                                          <img  src="{{asset('pages/images/product_full_2/externals/2e44d7fb45c05b1fc9694d86838d1a86.jpg')}}" alt="adidas NMD R1 Zebra Black" class="img-responsive imagecache rsTmb imagecache-uc_thumbnail" />
                                          </a>
                                       </div>
                                       <div class="rsContent">
                                          <a class="rsImg" data-rsbigimg="{{asset('pages/images/product_full_2/externals/46e6fea88ee525c1b8913e5f49d73710.jpg')}}" 
                                             href="{{asset('pages/images/product_full_2/externals/46e6fea88ee525c1b8913e5f49d73710.jpg')}}">
                                          <img  src="{{asset('pages/images/product_full_2/externals/46e6fea88ee525c1b8913e5f49d73710.jpg')}}" alt="adidas NMD R1 Zebra Black" class="img-responsive imagecache rsTmb imagecache-uc_thumbnail" />
                                          </a>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="clearfix"></div>
                              </div>
                           </div>
                           <div class="sidebar-contained col-xs-12 col-sm-5 col-md-5 clear-padding-right add-padding-right">
                              <div class="sidebar-contained-inner">
                                 <div id='release-event-date-style-wraper'>
                                    <h1 class="release-event-title">adidas NMD R1 Zebra Black</h1>
                                    <div class="release-event-style">Core Black/White</div>
                                 </div>
                                 <div id='release-event-release-date-wraper'>
                                    <div class="release-event-date-label">Release Date</div>
                                    <div class="release-event-release-date">Aug 17, 2017 </div>
                                 </div>
                                 <div id='release-event-style-code-wraper'>
                                    <div class="release-event-date-label">Style Code</div>
                                    <div class="release-event-release-date">BY3013</div>
                                 </div>
                                 <div id='release-event-description-wraper'>
                                    <p>The Zebra theme isn’t dying down yet as the adidas NMD R1 is featured in two more zebra-inspired colorway for this summer. Both pairs are simply colored in the black and white theme while also made of primeknit across its uppers. One pair has black as its main base with white accents while the other features a white base with black accents. EVA inserts, a white Boost midsole and semi-translucent outsole complete the look altogether.</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <form action="https://www.kixify.com/search"  accept-charset="UTF-8" method="get" id="search-form" class="form-horizontal search-form">
                        <div>
                           <div class="row clear-margin">
                              <div class="col-xs-12 col-sm-12 col-md-12 clear-padding">
                                 <div class="input-group">
                                    <div class="form-group form-item form-item-textfield form-item-inline" id="edit-keys-wrapper">
                                       <input type="text" maxlength="255" name="keys" id="edit-keys" size="30" value="adidas nmd r1 zebra black" unbxdattr="sq" placeholder="I&#039;m looking for..." class="form-control form-text" />
                                    </div>
                                    <span class = "input-group-btn">
                                    <button type="submit"  name="op" id="edit-submit"   unbxdattr="sq_bt" class="btn btn-default form-submit"><i class="fa fa-search fa-2x"></i></button>
                                    </span>
                                 </div>
                              </div>
                              <div class="form-group form-item form-item-item form-item-indent" id="edit-keys-wrapper">
                                 <div class="col-xs-12 col-sm-8 col-md-8"> </div>
                              </div>
                              <div id="prepend-filter-btn">
                                 <div class="col-xs-6">                
                                    <span class="btn btn-default btn-block" id="mobile-filter-btn"><i class="fa fa-sliders fa-rotate-90"></i> Filters <sub class="badge selected-filters"></sub></span>
                                 </div>
                                 <div class="col-xs-6">
                                    <span class="btn btn-default btn-block" id="search-mobile-sort-btn"><i class="fa fa-exchange fa-rotate-90"></i> Sort</span>
                                 </div>
                              </div>
                              <div class="clearfix"></div>
                           </div>
                        </div>
                     </form>
                     <h2 class="title"></h2>
                     <div>
                        <div class="view view-category-listing view-id-category_listing">
                           <div class="view-content-container">
                              <div class="view-content">
                                 <div class="col-xs-6 col-sm-3 col-md-3 product-teaser" unbxdattr="product" unbxdparam_prank="1" unbxdparam_sku="8bea56678e877e6a85d13b79e9dc731b">
                                    <div class="product-info">
                                       <div class="product-titles hidden-xs">
                                          <div class="product-title"><a href="{{route('product')}}">Adidas nmd r1 zebra black prim...</a></div>
                                       </div>
                                    </div>
                                    <a href="{{route('product')}}" class="thumbnail"><span class="product-price">$269.99</span><img src="{{asset('pages/images/product_list/4c7e88cfedbfbe40bc7803c91a86408a.jpg')}}" alt="Adidas nmd r1 zebra black prim..." title="" width="180" height="180" class="img-responsive imagecache imagecache-product_list"></a>
                                    <!--<div > </div>-->
                                 </div>
                             
                             
                                 <div class="clearfix"></div>
                              </div>
                              <div class="clearfix"></div>
                              <div class="item-list">
                                 <div class="clearfix"></div>
                              </div>
                           </div>
                           <div class="clearfix"></div>
                        </div>
                     
                     </div>
                     <h3>RELATED </h3>
                     <div id='release-related-continer'>
                        <div class="col-xs-6 col-sm-2 col-md-2 product-teaser">
                           <div class="product-info" style="display: none;">
                              <div class="product-titles hidden-xs">
                                 <div class="product-title"><a href="adidas-nmd-xr1-core-black-footlocker-europe.html">Adidas nmd xr1 core black foot...</a></div>
                              </div>
                           </div>
                           <a href="adidas-nmd-xr1-core-black-footlocker-europe.html" class="thumbnail"><img src="{{asset('pages/images/product_list/a0e7da1fd73d58649921facc022dfea2.jpg')}}" alt="Adidas nmd xr1 core black foot..." title="" width="180" height="180" class="img-responsive imagecache imagecache-product_list"></a>
                        </div>
                     
                     </div>
                  </div>
               </div>
               <div class="clearfix"></div>
@endsection