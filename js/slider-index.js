var indexValue = 1;
showImg(indexValue);
function btnSlide(e) {
  showImg((indexValue = e));
}
setInterval(function tiempo() {
  showImg((indexValue += 1));
}, 4000);
function showImg(e) {
  var i;
  const img = document.querySelectorAll(".images  .hero-slider");
  const sliders = document.querySelectorAll(".btn-sliders span");
  if (e > img.length) {
    indexValue = 1;
  }
  if (e < 1) {
    indexValue = img.length;
  }
  for (i = 0; i < img.length; i++) {
    img[i].style.display = "none";
  }
  for (i = 0; i < sliders.length; i++) {
    sliders[i].style.background = "rgba(255,255,255,0.1)";
  }
  img[indexValue - 1].style.display = "block";

  sliders[indexValue - 1].style.background = "white";
}
