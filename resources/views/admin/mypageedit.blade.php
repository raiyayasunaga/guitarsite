@extends('layouts.admin')

@section('title', 'マイページ編集')

@section('content')
<div class="container">
      <div class="row my-3">
        <h2><a href = "{{ action('Admin\GuitarController@mypageedit') }}">マイページ編集</a></h2>
        
      </div>
      <div class="row">
        <div class="col-4">
        </div>

            <div class="col-8">
                
            </div>
      </div>

        <div class="row">
          <h2>自分のプロフィール画面（仮）</h2>
            <div class="list-news col-md-12 mx-auto">
                <div class="row">
                    <table class="table">
                        <thead>
                            <tr>
                                <th width="10%">ID</th>
                                <th width="20%">曲のタイトル</th>
                                <th width="20%">カテゴリー</th>
                                <th width="30%">編集・公開</th>
                            </tr>
                        </thead>
                </div>
            </div>
        </div>
      </div>
    </div>
@endsection