@extends('pages/layouts/master')
@section('content')
<div class="col-xs-12 col-sm-12 col-md-12 remove-padding" id="content-container-wrapper">
   <a id="main-content"></a>
   <h1 class="title " id="page-title">SNEAKER RELEASE DATES</h1>
   <div id="content-center-wrapper">
      <div id='release-filter-continer'>
         <form action="https://www.kixify.com/release-dates/upcoming" method='GET' class="form-horizontal pull-left">
            <div id='brand-filter-wrapper'>
               <select name='brand' id='release-brands' class="form-control form-text" onchange="javascript:$(this.form).submit();">
                  <option value="">Filter by</option>
                  <option value="1"  >Adidas</option>
                  <option value="2"  >Air Jordan</option>
                  <option value="24"  >Jordan Brand</option>
                  <option value="6"  >New Balance</option>
                  <option value="7"  >Nike</option>
                  <option value="23"  >-Nike Basketball</option>
                  <option value="31"  >-Nike SB</option>
                  <option value="28"  >Other Brands</option>
                  <option value="30"  >Puma</option>
               </select>
            </div>
         </form>
         <ul class="pull-right  nav nav-bar navbar-collapse sort-navbar-collapse  nav-pills release-dates-tabs">
            <li >
               <a href='{{route("recent")}}'>recent</a>
            </li>
            <li class="active">
               <a href='{{route("upcoming")}}'>upcoming</a>
            </li>
         </ul>
         <div class="clearfix"></div>
      </div>
      <div id='release-dates-continer'>
      @foreach($products as $item)
         <div class='col-xs-6 col-sm-3 col-md-3 release-date-item-continer clear-padding'>
            <div class='release-date-item-wrapper'>
               <div class="release-event-date-wrapper">
                  <div class="event-date first-event">
                     <div class="date" >{{Carbon\Carbon::parse($item->release_date)->format('d')}}</div>
                     <div class="month" >{{Carbon\Carbon::parse($item->release_date)->format('m')}}</div>
                  </div>
               </div>
               <div class='release-date-image-wrapper'>
                  <a href="{{route('product',[$item->id,$item->slug])}}" class='thumbnail'>
                  <img  src="{{url('public/images/products/'.$item['image'])}}" alt="Nike PG 1 GS Grape" class="img-responsive imagecache imagecache-kofapp_list"  width="250" height="200" />
                  </a>
               </div>
               <div class="release-date-text-wrapper" >
                  <div class='release-date-title'><a href="../nike-pg-1-gs-grape.html">{{$item['name_product']}}</a></div>
                  <div class='release-date-style'>{{$item['release_style']}}</div>
               </div>
            </div>
         </div>
      @endforeach   
         <!-- <div class='col-xs-6 col-sm-3 col-md-3 release-date-item-continer clear-padding'>
            <div class='release-date-item-wrapper'>
               <div class="release-event-date-wrapper">
                  <div class="event-date">
                     <div class="date" >24</div>
                     <div class="month" >Aug</div>
                  </div>
               </div>
               <div class='release-date-image-wrapper'>
                  <a href="../nike-pg-1-gs-grape.html" class='thumbnail'>
                  <img  src="{{asset('pages/images/product_list/product.jpg')}}" alt="Nike PG 1 GS Grape" class="img-responsive imagecache imagecache-kofapp_list"  width="250" height="200" />
                  </a>
               </div>
               <div class="release-date-text-wrapper" >
                  <div class='release-date-title'><a href="../nike-pg-1-gs-grape.html">Nike PG 1 GS Grape</a></div>
                  <div class='release-date-style'>Black/Court Purple-Hyper Grape</div>
               </div>
            </div>
         </div> -->
         <div class="clearfix"></div>
      </div>
      <div class="item-list">
         <ul class="pager full-pager lite-pager">
            <li class="pager-next last">
               <a href="upcoming4658.html?page=2" rel="next" class="active"></a>
            </li>
         </ul>
      </div>
   </div>
</div>
<div class="clearfix"></div>
<style>
   .event-date .date{
   margin: -34px 11px
   }
   .event-date .month{
   margin:-1px 6px;
   }
</style>
@endsection