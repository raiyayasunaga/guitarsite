@extends('layouts.admin')

@section('title', '曲の編集')



@section('content')
    <div class="container">
            <form action="{{ action('Admin\GuitarController@update'), route('user.cord') }}"  method="post" enctype="multipart/form-data">
                @if (count($errors) > 0)
                    <ul>
                        @foreach($errors->all() as $e)
                            <li>{{ $e }}</li>
                        @endforeach
                    </ul>
                @endif
                <div class="row my-3">
                    <label class="col-md-2" for="title">曲のタイトル</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="title" value="{{ $music_form->title }}">
                    </div>
                </div>
                <div class="row">
                    <label class="col-md-2" for="category" >カテゴリー</label>
                    <div class="col-md-10">
                    <!-- データベースで取得した 値に合わせるオンラインサポートする-->
                        <select class="form-control mb-3" name="category">
                                <option selected value="{{ $music_form->category }}">{{ $music_form->category }}</option>
                                <option value="洋楽">洋楽</option>
                                <option value="Jpop">Jpop</option>
                                <option value="ロック">ロック</option>
                                <option value="アニソン">アニソン</option>
                                <option value="ジブリ">ジブリ</option>
                                <option value="なし">なし</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2" for="capo">設定するカポ数</label>
                        <div class="col-md-10">
                            <select class="form-control mb-3" name = "capo">
                                <option selected value="{{ $music_form->capo }}">{{ $music_form->capo }}</option>
                                <option value="+7">+7</option>
                                <option value="+6">+6</option>
                                <option value="+5">+5</option>
                                <option value="+4">+4</option>
                                <option value="+3">+3</option>
                                <option value="+2">+2</option>
                                <option value="+1">+1</option>
                                <option value="±0">±0</option>
                                <option value="半音">半音</option>
                            </select>
                        </div>
                </div>
                    
                    <div class="row">
                        <select id="selectCords" onchange="keyChange();" class="form-control">
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
                        <textarea placeholder="歌詞、コードを入力" name="lyrics" class="form-control" onkeyup="origindata()" id="origin-data" rows="5" style="overflow: hidden; height: 134px;">{{ $music_form->lyrics }}</textarea>
                        </div>
                        
                        <div class="my-3">プレビュー</div>
                        
                            <div class="col-12 my-5" id="preview">
                            </div>
                        </div> 
                        @csrf
                        <input type="hidden" value="{{ $music_form->id }}" name="id">
                        <input type="submit" class="btn btn-primary mb-5" value="更新する">
                    </div>
            </form>          
    </div>
@endsection

@section('js')
<script>
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
  let result = input.replace(/\[.*?]|\n/g, cords);
  function cords(match){
    switch(match) {
        case '[C]':
            return '<img src="/img/C.png">';
            break;
        case "\n":
            return '<br>';
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
        case '[CM7]':
            return '<img src="/img/CM_7.png">';
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
</script>
@endsection