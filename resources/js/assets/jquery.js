
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