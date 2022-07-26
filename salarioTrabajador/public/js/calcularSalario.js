var horasTrabajadasI = document.getElementById('horasTrabajadasI');
var tarifaHoraI = document.getElementById('tarifaHoraI');

var idTrabajador = document.getElementById('idTrabajador');
var tarifaHora = document.getElementById('tarifaHora');
var horasTrabajadas = document.getElementById('horasTrabajadas');
var bono = document.getElementById('bono');
var impuestos = document.getElementById('impuestos');
var salarioNeto = document.getElementById('salarioNeto');

var trabajador = document.getElementById('trabajador');

/*Variables a mostrar*/
let trabajadorID = trabajador.value;
let tarifaHoraVal = 0;
let horasTrabajadasVal;
let bonoCalculado;
let impuestoCalculado;
let salarioNetoCalculado;
/*Variables para calculos internos*/
let salario;
let horasAdicionales;
let sal;
let salad;
let monto;
let tarifaHorasExtra;

function mostrarDatosCalculados(){
    calcularSalario();
    calcularImpuesto();
    calcularBono();
    calcularSalarioNeto();

    idTrabajador.setAttribute('value', parseInt(trabajadorID));
    tarifaHora.setAttribute('value', parseFloat(tarifaHoraVal));
    horasTrabajadas.setAttribute('value', horasTrabajadasVal);
    bono.setAttribute('value', parseFloat(bonoCalculado));
    impuestos.setAttribute('value', parseFloat(impuestoCalculado));
    salarioNeto.setAttribute('value', salarioNetoCalculado);
}


function calcularSalario(){
    horasTrabajadasVal = parseInt(horasTrabajadasI.value);
    tarifaHoraVal = parseFloat(tarifaHoraI.value);

    if(horasTrabajadasVal <= 35){
        salario = horasTrabajadasVal * tarifaHoraVal;
    }else{
        sal = 35 * tarifaHoraVal;
        horasAdicionales = horasTrabajadasVal - 35;
        tarifaHorasExtra = tarifaHoraVal * 1.5;
        salad = tarifaHorasExtra * horasAdicionales;
        salario = sal + salad;
    }
}

function calcularImpuesto(){
    if(salario <=1000){
        impuestoCalculado = 0;
    }else if(salario<=4000){
        monto = salario - 1000;
        impuestoCalculado = monto * 0.25;
    }else{
        monto = salario - 5000;
        impuestoCalculado = monto * 0.45;
    }
}

function calcularBono(){
    if(horasTrabajadasVal > 45){
        bonoCalculado = salario * 0.02;
    }else{
        bonoCalculado = 0;
    }
}

function calcularSalarioNeto(){
    salarioNetoCalculado = salario + bonoCalculado - impuestoCalculado;
}
