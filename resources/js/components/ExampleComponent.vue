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
      <div>うまく表示されるか
        <div v-if="display">{{ display }}</div>
        <div v-if="!display">{{ display }}</div>
        <img src="/img/C.png">
      </div>
    <div>
        書き込み
        <select v-model="selectsample">
            <option value="abc">abc</option>
            <option value="def">def</option>
            <option value="ghi">ghi</option>
        </select>
      <textarea type="text" v-model="sample"></textarea>
    </div>
    <div>{{sample}}{{selectsample}}</div>
    <div>
        リンクのURLを変える
        <a target="_blank" v-bind:href="link">{{link}}</a>
        <input type="button" @click="link = 'https://google.com/'" value="グーグルリンクに変更"/>
    </div>



    <div>
        <input type="button" @click="Click()" value="画像表示" v-model="image">
    </div>
    <div>{{image}}</div>


      <!-- <ul>
        <li v-for="animal in animals"
            :key="animel"
        >
            {{animal}}
        </li>
      </ul> -->

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
                fixeds: ['/', 'N.C'],
                MyText: ' ',
                selected: 'key_c',
                CordImage: null,
                display: '表示されrた！',
                sample: ' ',
                selectsample: 'def',
                link: "#",
                image: null
            }
        },
        
        methods: {
            Click() {
                let image = {
                    'C': '/image/C.png'
                }
            },
            onClick($cord) {
                this.MyText = `${this.MyText}` + "  " + `[${$cord}] `;
                let groupImages = {
                  "_C": '/image/C.png', 
                  get "C"() {
                    return this["_C"];
                  },
                  set "C"(value) {
                    this["_C"]=value;
                  },
                    'Cm': '/image/Cm.png',
                    
                };
                this.CordImage = groupImages[$cord];

                // 固定で表記
                this.MyText = `${this.MyText}` + "  " + `[${fixed}]`;

                // コードを追加配列
            }
            // onchange() {
            //     let groups = {
            //         'key_c': ['C', 'Cm', 'Cdim'],
            //         'key_c#': ['C#', 'Cm#', 'Cdim#'],
            //         'key_d': ['D', 'Dm', 'Ddim'],
            //         'key_d#': ['D#', 'Dm#', 'Ddim'],
            //         'key_e': ['E', 'Em', 'Eb7'],
            //         'key_f': ['F', 'Fm7', 'Fdim'],
            //         'key_f#': ['F#', 'Fm7#', 'Fdim'],
            //         'key_g': ['G', 'Gm'],
            //         'key_g#': ['Gm', 'Gm#'],
            //         'key_a': ['A', 'Am', 'Aaug'],
            //         'key_a#': ['A#', 'Am#', 'Aaug'],
            //         'key_b': ['B', 'Bm', 'Bdim']
            //     };
            //     this.cords = groups[this.selected];
                
            // },
            
        }
        
    }

</script>

