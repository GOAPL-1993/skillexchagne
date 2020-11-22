<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>學習交換平台-管理地區</title>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

</head>

<body>
  @include('includes.menu')
  @include('includes.usercatalog')
  <div class="container" style="padding-top:77px ; padding-bottom:90px">
    <div style="width: 40rem ; float:right ; margin-right:17%">
      <table class="table table-hover table-dark">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">area</th>
            <th scope="col">manage</th>
          </tr>
        </thead>
        <tbody>
          @forelse ($manageareas as $managearea)
          <tr>
            <th scope="row">{{$managearea -> id}}</th>
            <td>{{$managearea -> name}}</td>
            <td>
              <button type="button" class="btn btn-outline-info btn-sm" onclick="self.location.href=''">edit</button>
              <button type="button" class="btn btn-outline-danger btn-sm" onclick="self.location.href=''">delete</button>
            </td>
          </tr>
          @empty
          <h2>
            no catalog
          </h2>
          @endforelse
        </tbody>
      </table>
    </div>
  </div>
</body>

</html>