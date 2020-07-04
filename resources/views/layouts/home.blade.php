<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Customboxid ">
    <meta name="keywords" content="Customboxid ">
    <meta name="author" content="Customboxid " />
   

    <title>Customboxid</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="{{asset('public/front/')}}/images/icons/logo.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('public/front/')}}/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('public/front/')}}/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('public/front/')}}/fonts/themify/themify-icons.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('public/front/')}}/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('public/front/')}}/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('public/front/')}}/vendor/animsition/css/animsition.min.css">

	
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('public/front/')}}/vendor/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('public/front/')}}/vendor/lightbox2/css/lightbox.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('public/front/')}}/css/util.css">
	<link rel="stylesheet" type="text/css" href="{{asset('public/front/')}}/css/main.css">
	<link rel="stylesheet" href="{{asset('public/front/')}}/css/index.css">
    <link rel="stylesheet" href="{{asset('public/front/')}}/vendor/vue-select/vue-select.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
  
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="google-signin-scope" content="profile email">
    <meta name="google-signin-client_id" content="1078709068992-8hlatsvmkkuj7j5atth07dv4nngp2ssc.apps.googleusercontent.com">

    <link rel="stylesheet" type="text/css" href="{{asset('public/front/')}}/vendor/owl-carousel2/assets/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('public/front/')}}/vendor/owl-carousel2/assets/owl.theme.default.min.css">


<!--===============================================================================================-->
</head>

