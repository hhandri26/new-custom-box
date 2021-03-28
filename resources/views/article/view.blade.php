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
               
                <div class="uk-width-2-3@m">
                    @foreach($table as $row)
                        <div class="uk-card uk-card-default" style="box-shadow: 0 0px 0px;">
                            <div class="uk-card-media-top">
                                <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
                                    <img class="uk-transition-scale-up uk-transition-opaque"
                                        src="{{asset('/public/images/article/'.$row->img)}}" alt="">
                                </div>
                            </div>
                            <div class="uk-card-body  uk-padding-small uk-margin-top">
                                <span class="model-title">
                                
                                    <span>
                                       <a href="{{route('blog_detail')}}?id={{$row->id}}" style="color:#666">{{$row->name}}</a> 
                                    </span>    
                                    <span class="date_blog">
                                       {{$row->date}}
                                    </span>
                                </span>
                                <br>
                            
                                <span >
                                    {!! substr( $row->description, 0, 100) . '...' !!}
                                </span> 
                                <br>
                                <span >
                                    <a href="{{route('blog_detail')}}?id={{$row->id}}" class="uk-button uk-button-default" style="color:#666">MORE DETAILS</a>
                                </span>
                            </div>
                            
                          
                        
                        </div>
                    @endforeach
                    {{ $table->links() }}
                </div>
                
                <div class=" uk-width-expand@m">
                    <form method="post" action="{{route('search_blog')}}" id="form-id">
                    {{ csrf_field() }}
                        <fieldset class="uk-fieldset">

                            <legend class="uk-legend">Search</legend>

                            <div class="uk-margin">
                                <input class="uk-input" type="text" id="search" name="search" placeholder="Search" style="width:70%">
                                <a href="#" class="uk-button uk-button-default" style="color:#666;width:28%;padding:1px" onclick="document.getElementById('form-id').submit();">
                                <span uk-icon="search"></span>
                                </a>
                            </div>

                        </fieldset>
                    </form>
                    <div class="uk-width-1-1 uk-text-center uk-text-left@m">
                        <span class="heading-title">
                            <span >
                                Lastest update.
                            </span>
                        </span>
                    </div>
                    @foreach($table as $row)
                        <div class="uk-card uk-card-default" style="box-shadow: 0 0px 0px;">
                            <div class="uk-card-media-top">
                                <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
                                    <img class="uk-transition-scale-up uk-transition-opaque"
                                        src="{{asset('/public/images/article/'.$row->img)}}" alt="">
                                </div>
                            </div>
                            <div class="uk-card-body  uk-padding-small uk-margin-top">
                                <span class="model-title">
                                
                                <span>
                                       <a href="{{route('blog_detail')}}?id={{$row->id}}" style="color:#666">{{$row->name}}</a> 
                                    </span>    
                                    <span class="date_blog">
                                       {{$row->date}}
                                    </span>  
                                </span>
                                <br>
                            
                                <span >
                                    {!! substr( $row->description, 0, 50) . '...' !!}
                                </span> 
                                <br>
                                <span >
                                    <a href="{{route('blog_detail')}}?id={{$row->id}}" class="uk-button uk-button-default" style="color:#666">MORE DETAILS</a>
                                </span>
                            </div>
                            
                           
                        
                        </div>
                    @endforeach
                   
                            <form method="post" action="{{route('search_blog')}}" id="search_bg">
                            {{ csrf_field() }}  
                            <ul class="uk-list uk-list-striped">
                                @foreach($category as $row)
                                <input type="hidden" value="{{$row->category_name}}" name="search">
                               
                                <li> <a href="#" style="color:#666"  onclick="document.getElementById('search_bg').submit();">{{$row->category_name}}</a></li>
                                
                                @endforeach
                                </ul>
                            </form>
                     
                 
                </div>
            </div>
        
               
               
            
            
        </div>
    </div>
</div>
                
                

@endsection