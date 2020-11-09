<h3>Request Baru Dari , {{ $first_name }} !</h3>
<p>Model yang di pesan :{{ $product }}</p>
 
<p>Pesanan Baru dari {{$first_name}}</p>
<p>No Hp : {{$phone_number}}</p>
<table>
    
    <tbody>
        <tr>
            <td>Model</td>
            <td>:{{ $product }}</td>
        </tr>
        <tr>
            <td>Size</td>
            <td>:{{ $size }}</td>
        </tr>
        <tr>
            <td>Note</td>
            <td>{{$note}}</td>
        </tr>
        <tr>
            <td>Provinsi</td>
            <td>{{$province}}</td>
        </tr>
        <tr>
            <td>Kota</td>
            <td>{{$city}}</td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>{{$address}}</td>
        </tr>
        <tr>
            <td>Zip Kode</td>
            <td>{{$zip_code}}</td>
        </tr>

    </tbody>
</table>