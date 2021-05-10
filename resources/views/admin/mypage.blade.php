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
      </div>
      <div class="row">
      <div id="app">
          <sample-component></sample-component>
      </div>

      </div>
      <div class="row d-flex justify-content-end mb-5">
        <input type="button"  value="保存する">
      </div>
    </div>
@endsection