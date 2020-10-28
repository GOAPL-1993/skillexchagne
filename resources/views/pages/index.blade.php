@extends('layouts.base')

@section('title')
mytitle
@endsection

@section('content')
<div class='content' style='margin-left:20% ; height:85% '>

<h2>Hello, {{ $username }}</h2>
<!-- <img src='/images/cat.png' width=240 height=240> -->
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">PO文者</h5>
    <ul class="list-group list-group-flush">
       <li class="list-group-item">類別 交換技能</li>
       <li class="list-group-item">地點 高雄</li>
       <li class="list-group-item">擅長科目 日文</li>
       <li class="list-group-item">想學科目 德文</li>
       <hr>
    </ul>
    <p class="card-text">內容....</p>
    <button type="button" class="btn btn-outline-danger btn-sm">按讚!</button>
    <button type="button" class="btn btn-outline-info btn-sm">收藏</button>
    <button type="button" class="btn btn-dark btn-sm">發訊息</button>
  </div>
</div>
</div>
@endsection