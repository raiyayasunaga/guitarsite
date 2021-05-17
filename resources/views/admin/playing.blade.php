@extends('layouts.admin')

@section('title', '演奏してみよう！！')

@section('content')
    <div class="container">
      <div class="row my-4">
        <h2>曲のタイトル：</h2>
      </div>
      <div class="row mb-5">
        <div class="col-3">カポ：</div>
        <div class="col-3">カテゴリー：</div>
      </div>

        <div id="app">
          <roll-component></roll-component>
        </div>

    </div>
@endsection