@extends('pages/layouts/master')
@section('content')
<div class="col-xs-12 col-sm-12 col-md-12 remove-padding" id="content-container-wrapper">
   <a id="main-content"></a>
   <h1 class="title hidden-xs" id="page-title">{{$products['title']}}</h1>
   <div id="content-center-wrapper">
   
      <div id="node-17254556" class="node node-type-product build-mode-full node-content-store-banner clearfix" >
         <div id="product-track-detail" data-id="17254556" data-price="200" data-name="100% AUTHENTIC VNDS NIKE AIR JORDAN RETRO 13 BRED 10.5 2005" ></div>
         <div class="content">
            <div id="content-container" class=" col-xs-12 col-sm-4 col-md-6 clear-padding-left remove-padding">
               <div class="contained-content-main">
                  <div id="product-royal" class="add-row-margins">
                     <div id="product-image-continer" class="royalSlider rsDefaultInv">
                        <div class="rsContent">
                           <a class="rsImg" data-rsbigimg="{{url('public/images/products/'.$products['image'])}}" 
                              href="{{url('public/images/products/'.$products['image'])}}">
                           <img  src="{{url('public/images/products/'.$products['image'])}}" alt="adidas NMD R1 Zebra Black" class="img-responsive imagecache rsTmb imagecache-uc_thumbnail" />
                           </a>
                        </div>
                        @foreach($image_detail as $image_details)
                        <div class="rsContent">
                           <img  src="{{url('public/images/productDetail/',$image_details['image'])}}" alt="adidas NMD R1 Zebra Black" class="img-responsive imagecache rsTmb imagecache-uc_thumbnail" />
                           <a class="rsImg" data-rsbigimg="{{url('public/images/productDetail/',$image_details['image'])}}" 
                              href="{{url('public/images/productDetail/',$image_details['image'])}}">
                           <img  src="{{url('public/images/productDetail/',$image_details['image'])}}" alt="adidas NMD R1 Zebra Black" class="img-responsive imagecache rsTmb imagecache-uc_thumbnail" />
                           </a>
                        </div>
                        @endforeach
                       
                     </div>
                  </div>
                  <div class="clearfix"></div>
                  <h3 class="title visible-xs">100% authentic vnds nike air jordan retro 13 bred 10.5 2005</h3>
               </div>
            </div>
            <div class="sidebar-contained product-sidebar-first col-xs-12 col-sm-8 col-md-6 clear-padding">
            @include('admin/notification/errors')
               <div class="product-sidebar-second col-xs-12 col-sm-6 col-md-6 clear-padding">
                  <div id="block-cargoh_helper-cargoh_product_offer" class="block block-cargoh_helper">
                     <div class="col-xs-6 col-sm-6 col-md-6 two-btn clear-padding want-wrapper">
                        <div class="seller_links">
                           <div class="item-list">
                              <ul class="list-unstyled">
                                 <li class="first last"> <a href="https://www.kixify.com/flag/flag/want/17254556?destination=node%2F17254556&amp;token=3ef1787a8d7e347b53cf16a245788707" title="" class="flag flag-action flag-link-normal btn btn-default btn-block" rel="nofollow">Want<span class="flag-counter">+2</span><span class="flag-throbber">&nbsp;</span></a>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="col-xs-6 col-sm-6 col-md-6 two-btn clear-padding  offer-wrapper">
                        <a href="https://www.kixify.com/user/register?destination=node/17254556" class="btn btn-block btn-default">Make an Offer</a>                                                    
                     </div>
                     <div class="clearfix"></div>
                  </div>
                  <div id="block-cargoh_helper-cargoh_add_to_cart" class="block block-cargoh_helper">
                     <div class="add-to-cart">
                        <form action="{{route('addToCard',$products->id)}}"  accept-charset="UTF-8" method="post" id="uc-product-add-to-cart-form-17254556-1" class="form-horizontal ">
                          {{csrf_field()}}
                           <div>
                              <div class="add-to-cart" id="add-to-card-wrapper">
                                 <div id="product-cart_btn" class="col-xs-4 col-sm-12 col-md-12 clear-padding add-paddings">

                                    <div class="button-wrapper button-add-to-cart">
                                    @if(isset($user))
                                    <button type="submit" class="btn btn-default  btn-kixify btn-block">Add to card</button>
                                     @else
                                      <a href="{{route('login-register')}}" class="btn btn-default  btn-kixify btn-block" >Add to cart</a>
                                    @endif     
                                    </div>
                              
                                 
                                 </div>
                                 <div class="hidden-xs">
                                    <div class="clearfix"></div>
                                    <div class="price-wrapper" id="sell-price-offer-wrapper">
                                       <div class="sellprice col-xs-12 col-sm-12 col-md-12 clear-padding">${{$products->price}}</div>
                                       <div class="clearfix"></div>
                                    </div>
                                    <div class="clearfix"></div>
                                 </div>
                                 <div class="col-xs-4 visible-xs" id="mobile-price-info">
                                    ${{$products->price}}       
                                 </div>
                                 <div class="col-xs-4 col-sm-6 col-md-6">
                                    <div class="attributes">
                                       <div class="attribute attribute-6 odd">
                                    
                                          <div class="form-group form-item form-item-select form-item-inline" id="select-size-attributes-wrapper">
                                            
                                     
                                           <select name="size" class="form-control form-select required" id="select-size-attributes">
                                           <option value="" >Select size</option>
                                            @foreach($size_product as $item)
                                          @foreach($item->sizes as $size)<option value="{{$size['size']}}">{{$size['size']}}</option>
                                             @endforeach
                                          @endforeach
                                          </select>
                                          
                                          </div>        
                                                
                                        
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-xs-6 col-sm-6 col-md-6 clear-padding hidden-xs">
                                    <div class="well well-sm white">There's only 1 left!</div>
                                 </div>
                                 <div class="clearfix"></div>
                                 <input type="hidden" name="qty" id="edit-qty-1" value="1"  />
                                 <input type="hidden" name="form_build_id" id="form-wBunlyKr1t-jn7NUKeNnVwaBgKN3TZSzPwOtop5un2A" value="form-wBunlyKr1t-jn7NUKeNnVwaBgKN3TZSzPwOtop5un2A"  />
                                 <input type="hidden" name="form_id" id="edit-uc-product-add-to-cart-form-17254556-1" value="uc_product_add_to_cart_form_17254556"  />
                                 <div class="clearfix"></div>
                              </div>
                           </div>
                        </form>
                     </div>
                     <div class="clearfix"></div>
                  </div>
                  <div id="block-cargoh_helper-statistic" class="block block-cargoh_helper add-to-cart col-xs-6 col-sm-12 col-md-12 clear-margin clear-padding add-small-padding-right">
                     <div class="col-xs-12 col-sm-6 col-md-6 clear-padding clear-margin">
                        <div class="well well-sm  white"  style="margin-bottom: 8px;margin-right: 2px;"><b>Pre-Owned</b></div>
                     </div>
                     <div class="col-xs-12 col-sm-6 col-md-6 clear-padding">
                        <div class="well well-sm  white" style="margin-bottom: 8px;margin-right: 2px; padding-left: 2px;padding-right: 2px;">
                           <a href="https://www.kixify.com/search?gender[]=Men" style="color:#333">Men&#039;s</a>                            
                        </div>
                     </div>
                     <div class="clearfix"></div>
                     <div class="col-xs-12 col-sm-12 col-md-12 clear-padding clear-margin">
                        <div class="col-xs-12 col-sm-6 col-md-6 clear-padding attrbutes">
                           <div class="well well-sm white" style="margin-bottom: 8px;margin-right: 2px; padding-left: 2px;padding-right: 2px;">87 Views</div>
                        </div>
                     </div>
                     <div class="clearfix"></div>
                     <div id="block-cargoh_helper-cargoh_curation" class="block block-cargoh_helper">
                        <div class="clearfix"></div>
                     </div>
                     <div class="clearfix"></div>
                  </div>
                  <div id="block-cargoh_helper-cargoh_payments" class="block block-cargoh_helper col-xs-6 visible-xs clear-padding">
                     <div class="panel panel-default">
                        <div class="panel-heading">
                           <div class="panel-title">Shipping</div>
                        </div>
                        <div class="panel-body">
                           <table class="table shipping-table">
                              <tbody>
                                 <tr class="odd">
                                    <td>USA</td>
                                    <td>$15</td>
                                 </tr>
                                 <tr class="even">
                                    <td>Canada</td>
                                    <td>$35</td>
                                 </tr>
                                 <tr class="odd">
                                    <td>International</td>
                                    <td>$45</td>
                                 </tr>
                              </tbody>
                           </table>
                        </div>
                     </div>
                     <div class="clearfix"></div>
                  </div>
                  <div class="clearfix"></div>
               </div>
               <div class="product-sidebar-second col-xs-12 col-sm-6 col-md-6 clear-padding-right remove-padding">
                  <div id="block-cargoh_helper-cargoh_payments" class="block block-cargoh_helper hidden-xs">
                     <div class="panel panel-default">
                        <div class="panel-heading">
                           <div class="panel-title">Shipping</div>
                        </div>
                        <div class="panel-body">
                           <table class="table shipping-table">
                              <tbody>
                                 <tr class="odd">
                                    <td>USA</td>
                                    <td>$15</td>
                                 </tr>
                                 <tr class="even">
                                    <td>Canada</td>
                                    <td>$35</td>
                                 </tr>
                                 <tr class="odd">
                                    <td>International</td>
                                    <td>$45</td>
                                 </tr>
                              </tbody>
                           </table>
                        </div>
                     </div>
                     <div class="clearfix"></div>
                  </div>
                  <div id="block-kixify_feedback-kixfy_feedback_store_owner_block" class="block block-kixify_feedback">
                     <div class="panel panel-default" id="product-store-owner">
                        <div class="panel-heading">
                           <div id="seller-name-wrapper"><a href="https://www.kixify.com/ricostrong">ricostrong</a> </div>
                           <div class="clearfix"></div>
                        </div>
                        <div class="panel-body">
                           <table class="table sticky-table">
                              <tbody>
                                 <tr>
                                    <td colspan="2" style="padding: 0px;">
                                       <table class="table" id="profile-overview">
                                          <tr>
                                             <td class="profile-image top-row">
                                                <a href="https://www.kixify.com/ricostrong" class="profile-overview-links">
                                                <img src="https://4.kixify.com/sites/default/files/imagecache/uc_thumbnail/users/2015/07/u_16202306_324151.jpg" alt="" title="" class="img-responsive imagecache imagecache-uc_thumbnail">                                    </a>
                                             </td>
                                             <td class="middle-column top-row">
                                                <a href="https://www.kixify.com/ricostrong" class="profile-overview-links">
                                                <span class="profile-numbers">29</span>
                                                <span class="profile-number-text">ITEMS</span>
                                                </a>
                                             </td>
                                             <td class="middle-column top-row">
                                                <span class="profile-numbers">28</span>
                                                <span class="profile-number-text">Followers</span>
                                             </td>
                                             <td  class="profile-image top-row">
                                                <a href="https://www.kixify.com/feedbacks/user/ricostrong" class="profile-overview-links">
                                                <span class="profile-numbers">100%</span>
                                                <span class="profile-number-text">Feedback</span>
                                                </a>                                    
                                             </td>
                                          </tr>
                                       </table>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td style="padding: 4px; padding-right: 2px;width: 50%;">
                                       <a href="https://www.kixify.com/follow/add/788671?destination=node%2F17254556" class="favorite btn btn-default btn-sm btn-block">Follow</a>                    
                                    </td>
                                    <td style="padding: 4px; padding-left: 2px;">
                                       <a href="https://www.kixify.com/user/register" class="contact popups-form btn btn-default btn-sm btn-block">Contact</a>                    
                                    </td>
                                 </tr>
                              </tbody>
                           </table>
                        </div>
                     </div>
                     <div class="clearfix"></div>
                  </div>
               </div>
               <div class="clearfix"></div>
               <div id="product_information">
                  <div class="panel panel-default">
                     <div class="panel-heading">
                        <div class="panel-title">
                           Product Details                            
                        </div>
                     </div>
                     <div id="product_details"  class="panel-body panel-collapse collapse in">
                        <div class="slide-wrapper row clear-margin">
                           <div class="slider">
                              <p class="body">
                              <p>{{$products['content']}}</p>
                              </p>
                           </div>
                           <div class="slider-menu">
                              <a href="#" class="open" >more &raquo;</a>
                              <a href="#" class="close">&laquo; less</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="panel panel-default">
                     <div class="panel-heading">
                        <div class="panel-title" data-toggle="collapse" href="#shipping_payment_details">
                           Shipping & Payment Policy                            
                        </div>
                     </div>
                     <div id="shipping_payment_details" class="panel-body panel-collapse collapse">
                        <div class="slide-wrapper row clear-margin">
                           <div class="slider">
                              <p>NO RETURNS. Payment only accepted as paypal or NYC meet ups</p>
                           </div>
                           <div class="slider-menu">
                              <a href="#" class="open">more &raquo;</a>
                              <a href="#" class="close">&laquo; less</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div id="block-cargoh_helper-cargoh_share" class="block block-cargoh_helper" style="display:none">
                     <div id="kixify_tags"><a href="https://www.kixify.com/category/air-jordan/air-jordan-1" class="btn btn-default">Air Jordan 1</a> <a href="https://www.kixify.com/category/air-jordan/air-jordan-10" class="btn btn-default">Air Jordan 10</a> <a href="https://www.kixify.com/category/air-jordan/air-jordan-13" class="btn btn-default">Air Jordan 13</a> <a href="https://www.kixify.com/tag/air-jordan-13-bred" class="btn btn-default">Air Jordan 13 Bred</a> <a href="https://www.kixify.com/category/nike" class="btn btn-default">Nike</a> <a href="https://www.kixify.com/category/air-jordan" class="btn btn-default">Air Jordan</a></div>
                     <div class="clearfix"></div>
                  </div>
                  <div class="clearfix"></div>
               </div>
            </div>
            <div class="clearfix"></div>
            <div class="add-paddings">
               <div id="unbxd-more-like-these" class="block-unbxd-recommendations" data-style="" data-nid="17254556"></div>
               <div id="unbxd-recently-viewed" class="block-unbxd-recommendations"></div>
            </div>
         </div>
         <div class="clearfix"></div>
      </div>
      <div class="clearfix"></div>
      <script  type="application/ld+json">
         {"@context":"http:\/\/schema.org\/","@type":"Product","name":"100% Authentic Vnds Nike Air Jordan Retro 13 Bred 10.5 ... Size 10.5","image":"https:\/\/2.kixify.com\/sites\/default\/files\/imagecache\/product_full\/product\/2017\/08\/02\/p_17254556_88455361_324151.jpg","description":"$200.00\n      Condition:\u00a0\n    \n            \n                    Pre-Owned        \n        \n\n\n      Sale:\u00a0\n    \n            \n                    Off        \n        \n\n\n      USA Shipping Rate:\u00a0\n    \n            \n                    $-1        \n        \n\n\n      Canada Shipping Rate:\u00a0\n    \n     ...","brand":{"@type":"Thing","name":"Air Jordan 13"},"mpn":"17254556","offers":{"@type":"Offer","priceCurrency":"USD","price":"200.00","itemCondition":"http:\/\/schema.org\/UsedCondition","availability":"http:\/\/schema.org\/InStock","inventoryLevel":{"@type":"QuantitativeValue","value":"1"},"sku":"100% AUTHENTIC VNDS NIKE AIR JORDAN RETRO 13 BRED 10.5 2005-17254556-20170802","url":"https:\/\/www.kixify.com\/product\/100-authentic-vnds-nike-air-jordan-retro-13-bred-10","seller":{"@type":"Person","@id":"https:\/\/www.kixify.com\/ricostrong","name":"ricostrong"}},"aggregateRating":{"@type":"AggregateRating","ratingValue":"5.0","reviewCount":13}}
      </script>
   </div>
</div>
<div class="clearfix"></div>
@endsection