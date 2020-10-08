@extends('layouts.home')

@section('content')

<section class="section-intro" style="padding-top: 90px">
    <div class="content-intro bg-white p-t-77 p-b-133">
        <div class="container">
            <div class="header-intro">
                
            </div>
        </div>
        <div class="container">
            <div class="row">
                

                <div class="col-sm-12 col-md-12 p-t-50">
                    <div class="col-md-12">
                        <div class="card shadow mb-4" style="height:1500px">
                        
                            <div class="card-body" >
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                        <tr>
                                            <th>Produk</th>
                                            <th style="width:100px"></th>
                                            <th>Tanggal</th>
                                            <th>Jam</th>
                                            <th>Kurir</th>
                                            <th>Ongkos Kirim</th>
                                            <th>Nomor Resi</th>
                                        </tr>
                                        </thead>
                                      
                                        <tbody>
                                            @foreach ($table as $row)
                                                <tr>
                                                    <td>{{$row->produk_nama}}</td>
                                                    <td><img src="{{asset('/public/images/product/'.$row->produk_img)}}" style="width:100%"  alt=""></td>
                                                    <td>{{$row->date}}</td>
                                                    <td>{{$row->time}}</td>
                                                    <td>{{$row->courier}}</td>
                                                    <td>{{$row->amount_shipping}}</td>
                                                    <td>{{$row->no_resi_pengiriman}}</td>
                                                </tr>
                                                
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
@section('more_js')
<script>
$(document).ready( function () {
    $('#dataTable').DataTable();
} );
</script>
@endsection