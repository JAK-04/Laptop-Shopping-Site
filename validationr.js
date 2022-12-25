function validatePopForm() {
    errors = document.getElementsByClassName("formerror");
    for (let item of errors) {
    item.innerHTML = "";
    }
    var returnval = true;
    var prodname = document.forms["popForm"]["pname"].value;
    var pcategory = document.forms["popForm"]["pcat"].value;
    var pprice = document.forms["popForm"]["pprice"].value;
    var pquantity = document.forms["popForm"]["pqua"].value;
    var pimage = document.getElementById("pimg");
    
    if (prodname.length == 0) {
        document.getElementById("pnm").innerHTML = "*Please enter product name";
        returnval = false;
    }
    if (pcategory.length == 0) {
        document.getElementById("pct").innerHTML = "*Please enter product category";
        returnval = false;
    }
    if (pprice.length == 0) {
        document.getElementById("ppr").innerHTML = "*Please enter product price";
        returnval = false;
    }
    else if(isNaN(pprice)){
        document.getElementById("ppr").innerHTML = "*Please enter numeric value only";
        returnval = false;
    }
    if (pquantity.length == 0) {
        document.getElementById("pqt").innerHTML = "*Please enter product quantity";
        returnval = false;
    }
    else if(isNaN(pquantity)){
        document.getElementById("pqt").innerHTML = "*Please enter numeric value only";
        returnval = false;
    }
    if(pimage.files.length == 0){
        document.getElementById("pim").innerHTML = "*Please choose product image";
        returnval = false;
    }
    
    return returnval;
}
