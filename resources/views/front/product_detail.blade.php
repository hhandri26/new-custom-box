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
                    <div class="col-md-5" style="margin: auto; left: 150px;margin-bottom: 20px;" >
                        <div class="text-center mb-30" style="border-bottom: 2px solid #b5a99f;width: 180px; ">
                            <h3 style="color: #B5A99F; font-size:20px;">ECO PACK BOX</h3>
                           
                        </div>

                    </div>
                    <div class="col-md-7">

                    </div>

                </div>
                <div class="row">
                    <div class="col-md-12">
                       
                            
                               
                                <div class="row">
                                    <div class="col-md-6">
                                        
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
                                    <div class="col-md-6">
                                        <div class="text-left mb-30" style="border-bottom: 2px solid #b5a99f;width: 380px; ">
                                            <h3 style="color: #B5A99F; font-size:20px;">@{{header.title}} </h3>
                                        </div>
                                        <h3 style="color: rgba(108, 108, 108, 0.92); font-size: 15px;margin-top: 30px;margin-bottom: 30px;">IDR @{{data.harga | thousand}},- / pack</h3>
                                        <div class="form-metro">
                                            <label>Size.</label> <br>
                                            
                                            <select  v-model="data.size" @change="set_value_size()" class="select_style" style="width: 380px;" >
                                                <option v-for="row in master.size" :value="row.id" > @{{ row.panjang }} cm X @{{row.lebar}} cm X @{{row.tinggi}} </option>
                                            </select>
                                        </div>
                                        <div class="form-metro" style="margin-bottom: 30px;">
                                            <label>Qty.</label> <br>
                                            
                                            <div class="num-block skin-2" style="width: 380px;">
                                                <div class="num-in">
                                                    <a v-on:click="min_qty()" ><span class="minus dis"></span></a>
                                                    <input type="text"  v-model="data.qty" class="in-num" value="1" readonly="">
                                                    <a v-on:click="add_qty()" ><span class="plus"></span></a>
                                                </div>
                                            </div>
                                        </div>


                                        
                                        <div class="form-metro">
                                            <a v-on:click="addToCart()" class="btn" style="background-color: #fff; border-color: #ECB0AE;"><i class="fa fa-cart-plus"></i> Add To Cart</a>
                                            <a href="{{route('shop')}}" class="btn" style="background-color: #fff; border-color: #ECB0AE;"><i class="fa fa-arrow-right"></i> Continue Shop</a>
                                        </div>

                                        <div class="container">
                                            
                                            <div class="accordion">
                                                <div class="accordion-item">
                                                    <button id="accordion-button-1" aria-expanded="false"><span class="accordion-title">Product Detail</span><span class="icon" aria-hidden="true"></span></button>
                                                    <div class="accordion-content">
                                                        <span v-if="localStorage.lang == 'Eng'">
                                                            @{{header.desc_eng}}
                                                        </span>
                                                        <span v-else>
                                                            @{{header.desc}}
                                                            
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <button id="accordion-button-2" aria-expanded="false"><span class="accordion-title">Product Measurument</span><span class="icon" aria-hidden="true"></span></button>
                                                    <div class="accordion-content">
                                                       <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th>Panjang</th>
                                                                    <th>Lebar</th>
                                                                    <th>Tinggi</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr v-for="row in master.size">
                                                                    <td>@{{ row.panjang }} cm</td>
                                                                    <td>@{{row.lebar}} cm </td>
                                                                    <td>@{{row.tinggi}} cm</td>
                                                                </tr>
                                                            </tbody>
                                                       </table>
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
        master:{
            size:[]
        },
        
        data:{
            qty:0,
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
        set_value_size:function(){
            axios.get("{{route('get_price_product_front')}}?id="+ProductDetail.data.size+'&qty='+ProductDetail.data.qty)
            .then(function (data) {
               
                ProductDetail.data.harga = data.data.data.harga;
                ProductDetail.data.berat = data.data.data.berat;
                ProductDetail.data.sub_total = ProductDetail.data.qty * data.data.data.harga;

    
            });

        },
        add_qty:function(){
            ProductDetail.data.qty += 1;
            ProductDetail.data.sub_total = ProductDetail.data.harga * ProductDetail.data.qty;
            

        },
        min_qty:function(){
            ProductDetail.data.qty -= 1;
            ProductDetail.data.sub_total = ProductDetail.data.harga * ProductDetail.data.qty;

        },
        addToCart:function(){
            if(ProductDetail.data.sub_total!==''){
               
                var existing = JSON.parse(localStorage.getItem("cart"));
                if(existing!== null){
                    var b=[{}];
                    b =JSON.parse(localStorage.getItem("cart")) || [];
                    b.push(ProductDetail.data);
                    localStorage.setItem("cart",JSON.stringify(b));

                }else{
                    localStorage.setItem("cart",JSON.stringify([ProductDetail.data]));

                }
                
                
                Swal.fire(
                    'Success',
                    'Item add to cart',
                    'success'
                ).then((value) => {
                    ProductDetail.data.qty='';
                    ProductDetail.data.harga='';
                    ProductDetail.data.berat='';
                    ProductDetail.data.sub_total='';
                
                    ProductDetail.data.product_id='';
                    window.location.href = ""
                });


            }
            

        },
       
       
    },
    created: function () {
    },
    mounted: function () {
      
        var curId = getParameterByName('id');
        this.data.product_id = curId;
        
        axios.get("{{route('detail_product_front')}}?id="+curId)
        .then(function (data) {
            ProductDetail.header = data.data.header;
            ProductDetail.data.harga = data.data.header.harga;
            ProductDetail.data.berat = data.data.header.berat;

            var no = 0;
            $.each(data.data.detail, function (key, value) {
                no++;
                ProductDetail.detail.push(value);
            })
            if(no>0){
                ProductDetail.ada = true;
            }
        });

        axios.get("{{route('get_size_product_front')}}?id="+curId)
        .then(function (data) {
            ProductDetail.master.size = data.data.data;

        });
    },
    updated: function () {
    },
    watch: {

    }
})


</script>
@endsection

	

