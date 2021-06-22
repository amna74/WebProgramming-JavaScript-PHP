

	function btn1()	// trigger onclick event
	{
		var btn1 = document.getElementById("O-M");
		var result1 = document.getElementById("result1");
		var num = document.getElementById("inputData").value; // read value from textbox
		result1.innerHTML =   num*29.5735 + "ml" ;	// display result in <p>
	}

	 function btn2()	// trigger onclick event
	{
		var btn2 = document.getElementById("M-O");
		var result2 = document.getElementById("result2");
		var num = document.getElementById("inputData").value; // read value from textbox
		result2.innerHTML = num*0.033814 +"oz" ;	// display result in <p>
	}

	 function btn3()	// trigger onclick event
	{
		var btn3 = document.getElementById("L-M");
		var result3 = document.getElementById("result3");
		var num = document.getElementById("inputData").value; // read value from textbox
		result3.innerHTML =  num*1000 + "ml" ;	// display result in <p>
	}

	function btn4()	// trigger onclick event
	{
		var btn4 = document.getElementById("M-L");
		var result4 = document.getElementById("result4");
		var num = document.getElementById("inputData").value; // read value from textbox
		result4.innerHTML =  num*0.001 +" l" ;	// display result in <p>
	}
	
	function btn5()	// trigger onclick event
	{
		var btn5 = document.getElementById("I-C");
		var result5 = document.getElementById("result5");
		var num = document.getElementById("inputData").value; // read value from textbox
		result5.innerHTML =  num*2.54 +" cm" ;	// display result in <p>
	}
	
	function btn6()	// trigger onclick event
	{
		var btn6 = document.getElementById("C-I");
		var result6 = document.getElementById("result6");
		var num = document.getElementById("inputData").value; // read value from textbox
		result6.innerHTML =  num*0.393701 +" Inch" ;	// display result in <p>
	}

	function btn7()	// trigger onclick event
	{
		var btn7 = document.getElementById("P-K");
		var result7 = document.getElementById("result7");
		var num = document.getElementById("inputData").value; // read value from textbox
		result7.innerHTML =  num*0.453592 + "kg" ;	// display result in <p>
	}

	function btn8()	// trigger onclick event
	{
		var btn8 = document.getElementById("K-P");
		var result8 = document.getElementById("result8");
		var num = document.getElementById("inputData").value; // read value from textbox
		result8.innerHTML =  num*2.20462 + "  pounds" ;	// display result in <p>
	}
	
	function clear_data()
	{
		document.getElementById("inputData").innerHTML = "" ; 
		document.getElementById("result1").innerHTML = "";
		document.getElementById("result2").innerHTML = "";
		document.getElementById("result3").innerHTML = "";
		document.getElementById("result4").innerHTML = "";
		document.getElementById("result5").innerHTML = "";
		document.getElementById("result6").innerHTML = "";
		document.getElementById("result7").innerHTML = "";
		document.getElementById("result8").innerHTML = "";
		document.getElementById("inputData").focus();
	}
		

	


