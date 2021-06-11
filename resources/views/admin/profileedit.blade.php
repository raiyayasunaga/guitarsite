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
          <label for="profile_image">現在のプロフィール画像
              <div class="col-md-10">
                <input type="file" class="form-control-file" name="image">
              </div>
          </label>
        </div>
        <div class="col-md-5">
          
        </div>
      </div>
      @csrf
          <button type="submit" class="btn btn-primary">
            変更する
          </button>
    </form>
  </div>
  <!-- formタグはややこしくなるためあえて分けて考えている -->
    <div class="container">
        <div class="row">
          
        </div>
        <div class="row my-5">
          <div class="col-6">
            <div><h2>カラースキン編集</h2></div>
              <form method="post" action="{{ action('Admin\ProfileController@skin') }}" enctype="multipart/form-data">
                <select class="form-control" name="skin_id" onchange="changestyle('guitar', value)" id="skin">
                    <option value="1">選択して下さい</option>
                    <option value="2">綾波＆アスカ＆マリスキン</option>
                    <option value="3">初号機＆シンジスキン</option>
                    <option value="4">NERVスキン</option>
                    <option value="5">進撃スキン</option>
                    <option value="6">AKIRAスキン</option>
                    <option value="7">ジブリスキン</option>
                </select>
                <div class="my-5">
                  @csrf
                    <button type="submit" class="btn btn-primary">変更する</button>
                </div>
              </form>
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