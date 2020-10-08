@extends('layouts.home_new2')

@section('content')
<div class="uk-section uk-padding-remove-top" id="Contact">
    <div class="uk-container">
        <div class="uk-grid-large uk-margin-medium-top uk-margin-large-bottom uk-grid" uk-grid>
            <div class="uk-width-1-1 uk-text-center uk-text-left@m">
                <span class="heading-title">Contact Us.</span>
            </div>
            <div class="uk-width-1-1@m uk-first-column">
                <div class="uk-child-width-1-3@m" uk-grid>
                    <div v-for="row in contact">
                        <a :href="row.link" target="_blank" class="uk-link-reset">
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

            <div class="uk-width-1-1@m uk-text-center">
                <hr class="uk-divider-icon">
                <h4 class="uk-heading-light uk-margin-large-top">Operational Office Hour</h4>
                <div class="uk-margin uk-grid" uk-grid>
                    <div class="uk-width-expand uk-padding-remove-left uk-margin-left">
                        <p class="uk-margin-remove-bottom">
                            Monday - Friday :
                            <span style="color:#e9a6a5;">09:00 - 17:00</span>
                        </p>
                    </div>
                </div>
                <div class="uk-margin uk-grid" uk-grid>
                    <div class="uk-width-expand uk-padding-remove-left uk-margin-left">
                        <p class="uk-margin-remove-top">
                            Saturday & Sunday :
                            <span style="color:#e9a6a5;">Close</span>
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