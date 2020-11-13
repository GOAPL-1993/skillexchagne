<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>學習交換平台-發訊息</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <!-- <link rel="icon" type="images/png" href="/images/icon2.png" /> -->
    <style>
        .sidebar-left {
            position: relative;
            left: 30px;
            top: 75px;
            z-index: 10;
        }
    </style>
</head>

<body>
    @include('includes.menu')
    @csrf
    <div class="container">
        <div class="list-group sidebar-left" style="text-align:center;width:25%;float:left">

            <div class="component">
                @forelse ($talkto_users_all as $talkto_user_all)
                @csrf
                <form action="/message/">
                    <div style="display:none">
                        <label for="wannaTalk"></label>
                        <textarea id="wannaTalk" rows="1" name='wannaTalk' value='wannaTalk'>{{$talkto_user_all->id}}</textarea>
                    </div>
                    <div style="width:60%">
                        <button type="submit" class="list-group-item list-group-item-action list-group-item-light" value="submit">{{$talkto_user_all->name}}</button>
                    </div>
                </form>
                @empty
                <form action="/index/">
                    <div style="width:60%">
                        <button type="submit" class="list-group-item list-group-item-action list-group-item-light" value="submit">Not talked to anyone yet.</button>
                    </div>
                </form>
                @endforelse
            </div>
        </div>
    </div>
    <div class="container" style="padding-top:56px ; padding-bottom:90px">
        <div style="width: 40rem ; float:right ; margin-right:17%">
            @if($wannaTalk !== NULL)
            <h4>
                You are talking to {{$talkto_username}} now.
            </h4>
            @else
            <h4>
                select an friend on the left hand side.
            </h4>
            @endif
            <div>
                <table class="table table-hover table-dark">
                    <thead>
                        <form action="/addMessage/">
                            <div style="display:none">
                                <label for="wannaTalk"></label>
                                <textarea id="wannaTalk" rows="1" name='wannaTalk' value='wannaTalk'>{{$wannaTalk}}</textarea>
                            </div>
                            <div style="display:none">
                                <label for="user_id"></label>
                                <textarea id="user_id" rows="1" name='user_id' value='user_id'>{{$user_id}}</textarea>
                            </div>
                            @if($wannaTalk !== NULL)
                            <input type="text" placeholder="一起交換吧！" name="message" size="72">
                            <button type="submit" class="btn btn-dark">傳送</button>
                            @else
                            <br>
                            @endif
                        </form>
                    </thead>
                    <tbody>
                        @forelse ($messages as $message)
                        <tr>
                            <td>
                                @if($message->user_id == $user_id)
                                <div style="text-align:left;">
                                    {{$message -> message}}
                                </div>
                                @else
                                <div style="text-align:right;">
                                    {{$message -> message}}
                                </div>
                                @endif
                            </td>
                        </tr>
                        @empty
                        <th scope="co2">no message</th>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>

</html>