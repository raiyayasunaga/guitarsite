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
                    <div class="row mt-4">
                      <div>設定するカポ</div>
                      <select class="form-control mb-3">
                          <option value="key_+5">+5</option>
                          <option value="key_+4">+4</option>
                          <option value="key_+3">+3</option>
                          <option value="key_+2">+2</option>
                          <option value="key_+1">+1</option>
                          <option value="key_+-0" selected>±0</option>
                          <option value="key_-1">-1</option>
                          <option value="key_-2">-2</option>
                          <option value="key_-3">-3</option>
                          <option value="key_-4">-4</option>
                          <option value="key_-5">-5</option>
                      </select>
                   </div>
          </div>

    <div class="container">
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