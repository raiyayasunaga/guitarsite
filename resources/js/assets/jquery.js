
$(window).on('load', function(){
  $('body').removeClass('fadeout');
});

$(function() {
  // ハッシュリンク(#)と別ウィンドウでページを開く場合はスルー
  $('a:not([href^="#"]):not([target])').on('click', function(e){
    e.preventDefault(); // ナビゲートをキャンセル
    url = $(this).attr('href'); // 遷移先のURLを取得
    if (url !== '') {
      $('body').addClass('fadeout');  // bodyに class="fadeout"を挿入
      setTimeout(function(){
        window.location = url;  // 0.8秒後に取得したURLに遷移
      }, 700);
    }
    return false;
  });
});

$(function () {
  // リアルタイムで表示させる
  

  $('#btn').on('click', function() {
      alert("Hello JEQrty");
  });


  $("#cordButton_C").on('click',function() {
		// 値を設定
		// $('#origin-data').val(" ");
		// // 値を取得
		// var str1 = $('#origin-data').val();
		$('#origin-data') . append("[C]");
	});


  $("#cordButton_D").on('click', function() {
    $('#origin-data').val('[D]');

    var str1 = $('#origin-data').val();
    $('#origin-data') . append(text(str1)); 
  });

});