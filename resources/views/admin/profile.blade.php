@extends('layouts.admin')

@section('title', 'マイページ')

@section('content')
<div class="container">
      <div class="row my-3">
        
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
                   <div class="col-4">
                     <label >アイコン・プロフィール写真</label>
                     <div class="col-md-10">
                        <input type="file" class="form-control-file" name="image">
                      </div>
                   </div>
                   <div class=col-8>
                      <img src="/img/C.png">
                   </div>
                </div>
                <div class="row">
                  <div class="col-4">
                    <h3>考え中！！</h3>
                  </div>
                </div>
            </div>
        </div>
      </div>
    </div>
@endsection