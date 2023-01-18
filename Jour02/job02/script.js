function showhide(){

	const test =document.querySelector("article");
	if(!test){
		var art = document.createElement("article");
		var citation = document.createTextNode("L'important n'est pas la chute, mais l'atterrissage.");
		art.appendChild(citation);
		document.body.appendChild(art);
  }
  else
  {
  	test.remove();
  }
	};






