<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>學習交換-發表文章</title>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
</head>

<body>
  <div class="container">
    @include('includes.menu')
    <form id="postForm" class="container" method="get" action="/addPost/">
      @csrf
      <div class="form-group col-7">
        <label for="postSort">類別</label>
        <select class="form-control" id="postSort" name="postSort">
          <option>交換技能</option>
          <option>找老師</option>
          <option>找學生</option>
        </select>
      </div>
      <div class="form-group col-7">
        <label for="postArea">地點</label>
        <select class="form-control" id="postArea" name="postArea">
          <option value="1">新北市</option>
          <option value="2">台北市</option>
          <option value="3">基隆市</option>
          <option value="4">桃園市</option>
          <option value="5">新竹縣</option>
          <option value="6">新竹市</option>
          <option value="7">苗栗縣</option>
          <option value="8">台中市</option>
          <option value="9">彰化縣</option>
          <option value="10">雲林縣</option>
          <option value="11">南投縣</option>
          <option value="12">嘉義縣</option>
          <option value="13">嘉義市</option>
          <option value="14">台南市</option>
          <option value="15">高雄市</option>
          <option value="16">屏東縣</option>
          <option value="17">台東縣</option>
          <option value="17">花蓮縣</option>
          <option value="17">宜蘭縣</option>
        </select>
      </div>
      <div class="form-group col-7">
        <label for="postWannaTeach">擅長技能</label>
        <textarea class="form-control" id="postWannaTeach" name="postWannaTeach" rows="1"></textarea>
        <span style="color:red">@error('name'){{$wanna_teach}} @enderror</span>
      </div>
      <div class="form-group col-7">
        <label for="postWannaLearn">想學習技能</label>
        <textarea class="form-control" id="postWannaLearn" name="postWannaLearn" rows="1"></textarea>
        <span style="color:red">@error('name'){{$wanna_teach}} @enderror</span>
      </div>
      <div class="form-group col-7">
        <label for="postBody">交換內容及方式</label>
        <textarea class="form-control" id="postBody" name="postBody" rows="3"></textarea>
        <span style="color:red">@error('name'){{$wanna_learn}} @enderror</span>
      </div>
      <div class="form-group col-7">
        <label for="postCatalog">擅長技能標籤</label>
        <select multiple class="form-control" id="postCatalog" name="postCatalog">
          <option>英文</option>
          <option>日文</option>
          <option>韓文</option>
          <option>德文</option>
          <option>法文</option>
          <option>西班牙文</option>
          <option>運動</option>
          <option>藝術</option>
          <option>鋼琴</option>
          <option>吉他</option>
          <option>前端程式</option>
          <option>後端程式</option>
        </select>
        <span style="color:red">@error('name'){{$catalog}} @enderror</span>
      </div>
      <div class="post-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="self.location.href='{{ url('/') }}'">取消</button>
        <!-- <button type="button" class="btn btn-primary" onclick="self.location.href='{{ url('/addPost/') }}'" method="POST">發佈</button> -->
        <input type=submit value=ADD>
      </div>
    </form>
  </div>

  


</body>

</html>