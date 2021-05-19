@extends('layouts.admin')

@section('title', '曲の作成')

@section('content')
    <div class="container">
        <div class="row mt-5">
            <h2>曲の作成</h2>
                  <input type="text" value="タイトル">
                  <input tyepe="text" value="作者名">
        </div>
        <div class="row mt-5">
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
        <div class="row">
            <div id="app">
                <sample-component></sample-component>
            </div>
            
        </div>
        
      <div class="row mb-5">
        <div class="col-md-8 mx-auto">
            <form action="{{ action('Admin\GuitarController@create') }}" method="post" enctype="multipart/form-data">
                @if (count($errors) > 0)
                    <ul>
                        @foreach($errors->all() as $e)
                            <li>{{ $e }}</li>
                        @endforeach
                    </ul>
                @endif
                <div class="form-group row">
                    <label class="col-md-2" for="title">曲のタイトル</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2" for="body" >カテゴリー</label>
                    <div class="col-md-10">
                        <select class="form-control mb-3" name="category">
                                <option value="洋楽">洋楽</option>
                                <option value="Jpop">Jpop</option>
                                <option value="ロック">ロック</option>
                                <option value="なし" selected>なし</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2" for="body">カポ数</label>
                        <div class="col-md-10">
                            <select class="form-control mb-3" name = "capo">
                                <option value="+5">+5</option>
                                <option value="+4">+4</option>
                                <option value="+3">+3</option>
                                <option value="+2">+2</option>
                                <option value="+1">+1</option>
                                <option value="+-0" selected>±0</option>
                                <option value="-1">-1</option>
                                <option value="-2">-2</option>
                                <option value="-3">-3</option>
                                <option value="-4">-4</option>
                                <option value="-5">-5</option>
                            </select>
                        </div>
                    </div>
                <div class="form-group row">
                                <label class="col-md-2" for="title">画像</label>
                                <div class="col-md-10">
                                    <input type="file" class="form-control-file" name="image">
                                </div>
                            </div>
                <div class="form-group row">
                    <label class="col-md-2" for="body">歌詞</label>
                    <div class="col-md-10">
                        <textarea class="form-control" name="body" rows="20">{{ old('body') }}</textarea>
                    </div>
                </div>
                {{ csrf_field() }}
                <input type="submit" class="btn btn-primary" value="追加する">
            </form>          
        </div>
      </div>
    </div>
@endsection
