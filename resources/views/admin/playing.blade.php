@extends('layouts.admin')

@section('title', '演奏してみよう！！')

@section('content')
    <div class="container">
      <!-- user_idとidが一致したやつだけ -->
          <div class="row my-4">
        <!-- ifを使ってカラムによって表示を変える方法を実装 -->
            <h2>曲のタイトル：{{ str_limit($music->title, 100) }}</h2>
            <div class="ml-3">
              <img src="{{ asset('storage/profiles/'.$music->user->profile_image) }}" style="border: none; width:50px; height:auto; border-radius: 50px;" id="img">
            </div>
          </div>
          <div class="row mb-5">
            <h3 class="col-4">カポ：{{ ($music->capo) }}</h3>
            <h3 class="col-4">カテゴリー：{{ ($music->category) }}</h3>
         </div>

        <div id="app">
          <roll-component></roll-component>
        </div>
        <div>
        <h3>曲の歌詞</h3>

        <div id="lyrics"> 
        </div>
        <h1>終わり</h1>

    </div>
@endsection

@section('js')
<script>
// ここでlyricsでもらった値を表現
document.addEventListener("DOMContentLoaded", function() {
  let string = '{!! str_replace("\n", "<br />", str_replace("\r", "", $music->lyrics)) !!}';
  let result = string.replace(/\[.*?]/g, cords);
  function cords(match){
    switch(match) {
        case '[C]':
            return '<img src="/img/C.png">';
            break;
        case '[Cdim]':
            return '<img src="/img/Cdim.png">';
            break;
        case '[Cm]':
            return '<img src="/img/Cm.png">';
            break;
        case '[G]':
            return '<img src="/img/G.png">';
            break;
        case '[Am]':
            return '<img src="/img/Am.png">';
            break;
        case '[F]':
            return '<img src="/img/F.png">';
            break;
        case '[Em]':
            return '<img src="/img/Em.png">';
            break;
        case '[Cadd9]':
            return '<img src="/img/Cadd9.png">';
            break;
        default:
            return match;
    }
  }
 $('#lyrics') . append(result);
});

  
</script>
@endsection

