let year = prompt("Choisissez une année");

//condition trouvé sur : https://fr.wikipedia.org/wiki/Ann%C3%A9e_bissextile
if ((year % 4 === 0 && year % 100 > 0) || (year % 400 === 0)) {
	alert(year + " est bissextile");
} else {
	alert(year + " n'est pas bissextile");
}
