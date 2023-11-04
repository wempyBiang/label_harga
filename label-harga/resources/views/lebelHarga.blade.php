@extends('layout.main')

@section('css')
    <link rel="stylesheet" href="css/style2.css">
@endsection

@section('title')
    Input Label Harga
@endsection

@section('content')
<form action="/lebel-harga" method="post">
    @csrf
    <div class="labels">
        <div class="label">
            <input type="text" name="nama_barang_1">
            <div class="hargas">
                <div class="harga">
                    <div class="harga-total">
                        <p>Rp <input type="number" name="harga_1" id="harga-1" class="input-harga"> <input type="text" name="satuan_1" id="satuan-1" class="input-satuan"> / <input type="number" name="jml_satuan_1" id="jml-satuan-1" class="input-jml-satuan"></p>
                    </div>
                    <div class="harga-pcs">
                        <p>(<span id="harga-satuan-1">0</span> <span class="satuan">/PCS</span>)</p>
                    </div>
                </div>
                <div class="harga">
                    <div class="harga-total">
                        <p>Rp <input type="number" name="harga_2" id="harga-2" class="input-harga"> <input type="text" name="satuan_2" id="satuan-2" class="input-satuan"> / <input type="number" name="jml_satuan_2" id="jml-satuan-2" class="input-jml-satuan"></p>
                    </div>
                    <div class="harga-pcs">
                        <p>(<span id="harga-satuan-2">0</span> <span class="satuan">/PCS</span>)</p>
                    </div>
                </div>
                <div class="harga">
                    <div class="harga-total">
                        <p>Rp <input type="number" name="harga_3" id="harga-3" class="input-harga"> <input type="text" name="satuan_3" id="satuan-3" class="input-satuan"> / <input type="number" name="jml_satuan_3" id="jml-satuan-3" class="input-jml-satuan"></p>
                    </div>
                    <div class="harga-pcs">
                        <p>(<span id="harga-satuan-3">0</span> <span class="satuan">/PCS</span>)</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="btn-section">
        <button type="submit">Kirim</button>
    </div>

</form>
@endsection

@section('javascript')
    <script src="javascript/script.js"></script>
@endsection