@extends('layouts.home_new2')

@section('content')
<div id="ProductDetail">
    <div class="uk-section">
        <div class="uk-container">
            <div class="uk-grid" uk-grid>
                <div class="uk-width-1-2@m uk-width-1-1 uk-text-center">
                    <a href="shop1.html" id="btn-link" class="uk-hidden@m uk-icon-button uk-margin-right" uk-icon="icon: chevron-left"></a>
                    <span class="title-details uk-text-center uk-hidden@m">@{{header.title}}</span>
                    <a href="shop2.html" id="btn-link" class="uk-hidden@m uk-icon-button uk-margin-left" uk-icon="icon: chevron-right"></a>
                    <div class="uk-visible-toggle uk-light uk-padding-large" tabindex="-1" uk-slideshow="ratio: 3:3; autoplay:true;">
                        <ul class="uk-slideshow-items">
                            <li v-if="ada == true" v-for="(row,index) in detail">
                                <img v-bind:src="row.img" alt="" uk-cover>
                            </li>
                            <li else>
                                <img v-bind:src="header.img" alt="" uk-cover>
                            </li>


                        </ul>
                        <div class="uk-width-1-1 uk-margin-top">
                            <ul class="uk-thumbnav uk-flex-center" uk-margin>
                                <li v-if="ada == true" v-for="(row,index) in detail" v-bind:class="index==0 ? 'uk-active' : '' " :uk-slideshow-item="row.id">
                                    <a href="#">
                                        <img v-bind:src="row.img" width=" 50" alt="">
                                    </a>
                                </li>
                                <li else class="uk-active" uk-slideshow-item="1">
                                    <a href="#">
                                        <img v-bind:src="header.img" width=" 50" alt="">
                                    </a>
                                </li>


                            </ul>
                        </div>
                    </div>

                </div>

                <div class="uk-width-1-2@m uk-width-1-1 uk-padding">
                    <div class="uk-width-1-1 uk-text-center uk-visible@m">
                        <a href="#" id="btn-link" @click="prev_model()" class="uk-icon-button uk-margin-right" uk-icon="icon: chevron-left"></a>
                        <span class="title-details uk-text-center">@{{header.title}}</span>
                        <a href="#" @click="next_model()" id="btn-link" class="uk-icon-button uk-margin-left" uk-icon="icon: chevron-right"></a </div> <div class="uk-flex uk-flex-column">

                        <span class="uk-margin-bottom heading">Model.</span>
                        <span>@{{header.title}}</span>
                        <hr class="uk-margin-small">
                        <span class="uk-margin-bottom heading">Suitable for.</span>
                        <span> @{{header.suitable}}</span>
                        <hr class="uk-margin-small">
                        <span class="uk-margin-bottom heading">Description.</span>
                        <span v-if="localStorage.lang == 'Eng'">
                            @{{header.desc_eng}}
                        </span>
                        <span v-else>
                            @{{header.desc}}

                        </span>
                        <hr class="uk-margin-meddium-bottom">
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
@section('more_js')
<script src="{{asset('public/front/')}}/vendor/sweetalert/sweetalert.min.js"></script>
<script>
    var ProductDetail = new Vue({
        el: '#ProductDetail',
        data: {
            header: {},
            detail: [],
            ada: false,


            data: {
                qty: 'E-Mailer Box',
                harga: '',
                berat: 0,
                sub_total: 0,
                product_id: ''
            },
            items: [],


        },
        computed: {},
        methods: {
            next_model:function(){
                var id = getParameterByName('id');
                axios.get("{{route('next_model')}}?id=" + id)
                .then(function(data) {
                   window.location.href = "{{route('models_detail')}}?id=" + data.data;
                });


            },
            prev_model:function(){
                var id = getParameterByName('id');
                axios.get("{{route('prev_model')}}?id=" + id)
                .then(function(data) {
                   window.location.href = "{{route('models_detail')}}?id=" + data.data;
                });

            }




        },
        created: function() {},
        mounted: function() {

            var curId = getParameterByName('id');

            if (curId == null) {
                curId = 1;
            }

            axios.get("{{route('detail_models_front')}}?id=" + curId)
                .then(function(data) {
                    ProductDetail.header = data.data.header;

                    var no = 0;
                    $.each(data.data.detail, function(key, value) {
                        no++;
                        ProductDetail.detail.push(value);
                    })
                    if (no > 0) {
                        ProductDetail.ada = true;
                    }
                });
        },
        updated: function() {},
        watch: {

        }
    })
</script>
@endsection