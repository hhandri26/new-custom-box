@extends('layouts.admin_tmp')
@section('content')
<?php $id=request()->id; ?>
<div class="fixed-action-btn horizontal" style="bottom: 45px; right: 24px;"  >
    <a href="#" onclick="SaveWarning()"  class="btn-floating btn-large" style="background-color: #4CAF50;color: #fff">
        <i style="font-size: 1.6em" class="fa fa-save fa-lg"></i>
    </a>
     <a href="#" onclick="back()" class="btn-floating btn-large" style="background-color: #FB0C03 ;color: #fff">
        <i style="font-size: 1.6em" class="fa  fa-arrow-circle-o-left "></i>
    </a>
</div>
<div class="box box-info" >
    <div class="box-header with-border">
        <div class="row">
            <div class="col-md-10"><h4 class="box-title">Form Add @if($id>0) Form Edit @endif</h4></div>
        </div>
    </div>
    <div class="box-body">
        <form class="form-horizontal">
            <div class="box-body1">
                <div class="panel panel-info">
                    <div class="panel-heading1"></div>     
                        <div class="panel-body">
                        <input type="hidden" id="id" value="{{$id}}">
                        <input type="hidden" id="url_save" value="{{route('admin_category_article_save') }}?id=">
                        <input type="hidden" id="url_back" value="{{ route('admin_category_article') }}">
                           

                            <div class="form-group">
                                <label for="category_name" class="col-sm-6 control-label1">Category Article Name</label>
                                <div class="col-sm-6">
                                    <input  type="text" id="category_name"  class="form-control" value="@if($id>0){{ $get['category_name']}} @endif"/>
                                </div>
                            </div>
                            
                            

                            
                        </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
@section('more_js')
<script>
function SaveWarning(){
    var id          =$('#id').val();
    var a           = {};
    a.category_name       = $('#category_name').val();
    a.url           = $('#url').val();
    var url_save    = $('#url_save').val() ;
    var url         = url_save+id+"&data="+'['+JSON.stringify(a)+']';
    AlertCheck('Apakah anda Yakin Menyimpan Data Ini?',url);
}

function back()
{
    var url_back=$('#url_back').val() ;
    location.href=url_back;
}


</script>

@endsection