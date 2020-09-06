@extends('layouts.home_new2')

@section('content')
<div class="uk-section uk-padding-remove-top">
        <div class="uk-container">
            <div class="uk-grid uk-padding uk-margin-remove-top" uk-grid
                uk-height-match="target: > div > div > .uk-card-body"
                uk-scrollspy="cls: uk-animation-slide-bottom; target: .uk-card; delay: 500; repeat: false">

                <div class="uk-width-1-1 uk-text-center uk-text-left@m">
                    <span class="heading-title">Our Box Model.</span>
                </div>
                @foreach($models as $row)
                    <div class="uk-width-1-4@m uk-width-1-2">
                        <div class="uk-card uk-card-default" style="box-shadow: 0 0px 0px;">
                            <div class="uk-card-media-top">
                                <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
                                    <img class="uk-transition-scale-up uk-transition-opaque"
                                        src="{{asset('/public/images/models/'.$row->img)}}" alt="">
                                </div>
                            </div>
                            <div class="uk-card-body uk-text-center uk-padding-small uk-margin-top">
                                <span class="model-title">{{$row->title}}</span>
                                <p class="model-desc">{{$row->suitable}}</p>
                            </div>
                            <div class="uk-card-footer uk-text-center uk-padding-remove-top uk-padding-remove-left uk-padding-remove-right"
                                style="border-top: 0px;">
                                <a href="{{route('models_detail')}}?id={{$row->id}}" id="model-link">MORE DETAILS</a>
                            </div>
                        </div>
                    </div>
                @endforeach
              

            </div>
        </div>
    </div>
    @endsection
@section('more_js')
<script>
var Shop = new Vue({
    el: '#Shop',
    data: {
        gallery:[]

    },
    methods: {
    },
    created: function () {
         
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