<!-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Recipient:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Message:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send message</button>
      </div>
    </div>
  </div>
</div> -->




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <form id="postForm">
      <div class="form-group">
        <label for="exampleFormControlSelect1">類別</label>
        <select class="form-control" id="exampleFormControlSelect1">
          <option>交換技能</option>
          <option>找老師</option>
          <option>找學生</option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlSelect1">地點</label>
        <select class="form-control" id="exampleFormControlSelect1">
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
      <div class="form-group">
        <label for="exampleFormControlTextarea1">擅長技能</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>
      <div class="form-group">
        <label for="exampleFormControlTextarea1">想學習技能</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>
      <div class="form-group">
        <label for="exampleFormControlTextarea1">交換內容及方式</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>
      <div class="form-group">
        <label for="exampleFormControlSelect2">標籤</label>
        <select multiple class="form-control" id="exampleFormControlSelect2">
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
      </div>
      <input type="submit" action="">
    </form>
  </div>

  <script>
    $("postForm").submit(function(e) {
      e.preventDefault();

      let sort = $("#sort").val();
      let area = $("#area").val();
      let wannateach = $("#wannateach").val();
      let wannalearn = $("#wannalearn").val();
      let body = $("#body").val();
      let catalog = $("#catalog").val();

      $.ajax({
        url: "{{route('post.add')}}",
        type: "POST",
        data: {
          sort: sort,
          area: area,
          wannateach: wannateach,
          wannalearn: wannalearn,
          body: body,
          catalog: catalog,
        },

      })


    })
  </script>


</body>

</html>