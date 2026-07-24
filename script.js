/**********************/
/* AJAX Toggle */
/**********************/

let buttons=document.querySelectorAll(".toggleBtn");

buttons.forEach(function(button){

button.addEventListener("click",function(){

let id=this.dataset.id;

let formData=new FormData();

formData.append("id",id);

fetch("toggle.php",{

method:"POST",

body:formData

})

.then(response=>response.text())

.then(data=>{

document.getElementById("status"+id).innerHTML=data;

});

});

});


/**********************/
/* Pink Stars */
/**********************/

let stars=document.getElementById("stars");

function createStar(){

let star=document.createElement("div");

star.className="star";

star.innerHTML="★";

star.style.left=Math.random()*100+"vw";

star.style.animationDuration=(Math.random()*5+4)+"s";

star.style.fontSize=(Math.random()*20+12)+"px";

stars.appendChild(star);

setTimeout(function(){

star.remove();

},9000);

}

setInterval(createStar,250);