var button = document.getElementById("button");
button.addEventListener("click", ()=>{
	var counter = document.getElementById("compteur").innerHTML ;
	counter++;
	document.getElementById("compteur").innerHTML = counter ;
});
