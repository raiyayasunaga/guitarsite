<template>
    <div class="container">
        <div class="row my-3">
            <div class="mt-3">コード入力</div>
            <select class="form-control mb-3" @change="onchange()" v-model="selected">
                <option value="key_c">C</option>
                <option value="key_c#">C#</option>
                <option value="key_d">D</option>
                <option value="key_d#">D#</option>
                <option value="key_e">E</option>
                <option value="key_f">F</option>
                <option value="key_f#">F#</option>
                <option value="key_g">G</option>
                <option value="key_g#">G#</option>
                <option value="key_a">A</option>
                <option value="key_a#">A#</option>
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
        <div class="row justify-content-center">
                <button
                    v-for="fixed of fixeds"  
                    :key="fixed"
                    class="cord-button"
                    type="button"
                    @click="onClick( fixed )"
                >
                    {{ fixed }}
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
                
                <!-- <img v-if="CordImage" :src="CordImage"> -->
            </div>
        </div>
    </div>
</template>



<script>

    export default {
// 何処でもできる

        data: () => {
            // ここ入らないのかも
            return {
                cords: ['C', 'Cm', 'D', 'Dm', 'A', 'Am', 'B', 'Bm',],
                fixeds: ['/', 'N.C'],
                MyText: ' ',
                selected: 'key_c',

                // CordImage: null
            }
        },
        
        methods: {
            // $fixedは使わない？
            onClick($cord) {
                this.MyText = `${this.MyText}` + "  " + `[${$cord}] `;
                
                // let groupImages = {
                //   "_C": '/img/C.png', 
                //   get "C"() {
                //     return this["_C"];
                //   },
                //   set "C"(value) {
                //     this["_C"]=value;
                //   },
                //     'Cm': '/img/Cm.png',
                // };
                // this.CordImage = groupImages;
                // idビューエレメントを出して、appendをイメージタグを追加していく

                this.MyText = `${this.MyText}` + "  " + `[${fixed}]`;

                // 画像を配列にして上手くまとめて表示させる方法
            },
            onchange() {
                let groupCords = {
                    'key_c': ['C', 'Cm', 'Cdim'],
                    'key_c#': ['C#', 'Cm#', 'Cdim#'],
                    'key_d': ['D', 'Dm', 'Ddim'],
                    'key_d#': ['D#', 'Dm#', 'Ddim'],
                    'key_e': ['E', 'Em', 'Eb7'],
                    'key_f': ['F', 'Fm7', 'Fdim'],
                    'key_f#': ['F#', 'Fm7#', 'Fdim'],
                    'key_g': ['G', 'Gm'],
                    'key_g#': ['Gm', 'Gm#'],
                    'key_a': ['A', 'Am', 'Aaug'],
                    'key_a#': ['A#', 'Am#', 'Aaug'],
                    'key_b': ['B', 'Bm', 'Bdim']
                };
                this.cords = groups[this.selected];
                
            },
            
        }
        
    }

</script>

