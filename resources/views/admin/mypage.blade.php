@extends('layouts.admin')

@section('title', 'マイページ')

@section('content')
    <div class="container">
      <div class="row">
        <h2>マイページ</h2>
      </div>
      
      <div class="row">
          <input type="text" value="タイトル">
          <input tyepe="text" value="作者名">
          <h2 class="mt-5">コード入力</h2>
      </div>
  
      <div id="app">
        <example-component></example-component>
      </div>
      <div class="row d-flex justify-content-end mb-5">
        <input type="button"  value="保存する">
      </div>
    </div>
@endsection