<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>學習交換平台-發訊息</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
</head>

<body>

    @include('includes.menu')
    @include('includes.talktocatalog')
    <div class="container">
        <div style='margin-left:18% ; height:85% ; width:82% ; float:left;'>
            <form action="/addMessage/">
                <div style="display:none">
                    <label for="wannaTalk"></label>
                    <textarea id="wannaTalk" rows="1" name='wannaTalk' value='wannaTalk'>{{$wannaTalk}}</textarea>
                </div>
                <div style="display:none">
                    <label for="user_id"></label>
                    <textarea id="user_id" rows="1" name='user_id' value='user_id'>{{$user_id}}</textarea>
                </div>
                <input type="text" placeholder="一起交換吧！" name="message">
                <button type="submit">傳送</button>
            </form>
            <table class="table table-hover table-dark">
                <thead>
                    <tr>
                        <th scope="co2">{{$talkto_username}}{{$wannaTalk}}
                            {{$user_id}}</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($messages as $message)
                    <tr>
                        <td>{{$message -> message}}</td>
                        <td>{{$message -> created_at}}</td>
                    </tr>
                    @empty
                    <th scope="co1">no message</th>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

</body>

</html>