function openForm() {
    document.getElementById("myForm").style.display = "block";
    changeColor(' #adad85'); 
  }
  
  function closeForm() {
    document.getElementById("myForm").style.display = "none";
    changeColor(' white');
  }
  function changeColor(color) { 
                  document.body.style.background = color; 
              } 