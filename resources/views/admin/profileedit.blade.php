@extends('layouts.admin')

@section('title', 'プロフィール編集')

@section('style')
        <link href="{{ asset('/css/admin.css') }}" rel="stylesheet" id="guitar" />
@endsection

@section('content')
  <div class="container">
   <h2 class="my-3">プロフィール編集</h2>
    <form method="post" action="{{ action('Admin\ProfileController@update'), route('user.image') }}" enctype="multipart/form-data">
      <div class="row">
          <div class="col-md-3">
            <div>現在のプロフィール画像</div>
            <img src="{{ $user->profile_image }}" style="width: 100px;">
          </div>

          <div class="col-md-3">
            <div>変更後のプロフィール画像</div>
              <img src="{{ $user->profile_image }}" id="Newimg"  style="width: 200px;">  
          </div>
      </div>
      <div class="row">
        <input id="profile_image" type="file"  name="image" onchange="previewImage(this);">
      </div>
      <!-- formタグはややこしくなるためあえて分けて考えている -->
        <div class="row my-5">
          <div class="col-6">
            <div><h2>カラースキン編集</h2></div>
                <select class="form-control" name="skin_id" id="skin">
                  @if($user->skin_id == "1")
                    <option selected value="1">選択して下さい</option>
                    <option value="2">綾波＆アスカ＆マリスキン</option>
                    <option value="3">初号機＆シンジスキン</option>
                    <option value="4">NERVスキン</option>
                    <option value="5">進撃スキン</option>
                    <option value="6">AKIRAスキン</option>
                    <option value="7">ジブリスキン</option>
                  @elseif($user->skin_id == "2")
                    <option value="1">選択して下さい</option>
                    <option selected value="2">綾波＆アスカ＆マリスキン</option>
                    <option value="3">初号機＆シンジスキン</option>
                    <option value="4">NERVスキン</option>
                    <option value="5">進撃スキン</option>
                    <option value="6">AKIRAスキン</option>
                    <option value="7">ジブリスキン</option>
                  @elseif($user->skin_id == "3")
                    <option value="1">選択して下さい</option>
                    <option value="2">綾波＆アスカ＆マリスキン</option>
                    <option selected value="3">初号機＆シンジスキン</option>
                    <option value="4">NERVスキン</option>
                    <option value="5">進撃スキン</option>
                    <option value="6">AKIRAスキン</option>
                    <option value="7">ジブリスキン</option>
                  @elseif($user->skin_id == "4")
                    <option value="1">選択して下さい</option>
                    <option value="2">綾波＆アスカ＆マリスキン</option>
                    <option value="3">初号機＆シンジスキン</option>
                    <option selected value="4">NERVスキン</option>
                    <option value="5">進撃スキン</option>
                    <option value="6">AKIRAスキン</option>
                    <option value="7">ジブリスキン</option>
                  @elseif($user->skin_id == "5")
                    <option value="1">選択して下さい</option>
                    <option value="2">綾波＆アスカ＆マリスキン</option>
                    <option value="3">初号機＆シンジスキン</option>
                    <option value="4">NERVスキン</option>
                    <option selected value="5">進撃スキン</option>
                    <option value="6">AKIRAスキン</option>
                    <option value="7">ジブリスキン</option>
                  @elseif($user->skin_id == "6")
                    <option value="1">選択して下さい</option>
                    <option value="2">綾波＆アスカ＆マリスキン</option>
                    <option value="3">初号機＆シンジスキン</option>
                    <option value="4">NERVスキン</option>
                    <option value="5">進撃スキン</option>
                    <option selected value="6">AKIRAスキン</option>
                    <option value="7">ジブリスキン</option>
                  @elseif($user->skin_id == "7")
                    <option value="1">選択して下さい</option>
                    <option value="2">綾波＆アスカ＆マリスキン</option>
                    <option value="3">初号機＆シンジスキン</option>
                    <option value="4">NERVスキン</option>
                    <option value="5">進撃スキン</option>
                    <option value="6">AKIRAスキン</option>
                    <option selected value="7">ジブリスキン</option>
                  @else
                    <option selected value="1">選択してください</option>
                    <option value="2">綾波＆アスカ＆マリスキン</option>
                    <option value="3">初号機＆シンジスキン</option>
                    <option value="4">NERVスキン</option>
                    <option value="5">進撃スキン</option>
                    <option value="6">AKIRAスキン</option>
                    <option value="7">ジブリスキン</option>
                  @endif
                </select>
          </div>
          <div class="col-6">
            <div><h2>カラースキンプレビュー</h2>
            <select class="form-control" onchange="changeCss('guitar', value)" id="skin">
              <option value="{{ asset('/css/guitar.css') }}">選択して下さい</option>
              <option value="{{ asset('/css/ayanami.css') }}">綾波＆アスカ＆マリスキン</option>
              <option value="{{ asset('/css/shogouki.css') }}">初号機＆シンジスキン</option>
              <option value="{{ asset('/css/nerv.css') }}">NERVスキン</option>
              <option value="{{ asset('/css/shingeki.css') }}">進撃スキン</option>
              <option value="{{ asset('/css/akira.css') }}">AKIRAスキン</option>
              <option value="{{ asset('/css/giburi.css') }}">ジブリスキン</option>
            </select>
            <span>※若干スタイルが崩れますが保存後は正常に機能します。</span>
          </div>
        </div>
        <div class="row">
          <div class="col-md-10">
            <input type="text" value="{{ $user->name }}" name="name">
          </div>
        </div>

        <div class="row my-5">
            @csrf
            <button type="submit" class="btn btn-primary">変更する</button>
          </div>
    </form>
    </div>

  
@endsection
<script>
function changeCss(cssid, cssfile) {
  document.getElementById(cssid).href = cssfile;
}

// 画像を表示させる
  function previewImage(obj)
  {
    let fileReader = new FileReader();
    fileReader.onload = (function() {
      document.getElementById('Newimg').src = fileReader.result;
    });
    fileReader.readAsDataURL(obj.files[0]);
  }
</script>