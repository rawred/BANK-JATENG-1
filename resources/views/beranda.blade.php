<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
</head>
<body>
@extends('layouts.beranda')  <!-- Extending from layouts.beranda -->

@section('title', 'Home Page')

@section('content')
    <h2>Welcome to the Home Page</h2>
    <p>This is the content of the home page.</p>
@endsection


</body>
</html>