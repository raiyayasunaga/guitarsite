<template>
    <div class="container">
        <div class="row my-3">
            <select class="form-control" @change="onchange()" v-model="selected">
            <option value="key_c">C</option>
            <option value="key_d">D</option>
            <option value="key_e">E</option>
            <option value="key_f">F</option>
            <option value="key_g">G</option>
            <option value="key_a">A</option>
            <option value="key_b">B</option>
            </select>
            <div class="row m-3">
                <h3>よく使われるコード</h3>
            </div>
      </div>
        <div class="row justify-content-center">
                <button 
                    v-for="cord in cords"
                    :key="cord" 
                    class="cord-button"
                    type="button" 
                    @click="onClick( cord )"
                >
                    {{ cord }}
                </button>
                
        </div>
        <div class="row my-5">
            <textarea  cols="100" rows="6" v-model="MyText">
            </textarea>
        </div>
        <div>
            プレビュー
        </div>
        <div class="row p-5 m-5">

            <!-- textarea記入した文字やコードを表示させる -->
            <div id="view">
                {{ MyText }}
                <img v-if="CordImage" :src="CordImage">
            </div>
        </div>
    </div>
</template>

<script>
    export default {

        data: () => {
            // ここ入らないのかも
            return {
                cords: ['C', 'Cm', 'D', 'Dm', 'A', 'Am', 'B', 'Bm',],
                MyText: ' ',
                selected: 'key_c',
                CordImage: null
            }
            // MyText= MyText;
        },
        // mounted: () => {
        //     this.selected = "key_c";
        //     console.log(this.selected);
        // },
        
        methods: {
            onClick($cord) {
                this.MyText = `${this.MyText}` + "  " + `[${$cord}] `;
                let groupImages = {
                    'C': '/image/C.png', 
                    'Cm': '/image/Cm.png',
                    'key_d': ['D', 'Dm', 'Ddim'],
                    'key_e': ['E', 'Em', 'Eb7'],
                    'key_f': ['F', 'Fm7', 'Fdim'],
                    'key_A': ['A', 'Am', 'Aaug'],
                    'key_b': ['B', 'Bm', 'Bdim']
                };
                this.CordImage = groupImages[$cord];

                // コードを追加配列
            },
            onchange() {
                console.log(this.selected);
                let groups = {
                    'key_c': ['C', 'Cm', 'Cdim'],
                    'key_d': ['D', 'Dm', 'Ddim'],
                    'key_e': ['E', 'Em', 'Eb7'],
                    'key_f': ['F', 'Fm7', 'Fdim'],
                    'key_A': ['A', 'Am', 'Aaug'],
                    'key_b': ['B', 'Bm', 'Bdim']
                };
                this.cords = groups[this.selected];
                
            },
            
        }
        
    }

</script>

