@extends('layouts.admin')

@section('title', 'マイページ')

@section('style')
<style>
body {
  background: linear-gradient(-45deg, lightgreen, lightblue, lightpink);
  background-size: 400% 400%;
  animation: gradient 30s ease infinite;
}

@keyframes gradient {
  0% {
    background-position: 40% 0%;
  }
  50% {
    background-position: 100% 50%;
  }
  100% {
    background-position: 40% 0%;
  }
}
</style>
@endsection

@section('content')
<div class="container">
      <div class="row mt-3">
        <h2><a href = "{{ action('Admin\ProfileController@edit') }}"><img src="{{ asset('storage/profiles/'.$user->profile_image) }}" style="border: none; width:90px; height:auto; border-radius: 50px;" >プロフィール編集</a></h2>
      </div>
      <div class="row my-3">
        <div class="col-md-4 my-3">
          <a href="{{ action('Admin\GuitarController@create') }}" role="button" class="btn btn-primary">オリジナル曲を作る！！</a>
        </div>

            <div class="col-md-8">
                <form action="{{ action('Admin\GuitarController@mypage') }}" method="get">
                    <div class="form-group row">
                            <div class="col-8">
                                <input type="text" class="form-control" name="cond_title" value="{{ $cond_title }}">
                            </div>
                            <div class="col-4">
                                {{ csrf_field() }}
                                <input type="submit" class="btn btn-primary" value="検索">
                            </div>
                    </div>
                </form>
            </div>
      </div>

        <div class="row">
            <div class="list-news col-md-12 mx-auto">
                <div class="row">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="mobile" width="10%">IDいつか外す</th>
                                <th width="40%">曲のタイトル</th>
                                <th width="20%">カテゴリー</th>
                                <th class="mobile" width="10%">カポ</th>
                                <th width="10%">編集</th>
                                <th width="20%">公開するのか</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $music)
                                <tr>
                                    <th class="mobile">{{ $music->id }}</th>
                                    
                                    <!-- 取得して投稿の値によって表示を変える -->
                                        <td><a href ="{{ route('admin.playing', ['id' => $music->id]) }}"> {{ str_limit($music->title, 100) }}</a></td>
                                    <!-- 連想配列・データベースで値を引っ張ってくる -->
                                        <td>{{ ($music->category) }}</td>
                                        <th class="mobile">{{ ($music->capo) }}</th>
                                    <td>
                                        <div>
                                            <a class="btn btn-primary py-1" href="{{ action('Admin\GuitarController@edit', ['id' => $music->id]) }}">編集</a>
                                        </div>
                                        <div>
                                        <form method="get" action="{{ action('Admin\GuitarController@delete') }}" onSubmit="return check()">
                                            <button type="submit" class="btn btn-primary py-1" >消去</button>
                                                <input type="hidden" name="id" value="{{$music->id}}">
                                        </form>
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            <a href="{{ action('Admin\GuitarController@close', ['id' => $music->id]) }}">プライベート</a>
                                        </div>
                                        <div>
                                          <a href="{{ action('Admin\GuitarController@open', ['id' => $music->id]) }}">公開する！</a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
      </div>
    </div>
@endsection
@section('js')
<script>
function check(){

if(window.confirm('本当に消してもよろしいですか？')){ // 確認ダイアログを表示

    return true; // 「OK」時は送信を実行

}
else{ // 「キャンセル」時の処理

 // 警告ダイアログを表示
    return false; // 送信を中止

}

}
</script>
@endsection