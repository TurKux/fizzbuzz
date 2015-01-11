
/** By @TurKux **/

document.addEventListener('DOMContentLoaded', FizzBuzz);

function FizzBuzz(){
	var body = document.querySelector("body");
	var list = document.createElement("ol");

	for (var n = 1; n <= 100; n++) {

		var item = document.createElement("li");

		if (n % 15 == 0)
			item.textContent = "FizzBuzz";
		else if (n % 3 == 0)
			item.textContent = "Fizz";
		else if (n % 5 == 0)
			item.textContent = "Buzz";
		else 
			item.textContent = "----";

		list.appendChild(item);
	}

	body.appendChild(list);
}