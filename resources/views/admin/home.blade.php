@extends('layouts.admin')

@section('title', 'ホームページ')

@section('content')
    <div class="container">
        <div class="row my-3">
            <h2>公開一覧</h2>
        </div>
        <div class="row">
            <div class="col-md-8">
                <form action="{{ action('Admin\GuitarController@home') }}" method="get">
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
            <div class="list-news col-md-12 mx-auto">
                <div class="row">
                    <table class="table">
                        <thead>
                            <tr>
                                <th width="10%">ID</th>
                                <th width="20%">曲のタイトル</th>
                                <th width="20%">カテゴリー</th>
                                <th width="20%">カポ数</th>
                                <th width="30%">作曲者名アイコン表示</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $music)
                                <tr>
                                    <th>{{ $music->id }}</th>
                                    <!-- マイページからパクってきた -->
                                    <td><a href ="{{ route('admin.playing', ['id' => $music->id]), }}"> {{ $music->title }}</a></td>
                                    <td>{{ str_limit($music->category, 150) }}</td>
                                    <td>{{ ($music->capo)}}</td>
                                    <!-- user_idからユーザーのnameカラムが欲しい -->
                                    <td> {{ str_limit($music->user_id, 100) }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <table class="table">
                        <thead>
                            <tr>
                                <th width="10%">ID</th>
                                <th width="20%">曲の歌詞だけvueアクションの所一応残しとく</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($cords as $cord)
                                <tr>
                                    <th>{{ $cord->id }}</th>
                                    <td><a href ="{{ route('admin.playing', ['id' => $cord->id]), }}">{{ str_limit($cord->lyrics) }}</td>
                                    <!-- user_idからユーザーのnameカラムが欲しい -->
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