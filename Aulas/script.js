function trocarNome() {
    let nome = document.getElementById('inputNome').value;
    document.getElementById('textNome').innerText = nome;
}
function Somar() {
    let soma = parseFloat(document.getElementById('num1').value)  + parseFloat(document.getElementById('num2').value); 
    document.getElementById('resultadoText').innerText = "Resultado: " + soma;
}
function CalcularIMC() {
    let altura = parseFloat(document.getElementById('alturaInput').value)
    let peso = parseFloat(document.getElementById('pesoInput').value)
    let imc = peso / altura * altura
    let textoIMC;
    if (imc < 18.5) 
    {
        textoIMC = "Magreza (Grau 0 de Obesidade)"
    }
    else if (imc <= 24.9)
    {
        textoIMC = "peso Normal (grau 0 de obesidade)"
    }
    else if (imc <= 29.9)
    {
        textoIMC = "Sobrepeso (grau 1 de obesidade)"
    }
    else if (imc <= 39.9)
    {
        textoIMC = "Obesidade (grau 2 de obesidade)"
    }
    else   
    {
        textoIMC = "Obesidade Grave (grau 3 de obesidade)"
    }

    document.getElementById('IMCText').innerText = "IMC: " +imc +", "+ textoIMC;
}