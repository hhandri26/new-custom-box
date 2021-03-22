@extends('layouts.home_new2')

@section('content')
<div class="uk-section" id="sample">
    <div class="uk-container">
        <div class="uk-flex uk-flex-center">
            <div class="uk-width-1-3@m uk-width-1-1">
                <form class="uk-form">
                    <div class="uk-gird" uk-grid>
                        <div class="uk-width-1-1 uk-text-center uk-text-left@m">
                            <span class="heading-title">
                                <span v-if="localStorage.lang == 'Eng'">
                                    Sample Request Form.
                                </span>
                                <span v-else>
                                    Contoh Formulir Permintaan 
                                </span>
                            </span>
                        </div>

                        <div class="uk-width-1-2">
                            <label class="uk-form-label" for="form-stacked-text">
                                <span v-if="localStorage.lang == 'Eng'">
                                    First Name
                                </span>
                                <span v-else>
                                    Nama depan
                                </span>
                            <sup>*</sup></label>
                            <div class="uk-form-controls">
                                <input class="uk-input uk-form-small" v-model="data.first_name" id="form-stacked-text" type="text"
                                    placeholder="">
                            </div>
                        </div>
                        <div class="uk-width-1-2">
                            <label class="uk-form-label" for="form-stacked-text">
                                <span v-if="localStorage.lang == 'Eng'">
                                    Last Name (optional)
                                </span>
                                <span v-else>
                                    Nama Belakang (opsional) 
                                </span>    
                            </label>
                            <div class="uk-form-controls">
                                <input class="uk-input uk-form-small" v-model="data.last_name" id="form-stacked-text" type="text"
                                    placeholder="">
                            </div>
                        </div>
                        <div class="uk-width-1-1 uk-margin-small-top">
                            <label class="uk-form-label" for="form-stacked-text">
                                <span v-if="localStorage.lang == 'Eng'">
                                    Address
                                </span>
                                <span v-else>
                                    Alamat 
                                </span>    
                            <sup>*</sup></label>
                            <div class="uk-form-controls">
                                <input class="uk-input uk-form-small address" v-model="data.address" id="form-stacked-text" type="text"
                                    placeholder="street, street number, apartment">
                            </div>
                        </div>
                        <div class="uk-width-1-1 uk-margin-small-top">
                            <label class="uk-form-label" for="form-stacked-text">
                                <span v-if="localStorage.lang == 'Eng'">
                                    Province
                                </span>
                                <span v-else>
                                    Propinsi 
                                </span>    
                            <sup>*</sup></label>
                            <div class="uk-form-controls">
                                <input class="uk-input uk-form-small address" v-model="data.province_id" id="form-stacked-text" type="text"
                                    placeholder="Aceh, Jawa Barat, Banten">
                            </div>
                        </div>
     
                       
                        <div class="uk-width-1-2 uk-margin-small-top">
                            <label class="uk-form-label" for="form-stacked-text">
                                <span v-if="localStorage.lang == 'Eng'">
                                    Zip Code (Optional)
                                </span>
                                <span v-else>
                                    Kode Pos (Opsional) 
                                </span>    
                            </label>
                            <div class="uk-form-controls">
                                <input class="uk-input uk-form-small" v-model="data.zip_code" id="form-stacked-text" type="text"
                                    placeholder="">
                            </div>
                        </div>
                        <div class="uk-width-1-1 uk-margin-small-top">
                            <label class="uk-form-label" for="form-stacked-text">
                                <span v-if="localStorage.lang == 'Eng'">
                                    Phone
                                </span>
                                <span v-else>
                                    Telepon 
                                </span>    
                            <sup>*</sup></label>
                            <div class="uk-form-controls">
                                <input class="uk-input uk-form-small" v-model="data.phone_number" id="form-stacked-text" type="text"
                                    placeholder="">
                            </div>
                        </div>
                        <div class="uk-width-1-1 uk-margin-small-top">
                            <label class="uk-form-label" for="form-stacked-text">
                                <span v-if="localStorage.lang == 'Eng'">
                                    Email Address
                                </span>
                                <span v-else>
                                    Alamat email
                                </span>    
                            <sup>*</sup></label>
                            <div class="uk-form-controls">
                                <input class="uk-input uk-form-small" v-model="data.email" id="form-stacked-text" type="text"
                                    placeholder="">
                            </div>
                        </div>
                        <div class="uk-width-1-1 uk-margin-small-top">
                            <label class="uk-form-label" for="form-stacked-text">
                                <span v-if="localStorage.lang == 'Eng'">
                                    Model
                                </span>
                                <span v-else>
                                    Model 
                                </span>    
                            <sup>*</sup></label>
                            <div class="uk-form-controls">
                                <select  v-model="product_id" class="uk-select"  @change="get_size()" >
                                    <option v-for="row in product" :value="row.title" >
                                        <span v-if="localStorage.lang == 'Eng'">
                                            @{{ row.title }}
                                        </span>
                                        <span v-else>
                                            @{{ row.title_id }}
                                        </span>
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="uk-width-1-1 uk-margin-small-top">
                            <label class="uk-form-label" for="form-stacked-text">
                                <span v-if="localStorage.lang == 'Eng'">
                                    Reference Size
                                </span>
                                <span v-else>
                                    Ukuran Referensi 
                                </span>
                            <sup>*</sup></label>
                            <div class="uk-form-controls">
                                <input class="uk-input uk-form-small" v-model="size_id" id="form-stacked-text" type="text"
                                    placeholder="Length x Width x Height">
                            </div>
                        </div>
                        <div class="uk-width-1-1 uk-margin-small-top">
                            <label class="uk-form-label" for="form-stacked-text">
                                <span v-if="localStorage.lang == 'Eng'">
                                    Notes (optional)
                                </span>
                                <span v-else>
                                    Catatan (opsional) 
                                </span>    
                            </label>
                            <div class="uk-form-controls">
                                <textarea class="uk-textarea" rows="3" v-model="data.note"
                                    placeholder="Notes about your order, e.g special notes for delivery"></textarea>
                            </div>
                        </div>
                        <div class="uk-width-1-1 uk-margin-small-top">
                            <label class="uk-form-label" for="form-stacked-text">
                                <span v-if="localStorage.lang == 'Eng'">
                                    Term & Conditions*
                                </span>
                                <span v-else>
                                    Syarat & Ketentuan* 
                                </span>    
                            </label>
                            <ul class="uk-list-disc">
                                <li>
                                    <p class="uk-margin-remove">
                                        <span v-if="localStorage.lang == 'Eng'">
                                            The sample to be sent is a sample
                                            available, with
                                            the closest size to the listed reference size. 
                                        </span>
                                        <span v-else>
                                            Sample yang akan dikirimkan adalah sample yang
                                            tersedia, dengan
                                            ukuran terdekat dengan ukuran referensi yang dicantumkan.
                                        </span>    
                                    </p>
                                </li>
                                <li class="uk-margin-remove-top">
                                    <p class="uk-margin-remove">
                                        <span v-if="localStorage.lang == 'Eng'">
                                            Samples from us are free, for 
                                        </span>
                                        <span v-else>
                                            Sample dari kita gratis, untuk
                                        </span>    
                                        <span class="text-bold">
                                            <span>
                                                <span v-if="localStorage.lang == 'Eng'">
                                                    postage covered receiver. 
                                                </span>
                                                <span v-else>
                                                    ongkir ditanggung penerima.
                                                </span>
                                            </span>
                                            <!-- <span>
                                                <span v-if="localStorage.lang == 'Eng'">
                                                    postage borne by the recipient. 
                                                </span>
                                                <span v-else>
                                                    ongkir ditanggung penerima.
                                                </span>
                                            </span> -->
                                        </span>
                                    </p>
                                </li>
                                <li class="uk-margin-remove-top">
                                    <p class="uk-margin-remove">
                                        <span v-if="localStorage.lang == 'Eng'">
                                            Jabodetabek delivery will use gosend. 
                                        </span>
                                        <span v-else>
                                            Pengiriman jabodetabek akan menggunakan gosend.
                                        </span>    
                                    </p>
                                </li>
                                <li class="uk-margin-remove-top">
                                    <p class="uk-margin-remove">
                                        <span v-if="localStorage.lang == 'Eng'">
                                            Deliveries out of town will use J&T. 
                                        </span>
                                        <span v-else>
                                            Pengiriman keluar kota akan menggunakan J&T.
                                        </span>    
                                    </p>
                                </li>
                            </ul>
                            <p class="tnc">
                                <span v-if="localStorage.lang == 'Eng'">
                                    2 pilihan sample:
                                </span>
                                <span v-else>
                                    2 sample options:
                                </span>
                            </p>
                            <p class="tnc uk-margin-remove-bottom text-bold">
                                <span v-if="localStorage.lang == 'Eng'">
                                    FREE MATERIAL SAMPLE 
                                </span>
                                <span v-else>
                                    SAMPLE BAHAN FREE
                                </span>    
                           </p>
                            <ul class="uk-list-disc uk-margin-remove-top">
                                <li>
                                    <p class="uk-margin-remove">
                                        <span v-if="localStorage.lang == 'Eng'">
                                            Sample model e-Mailer with the closest size 
                                        </span>
                                        <span v-else>
                                            Sample model e-Mailer dengan ukuran terdekat
                                        </span>    
                                    </p>
                                </li>
                                <li class="uk-margin-remove-top">
                                    <p class="uk-margin-remove">
                                        <span v-if="localStorage.lang == 'Eng'">
                                            Sample ready ready to send 
                                        </span>
                                        <span v-else>
                                            Sample ready siap kirim
                                        </span>    
                                    </p>
                                </li>
                                <li class="uk-margin-remove-top">
                                    <p class="uk-margin-remove">
                                        <span v-if="localStorage.lang == 'Eng'">
                                            Sample from us is FREE (postage borne by the recipient) 
                                        </span>
                                        <span v-else>
                                            Sample dari kita FREE (ongkir ditanggung penerima)
                                        </span>    
                                    </p>
                                </li>
                            </ul>
                            <p class="tnc uk-margin-remove-bottom text-bold">
                                <span v-if="localStorage.lang == 'Eng'">
                                    SAMPLE REAL
                                </span>
                                <span v-else>
                                    SAMPLE REAL
                                </span>    
                            </p>
                            <ul class="uk-list-disc uk-margin-remove-top">
                                <li>
                                    <p class="uk-margin-remove">
                                        <span v-if="localStorage.lang == 'Eng'">
                                            Sample model and size according to request 
                                        </span>
                                        <span v-else>
                                            Sample model dan ukuran sesuai request
                                        </span>    
                                    </p>
                                </li>
                                <li class="uk-margin-remove-top">
                                    <p class="uk-margin-remove">
                                        <span v-if="localStorage.lang == 'Eng'">
                                            Manufacture time 8-12 days 
                                        </span>
                                        <span v-else>
                                            Waktu pembuatan 8-12 hari
                                        </span>    
                                    </p>
                                </li>
                                <li class="uk-margin-remove-top">
                                    <p class="uk-margin-remove">
                                    <span v-if="localStorage.lang == 'Eng'">
                                        Revisions such as changes in size or model will
                                        charged.
                                        (Make sure the size and model are correct) 
                                    </span>
                                    <span v-else>
                                        Revisi seperti pergantian ukuran atau model akan
                                        dikenakan biaya.
                                        (Pastikan ukuran dan model sudah benar)
                                    </span>
                                </p>
                                </li>
                                <li class="uk-margin-remove-top">
                                    <p class="uk-margin-remove">
                                        <span v-if="localStorage.lang == 'Eng'">
                                            The cost of making real samples Rp. 1,000,000 / model
                                            (fee will be
                                            used as a DP box making after the manufacturing process continues) 
                                        </span>
                                        <span v-else>
                                            Biaya pembuatan sample real Rp. 1,000,000/ model
                                            (biaya akan
                                            dijadikan DP pembuatan box setelah proses pembuatan dilanjutkan)
                                        </span>    
                                    </p>
                                </li>
                            </ul>
                            <p class="tnc uk-margin-remove-bottom text-bold">
                                <span v-if="localStorage.lang == 'Eng'">
                                    For more information, please contact us directly 
                                </span>
                                <span v-else>
                                    Untuk info lebih lanjut bisa langsung menghubungi kami
                                </span>    
                            </p>
                        </div>
                        <div class="uk-width-1-1">
                            <a class="uk-button uk-width-1-1"
                                style="background-color: #e9a6a5; color: #FFFFFF;;" @click="request()">
                                <span v-if="localStorage.lang == 'Eng'">
                                    get sample
                                </span>
                                <span v-else>
                                    get sample
                                </span>
                            </a>
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