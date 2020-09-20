@extends('layouts.admin_tmp')

@section('content')
<div class="row">
    <div class="pull-right">
        
      
    </div>
     <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
        <div class="x_title">
              <h2>Table<small></small></h2>
            <div class="clearfix"></div>
        </div>                      
        <div class="table-responsive m-b-20">
          <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
           <!--  <table class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%"> -->
                <thead>
                <tr>
                    <th style="width: 50px;">No</th>
                    <th>Customer Name</th>
                    <th>Total</th>
                    <th>Shipping Amount</th>
                    <th>Phone Number</th>
                    <th>Email</th>
                    <th>Courier</th>
                    <th>Status</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                    
                    <?php $no=1;?>
                    @foreach ($table as $row)
                   <tr>
                       <td>{{$no}}</td>
                       <td>{{$row->first_name}}</td>  
                       <td class="text-right">{{number_format($row->amount,2,',','.')}}</td>  
                       <td class="text-right">{{number_format($row->amount_shipping,2,',','.')}}</td>  
                       <td>{{$row->phone}}</td>  
                       <td>{{$row->email}}</td>  
                       <td>{{$row->courier}}</td>  
                       <td>{{$row->status}}</td>  
                       <td>
                        <a onclick="review_detail_transaction.openModal({{$row->id}})" class="btn btn-success">Detail</a>
                       </td>
                     
                                    
                     
                   </tr>
                   <?php $no++;?>

                   @endforeach

                </tbody>
            </table>

        </div>
    </div>
  </div>
</div>


@endsection
@section('more_js')
<script src="{{asset('public/js/page/transaction/review_detail_transaction.js')}}"></script>
@endsection