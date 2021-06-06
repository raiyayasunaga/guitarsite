@extends('layouts.admin')

@section('title', '曲の作成')

@section('style')
<style>
   
</style>
@endsection

@section('content')
    <div class="container">
            <form action="{{ action('Admin\GuitarController@create') }}" method="post" enctype="multipart/form-data">
                @if (count($errors) > 0)
                    <ul>
                        @foreach($errors->all() as $e)
                            <li>{{ $e }}</li>
                        @endforeach
                    </ul>
                @endif
                <div class="form-group row mt-5">
                    <label class="col-md-2" for="title">曲のタイトル</label>
                    <div class="col-10">
                        <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2" for="category" >カテゴリー</label>
                    <div class="col-10">
                        <select class="form-control mb-3" name="category" value="{{ old('category') }}">
                                <option value="なし" selected  @if(old('category')=='なし') selected  @endif>なし</option>
                                <option value="洋楽" @if(old('category')=='洋楽') selected  @endif>洋楽</option>
                                <option value="Jpop" @if(old('category')=='Jpop') selected  @endif>Jpop</option>
                                <option value="ロック"  @if(old('category')=='ロック') selected  @endif>ロック</option>
                                <option value="アニソン"  @if(old('category')=='アニソン') selected  @endif>アニソン</option>
                                <option value="ジブリ"  @if(old('category')=='ジブリ') selected  @endif>ジブリ</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2" for="capo">設定するカポ数</label>
                        <div class="col-10">
                            <select class="form-control mb-3" name = "capo" value="{{ old('capo') }}">
                                <option value="半音"  @if(old('capo')=='半音') selected  @endif>半音</option>
                                <option value="+-0" selected @if(old('capo')=='±0') selected  @endif>±0</option>
                                <option value="+1" @if(old('capo')=='+1') selected  @endif>+1</option>
                                <option value="+2" @if(old('capo')=='+2') selected  @endif>+2</option>
                                <option value="+3" @if(old('capo')=='+3') selected  @endif>+3</option>
                                <option value="+4" @if(old('capo')=='+4') selected  @endif>+4</option>
                                <option value="+5" @if(old('capo')=='+5') selected  @endif>+5</option>
                                <option value="+6" @if(old('capo')=='+6') selected  @endif>+6</option>
                                <option value="+7" @if(old('capo')=='+7') selected  @endif>+7</option>
                            </select>
                        </div>
                </div>
                    <div class="row">
                        <select id="selectCords" name="music_key_sel" onchange="keyChange();" class="form-control">
					      <option value="1">C = Am</option>
					      <option value="2">C# = A#m</option>
					      <option value="3">D = Bm</option>
					      <option value="4">E♭ = Cm</option>
					      <option value="5">E = C#m</option>
					      <option value="6">F = Dm</option>
					      <option value="7">F# = D#m</option>
					      <option value="8">G = Em</option>
					      <option value="9">A♭ = Fm</option>
					      <option value="10">A = F#m</option>
					      <option value="11">B♭ = Gm</option>
					      <option value="12">B = G#m</option>
					    </select>

                        <div class="col-12 my-5">
                            <div id="otherCords">
                                <div id="key_C">
                                    <button type="button" class="btn btn-outline-primary m-1" onclick="chord_insert('[C]');">C</button>
                                    <button type="button" class="btn btn-outline-primary m-1" onclick="chord_insert('[Cm]');">Cm</button>
                                    <button type="button" class="btn btn-outline-primary m-1" onclick="chord_insert('[Cdim]');">Cdim</button>
                                    <button type="button" class="btn btn-outline-primary m-1" onclick="chord_insert('[CM7]');">CM7</button>
                                    <button type="button" class="btn btn-outline-primary m-1" onclick="chord_insert('[Cadd9]');">Cadd9</button>
                                    <button type="button" class="btn btn-outline-primary m-1" onclick="chord_insert('<br>');">改行ボタン</button>
                                </div>
                                <div id="key_C#" style="display: none;">
                                    <button type="button" class="btn btn-outline-primary m-1" onclick="chord_insert('[C#]');">C#</button>
                                    <button type="button" class="btn btn-outline-primary m-1" onclick="chord_insert('[Cm#]');">Cm#</button>
                                </div>
                                <div id="key_D" style="display: none;">
                                    <button type="button" class="btn btn-outline-primary m-1" onclick="chord_insert('[D]');">D</button>
                                    <button type="button" class="btn btn-outline-primary m-1" onclick="chord_insert('[Dm]');">Dm</button>
                                </div>
                                <div id="key_Eb" style="display: none;">
                                    <button type="button" class="btn btn-outline-primary m-1" onclick="chord_insert('[D#]');">D#</button>
                                    <button type="button" class="btn btn-outline-primary m-1" onclick="chord_insert('[Dm#]');">Dm#</button>
                                </div>
                                <div id="key_E" style="display: none;">
                                    <button type="button" class="btn btn-outline-primary m-1" onclick="chord_insert('[E]');">E</button>
                                    <button type="button" class="btn btn-outline-primary m-1" onclick="chord_insert('[Em]');">Em</button>
                                </div>
                                <div id="key_F" style="display: none;">
                                    <button type="button" class="btn btn-outline-primary m-1" onclick="chord_insert('[F]');">F</button>
                                    <button type="button" class="btn btn-outline-primary m-1" onclick="chord_insert('[Fm]');">Fm</button>
                                </div>
                                <div id="key_F#" style="display: none;">
                                    <button type="button" class="btn btn-outline-primary m-1" onclick="chord_insert('[F#]');">F#</button>
                                    <button type="button" class="btn btn-outline-primary m-1" onclick="chord_insert('[Fm#]');">Fm#</button>
                                </div>
                                <div id="key_G" style="display: none;">
                                    <button type="button" class="btn btn-outline-primary m-1" onclick="chord_insert('[G]');">G</button>
                                    <button type="button" class="btn btn-outline-primary m-1" onclick="chord_insert('[Gm]');">Gm</button>
                                </div>
                                <div id="key_Ab" style="display: none;">
                                    <button type="button" class="btn btn-outline-primary m-1" onclick="chord_insert('[G#]');">G#</button>
                                    <button type="button" class="btn btn-outline-primary m-1" onclick="chord_insert('[Gm#]');">Gm#</button>
                                </div>
                                <div id="key_A" style="display: none;">
                                    <button type="button" class="btn btn-outline-primary m-1" onclick="chord_insert('[A]');">A</button>
                                    <button type="button" class="btn btn-outline-primary m-1" onclick="chord_insert('[Am]');">Am</button>
                                </div>
                                <div id="key_Bb" style="display: none;">
                                    <button type="button" class="btn btn-outline-primary m-1" onclick="chord_insert('[A#]');">A#</button>
                                    <button type="button" class="btn btn-outline-primary m-1" onclick="chord_insert('[Am#]');">Am#</button>
                                </div>
                                <div id="key_B" style="display: none;">
                                    <button type="button" class="btn btn-outline-primary m-1" onclick="chord_insert('[B]');">B</button>
                                    <button type="button" class="btn btn-outline-primary m-1" onclick="chord_insert('[Bm]');">Bm</button>
                                </div>
                            </div>
                        </div>


                        <div class="col-12">
                        <textarea placeholder="歌詞、コードを入力" name="lyrics" class="form-control" onkeyup="origindata()" id="origin-data"  rows="5" style="overflow: hidden; height: 134px;"></textarea>
                        </div>
                        
                        <div class="my-3">プレビュー</div>
                        
                            <div class="col-12 my-5" id="preview">
                            </div>
                        </div> 
                        @csrf
                        <input type="submit" class="btn btn-primary mb-5" value="追加する">
                    </div>
            </form>    
        </div>
