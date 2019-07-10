Algoritmo "semnome"
// Disciplina  : Linguagem e Lógica de Programação
// Professor   : Alessandro Palmeira
// Descrição   : Aqui você descreve o que o programa faz! (função)
// Autor(a)    : Nome do(a) aluno(a)
// Data atual  : 12/02/2019
Var
   // Seção de Declarações das variáveis
   nome: caracter
   salBase,valGrat,valImp,salFinal: real

Inicio
   // Seção de Comandos, procedimento, funções, operadores, etc...
   escreva("Digite o nome do funcionário: ")
   leia (nome)

   escreva("Digite o salario base que ele recebe: ")
   leia(salBase)

   
   valGrat <- (salBase*(5/100))
   valImp <- (salBase*(7/100))
   salFinal <- (salBase + valGrat - valImp)
   
   escreval()
   escreval(nome," seu salario final é ",salFinal," R$")
   escreval()
   
   


Fimalgoritmo