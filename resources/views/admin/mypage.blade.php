@extends('layouts.admin')

@section('title', 'マイページ')

@section('content')
    <div class="container">
      <div class="row">
        <h2>マイページ</h2>
        <div id="app">
          {{ message }}
        </div>
      </div>
      
      <div class="row">
          <input type="text" value="タイトル">
          <input tyepe="text" value="作者名">
          <h2 class="mt-5">コード入力</h2>
      </div>
      <div class="row my-3">
        <select name="cord">
          <option value="1">C</option>
          <option value="2">D</option>
          <option value="3">E</option>
          <option value="4">F</option>
          <option value="5">G</option>
          <option value="6">A</option>
          <option value="7">B</option>
        </select>
      </div>
      <div class="row my-5">
          <input type="button" id="C#7" value="C#7" onclick="AddCords();">
          <input type="button" id="C" value="C" onclick="AddCords();">
      </div>
      <div class="row my-5">
          <textarea cols="100" rows="8" id="viewlist" readonly>
          </textarea>
      </div>
      <div class="row">
        <input type="button"  value="保存する">
      </div>
    </div>
@endsection