<!doctype html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">



    <!-- CSRF Token -->

    <meta name="csrf-token" content="{{ csrf_token() }}">



    <title>{{ config('app.name', 'Laravel') }}</title>



    



    <!-- Fonts -->

    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->

    <link href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/plugins/toast-master/css/jquery.toast.css')}}" rel="stylesheet">

    <link href="{{ asset('css/colors/blue.css') }}" rel="stylesheet">

    @yield('style')

    





</head>

<body>



<section id="wrapper">



<div class="login-register" style="background-color:##c4590e;">

 

 <div class="login-logo text-center py-3" style="margin-top:5%;">

           <a href="#" style="display: inline-block;background: #fff;padding: 10px;border-radius: 5px;"><img src="{{ asset('images/logo_web.png') }}"> </a>

        </div>

<div class="login-box card" style="margin-bottom:0%;">

        

        

        <!-- <div class="row justify-content-center">



            <div class="col-md-8">

                <div class="card"> -->

                    



                    <div class="card-body">

                        <form class="form-horizontal form-material" name="login" action="#">

                            @csrf

                            <div class="box-title m-b-20">{{ __('Login') }}</div>





                                <div class="form-group ">



                                    <div class="col-xs-12">



                                        <input class="form-control" placeholder="{{ __('Email Address') }}"  id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus> </div>



                                        @error('email')

                                        <span class="invalid-feedback" role="alert">

                                            <strong>{{ $message }}</strong>

                                        </span>

                                        @enderror



                                </div>



                                <div class="form-group">



                                    <div class="col-xs-12">



                                        <input id="password" placeholder="{{ __('Password') }}" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"> </div>



                                        @error('password')

                                            <span class="invalid-feedback" role="alert">

                                                <strong>{{ $message }}</strong>

                                            </span>

                                        @enderror



                                </div>



                                <div class="form-group text-center m-t-20">



                                    <div class="col-xs-12">



                                        <button type="button" onclick="loginClick()"  id="login_btn" class="btn btn-dark btn-lg btn-block text-uppercase waves-effect waves-light btn btn-primary">

                                        {{ __('Login') }}

                                         </button>

                                         

                                         <div class="error" id="password_required"></div>

                                          <?php /*@if (Route::has('password.request'))

                                            <a class="btn btn-link" href="{{ route('password.request') }}">

                                                {{ __('Forgot Your Password?') }}

                                            </a>

                                         @endif*/ ?>



                                    </div>



                                </div>





                            <?php /*<div class="row mb-3">

                                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>



                                <div class="col-md-6">

                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>



                                    @error('email')

                                        <span class="invalid-feedback" role="alert">

                                            <strong>{{ $message }}</strong>

                                        </span>

                                    @enderror

                                </div>

                            </div>



                            <div class="row mb-3">

                                <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>



                                <div class="col-md-6">

                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">



                                    @error('password')

                                        <span class="invalid-feedback" role="alert">

                                            <strong>{{ $message }}</strong>

                                        </span>

                                    @enderror

                                </div>

                            </div>



                            <div class="row mb-3">

                                <div class="col-md-6 offset-md-4">

                                    <div class="form-check">

                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>



                                        <label class="form-check-label" for="remember">

                                            {{ __('Remember Me') }}

                                        </label>

                                    </div>

                                </div>

                            </div>



                            <div class="row mb-0">

                                <div class="col-md-8 offset-md-4">

                                    <button type="submit" class="btn btn-primary">

                                        {{ __('Login') }}

                                    </button>



                                    @if (Route::has('password.request'))

                                        <a class="btn btn-link" href="{{ route('password.request') }}">

                                            {{ __('Forgot Your Password?') }}

                                        </a>

                                    @endif

                                </div>

                            </div> */?>

                        </form>

                    </div>

                <!-- </div>

            </div>

        </div> -->

</div>

</div>

</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="{{ asset('assets/plugins/bootstrap/js/popper.min.js') }}"></script>

<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

<script src="{{ asset('js/jquery.slimscroll.js') }}"></script>

<script src="{{ asset('js/waves.js') }}"></script>

<script src="{{ asset('js/sidebarmenu.js') }}"></script>

<script src="{{ asset('assets/plugins/sticky-kit-master/dist/sticky-kit.min.js') }}"></script>

<script src="{{ asset('assets/plugins/sparkline/jquery.sparkline.min.js')}}"></script>

<script src="{{ asset('js/custom.min.js') }}"></script>

<script src="https://www.gstatic.com/firebasejs/7.2.0/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.2.0/firebase-firestore.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.2.0/firebase-storage.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.2.0/firebase-auth.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.2.0/firebase-database.js"></script>
<script type="text/javascript">@include('vendor.notifications.init_firebase')</script>
<script type="text/javascript">

    var database = firebase.firestore();

    $(document).ready(function() {
    console.log(database);
     var creds = firebase.auth();
    console.log(creds);
    })
        //$(".login_btn").click(async function(){
          function loginClick(){
            var email = $("#email").val();
            var password = $("#password").val(); 
            firebase.auth().signInWithEmailAndPassword(email, password).then(function(result) {
                    var userEmail = result.user.email;
                    database.collection("users").where("email","==",userEmail).get().then( async function(snapshots){
                        var userData = snapshots.docs[0].data();
                        if(userData.role == "vendor"){

                            if(userData.active==false){
                                $("#password_required").html("<?php echo trans('lang.login_error_deactivate'); ?>");
                                return false;
                            }

                            var userToken = result.user.getIdToken();
                            var uid = result.user.uid;
                            var user = userData.id;
                            var firstName = userData.firstName;
                            var lastName = userData.lastName;
                            var imageURL = userData.profilePictureURL;
                                var url = "{{route('setToken')}}";
                            $.ajax({
                                type:'POST',
                                //url:'/~foodie/restaurant/public_html/setToken',
                                url:url,
                                data:{id:uid,userId:user,email:email,password:password,firstName:firstName,lastName:lastName,profilePicture:imageURL},
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                        },
                                success:function(data){
                                  if(data.access){
                                        window.location = "{{ route('dashboard')}}";        
                                  }
                                }
                            })
                            
                        }else{
                             $("#password_required").html("<?php echo trans('lang.login_error_notfound'); ?>");
                             return false;
                        }
                    })

            })
        .catch(function(error) {
                console.log(error.message);
                $("#password_required").html(error.message);
            });
        return false;
        }


  //    function getUserData(uid) {
                    
        //  firebase.auth().onAuthStateChanged(function(user) {
  //            if (user) {
  //                //console.log(user.email);
  //                } else {
  //                console.log("User Logged out");
  //                }
        //  });

        // }

   // })

</script>


</body>

</html>