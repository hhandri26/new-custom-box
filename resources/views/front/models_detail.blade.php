@extends('layouts.home')

@section('content')
<style>
    

</style>
<div id="ProductDetail">


    <section class="section-padding jarak" >
    </section>
    
    <section class="section-intro">
        <div class="container">
            <div class="col-md-12">
                
                <div class="row">
                    <div class="col-md-12">
                       
                            <div class="row">
                               
                                <div class="row">
                                    <div class="col-md-5">
                                        
                                        <div v-if="ada == true">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                                        <ol class="carousel-indicators">
                                                            <li data-target="#carouselExampleIndicators" v-for="(row, index) in detail" :data-slide-to="row.id" v-bind:class="index==0 ? 'active' : '' "></li>
                                                            
                                                        </ol>
                                                        <div  class="carousel-inner">
                                                                
                                                            <div v-for="(row,index) in detail" v-bind:class="index==0 ? 'carousel-item active' : 'carousel-item' " >
                                                                <img class="d-block full_img"  v-bind:src="row.img" alt="First slide" style="width: 400px; margin:auto">
                                                            </div>			  
                                                        </div>
                                                        
                                                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                            <span class="sr-only">Previous</span>
                                                        </a>
                                                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                            <span class="sr-only">Next</span>
                                                        </a>
                                                    
                            
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="row">
                                                <div class="col-md-12" style="margin-top:50px;">
                                                    <ol class="carousel-indicators">
                                                        <li  v-for="(row,index) in detail" data-target="#carousel-thumb" :data-slide-to="row.id" v-bind:class="index==0 ? 'active' : '' " style="width:100px !important;"> 
                                                            <img class="d-block w-100" v-bind:src="row.img" class="img-fluid">
                                                        </li>
                                                    
                                                    </ol>
                                                </div>

                                            </div>
                                           

                                        </div>
                                        
                                        <div v-else>
                                            <img class="d-block full_img"  v-bind:src="header.img" alt="First slide"style="width: 400px; margin:auto">

                                        </div>
                                
                                    </div>
                                    <div class="col-md-7">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-metro"  style="margin-left: 200px; margin-bottom:50px;">
                                            
                                                
                                                    <div class="num-block skin-2" style="width: 380px;">
                                                        <div class="num-in">
                                                           
                                                            <input type="text"  v-model="header.title" class="in-num" value="1" readonly="">
                                                           
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> 
                                            <div class="col-md-12">
                                                <div class="container">
                                                      <b class="d-block" style="color:#ecb0bb">Model:</b><br>
        
                                                        <div class="box-type"  style="border-bottom: 2px solid #b5a99f">
                                                            <span>@{{header.title}}</span>
                                                        
                                                        </div>
                                                        <br>
                                                </div>
                                                <div class="container">
                                                      <b class="d-block" style="color:#ecb0bb">Suitable for:</b><br>
        
                                                        <div class="box-type"  style="border-bottom: 2px solid #b5a99f">
                                                            <span> @{{header.suitable}}</span>
                                                           
                                                        </div>
                                                        <br>
                                                </div>
                                                <div class="container">
                                                      <b class="d-block" style="color:#ecb0bb">Description:</b><br>
        
                                                        <div class="box-type"  style="border-bottom: 2px solid #b5a99f">
                                                            <span>@{{header.title}}</span>
                                                            <span v-if="localStorage.lang == 'Eng'">
                                                                @{{header.desc_eng}}
                                                            </span>
                                                            <span v-else>
                                                                @{{header.desc}}
                                                                
                                                            </span>
                                                        </div>
                                                        <br>
                                                </div>
                                                <div class="container">
                                                    <div class="form-metro">
                                                        <a href="{{route('shop')}}" class="btn" style="background-color: #fff; border-color: #ECB0AE;">Shop Now</a>
                                                    </div>
                                                </div>
                                                
                                            </div>

                                        </div>
                                       
                                      

                                     
                                     

                                     
                                    </div>

                                </div>
                                    
                                    
                                    
                                
                            </div>
                      
                    </div>

                </div>
                
             
            </div>
        </div>
    </section>
    <section class="section-padding" style="padding: 60px 0;">
    </section>

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

	

