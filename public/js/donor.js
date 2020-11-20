function showDedicateDonation() {
    var checkbox = document.getElementById("dedicate");
    var x = document.getElementById("dedication");
    if (checkbox.checked == true){
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}
function closeMyDonations(){
    var x = document.getElementById("donateView");
    var y = document.getElementById("viewDonations");
    y.style.display = "none";
    x.style.display = "block";
}