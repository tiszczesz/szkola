window.onload = function (){
    document.getElementById("form1").onsubmit=function (){
       var imie = document.getElementById("imie");
       var nazwisko = document.getElementById("nazwisko");
       var pensja = document.getElementById("pensja");
       var imieOK = TextValidate(imie);
       var nazwiskoOK = TextValidate(nazwisko);
       var pensjaOK = NumberValidate(pensja);
       return imieOK && nazwiskoOK && pensjaOK;
    };
};
function TextValidate(elem){
    var id = elem.getAttribute("id");
    var value = elem.value;
    if(value.trim().length<2){
        document.getElementById("error"+id).innerHTML = "Błedne dane";
        return false;
    }else{
        document.getElementById("error"+id).innerHTML = "";
        return true;
    }    
}
function NumberValidate(elem){
    var id = elem.getAttribute("id");
    var value = parseInt(elem.value);
    if(isNaN(value)){
        document.getElementById("error"+id).innerHTML = "Błedne dane";
        return false;
    }else{
        document.getElementById("error"+id).innerHTML = "";
        return true;
    }   
}



