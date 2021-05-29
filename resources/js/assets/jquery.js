var chord_insert = function() {
  $('#origin-data');
}
$(function () {
  // リアルタイムで表示させる
  $('#origin-data').on('input', function() {
    $('#output').html($('#origin-data')[0].value);
  });
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