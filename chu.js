function validate(){
	var cost1 = document.getElementById("cost1");
	var cost2 = document.getElementById("cost2");
	var cost3 = document.getElementById("cost3");
	var cost4 = document.getElementById("cost4");
	var cost5 = document.getElementById("cost5");

	var cost1value=cost1.value;
	var cost1value=cost1value*100;
	var cost2value=cost2.value;
	var cost2value=cost2value*150;
	var cost3value=cost3.value;
	var cost3value=cost3value*350;
	var cost4value=cost4.value;
	var cost4value=cost4value*250;
	var cost5value=cost1value+cost2value+cost3value+cost4value;
	cost5.value=cost5value;

}