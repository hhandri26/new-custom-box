@extends('layouts.home_new2')

@section('content')
<div class="uk-section uk-padding-remove-top" id="Contact">
    <div class="uk-container">
        <div class="uk-grid-large uk-margin-medium-top uk-margin-large-bottom uk-grid" uk-grid>
            <div class="uk-width-1-1 uk-text-center uk-text-left@m">
                <span class="heading-title">
                    <span v-if="localStorage.lang == 'Eng'">
                        Contact Us.
                    </span>
                    <span v-else>
                        Hubungi kami 
                    </span>    
                </span>
            </div>
            <div class="uk-width-1-1@m uk-first-column">
                <div class="uk-child-width-1-3@m" uk-grid>
                    <div v-for="row in contact">
                        <a :href="row.link" target="_blank" class="uk-link-reset asasa">
                            <div class="uk-card uk-text-center card" style="border-radius: 20px;">
                                <div class="uk-card-title">
                                    <span class="uk-margin-large-top" uk-icon="icon: whatsapp; ratio: 3"></span>
                                </div>
                                <div class="uk-card-body">
                                    <span v-if="localStorage.lang == 'Eng'">
                                        @{{row.title_desc_eng}}
                                    </span>
                                    <span v-else>
                                        @{{row.title_desc}}
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
                        </a>
                    </div>
                

                </div>
            </div>
            <div style="margin:auto;margin-top:20px;">
                <a href="{{asset('public/catalog/custombox_catalog.pdf')}}" target="_blank" class="uk-link-reset asasa">
                    <div class="uk-card uk-text-center card" style="border-radius: 20px;">
                        <div class="uk-card-title">
                            <i class="icon-download"></i>
                        </div>
                        <div class="" style="padding:20px;">
                            <span v-if="localStorage.lang == 'Eng'">
                                Download Catalog
                            </span>
                            <span v-else>
                                Download Katalog
                            </span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="uk-width-1-1@m uk-text-center" style="margin-top:20px;">
                <hr class="uk-divider-icon">
                <h4 class="uk-heading-light uk-margin-large-top">
                    <span v-if="localStorage.lang == 'Eng'">
                        Operational Office Hour
                    </span>
                    <span v-else>
                        Jam Kerja Operasional 
                    </span>
                </h4>
                <div class="uk-margin uk-grid" uk-grid>
                    <div class="uk-width-expand uk-padding-remove-left uk-margin-left">
                        <p class="uk-margin-remove-bottom">
                            <span v-if="localStorage.lang == 'Eng'">
                                Monday - Friday :
                            </span>
                            <span v-else>
                                Senin - Jumat :
                            </span>
                            <span style="color:#e9a6a5;">09:00 - 17:00</span>
                        </p>
                    </div>
                </div>
                <div class="uk-margin uk-grid" uk-grid>
                    <div class="uk-width-expand uk-padding-remove-left uk-margin-left">
                        <p class="uk-margin-remove-top">
                            <span v-if="localStorage.lang == 'Eng'">
                                Saturday & Sunday :
                            </span>
                            <span v-else>
                                Sabtu & Minggu :
                            </span>
                            <span style="color:#e9a6a5;">
                                <span v-if="localStorage.lang == 'Eng'">
                                    Close
                                </span>
                                <span v-else>
                                    Tutup
                                </span>
                            </span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('more_js')
<script>

var Contact = new Vue({
    el: '#Contact',
    data: {
        contact:[]

    },
    methods: {
    },
    created: function () {
        axios.get("{{route('contact_info_front')}}")
        .then(function (data) {
            Contact.contact = data.data.data;
        });
    },
    mounted: function () {  
    },
    updated: function () {
    },
    watch: {

    }
})
</script>
@endsection