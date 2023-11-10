@extends('layout.main')

@section('css')
    <!-- <link rel="stylesheet" href="css/home.css"> -->
@endsection

@section('title')
    HOME
@endsection

@section('content')
    <form action="/test-database" method="post">
        @csrf
        <input type="text" name="kode" id=""> <br>
        <input type="submit" value="kirim">
    </form>
@endsection

@section('javascript')
    <!-- <script src="javascript/script.js"></script> -->
@endsection