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
  function displayBlodDonation(){
    var a = document.getElementById("bold-donation");
    var b = document.getElementById("collecting-rcb");
    var c = document.getElementById("health-camp");
    var d = document.getElementById("tree-panting");
    var e = document.getElementById("food-dis");
    var f = document.getElementById("other-vol");

    a.style.display = "block";
    b.style.display = "none";
    c.style.display = "none";
    d.style.display = "none";
    e.style.display = "none";
    f.style.display = "none";
  }
  function displayRecycing(){
    var a = document.getElementById("bold-donation");
    var b = document.getElementById("collecting-rcb");
    var c = document.getElementById("health-camp");
    var d = document.getElementById("tree-panting");
    var e = document.getElementById("food-dis");
    var f = document.getElementById("other-vol");

    a.style.display = "none";
    b.style.display = "block";
    c.style.display = "none";
    d.style.display = "none";
    e.style.display = "none";
    f.style.display = "none";

  }
  function displayHealthCamp(){
    var a = document.getElementById("bold-donation");
    var b = document.getElementById("collecting-rcb");
    var c = document.getElementById("health-camp");
    var d = document.getElementById("tree-panting");
    var e = document.getElementById("food-dis");
    var f = document.getElementById("other-vol");

    a.style.display = "none";
    b.style.display = "none";
    c.style.display = "block";
    d.style.display = "none";
    e.style.display = "none";
    f.style.display = "none";
  }
  function displayTreePlanting(){
    var a = document.getElementById("bold-donation");
    var b = document.getElementById("collecting-rcb");
    var c = document.getElementById("health-camp");
    var d = document.getElementById("tree-panting");
    var e = document.getElementById("food-dis");
    var f = document.getElementById("other-vol");

    a.style.display = "none";
    b.style.display = "none";
    c.style.display = "none";
    d.style.display = "block";
    e.style.display = "none";
    f.style.display = "none";
  }
  function displayFoodDistribution(){
    var a = document.getElementById("bold-donation");
    var b = document.getElementById("collecting-rcb");
    var c = document.getElementById("health-camp");
    var d = document.getElementById("tree-panting");
    var e = document.getElementById("food-dis");
    var f = document.getElementById("other-vol");

    a.style.display = "none";
    b.style.display = "none";
    c.style.display = "none";
    d.style.display = "none";
    e.style.display = "block";
    f.style.display = "none";
  }
  
  function displayOtherActivities(){
    var a = document.getElementById("bold-donation");
    var b = document.getElementById("collecting-rcb");
    var c = document.getElementById("health-camp");
    var d = document.getElementById("tree-panting");
    var e = document.getElementById("food-dis");
    var f = document.getElementById("other-vol");

    a.style.display = "none";
    b.style.display = "none";
    c.style.display = "none";
    d.style.display = "none";
    e.style.display = "none";
    f.style.display = "block";
  }
  
  
