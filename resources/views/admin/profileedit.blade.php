@extends('layouts.admin')

@section('title', 'プロフィール編集')

@section('style')
<link href="{{ asset('/css/ayanami.css') }}" rel="stylesheet" id="changestyle" />
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
            <input id="profile_image" type="file"  name="profile_image" onchange="previewImage(this);">
          </label>
        </div>
      </div>
          <button type="submit" class="btn btn-primary">
            変更する
          </button>
    </form>
    
    <div class="container">
      
   <div class="row">
     <div class="col-6">
       <input class="btn btn-primary" type="button" value="初号機スキン">
     </div>
     <div class="col-6">
        <input class="btn btn-primary" type="button" value="綾波スキン">
     </div>
     <div class="col-6">
        <input class="btn btn-primary" type="button" value="アキラスキン">
     </div>
     <div class="col-6">
        <input class="btn btn-primary" type="button" value="ジョジョスキン">
     </div>
   </div>
   <div class="row">
   <input type="button" id="skin" value="初号機スキン" onclick="changeStyle(' {{ asset('/css/admin.css') }} '); "/>
   </div>
   <div class="row">
   <input type="button" id="skin" value="test.css" onclick="changeStyle(' {{ asset('/css/ayanami.css') }} '); "/>
   </div>
   <button type="submit" class="btn btn-primary">変更する</button>
 </div>

  </div>
@endsection

<!-- スクリプトで設定した後に表示させる機能を実装 -->
<script>
  

  function previewImage(obj)
  {
    var fileReader = new FileReader();
    fileReader.onload = (function() {
      document.getElementById('Newimg').src = fileReader.result;
    });
    fileReader.readAsDataURL(obj.files[0]);
  }
</script>