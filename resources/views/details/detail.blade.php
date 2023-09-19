@extends('layouts.app')
@section('content')
<div class="card-header text-center">商品詳細</div>
<div class="container"> <!-- コンテナを追加 -->
  <div class="card mx-auto" style="width: 100rem;">
    <div class="card mb-3" style="max-width: 1000px;">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="{{ $item->image ? asset('storage/image/' . $item->image) : asset('storage/no-image.jpg') }}" class="card-img-top" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">商品名　{{ $item->name }}</h5>
            <p class="card-text">商品説明　{{ $item->description }}</p>
            <p class="card-text">価格　{{ $item->price }}円</p>
            <p class="card-text">レビュータイトル{{ $item->title }}</p>
            <p class="card-text">コメント{{ $item->comment }}</p>
            <a href="{{ route('carts.show', ['cart' => $item->id]) }}" class="btn btn-primary">カートに入れる</a>
            <button type="button" class="btn btn-secondary" onClick="history.back()">戻る</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
