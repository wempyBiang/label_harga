@extends('layout.main')

@section('css')
    <link rel="stylesheet" href="css/style2.css">
@endsection

@section('title')
    Input Label Harga
@endsection

@section('content')
<form action="/final" method="post">
    @csrf
    <div class="labels">
        <div class="label">
            <input type="text" name="nama_barang">
            <div class="hargas">
                <div class="harga">
                    <div class="harga-total">
                        <p>Rp <input type="number" name="harga-1" id="harga-1" class="input-harga"> <input type="text" name="satuan-1" id="satuan-1" class="input-satuan"> / <input type="number" name="jml-satuan-1" id="jml-satuan-1" class="input-jml-satuan"></p>
                    </div>
                    <div class="harga-pcs">
                        <p>(<span id="harga-satuan-1">0</span> <span class="satuan">/PCS</span>)</p>
                    </div>
                </div>
                <div class="harga">
                    <div class="harga-total">
                        <p>Rp <input type="number" name="harga-2" id="harga-2" class="input-harga"> <input type="text" name="satuan-2" id="satuan-2" class="input-satuan"> / <input type="number" name="jml-satuan-2" id="jml-satuan-2" class="input-jml-satuan"></p>
                    </div>
                    <div class="harga-pcs">
                        <p>(<span id="harga-satuan-2">0</span> <span class="satuan">/PCS</span>)</p>
                    </div>
                </div>
                <div class="harga">
                    <div class="harga-total">
                        <p>Rp <input type="number" name="harga-3" id="harga-3" class="input-harga"> <input type="text" name="satuan-3" id="satuan-3" class="input-satuan"> / <input type="number" name="jml-satuan-3" id="jml-satuan-3" class="input-jml-satuan"></p>
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