<template>
    <div class="container">
            <button @click="Stop">ストップ</button>
            <button @click.enter="moveToDown">動く</button>
            <button @click.stop="moveToDown">止まる</button>
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
                </div>
                <div>
                    <input v-model="price" type="number">円＊
                    <input v-model="number" type="number">個
                    <p>合計{{sum}}円</p>
                    <p>税込{{taxsum}}</p>
                </div>
                 <div class="row">
                <button value="いいね" v-bind:disabled="isClick" @click="oneClick">クリック</button>
            </div>
            </div>
</template>

<script>

function iine() {
            alert("いいね");
        }
    export default {

        data: () => {
            // ここ入らないのかも
            return {
                isClick: false,
            }
        },
        methods: {
            // $fixedは使わない？
            oneClick: function() {
                this.isClick = true;
                iine();
            },
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
                MoveStop();
            }
        },
        
        
    }
      function Down() {
        let speed = 1; //時間あたりに移動するpx量です。デフォルトでは1pxにしていますが、自由に変えてください
        let interval = 10; //移動する間隔です。デフォルトでは0.1秒おきにしていますが、自由に変えてください
        let scrollTop = document.body.scrollTop;
        setInterval(function() {
            let scroll = scrollTop + speed;
            window.scrollBy(0, scroll)
        },interval);
      }

      function MoveStop() {
        let speed = 0; //時間あたりに移動するpx量です。デフォルトでは1pxにしていますが、自由に変えてください
        let interval = 20; //移動する間隔です。デフォルトでは0.1秒おきにしていますが、自由に変えてください
        let scrollTop = document.body.scrollTop;
        setInterval(function() {
        },interval);
      }

</script>