@extends('layouts.admin')

@section('title', 'コード一覧')

@section('content')
  <div id ="cordbackground">
    <div class="container">

      <div class="row py-5">
        <h2>コード表A〜G</h2>
        <h2><a href="playing">演奏しよう！</a></h2>
      </div>
      <div>いろいろ試している</di>
      <div id="app">
        <example-component></example-component>
      </div>
      
      <div class="row cordmenu">
        <p class="cord"><a href = "#C_cord">Cコード</a></p>
        <p class="cord"><a href = "#C#/Db_cord">C#/Dbコード</a></p>
        <p class="cord"><a href = "#D_cord">Dコード</a></p>
        <p class="cord"><a href = "#D#/Eb_cord">D#/Ebコード</a></p>
        <p class="cord"><a href = "#E_cord">Eコード</a></p>
        <p class="cord"><a href = "#F_cord">Fコード</a></p>
        <p class="cord"><a href = "#F#/Gb_cord">F#/Gbコード</a></p>
      </div>
      <div class="row cordmenu">
        <p class="cord"><a href = "#G_cord">Gコード</a></p>
        <p class="cord"><a href = "#G#/Ab_cord">G#/Abコード</a></p>
        <p class="cord"><a href = "#A_cord">Aコード</a></p>
        <p class="cord"><a href = "#A#/Bb_cord">A#/Bbコード</a></p>
        <p class="cord"><a href = "#B_cord">Bコード</a></p>

      </div>
      <hr>

        <div id = "C_cord" class="row my-5">
          <h2>Cコード</h2>
        </div>
        <div class="row cordmenu">
        <p class="cord"><a href = "#C_cord">Cコード</a></p>
        <p class="cord"><a href = "#C#/Db_cord">C#/Dbコード</a></p>
        <p class="cord"><a href = "#D_cord">Dコード</a></p>
        <p class="cord"><a href = "#D#/Eb_cord">D#/Ebコード</a></p>
        <p class="cord"><a href = "#E_cord">Eコード</a></p>
        <p class="cord"><a href = "#F_cord">Fコード</a></p>
        <p class="cord"><a href = "#F#/Gb_cord">F#/Gbコード</a></p>
      </div>
      <div class="row cordmenu">
        <p class="cord"><a href = "#G_cord">Gコード</a></p>
        <p class="cord"><a href = "#G#/Ab_cord">G#/Abコード</a></p>
        <p class="cord"><a href = "#A_cord">Aコード</a></p>
        <p class="cord"><a href = "#A#/Bb_cord">A#/Bbコード</a></p>
        <p class="cord"><a href = "#B_cord">Bコード</a></p>

      </div>
        <div class="row">
          <div class="col-md-2 p-3 mr-3" >
            <p class="cord-font">Cコード</p>
            <img src="/image/C.png" alt="C">
          </div>
          <div class="col-md-2 p-3 mx-3">
          <p class="cord-font">Cmコード</p>
            <img src="/image/Cm.png" alt="Cm">
          </div>
          <div class="col-md-2 p-3 mx-3">
          <p class="cord-font">C7コード</p>
            <img src="/image/C7.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
          <p class="cord-font">Cdimコード</p>
            <img src="/image/Cdim.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
          <p class="cord-font">Cm7コード</p>
            <img src="/image/Cm7.png" alt="サンプル画像">
          </div>
          
          <div class="col-md-2 p-3 mx-3">
          <p class="cord-font">Cm7(2)コード</p>
            <img src="/image/Cm7_2.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
          <p class="cord-font">Cm7b5コード</p>
            <img src="/image/Cm7b5.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
            <p class="cord-font">CmM7コード</p>
            <img src="/image/CmM7.png" alt="サンプル画像">
          </div>
          
          <div class="col-md-2 p-3 mx-3">
            <p class="cord-font">C6コード</p>
            <img src="/image/C6.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
            <p class="cord-font">Cadd9コード</p>
            <img src="/image/Cadd9.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
            <p class="cord-font">Caugコード</p>
            <img src="/image/Caug.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
            <p class="cord-font">Csus4コード</p>
            <img src="/image/Csus4.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
            <p class="cord-font">Caugコード</p>
            <img src="/image/Caug.png" alt="サンプル画像">
          </div>
        </div>

        <hr>
        <div id ="C#/Db_cord" class="row my-4">
          <h2>C#/Dbコード</h2>
        </div>
        <div class="row cordmenu">
        <p class="cord"><a href = "#C_cord">Cコード</a></p>
        <p class="cord"><a href = "#C#/Db_cord">C#/Dbコード</a></p>
        <p class="cord"><a href = "#D_cord">Dコード</a></p>
        <p class="cord"><a href = "#D#/Eb_cord">D#/Ebコード</a></p>
        <p class="cord"><a href = "#E_cord">Eコード</a></p>
        <p class="cord"><a href = "#F_cord">Fコード</a></p>
        <p class="cord"><a href = "#F#/Gb_cord">F#/Gbコード</a></p>
      </div>
      <div class="row cordmenu">
        <p class="cord"><a href = "#G_cord">Gコード</a></p>
        <p class="cord"><a href = "#G#/Ab_cord">G#/Abコード</a></p>
        <p class="cord"><a href = "#A_cord">Aコード</a></p>
        <p class="cord"><a href = "#A#/Bb_cord">A#/Bbコード</a></p>
        <p class="cord"><a href = "#B_cord">Bコード</a></p>

      </div>
        <div class="row">
          <div class="col-md-2 p-3 mr-3" >
            <p class="cord-font">Cコード</p>
            <img src="/image/C.png" alt="C">
          </div>
          <div class="col-md-2 p-3 mx-3">
          <p class="cord-font">Cmコード</p>
            <img src="/image/Cm.png" alt="Cm">
          </div>
          <div class="col-md-2 p-3 mx-3">
          <p class="cord-font">C7コード</p>
            <img src="/image/C7.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
          <p class="cord-font">Cdimコード</p>
            <img src="/image/Cdim.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
          <p class="cord-font">Cm7コード</p>
            <img src="/image/Cm7.png" alt="サンプル画像">
          </div>
          
          <div class="col-md-2 p-3 mx-3">
          <p class="cord-font">Cm7(2)コード</p>
            <img src="/image/Cm7_2.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
          <p class="cord-font">Cm7b5コード</p>
            <img src="/image/Cm7b5.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
            <p class="cord-font">CmM7コード</p>
            <img src="/image/CmM7.png" alt="サンプル画像">
          </div>
          
          <div class="col-md-2 p-3 mx-3">
            <p class="cord-font">C6コード</p>
            <img src="/image/C6.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
            <p class="cord-font">Cadd9コード</p>
            <img src="/image/Cadd9.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
            <p class="cord-font">Caugコード</p>
            <img src="/image/Caug.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
            <p class="cord-font">Csus4コード</p>
            <img src="/image/Csus4.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
            <p class="cord-font">Caugコード</p>
            <img src="/image/Caug.png" alt="サンプル画像">
          </div>
        </div>

        <hr>
        <div id="D_cord" class="row my-4">
          <h2>Dコード</h2>
        </div>
        <div class="row cordmenu">
        <p class="cord"><a href = "#C_cord">Cコード</a></p>
        <p class="cord"><a href = "#C#/Db_cord">C#/Dbコード</a></p>
        <p class="cord"><a href = "#D_cord">Dコード</a></p>
        <p class="cord"><a href = "#D#/Eb_cord">D#/Ebコード</a></p>
        <p class="cord"><a href = "#E_cord">Eコード</a></p>
        <p class="cord"><a href = "#F_cord">Fコード</a></p>
        <p class="cord"><a href = "#F#/Gb_cord">F#/Gbコード</a></p>
      </div>
      <div class="row cordmenu">
        <p class="cord"><a href = "#G_cord">Gコード</a></p>
        <p class="cord"><a href = "#G#/Ab_cord">G#/Abコード</a></p>
        <p class="cord"><a href = "#A_cord">Aコード</a></p>
        <p class="cord"><a href = "#A#/Bb_cord">A#/Bbコード</a></p>
        <p class="cord"><a href = "#B_cord">Bコード</a></p>

      </div>
        <div class="row">
          <div class="col-md-2 p-3 mr-3" >
            <p class="cord-font">Cコード</p>
            <img src="/image/C.png" alt="C">
          </div>
          <div class="col-md-2 p-3 mx-3">
          <p class="cord-font">Cmコード</p>
            <img src="/image/Cm.png" alt="Cm">
          </div>
          <div class="col-md-2 p-3 mx-3">
          <p class="cord-font">C7コード</p>
            <img src="/image/C7.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
          <p class="cord-font">Cdimコード</p>
            <img src="/image/Cdim.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
          <p class="cord-font">Cm7コード</p>
            <img src="/image/Cm7.png" alt="サンプル画像">
          </div>
          
          <div class="col-md-2 p-3 mx-3">
          <p class="cord-font">Cm7(2)コード</p>
            <img src="/image/Cm7_2.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
          <p class="cord-font">Cm7b5コード</p>
            <img src="/image/Cm7b5.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
            <p class="cord-font">CmM7コード</p>
            <img src="/image/CmM7.png" alt="サンプル画像">
          </div>
          
          <div class="col-md-2 p-3 mx-3">
            <p class="cord-font">C6コード</p>
            <img src="/image/C6.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
            <p class="cord-font">Cadd9コード</p>
            <img src="/image/Cadd9.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
            <p class="cord-font">Caugコード</p>
            <img src="/image/Caug.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
            <p class="cord-font">Csus4コード</p>
            <img src="/image/Csus4.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
            <p class="cord-font">Caugコード</p>
            <img src="/image/Caug.png" alt="サンプル画像">
          </div>
        </div>

        <hr>
        <div id="D#/Eb_cord" class="row">
          <h2>D＃Ebコード</h2>
        </div>
        <div class="row cordmenu">
        <p class="cord"><a href = "#C_cord">Cコード</a></p>
        <p class="cord"><a href = "#C#/Db_cord">C#/Dbコード</a></p>
        <p class="cord"><a href = "#D_cord">Dコード</a></p>
        <p class="cord"><a href = "#D#/Eb_cord">D#/Ebコード</a></p>
        <p class="cord"><a href = "#E_cord">Eコード</a></p>
        <p class="cord"><a href = "#F_cord">Fコード</a></p>
        <p class="cord"><a href = "#F#/Gb_cord">F#/Gbコード</a></p>
      </div>
      <div class="row cordmenu">
        <p class="cord"><a href = "#G_cord">Gコード</a></p>
        <p class="cord"><a href = "#G#/Ab_cord">G#/Abコード</a></p>
        <p class="cord"><a href = "#A_cord">Aコード</a></p>
        <p class="cord"><a href = "#A#/Bb_cord">A#/Bbコード</a></p>
        <p class="cord"><a href = "#B_cord">Bコード</a></p>

      </div>
        <div class="row">
        
        </div>

        <hr>
        <div id="E_cord" class="row">
          <h2>Eコード</h2>
        </div>
        <div class="row cordmenu">
        <p class="cord"><a href = "#C_cord">Cコード</a></p>
        <p class="cord"><a href = "#C#/Db_cord">C#/Dbコード</a></p>
        <p class="cord"><a href = "#D_cord">Dコード</a></p>
        <p class="cord"><a href = "#D#/Eb_cord">D#/Ebコード</a></p>
        <p class="cord"><a href = "#E_cord">Eコード</a></p>
        <p class="cord"><a href = "#F_cord">Fコード</a></p>
        <p class="cord"><a href = "#F#/Gb_cord">F#/Gbコード</a></p>
      </div>
      <div class="row cordmenu">
        <p class="cord"><a href = "#G_cord">Gコード</a></p>
        <p class="cord"><a href = "#G#/Ab_cord">G#/Abコード</a></p>
        <p class="cord"><a href = "#A_cord">Aコード</a></p>
        <p class="cord"><a href = "#A#/Bb_cord">A#/Bbコード</a></p>
        <p class="cord"><a href = "#B_cord">Bコード</a></p>

      </div>
        <div class="row">
        
        </div>

        <hr>
        <div id="F_cord" class="row">
          <h2>Fコード</h2>
        </div>
        <div class="row cordmenu">
        <p class="cord"><a href = "#C_cord">Cコード</a></p>
        <p class="cord"><a href = "#C#/Db_cord">C#/Dbコード</a></p>
        <p class="cord"><a href = "#D_cord">Dコード</a></p>
        <p class="cord"><a href = "#D#/Eb_cord">D#/Ebコード</a></p>
        <p class="cord"><a href = "#E_cord">Eコード</a></p>
        <p class="cord"><a href = "#F_cord">Fコード</a></p>
        <p class="cord"><a href = "#F#/Gb_cord">F#/Gbコード</a></p>
      </div>
      <div class="row cordmenu">
        <p class="cord"><a href = "#G_cord">Gコード</a></p>
        <p class="cord"><a href = "#G#/Ab_cord">G#/Abコード</a></p>
        <p class="cord"><a href = "#A_cord">Aコード</a></p>
        <p class="cord"><a href = "#A#/Bb_cord">A#/Bbコード</a></p>
        <p class="cord"><a href = "#B_cord">Bコード</a></p>

      </div>
        <div class="row">
        
        </div>

        <hr>
        <div id="F#/Gb_cord" class="row">
          <h2>F#/Gbコード</h2>
        </div>
        <div class="row cordmenu">
        <p class="cord"><a href = "#C_cord">Cコード</a></p>
        <p class="cord"><a href = "#C#/Db_cord">C#/Dbコード</a></p>
        <p class="cord"><a href = "#D_cord">Dコード</a></p>
        <p class="cord"><a href = "#D#/Eb_cord">D#/Ebコード</a></p>
        <p class="cord"><a href = "#E_cord">Eコード</a></p>
        <p class="cord"><a href = "#F_cord">Fコード</a></p>
        <p class="cord"><a href = "#F#/Gb_cord">F#/Gbコード</a></p>
      </div>
      <div class="row cordmenu">
        <p class="cord"><a href = "#G_cord">Gコード</a></p>
        <p class="cord"><a href = "#G#/Ab_cord">G#/Abコード</a></p>
        <p class="cord"><a href = "#A_cord">Aコード</a></p>
        <p class="cord"><a href = "#A#/Bb_cord">A#/Bbコード</a></p>
        <p class="cord"><a href = "#B_cord">Bコード</a></p>

      </div>
        <div class="row">
        
        </div>

        <hr>
        <div id="G_cord" class="row">
          <h2>Gコード</h2>
        </div>
        <div class="row cordmenu">
        <p class="cord"><a href = "#C_cord">Cコード</a></p>
        <p class="cord"><a href = "#C#/Db_cord">C#/Dbコード</a></p>
        <p class="cord"><a href = "#D_cord">Dコード</a></p>
        <p class="cord"><a href = "#D#/Eb_cord">D#/Ebコード</a></p>
        <p class="cord"><a href = "#E_cord">Eコード</a></p>
        <p class="cord"><a href = "#F_cord">Fコード</a></p>
        <p class="cord"><a href = "#F#/Gb_cord">F#/Gbコード</a></p>
      </div>
      <div class="row cordmenu">
        <p class="cord"><a href = "#G_cord">Gコード</a></p>
        <p class="cord"><a href = "#G#/Ab_cord">G#/Abコード</a></p>
        <p class="cord"><a href = "#A_cord">Aコード</a></p>
        <p class="cord"><a href = "#A#/Bb_cord">A#/Bbコード</a></p>
        <p class="cord"><a href = "#B_cord">Bコード</a></p>

      </div>
        <div class="row">
        
        </div>

        <hr>
        <div id="G#/Ab_cord" class="row">
          <h2>G＃/Abコード</h2>
        </div>
        <div class="row cordmenu">
        <p class="cord"><a href = "#C_cord">Cコード</a></p>
        <p class="cord"><a href = "#C#/Db_cord">C#/Dbコード</a></p>
        <p class="cord"><a href = "#D_cord">Dコード</a></p>
        <p class="cord"><a href = "#D#/Eb_cord">D#/Ebコード</a></p>
        <p class="cord"><a href = "#E_cord">Eコード</a></p>
        <p class="cord"><a href = "#F_cord">Fコード</a></p>
        <p class="cord"><a href = "#F#/Gb_cord">F#/Gbコード</a></p>
      </div>
      <div class="row cordmenu">
        <p class="cord"><a href = "#G_cord">Gコード</a></p>
        <p class="cord"><a href = "#G#/Ab_cord">G#/Abコード</a></p>
        <p class="cord"><a href = "#A_cord">Aコード</a></p>
        <p class="cord"><a href = "#A#/Bb_cord">A#/Bbコード</a></p>
        <p class="cord"><a href = "#B_cord">Bコード</a></p>

      </div>
        <div class="row">
        
        </div>

        <hr>
        <div id="A_cord" class="row">
          <h2>Aコード</h2>
        </div>
        <div class="row cordmenu">
        <p class="cord"><a href = "#C_cord">Cコード</a></p>
        <p class="cord"><a href = "#C#/Db_cord">C#/Dbコード</a></p>
        <p class="cord"><a href = "#D_cord">Dコード</a></p>
        <p class="cord"><a href = "#D#/Eb_cord">D#/Ebコード</a></p>
        <p class="cord"><a href = "#E_cord">Eコード</a></p>
        <p class="cord"><a href = "#F_cord">Fコード</a></p>
        <p class="cord"><a href = "#F#/Gb_cord">F#/Gbコード</a></p>
      </div>
      <div class="row cordmenu">
        <p class="cord"><a href = "#G_cord">Gコード</a></p>
        <p class="cord"><a href = "#G#/Ab_cord">G#/Abコード</a></p>
        <p class="cord"><a href = "#A_cord">Aコード</a></p>
        <p class="cord"><a href = "#A#/Bb_cord">A#/Bbコード</a></p>
        <p class="cord"><a href = "#B_cord">Bコード</a></p>

      </div>
        <div class="row">
        
        </div>

        <hr>
        <div id="A#/Bb_cord" class="row">
          <h2>A＃/Bbコード</h2>
        </div>
        <div class="row cordmenu">
        <p class="cord"><a href = "#C_cord">Cコード</a></p>
        <p class="cord"><a href = "#C#/Db_cord">C#/Dbコード</a></p>
        <p class="cord"><a href = "#D_cord">Dコード</a></p>
        <p class="cord"><a href = "#D#/Eb_cord">D#/Ebコード</a></p>
        <p class="cord"><a href = "#E_cord">Eコード</a></p>
        <p class="cord"><a href = "#F_cord">Fコード</a></p>
        <p class="cord"><a href = "#F#/Gb_cord">F#/Gbコード</a></p>
      </div>
      <div class="row cordmenu">
        <p class="cord"><a href = "#G_cord">Gコード</a></p>
        <p class="cord"><a href = "#G#/Ab_cord">G#/Abコード</a></p>
        <p class="cord"><a href = "#A_cord">Aコード</a></p>
        <p class="cord"><a href = "#A#/Bb_cord">A#/Bbコード</a></p>
        <p class="cord"><a href = "#B_cord">Bコード</a></p>

      </div>
        <div class="row">
        
        </div>

        <hr>
        <div id="B_cord" class="row">
          <h2>Bコード</h2>
        </div>
        <div class="row cordmenu">
        <p class="cord"><a href = "#C_cord">Cコード</a></p>
        <p class="cord"><a href = "#C#/Db_cord">C#/Dbコード</a></p>
        <p class="cord"><a href = "#D_cord">Dコード</a></p>
        <p class="cord"><a href = "#D#/Eb_cord">D#/Ebコード</a></p>
        <p class="cord"><a href = "#E_cord">Eコード</a></p>
        <p class="cord"><a href = "#F_cord">Fコード</a></p>
        <p class="cord"><a href = "#F#/Gb_cord">F#/Gbコード</a></p>
      </div>
      <div class="row cordmenu">
        <p class="cord"><a href = "#G_cord">Gコード</a></p>
        <p class="cord"><a href = "#G#/Ab_cord">G#/Abコード</a></p>
        <p class="cord"><a href = "#A_cord">Aコード</a></p>
        <p class="cord"><a href = "#A#/Bb_cord">A#/Bbコード</a></p>
        <p class="cord"><a href = "#B_cord">Bコード</a></p>

      </div>
        <div class="row">
        
        </div>

    </div>
  </div>
@endsection