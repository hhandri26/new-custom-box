@extends('layouts.home_new2')

@section('content')
<div class="uk-section uk-padding-remove-top" id="Gallery">
    <div class="uk-container">
        <div class="uk-grid uk-padding uk-margin-remove-top" uk-grid="masonry: true"
            uk-scrollspy="cls: uk-animation-fade; target: .uk-inline; delay: 100; repeat: false">

            <div class="uk-width-1-1 uk-text-center uk-text-left@m">
                <span class="heading-title">Our Box Gallery.</span>
            </div>

            <div class="uk-child-width-1-4@m uk-child-width-1-2" uk-grid uk-lightbox="animation: scale">
                <div  v-for="row in gallery">
                    <div class="uk-card uk-card-default uk-card-hover uk-card-body uk-padding-remove">
                        <a class="uk-inline" :href="row.img" :data-caption="row.title">
                            <img v-bind:src="row.img" alt="">
                        </a>
                    </div>

                    
                </div>
                
            </div>

        </div>
    </div>
</div>

@endsection
@section('more_js')
<script>
var Gallery = new Vue({
    el: '#Gallery',
    data: {
        gallery:[]

    },
    methods: {
    },
    created: function () {
        axios.get("{{route('project_front')}}")
        .then(function (data) {
            Gallery.gallery = data.data.data;
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