function showAbout() {
    var x = document.getElementById("aboutUs");
    var y = document.getElementById("volAct");
    var z = document.getElementById("image-page");
    if (x.style.display === "none") {
      x.style.display = "block";
      y.style.display = "none";
      z.style.display = "none";
    } 
  }
  function showAct(){
    var x = document.getElementById("aboutUs");
    var y = document.getElementById("volAct");
    var z = document.getElementById("image-page");
    if (y.style.display === "none"){
        y.style.display = "block";
        x.style.display = "none";
        z.style.display = "none";
    }
  }
  function showImg(){
    var x = document.getElementById("aboutUs");
    var y = document.getElementById("volAct");
    var z = document.getElementById("image-page");
    if (z.style.display === "none"){
        z.style.display = "block";
        x.style.display = "none";
        y.style.display = "none";
    }
  }
  function galleryViewImg(img){
    var viewBigImg = document.getElementById("bigImg");
    var imgData = document.getElementById("img-data");
    viewBigImg.src = img.src;
    imgData.innerHTML = img.alt;
    viewBigImg.parentElement.style.display = "block";

  }