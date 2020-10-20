@extends('layouts.base')

@section('title')
mytitle
@endsection

@section('content')
<div class='content' style='margin-left:20% ; height:65% '>

<h2>Hello, {{ $username }}</h2>
<img src='/images/cat.png' width=240 height=240>
</div>
@endsection