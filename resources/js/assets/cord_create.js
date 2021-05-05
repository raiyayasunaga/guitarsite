function test() {
  alert("Hello Javascript!!");
}

function clickTest() {
  target = document.getElementById("anime_test");
  if (target.className == null || target.className=="") {
    target.className = "active";
  } else {
    target.className = "";
  }
}