<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custombox Indonesia</title>
    <link rel="stylesheet" href="{{asset('public/new/')}}/css/uikit.min.css">
    <link rel="stylesheet" href="{{asset('public/new/')}}/css/main.css">
    <link rel="icon" href="{{asset('public/front/')}}/images/icons/LOGO icon.png" type="image/gif" sizes="16x16">
</head>

<body>

    <div id="Index">
        <div class="uk-section uk-padding-remove uk-visible@m">
            <div class="uk-container uk-container-expand uk-padding-remove uk-margin-remove">

                <div class="uk-position-relative">
                    <!-- slideshow -->
                    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1"
                        uk-slideshow="ratio: false; autoplay:true;">

                        <ul class=" uk-slideshow-items" uk-height-viewport="offset-top: true; offset-bottom: 0">
                            <li v-for="(row,index) in slideshow" >
                                <img v-bind:src="row.img" alt="" uk-cover>
                            </li>
                        </ul>

                        <a class="uk-position-center-left uk-position-small uk-hidden-hover uk-icon-button arrow-slideshow"
                            href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
                        <a class="uk-position-center-right uk-position-small uk-hidden-hover uk-icon-button arrow-slideshow"
                            href="#" uk-slidenav-next uk-slideshow-item="next"></a>

                        <div class="uk-position-bottom-center uk-position-small">
                            <ul class="uk-dotnav">
                                <li v-for="(row, index) in slideshow" :uk-slideshow-item="row.id"><a href="#">@{{row.title}}</a></li>
                            </ul>
                        </div>

                    </div>
                    <!-- end slideshow -->
                    <div class="uk-position-top">
                        <nav class="uk-navbar-container uk-navbar-transparent" uk-navbar>

                            <div class="uk-navbar-left uk-margin-large-left">
                                <ul class="uk-navbar-nav">
                                    <li class="uk-active">
                                        <a class="uk-navbar-item uk-logo" href="#">
                                            <img class="logo" src="{{asset('public/front/')}}/images/icons/LOGO white.png" alt="logo-icon">
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div class="uk-navbar-right uk-margin-large-right" id="Header">
                                <div class="uk-flex uk-flex-column">
                                    <ul class="uk-navbar-nav uk-padding-remove-top uk-flex-right menu-top">
                                        <li>
                                            <a class="uk-text-capitalize uk-padding-remove-right" href="#">
                                                <span uk-icon=" icon: search;"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="uk-text-capitalize uk-padding-remove-left uk-padding-remove-right"
                                                href="#">
                                                <span uk-icon=" icon: user;"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="uk-text-capitalize uk-padding-remove-right uk-padding-remove-left"
                                                href="#">
                                                <span uk-icon=" icon: cart;"></span>(0)
                                            </a>
                                        </li>
                                        <li>
                                            <a class="uk-text-capitalize uk-padding-remove-right" onclick="set_lang('Eng')">ENG</a>
                                        </li>
                                        <li class="divider">
                                            <span>&nbsp;&nbsp;|&nbsp;&nbsp;</span>
                                        </li>
                                        <li>
                                            <a class="uk-text-capitalize uk-padding-remove-left"  onclick="set_lang('Idn')">IDN</a>
                                        </li>
                                    </ul>
                                    <ul class="uk-navbar-nav menu">
                                        <li>
                                            <a class="uk-text-capitalize uk-link-muted" href="{{route('/')}}">Home</a>
                                        </li>
                                        <li>
                                            <a class="uk-text-capitalize" href="{{route('models')}}">Model</a>
                                        </li>
                                        <li>
                                            <a class="uk-text-capitalize" href="{{route('gallery_custombox')}}">Gallery</a>
                                        </li>
                                        <li>
                                            <a class="uk-text-capitalize" href="{{route('sample_custombox')}}">Sample</a>
                                        </li>
                                        <li>
                                            <a class="uk-text-capitalize" href="{{route('contact')}}">Contact Us</a>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="uk-section uk-hidden@m uk-padding-remove" style="z-index: 2;">
            <div class="uk-container uk-padding-remove ">
                <nav class="uk-navbar uk-navbar-container uk-margin uk-margin-remove-bottom" uk-sticky="bottom: #offset"
                    style="background-color:#fff;">

                    <div class="nav-overlay uk-navbar-left uk-margin-left">
                        <a class="uk-navbar-item uk-logo" href="#">
                            <img class="logo" src="{{asset('public/front/')}}/images/icons/logo.png" alt="logo-icon">
                        </a>
                    </div>

                    <div class="nav-overlay uk-navbar-right uk-margin-right">
                        <a class="uk-navbar-toggle uk-margin-remove-right uk-padding-remove" uk-search-icon
                            uk-toggle="target: .nav-overlay; animation: uk-animation-fade" href="#"></a>
                        <a class="uk-navbar-toggle uk-link-reset" uk-navbar-toggle-icon href="#"
                            uk-toggle="target: #offcanvas-flip"></a>
                    </div>

                    <div class="nav-overlay uk-navbar-left uk-flex-1" hidden>

                        <div class="uk-navbar-item uk-width-expand">
                            <form class="uk-search uk-search-navbar uk-width-1-1">
                                <input class="uk-search-input" type="search" placeholder="Search..." autofocus>
                            </form>
                        </div>

                        <a class="uk-navbar-toggle" uk-close uk-toggle="target: .nav-overlay; animation: uk-animation-fade"
                            href="#"></a>

                    </div>
                </nav>

                <div id="offcanvas-flip" uk-offcanvas="flip: false; overlay: true">
                    <div class="uk-offcanvas-bar offcanvas">

                        <ul class="uk-nav offcanvas-nav uk-nav-left uk-list uk-list-divider uk-margin-auto-vertical">
                            <li><a href="{{route('/')}}">Home</a></li>
                            <li id="nav-divider"><a href="{{route('models')}}">Model</a></li>
                            <li id="nav-divider"><a href="{{route('gallery_custombox')}}">Gallery</a></li>
                            <li id="nav-divider"><a href="{{route('sample_custombox')}}">Sample</a></li>
                            <li id="nav-divider"><a href="{{route('contact')}}">Contact Us</a></li>
                        </ul>
                        <span class="uk-position-bottom offcanvas-footer uk-text-center">Copyright. 2020 Custombox
                            Indonesia</span>
                    </div>
                </div>
                <!-- slideshow -->
                <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1"
                    uk-slideshow="ratio: 7:3; animation: push">

                    <ul class="uk-slideshow-items">
                        <li v-for="(row, index) in slideshow" >
                            <img v-bind:src="row.img" alt="" uk-cover>
                        </li>
                    
                    </ul>

                </div>
                <!-- end slideshow -->
            </div>
        </div>

        <div class="uk-position-top" id="nav-scroll" style="z-index: 1; display: none;">
            <div style="z-index: 980;" uk-sticky="bottom: #offset">
                <nav class="uk-navbar-container" uk-navbar style="background: #e2e2e2;">

                    <div class="uk-navbar-left uk-margin-large-left">
                        <ul class="uk-navbar-nav">
                            <li class="uk-active">
                                <a class="uk-navbar-item uk-logo" href="#">
                                    <img class="logo" src="{{asset('public/front/')}}/images/icons/logo.png" alt="logo-icon">
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="uk-navbar-right uk-margin-large-right" id="Header">
                        <div class="uk-flex uk-flex-column">
                            <ul class="uk-navbar-nav uk-padding-remove-top uk-flex-right menu-sticky-top">
                                <li>
                                    <a class="uk-text-capitalize uk-padding-remove-right" href="#">
                                        <span uk-icon=" icon: search;"></span>
                                    </a>
                                </li>
                                <li>
                                    <a class="uk-text-capitalize uk-padding-remove-left uk-padding-remove-right" href="#">
                                        <span uk-icon=" icon: user;"></span>
                                    </a>
                                </li>
                                <li>
                                    <a class="uk-text-capitalize uk-padding-remove-right uk-padding-remove-left" href="#">
                                        <span uk-icon=" icon: cart;"></span>(0)
                                    </a>
                                </li>
                                <li>
                                    <a class="uk-text-capitalize uk-padding-remove-right"  onclick="set_lang('Eng')">ENG</a>
                                </li>
                                <li class="divider-sticky">
                                    <span>&nbsp;&nbsp;|&nbsp;&nbsp;</span>
                                </li>
                                <li>
                                    <a class="uk-text-capitalize uk-padding-remove-left" onclick="set_lang('Idn')">IDR</a>
                                </li>
                            </ul>
                            <ul class="uk-navbar-nav menu-sticky">
                                <li>
                                    <a class="uk-text-capitalize uk-link-muted" href="{{route('/')}}">Home</a>
                                </li>
                                <li>
                                    <a class="uk-text-capitalize" href="{{route('models')}}">Model</a>
                                </li>
                                <li>
                                    <a class="uk-text-capitalize" href="{{route('gallery_custombox')}}">Gallery</a>
                                </li>
                                <li>
                                    <a class="uk-text-capitalize" href="{{route('sample_custombox')}}">Sample</a>
                                </li>
                                <li>
                                    <a class="uk-text-capitalize" href="{{route('contact')}}">Contact Us</a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </nav>
            </div>
        </div>
    </div>

    @yield('content')

    <div class="uk-section uk-padding-small section-why-secondary">
        <div class="uk-container">
            <div class="uk-grid uk-margin-small-top uk-text-left" uk-grid>

                <div class="uk-width-1-2 uk-width-1-5@m">
                    <span class="titlefooter">MY ACCOUNT.</span>
                    <ul class="uk-list uk-margin">
                        <li class="uk-margin-remove">
                            <a href="" id="footer-link" class="uk-text-small uk-text-capitalize">Sign In</a>
                        </li>
                        <li class="uk-margin-remove">
                            <a href="" id="footer-link" class="uk-text-small uk-text-capitalize">Register</a>
                        </li>
                        <li class="uk-margin-remove">
                            <a href="" id="footer-link" class="uk-text-small uk-text-capitalize">Payment
                                Confirmation</a>
                        </li>
                    </ul>
                </div>

                <div class="uk-width-1-2 uk-width-1-5@m">
                    <span class="titlefooter">ABOUT US.</span>
                    <ul class="uk-list uk-margin">
                        <li class="uk-margin-remove"><a href="" id="footer-link"
                                class="uk-text-small uk-text-capitalize">Our Story</a></li>
                        <li class="uk-margin-remove"><a href="" id="footer-link"
                                class="uk-text-small uk-text-capitalize">Career</a></li>
                        <li class="uk-margin-remove"><a href="" id="footer-link"
                                class="uk-text-small uk-text-capitalize">Partnerships</a></li>
                    </ul>
                </div>

                <div class="uk-width-1-2 uk-width-1-5@m">
                    <span class="titlefooter">HELP.</span>
                    <ul class="uk-list uk-margin">
                        <li class="uk-margin-remove"><a href="" id="footer-link"
                                class="uk-text-small uk-text-capitalize">How to Shop</a></li>
                        <li class="uk-margin-remove"><a href="" id="footer-link"
                                class="uk-text-small uk-text-capitalize">FAQ</a></li>
                        <li class="uk-margin-remove"><a href="" id="footer-link"
                                class="uk-text-small uk-text-capitalize">Shipping Policy</a>
                        </li>
                    </ul>
                </div>

                <div class="uk-width-1-2 uk-width-1-5@m">
                    <span class="titlefooter">GET IN TOUCH.</span>
                    <ul class="uk-list uk-margin">
                        <li class="uk-margin-remove"><a href="" id="footer-link"
                                class="uk-text-small uk-text-capitalize">Instagram</a></li>
                        <li class="uk-margin-remove"><a href="" id="footer-link"
                                class="uk-text-small uk-text-capitalize">Facebook</a></li>
                        <li class="uk-margin-remove"><a href="" id="footer-link"
                                class="uk-text-small uk-text-capitalize">Email</a></li>
                    </ul>
                </div>

                <div class="uk-width-1-1 uk-width-1-5@m">
                    <span class="titlefooter">NEWSLETTER.</span>
                    <p class="uk-text-small uk-margin uk-text-justify">Get the latest information about our products and
                        promo just
                        by
                        subscribing to our
                        newsletter.</p>
                    <form action="">
                        <div class="uk-grid" uk-grid>
                            <div class="uk-width-1-1 uk-margin-small-bottom">
                                <input class="uk-input uk-form-width-1-1 uk-form-small" type="text"
                                    placeholder="Your E-mail Address">
                            </div>
                            <div class="uk-width-1-1 uk-margin-remove">
                                <button class="uk-button uk-button-secondary uk-button-small uk-width-1-1 signup">SIGN
                                    UP</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="uk-width-1-2@m uk-width-1-1 uk-text-left@m uk-padding-remove-bottom uk-text-center">
                    <footer class="uk-text-small">Copyright. 2020 Custombox Indonesia</footer>
                </div>
                <div class="uk-width-1-2 uk-text-right uk-visible@m uk-padding-remove-bottom">
                    <a href="#" uk-totop uk-scroll class="uk-icon-button scroll-top"></a>
                </div>
            </div>


        </div>
    </div>

</body>
<script src="{{asset('public/new/')}}/js/uikit.min.js"></script>
<script src="{{asset('public/new/')}}/js/uikit-icons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

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
<script>
    $(window).scroll(example);

    function example() {
        var tempScrollTop = $(window).scrollTop();
        if (tempScrollTop >= 200) {
            // $("#navbar-scroll").show();
            $("#nav-scroll").show();
        } else {
            // $(".uk-sticky-placeholder").hide();
            $("#nav-scroll").hide();
        }
        // console.log("Scroll from Top: " + tempScrollTop.toString());
    };
</script>
@yield('more_js')
<script >
var Index = new Vue({
    el: '#Index',
    data: {
        slideshow:[],
        product:[],
        why_us:[],
        binefit:[],
        project:[]

    },
    methods: {
    },
    created: function () {
        // get slideshow
        axios.get("{{ route('slideshow_front')}}")
        .then(function (data) {
            Index.slideshow = data.data.data;
        });

      
    },
    mounted: function () {  
    },
    updated: function () {
    },
    watch: {

    }
});


</script>


</html>