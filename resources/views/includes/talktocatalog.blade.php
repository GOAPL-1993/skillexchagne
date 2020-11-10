<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

</head>

<body>
    @if(!empty(@if(!empty($talkto_usernames))))

    @forelse ($talkto_usernames as $talkto_username)
    <div class="container">
        <div class="list-group sidebar-left" style="text-align:center;width:25%;float:left">
            <div class="component">
                <div style="width:70%">
                    <a href="/search/英文" class="list-group-item list-group-item-action list-group-item-light"><img src="/images/eng1.png" style="position:absolute;left:10px">{{$talkto_username}}</a>
                </div>
            </div>
        </div>
    </div>
    @empty
    <h2>not chatted yet</h2>
    @endforelse
    @endif
</body>

</html>