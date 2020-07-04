@extends('layouts.home')

@section('content')

<link rel="stylesheet" href="{{asset('public/front/')}}/css/shop.css">
<div id="Checkout">
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Shipping Address</h5>
            <button class="close" style="width: 5%;" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="form-group">
                        <label for="exampleInputEmail1">First Name</label>
                        <input type="text" class="form-control" v-model="pay.first_name" style="width: 100%; border: 1px solid rgba(0,0,0,.15) !important;">
                        
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Last Name</label>
                        <input type="text" class="form-control" v-model="pay.last_name" style="width: 100%; border: 1px solid rgba(0,0,0,.15) !important;">
                        
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="text" class="form-control" v-model="pay.email" style="width: 100%; border: 1px solid rgba(0,0,0,.15) !important;">
                        
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Phone Number</label>
                        <input type="text" class="form-control" v-model="pay.phone_number" style="width: 100%; border: 1px solid rgba(0,0,0,.15) !important;">
                        
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Provinsi</label>
                        <v-select v-model="province_id" @input="get_city()" :options="provinsi" :reduce="x => x.province_id"  label="province"></v-select>   
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">City</label>
                        <v-select v-model="city_id" @input="get_disctict()" :options="city" :reduce="x => x.city_id"  label="city_name"></v-select>   
                    </div>
                    <!-- <div class="form-group">
                        <label for="exampleInputEmail1">District</label>
                        <v-select v-model="district_id" :options="district" :reduce="x => x.id"  label="name"></v-select>   
                    </div> -->
                    <div class="form-group">
                        <label for="exampleInputEmail1">Choice Courier Service</label>
                        <v-select v-model="kurir_id" @input="count_price()" :options="kurir" :reduce="x => x.id"  label="text"></v-select>   
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Address</label>
                        <textarea  class="form-control" v-model="pay.address" style="width: 100%;"></textarea>
                        
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Choice Courier Service</label>
                        <br>
                        <div >
                            <table class="table" style="width: 100%;">
                                <tbody>
                                    <tr v-for="row in cost">
                                        <td>@{{row.service}}</td>
                                        <td  > 
                                            <div class="box1" v-for="dat in row.cost">
                                                <input type="radio" :id="dat.value" name="price" v-model="price_ongkir" :value="dat.value" style="display: none;">
                                                <label :for="dat.value" class="check-box" style="float: left;margin-right: 20px;"></label>
                                                <div>
                                                
                                                    <p style="font-size: 15px;">@{{dat.value}} @{{dat.etd}} Days</p>
            
                                                </div>
                                            
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>

                                    </tr>
                                </tbody>
                            </table> 
                            
                            </div>
                        
                    </div>
                        

                </form>
            
            </div>
            <div class="modal-footer">
            <button class="btn btn-primary" data-dismiss="modal">Save changes</button>
            </div>
        </div>
        </div>
    </div>
    <!-- end modal -->
 


    <section class="section-intro jarak">
        <div class="content-intro bg-white p-t-77 p-b-133">
            <div class="container">
                <div class="header-intro">
                    
                </div>
            </div>
            <div class="container">
            <div class="row">
                

                <div class="col-sm-8 col-md-8">
                    <!-- - -->
                    <h4 class="txt13 m-b-33" style="color:#d2a2a2;">
                        @{{count_cart}} ITEM IN YOUR CARD 
                        <hr class="onepixel">	
                    </h4>
                    <div class="container" style="font-family: gotham-book; font-size:13px;">
                        <div style="margin-bottom: 50px;" class="row" v-for="row in cart">
                            <div class="col-md-3">
                                <img  v-bind:src="row.img" style="width: 100%;">
                            </div>
                            <div class="col-md-9" style="padding-left: 30px;">
                                <strong>@{{row.title}}</strong> : <br>
                                <table class="table">
                                    
                                    <tr>
                                        <td ><strong>Qty</strong></td>
                                        <td >:</td>
                                        <td style="text-align: right;">  @{{row.qty}} barang</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Price</strong></td>
                                        <td>:</td>
                                        <td style="text-align: right;">  <vue-numeric style="text-align: right;" readonly="" v-model="row.harga" :precision="2" currency="Rp" separator="," ></vue-numeric></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Sub Total</strong></td>
                                        <td>:</td>
                                        <td style="text-align: right;">  <vue-numeric style="text-align: right;" readonly="" v-model="row.sub_total" :precision="2" currency="Rp" separator="," ></vue-numeric></td>
                                    </tr>
                                    
                                </table>	
                                
                            </div>
                        
                        </div>
                        <div class="row">
                            <div class="col-md-3">

                            </div>
                            <div class="col-md-9">
                                <br><br>
                              
                                    <button type="button" data-toggle="modal" data-target="#exampleModal" class="btn_checkout" style="width: 100% !important;">
                                        <i class="fa fa-truck"></i>
                                        Pilih Pengiriman 
                                        </button>
                                
                                
                                <br>
                                <!-- Have a coupon? <span style="color:#d2a2a2;">CLICK HERE TO ENTER YOUR CODE</span>
                                <form>
                                    <input type="email" class="form-control" id="subscribe" placeholder="Coupon Code" style="border-style: dotted; border-color: #d2a2a2 !important; border : 1px solid rgba(210,162,162,.55) !important;">
                                    <input type="submit" value="go" style="padding: 12px 10px !important;">
                                </form>	 -->
                            </div>

                        </div>
                    </div>
                        
                </div>

                <div class="col-sm-4 col-md-4 p-t-50" style="background-color: #e8e8e8;padding: 20px;">
                    <h4 class="txt13 m-b-33" style="color:#d2a2a2;">
                        SUMMARY
                    <hr class="onepixel">
                    </h4>
                    <table width="100%">
                        <tr>
                            <td width="33%"><strong>PRODUCT</strong></td>
                            <td width="33%"><strong>QTY</strong></td>
                            <td width="34%"><strong>TOTAL</strong></td>
                        </tr>
                        <tr>
                            <td width="33%"><hr></td>
                            <td width="33%"><hr></td>
                            <td width="34%"><hr></td>
                        </tr>
                        
                        <tr v-for="row in cart" style="font-size:13px;">
                            <td width="33%">@{{row.title}}<br></td>
                            <td width="33%"> X @{{row.qty}} Pcs</td>
                            <td width="34%" >
                                <vue-numeric style="background-color: rgb(232, 232, 232);" readonly="" v-model="row.sub_total" :precision="2" class="select_style2" currency="Rp" separator="," ></vue-numeric>
                            </td>
                        </tr>
                        <tr style="font-size:13px;">
                            <td width="33%"><hr></td>
                            <td width="33%"><hr></td>
                            <td width="34%"><hr></td>
                        </tr>
                        <tr style="font-size:13px;">
                            <td width="33%"><strong>SUB TOTAL</strong></td>
                            <td width="33%">&nbsp;</td>
                            <div style="display: none;">
                                @{{count_sub_total}}

                            </div>
                            <td width="34%"><strong><vue-numeric style="background-color: rgb(232, 232, 232);" readonly="" v-model="sub_total" :precision="2" class="select_style2" currency="Rp" separator="," ></vue-numeric></strong></td>
                        </tr>
                        <tr style="font-size:13px;">
                            <td width="33%">SHIPPING</td>
                            <td width="33%">&nbsp;</td>
                            <td width="34%">&nbsp;</td>
                        </tr>
                        <tr style="font-size:13px;">
                            <td width="33%">@{{kurir_id}}</td>
                            <td width="33%">&nbsp;</td>
                            <td width="34%"><strong><vue-numeric style="background-color: rgb(232, 232, 232);" readonly="" v-model="price_ongkir" :precision="2" class="select_style2" currency="Rp" separator="," ></vue-numeric></strong></td>
                        </tr>
                        
                        <tr style="font-size:13px;">
                            <td width="33%">&nbsp;</td>
                            <td width="33%">&nbsp;</td>
                            <td width="34%">&nbsp;</td>
                        </tr>
                        <tr style="font-size:13px;">
                            <td width="33%"><strong>SUB TOTAL</strong></td>
                            <td width="33%">&nbsp;</td>
                            <td width="34%"><strong>Rp. @{{Number(count_sub_total + price_ongkir) | decimal | thousand }}</strong></td>
                        </tr>
                        <tr style="font-size:13px;">
                            <td width="33%">&nbsp;</td>
                            <td width="33%">&nbsp;</td>
                            <td width="34%">&nbsp;</td>
                        </tr>
                        <tr style="font-size:13px;">
                            <td width="33%"><strong>TOTAL WEIGHT</strong></td>
                            <td width="33%">&nbsp;</td>
                            <td width="34%"><strong>@{{count_weight}} Kg</strong></td>
                        </tr>
                        <tr style="font-size:13px;">
                            <td colspan="3">
                                
                                <button type="button" @click="payment()" class="btn_checkout" style="width: 100% !important;">
                                    <i class="fa fa-money"></i>
                                    Choose Payment 
                                        </button>
                            </td>
                            
                        </tr>
                    </table>

                </div>


                
            </div>
        </div>
        </div>
    </section>
