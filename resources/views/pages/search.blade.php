<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>學習交換平台-搜尋文章</title>
</head>

<body>
  @include('includes.menu')
  @include('includes.catalog')
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  <div>
    @forelse ($searchposts as $searchpost )
    <div class='content' style='height:85% ; padding-top:70px'>
      <div class="card" style="width: 20rem ; float:right ; margin-right:17%" id="postCard">
        <div class="card-body">
          <form method="GET" action="/message/">
            <div style="display:none">
              <label for="wannaTalk"></label>
              <textarea id="wannaTalk" rows="1" name='wannaTalk' value='wannaTalk'>{{$searchpost -> post_user_id}}</textarea>
            </div>
            <h5 class="card-title">{{$searchpost -> post_username}}</h5>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">{{$searchpost -> sort}}</li>
              <li class="list-group-item">{{$searchpost -> area}}</li>
              <li class="list-group-item">擅長科目<br> {{$searchpost -> wanna_teach}}</li>
              <li class="list-group-item">想學科目<br> {{$searchpost -> wanna_learn}}</li>
              <hr>
            </ul>
            <p class="card-text">{{$searchpost -> body}}</p>
            <div style="float: right">
              <input type="button" id="evaluateScoreButton" onclick="self.location.href='/postdetail/{{$searchpost -> id}}'" value="詳細內容">
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
  </div>

  <script>
    $(document).redady(function() {
      $('#searchPostForm').load("loadpost.php", {

        post_username: post_username,
        sort: sort,
        area: area,
        wanna_teach: wanna_teach,
        wanna_learn: wanna_learn,
        body: body

      });
    })
  </script>
</body>
<br>


</html>