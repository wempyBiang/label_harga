@extends('layout.main')

@section('css')
    <link rel="stylesheet" href="css/style.css">
@endsection

@section('Title')
    Final Label
@endsection

@section('content')
    <form action="/lebel-database" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="fileBarcode" >
        <br>
        <button type="submit">Kirim</button>
    </form>
@endsection