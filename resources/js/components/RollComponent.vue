<template>
    <div class="container">
            <div class="row m-3">演奏しよう！！！！</div>

            <div class="row mt-3">スクロール速度
                <select class="form-control mb-3">
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10" selected>10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                </select>
            </div>

            <div class="row mt-4">
                <div>カポ</div>
                <select class="form-control mb-3">
                    <option value="key_+5">+5</option>
                    <option value="key_+4">+4</option>
                    <option value="key_+3">+3</option>
                    <option value="key_+2">+2</option>
                    <option value="key_+1">+1</option>
                    <option value="key_+-0" selected>±0</option>
                    <option value="key_-1">-1</option>
                    <option value="key_-2">-2</option>
                    <option value="key_-3">-3</option>
                    <option value="key_-4">-4</option>
                    <option value="key_-5">-5</option>
                </select>
            </div>
            <div class="row">
                <h2>ここで再生</h2>
                <input type="button" value=" ">
                <p>なんちゃん</p>
            </div>
            <div style="background: linear-gradient(0deg, lightgreen, red);">ちゃんとスクロールされているのか
                <button type="button" @click="moveToDown">下へ</button>
            <br><br><br><br><br><br><br><br>
                <br><br><br><br><br><br><br><br>
                <br><br><br><br><br><br><br><br>
                <br><br><br><br><br><br><br><br>
                <button type="button" @click="onClick">ストップ</button>
                <br><br><br><br><br><br><br><br>
                <br><br><br><br><br><br><br><br>
                <br><br><br><br><br><br><br><br>
                <br><br><br><br><br><br><br><br>
                <br><br><br><br><br><br><br><br>
            </div>
    </div>
</template>

<script>
    export default {

        data: () => {
            // ここ入らないのかも
            return {
              
            }
        },
        
        methods: {
            // $fixedは使わない？
            onClick() {
                this.null = this.moveToDown();
            },
            onchange() {

            },
            moveToDown() {

                newFunction();
            },
            
        }
        
    }
      function newFunction() {
        const speed = 3; //時間あたりに移動するpx量です。デフォルトでは1pxにしていますが、自由に変えてください
        const interval = 20; //移動する間隔です。デフォルトでは0.1秒おきにしていますが、自由に変えてください
        const scrollTop = document.body.scrollTop;
        setInterval(function() {
            const scroll = scrollTop + speed;
            window.scrollBy(0, scroll)
        },interval);
        // const duration=100; // 移動速度（1秒で終了）
        // const interval=25; // 0.025秒ごとに移動
        // const step=window.scrollY/Math.ceil(duration/interval); // 1回に移動する距離
        // const timer=setInterval(() => {

        //   window.scrollBy(0, step); // スクロール位置を移動

        //   if(window.scrollY<= 0) {

        //     clearInterval(timer);

        //   }

        // }, interval);
        
      }
</script>