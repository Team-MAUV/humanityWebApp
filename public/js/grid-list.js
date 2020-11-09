var elements = document.getElementsByClassName("column");
var x;

function viewlist() {
    for (x = 0; x < elements.length; x++) {
        elements[x].style.width = "100%";
    }
}

function viewgrid() {
    for (x = 0; x < elements.length; x++) {
        elements[x].style.width = "50%";
    }
}