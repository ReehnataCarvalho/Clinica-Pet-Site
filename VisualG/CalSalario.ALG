Algoritmo "semnome"
// Disciplina  : Linguagem e L�gica de Programa��o
// Professor   : Alessandro Palmeira
// Descri��o   : Aqui voc� descreve o que o programa faz! (fun��o)
// Autor(a)    : Nome do(a) aluno(a)
// Data atual  : 12/02/2019
Var
   // Se��o de Declara��es das vari�veis
   nome: caracter
   salBase,valGrat,valImp,salFinal: real

Inicio
   // Se��o de Comandos, procedimento, fun��es, operadores, etc...
   escreva("Digite o nome do funcion�rio: ")
   leia (nome)

   escreva("Digite o salario base que ele recebe: ")
   leia(salBase)

   
   valGrat <- (salBase*(5/100))
   valImp <- (salBase*(7/100))
   salFinal <- (salBase + valGrat - valImp)
   
   escreval()
   escreval(nome," seu salario final � ",salFinal," R$")
   escreval()
   
   


Fimalgoritmo