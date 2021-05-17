@extends('layouts.admin')

@section('title', 'マイページ')

@section('content')
<div class="container">
      <div class="row my-3">
        <h2><a href = "{{ action('Admin\GuitarController@mypageedit') }}">マイページ編集</a></h2>
        
      </div>
      <div class="row">
        <div class="col-4">
          <a href="{{ action('Admin\GuitarController@create') }}" role="button" class="btn btn-primary">オリジナル曲を作る！！</a>
        </div>

            <div class="col-8">
                <form action="{{ action('Admin\GuitarController@mypage') }}" method="get">
                    <div class="form-group row">
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="cond_title" value="{{ $cond_title }}">
                        </div>
                        <div class="col-md-4">
                            {{ csrf_field() }}
                            <input type="submit" class="btn btn-primary" value="検索">
                        </div>
                    </div>
                </form>
            </div>
      </div>

        <div class="row">
          <h2>自分の曲だけ</h2>
            <div class="list-news col-md-12 mx-auto">
                <div class="row">
                    <table class="table">
                        <thead>
                            <tr>
                                <th width="10%">IDいつか外す</th>
                                <th width="20%">曲のタイトル</th>
                                <th width="20%">カテゴリー</th>
                                <th width="10%">カポ</th>
                                <th width="20%">編集</th>
                                <th width="20%">公開するのか</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $music)
                                <tr>
                                    <th>{{ $music->id }}</th>
                                    
                                    <!-- 取得して投稿の値によって表示を変える -->
                                        <td><a href ="{{ route('admin.playing', ['id' => $music->id]) }}"> {{ str_limit($music->title, 100) }}</a></td>
                                    <!-- 連想配列・データベースで値を引っ張ってくる -->
                                        <td>{{ ($music->category) }}</td>
                                        <th>{{ ($music->capo) }}</th>
                                    <td>
                                        <div>
                                            <a href="{{ action('Admin\GuitarController@delete', ['id' => $music->id]) }}">削除</a>
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            <a href="#">プライベート！</a>
                                        </div>
                                        <div>
                                          <a href="#">公開する！</a>
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