<body class="animsition" style="max-width: 100%; overflow-x: hidden;">
	<div id="Index">
		<!-- Header -->
        <div id="Header">
       
          
            <header>
                <!-- Header desktop -->
                <div v-bind:class="page=='index.html' ? 'wrap-menu-header gradient1 trans-0-4' : 'wrap-menu-header trans-0-4' ">
                    <div class="container h-full">
                        <div class="wrap_header trans-0-3">
                            <!-- Logo -->
                            <div class="logo">
                                <div v-if="page=='index.html'">
                                    <a href="{{route('/')}}" id="logo_light">
                                        <img src="{{asset('public/front/')}}/images/icons/logo2.png" alt="Customboxid "  data-logofixed="{{asset('public/front/')}}/images/icons/logo.png" class="ilogo">
                                    </a>
                                </div>
                                <div v-if="page!=='index.html'">
                                    <a href="{{route('/')}}" id="logo_light" >
                                        <img src="{{asset('public/front/')}}/images/icons/logo2.png" alt="Customboxid " data-logofixed="{{asset('public/front/')}}/images/icons/logo.png" class="ilogo">
                                    </a>
                                </div>
                                
                                <a href="{{route('/')}}" id="logo_dark" style="display:none">
                                    <img src="{{asset('public/front/')}}/images/icons/logo2.png" alt="Customboxid" data-logofixed="{{asset('public/front/')}}/images/icons/logo.png" class="ilogo">
                                </a>
                            </div>
                            

                            <!-- Menu -->
                            
                            <div class="wrap_menu p-l-45 p-l-0-xl">
                                <div class="top-menus">
                                    <div class="social color_social">
                                        <ul>
                                            <li>
                                                <a href="{{route('checkout')}}"> <i class="fa fa-shopping-cart top-0"></i> <span style="color:#edb8be;font-size: 15px;">@{{count_cart}}</span></a>&nbsp;
                                                <a href="#" onclick="set_lang('Eng')"><i class="top-0">Eng |</i></a>&nbsp;
                                                <a href="#" onclick="set_lang('Idn')"><i class="top-0">IDN</i></a>
                                                <span v-if="member_email">
                                              

            
                                                

                                                <!-- Nav Item - User Information -->
                                                
                                                    <a class="nav-link dropdown-toggle" style="display:unset !important" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                       
                                                        <img v-if="member_foto_profile" class="img-profile rounded-circle" :src="member_foto_profile" style="width:30px">
                                                        <img v-else class="img-profile rounded-circle" src="{{asset('public/img/')}}/users/default.png" style="width:30px">
                                                    </a>
                                                    <!-- Dropdown - User Information -->
                                                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                                        <a class="dropdown-item" href="{{route('profile_member')}}">
                                                            <i class="fas fa-sign-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                                            @{{member_name}}
                                                        </a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" v-bind:href="'{{route('history_pesanan')}}?email=' + member_email">
                                                            <i class="fas fa-sign-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                                            Pesanan Saya
                                                        </a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#" onclick="logout()">
                                                        <input type="hidden" value="route{{route('/')}}" id="home">
                                                        <input type="hidden" value="route{{route('login_member')}}" id="member">
                                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                                        Logout
                                                        </a>
                                                    </div>
                                             
     

                                                </span>
                                                <span v-else>
                                                    <a href="{{route('register_member')}}">
                                                        <i class="fa fa-user top-0"></i>
                                                        
                                                        <span>Register</span>
                                                    </a>
                                                    <a href="{{route('login_member')}}">
                                                        <i class="fa fa-key top-0"></i>
                                                        Login
                                                    </a>

                                                </span>
                                               
                                              
                                               

                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <nav class="menus">
                                    <ul class="main_menu">
                                        <li>
                                            <a href="{{route('/')}}">Home</a>
                                        </li>
                                        <li>
                                            <a href="{{route('models')}}">Models</a>
                                        </li>
                                        <li>
                                            <a href="{{route('shop')}}">Shop</a>
                                        </li>
                                        <li>
                                            <a href="{{route('gallery_custombox')}}">Gallery</a>
                                        </li>
                                        <li>
                                            <a href="{{route('sample_custombox')}}">Sample</a>
                                        </li>
                                        <li>
                                            <a href="{{route('contact')}}">Contact us</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>

                            
                            
                        </div>
                    </div>
                </div>
                <nav class="navbar navbar-light">
                    <a class="navbar-brand"><img src="{{asset('public/front/')}}/images/icons/logo_m.png"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                        <a class="nav-link" href="{{route('/')}}">Home <span class="sr-only">(current)</span></a>
                        </li>

                        <li class="nav-item active">
                        <a class="nav-link" href="{{route('models')}}">Models <span class="sr-only">(current)</span></a>
                        </li>



                        <li class="nav-item">
                        <a class="nav-link" href="{{route('shop')}}">Shop</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="{{route('gallery_custombox')}}">Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('sample_custombox')}}">Sample</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('contact')}}">Contact us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" onclick="set_lang('Eng')">Eng</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" onclick="set_lang('Idn')">IDN</a>
                        </li>
                       
                        <li class="nav-item">
                            <a href="{{route('checkout')}}"> <i class="fa fa-shopping-cart top-0"></i> <span style="color:#edb8be;font-size: 15px;">@{{count_cart}}</span></a>&nbsp;
                        </li>
                        <hr>
                        <span v-if="member_email">
                                              

            
                                                

                        <!-- Nav Item - User Information -->
                        
                            <a class="nav-link dropdown-toggle" style="display:unset !important" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                
                                <img v-if="member_foto_profile" class="img-profile rounded-circle" :src="member_foto_profile" style="width:30px">
                                <img v-else class="img-profile rounded-circle" src="{{asset('public/img/')}}/users/default.png" style="width:30px">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="{{route('profile_member')}}">
                                    <i class="fas fa-sign-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    @{{member_name}}
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" v-bind:href="'{{route('history_pesanan')}}?email=' + member_email">
                                    <i class="fas fa-sign-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Pesanan Saya
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" onclick="logout()">
                                <input type="hidden" value="route{{route('/')}}" id="home">
                                <input type="hidden" value="route{{route('login_member')}}" id="member">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout
                                </a>
                            </div>
                        


                        </span>
                        <span v-else>
                            <a href="{{route('register_member')}}">
                                <i class="fa fa-user top-0"></i>
                                
                                <span>Register</span>
                            </a>
                            <a href="{{route('login_member')}}">
                                <i class="fa fa-key top-0"></i>
                                Login
                            </a>

                        </span>
                    </ul>
                    </div>
                </nav>
            </header>
           
            
           

        </div>
	

	

        @yield('content')
	
    

		<footer class="bg3">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3 p-t-50">
                        <!-- - -->
                        <h4 class="txt13 m-b-33" style="color:#000;">
                            <u>My Account.</u>
                        </h4>

                        <ul class="m-b-70">
                            <li class="txt14 m-b-14" >
                                <a href="signin.php" style="color: #333;">Sign in</a>
                            </li>

                            <li class="txt14 m-b-14">
                                <a href="signin.php" style="color: #333;">Register</a>
                            </li>

                            <li class="txt14 m-b-14">
                                <a href="#" style="color: #333;">Payment Confirmation</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-sm-6 col-md-3 p-t-50">
                        <!-- - -->
                        <h4 class="txt13 m-b-33" style="color:#000;">
                            <u>About us.</u>
                        </h4>

                        <ul class="m-b-70">
                            <li class="txt14 m-b-14" >
                                <a href="#" style="color: #333;">Our Story</a>
                            </li>

                            <li class="txt14 m-b-14">
                                <a href="#" style="color: #333;">Career</a>
                            </li>

                            <li class="txt14 m-b-14">
                                <a href="#" style="color: #333;">Partnership</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-sm-6 col-md-3 p-t-50">
                        <!-- - -->
                        <h4 class="txt13 m-b-33">
                            <u>Help.</u>
                        </h4>

                        <ul class="m-b-70">
                            <li class="txt14 m-b-14">
                                How to Shop
                            </li>

                            <li class="txt14 m-b-14">
                                FAQ
                            </li>

                            <li class="txt14 m-b-14">
                                Shopping Policy
                            </li>
                        </ul>

                        <!-- - -->
                        

                        
                    </div>

                    <div class="col-sm-6 col-md-3">
                        <!-- - -->
                        <h4 class="txt13 m-b-20">
                            <u>News Letter</u>
                        </h4>

                        <ul class="m-b-20">
                            <li class="txt14 m-b-14">
                                <div class="form-group clearfix">
                                    <label class="sr-only" for="subscribe" >Email address</label>
                                    <input style="margin-left:28px" type="email" class="form-control" id="subscribe" placeholder="Email address">
                                    <input type="submit" value="Sign Up" style="padding: 12px 10px !important;width:80% !important">
                                </div>
                            </li>	


                            
                        </ul>

                        <!-- - -->
                        

                        
                    </div>
                </div>
            </div>

            <div class="end-footer bg2">
                <div class="container">
                    <div class="flex-sb-m flex-w p-t-22 p-b-22">
                        <div class="p-t-5 p-b-5">
                            <a href="#" class="fs-15 c-black"><i class="fa fa-facebook m-l-18" aria-hidden="true"></i></a>
                            <a href="#" class="fs-15 c-black"><i class="fa fa-twitter m-l-18" aria-hidden="true"></i></a>
                            <a href="#" class="fs-15 c-black"><i class="fa fa-envelope m-l-18" aria-hidden="true"></i></a>
                        </div>

                        <div class="txt17 p-r-20 p-t-5 p-b-5 c-black">
                            Copyright &copy; 2020 - <b>Customboxid </b> - All rights reserved 
                        </div>
                    </div>
                </div>
            </div>
        </footer>

	</div>

	


	<!-- Back to top -->
	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-up" aria-hidden="true"></i>
			
		</span>
	</div>

	<!-- Container Selection1 -->
	<div id="dropDownSelect1"></div>

	<!-- Modal Video 01-->
	



