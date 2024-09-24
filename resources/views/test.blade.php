<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <title>Document</title>
</head>

<body>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Handle</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($players as $player)
      <tr>
      <th scope="row">{{$player->id}}</th>
      <td scope="row">{{$player->name}}</td>
      <td scope="row">{{$player->nationality}}</td>
      <td>@mdo</td>
      </tr>

    @endforeach
    </tbody>
  </table>
  {{$players->links()}}
</body>

</html>