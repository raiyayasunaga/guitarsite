@extends('layouts.admin')

@section('title', 'お気に入り曲')

@section('content')
<ul class="m-0" id="background-home-image">
    <li></li>
    <li></li>
    <li></li>
    <li></li>
</ul>
<div id="bgskin-home">
    <div class="container">
        <div class="row py-3">
            <h3>{{ Auth::user()->name }}さんのお気に入り曲</h3>
        </div>
        <div class="row">
            <div class="col-md-4">
                <form action="{{ action('Admin\GuitarController@favorite') }}" method="get">
                    <div class="form-group row">
                        <div class="col-8">
                            <select class="form-control mb-3" name="category" value="{{ $category }}">
                                <option value="洋楽">洋楽</option>
                                <option value="Jpop">Jpop</option>
                                <option value="ロック">ロック</option>
                                <option value="アニソン">アニソン</option>
                                <option value="ジブリ">ジブリ</option>
                                <option value="なし">なし</option>
                                <option value="" selected>カテゴリー</option>
                            </select>
                         </div>
                        <div class="col-4">
                            @csrf
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
                                <th width="50%">曲のタイトル</th>
                                <th width="20%">カテゴリー</th>
                                <th width="20%">お気に入り</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($favorites as $music)
                                    <tr>
                                        <td style="font-size: 20px;"><a href ="{{ route('admin.playing', ['id' => $music->music_id]), }}"> {{ $music->title }}</a></td>
                                        <td>{{ ($music->category) }}</td>
                                        <td>
                                        <form method="post" action="{{ action('Admin\GuitarController@favoriteclear') }}" onSubmit="return check()">
                                                <button type="submit" class="btn btn-primary p-1" >消去</button>
                                                    <input type="hidden" name="id" value="{{$music->id}}">
                                                    @csrf
                                            </form>
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
</div>
@endsection

@section('js')
    <script>
        function check(){

            if(window.confirm('本当に実行してもよろしいですか？')){ // 確認ダイアログを表示

                return true; // 「OK」時は送信を実行

            }
            else{ // 「キャンセル」時の処理

            // 警告ダイアログを表示
                return false; // 送信を中止

            }
        }
    </script>
@endsection