<!--===============================================================================================-->
	<script type="text/javascript" src="{{asset('public/front/')}}/vendor/jquery/jquery-3.2.1.min.js"></script>
	
<!--===============================================================================================-->
	<script type="text/javascript" src="{{asset('public/front/')}}/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="{{asset('public/front/')}}/vendor/bootstrap/js/popper.js"></script>
	<script type="text/javascript" src="{{asset('public/front/')}}/vendor/bootstrap/js/bootstrap.min.js"></script>
   
<!--===============================================================================================-->

<!--===============================================================================================-->
	
<!--===============================================================================================-->
	<script type="text/javascript" src="{{asset('public/front/')}}/vendor/slick/slick.min.js"></script>
    <script type="text/javascript" src="{{asset('public/front/')}}/vendor/owl-carousel2/owl.carousel.min.js"></script>
	<script type="text/javascript" src="{{asset('public/front/')}}/js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="{{asset('public/front/')}}/vendor/parallax100/parallax100.js"></script>
	<script type="text/javascript">
        $('.parallax100').parallax100();
	</script>
<!--===============================================================================================-->
	<script type="text/javascript" src="{{asset('public/front/')}}/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="{{asset('public/front/')}}/vendor/lightbox2/js/lightbox.min.js"></script>
<!--===============================================================================================-->
	<script src="{{asset('public/front/')}}/js/main.js"></script>

	<script src="{{asset('public/front/')}}/js/core/vue.min.js?ver=01042020"></script>
    <script src="{{asset('public/front/')}}/vendor/vue-select/vue-select.js"></script>
    <script type="text/javascript" src="{{asset('public/front/')}}/js/core/vue-filter.js"></script>

    <script src="{{asset('public/front/')}}/js/core/accounting.umd.js"></script>
    <script src="{{asset('public/front/')}}/js/core/vue-numeric.min.js"></script>
    <script src="{{asset('public/front/')}}/js/core/variable.js?ver=01042020"></script>
    
    <script src="{{asset('public/front/')}}/vendor/lodash/lodash.min.js"></script>
	<script src="{{asset('public/front/')}}/js/core/axios.min.js?ver=01042020"></script>
	<script src="{{asset('public/front/')}}/js/core/header.js?ver=01042020"></script>
	<script src="{{asset('public/front/')}}/js/core/nav.js?ver=01042020"></script>
    <script src="{{asset('public/front/')}}/js/core/footer.js?ver=01042020"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>
    @yield('more_js')

</body>
</html>
