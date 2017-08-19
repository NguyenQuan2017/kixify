<header>
   <nav class= "navbar navbar-fixed-top" id="kixify-nav-accordion">
      <div class="navbar-inner">
         <div class="col-xs-4 col-sm-4 col-md-4 clear-padding-left">
            <a href="#menu" class="navbar-toggle pull-left"id="icon-main-menu">
            <i class="fa fa-bars fa-2x"></i>
            </a>                        
            <div id="search-box">
               <form action="https://www.kixify.com/search"  accept-charset="UTF-8" method="get" id="search-form" class="form-horizontal search-form">
                  <div>
                     <div class="row clear-margin">
                        <div class="col-xs-12 col-sm-12 col-md-12 clear-padding">
                           <div class="input-group">
                              <div class="form-group form-item form-item-textfield form-item-inline" id="edit-keys-wrapper">
                                 <input type="text" maxlength="255" name="keys" id="edit-keys" size="30" value="" unbxdattr="sq" placeholder="I&#039;m looking for..." class="form-control form-text" />
                              </div>
                              <span class = "input-group-btn">
                              <button type="submit"  name="op" id="edit-submit-1"   unbxdattr="sq_bt" class="btn btn-default form-submit"><i class="fa fa-search fa-2x"></i></button>
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
            </div>
            <div class="clearfix"></div>
         </div>
         <div class="col-xs-4 col-sm-3 col-md-4 logo-wrapper"> 
            <a href="{{route('trangchu')}}" title="Home" rel="home" class="logo">
            <img src="{{asset('pages/images/logo.png')}}" alt="Kixify.com" title="Kixify.com"  />                            </a>
         </div>
         <div class="col-xs-4 col-sm-5 col-md-4 clear-padding">
            <button type="button" class="navbar-toggle visible-xs icons-nav remove-margin" id="icon-user-cart">
            <span class="sr-only">Toggle navigation</span>
            <a href="cart.html"><i class="fa fa-shopping-cart fa-2x  with-badge"></i></a>                            </button>
            <button type="button" class="navbar-toggle visible-xs icons-nav"  id="icon-account-menu">
            <span class="sr-only">Toggle navigation</span>
            <a href="user/register.html"><i class="fa fa-user fa-2x"></i></a>                                </button>  
            <ul id="user-navigation" class="account-links hidden-xs">
               <li class="nav-divider visible-xs"></li>
               <li class="hide-mobile"><a href="sell.html"><i class="fa fa-tag fa-2x" data-toggle="tooltip" data-placement="bottom" title="Sell"></i></a></li>
               <li class="visible-xs"><a href="sell.html"><i class = "fa fa-tag"></i>&nbsp;&nbsp;Sell</a></li>
               <li class="nav-divider visible-xs"></li>
               <li class="hide-mobile"><a href="{{route('login-register')}}"><i class="fa fa-sign-in fa-2x"  data-placement="bottom" title="Login/Register"></i></a></li>
               <li class="visible-xs"><a href="{{route('login-register')}}"><i class="fa fa-sign-in"></i>&nbsp;&nbsp;Login</a></li>
               <li class="nav-divider visible-xs"></li>
               <li class="visible-xs"><a href="{{route('login-register')}}"><i class="fa fa-sign-in"></i>&nbsp;&nbsp;Signup</a></li>
            </ul>
         </div>
         <div class="clearfix"></div>
      </div>
   </nav>
   <div class="clearfix"></div>
</header>