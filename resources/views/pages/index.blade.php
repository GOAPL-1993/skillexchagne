@extends('layouts.base')

@section('title')
mytitle
@endsection

@section('content')
<h2>Hello, {{ $username }}</h2>
<img src='/images/cat.png' width=240 height=240>
@endsection