</div>

@endsection
@section('more_js')
<script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="SB-Mid-client--_qXTQVooQ0cOX79"></script>
<script src="{{asset('public/front/')}}/vendor/sweetalert/sweetalert.min.js"></script>
<script>
var Checkout = new Vue({
    el: '#Checkout',
    data: {
        cart:[],
        provinsi:[],
        city:[],
        district:[],
        province_id:'',
        city_id:'',
        sub_total:0,
        address:'',
        price_ongkir:'',
        district_id:'',
        pay:{
            first_name:'',
            last_name:'',
            email:'',
            phone_number:'',
            address:'',

        },
        kurir:[
            {
                id:'jne',
                text:'JNE'
            },
            {
                id:'tiki',
                text:'TIKI'
            },
            
            {
                id:'deliveree',
                text:'Deliveree'
            },
        ],
        kurir_id:'',
        cost:[]

    },
    computed: {
        count_cart:function(){
            var count = 0;
            var cart =JSON.parse(localStorage.getItem("cart"));
            if(cart!==null){
                count = cart.length
            }
            return count;

        },
        count_weight:function(){
            var berat   = (this.cart.reduce((acc, item) => acc + (item.qty * item.berat),0) ) / 100;
            return berat;

        },
        count_sub_total:function(){
            var total   = (this.cart.reduce((acc, item) => acc + (item.sub_total * 1),0) ) ;
            this.sub_total = total;
            return total;

        }
    },
    methods: {
        payment:function(){
            if(Checkout.price_ongkir!==0){
         
            var dat ={
                _token: $('meta[name="csrf-token"]').attr('content'),
                first_name:Checkout.pay.first_name,
                last_name:Checkout.pay.last_name,
                amount:Checkout.count_sub_total+ Checkout.price_ongkir,
                address:Checkout.pay.address,
                note:Checkout.pay.first_name,
                email:Checkout.pay.email,
                qty:Checkout.cart.reduce((acc, item) => acc + (item.qty * 1),0) ,
                phone:Checkout.pay.phone_number,
                amount_shipping:Checkout.price_ongkir,
                courier:Checkout.kurir_id,
                detail:Checkout.cart
            }
            axios.post("{{ route('create_transaction_front')}}", dat).then(function (response) {                      
                if(response.status==200){
                    setTimeout(function(){
                        snap.pay(response.data.snap_token, {
                            // Optional
                            onSuccess: function (result) {
                                
                                localStorage.removeItem("cart");
                                Swal.fire(
                                    'Success',
                                    'Item add to cart',
                                    'success'
                                ).then((value) => {
                                    window.location.href = "shop.html"
                                });
                                location.reload();
                            },
                            // Optional
                            onPending: function (result) {
                                localStorage.removeItem("cart");
                                Swal.fire(
                                    'Success',
                                    'Item add to cart',
                                    'success'
                                ).then((value) => {
                                    window.location.href = "shop.html"
                                });
                                location.reload();
                            },
                            // Optional
                            onError: function (result) {
                                location.reload();
                            }
                        });
                    }, 150);  

                }
            }).catch(function (error) {
                console.log(error);    
            });
        }else{
            Swal.fire(
                'Error',
                'Silahkan Pilih Pengiriman ',
                'error'
            )
        }

        },
        get_city:function(){
            Checkout.city=[];
            var id = Checkout.province_id;
            axios.get( "{{ route('get_city_front')}}?provinsi_id="+id)
            .then(function (data) {
                Checkout.city = data.data;

               
                

            
            
            });

        },
        get_disctict:function(){
            Checkout.city=[];
            var id = Checkout.city_id;
            axios.get("{{route('get_disctict_front')}}"+'?city_id='+id)
            .then(function (data) {
                Checkout.district = data.data;

            
            
            });

        },
        count_price:function(){
            var id_kurir= Checkout.kurir_id;
            if(id_kurir =='deliveree'){
                $('#exampleModal2').modal('show');
                $('#exampleModal').modal('hide');

            }else{
                var origin  = 151;
                var des     = Checkout.city_id;
                var berat   = this.count_weight * 1000;
                axios.get("{{route('get_tarif_front')}}?id_kurir="+id_kurir+'&origin='+origin+'&des='+des+'&berat='+berat)
                .then(function (data) {
                    $.each(data.data, function(i,field){
                        Checkout.cost = field.costs;

                    })
                
               

            
            
                });
            

            }   
            

        }
    },
    created: function () {
        // get provinsi
        axios.get("{{route('get_provinsi')}}")
        .then(function (data) {
            Checkout.provinsi = data.data;
        });
       

    },
    mounted: function () {  
        var member_id = localStorage.getItem("member_id");
        if(member_id==null){
            Swal.fire(
                'Harus Login',
                'Silahkan Login / Register Untuk Melanjutkan',
                'error'
            ).then((value) => {
                window.location.href = "{{route('login_member')}}"
               
            });

        }else{
             // get member informasi
            var email = localStorage.getItem("member_email");
            axios.get("{{route('get_member_address')}}?email="+email)
            .then(function (data) {
                console.log(data.data.data.first_name);
                Checkout.province_id =data.data.data.provinsi_id;
                Checkout.city_id =data.data.data.kota_id;
                Checkout.pay.address=data.data.data.address;
                Checkout.pay.first_name=data.data.data.first_name;
                Checkout.pay.last_name=data.data.data.last_name;
                Checkout.pay.email=data.data.data.email;
                Checkout.pay.phone_number=data.data.data.phone_number;
                Checkout.get_city();

            });

        }
        var cart = JSON.parse(localStorage.getItem("cart"));
        
        Object.entries(cart).forEach(([key, val]) => {
            axios.get(" {{route('detail_product_front')}}?id="+val.product_id)
            
            .then(function (data) {
                var gambar = data.data.header.img;
                var title = data.data.header.title;
                var dat = {
                    img:gambar,
                    title:title,
                    qty:val.qty,
                    berat:val.berat * val.qty,
                    harga:val.harga,
                    sub_total:val.harga * val.qty,
                    product_id:val.product_id
                }
                Checkout.cart.push(dat);
            
            });
        
            
        });
        
    },
    updated: function () {
    },
    watch: {

    }
});





</script>
@endsection
	

