@extends('layouts.base')

@section('title')
mytitle
@endsection
@section('content')
@csrf
@forelse ($posts as $post)
@csrf

<div style="display:none">
  <label for="postUsername"></label>
  <textarea id="postUsername" name="postUsername" rows="1" name='wannaTalk' value='wannaTalk'>{{$post -> post_user_id}}</textarea>
</div>
<div class='content' style='margin-left:20% ; height:85%' method="GET" action="/message/">
  <div class="card" style="width: 18rem;float:left">
    <div class="card-body">
      <h5 class="card-title">{{$post -> post_username}}</h5>
      <ul class="list-group list-group-flush">
        <li class="list-group-item">{{$post -> sort}}</li>
        <li class="list-group-item">{{$post -> area}}</li>
        <li class="list-group-item">擅長科目<br> {{$post -> wanna_teach}}</li>
        <li class="list-group-item">想學科目<br> {{$post -> wanna_learn}}</li>
        <hr>
      </ul>
      <p class="card-text">{{$post -> body}}</p>
      <button type="button" class="btn btn-outline-danger btn-sm"><img src="/images/icon3.png"></button>
      <button type="button" class="btn btn-outline-info btn-sm"><img src="/images/icon4.png"></button>
      <button type="submit" class="btn btn-dark btn-sm">發訊息</button>
    </div>
  </div>
</div>
@empty
<h2>no post</h2>
@endforelse
@endsection