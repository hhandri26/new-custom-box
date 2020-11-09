@extends('layouts.home_new2')

@section('content')
<div class="uk-section" id="sample">
    <div class="uk-container">
        <div class="uk-flex uk-flex-center">
            <div class="uk-width-1-3@m uk-width-1-1">
                <form class="uk-form">
                    <div class="uk-gird" uk-grid>
                        <div class="uk-width-1-1 uk-text-center uk-text-left@m">
                            <span class="heading-title">Sample Request Form.</span>
                        </div>

                        <div class="uk-width-1-2">
                            <label class="uk-form-label" for="form-stacked-text">First Name<sup>*</sup></label>
                            <div class="uk-form-controls">
                                <input class="uk-input uk-form-small" v-model="data.first_name" id="form-stacked-text" type="text"
                                    placeholder="">
                            </div>
                        </div>
                        <div class="uk-width-1-2">
                            <label class="uk-form-label" for="form-stacked-text">Last Name (optional)</label>
                            <div class="uk-form-controls">
                                <input class="uk-input uk-form-small" v-model="data.last_name" id="form-stacked-text" type="text"
                                    placeholder="">
                            </div>
                        </div>
                        <div class="uk-width-1-1 uk-margin-small-top">
                            <label class="uk-form-label" for="form-stacked-text">Address<sup>*</sup></label>
                            <div class="uk-form-controls">
                                <input class="uk-input uk-form-small address" v-model="data.address" id="form-stacked-text" type="text"
                                    placeholder="street, street number, apartment">
                            </div>
                        </div>
                        <div class="uk-width-1-1 uk-margin-small-top">
                            <label class="uk-form-label" for="form-stacked-text">Province<sup>*</sup></label>
                            <div class="uk-form-controls">
                              
                                <input class="uk-input uk-form-small address" v-model="data.province_id" id="form-stacked-text" type="text"
                                    placeholder="Aceh, Jawa Barat, Banten">
                            </div>
                        </div>
     
                       
                        <div class="uk-width-1-2 uk-margin-small-top">
                            <label class="uk-form-label" for="form-stacked-text">Zip Code (Optional)</label>
                            <div class="uk-form-controls">
                                <input class="uk-input uk-form-small" v-model="data.zip_code" id="form-stacked-text" type="text"
                                    placeholder="">
                            </div>
                        </div>
                        <div class="uk-width-1-1 uk-margin-small-top">
                            <label class="uk-form-label" for="form-stacked-text">Phone<sup>*</sup></label>
                            <div class="uk-form-controls">
                                <input class="uk-input uk-form-small" v-model="data.phone_number" id="form-stacked-text" type="text"
                                    placeholder="">
                            </div>
                        </div>
                        <div class="uk-width-1-1 uk-margin-small-top">
                            <label class="uk-form-label" for="form-stacked-text">Email Address<sup>*</sup></label>
                            <div class="uk-form-controls">
                                <input class="uk-input uk-form-small" v-model="data.email" id="form-stacked-text" type="text"
                                    placeholder="">
                            </div>
                        </div>
                        <div class="uk-width-1-1 uk-margin-small-top">
                            <label class="uk-form-label" for="form-stacked-text">Model<sup>*</sup></label>
                            <div class="uk-form-controls">
                                <select  v-model="product_id" class="uk-select"  @change="get_size()" >
                                    <option v-for="row in product" :value="row.title" > @{{ row.title }} </option>
                                </select>
                               
                            </div>
                        </div>
                        <div class="uk-width-1-1 uk-margin-small-top">
                            <label class="uk-form-label" for="form-stacked-text">Reference Size<sup>*</sup></label>
                            <div class="uk-form-controls">
                                <input class="uk-input uk-form-small" v-model="size_id" id="form-stacked-text" type="text"
                                    placeholder="Length x Width x Height">
                            </div>
                        </div>
                        <div class="uk-width-1-1 uk-margin-small-top">
                            <label class="uk-form-label" for="form-stacked-text">Notes (optional)</label>
                            <div class="uk-form-controls">
                                <textarea class="uk-textarea" rows="3" v-model="data.note"
                                    placeholder="Notes about your order, e.g special notes for delivery"></textarea>
                            </div>
                        </div>
                        <div class="uk-width-1-1 uk-margin-small-top">
                            <label class="uk-form-label" for="form-stacked-text">Term & Conditions*</label>
                            <ul class="uk-list-disc">
                                <li>
                                    <p class="uk-margin-remove">Sample yang akan dikirimkan adalah sample yang
                                        tersedia, dengan
                                        ukuran terdekat dengan ukuran referensi yang dicantumkan.</p>
                                </li>
                                <li class="uk-margin-remove-top">
                                    <p class="uk-margin-remove">Sample dari kita gratis, untuk <span
                                            class="text-bold">ongkir ditanggung
                                            penerima.</span></p>
                                </li>
                                <li class="uk-margin-remove-top">
                                    <p class="uk-margin-remove">Pengiriman jabodetabek akan menggunakan gosend.</p>
                                </li>
                                <li class="uk-margin-remove-top">
                                    <p class="uk-margin-remove">Pengiriman keluar kota akan menggunakan J&T.</p>
                                </li>
                               
                            </ul>
                           
                            <p class="tnc">2 pilihan sample:</p>
                            <p class="tnc uk-margin-remove-bottom text-bold">SAMPLE BAHAN FREE</p>
                            <ul class="uk-list-disc uk-margin-remove-top">
                                <li>
                                    <p class="uk-margin-remove">Sample model e-Mailer dengan ukuran terdekat</p>
                                </li>
                                <li class="uk-margin-remove-top">
                                    <p class="uk-margin-remove">Sample ready siap kirim</p>
                                </li>
                                <li class="uk-margin-remove-top">
                                    <p class="uk-margin-remove">Sample dari kita FREE (ongkir ditanggung penerima)
                                    </p>
                                </li>
                            </ul>
                            <p class="tnc uk-margin-remove-bottom text-bold">SAMPLE REAL</p>
                            <ul class="uk-list-disc uk-margin-remove-top">
                                <li>
                                    <p class="uk-margin-remove">Sample model dan ukuran sesuai request</p>
                                </li>
                                <li class="uk-margin-remove-top">
                                    <p class="uk-margin-remove">Waktu pembuatan 8-12 hari</p>
                                </li>
                                <li class="uk-margin-remove-top">
                                    <p class="uk-margin-remove">Revisi seperti pergantian ukuran atau model akan
                                        dikenakan biaya.
                                        (Pastikan ukuran dan model sudah benar)</p>
                                </li>
                                <li class="uk-margin-remove-top">
                                    <p class="uk-margin-remove">Biaya pembuatan sample real Rp. 1,000,000/ model
                                        (biaya akan
                                        dijadikan DP pembuatan box setelah proses pembuatan dilanjutkan)</p>
                                </li>
                               
                            </ul>
                            <p class="tnc uk-margin-remove-bottom text-bold">Untuk info lebih lanjut bisa langsung menghubungi kami</p>
                        </div>
                        <div class="uk-width-1-1">
                            <a class="uk-button uk-width-1-1"
                                style="background-color: #e9a6a5; color: #FFFFFF;;" @click="request()">get sample</a>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@section('more_js')
