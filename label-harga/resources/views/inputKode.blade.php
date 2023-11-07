@extends('layout.main')

@section('css')
    {{-- <link rel="stylesheet" href="css/home.css"> --}}
@endsection

@section('title')
    INPUT KODE
@endsection

@section('content')
    <form action="/input-kode" method="post">
        @csrf
        <textarea name="kodes" id="" cols="30" rows="10"></textarea>
        <button type="submit">Kirim</button>
    </form>
@endsection

@section('javascript')
    {{-- <script src="javascript/script.js"></script> --}}
@endsection