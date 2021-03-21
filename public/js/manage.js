
 const productStyles=document.querySelectorAll(".product-styles");

 for(let i=0; i<productStyles.length; i++){

 	for(let j=0; j<productStyles[i].children.length; j++){
 	 productStyles[i].children[j].addEventListener("click",function(){
 	 	 const productThumb=this.parentElement.parentElement;
 	 	 const proThumbImage=productThumb.querySelector(".pro-thumb-img");
 	 	 proThumbImage.src=this.getAttribute("data-image")
          updateStyle(j,this.parentElement)

 	 })
 	}
 }
 // update buttons of  active styles

  function updateStyle(numb,proStyle){
    for(let i=0; i<proStyle.children.length; i++){
    	 if(i==numb){
    	 	proStyle.children[i].classList.add("active-style");
    	 }
    	 else{
    	   proStyle.children[i].classList.remove("active-style");	
    	 }
    }
  }

  