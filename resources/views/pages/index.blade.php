@extends('layouts.base')

@section('title')
學習交換平台
@endsection
@section('content')
@csrf
@forelse ($posts as $post)
@csrf
<<<<<<< HEAD
<div class='content' style='height:85% ; padding-top:70px ; position:sticky ; font-weight:bold'>
  <div class="card" style="width: 40rem ; float:right ; margin-right:25%">
    <div class="card-body">
=======


<div class="card-columns">
  <div class='content' style='padding-top:70px '>
    <div class="card " style="float:right">
>>>>>>> aaadc3e647ddab04e2e11abf8b972e500da970a9
      <form method="GET" action="/message/">
        <div style="display:none">
          <label for="wannaTalk"></label>
          <textarea id="wannaTalk" rows="1" name='wannaTalk' value='wannaTalk'>{{$post -> post_user_id}}</textarea>
        </div>
        <h5 class="card-title">{{$post -> post_username}}</h5>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">{{$post -> sort}}</li>
          <li class="list-group-item">{{$post -> area}}</li>
          <li class="list-group-item">擅長科目:<br> {{$post -> wanna_teach}}</li>
          <li class="list-group-item">想學科目:<br> {{$post -> wanna_learn}}</li>
          <hr>
        </ul>
        <p class="card-text">{{$post -> body}}</p>
        <div style="float: right">
          <input type="button" id="evaluateScoreButton" onclick="self.location.href='/postdetail/{{$post -> id}}'" value="詳細內容">
          @auth
          @if( Auth::user()->name !== $post -> post_username)
          <button type="button" class="btn btn-outline-danger btn-sm">按讚!</button>
          <button type="submit" class="btn btn-dark btn-sm" value="submit">發訊息</button>
          @endif
          @endauth
          @guest
          <button type="button" class="btn btn-outline-danger btn-sm">按讚!</button>
          <button type="submit" class="btn btn-dark btn-sm" value="submit">發訊息</button>
          @endguest
        </div>
      </form>
    </div>
  </div>
</div>

@empty
<h2>no post</h2>
@endforelse
<br>
@endsection