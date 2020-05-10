//This file allows users to choose what program requirements to view

var program = "cs-major";
//prgram must be initialized to valid value, otherwise unselect() will cause an error when it is called

 function hideAll()
 {//This functions hides all elements used to display a program's requirements
 	document.getElementById("cs-major").style.display = 'none';
 	document.getElementById("cs-minor").style.display = 'none';
 	document.getElementById("math-cs").style.display = 'none';
 	document.getElementById("it-major").style.display = 'none';
 	document.getElementById("it-minor").style.display = 'none';
 	document.getElementById("it-net").style.display = 'none';
 	document.getElementById("web").style.display = 'none';
 }

function select()
{//This changes a desired program's requirements to be visible to the user
	document.getElementById(program).style.display = 'inline-block';
}

function unselect()
{//This hides the previous program's requirements from the user
	document.getElementById(program).style.display = 'none';
}

function programSelected()
{//This function is called when an update button is clicked and changes program displayed to the user
	unselect();
	program = document.getElementById("programList").value;
	select();
}
