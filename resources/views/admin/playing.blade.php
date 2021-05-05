@extends('layouts.admin')

@section('title', 'コード作成')

@section('content')
    <div class="container">
      <div class="row">
        <h2>演奏しよう</h2>
        </div>
              <div class="row">
                <form name="speed">
                  <select name="speed" class="form-control" id="speed">
                    <option value="1"><a href="#B_cord">Bコード</option>
                    <option value="3">6</option>
                    <option value="4">7</option>
                    <option value="5">8</option>
                    <option value="6">9</option>
                    <option selected="" value="0">スクロール速度（基準10）</option>
                    <option value="7">11</option>
                    <option value="8">12</option>
                    <option value="9">13</option>
                    <option value="10">14</option>
                  </select>
                </form>
              </div>
              <div class="row">
                <form name="key">
                  <select name="key_cord" class="form-control" id="key">
                    <option selected="" value="0"><a href="#A_cord">Aコード</option>
                    <option value="1"><a href="#B_cord">Bコード</option>
                    <a href="#C_cord"><option >Cコード</option>
                    <option value="3">Dコード</option>
                    <option value="4">Eコード</option>
                    <option value="5">Fコード</option>
                    <option value="6">Gコード</option>
                    <option value="7"> - 2 </option>
                    <option value="8"> - 3 </option>
                    <option value="9"> - 4 </option>
                    <option value="10"> - 5 </option>
                  </select>
                </form>
            </div>
        </div>
      </div>
    </div>
@endsection