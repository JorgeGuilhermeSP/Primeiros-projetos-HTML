//IMC script
const imc = (peso, altura) => peso / (altura * altura);
const situacao = (valor_imc) => {
	return(valor_imc<18.5)?"Abaixo do peso!":
		  (valor_imc<25)?"Peso ideal!":
		  (valor_imc<30)?"levemente acima do peso!":
		  (valor_imc<35)?"Obesidade de grau I!":
		  (valor_imc<40)?"Obesidade de grau II!":
		  "Obesidade de grau III!";
}