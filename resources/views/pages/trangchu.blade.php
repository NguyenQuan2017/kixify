@extends('pages/layouts/master')
@section('content')
<div class="col-xs-12 col-sm-12 col-md-12 remove-padding" id="content-container-wrapper">
  
   <div id="content-bottom-wrapper" >
      <div class="region region-content-bottom">
         <div id="block-homepage_widgets-home_block_apps" class="block block-homepage_widgets first region-odd odd region-count-1 count-1">
            <div class="content">
               <div id="home-block-apps" class="block-unbxd-recommendations">
                  <div class="col-xs-12 col-sm-12 col-md-12 home-slogin-wrapper clear-padding">
                     <div class="home-slogin">
                        <h2>We're changing the way people<br/>buy and sell sneakers.</h2>
                     </div>
                     <div class="mobile-apps row">
                        <div class="col-xs-6 col-sm-6 col-md-6 clear-padding">
                           <a href="https://itunes.apple.com/us/app/kixify-buy-sell-sneakers/id1095571204?mt=8" target="_blank">
                              <img src="{{asset('pages/images/icons/download-on-the-app-store.png')}}" alt="apple.com" title="apple.com"  class="img-responsive pull-right" />&nbsp;
                              <!--<img src="" class="img-responsive pull-right" />-->
                           </a>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 clear-padding">
                           <a href="https://play.google.com/store/apps/details?id=com.kixify&amp;hl=en" target="_blank">
                              &nbsp;
                              <img src="{{asset('pages/images/icons/google-play.png')}}" alt="play.google.com" title="play.google.com"  class="img-responsive pull-left" />                    <!--<img src=""  class="img-responsive pull-left" />-->
                           </a>
                        </div>
                     </div>
                     <div class="clearfix"></div>
                  </div>
                  <div class="clearfix"></div>
                  <div class="row clear-margin">
                     <div class="col-xs-4 col-sm-4 col-md-4  clear-padding gender-left">
                        <a href="search2404.html?gender[]=Men" class="btn btn-default btn-block gender-btn">Men</a>        
                     </div>
                     <div class="col-xs-4 col-sm-4 col-md-4 clear-padding gender-middle">
                        <a href="search93b8.html?gender[]=Women" class="btn btn-default btn-block gender-btn">Women</a>        
                     </div>
                     <div class="col-xs-4 col-sm-4 col-md-4 clear-padding  gender-right">
                        <a href="search7bc4.html?gender[]=Kids" class="btn btn-default btn-block gender-btn">Kids</a>        
                     </div>
                     <div class="clearfix"></div>
                  </div>
                  <div class="clearfix"></div>
               </div>
            </div>
            <div class="clearfix"></div>
         </div>
         <!-- /.block -->
         <div id="block-release_dates-release_dates_popular_block" class="block block-release_dates region-even even region-count-2 count-2">
            <div class="content">
               <div class="block-unbxd-recommendations home-page-block">
                  <h3>
                     Trending 
                     <div class="pull-right"><a href="release-dates/upcoming.html">View Release Calendar</a></div>
                     <div class="clearfix"></div>
                  </h3>
                  <div id='release-dates-continer'  class="top-seller-wrapper">
                     <div class='col-xs-6 col-sm-3 col-md-3 release-date-item-continer clear-padding'>
                        <div class='release-date-item-wrapper'>
                           <div class='release-date-image-wrapper'>
                              <a href="{{route('view-product')}}" class='thumbnail'>
                              <img  src="{{asset('pages/images/product_list/product.jpg')}}" alt="Air Jordan 5 White Cement" class="img-responsive imagecache imagecache-kofapp_list" width="250" height="200" />
                              </a>
                           </div>
                           <div class="release-date-text-wrapper" >
                              <div class='release-date-title'><a href="{{route('view-product')}}">Air Jordan 5 White Cement</a></div>
                           </div>
                        </div>
                     </div>
                     <div class="clearfix"></div>
                  </div>
               </div>
            </div>
            <div class="clearfix"></div>
         </div>
         <!-- /.block -->
         <div id="block-homepage_widgets-home_block_links" class="block block-homepage_widgets region-odd odd region-count-3 count-3">
            <div class="content">
               <div id="home-block-links" class="block-unbxd-recommendations">
                  <div class="row clear-margin">
                     <div class="col-xs-4 col-sm-4 col-md-4  clear-padding gender-left">
                        <a href="searcha8fd.html?sort=created-desc" class="btn btn-default btn-block gender-btn">Newest</a>        
                     </div>
                     <div class="col-xs-4 col-sm-4 col-md-4 clear-padding gender-middle">
                        <a href="search.html" class="btn btn-default btn-block gender-btn">Top Sellers</a>        
                     </div>
                     <div class="col-xs-4 col-sm-4 col-md-4 clear-padding  gender-right">
                        <a href="{{route('release')}}" class="btn btn-default btn-block gender-btn">Releases</a>        
                     </div>
                     <div class="clearfix"></div>
                  </div>
                  <div class="clearfix"></div>
               </div>
            </div>
            <div class="clearfix"></div>
         </div>
         <!-- /.block -->
      </div>
   </div>
   <div class="clearfix"></div>
</div>
<div class="clearfix"></div>
@endsection