<script src="{{asset('public/front/')}}/vendor/sweetalert/sweetalert.min.js"></script>
<script>
var sample = new Vue({
    el: '#sample',
    data: {
        data:{
            first_name:'',
            last_name:'',
            district:'',
            zip_code:'',
            email:'',
            phone_number:'',
            address:'',
            note:''

        },
        provinsi:[],
        city:[],
        province_id:'',
        city_id:'',
        product:[],
        size:[],
        product_id:'',
        size_id:'',
        address:'',
        note:''
       

    },
    methods: {
        get_size:function(){
            var id = sample.product_id;
            axios.get("{{route('get_size_product_front')}}?id="+id)
            .then(function (data) {
                sample.size = data.data.data;
    
            });

        },
        get_city:function(){
            sample.city=[];
            var id = sample.province_id;
            axios.get("{{route('get_city_front')}}?provinsi_id="+id)
            .then(function (data) {
                sample.city = data.data;

            
            
            });

        },
        request:function(){
            if( sample.data.first_name!=='' && sample.data.address!=='' && sample.data.province_id!==''  && sample.product_id!=='' && sample.size_id!==''){
                var dat = {
					_token: $('meta[name="csrf-token"]').attr('content'),
                    id_product : sample.product_id,
                    id_size    : sample.size_id,
                    province : sample.data.province_id,
                    first_name:sample.data.first_name,
                    last_name:sample.data.last_name,
                    district:sample.data.district,
                    zip_code:sample.data.zip_code,
                    email:sample.data.email,
                    phone_number:sample.data.phone_number,
                    address:sample.data.address,
                    note:sample.data.note

                };
                axios.post("{{route('request_sample_front')}}", dat).then(function (response) {                      
                  
                       
                        Swal.fire(
                            'Success',
                            'Request Sent',
                            'success'
                        ).then((value) => {
                            window.location.href = "{{route('models')}}"
                        });
                    
                }).catch(function (error) {
                    console.log(error);    
                });
            }else{
                Swal.fire(
                    'Error',
                    'Please Fill The Column ',
                    'error'
                )
            }
         

        }
    },
    created: function () {
        axios.get("{{route('get_provinsi')}}")
        .then(function (data) {
            sample.provinsi = data.data;

           
        
        });
        axios.get("{{route('models_front')}}")
        .then(function (data) {
            sample.product = data.data;

           
        
        });
    },
    mounted: function () {  
        // var member_id = localStorage.getItem("member_id");
        // if(member_id==null){
        //     Swal.fire(
        //         'error',
        //         'Please Login',
        //         'error'
        //     ).then((value) => {
        //         window.location.href = "{{route('login_member')}}"
               
        //     });

        // }else{

        // }
    },
    updated: function () {
    },
    watch: {

    }
})
</script>
@endsection