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
            <textarea  cols="150" rows="6" v-model="MyText">
            </textarea>
        </div>
        <div>
            プレビュー
        </div>
        <div class="row p-5 m-5">

            <!-- textarea記入した文字やコードを表示させる -->
            <div id="view">
                {{ MyText }}

                <img v-bind:src=code_img_path />
                <!-- <img v-if="CordImage" :src="CordImage"> -->
                <!-- データバインディングを -->
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
                cords: ['C', 'Cm', 'Cdim', 'C6', 'C7', 'C7sus4', 'Cadd9', 'Caug', 'Cdim', 'CmM7', 'Cm7', 'Cm7b5', 'Csus4', 'CM7'],
                fixeds: ['/', 'N.C'],
                MyText: ' ',
                selected: 'key_c',
                
            }
        },
        
        methods: {
            // $fixedは使わない？
            onClick($cord) {
                this.MyText = `${this.MyText}` + "  " + `[${$cord}] `;

                this.MyText = `${this.MyText}` + "  " + `[${fixed}]`;

                // this.MyText = `${this.MyText}` + "  " + `[${image}]`;
                
                
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
                // 画像を配列にして上手くまとめて表示させる方法
            },

            onchange() {
                let groupCords = {
                    'key_c': ['C', 'Cm', 'Cdim', 'C6', 'C7', 'C7sus4', 'Cadd9', 'Caug', 'Cdim', 'CmM7', 'Cm7', 'Cm7b5', 'Csus4', 'CM7'],
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
                this.cords = groupCords[this.selected];
                
            },
            
        }
        
    }

</script>

