<!DOCTYPE html>
<html id="extr-page">
   <head>
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
      <title>Đăng nhập</title>
      <!-- Basic Styles -->
      <link href="{{asset('admin/assets/bootstrap/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />
      <link href="{{asset('admin/assets/bootstrap/font-awesome.min.css')}}" rel="stylesheet" />
      <!-- SmartAdmin Styles : Caution! DO NOT change the order -->
      <link rel="stylesheet" type="text/css" media="screen" href="{{asset('admin/login/smartadmin-production-plugins.min.css')}}">
      <link rel="stylesheet" type="text/css" media="screen" href="{{asset('admin/login/smartadmin-production.min.css')}}">
      <link rel="stylesheet" type="text/css" media="screen" href="{{asset('admin/login/smartadmin-skins.min.css')}}">
      <link rel="stylesheet" type="text/css" media="screen" href="{{asset('admin/login/style.css')}}">

   </head>
   <body class="animated fadeInDown">
      <header id="header">
         <div id="logo-group">
            <span id="logo"> <img src="{{asset('pages/images/logo.png')}}" alt="WebOnline"> </span>
         </div>
      </header>
      <form action="{{route('postLogin')}}" method="post">
         {{csrf_field()}}
         <div id="main" role="main">

            <!-- MAIN CONTENT -->
            <div id="content" class="container">
               <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-5 col-lg-4 col-md-offset-3 col-lg-offset-4">
                     <div class="well no-padding">
                        <div id="login-form" class="smart-form client-form">
                           <header>
                              <i class="fa fa-user"></i> 
                              Đăng nhập vào hệ thống
                           </header>
                               @include('admin/notification/errors')
                           <fieldset>
                              <section>
                                 <label class="label">E-mail</label>
                                 <label class="input">
                                 <i class="icon-append fa fa-user"></i>
                                 <input type="email" name="email" id="txtEmail">
                                 <b class="tooltip tooltip-top-right"><i class="fa fa-user txt-color-teal"></i> Nhập địa chỉ email</b>
                                 </label>
                              </section>
                              <section>
                                 <label class="label">Mật khẩu</label>
                                 <label class="input">
                                 <i class="icon-append fa fa-lock"></i>
                                 <input type="password" name="password" id="txtPassword">
                                 <b class="tooltip tooltip-top-right"><i class="fa fa-lock txt-color-teal"></i> Nhập mật khẩu</b>
                                 </label>
                                 <div class="note">
                                    <a href="/Admin/Account/ForgetPassword">Quên mật khẩu?</a>
                                 </div>
                              </section>
                              <section>
                                 <label class="checkbox">
                                 <input data-val="true" data-val-required="The Ghi nhớ mật khẩu? field is required." id="Remember" name="Remember" type="checkbox" value="true" /><input name="Remember" type="hidden" value="false" />
                                 <i></i>Duy trì đăng nhập
                                 </label>
                              </section>
                           </fieldset>
                           <footer>
                              <button type="button" class="btn btn-primary" id="btnLogin">
                              <i class="fa fa-sign-in"></i>
                              Đăng nhập
                              </button>
                           </footer>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </form>
        <script src="{{asset('admin/assets/js/jquery.min.js')}}" type="text/javascript"></script>
      <script src="{{asset('admin/assets/js/bootstrap.min.js')}}"></script>
         <script src="{{asset('admin/assets/js/jquery-migrate-1.2.1.min.js')}}" type="text/javascript"></script>
      <script src="{{asset('admin/login/jquery-ui.min.js')}}" type="text/javascript"></script>
      <!-- IMPORTANT: APP CONFIG -->
      <script src="{{asset('admin/login/app.config.js')}}"></script>
      <!-- JQUERY VALIDATE -->
      <script src="{{asset('admin/login/jquery.validate.min.js')}}"></script>
      <!-- JQUERY MASKED INPUT -->
      <script src="{{asset('admin/login/jquery.maskedinput.min.js')}}"></script>
      <script src="{{asset('admin/login/app.min.js')}}"></script>
      <script type="text/javascript">
         $(document).ready(function () {
             $("#txtPassword").keydown(function (event) {
                 if (event.keyCode == 13) {
                     $("#btnLogin").click();
                 }
             });
             $("#txtEmail").keydown(function (event) {
                 if (event.keyCode == 13) {
                     $("#btnLogin").click();
                 }
             });
             $("#btnLogin").click(function () {
                 var email = $("#txtEmail").val();
                 var password = $("#txtPassword").val();
                 if (email == '') {
                     $("#txtEmail").focus();
                     return;
                 }
                 if (password == '') {
                     $("#txtPassword").focus();
                     return;
                 }
                 $('form').submit();
             });
         });
      </script>

     

   </body>
</html>