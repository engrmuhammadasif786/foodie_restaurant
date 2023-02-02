<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>    
    <link rel="icon" type="image/x-icon" href="{{ asset('images/logo-light-icon.png') }}">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/icons/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/toast-master/css/jquery.toast.css')}}" rel="stylesheet">
    <link href="{{ asset('css/colors/blue.css') }}" rel="stylesheet">
    @yield('style')
    

<?php $id=Auth::user()->getvendorId(); ?>
<script type="text/javascript">
    var cuser_id='<?php echo $id; ?>';
</script>

</head>
<body>
    <?php error_reporting(E_ALL ^ E_NOTICE); ?>
    <div id="app" class="fix-header fix-sidebar card-no-border">
            <div id="main-wrapper">

                <header class="topbar">

                <nav class="navbar top-navbar navbar-expand-md navbar-light">

                    <?php //include('header.php') ?>
                    @include('layouts.header')

                </nav>

                </header>

                <aside class="left-sidebar">

                    <!-- Sidebar scroll-->

                    <div class="scroll-sidebar">

                        @include('layouts.menu')

                    </div>

                    <!-- End Sidebar scroll-->

                </aside>

            </div>


        

        <main class="py-4">
            @yield('content')
        </main>
        <div class="modal fade" id="notification_add_order" tabindex="-1" role="dialog" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered notification-main" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Order Placed</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                  </div>
                  <div class="modal-body">
                        <h6><span id="auth_accept_name"></span> order placed.</h6>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-primary"><a href="{{url('orders')}}" id="notification_add_order_a">Go</a></button>
                    <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                  </div>
                </div>
              </div>
        </div>

        <div class="modal fade" id="notification_rejected_order" tabindex="-1" role="dialog" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered notification-main" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Order Rejected</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                  </div>
                  <div class="modal-body">
                        <h6>There have new order rejected.</h6>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-primary"><a href="{{url('orders')}}">Go</a></button>
                  </div>
                </div>
              </div>
        </div>
        
        <div class="modal fade" id="notification_accepted_order" tabindex="-1" role="dialog" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered notification-main" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Delivery Agent Assigned.</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                  </div>
                  <div class="modal-body">
                        <h6><span id="np_accept_name"></span> will deliver Your Order.</h6>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-primary"><a href="{{url('orders')}}" id="notification_accepted_a">Go</a></button>
                  </div>
                </div>
              </div>
        </div>
        
        <div class="modal fade" id="notification_completed_order" tabindex="-1" role="dialog" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered notification-main" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Order Completed</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                  </div>
                  <div class="modal-body">
                        <h6>Order has been order accepted.</h6>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-primary"><a href="{{url('orders')}}">Go</a></button>
                  </div>
                </div>
              </div>
        </div>
        
        <div class="modal fade" id="notification_book_table_add_order" tabindex="-1" role="dialog" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered notification-main" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Book A Table Request Placed</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                  </div>
                  <div class="modal-body">
                        <h6><span id="auth_accept_name_book_table"></span> Place a Book A Table Request.</h6>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-primary"><a href="{{url('booktable')}}" id="notification_book_table_add_order_a">Go</a></button>
                    <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                  </div>
                </div>
              </div>
        </div>

    </div>
    <script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('assets/plugins/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.slimscroll.js') }}"></script>
    <script src="{{ asset('js/waves.js') }}"></script>
    <script src="{{ asset('js/sidebarmenu.js') }}"></script>
    <script src="{{ asset('assets/plugins/sticky-kit-master/dist/sticky-kit.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/sparkline/jquery.sparkline.min.js')}}"></script>
    <script src="{{ asset('js/custom.min.js') }}"></script>

    <script type="text/javascript">
        jQuery(window).scroll(function() {    
            var scroll = jQuery(window).scrollTop();    
            if (scroll <= 60) {
                jQuery("body").removeClass("sticky");
            }else{
                jQuery("body").addClass("sticky");
            }
        });
    </script>

    <!--<script src="{{ asset('assets/plugins/raphael/raphael-min.js')}}"></script>
    <script src="{{ asset('assets/plugins/morrisjs/morris.min.js')}}"></script>
    
    <script src="{{ asset('assets/plugins/styleswitcher/jQuery.style.switcher.js')}}"></script>
    <script src="{{ asset('assets/plugins/Chart.js/chartjs.init.js')}}"></script>
    <script src="{{ asset('assets/plugins/Chart.js/Chart.min.js')}}"></script>
    <script src="{{ asset('assets/plugins/toast-master/js/jquery.toast.js')}}"></script>
    <script src="{{ asset('js/toastr.js')}}"></script>
    <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>-->

    <script src="https://www.gstatic.com/firebasejs/7.2.0/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.2.0/firebase-firestore.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.2.0/firebase-storage.js"></script>
      <script src="https://www.gstatic.com/firebasejs/7.2.0/firebase-auth.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.2.0/firebase-database.js"></script>
    <script src="https://unpkg.com/geofirestore/dist/geofirestore.js"></script>
    <script src="https://cdn.firebase.com/libs/geofire/5.0.1/geofire.min.js"></script>
    <script type="text/javascript">@include('vendor.notifications.init_firebase')</script>
        @yield('scripts')

    <script type="text/javascript">
        var route1 =  '{{route("orders.edit",":id")}}'; 
        var booktable =  '{{route("booktable.edit",":id")}}'; 
        var database = firebase.firestore();
        var pageloadded=0;
        database.collection('restaurant_orders').where('vendor.author',"==",cuser_id).onSnapshot(function(doc) {   
            if(pageloadded){
                doc.docChanges().forEach(function(change) {
                        val=change.doc.data();

                            if(change.type=="added"){
                                if(val.status=="Order Placed"){
                                    if(val.author.firstName){
                                        jQuery("#auth_accept_name").text(val.author.firstName);
                                    }
                                    if(route1){
                                        jQuery("#notification_add_order_a").attr("href",route1.replace(':id', val.id));
                                    }
                                    jQuery("#notification_add_order").modal('show');
                                }
                            }else if(change.type=="modified"){
                                //change.status
                                if(val.status=="Order Placed"){
                                    if(val.author.firstName){
                                        jQuery("#auth_accept_name").text(val.author.firstName);
                                    }
                                    if(route1){
                                        jQuery("#notification_add_order_a").attr("href",route1.replace(':id', val.id));
                                    }
                                    jQuery("#notification_add_order").modal('show');
                                }else if(val.status=="Driver Pending" || val.status=="Driver Accepted"){
                                    if(val.driver && val.driver.firstName){
                                        jQuery("#np_accept_name").text(val.driver.firstName);
                                    }
                                    if(route1){
                                        jQuery("#notification_accepted_a").attr("href",route1.replace(':id', val.id));
                                    }
                                    jQuery("#notification_accepted_order").modal('show');
                                }
                               
                            }
                        
                });
                }else{
                    pageloadded=1;
                }
        });
        var pageloadded_book=0;
        database.collection('booked_table').where('vendor.author',"==",cuser_id).onSnapshot(function(doc) {   
            if(pageloadded_book){
                doc.docChanges().forEach(function(change) {
                        val=change.doc.data();
                            if(change.type=="added"){
                                if(val.status=="Order Placed"){
                                    if(val.author.firstName){
                                        jQuery("#auth_accept_name_book_table").text(val.author.firstName);
                                    }
                                    if(route1){
                                        jQuery("#notification_book_table_add_order_a").attr("href",booktable.replace(':id', val.id));
                                    }
                                    jQuery("#notification_book_table_add_order").modal('show');
                                }
                            }
                        
                });
                }else{
                    pageloadded_book=1;
                }
        });
    </script>
</body>
</html>
