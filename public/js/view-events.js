var elements = document.getElementsByClassName("column");
var x;

function viewlist() {
    for (x = 0; x < elements.length; x++) {
        elements[x].style.width = "100%";
    }
}

function viewgrid() {
    for (x = 0; x < elements.length; x++) {
        elements[x].style.width = "50%"
    }
}
var coll = document.getElementsByClassName("readmore");
var i;

for (i = 0; i < coll.length; i++) {
    coll[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var content = this.nextElementSibling;
        if (content.style.display === "block") {
            content.style.display = "none";
        } else {
            content.style.display = "block";
        }
    });
}

function openpage(pagename, element) {
    var i, tabcontent, tab;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tab = document.getElementsByClassName("tab");
    for (i = 0; i < tabcontent.length; i++) {
        tab[i].style.backgroundColor = "";
    }
    document.getElementById(pagename).style.display = "block";
    element.style.backgroundColor = "black"

}
document.getElementById("defaultOpen").click();