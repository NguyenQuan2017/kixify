<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>{{$title}}</title>
      <link rel="stylesheet" href="{{asset('admin/plugins/bootstrap/dist/css/bootstrap.min.css')}}">
      <link rel="stylesheet" href="{{asset('admin/plugins/font-awesome/css/font-awesome.min.css')}}">
      <link rel="stylesheet" href="{{asset('admin/plugins/simple-line-icons/css/simple-line-icons.css')}}">
      <link rel="stylesheet" href="{{asset('admin/plugins/weather-icons/css/weather-icons.min.css')}}">
      <link rel="stylesheet" href="{{asset('admin/plugins/themify-icons/css/themify-icons.css')}}">
      <link rel="stylesheet" href="{{asset('admin/assets/css/main.css')}}">
      <link rel="stylesheet" href="{{asset('admin/plugins/horizontal-timeline/css/style.css')}}/">
      <link rel="stylesheet" href="{{asset('admin/assets/css/jquery-confirm.min.css')}}">
      <script src="{{asset('admin/assets/js/modernizr-custom.js')}}"></script>
  
      <!--Data Table-->
        <link href="{{asset('admin/plugins/datatables/media/css/jquery.dataTables.css')}}" rel="stylesheet">
        <link href="{{asset('admin/plugins/datatables-tabletools/css/dataTables.tableTools.css')}}" rel="stylesheet">
        <link href="{{asset('admin/plugins/datatables-colvis/css/dataTables.colVis.css')}}" rel="stylesheet">
        <link href="{{asset('admin/plugins/datatables-responsive/css/responsive.dataTables.scss')}}" rel="stylesheet">
        <link href="{{asset('admin/plugins/datatables-scroller/css/scroller.dataTables.scss')}}" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('admin/assets/css/fix-css.css')}}">
        <link rel="stylesheet" href="{{asset('admin/assets/css/bootstrap-select.min.css')}}">
   </head>
   <body>
      <div id="ui" class="ui">
         <!--header start-->
         @include('admin/layouts/header/header')
         <!--header end-->
         <!--sidebar start-->
         @include('admin/layouts/sidebar/sidebar')
         <!--sidebar end-->
         <!--main content start-->
         @yield('content')
         <!--main content end-->
         <!--footer start-->
         @include('admin/layouts/footer/footer')
         <!--footer end-->
      </div>
      <!-- inject:js -->
      <script src="{{asset('admin/plugins/jquery/dist/jquery.min.js')}}"></script>
      <script src="{{asset('admin/plugins/bootstrap/dist/js/bootstrap.min.js')}}"></script>
      <script src="{{asset('admin/plugins/jquery.nicescroll/dist/jquery.nicescroll.min.js')}}"></script>
      <script src="{{asset('admin/plugins/autosize/dist/autosize.min.js')}}"></script>
      <!--horizontal-timeline-->
      <script src="{{asset('admin/plugins/horizontal-timeline/js/jquery.mobile.custom.min.js')}}"></script>
      <script src="{{asset('admin/plugins/horizontal-timeline/js/main.js')}}"></script>
      <!-- Common Script   -->

         <!--Data Table-->
        <script src="{{asset('admin/plugins/datatables.net/js/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('admin/plugins/datatables-tabletools/js/dataTables.tableTools.js')}}"></script>
        <script src="{{asset('admin/plugins/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
        <script src="{{asset('admin/plugins/datatables-colvis/js/dataTables.colVis.js')}}"></script>
        <script src="{{asset('admin/plugins/datatables-responsive/js/dataTables.responsive.js')}}"></script>
        <script src="{{asset('admin/plugins/datatables-scroller/js/dataTables.scroller.js')}}"></script>
          <!--From validation  -->
        <script src="{{asset('admin/plugins/jquery-validation/dist/jquery.validate.min.js')}}"></script>
        <script src="{{asset('admin/assets/js/init-validation.js')}}"></script>
        <!--init data tables-->
        <script src="{{asset('admin/assets/js/init-datatables.js')}}"></script>
      <script src="{{asset('admin/assets/js/main.js')}}"></script>
      <script src="{{asset('admin/assets/js/bootstrap-select.min.js')}}"></script>
      <script src="{{asset('admin/assets/js/jquery-confirm.min.js')}}"></script>

      @yield('script')

      <script>
        $('div .alert').slideUp(2000).delay(2000);
      </script>

        <script>
        $(".confirm").confirm();
        </script>
   </body>
</html>