@extends('layouts.admin')

@section('title', 'コード作成')

@section('content')
    <div class="container">
      <div class="row my-4">
      </div>
      <div id="app" class="p-3">
            <p>jQuery のテスト</p>
            <button id="btn">test_jquery</button>
            <div id="top">Top
            <button id=”bottomBtn”>最下部へ移動</button>
            </div>
            <div id="content">content</div>
            <div id="bottom">bottom</div>
            <div class="test m-5 p-5">背景</div>
        </div>

        <div id="app">
          <roll-component></roll-component>
        </div>

    </div>
@endsection