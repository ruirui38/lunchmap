@extends('layout')

@section('content')
  <h1>お店一覧</h1>

  <table class="table table-striped table-hover">
    <tr>
      <th>店名</th>
      <th>カテゴリー</th>
      <th>住所</th>
    </tr>
    @foreach($shops as $shop)
    <tr>
      <td><a href="{{ route('shop.show',['id' => $shop->id]) }}">{{ $shop->name }}</a></td>
      <td>{{ $shop->category->name }}</td>
      <td>{{ $shop->address }}</td>
    </tr>
    @endforeach
  </table>
  
@endsection