@endsection

@section('js')
<script>
    //セレクトでボタンの種類を変える
    
    function keyChange() {
        if(document.getElementById('selectCords')){
            id = document.getElementById('selectCords').value;
            if(id == '1') {
                document.getElementById('key_C').style.display = "";
                document.getElementById('key_C#').style.display = "none";
                document.getElementById('key_D').style.display = "none";
                document.getElementById('key_Eb').style.display = "none";
                document.getElementById('key_E').style.display = "none";
                document.getElementById('key_F').style.display = "none";
                document.getElementById('key_F#').style.display = "none";
                document.getElementById('key_G').style.display = "none";
                document.getElementById('key_Ab').style.display = "none";
                document.getElementById('key_A').style.display = "none";
                document.getElementById('key_Bb').style.display = "none";
                document.getElementById('key_B').style.display = "none";
            }else if(id == '2') {
                document.getElementById('key_C').style.display = "none";
                document.getElementById('key_C#').style.display = "";
                document.getElementById('key_D').style.display = "none";
                document.getElementById('key_Eb').style.display = "none";
                document.getElementById('key_E').style.display = "none";
                document.getElementById('key_F').style.display = "none";
                document.getElementById('key_F#').style.display = "none";
                document.getElementById('key_G').style.display = "none";
                document.getElementById('key_Ab').style.display = "none";
                document.getElementById('key_A').style.display = "none";
                document.getElementById('key_Bb').style.display = "none";
                document.getElementById('key_B').style.display = "none";
            }else if(id == '3') {
                document.getElementById('key_C').style.display = "none";
                document.getElementById('key_C#').style.display = "none";
                document.getElementById('key_D').style.display = "";
                document.getElementById('key_Eb').style.display = "none";
                document.getElementById('key_E').style.display = "none";
                document.getElementById('key_F').style.display = "none";
                document.getElementById('key_F#').style.display = "none";
                document.getElementById('key_G').style.display = "none";
                document.getElementById('key_Ab').style.display = "none";
                document.getElementById('key_A').style.display = "none";
                document.getElementById('key_Bb').style.display = "none";
                document.getElementById('key_B').style.display = "none";
            }else if(id == '4') {
                document.getElementById('key_C').style.display = "none";
                document.getElementById('key_C#').style.display = "none";
                document.getElementById('key_D').style.display = "none";
                document.getElementById('key_Eb').style.display = "";
                document.getElementById('key_E').style.display = "none";
                document.getElementById('key_F').style.display = "none";
                document.getElementById('key_F#').style.display = "none";
                document.getElementById('key_G').style.display = "none";
                document.getElementById('key_Ab').style.display = "none";
                document.getElementById('key_A').style.display = "none";
                document.getElementById('key_Bb').style.display = "none";
                document.getElementById('key_B').style.display = "none";
            }else if(id == '5') {
                document.getElementById('key_C').style.display = "none";
                document.getElementById('key_C#').style.display = "none";
                document.getElementById('key_D').style.display = "none";
                document.getElementById('key_Eb').style.display = "none";
                document.getElementById('key_E').style.display = "";
                document.getElementById('key_F').style.display = "none";
                document.getElementById('key_F#').style.display = "none";
                document.getElementById('key_G').style.display = "none";
                document.getElementById('key_Ab').style.display = "none";
                document.getElementById('key_A').style.display = "none";
                document.getElementById('key_Bb').style.display = "none";
                document.getElementById('key_B').style.display = "none";
            }else if(id == '6') {
                document.getElementById('key_C').style.display = "none";
                document.getElementById('key_C#').style.display = "none";
                document.getElementById('key_D').style.display = "none";
                document.getElementById('key_Eb').style.display = "none";
                document.getElementById('key_E').style.display = "none";
                document.getElementById('key_F').style.display = "";
                document.getElementById('key_F#').style.display = "none";
                document.getElementById('key_G').style.display = "none";
                document.getElementById('key_Ab').style.display = "none";
                document.getElementById('key_A').style.display = "none";
                document.getElementById('key_Bb').style.display = "none";
                document.getElementById('key_B').style.display = "none";
            }else if(id == '7') {
                document.getElementById('key_C').style.display = "none";
                document.getElementById('key_C#').style.display = "none";
                document.getElementById('key_D').style.display = "none";
                document.getElementById('key_Eb').style.display = "none";
                document.getElementById('key_E').style.display = "none";
                document.getElementById('key_F').style.display = "none";
                document.getElementById('key_F#').style.display = "";
                document.getElementById('key_G').style.display = "none";
                document.getElementById('key_Ab').style.display = "none";
                document.getElementById('key_A').style.display = "none";
                document.getElementById('key_Bb').style.display = "none";
                document.getElementById('key_B').style.display = "none";
            }else if(id == '8') {
                document.getElementById('key_C').style.display = "none";
                document.getElementById('key_C#').style.display = "none";
                document.getElementById('key_D').style.display = "none";
                document.getElementById('key_Eb').style.display = "none";
                document.getElementById('key_E').style.display = "none";
                document.getElementById('key_F').style.display = "none";
                document.getElementById('key_F#').style.display = "none";
                document.getElementById('key_G').style.display = "";
                document.getElementById('key_Ab').style.display = "none";
                document.getElementById('key_A').style.display = "none";
                document.getElementById('key_Bb').style.display = "none";
                document.getElementById('key_B').style.display = "none";
            }else if(id == '9') {
                document.getElementById('key_C').style.display = "none";
                document.getElementById('key_C#').style.display = "none";
                document.getElementById('key_D').style.display = "none";
                document.getElementById('key_Eb').style.display = "none";
                document.getElementById('key_E').style.display = "none";
                document.getElementById('key_F').style.display = "none";
                document.getElementById('key_F#').style.display = "none";
                document.getElementById('key_G').style.display = "none";
                document.getElementById('key_Ab').style.display = "";
                document.getElementById('key_A').style.display = "none";
                document.getElementById('key_Bb').style.display = "none";
                document.getElementById('key_B').style.display = "none";
            }else if(id == '10') {
                document.getElementById('key_C').style.display = "none";
                document.getElementById('key_C#').style.display = "none";
                document.getElementById('key_D').style.display = "none";
                document.getElementById('key_Eb').style.display = "none";
                document.getElementById('key_E').style.display = "none";
                document.getElementById('key_F').style.display = "none";
                document.getElementById('key_F#').style.display = "none";
                document.getElementById('key_G').style.display = "none";
                document.getElementById('key_Ab').style.display = "none";
                document.getElementById('key_A').style.display = "";
                document.getElementById('key_Bb').style.display = "none";
                document.getElementById('key_B').style.display = "none";
            }else if(id == '11') {
                document.getElementById('key_C').style.display = "none";
                document.getElementById('key_C#').style.display = "none";
                document.getElementById('key_D').style.display = "none";
                document.getElementById('key_Eb').style.display = "none";
                document.getElementById('key_E').style.display = "none";
                document.getElementById('key_F').style.display = "none";
                document.getElementById('key_F#').style.display = "none";
                document.getElementById('key_G').style.display = "none";
                document.getElementById('key_Ab').style.display = "none";
                document.getElementById('key_A').style.display = "none";
                document.getElementById('key_Bb').style.display = "";
                document.getElementById('key_B').style.display = "none";
            }else if(id == '12') {
                document.getElementById('key_C').style.display = "none";
                document.getElementById('key_C#').style.display = "none";
                document.getElementById('key_D').style.display = "none";
                document.getElementById('key_Eb').style.display = "none";
                document.getElementById('key_E').style.display = "none";
                document.getElementById('key_F').style.display = "none";
                document.getElementById('key_F#').style.display = "none";
                document.getElementById('key_G').style.display = "none";
                document.getElementById('key_Ab').style.display = "none";
                document.getElementById('key_A').style.display = "none";
                document.getElementById('key_Bb').style.display = "none";
                document.getElementById('key_B').style.display = "";
            }
        }
    }

    // ボタンを値によって表示を変える、カーソルの位置も自由にできる！！
    function chord_insert($this) {
        let textarea = document.querySelector('textarea');

        let sentence = textarea.value;
        let len      = sentence.length;
        let pos      = textarea.selectionStart;

        let before   = sentence.substr(0, pos);
        let word     = $this;
        let after    = sentence.substr(pos, len);

        sentence = before + word + after;

        textarea.value = sentence;
            $('#origin-data') . append($this);
    }



    function origindata() {
  let input = document.getElementById( "origin-data" ).value;
  let result = input.replace(/\[.*?]/g, cords);
  function cords(match){
    switch(match) {
        case '[C]':
            return '<img src="/img/C.png">';
            break;
        case '[Cdim]':
            return '<img src="/img/Cdim.png">';
            break;
        case '[Cm]':
            return '<img src="/img/Cm.png">';
            break;
        case '[G]':
            return '<img src="/img/G.png">';
            break;
        case '[Am]':
            return '<img src="/img/Am.png">';
            break;
        case '[F]':
            return '<img src="/img/F.png">';
            break;
        case '[Em]':
            return '<img src="/img/Em.png">';
            break;
        case '[Cadd9]':
            return '<img src="/img/Cadd9.png">';
            break;
        default:
            return match;
    }
  }
  document.getElementById( "preview" ).innerHTML = result;

}   
    // ボタンの画像を変えるはずだが、、
    


</script>
@endsection