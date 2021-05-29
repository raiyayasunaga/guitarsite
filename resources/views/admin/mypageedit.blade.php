@extends('layouts.admin')

@section('title', '曲の編集')



@section('content')
    <div class="container">
      <div class="row my-5">
            <form action="{{ action('Admin\GuitarController@update') }}" method="post" enctype="multipart/form-data">
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
                        <input type="text" class="form-control" name="title" value="{{ $music_form->title }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2" for="category" >カテゴリー</label>
                    <div class="col-md-10">
                    <!-- データベースで取得した 値に合わせるオンラインサポートする-->
                        <select class="form-control mb-3" name="category">
                                <option selected value="{{ $music_form->category }}">{{ $music_form->category }}</option>
                                <option value="洋楽">洋楽</option>
                                <option value="Jpop">Jpop</option>
                                <option value="ロック">ロック</option>
                                <option value="アニソン">アニソン</option>
                                <option value="ジブリ">ジブリ</option>
                                <option value="なし">なし</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2" for="capo">設定するカポ数</label>
                        <div class="col-md-10">
                            <select class="form-control mb-3" name = "capo">
                                <option selected value="{{ $music_form->capo }}">{{ $music_form->capo }}</option>
                                <option value="+7">+7</option>
                                <option value="+6">+6</option>
                                <option value="+5">+5</option>
                                <option value="+4">+4</option>
                                <option value="+3">+3</option>
                                <option value="+2">+2</option>
                                <option value="+1">+1</option>
                                <option value="±0">±0</option>
                                <option value="半音">半音</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                                <label class="col-md-2" for="title">画像</label>
                                <div class="col-md-10">
                                    <input type="file" class="form-control-file" name="image">
                                </div>
                    </div>
                    <div class="row">
                        <div id="app">
                            <!-- フォームタグで保存されるのか。 -->
                                <sample-component></sample-component>
                                @csrf
                        </div>
                    </div>
                    <input type="hidden" name="id" value="{{ $music_form->id }}">
                {{ csrf_field() }}
                <input type="submit" class="btn btn-primary" value="更新する">
            </form>          
      </div>
    </div>
@endsection
