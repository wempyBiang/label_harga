@extends('layout.main')

@section('css')
    <link rel="stylesheet" href="css/home.css">
@endsection

@section('title')
    Input Data
@endsection

@section('content')
    <h1>input data</h1>
    <form action="/input-data" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file" class="form-control">
        <br>
        <button class="btn btn-primary">Import User Data</button>
    </form>
@endsection

@section('javascript')
    <script src="javascript/script.js"></script>
@endsection