function showAboutProducts(){
    var x = document.getElementById("about-products");
    var y = document.getElementById("bid-sessions");
    if (x.style.display === "none"){
        x.style.display = "block";
        y.style.display = "none";
    }
}
function showAboutBids(){
    var x = document.getElementById("about-products");
    var y = document.getElementById("bid-sessions");
    if (y.style.display === "none"){
        y.style.display = "block";
        x.style.display = "none";
    }
}