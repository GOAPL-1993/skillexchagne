@extends('layouts.base')

@section('title')
學習交換平台
@endsection
@section('content')
@csrf
@forelse ($posts as $post)
@csrf

<div class='content' style='height:85% ; padding-top:70px ; position:sticky'>
  <div class="card-group" style="width: 20rem">
    <div class="card ; " style="  float:right ; margin-right:17% ; ">
      <div class="card-body">
        <form method="GET" action="/message/">
          <div style="display:none">
            <label for="wannaTalk"></label>
            <textarea id="wannaTalk" rows="1" name='wannaTalk' value='wannaTalk'>{{$post -> post_user_id}}</textarea>
          </div>
          <h5 class="card-title">{{$post -> post_username}}</h5>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">{{$post -> sort}}</li>
            <li class="list-group-item">{{$post -> area}}</li>
            <li class="list-group-item">擅長科目<br> {{$post -> wanna_teach}}</li>
            <li class="list-group-item">想學科目<br> {{$post -> wanna_learn}}</li>
            <hr>
          </ul>
          <p class="card-text">{{$post -> body}}</p>
          <div style="float: right">
            <input type="button" id="evaluateScoreButton" onclick="self.location.href='/postdetail/{{$post -> id}}'" value="詳細內容">
            <!-- <input type="button" id="evaluateScoreButton" class="btn btn-danger btn-sm" value="按讚!"> -->
            @if( Auth::user()->name !== $post -> post_username)
            <button type="button" class="btn btn-outline-danger btn-sm">按讚!</button>
            <button type="submit" class="btn btn-dark btn-sm" value="submit">發訊息</button>
            @endif
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@empty
<h2>no post</h2>
@endforelse
<br>
{{ $posts->links() }}
@endsection