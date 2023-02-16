function deshabilitar() {
    var fig = document.getElementById("fig").value;
    var alto= document.getElementById("Alto");
    var base= document.getElementById("Base");
    var lado= document.getElementById("Lado");
    if(fig==0){
        alto.disabled = true;
        base.disabled = true;
        lado.disabled = true;
    }else{
        if(fig==1){
            alto.disabled = false;
            base.disabled = true;
            lado.disabled = true;
        }
        if(fig==2){
            alto.disabled = false;
            base.disabled = false;
            lado.disabled = true;
        }
        if(fig==3){
            alto.disabled = false;
            base.disabled = false;
            lado.disabled = false;
        }
    }
    
}