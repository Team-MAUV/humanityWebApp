function viewRecypts(){
    var x = document.getElementById("viewHome");
    var y = document.getElementById("viewRecypt");
    if(x.style.display === "block"){
        x.style.display = "none";
        y.style.display = "block";
    }
}
function closeRecypts(){
    var x = document.getElementById("viewHome");
    var y = document.getElementById("viewRecypt");
    y.style.display = "none";
    x.style.display = "block";
}