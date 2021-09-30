<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>お店一覧</title>
</head>
<body>
  <h1>お店一覧</h1>

  @foreach($shops as $shop)
    <p>{{ $shop->name }}</p>
    <p>{{ $shop->category->name }}</p>
    <p>{{ $shop->address }}</p>
  @endforeach
</body>
</html>