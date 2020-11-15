function showDedicateDonation() {
    var checkbox = document.getElementById("dedicate");
    var x = document.getElementById("dedication");
    if (checkbox.checked == true){
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}