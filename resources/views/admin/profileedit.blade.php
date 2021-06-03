@extends('layouts.admin')

@section('title', 'プロフィール編集')

@section('style')
        <link href="{{ asset('/css/nerv.css') }}" rel="stylesheet" id="nerv" />
        <link href="{{ asset('/css/ayanami.css') }}" rel="stylesheet" id="ayanami" />
        <link href="{{ asset('/css/guitar.css') }}" rel="stylesheet" id="guitar" />
@endsection

@section('content')
  <div class="container">
   <h2 class="my-3">プロフィール編集</h2>
    <form method="post" action="{{ route('user.image') }}" enctype="multipart/form-data">
      @csrf
  @method('PATCH')
      <div class="row mb-5">
        <div class="col-3">
          <h3>名前変更</h3>
          <input type="text" value="">
        </div>
      </div>
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
  </div>
  <!-- formタグはややこしくなるためあえて分けて考えている -->
    <div class="container">
      <h2>カラースキン編集</h2>
        <div class="row my-5">
          <div class="col-6">
            <form action="{{ asset('Admin/ProfileController@skin') }}">
              <select class="form-control" name="skin_id" onchange="changestyle('guitar', value)" id="skin">
                  <option value="{{ asset('/css/guitar.css') }}">選択して下さい</option>
                  <option value="{{ asset('/css/ayanami.css') }}">綾波スキン</option>
                  <option value="{{ asset('/css/admin.css') }}">初号機スキン</option>
                  <option value="{{ asset('/css/nerv.css') }}">NERVスキン</option>
              </select>
              <div class="my-5">
                  <button type="submit" class="btn btn-primary">変更する</button>
              </div>
            </form>
            
          </div>
        </div>
    </div>

  
@endsection
<script>

// 画像を表示させる
  function previewImage(obj)
  {
    var fileReader = new FileReader();
    fileReader.onload = (function() {
      document.getElementById('Newimg').src = fileReader.result;
    });
    fileReader.readAsDataURL(obj.files[0]);
  }
</script>