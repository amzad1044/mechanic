<!DOCTYPE html>
<html>
  <head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Mechanic Lagbe? </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{asset('admin/vendor/bootstrap/css/bootstrap.min.css')}}">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="{{asset('admin/vendor/font-awesome/css/font-awesome.min.css')}}">
    <!-- Custom Font Icons CSS-->
    <link rel="stylesheet" href="{{asset('admin/css/font.css')}}">
    <!-- Google fonts - Muli-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{asset('admin/css/style.default.css')}}" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{asset('admin/css/custom.css')}}">
    <!-- Favicon-->
<!--     <link rel="shortcut icon" href="{{asset('admin/img/favicon.ico')}}"> -->

    <link href="{{asset('admin/css/toastr.min.css')}}" rel="stylesheet">
    <style type="text/css">


    </style>
  </head>
  <body>
    @include('admin.inc.header')
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
    @include('admin.inc.sidebar')
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        @yield('body')

        <footer class="footer">
          <div class="footer__block block no-margin-bottom">
            <div class="container-fluid text-center">
               <p>2021 @ Angry Developer(Group 2).Eastern University</p>
            </div>
          </div>
        </footer>


      </div>
    </div>
    <!-- JavaScript files-->
    <script src="{{asset('admin/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('admin/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('admin/js/dataTables.min.js')}}"></script>
    <script src="{{asset('admin/js/dataTable.bootstrap.min.js')}}"></script>
    <script src="{{asset('admin/js/front.js')}}"></script>

    <script>
    $(document).ready(function() {
        $('#example').DataTable();
      } );
    
    // $('table').dataTable( {
    //   paginate: false,
    //   scrollY: 300
    // } );

    </script>


    <!-- Sweet alert -->
    <script src="{{asset('admin/js/sweetalert.min.js')}}"></script>
    <script>
        $('.delete-confirm').on('click', function (event) {
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
            "preventDuplicates": false,
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
          @if(Session::has('warning'))
            toastr["warning"]("{{ Session::get('warning') }}")
          @endif
    </script>

    <!-- Area Update Modal  -->
    <script>
        //$('#areaModal').modal(" ");

        $(document).ready(function() {
          $('.edit').click(function() {
            const id = $(this).attr('data-id');
            //var id=$(this).data('id');
            console.log(id);
            $.ajax({
              url: '/admin/area_details/'+id,
              type: 'GET',
              data: {
                "id": id
              },
              success:function(data) {
                //console.log(id);
                //view modal
                //$('#product-desc').html(data.description);
                //end view modal

                $('#area_id').val(data.id);
                $('#area').val(data.area_name);
                $('#description').val(data.description);
                
                var value = data.status;
                $("input[name=status][value=" + value + "]").prop('checked', true);

                
              }
            })
          });
        });
    </script>
    <!-- Active inactive Area table by using click -->
    <script>
      $('.toggle-class').on('change', function() {
        var status = $(this).prop('checked') == true ? 1 : 0;
        var status_id = $(this).data('id');
        $.ajax({
          type: 'GET',
          dataType: 'JSON',
          url: '{{ route('changestatus') }}',
          data: {
                'status': status,
                'status_id': status_id
            },
          success:function(data) {
              // toastr.info('Status Updated');
          }

        });
    });
    </script>


    <!-- Active inactive Category table using click -->
    <script>
      $('.toggle-class-cat').on('change', function() {
        var status = $(this).prop('checked') == true ? 1 : 0;
        var status_id = $(this).data('id');
        $.ajax({
          type: 'GET',
          dataType: 'JSON',
          url: '{{ route('changestatuscat') }}',
          data: {
                'status': status,
                'status_id': status_id
            },
          success:function(data) {
              // toastr.info('Status Updated');
          }

        });
    });
    </script>

    <!-- Category Update Modal  -->
    <script>
        $(document).ready(function() {
          $('.editcat').click(function() {
            const id = $(this).attr('data-id');
            $.ajax({
              url: '/admin/cat_details/'+id,
              type: 'GET',
              data: {
                "id": id
              },
              success:function(data) {
                $('#catId').val(data.id);
                $('#cat_name').val(data.name);
                $('#description').val(data.description);

                var value = data.status;
                $("input[name=status][value=" + value + "]").prop('checked', true);

                
              }
            })
          });
        });
    </script>

    <!-- Mechanic table -->
    <script>
        function previewFile(input){
            var file = $("input[type=file]").get(0).files[0];
     
            if(file){
                var reader = new FileReader();
     
                reader.onload = function(){
                    $("#previewImg").attr("src", reader.result);
                }
     
                reader.readAsDataURL(file);
            }
        }
    </script>
    <!-- Active inactive Mechanic table using click -->
    <script>
      $('.toggle-class-mech').on('change', function() {
        var status = $(this).prop('checked') == true ? 1 : 0;
        var status_id = $(this).data('id');
        $.ajax({
          type: 'GET',
          dataType: 'JSON',
          url: '{{ route('changestatusmech') }}',
          data: {
                'status': status,
                'status_id': status_id
            },
          success:function(data) {
              // toastr.info('Status Updated');
          }

        });
    });
    </script>
<!-- End Mechanic table -->
  </body>
</html>