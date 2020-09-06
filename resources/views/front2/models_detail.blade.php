@extends('layouts.home_new2')

@section('content')
<div id="ProductDetail">
    <div class="uk-section">
        <div class="uk-container">
            <div class="uk-grid" uk-grid>
                <div class="uk-width-1-2@m uk-width-1-1 uk-text-center">
                    <span class="title-details uk-text-center uk-hidden@m">@{{header.title}}</span>
                    <div class="uk-position-relative uk-visible-toggle uk-light uk-padding-large" tabindex="-1"
                        uk-slideshow="ratio: false; autoplay:true;">
                        <ul class="uk-slideshow-items" uk-height-viewport="offset-top: false; offset-bottom: 50">
                            <li v-if="ada == true" v-for="(row,index) in detail">
                                <img v-bind:src="row.img" alt="" uk-cover>
                            </li>
                            <li else>
                                <img v-bind:src="header.img" alt="" uk-cover>
                            </li>
                            

                        </ul>
                        <div class="uk-width-1-1 uk-margin-top">
                            <ul class="uk-thumbnav uk-flex-center" uk-margin>
                                <li v-if="ada == true" v-for="(row,index) in detail"  v-bind:class="index==0 ? 'uk-active' : '' " :uk-slideshow-item="row.id">
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
                        <span class="title-details uk-text-center">@{{header.title}}</span>

                    </div>
                    <div class="uk-flex uk-flex-column">

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
        header:{},
        detail:[],
        ada:false,
       
        
        data:{
            qty:'E-Mailer Box',
            harga:'',
            berat:0,
            sub_total:0,
            product_id:''
        },
        items:[],
       

    },
    computed: {
    },
    methods: {
        
      
       
       
    },
    created: function () {
    },
    mounted: function () {
      
        var curId = getParameterByName('id');
       
        if(curId == null){
            curId = 1;
        }
        
        axios.get("{{route('detail_models_front')}}?id="+curId)
        .then(function (data) {
            ProductDetail.header = data.data.header;

            var no = 0;
            $.each(data.data.detail, function (key, value) {
                no++;
                ProductDetail.detail.push(value);
            })
            if(no>0){
                ProductDetail.ada = true;
            }
        });
    },
    updated: function () {
    },
    watch: {

    }
})


</script>
@endsection
