

// ここの考え結構使えるかも
function cordsName() {
  const cords = {
    'C': '/img/C.png',
    'D': '/img/D.png',
    'E': 'img/E.png',
  }
  let c = prompt('コードを入力')
  if(cords[c]) {
    $('#view') . append(`${c}の画像は` + `<img src="${cords[c]}">` + `です`);
  } else {
    document.write('エラー');
  }
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