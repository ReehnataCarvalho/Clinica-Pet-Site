Algoritmo "semnome"
// Disciplina  : Linguagem e L�gica de Programa��o
// Professor   : Alessandro Palmeira
// Descri��o   : Aqui voc� descreve o que o programa faz! (fun��o)
// Autor(a)    : Nome do(a) aluno(a)
// Data atual  : 14/02/2019
Var
   // Se��o de Declara��es das vari�veis
   n1,n2: inteiro

Inicio
   // Se��o de Comandos, procedimento, fun��es, operadores, etc...
   //Realizar a somar de um n�mero digitado at� o valor inserido for igual a 0

   escreva("Digite um numero: ")
   leia(n1)
   repita
      escreva("Digite um numero: ")
      leia(n2)
      n1 <- n1 + n2
      escreval(n1)
   ate n2 = 0

Fimalgoritmo