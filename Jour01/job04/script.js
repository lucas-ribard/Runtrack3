let année = prompt("Choisissez une année");

function bisextile(année){
	//conditions  : https://fr.wikipedia.org/wiki/Ann%C3%A9e_bissextile
	if ((année % 4 === 0 && année % 100 > 0) || (année % 400 === 0)) {
		return true;
	} else {
		return false;
	}
}
if (bisextile(année)=true){
	alert(année + " est bissextile");
}else if(bisextile(année)=false){
	alert(année + " n'est pas bissextile");
}
