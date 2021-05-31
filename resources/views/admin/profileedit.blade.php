@extends('layouts.admin')

@section('title', 'プロフィール編集')

@section('style')
        <link href="{{ asset('/css/nerv.css') }}" rel="stylesheet" id="nerv" />
        <link href="{{ asset('/css/ayanami.css') }}" rel="stylesheet" id="ayanami" />
@endsection

@section('content')
  <div class="container">
   <h2 class="my-3">プロフィール編集</h2>
    <form method="post" action="{{ route('user.image') }}" enctype="multipart/form-data">
      @csrf
  @method('PATCH')
      <!-- <div class="row mb-5">
        <div class="col-3">
          <h3>名前変更</h3>
          <input type="text" value="">
        </div>
      </div> -->
      <div class="row">
        <div class="col-md-3">
          <label for="profile_image">現在のプロフィール画像
            <img src="{{ asset('storage/profiles/'.$user->profile_image) }}" id="img">
          </label>
        </div>
        <div class="col-md-5">
          <label>変更後画像
            <img src="" id="Newimg">
          </label>
          <label>
            <input id="profile_image" type="file"  name="profile_image" onchange="previewImage(this);"/>
          </label>
        </div>
      </div>
          <button type="submit" class="btn btn-primary">
            変更する
          </button>
    </form>
    
    <div class="container">
      <h2>カラースキン編集</h2>
      <div class="row my-5">
        <div class="col-4">
          <input type="button" value="初号機スキン" onclick="shogouki(' {{ asset('/css/admin.css') }} '); "/>
        </div>
        <div class="col-4">
          <input type="button" value="綾波スキン" onclick="ayanami(' {{ asset('/css/ayanami.css') }} '); "/>
        </div>
        <div class="col-4">
          <input type="button" value="NERVスキン" onclick="nerv(' {{ asset('/css/nerv.css') }} '); "/>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">変更する</button>
  </div>

  
@endsection

<!-- スクリプトで設定した後に表示させる機能を実装 -->
<script>
  function shogouki() {
    let shogouki = function(url) {
    let linkstyle = document.getElementById('shogouki');
    linkstyle.href = url;
    };
  }
  
  function ayanami() {
    let ayanami = function(url) {
    let linkstyle = document.getElementById('ayanami');
    linkstyle.href = url;
    };
  }

  function nerv() {
    let nerv = function(url) {
    let linkstyle = document.getElementById('nerv');
    linkstyle.href = url;
  };
  }




  function previewImage(obj)
  {
    var fileReader = new FileReader();
    fileReader.onload = (function() {
      document.getElementById('Newimg').src = fileReader.result;
    });
    fileReader.readAsDataURL(obj.files[0]);
  }
</script>