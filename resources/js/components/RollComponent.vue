<template>
    <div @click="moveToDown">
        <div class="container">
            <div @click="event.preventmoveToDown()">
                    <button @click="event.preventDefault()">ストップ</button>
                <div class="row mt-3">スクロール速度
                    <select class="form-control mb-3">
                        <option value="key_5">5</option>
                        <option value="key_6">6</option>
                        <option value="key_7">7</option>
                        <option value="key_8">8</option>
                        <option value="key_9">9</option>
                        <option value="key_10" selected>10</option>
                        <option value="key_11">11</option>
                        <option value="key_12">12</option>
                        <option value="key_13">13</option>
                        <option value="key_14">14</option>
                        <option value="key_15">15</option>
                        <option value="key_16">16</option>
                        <option value="key_17">17</option>
                        <option value="key_18">18</option>
                        <option value="key_19">19</option>
                        <option value="key_20">20</option>
                    </select>
                </div>

                <div class="row">
                    <h2>ここで再生</h2>
                    <input type="button">
                    <p>なんちゃん</p>
                </div>
                <div style="background: linear-gradient(0deg, lightgreen, red);">ちゃんとスクロールされているのか
                    <button type="button" @click="moveToDown">下へ</button>
                    <br><br><br><br><br><br><br>
                    <br><br><br><br><br><br><br><br>
                    <button type="button" @click="onClick">ストップ</button>
                    <br><br><br><br><br><br><br><br>
                    <br><br><br><br><br><br><br><br>
                    <br><br><br><br><br><br><br><br>
                    <br><br><br><br><br><br><br><br>
                </div>
                <div>
                    <input v-model="price" type="number">円＊
                    <input v-model="number" type="number">個
                    <p>合計{{sum}}円</p>
                    <p>税込{{taxsum}}</p>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {

        data: () => {
            // ここ入らないのかも
            return {
              moveToDown: flase,
            }
        },
        
        methods: {
            // $fixedは使わない？
            OnClick() {
                this.moveToDown = !this.moveToDown;
            },
            onchange() {
                let groupspeed = {
                    'key_5': ['C#', 'Cm#', 'Cdim#'],
                    'key_6': []
                }
            },
            moveToDown() {
                Down();
            },
            Stop() {
                
            }
        },
        
        
    }
      function Down() {
        const speed = 1; //時間あたりに移動するpx量です。デフォルトでは1pxにしていますが、自由に変えてください
        const interval = 10; //移動する間隔です。デフォルトでは0.1秒おきにしていますが、自由に変えてください
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

      function MoveStop() {
        const speed = 3; //時間あたりに移動するpx量です。デフォルトでは1pxにしていますが、自由に変えてください
        const interval = 20; //移動する間隔です。デフォルトでは0.1秒おきにしていますが、自由に変えてください
        const scrollTop = document.body.scrollTop;
        setInterval(function() {
            const scroll = scrollTop + speed;
            window.scrollBy(0, scroll)
        },interval);
      }

</script>