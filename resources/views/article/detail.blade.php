@extends('layouts.home_new2')

@section('content')
<style>
.date_blog{
    width: 180px;
    height: 60px;
    background: #ccc;
    text-align: center;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    position: absolute;
    top: 0;
    right: 0;
    padding: 15px;
}
</style>

<div class="uk-section uk-padding-remove-top" id="Shop">
    <div class="uk-container">
        <div class="uk-grid uk-padding uk-margin-remove-top" uk-grid
            uk-height-match="target: > div > div > .uk-card-body"
            uk-scrollspy="cls: uk-animation-slide-bottom; target: .uk-card; delay: 500; repeat: false">

            <div class="uk-width-1-1 uk-text-center uk-text-left@m">
                <span class="heading-title">
                    <span >
                        Blog.
                    </span>
                </span>
            </div>
            <div class="uk-grid">
               
                <div class="uk-width-1-1">
                  
                        <div class="uk-card uk-card-default" style="box-shadow: 0 0px 0px;">
                            <div class="uk-card-media-top">
                                <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
                                    <img class="uk-transition-scale-up uk-transition-opaque"
                                        src="{{asset('/public/images/article/'.$get['img'])}}" alt="">
                                </div>
                            </div>
                            <div class="uk-card-body  uk-padding-small uk-margin-top">
                                <span class="model-title">
                                
                                    <span>
                                       <a href="" style="color:#666">{{$get['name']}}</a> 
                                    </span>    
                                    <span class="date_blog">
                                       {{$get['date']}}
                                    </span>
                                </span>
                                <br>
                            
                                <span >
                                    {!!  $get['description'] !!}
                                </span> 
                               
                            </div>
                            
                          
                        
                        </div>
                 
                </div>
                
               
            </div>
        
               
               
            
            
        </div>
        <div class="sharethis-inline-share-buttons"></div>
    </div>
</div>
                
                

@endsection