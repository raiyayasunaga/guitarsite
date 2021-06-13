<template>
    <div class="container">
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
                        <option selected value="key_10" >10</option>
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
            <div @click="moveToDown()">
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
            select(value) {
                    if (value.target.value == "key_5") {
                        let speed = 1; //時間あたりに移動するpx量
                        let interval = 50; //移動する間隔
                    this.test = setInterval(function() {
                        let scrollTop = document.body.scrollTop;
                        let scroll = scrollTop + speed;
                        window.scrollBy(0, scroll)
                    },interval);
                    }
                    else {
                        let speed = 1; //時間あたりに移動するpx量
                        let interval = 120; //移動する間隔
                    this.test = setInterval(function() {
                        let scrollTop = document.body.scrollTop;
                        let scroll = scrollTop + speed;
                        window.scrollBy(0, scroll)
                    },interval);
                    }
            },
            moveToDown() {
                    let speed = 1;
                    let interval = 100;
                this.sample = setInterval(function() {
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