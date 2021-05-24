@extends('layouts.admin')

@section('title', 'プロフィール編集')

@section('content')
  <div class="container">
    <form method="post" action="{{ route('user.image', ['user' => $user->id]) }}" enctype="multipart/form-data">
      @csrf
      
      <label for="profile_image">現在のプロフィール画像
        <img src="{{ asset('storage/profiles/'.$user->profile_image) }}" id="img">
      </label>

      <label for="profile_image" class="btn">
      </label>
      <label>変更後画像</label>
      <label>
        <input id="profile_image" type="file"  name="profile_image" onchange="previewImage(this);">
      </label>

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
      document.getElementById('img').src = fileReader.result;
    });
    fileReader.readAsDataURL(obj.files[0]);
  }
</script>