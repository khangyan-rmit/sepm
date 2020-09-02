function clearErrors(){
    var allErrors = document.getElementsByClassName('error');
    for (var i=0; i<allErrors.length; i++){
        allErrors[i].innerHTML = "";
    }
    var allInputs = document.getElementsByTagName('input');
    for (i=0; i<allInputs.length; i++){
        allInputs[i].style.removeProperty("background-color");
    }
}

function locationCheck(){
    var cood = document.getElementById('coord');
    var patt = /^\d{4}[x|X]\d{4}[y|Y]$/;

    if(patt.test(cood)){
        return true;
    } else {
        document.getElementById(coodError).innerHTML = "Follow the sample format";
        document.getElementById('coord').style.backgroundColor = '#fee';
        return false;
    }
}

function validAddLoc(){
    clearErrors();
    var countErrors = 0;

    if(!locationCheck){
        countErrors++;
    }

    return (countErrors==0);
}