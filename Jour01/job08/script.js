let Chiffre1 = prompt("Choisissez Votre Premier Chiffre");
let Chiffre2 = prompt("Choisissez Votre Deuxieme Chiffre");

function sommenombrespremiers(Chiffre1,Chiffre2){
	let calc = new Boolean(true);
	//test if chiffre 1 est premier
	for (let I=2;I<Chiffre1;I++){
		if(Chiffre1%I==0){
			console.log(Chiffre1+" est divisble par " + I);
			console.log(Chiffre1+" n'est pas premier");
			calc=Boolean(false);
			break
		}
		else if (I == (Chiffre1-1)) {
			console.log(Chiffre1+" est premier")
		}
	}
	
	//test if chiffre 1 est premier
	for (let I=2;I<Chiffre2;I++){
		if(Chiffre2%I==0){
			console.log(Chiffre2+" est divisble par " + I);
			console.log(Chiffre2+" n'est pas premier");
			calc=Boolean(false);
			break
		}
		else if (I == (Chiffre2-1)) {
			console.log(Chiffre2+" est premier")
		}
	}
	

	if (calc==true){
		
		
		console.log(parseInt(Chiffre1) + parseInt(Chiffre2) )
	}
}

sommenombrespremiers(Chiffre1,Chiffre2);