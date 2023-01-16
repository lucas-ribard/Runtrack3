const JourFerié = [
    ['lundi', 1,"mai",2023],
    ['lundi', 8,"mai",2023],
    ['jeudi', 18,"mai",2023],
    ['lundi', 29,"mai",2023],
	['vendredi', 14,"juillet",2023],
	['mardi', 15,"août",2023],
	['mercredi', 1,"novembre",2023],
	['samedi', 11,"novembre",2023],
	['lundi', 25,"décembre",2023]
];

const Weekend = ["samedis","dimanche"];

//let date = ( input date );

function jourtravaille(/*$date,*/Weekend,JourFerié){

	let Jour ="lundi"; //$date[0]
	let date =1; //$date[1]
	let Mois="mai"; //$date[2]
	let Année="2023"; //$date[3]

	for (const jours of JourFerié) {
		if ((Jour==jours[0]) && (date==jours[1]) && (Mois==jours[2]) && (Année==jours[3])){
			console.log("Le " + Jour + " " +  date + " " + Mois + " " + Année + " est un jour férié");
			break;
		}else if((Jour==Weekend[0]) || (Jour==Weekend[1])){
			console.log("Le " + Jour + " " +  date + " " + Mois + " " + Année + " est un Weekend");
			break;
		}else {
			console.log("Le " + Jour + " " +  date + " " + Mois + " " + Année + " est un jour travaillé");
	
		}
		
	}
}


 
jourtravaille(Weekend,JourFerié);