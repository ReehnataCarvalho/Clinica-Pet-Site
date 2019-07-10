Algoritmo "semnome"
// Disciplina  : Linguagem e Lógica de Programação
// Professor   : Alessandro Palmeira
// Descrição   : Aqui você descreve o que o programa faz! (função)
// Autor(a)    : Nome do(a) aluno(a)
// Data atual  : 14/02/2019
Var
   // Seção de Declarações das variáveis
   n1,n2: inteiro

Inicio
   // Seção de Comandos, procedimento, funções, operadores, etc...
   //Realizar a somar de um número digitado até o valor inserido for igual a 0

   escreva("Digite um numero: ")
   leia(n1)
   repita
      escreva("Digite um numero: ")
      leia(n2)
      n1 <- n1 + n2
      escreval(n1)
   ate n2 = 0

Fimalgoritmo