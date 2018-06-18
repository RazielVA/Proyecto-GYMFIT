var cont = 30;
function contador(x){
    var contador = document.getElementById("contador"+x);
    if(cont===-1){
        contador.innerHTML = "Tiempo!";
        clearInterval(interval);
        cont=30;
    }else{

        contador.innerHTML = cont;
        cont--;
    }
}

function mycontador(x) {

    interval= setInterval(function(){
        contador(x);
    },1000)
}

function cambiarDia(ndias){
    console.log(ndias);
    var d=0;
    if(ndias==1){
        d=6;
    }else if(ndias==2){
        d=4;
    }else{
        d=3;
    }
    document.getElementById("dia").innerHTML=d; 
    document.getElementById("diasSemana").style.display= "block";

//     var h5=document.createElement("h5");
//     h5.innerHTML="Escoge solo "+d+" de la semana" ;
//     var label1=document.createElement("label");
//     label1.innerHTML="Lunes";
//     var input1=document.createElement("input");
//     input1.setAttribute("name","lunes");
//     input1.setAttribute("type","checkbox");
//     label1.appendChild(input1);
//     seccion.appendChild(h5);
//     seccion.appendChild(label1);
//
//


}
