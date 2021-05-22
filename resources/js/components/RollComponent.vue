<template>
    <div class="container">
            <button @click="Stop">ストップ</button>
            <button @click="moveToDown">動く</button>
            <!-- 運搬止まらずむしろ早くなっている -->
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
        <div @click='moveToDown=!moveToDown'>
            <div v-bind:function='{active:moveToDown}'>
                
            </div>
        </div>
    </div>
</template>

<script>

    export default {

        data: () => {
            // ここ入らないのかも
            return {
                moveToDown: false,
            }
        },
        methods: {
            // $fixedは使わない？
            oneClick: function() {
                
            },
            OnClick() {

            },
            onchange() {
                let groupspeed = {
                    'key_5': speed= 0.5,
                    'key_6': 1,
                }
                this.groupspeed = this.groupspeed;
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
        let speed = 1; //時間あたりに移動するpx量です。デフォルトでは1pxにしていますが、自由に変えてください
        let interval = 20; //移動する間隔です。デフォルトでは0.1秒おきにしていますが、自由に変えてください
        let scrollTop = document.body.scrollTop;
        setInterval(function() {
            let scroll = scrollTop - speed;
            window.scrollBy(0, scroll)
        },interval);
      }

</script>