@extends('layout.main')

@section('css')
    <link rel="stylesheet" href="css/home.css">
@endsection

@section('title')
    HOME
@endsection

@section('content')
    <div class="menus">
        <a href="/lebel-harga">Lebel Harga</a>
        <a href="/input-data">Input Data</a>
    </div>
@endsection

@section('javascript')
    <script src="javascript/script.js"></script>
@endsection