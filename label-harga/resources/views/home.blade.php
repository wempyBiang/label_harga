@extends('layout.main')

@section('css')
    <link rel="stylesheet" href="css/home.css">
@endsection

@section('title')
    HOME
@endsection

@section('content')
    <div class="menus">
        <a href="/lebel-harga">Input Manual Lebel Harga</a>
        {{-- <a href="/input-data">Input Data</a> --}}
        {{-- <a href="/lebel-database">Lebel dari database</a> --}}
        <a href="/input-kode">Input Menggunakan Kode</a>
        {{-- <a href="/test-database">Test Database eisdata</a> --}}

    </div>
@endsection

@section('javascript')
    <script src="javascript/script.js"></script>
@endsection