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



var elmnt = document.getElementsByClassName("column");
var x;


document.getElementById("defaultOpen2").click();