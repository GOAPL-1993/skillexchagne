<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>學習交換平台-發訊息</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <link rel="icon" type="images/png" href="/images/icon2.png" />
</head>

<body>
    @include('includes.menu')
    @include('includes.talktocatalog')
    <div class="container">
        <div style="margin-left:18% ; height:85% ; width:82% ">
            <div style="float:left ; width:89% ">
                <table class="table table-hover table-dark">
                    <thead>
                        <tr>
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
                                <button type="submit" class="btn btn-dark">傳送</button>
                            </form>
                            <th scope="co1">You are talking to {{$talkto_username}} now.
                            </th>
                        </tr>
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



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>