<style>
  .sidebar-left {
    position: relative;
    left: 30px;
    top: 75px;
    z-index: 10;
  }
</style>
<div class="container">
  <div class="list-group sidebar-left" style="text-align:center;width:25%;float:left">
    <form class="form-inline my-2 my-lg-1" style="width:10% ;float:left" method="GET" action="/search/">
      <select class="custom-select" name="searchArea" id="searchArea">
        <option selected>地區搜尋</option>
        <option name="新北市" value="新北市">新北市</option>
        <option name="台北市" value="台北市">台北市</option>
        <option name="基隆市" value="基隆市">基隆市</option>
        <option name="桃園市" value="桃園市">桃園市</option>
        <option name="新竹縣" value="新竹縣">新竹縣</option>
        <option name="新竹市" value="新竹市">新竹市</option>
        <option name="苗栗縣" value="苗栗縣">苗栗縣</option>
        <option name="台中市" value="台中市">台中市</option>
        <option name="彰化縣" value="彰化縣">彰化縣</option>
        <option name="雲林縣" value="雲林縣">雲林縣</option>
        <option name="南投縣" value="南投縣">南投縣</option>
        <option name="嘉義縣" value="嘉義縣">嘉義縣</option>
        <option name="嘉義市" value="嘉義市">嘉義市</option>
        <option name="台南市" value="台南市">台南市</option>
        <option name="高雄市" value="高雄市">高雄市</option>
        <option name="屏東縣" value="屏東縣">屏東縣</option>
        <option name="台東縣" value="台東縣">台東縣</option>
        <option name="花蓮縣" value="花蓮縣">花蓮縣</option>
        <option name="宜蘭縣" value="宜蘭縣">宜蘭縣</option>
      </select>
      <!-- <input class="form-control mr-sm-1" type="技能關鍵字" placeholder="技能關鍵字" aria-label="技能關鍵字"> -->
      <button class="btn btn-dark my-2 my-sm-0" type="submit">Search</button>
    </form id="searchPostForm">
    <div class="component">
      <div style="width:60%">
        <a href="/search/英文" class="list-group-item list-group-item-action list-group-item-light"><img src="/images/eng1.png" style="position:absolute;left:10px">英文</a>
        <a href="/search/日文" class="list-group-item list-group-item-action list-group-item-light"><img src="/images/jap1.png" style="position:absolute;left:10px">日文</a>
        <a href="/search/韓文" class="list-group-item list-group-item-action list-group-item-light"><img src="/images/kor1.png" style="position:absolute;left:10px">韓文</a>
        <a href="/search/德文" class="list-group-item list-group-item-action list-group-item-light"><img src="/images/lan1.png" style="position:absolute;left:10px">德文</a>
        <a href="/search/法文" class="list-group-item list-group-item-action list-group-item-light"><img src="/images/fra1.png" style="position:absolute;left:10px">法文</a>
        <a href="/search/西班牙文" class="list-group-item list-group-item-action list-group-item-light"><img src="/images/spa1.png" style="position:absolute;left:10px">西班牙文</a>
        <a href="/search/運動" class="list-group-item list-group-item-action list-group-item-light"><img src="/images/fit1.png" style="position:absolute;left:10px">運動</a>
        <a href="/search/藝術" class="list-group-item list-group-item-action list-group-item-light"><img src="/images/art1.png" style="position:absolute;left:10px">藝術</a>
        <a href="/search/鋼琴" class="list-group-item list-group-item-action list-group-item-light"><img src="/images/pia1.png" style="position:absolute;left:10px">鋼琴</a>
        <a href="/search/吉他" class="list-group-item list-group-item-action list-group-item-light"><img src="/images/gui1.png" style="position:absolute;left:10px">吉他</a>
        <a href="/search/前端程式" class="list-group-item list-group-item-action list-group-item-light"><img src="/images/css1.png" style="position:absolute;left:10px">前端程式</a>
        <a href="/search/後端程式" class="list-group-item list-group-item-action list-group-item-light"><img src="/images/php1.png" style="position:absolute;left:10px">後端程式</a>
      </div>
    </div>
  </div>
</div>