/*
var nome = "vitor Toldato";
var idade = 20;
var idade2 = 10;
//var frase  = "japão é o melhor time do mundo";
//var lista = ["maça", "pêra", "laranja"]
//var frutas = [{nome:"maça", cor:"vermelha"},{nome:"uva", cor:"roxa"} ,]
//console.log(frutas[1])
//lista.push("uva", "abacaxi");

//console.log(lista.reverse())
//console.log(lista.toString())
//console.log(lista.join(" // "))
 //alert("O " + nome + " Tem " + idade);
 //console.log(frase.replace("japão", "Brasil"));

/*var idade = prompt("qual sua idade");
 if(idade >= 18){
 	alert("maior de idade");
}else
	alert("menor de idade");
*/
/*var count = 0
while(count <= 5){
	console.log(count)
	count ++;
}


var d = new Date();
alert(d.getDate());
var validar = 0;
function validarid(idade){ 
	
	if(idade >= 18){
		validar = true;
	}else{ 
		validar = false;
	}
	return validar;
}

//var idade = prompt("Digite idade");
validarid(idade);

if(validar == true)
	var cr = "averdade"
 
else
	cr = "aermentira"
console.log(cr);
*/
//-------------------------------------------------------------------------------------
// função para botao
function botao(){
	//alert("APERTADO");
	//document.getElementById("Obrigado").innerHTML = "Obrigado";// < PARA DIGITAR EM HTML

}// FAZER O REDIRECIONAMENTO
function redirecionar() {
	window.open("https://i.redd.it/z4xt01hz8au51.jpg"); //<< FAZ ABRIR NOVA ABA.
	//window.location.href = "https://www.youtube.com/watch?v=bn4zp1LymPo";
}
//FUNÇÃO PARA MOUSE OVER
function mouse(elemento){
	//alert("AHHHH")
		elemento.innerHTML = "Obrigado";// < PARA DIGITAR EM HTML
}
function voltar(elemento){
		elemento.innerHTML = "Normal";// < PARA DIGITAR EM HTML
}
function escolha(elemento){ 
	if (elemento.value == 1){
	window.open("https://i.redd.it/z4xt01hz8au51.jpg");	
	}
	if (elemento.value == 2){
		window.open("https://onepieceex.net/proximos-episodios-969-973/")
	}
	console.log(elemento.value);
}