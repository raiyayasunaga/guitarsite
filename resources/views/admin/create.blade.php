@extends('layouts.admin')

@section('title', '曲の作成')

@section('content')
    <div class="container">
      <div class="row">
      <h2>曲の作成</h2>
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
