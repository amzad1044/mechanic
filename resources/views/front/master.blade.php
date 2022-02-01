<!doctype html>
<html class="no-js" lang="zxx">


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Mechanic Lagbe?</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">

    <!-- CSS
	============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('front/assets/css/vendor/bootstrap.min.css')}}">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="{{asset('front/assets/css/vendor/font-awesome.css')}}">
    <!-- Fontawesome Star -->
    <link rel="stylesheet" href="{{asset('front/assets/css/vendor/fontawesome-stars.css')}}">
    <!-- Ion Icon -->
    <link rel="stylesheet" href="{{asset('front/assets/css/vendor/ion-fonts.css')}}">
    <!-- Slick CSS -->
    <link rel="stylesheet" href="{{asset('front/assets/css/plugins/slick.css')}}">
    <!-- Animation -->
    <link rel="stylesheet" href="{{asset('front/assets/css/plugins/animate.css')}}">
    <!-- jQuery Ui -->
    <link rel="stylesheet" href="{{asset('front/assets/css/plugins/jquery-ui.min.css')}}">
    <!-- Lightgallery -->
    <link rel="stylesheet" href="{{asset('front/assets/css/plugins/lightgallery.min.css')}}">
    <!-- Nice Select -->
    <link rel="stylesheet" href="{{asset('front/assets/css/plugins/nice-select.css')}}">

    <!-- Vendor & Plugins CSS (Please remove the comment from below vendor.min.css & plugins.min.css for better website load performance and remove css files from the above) -->
    <!--
    <script src="assets/js/vendor/vendor.min.js"></script>
    <script src="assets/js/plugins/plugins.min.js"></script>
    -->

    <!-- Main Style CSS (Please use minify version for better website load performance) -->
    <link rel="stylesheet" href="{{asset('front/assets/css/style.css')}}">
    <!--<link rel="stylesheet" href="assets/css/style.min.css">-->
    <link href="{{asset('admin/css/toastr.min.css')}}" rel="stylesheet">

</head>

<body class="template-color-1">

    <div class="main-wrapper">



        <!-- Begin Uren's Header Main Area -->
        @include('front.inc.header')
        <!-- Uren's Header Main Area End Here -->

        @yield('body')

        <!-- Begin Uren's Footer Area -->
        @include('front.inc.footer')
        <!-- Uren's Modal Area End Here -->

    </div>

    <!-- JS
============================================ -->


    <!-- jQuery JS -->
    <script src="{{asset('front/assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
    <!-- Modernizer JS -->
    <script src="{{asset('front/assets/js/vendor/modernizr-2.8.3.min.js')}}"></script>
    <!-- Popper JS -->
    <script src="{{asset('front/assets/js/vendor/popper.min.js')}}"></script>
    <!-- Bootstrap JS -->
    <script src="{{asset('front/assets/js/vendor/bootstrap.min.js')}}"></script>

    <!-- Slick Slider JS -->
    <script src="{{asset('front/assets/js/plugins/slick.min.js')}}"></script>
    <!-- Barrating JS -->
    <script src="{{asset('front/assets/js/plugins/jquery.barrating.min.js')}}"></script>
    <!-- Counterup JS -->
    <script src="{{asset('front/assets/js/plugins/jquery.counterup.js')}}"></script>
    <!-- Nice Select JS -->
    <script src="{{asset('front/assets/js/plugins/jquery.nice-select.js')}}"></script>
    <!-- Sticky Sidebar JS -->
    <script src="{{asset('front/assets/js/plugins/jquery.sticky-sidebar.js')}}"></script>
    <!-- Jquery-ui JS -->
<!--     <script src="{{asset('front/assets/js/plugins/jquery-ui.min.js')}}"></script>
    <script src="{{asset('front/assets/js/plugins/jquery.ui.touch-punch.min.js')}}"></script> -->
    <!-- Lightgallery JS -->
    <script src="{{asset('front/assets/js/plugins/lightgallery.min.js')}}"></script>
    <!-- Scroll Top JS -->
    <script src="{{asset('front/assets/js/plugins/scroll-top.js')}}"></script>
    <!-- Theia Sticky Sidebar JS -->
    <script src="{{asset('front/assets/js/plugins/theia-sticky-sidebar.min.js')}}"></script>
    <!-- Waypoints JS -->
<!--     <script src="{{asset('front/assets/js/plugins/waypoints.min.js')}}"></script> -->
    <!-- jQuery Zoom JS -->
    <!-- <script src="{{asset('front/assets/js/plugins/jquery.zoom.min.js')}}"></script> -->

    <!-- Main JS -->
    <script src="{{asset('front/assets/js/main.js')}}"></script>


    <!-- Sweet alert -->
    <script src="{{asset('admin/js/sweetalert.min.js')}}"></script>
    <script>
        $('#delete-confirm').on('click', function (event) {
            event.preventDefault();
            const url = $(this).attr('href');
            swal({
                title: 'Are you sure?',
                // text: 'Are you sure to hire this worker?',
                icon: 'warning',
                buttons: ["Cancel", "Yes!"],
            }).then(function(value) {
                if (value) {
                    window.location.href = url;
                }
            });
        });
    </script>

    <!-- Toaster -->
    <script src="{{asset('admin/js/toastr.min.js')}}"></script>
    <script type="text/javascript">
            toastr.options = {
            "closeButton": false,
            "debug": false,
            "newestOnTop": false,
            "progressBar": true,
            "positionClass": "toast-top-right",
            "preventDuplicates": true,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
          }
          @if(Session::has('success'))
            toastr["success"]("{{ Session::get('success') }}")
          @endif
          @if(Session::has('error'))
            toastr["error"]("{{ Session::get('error') }}")
          @endif
          @if(Session::has('info'))
            toastr["info"]("{{ Session::get('info') }}")
          @endif
          @if(Session::has('warning'))
            toastr["warning"]("{{ Session::get('warning') }}")
          @endif
    </script>

    <script type="text/javascript">
        $('#review_form').on('submit',function(e){
            e.preventDefault();
            var cust_id = $('#cust_id').val();
            var mech_id = $('#mech_id').val();
            var comment = $('#comment').val();
            var rating = $('#rating').val();
            var _token = $("input[name=_token]").val();

            $.ajax({
                url:"{{route('rating')}}",
                type:"POST",
                data:{
                    cust_id:cust_id,
                    mech_id:mech_id,
                    comment:comment,
                    rating:rating,
                    _token:_token
                },
                success:function(res){
                    document.getElementById("review_form").reset();
                    //$('#review tbody').append('<tr><td>'+cust_id+'</td><td>'+comment+'</td></tr><tr><td colspan="2">'+comment+'</td></tr>');

                }
            });
        });
    </script>

</body>

</html>