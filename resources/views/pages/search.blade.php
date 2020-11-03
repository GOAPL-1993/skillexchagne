@extends('layouts.base')

@section('title')
mytitle
@endsection
@section('content')
@csrf
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script type="text/JavaScript">
  $(document).ready(function() {
    $("#search").click(function() {
        $.ajax({
            type: "GET",
            url: "{{url}}",
            dataType: "json",
            success: function($searchposts) {
              <?php
              foreach ($searchposts as $searchpost) {
              ?>
                    $("#searchResult").html(



                      <div class='content' style='margin-left:20% ; height:85% '>
                        <div class="card" style="width: 18rem;float:left">
                          <div class="card-body">
                            <h5 class="card-title">{{$searchpost -> post_username}}</h5>
                            <ul class="list-group list-group-flush">
                              <li class="list-group-item">{{$searchpost -> sort}}</li>
                              <li class="list-group-item">{{$searchpost -> area}}</li>
                              <li class="list-group-item">擅長科目<br> {{$searchpost -> wanna_teach}}</li>
                              <li class="list-group-item">想學科目<br> {{$searchpost -> wanna_learn}}</li>
                              <hr>
                            </ul>
                            <p class="card-text">{{$searchpost -> body}}</p>
                            <button type="button" class="btn btn-outline-danger btn-sm">按讚!</button>
                            <button type="button" class="btn btn-outline-info btn-sm">收藏</button>
                            <button type="button" class="btn btn-dark btn-sm">發訊息</button>
                          </div>
                        </div>
                      </div>
                      



                    );
                <?php
              }
                ?>
                
            },
            error: function(jqXHR) {
                alert("發生錯誤: " + jqXHR.status);
            }
        })
    })


      
      <h2>no post</h2>
@endsection
</script>