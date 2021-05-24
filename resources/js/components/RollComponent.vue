<template>
    <div class="container">
        <div>
            <h1>ボタンを使って速さを切り替える方法はできた。</h1>
        </div>
        <button class="stopbutton" @click="Stop">ストップ</button>
            <button @click="button">少し早い</button>
            <!-- 運搬止まらずむしろ早くなっている -->
                <div class="row mt-3">スクロール速度
                    <select class="form-control mb-3" v-model="speedNumber" @change="select">
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
            <div @click="moveToDown">
                <br>    
                <br>    
                <br>    
                <br>    
                <br>    
                <br>    
                <br>    
            </div>   
    </div>
</template>

<script>

    export default {

        data: () => {
            // ここ入らないのかも
            return {
                test: 0,
                speedNumber: 'key_10',
            }
        },
        methods: {
            // $fixedは使わない？
            oneClick: function() {
                
            },
            select() {
                   
                let groupspeeds = {
                    'key_5': this.sample,
                    'key_6': interval = 20,
                }
                groupspeeds[this.speedNumber];
            },
            onchange() {
            
            },
            moveToDown() {
                let speed = 1; //時間あたりに移動するpx量です。デフォルトでは1pxにしていますが、自由に変えてください
                let interval = 60; //移動する間隔です。デフォルトでは0.1秒おきにしていますが、自由に変えてくださ
            this.test = setInterval(function() {
                let scrollTop = document.body.scrollTop;
                let scroll = scrollTop + speed;
                window.scrollBy(0, scroll)
            },interval);

            },
            button() {
                let speed = 1;
                let interval = 10;
            this.sample = setInterval(function() {
                let scrollTop = document.body.scrollTop;
                let scroll = scrollTop + speed;
                window.scrollBy(0, scroll)
            },interval);
            },
            Stop() {
                clearInterval(this.test),
                clearInterval(this.sample);
            }
        },
        
        
    }

      

</script>