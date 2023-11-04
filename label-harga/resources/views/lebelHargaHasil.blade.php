@extends('layout.main')

@section('css')
    <link rel="stylesheet" href="css/style.css">
@endsection

@section('Title')
    Final Label
@endsection

@section('content')
<div class="label">
    <h1 class="nama-barang">{{Str::upper($data->nama_barang_1)}}</h1>
    <div class="hargas">
        <div class="harga">
            <div class="harga-total">
                <p>Rp <span>{{$data->harga_1}}</span> <span class="satuan">{{$data->satuan_1}}/{{$data->jml_satuan_1}}</span></p>
            </div>
            <div class="harga-pcs">
                <p>(<span>{{$data->harga_1/$data->jml_satuan_1}}</span> <span class="satuan">/PCS</span>)</p>
            </div>
        </div>
        <div class="harga">
            <div class="harga-total">
                <p>Rp <span>{{$data->harga_2}}</span> <span class="satuan">{{$data->satuan_2}}/{{$data->jml_satuan_2}}</span></p>

            </div>
            <div class="harga-pcs">
                <p>(<span>{{$data->harga_2/$data->jml_satuan_2}}</span> <span class="satuan">/PCS</span>)</p>
            </div>
        </div>
        <div class="harga">
            <div class="harga-total">
                <p>Rp <span>{{$data->harga_3}}</span> <span class="satuan">{{$data->satuan_3}}/{{$data->jml_satuan_3}}</span></p>

            </div>
            <div class="harga-pcs">
                <p>(<span>{{$data->harga_3/$data->jml_satuan_3}}</span> <span class="satuan">/PCS</span>)</p>
            </div>
        </div>
    </div>
</div>
@endsection