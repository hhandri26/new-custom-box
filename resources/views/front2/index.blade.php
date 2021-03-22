@extends('layouts.home_new')

@section('content')

<div id="Index2">
    <div class="uk-section uk-padding-remove-bottom">
        <div class="uk-container">
            <div class="uk-grid" uk-grid>

                <div class="uk-width-1-1 uk-text-left@m uk-text-center">
                    <span class="header">MODELS.</span>
                </div>

                <div class="uk-width-1-1 uk-margin-remove-top">

                    <div uk-slider="autoplay:true;" class="uk-margin-medium-top">

                        <div class="uk-position-relative uk-padding uk-padding-remove-top">

                            <div class="uk-slider-container uk-light">

                                <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-4@m" uk-grid uk-height-match="target: > li > div > .uk-card-body">
                                    @foreach($models as $row)
                                    <li>
                                        <div class="uk-card uk-card-default card-model">
                                            <div class="uk-card-media-top">
                                                <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
                                                    <img class="uk-transition-scale-up uk-transition-opaque" src="{{asset('/public/images/models/'.$row->img)}}" alt="">
                                                </div>
                                            </div>
                                            <div class="uk-card-body uk-text-center uk-padding-small uk-margin-top">
                                                <span class="model-title">
                                                    <span v-if="localStorage.lang == 'Eng'">
                                                        {{$row->title}}
                                                    </span>
                                                    <span v-else>
                                                        {{$row->title_id}}
                                                    </span>
                                                </span>
                                                <p class="model-desc">
                                                    <span v-if="localStorage.lang == 'Eng'">
                                                        {{$row->suitable}} </span>
                                                    <span v-else>
                                                        {{$row->suitable_id}}
                                                    </span>
                                                </p>
                                            </div>
                                            <div class="uk-text-center uk-padding-remove-top uk-padding-remove-left uk-padding-remove-right">
                                                <a href="{{route('models_detail')}}?id={{$row->id}}" id="model-link">
                                                    <span v-if="localStorage.lang == 'Eng'">MORE DETAILS</span>
                                                    <span v-else>KETERANGAN LEBIH LANJUT</span>
                                                </a>
                                            </div>
                                            <div class="uk-card-footer uk-text-center uk-padding-remove-top uk-padding-remove-left uk-padding-remove-right"
                                                style="border-top: 0px;">
                                                <a href="{{$row->link}}" target="_blank" id="model-link">
                                                    <span v-if="localStorage.lang == 'Eng'">BUY NOW</span>
                                                    <span v-else>BELI SEKARANG</span>    
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="uk-visible@m">
                                <a class="uk-position-center-left-out uk-position-small uk-icon-button slidenav-model" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                                <a class="uk-position-center-right-out uk-position-small uk-icon-button slidenav-model" href="#" uk-slidenav-next uk-slider-item="next"></a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>

    <div v-for="(row, index) in why_us" v-bind:class="index==0 ? 'uk-section uk-padding-remove-top' : 'uk-section ' + row.bg ">
        <div class="uk-container">
            <div class="uk-grid" uk-grid>
                <div v-if="index==0" class="uk-width-1-1 uk-text-left@m uk-text-center uk-margin-large-top">
                    <span class="header">
                        <span v-if="localStorage.lang == 'Eng'">
                            WHY CUSTOMBOX INDONESIA.
                        </span>
                        <span v-else>
                            Mengapa Custombox Indonesia.
                        </span>  
                    </span>
                </div>
                <div class="uk-width-1-2@m uk-width-1-1" uk-scrollspy="cls: uk-animation-slide-left; repeat: false; delay:500;">
                    <h1 class="header-why uk-margin-medium-left"><strong>
                        @{{row.title_number}}</strong></h1>
                    <div class="why-text">
                        <span class="uk-text-large uk-text-bold">
                            <span v-if="localStorage.lang == 'Eng'">
                                @{{row.title}}
                            </span>
                            <span v-else>
                                @{{row.title_desc}}
                            </span>
                        </span>
                        <p class="uk-text-justify uk-visible@m">
                            <span v-if="localStorage.lang == 'Eng'">
                                @{{row.desc_eng}}
                            </span>
                            <span v-else>
                                @{{row.desc}}
                            </span>
                        </p>
                    </div>
                </div>
                <div class="uk-width-1-1 uk-hidden@m uk-margin-large-left uk-margin-large-right" uk-scrollspy="cls: uk-animation-slide-left; repeat: false; delay:500;">
                    <p class="uk-text-justify">
                        <span v-if="localStorage.lang == 'Eng'">
                            @{{row.desc_eng}}
                        </span>
                        <span v-else>
                            @{{row.desc}}

                        </span>
                    </p>
                </div>
                <div class="uk-width-1-2@m uk-width-1-1" uk-scrollspy="cls: uk-animation-slide-right; repeat: false; delay:500;">
                    <img class="image-why-first" v-bind:src="row.img" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="uk-section uk-padding-small-bottom section-why-primary">
        <div class="uk-container">
            <div class="uk-grid" uk-grid>
                <div class="uk-width-1-1 uk-text-left@m uk-text-center">
                    <span class="header">
                        <span v-if="localStorage.lang == 'Eng'">
                            MORE BENEFITS.
                            </span>
                            <span v-else>
                            LEBIH BANYAK MANFAAT.
                        </span>
                    </span>
                </div>
                <div class="uk-width-1-1">

                    <div class="uk-grid uk-margin-small-left uk-margin-medium-top" uk-grid>
                        <div v-for="row in binefit" class="uk-width-1-2 uk-width-1-4@m uk-transition-toggle" tabindex="0">
                            <img class="uk-transition-scale-up uk-transition-opaque uk-visible@m" v-bind:src="row.img" height="150" width="150" alt="">
                            <img class="uk-transition-scale-up uk-transition-opaque uk-hidden@m" v-bind:src="row.img" height="80" width="80" alt=""><br><br>
                            <span class="benefits-text aaa">
                                <span v-if="localStorage.lang == 'Eng'">
                                    @{{row.title}}
                                </span>
                                <span v-else>
                                    @{{row.title_id}}
                                </span>
                            </span>
                            <p>
                                <span v-if="localStorage.lang == 'Eng'">
                                    @{{row.desc_eng}}
                                </span>
                                <span v-else>
                                    @{{row.desc}}
                                </span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="uk-section uk-padding-remove-bottom">
        <div class="uk-container">
            <div class="uk-grid" uk-grid>

                <div class="uk-width-1-1 uk-text-left@m uk-text-center">
                    <span class="header">
                        <span v-if="localStorage.lang == 'Eng'">
                            PAST PROJECTS.
                        </span>
                        <span v-else>
                            Proyek masa lalu
                        </span>
                    </span>
                </div>
                <div class="uk-width-1-1 uk-margin-remove-top">

                    <div uk-slider="autoplay:true;" class="uk-margin-medium-top">

                        <div class="uk-position-relative uk-padding uk-padding-remove-top">

                            <div class="uk-slider-container uk-light">

                                <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-4@m" uk-grid uk-height-match="target: > li > div > .uk-card-body">
                                    @foreach($project as $row)
                                    <li>
                                        <div class="uk-card uk-card-default card-model">
                                            <div class="uk-card-media-top">
                                                <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
                                                    <img class="uk-transition-scale-up uk-transition-opaque" src="{{asset('/public/images/project/'.$row->img)}}" alt="">
                                                </div>
                                            </div>
                                            <div class="uk-card-body uk-text-center uk-padding-small uk-margin-top">
                                                <span class="model-title">
                                                    <span v-if="localStorage.lang == 'Eng'">
                                                        {{$row->title}}
                                                    </span>
                                                    <span v-else>
                                                        {{$row->title_id}}
                                                    </span> 
                                                </span>
                                            </div>
                                            <div class="uk-text-center uk-padding-remove-top uk-padding-remove-left uk-padding-remove-right">
                                                <p class="model-desc">
                                                    <span v-if="localStorage.lang == 'Eng'">
                                                        {{$row->desc_eng}}
                                                    </span>
                                                    <span v-else>
                                                        {{$row->desc}}

                                                    </span>
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="uk-visible@m">
                                <a class="uk-position-center-left-out uk-position-small uk-icon-button slidenav-model" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                                <a class="uk-position-center-right-out uk-position-small uk-icon-button slidenav-model" href="#" uk-slidenav-next uk-slider-item="next"></a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="uk-section section-why-primary">
        <div class="uk-container">
            <div class="uk-grid uk-text-center" uk-grid>
                <div class="uk-width-1-1">
                    <span v-if="localStorage.lang == 'Eng'" class="section-shop">CREATE YOUR<br>CUSTOM PACKAGING TODAY</span>
                    <span v-else class="section-shop">BUAT ANDA <br>KEMASAN KHUSUS HARI INI</span>
                </div>
                <div class="uk-width-1-1 uk-margin-top">
                    <a href="{{route('contact')}}" id="shop-now">
                        <span v-if="localStorage.lang == 'Eng'">
                            SHOP NOW
                        </span>
                        <span v-else>
                            BERBELANJA SEKARANG
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('more_js')
<script>
    var Index2 = new Vue({
        el: '#Index2',
        data: {
            slideshow: [],
            product: [],
            why_us: [],
            binefit: [],
            project: []

        },
        methods: {},
        created: function() {
            // get slideshow
            axios.get("{{route('product_front')}}")
                .then(function(data) {
                    Index2.product = data.data.data;
                });

            axios.get("{{route('why_us_front')}}")
                .then(function(data) {
                    Index2.why_us = data.data.data;
                });

            axios.get("{{route('binefit_front')}}")
                .then(function(data) {
                    Index2.binefit = data.data.data;
                });
            axios.get("{{route('project_front')}}")
                .then(function(data) {
                    Index2.project = data.data.data;
                });
        },
        mounted: function() {},
        updated: function() {},
        watch: {

        }
    });
</script>
@endsection