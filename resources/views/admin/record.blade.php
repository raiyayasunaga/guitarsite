<html>
<head>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-3">
    <h1 class="mb-3">JavaScriptで録音するサンプル</h1>
    <div id="app">
        <!-- ③ 録音の開始／終了ボタンを設置する部分 -->
        <button class="btn btn-danger" type="button" v-if="status=='ready'" @click="startRecording">録音を開始する</button>
        <button class="btn btn-primary" type="button" v-if="status=='recording'" @click="stopRecording">録音を終了する</button>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.0"></script>
    <script>

        new Vue({
            el: '#app',
            data: {

              status: 'init',     // 状況
              recorder: null,     // 音声にアクセスする "MediaRecorder" のインスタンス
              audioData: [],      // 入力された音声データ
              audioExtension: ''  // 音声ファイルの拡張子

            },
            methods: {

                // ② 録音を開始／ストップする部分
                startRecording() {

                this.status = 'recording';
                this.audioData = [];
                this.recorder.start();

                },
                stopRecording() {

                this.recorder.stop();
                this.status = 'ready';

                },

                // ④ 音声ファイルの拡張子を取得する部分
                getExtension(audioType) {

                let extension = 'wav';
                const matches = audioType.match(/audio\/([^;]+)/);

                if(matches) {

                    extension = matches[1];

                }

                return '.'+ extension;

                }

            },
            mounted() {

                // ⑤ マイクにアクセス
                navigator.mediaDevices.getUserMedia({ audio: true })
                .then(stream => {

                    this.recorder = new MediaRecorder(stream);
                    this.recorder.addEventListener('dataavailable', e => {

                        this.audioData.push(e.data);
                        this.audioExtension = this.getExtension(e.data.type);

                    });
                    this.recorder.addEventListener('stop', () => {

                        const audioBlob = new Blob(this.audioData);
                        const url = URL.createObjectURL(audioBlob);
                        let a = document.createElement('a');
                        a.href = url;
                        a.download = Math.floor(Date.now() / 1000) + this.audioExtension;
                        document.body.appendChild(a);
                        a.click();

                    });
                    this.status = 'ready';

                });

            }
          });

    </script>
</body>
</html>