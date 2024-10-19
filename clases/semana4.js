let total = 50;

console.log(total);

function suma(a, b) {
    let total = a + b; // ambito local
    console.log(total);
}

let numero1 = 1;
let numero2 = 6;
suma(numero1, numero2);

console.log(total); // global

let nombre = "Karol Leal"; // string
let edad = 34; //int
let altura = 1.60; // float
let esProfesor = true; // boleano

const edadMayor = 18;



nombre += " Rojas"

console.log(nombre);
console.log(edad);
console.log(altura);
console.log(esProfesor);

console.log("-----------------------------------");
console.log(nombre.length);
console.log(nombre.startsWith("Ka"));
console.log(edad.toString());
console.log(esProfesor.toString());
console.log("-----------------------------------");
console.log(nombre.toLowerCase());
console.log(nombre.toUpperCase());

if (edad > edadMayor) {
    console.log("es mayor de edad");
} else {
    console.log("es menor edad");
}


edad = 10;
let mensaje = edad > edadMayor ? "Es mayor de edad" : "Es menor de edad";
console.log(mensaje);

let color = "rojo";
switch (color) {
    case 'rojo':
        console.log("detengase");
        break;
    case 'amarillo':
        console.log("precaucion");
        break;
    case 'verde':
        console.log("siga");
        break;
    default:
        console.log("color no definido");
        break;

}

let dia = 1;
switch (dia) {
    case 1:
        console.log("Lunes");
        break;
    case 'amarillo':
        console.log("precaucion");
        break;
    case 'verde':
        console.log("siga");
        break;
    default:
        console.log("color no definido");
        break;

}

// Semana  5

for(let i = 0; i< 10; i++){
    console.log(i);
}

let frutas = ["manzana", "melon", "fresa", "sandia"];

for(let posicion in frutas){
    console.log(frutas[posicion])
}
for(let posicion in frutas){
    if(frutas[posicion] == "sandia"){
        console.log("la posicion en el array de frutas para sandia es: ", posicion);
        break;
    }
    console.log(frutas[posicion])
}

console.log(frutas[0])

edad = 54;

do {
    edad++;
    console.log(edad);

} while(edad < 50)
edad = 45;
while(edad < 50){
    edad++;
    console.log(edad);
   
}

function multiplicar(numero1, numero2){
    return numero1*numero2;
}

let resultado = multiplicar(6,7);

console.log(resultado);