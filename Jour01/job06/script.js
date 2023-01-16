
function fizzbuzz(){
	for (let I = 1;I<=151;I++){

		if(((I%3) == 0) && ((I%5) != 0)){
			console.log("Fizz");
		}
		else if((( I%5 ) == 0) && (( I%3 ) != 0)){
			console.log("Buzz");
		}
		else if ((( I%3 ) == 0) && (( I%5 ) == 0)){
			console.log("FizzBuzz");
		}
		else{
			console.log(I);
		}
		
	}
}

fizzbuzz();


