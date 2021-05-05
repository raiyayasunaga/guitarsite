@extends('layouts.admin')

@section('title', 'コード一覧')

@section('content')
    <div class="container">
    <h2>コード一覧</h2>
      <div class="row">
        <h2>コード検索一覧A~G</h2>
        <div id="app">
            <p>Vanilla.js, jQuery のテスト</p>
            <button onclick="test()">test_vanilla</button>
        </div>
      </div>
      <div class="row">
        <div id="anime_test" class="active">
        </div>
        <div class="anime_test-btn" onclick="clickTest()";>
            ここをクリック！
        </div>
        <p>なぜかデータベースから表示できてしまう？</p>
        <img src="{{ asset('image/C_cord/C.png') }}" alt="hoge.png"> 
      </div>
      <div class="row">
        <p class="cord-font" style= "border-right: solid 2px;"><a href = "#C_cord">Cコード</p>
        <p class="cord-font" style= "border-right: solid 2px;"><a href = "#C#/Db_cord">C#/Dbコード</p>
        <p class="cord-font" style= "border-right: solid 2px;"><a href = "#D_cord">Dコード</p>
        <p class="cord-font" style= "border-right: solid 2px;"><a href = "#D#/Eb_cord">D#/Ebコード</p>
        <p class="cord-font" style= "border-right: solid 2px;"><a href = "#E_cord">Eコード</p>
        <p class="cord-font" style= "border-right: solid 2px;"><a href = "#F_cord">Fコード</p>
        <p class="cord-font"><a href = "#F#/Gb_cord">F#/Gbコード</p>
        <p class="cord_font"><a href = "#G_cord">Gコード</p>
        <p class="cord_font"><a href = "#G#/Ab_cord">G#/Abコード</p>
        <p class="cord_font"><a href = "#A_cord">Aコード</p>
        <p class="cord_font"><a href = "#A#/Bb_cord">A#/Bbコード</p>
        <p class="cord_font"><a href = "#B_cord">Bコード</p>
      </div>
        <div id = "C_cord" class="row my-5">
          <div class="col-md-2 p-3 mr-3" >
            <p class="cord-font">Cコード</p>
            <img src="/image/C_cord/C.png" alt="C">
          </div>
          <div class="col-md-2 p-3 mx-3">
          <p class="cord-font">Cmコード</p>
            <img src="/image/C_cord/Cm.png" alt="Cm">
          </div>
          <div class="col-md-2 p-3 mx-3">
          <p class="cord-font">C7コード</p>
            <img src="/image/C_cord/C7.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
          <p class="cord-font">Cdimコード</p>
            <img src="/image/C_cord/Cdim.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
          <p class="cord-font">Cm7コード</p>
            <img src="/image/C_cord/Cm7.png" alt="サンプル画像">
          </div>
          
          <div class="col-md-2 p-3 mx-3">
          <p class="cord-font">Cm7(2)コード</p>
            <img src="/image/C_cord/Cm7_2.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
          <p class="cord-font">Cm7b5コード</p>
            <img src="/image/C_cord/Cm7b5.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
            <p class="cord-font">CmM7コード</p>
            <img src="/image/C_cord/CmM7.png" alt="サンプル画像">
          </div>
          
          <div class="col-md-2 p-3 mx-3">
            <p class="cord-font">C6コード</p>
            <img src="/image/C_cord/C6.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
            <p class="cord-font">Cadd9コード</p>
            <img src="/image/C_cord/Cadd9.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
            <p class="cord-font">Caugコード</p>
            <img src="/image/C_cord/Caug.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
            <p class="cord-font">Csus4コード</p>
            <img src="/image/C_cord/Csus4.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
            <p class="cord-font">Caugコード</p>
            <img src="/image/C_cord/Caug.png" alt="サンプル画像">
          </div>
        </div>

        <div class="row mt-5">
          <h2>Dコード</h2>
        <div class="col-md-2">
            <p class="cord-font">Cコード</p>
            <img src="/image/C_cord/C.png" alt="C">
          </div>
          <div class="col-md-2">
            <p class="cord-font">Cコード</p>
            <img src="/image/C_cord/C.png" alt="C">
          </div>
          <div class="col-md-2">
            <p class="cord-font">Cコード</p>
            <img src="/image/C_cord/C.png" alt="C">
          </div>
        </div>
    </div>
@endsection