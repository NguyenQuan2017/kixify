@extends('pages/layouts/master')
@section('content')
<div class="col-xs-12 col-sm-3 col-md-3 region-sidebar-first-search remove-padding">
   <div class="region region-sidebar-first column sidebar">
      
      <div id="block-unbxdsearch_search-unbxd_sort" class="block block-unbxdsearch_search region-even even region-count-2 count-2">
         <h3 class="title">Sort By</h3>
         <div class="content">
            <div class="form-group form-item form-item-select form-item-inline" id="sort-wrapper">
               <select name="sort" class="form-control form-select" id="sort" >
                  <option value="" selected="selected">Top Sellers</option>
                  <option value="{{$newest_item}}">Newest Items</option>
                  <option value="price-asc">Price: Low to High</option>
                  <option value="price-desc">Price: High to Low</option>
               </select>
            </div>
         </div>
         <div class="clearfix"></div>
      </div>
      <!-- /.block -->
      <div id="block-unbxdsearch_search-unbxd_category" class="block block-unbxdsearch_search region-odd odd region-count-3 count-3">
         <h3 class="title">Category</h3>
         <div class="content">
            <div class="checkboxes-wrapper">
               <div class="form-checkboxes">
                  <div class="form-group form-item form-item-checkbox form-item-indent" id="category-0-wrapper">
                     <div class="option" for="category-0"><input type="checkbox" name="category[]" id="category-0" value="Adidas"   class="form-checkbox" /> <span class="unbxd-checkbox-label">Adidas (13837)</span></div>
                  </div>
                  <div class="form-group form-item form-item-checkbox form-item-indent" id="category-1-wrapper">
                     <div class="option" for="category-1"><input type="checkbox" name="category[]" id="category-1" value="Air+Jordan"   class="form-checkbox" /> <span class="unbxd-checkbox-label">Air Jordan (26824)</span></div>
                  </div>
                  <div class="form-group form-item form-item-checkbox form-item-indent" id="category-2-wrapper">
                     <div class="option" for="category-2"><input type="checkbox" name="category[]" id="category-2" value="Asics"   class="form-checkbox" /> <span class="unbxd-checkbox-label">Asics (2946)</span></div>
                  </div>
                  <div class="form-group form-item form-item-checkbox form-item-indent" id="category-3-wrapper">
                     <div class="option" for="category-3"><input type="checkbox" name="category[]" id="category-3" value="Converse"   class="form-checkbox" /> <span class="unbxd-checkbox-label">Converse (1743)</span></div>
                  </div>
                  <div class="form-group form-item form-item-checkbox form-item-indent" id="category-4-wrapper">
                     <div class="option" for="category-4"><input type="checkbox" name="category[]" id="category-4" value="Ewing+Athletics"   class="form-checkbox" /> <span class="unbxd-checkbox-label">Ewing Athletics (135)</span></div>
                  </div>
                  <div class="form-group form-item form-item-checkbox form-item-indent" id="category-5-wrapper">
                     <div class="option" for="category-5"><input type="checkbox" name="category[]" id="category-5" value="Fila"   class="form-checkbox" /> <span class="unbxd-checkbox-label">Fila (319)</span></div>
                  </div>
                  <div class="form-group form-item form-item-checkbox form-item-indent" id="category-6-wrapper">
                     <div class="option" for="category-6"><input type="checkbox" name="category[]" id="category-6" value="Li+Ning"   class="form-checkbox" /> <span class="unbxd-checkbox-label">Li Ning (97)</span></div>
                  </div>
                  <div class="form-group form-item form-item-checkbox form-item-indent" id="category-7-wrapper">
                     <div class="option" for="category-7"><input type="checkbox" name="category[]" id="category-7" value="New+Balance"   class="form-checkbox" /> <span class="unbxd-checkbox-label">New Balance (3394)</span></div>
                  </div>
                  <div class="form-group form-item form-item-checkbox form-item-indent" id="category-8-wrapper">
                     <div class="option" for="category-8"><input type="checkbox" name="category[]" id="category-8" value="Nike"   class="form-checkbox" /> <span class="unbxd-checkbox-label">Nike (47322)</span></div>
                  </div>
                  <div class="form-group form-item form-item-checkbox form-item-indent" id="category-9-wrapper">
                     <div class="option" for="category-9"><input type="checkbox" name="category[]" id="category-9" value="Other+Brands"   class="form-checkbox" /> <span class="unbxd-checkbox-label">Other Brands (8971)</span></div>
                  </div>
                  <div class="form-group form-item form-item-checkbox form-item-indent" id="category-10-wrapper">
                     <div class="option" for="category-10"><input type="checkbox" name="category[]" id="category-10" value="Puma"   class="form-checkbox" /> <span class="unbxd-checkbox-label">Puma (3572)</span></div>
                  </div>
                  <div class="form-group form-item form-item-checkbox form-item-indent" id="category-11-wrapper">
                     <div class="option" for="category-11"><input type="checkbox" name="category[]" id="category-11" value="Radii"   class="form-checkbox" /> <span class="unbxd-checkbox-label">Radii (2)</span></div>
                  </div>
                  <div class="form-group form-item form-item-checkbox form-item-indent" id="category-12-wrapper">
                     <div class="option" for="category-12"><input type="checkbox" name="category[]" id="category-12" value="Reebok"   class="form-checkbox" /> <span class="unbxd-checkbox-label">Reebok (1967)</span></div>
                  </div>
                  <div class="form-group form-item form-item-checkbox form-item-indent" id="category-13-wrapper">
                     <div class="option" for="category-13"><input type="checkbox" name="category[]" id="category-13" value="Saucony"   class="form-checkbox" /> <span class="unbxd-checkbox-label">Saucony (937)</span></div>
                  </div>
                  <div class="form-group form-item form-item-checkbox form-item-indent" id="category-14-wrapper">
                     <div class="option" for="category-14"><input type="checkbox" name="category[]" id="category-14" value="Sperry"   class="form-checkbox" /> <span class="unbxd-checkbox-label">Sperry (56)</span></div>
                  </div>
                  <div class="form-group form-item form-item-checkbox form-item-indent" id="category-15-wrapper">
                     <div class="option" for="category-15"><input type="checkbox" name="category[]" id="category-15" value="Supra"   class="form-checkbox" /> <span class="unbxd-checkbox-label">Supra (237)</span></div>
                  </div>
                  <div class="form-group form-item form-item-checkbox form-item-indent" id="category-16-wrapper">
                     <div class="option" for="category-16"><input type="checkbox" name="category[]" id="category-16" value="Timberland"   class="form-checkbox" /> <span class="unbxd-checkbox-label">Timberland (782)</span></div>
                  </div>
                  <div class="form-group form-item form-item-checkbox form-item-indent" id="category-17-wrapper">
                     <div class="option" for="category-17"><input type="checkbox" name="category[]" id="category-17" value="Toms"   class="form-checkbox" /> <span class="unbxd-checkbox-label">Toms (14)</span></div>
                  </div>
                  <div class="form-group form-item form-item-checkbox form-item-indent" id="category-18-wrapper">
                     <div class="option" for="category-18"><input type="checkbox" name="category[]" id="category-18" value="Under+Armour"   class="form-checkbox" /> <span class="unbxd-checkbox-label">Under Armour (1358)</span></div>
                  </div>
                  <div class="form-group form-item form-item-checkbox form-item-indent" id="category-19-wrapper">
                     <div class="option" for="category-19"><input type="checkbox" name="category[]" id="category-19" value="Vans"   class="form-checkbox" /> <span class="unbxd-checkbox-label">Vans (3206)</span></div>
                  </div>
               </div>
            </div>
         </div>
         <div class="clearfix"></div>
      </div>
      <!-- /.block -->
      <div id="block-unbxdsearch_search-unbxd_gender" class="block block-unbxdsearch_search region-even even region-count-4 count-4">
         <h3 class="title">Gender / Age</h3>
         <div class="content">
            <div class="checkboxes-wrapper">
               <div class="form-checkboxes">
                  <div class="form-group form-item form-item-checkbox form-item-indent" id="gender-0-wrapper">
                     <div class="option" for="gender-0"><input type="checkbox" name="gender[]" id="gender-0" value="Men"  checked="checked"  class="form-checkbox" /> <span class="unbxd-checkbox-label">Men (117719)</span></div>
                  </div>
               </div>
               <div class="sub-category"></div>
            </div>
         </div>
         <div class="clearfix"></div>
      </div>
      <!-- /.block -->
      <div id="block-unbxdsearch_search-unbxd_condition" class="block block-unbxdsearch_search region-odd odd region-count-5 count-5">
         <h3 class="title">Condition</h3>
         <div class="content">
            <div class="checkboxes-wrapper">
               <div class="form-checkboxes">
                  <div class="form-group form-item form-item-checkbox form-item-indent" id="condition-0-wrapper">
                     <div class="option" for="condition-0"><input type="checkbox" name="condition[]" id="condition-0" value="Brand+New"   class="form-checkbox" /> <span class="unbxd-checkbox-label">Brand New (91641)</span></div>
                  </div>
                  <div class="form-group form-item form-item-checkbox form-item-indent" id="condition-1-wrapper">
                     <div class="option" for="condition-1"><input type="checkbox" name="condition[]" id="condition-1" value="Pre-Owned"   class="form-checkbox" /> <span class="unbxd-checkbox-label">Pre-Owned (26078)</span></div>
                  </div>
               </div>
            </div>
         </div>
         <div class="clearfix"></div>
      </div>
      <!-- /.block -->
      <div id="block-unbxdsearch_search-unbxd_size" class="block block-unbxdsearch_search region-even even region-count-6 count-6">
         <h3 class="title">Size</h3>
         <div class="content">
            <div class="checkboxes-wrapper">
               <div class="form-checkboxes">
                  <div class="form-group form-item form-item-checkbox form-item-indent" id="size-0-wrapper">
                     <div class="option" for="size-0"><input type="checkbox" name="size[]" id="size-0" value="1"   class="form-checkbox" /> <span class="unbxd-checkbox-label">1 (227)</span></div>
                  </div>
                  <div class="form-group form-item form-item-checkbox form-item-indent" id="size-1-wrapper">
                     <div class="option" for="size-1"><input type="checkbox" name="size[]" id="size-1" value="1.5"   class="form-checkbox" /> <span class="unbxd-checkbox-label">1.5 (121)</span></div>
                  </div>
                  <div class="form-group form-item form-item-checkbox form-item-indent" id="size-2-wrapper">
                     <div class="option" for="size-2"><input type="checkbox" name="size[]" id="size-2" value="2"   class="form-checkbox" /> <span class="unbxd-checkbox-label">2 (251)</span></div>
                  </div>
                  <div class="form-group form-item form-item-checkbox form-item-indent" id="size-3-wrapper">
                     <div class="option" for="size-3"><input type="checkbox" name="size[]" id="size-3" value="2.5"   class="form-checkbox" /> <span class="unbxd-checkbox-label">2.5 (133)</span></div>
                  </div>
                  <div class="form-group form-item form-item-checkbox form-item-indent" id="size-4-wrapper">
                     <div class="option" for="size-4"><input type="checkbox" name="size[]" id="size-4" value="3"   class="form-checkbox" /> <span class="unbxd-checkbox-label">3 (391)</span></div>
                  </div>
                  <div class="form-group form-item form-item-checkbox form-item-indent" id="size-5-wrapper">
                     <div class="option" for="size-5"><input type="checkbox" name="size[]" id="size-5" value="3.5"   class="form-checkbox" /> <span class="unbxd-checkbox-label">3.5 (273)</span></div>
                  </div>
                  <div class="form-group form-item form-item-checkbox form-item-indent" id="size-6-wrapper">
                     <div class="option" for="size-6"><input type="checkbox" name="size[]" id="size-6" value="4"   class="form-checkbox" /> <span class="unbxd-checkbox-label">4 (1206)</span></div>
                  </div>
                  <div class="form-group form-item form-item-checkbox form-item-indent" id="size-7-wrapper">
                     <div class="option" for="size-7"><input type="checkbox" name="size[]" id="size-7" value="4.5"   class="form-checkbox" /> <span class="unbxd-checkbox-label">4.5 (1269)</span></div>
                  </div>
                  <div class="form-group form-item form-item-checkbox form-item-indent" id="size-8-wrapper">
                     <div class="option" for="size-8"><input type="checkbox" name="size[]" id="size-8" value="5"   class="form-checkbox" /> <span class="unbxd-checkbox-label">5 (2033)</span></div>
                  </div>
                  <div class="form-group form-item form-item-checkbox form-item-indent" id="size-9-wrapper">
                     <div class="option" for="size-9"><input type="checkbox" name="size[]" id="size-9" value="5.5"   class="form-checkbox" /> <span class="unbxd-checkbox-label">5.5 (1917)</span></div>
                  </div>
                  <div class="form-group form-item form-item-checkbox form-item-indent" id="size-10-wrapper">
                     <div class="option" for="size-10"><input type="checkbox" name="size[]" id="size-10" value="6"   class="form-checkbox" /> <span class="unbxd-checkbox-label">6 (4331)</span></div>
                  </div>
                  <div class="form-group form-item form-item-checkbox form-item-indent" id="size-11-wrapper">
                     <div class="option" for="size-11"><input type="checkbox" name="size[]" id="size-11" value="6.5"   class="form-checkbox" /> <span class="unbxd-checkbox-label">6.5 (4385)</span></div>
                  </div>
                  <div class="form-group form-item form-item-checkbox form-item-indent" id="size-12-wrapper">
                     <div class="option" for="size-12"><input type="checkbox" name="size[]" id="size-12" value="7"   class="form-checkbox" /> <span class="unbxd-checkbox-label">7 (9535)</span></div>
                  </div>
                  <div class="form-group form-item form-item-checkbox form-item-indent" id="size-13-wrapper">
                     <div class="option" for="size-13"><input type="checkbox" name="size[]" id="size-13" value="7.5"   class="form-checkbox" /> <span class="unbxd-checkbox-label">7.5 (11081)</span></div>
                  </div>
                  <div class="form-group form-item form-item-checkbox form-item-indent" id="size-14-wrapper">
                     <div class="option" for="size-14"><input type="checkbox" name="size[]" id="size-14" value="8"   class="form-checkbox" /> <span class="unbxd-checkbox-label">8 (23664)</span></div>
                  </div>
                  <div class="form-group form-item form-item-checkbox form-item-indent" id="size-15-wrapper">
                     <div class="option" for="size-15"><input type="checkbox" name="size[]" id="size-15" value="8.5"   class="form-checkbox" /> <span class="unbxd-checkbox-label">8.5 (22988)</span></div>
                  </div>
                  <div class="form-group form-item form-item-checkbox form-item-indent" id="size-16-wrapper">
                     <div class="option" for="size-16"><input type="checkbox" name="size[]" id="size-16" value="9"   class="form-checkbox" /> <span class="unbxd-checkbox-label">9 (27480)</span></div>
                  </div>
                  <div class="form-group form-item form-item-checkbox form-item-indent" id="size-17-wrapper">
                     <div class="option" for="size-17"><input type="checkbox" name="size[]" id="size-17" value="9.5"   class="form-checkbox" /> <span class="unbxd-checkbox-label">9.5 (26734)</span></div>
                  </div>
                  <div class="form-group form-item form-item-checkbox form-item-indent" id="size-18-wrapper">
                     <div class="option" for="size-18"><input type="checkbox" name="size[]" id="size-18" value="10"   class="form-checkbox" /> <span class="unbxd-checkbox-label">10 (31259)</span></div>
                  </div>
                  <div class="form-group form-item form-item-checkbox form-item-indent" id="size-19-wrapper">
                     <div class="option" for="size-19"><input type="checkbox" name="size[]" id="size-19" value="10.5"   class="form-checkbox" /> <span class="unbxd-checkbox-label">10.5 (28734)</span></div>
                  </div>
                  <div class="form-group form-item form-item-checkbox form-item-indent" id="size-20-wrapper">
                     <div class="option" for="size-20"><input type="checkbox" name="size[]" id="size-20" value="11"   class="form-checkbox" /> <span class="unbxd-checkbox-label">11 (29504)</span></div>
                  </div>
                  <div class="form-group form-item form-item-checkbox form-item-indent" id="size-21-wrapper">
                     <div class="option" for="size-21"><input type="checkbox" name="size[]" id="size-21" value="11.5"   class="form-checkbox" /> <span class="unbxd-checkbox-label">11.5 (20406)</span></div>
                  </div>
                  <div class="form-group form-item form-item-checkbox form-item-indent" id="size-22-wrapper">
                     <div class="option" for="size-22"><input type="checkbox" name="size[]" id="size-22" value="12"   class="form-checkbox" /> <span class="unbxd-checkbox-label">12 (23729)</span></div>
                  </div>
                  <div class="form-group form-item form-item-checkbox form-item-indent" id="size-23-wrapper">
                     <div class="option" for="size-23"><input type="checkbox" name="size[]" id="size-23" value="12.5"   class="form-checkbox" /> <span class="unbxd-checkbox-label">12.5 (4183)</span></div>
                  </div>
                  <div class="form-group form-item form-item-checkbox form-item-indent" id="size-24-wrapper">
                     <div class="option" for="size-24"><input type="checkbox" name="size[]" id="size-24" value="13"   class="form-checkbox" /> <span class="unbxd-checkbox-label">13 (18867)</span></div>
                  </div>
                  <div class="form-group form-item form-item-checkbox form-item-indent" id="size-25-wrapper">
                     <div class="option" for="size-25"><input type="checkbox" name="size[]" id="size-25" value="13.5"   class="form-checkbox" /> <span class="unbxd-checkbox-label">13.5 (604)</span></div>
                  </div>
                  <div class="form-group form-item form-item-checkbox form-item-indent" id="size-26-wrapper">
                     <div class="option" for="size-26"><input type="checkbox" name="size[]" id="size-26" value="14"   class="form-checkbox" /> <span class="unbxd-checkbox-label">14 (6671)</span></div>
                  </div>
                  <div class="form-group form-item form-item-checkbox form-item-indent" id="size-27-wrapper">
                     <div class="option" for="size-27"><input type="checkbox" name="size[]" id="size-27" value="15"   class="form-checkbox" /> <span class="unbxd-checkbox-label">15 (2784)</span></div>
                  </div>
                  <div class="form-group form-item form-item-checkbox form-item-indent" id="size-28-wrapper">
                     <div class="option" for="size-28"><input type="checkbox" name="size[]" id="size-28" value="16"   class="form-checkbox" /> <span class="unbxd-checkbox-label">16 (439)</span></div>
                  </div>
                  <div class="form-group form-item form-item-checkbox form-item-indent" id="size-29-wrapper">
                     <div class="option" for="size-29"><input type="checkbox" name="size[]" id="size-29" value="17"   class="form-checkbox" /> <span class="unbxd-checkbox-label">17 (336)</span></div>
                  </div>
                  <div class="form-group form-item form-item-checkbox form-item-indent" id="size-30-wrapper">
                     <div class="option" for="size-30"><input type="checkbox" name="size[]" id="size-30" value="18"   class="form-checkbox" /> <span class="unbxd-checkbox-label">18 (449)</span></div>
                  </div>
               </div>
            </div>
         </div>
         <div class="clearfix"></div>
      </div>
      <!-- /.block -->
      <div id="block-unbxdsearch_search-unbxd_shipping" class="block block-unbxdsearch_search region-odd odd region-count-7 count-7">
         <h3 class="title">Shipping to</h3>
         <div class="content">
            <div class="checkboxes-wrapper">
               <div class="form-checkboxes">
                  <div class="form-group form-item form-item-checkbox form-item-indent" id="shipping-0-wrapper">
                     <div class="option" for="shipping-0"><input type="checkbox" name="shipping[]" id="shipping-0" value="Canada"   class="form-checkbox" /> <span class="unbxd-checkbox-label">Canada (75350)</span></div>
                  </div>
                  <div class="form-group form-item form-item-checkbox form-item-indent" id="shipping-1-wrapper">
                     <div class="option" for="shipping-1"><input type="checkbox" name="shipping[]" id="shipping-1" value="Rest+of+the+world"   class="form-checkbox" /> <span class="unbxd-checkbox-label">Rest of the world (65805)</span></div>
                  </div>
                  <div class="form-group form-item form-item-checkbox form-item-indent" id="shipping-2-wrapper">
                     <div class="option" for="shipping-2"><input type="checkbox" name="shipping[]" id="shipping-2" value="United+States"   class="form-checkbox" /> <span class="unbxd-checkbox-label">United States (117533)</span></div>
                  </div>
               </div>
            </div>
         </div>
         <div class="clearfix"></div>
      </div>
      <!-- /.block -->
      <div id="block-unbxdsearch_search-unbxd_price" class="block block-unbxdsearch_search region-even even region-count-8 count-8">
         <h3 class="title">Price</h3>
         <div class="content">
            <div class="checkboxes-wrapper">
               <div class="form-checkboxes">
                  <div class="form-group form-item form-item-checkbox form-item-indent" id="price-0-wrapper">
                     <div class="option" for="price-0"><input type="checkbox" name="price" id="price-0" value="0"   class="form-checkbox" /> <span class="unbxd-checkbox-label">Under $100 (43584)</span></div>
                  </div>
                  <div class="form-group form-item form-item-checkbox form-item-indent" id="price-1-wrapper">
                     <div class="option" for="price-1"><input type="checkbox" name="price" id="price-1" value="100"   class="form-checkbox" /> <span class="unbxd-checkbox-label">$100 - $200 (42183)</span></div>
                  </div>
                  <div class="form-group form-item form-item-checkbox form-item-indent" id="price-2-wrapper">
                     <div class="option" for="price-2"><input type="checkbox" name="price" id="price-2" value="200"   class="form-checkbox" /> <span class="unbxd-checkbox-label">$200 - $300 (18281)</span></div>
                  </div>
                  <div class="form-group form-item form-item-checkbox form-item-indent" id="price-3-wrapper">
                     <div class="option" for="price-3"><input type="checkbox" name="price" id="price-3" value="300"   class="form-checkbox" /> <span class="unbxd-checkbox-label">$300 - $400 (6545)</span></div>
                  </div>
                  <div class="form-group form-item form-item-checkbox form-item-indent" id="price-4-wrapper">
                     <div class="option" for="price-4"><input type="checkbox" name="price" id="price-4" value="400"   class="form-checkbox" /> <span class="unbxd-checkbox-label">$400 - $500 (2427)</span></div>
                  </div>
                  <div class="form-group form-item form-item-checkbox form-item-indent" id="price-5-wrapper">
                     <div class="option" for="price-5"><input type="checkbox" name="price" id="price-5" value="500"   class="form-checkbox" /> <span class="unbxd-checkbox-label">$500 And Above (4696)</span></div>
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
   <h1 class="title " id="page-title">Search</h1>
   <div id="content-center-wrapper">
      <form action="/search"  accept-charset="UTF-8" method="get" id="search-form" class="form-horizontal search-form">
         <div>
            <div class="row clear-margin">
               <div class="col-xs-12 col-sm-12 col-md-12 clear-padding">
                  <div class="input-group">
                     <div class="form-group form-item form-item-textfield form-item-inline" id="edit-keys-wrapper">
                        <input type="text" maxlength="255" name="keys" id="edit-keys" size="30" value="" unbxdattr="sq" placeholder="I&#039;m looking for..." class="form-control form-text" />
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
      <div class="view view-category-listing view-id-category_listing">
         <div class="view-content-container">
            <div class="view-content">
            @foreach($newest_item as $item)
               <div class="col-xs-6 col-sm-3 col-md-3 product-teaser" unbxdattr="product" unbxdparam_prank="1" unbxdparam_sku="25cb93e39eb51aeaea277a16f5dbb18a">
                  <div class="product-info">
                     <div class="product-titles hidden-xs">
                        <div class="product-title"><a href="/product/adidas-nmd-r1-runner-3m-triple-black-by3123-size-7-5">{{$item->name_product}}</a></div>
                     </div>
                  </div>
                  <a href="/product/adidas-nmd-r1-runner-3m-triple-black-by3123-size-7-5" class="thumbnail"><span class="product-price">$189.99</span><img src="https://0.kixify.com/sites/default/files/imagecache/product_list/product/2017/03/28/p_14083671_76153246_3912881.jpg" alt="Adidas nmd r1 runner 3m triple..." title="" width="180" height="180" class="img-responsive imagecache imagecache-product_list"></a>
                  <!--<div > </div>-->
               </div>
           @endforeach
               <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
            <div class="item-list">
               <ul role="1" class="pagination">
                  <li class="active first"><span>1 <span class="sr-only">(current)</span></span></li>
                  <li class="pager-item"><a href="/search?page=1&amp;gender[0]=Men" title="Go to page 2" class="active">2</a></li>
                  <li class="pager-item"><a href="/search?page=2&amp;gender[0]=Men" title="Go to page 3" class="active">3</a></li>
                  <li class="pager-item"><a href="/search?page=3&amp;gender[0]=Men" title="Go to page 4" class="active">4</a></li>
                  <li class="pager-ellipsis"><span>... <span class="sr-only">(ellipsis)</span></span></li>
                  <li class="pager-next"><a href="/search?page=1&amp;gender[0]=Men" class="active"> › </a></li>
                  <li class="pager-last last"><a href="/search?page=2942&amp;gender[0]=Men" class="active"> » </a></li>
               </ul>
               <div class="clearfix"></div>
               <div class="clearfix"></div>
            </div>
         </div>
         <div class="clearfix"></div>
      </div>
      <script type="text/javascript">
         fbq('track', 'Search');
      </script>
   </div>
</div>
<div class="clearfix"></div>
@endsection