function validateForm(e) {
    e.preventDefault();
    let form = document.getElementById("myForm");
    let fName = document.getElementById("name");
    let lName = document.getElementById("lName");
    let pNumber = document.getElementById("pNumber");
    let pNumberMsg = document.getElementById("pNumberMsg");
    let address = document.getElementById("address");
    let addressMsg = document.getElementById("addressMsg");
    let email = document.getElementById("email");
    let emailMsg = document.getElementById("emailMsg");
    let userName = document.getElementById("userName");
    let userNameMsg = document.getElementById("userNameMsg");
    let pass = document.getElementById("pass");
    let passMsg = document.getElementById("passMsg");


    if (fName.value === "")
        document.getElementById("msgname").innerHTML = "must be required";
    else document.getElementById("msgname").innerHTML = "";

    if (lName.value === "")
        document.getElementById("lNameMsg").innerHTML = "must be required";
    else document.getElementById("lNameMsg").innerHTML = "";

    if (pNumber.value === "") pNumberMsg.innerHTML = "must be required";
    else if (isNaN(pNumber.value)) {
        document.getElementById("pNumberMsg").innerHTML =
            "Please enter Numeric value";
    } else pNumberMsg.innerHTML = "";

    if (address.value === "") addressMsg.innerHTML = "must be required";
    else addressMsg.innerHTML = "";

    if (email.value === "") emailMsg.innerHTML = "must be required";
    else emailMsg.innerHTML = "";

    if (userName.value === "") userNameMsg.innerHTML = "must be required";
    else if (userName.value.length < 5) userNameMsg.innerHTML = "at least 5";
    else userNameMsg.innerHTML = "";

    if (pass.value === "") passMsg.innerHTML = "must be required";
    else if (pass.value.length < 5) passMsg.innerHTML = "at least 5";
    else passMsg.innerHTML = "";

    if (email.value === "") emailMsg.innerHTML = "must be required";
    else if (
        /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(
            myForm.email.value
        )
    ) {
        return true;
    } else {
        alert("You have entered an invalid email address!");
        return false;
    }
}


function search()
{
	var xhttp = new XMLHttpRequest();
	var search_txt = document.getElementById("searchbox").value;
				
	xhttp.onreadystatechange = function()
		{
			if(xhttp.readyState == 4 && xhttp.status == 200)
				{
					document.getElementById("search_result").innerHTML=xhttp.responseText;
				}
					
		}
		xhttp.open("GET","../controllers/makeordercontrollersearch.php?key="+search_txt,true);
		xhttp.send();
}



