function afficherSpan(htmlinput) {

    htmlinput.className = 'incorrect';
	var div = htmlinput.parentNode;
	var span = div.nextElementSibling;
	span.style.visibility = "visible";

}

function correct(htmlinput) {
    htmlinput.className = 'correct';

    var div = htmlinput.parentNode;
    var span = div.nextElementSibling;
    span.style.visibility = "collapse";
}


function verifMail(input)
{ 
    var regex = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;
    if(!regex.test(input.value)){
        afficherSpan(input);
   }
   else{
    correct(input);
   }
}

function verifZIP(input)
{ 
    var regex = /^[0-9]{5}$/;
    if(!regex.test(input.value)){
        afficherSpan(input);
   }
   else{
    correct(input);
   }
}

function verifRempliLettre(input)
{ 
    var regex = /^[a-zA-Z]{2,}$/;
    if(!regex.test(input.value)){
        afficherSpan(input);
   }
   else{
    correct(input);
   }
}

function verifTel(input)
{ 
    var regex = /^[0-9]{10}$/;
    if(!regex.test(input.value)){
        afficherSpan(input);
   }
   else{
    correct(input);
   }
}

function verifAdresse(input)
{ 
    var regex = /^[0-9]{1,}[a-zA-Z0-9 ]{1,}$/;
    if(!regex.test(input.value)){
        afficherSpan(input);
   }
   else{
    correct(input);
   }
}
