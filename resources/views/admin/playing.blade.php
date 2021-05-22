@extends('layouts.admin')

@section('title', '演奏してみよう！！')

@section('content')
    <div class="container">
      <!-- user_idとidが一致したやつだけ -->
          <div class="row my-4">
        <!-- ifを使ってカラムによって表示を変える方法を実装 -->
            <h2>曲のタイトル：{{ str_limit($music->title, 100) }}</h2>
          </div>
          <div class="row mb-5">
            <h3 class="col-4">カポ：{{ ($music->capo) }}</h3>
            <h3 class="col-4">カテゴリー：{{ ($music->category) }}</h3>
         </div>
        <div>
          {{ $music->body}}
        </div>

         <!-- ここにコードの表示を載せたい -->
        <div id="app">
          <roll-component></roll-component>
        </div>
        <div>
        <h3>曲の歌詞</h3>
        <div id="lyrics">
          {{ $music->lyrics}}
        </div>
          <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        </div>
        <h1>終わり</h1>

    </div>
@endsection