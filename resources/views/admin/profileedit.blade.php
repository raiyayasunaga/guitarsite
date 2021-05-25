@extends('layouts.admin')

@section('title', 'プロフィール編集')

@section('content')
  <div class="container">
   <h2 class="my-3">プロフィール編集</h2>
    <form method="post" action="{{ route('user.image', ['user' => $user->id]) }}" enctype="multipart/form-data">
      @csrf
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
            <input id="profile_image" type="file"  name="profile_image" onchange="previewImage(this);">
          </label>
        </div>
      </div>
          <button type="submit" class="btn btn-primary">
            変更する
          </button>
    </form>
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