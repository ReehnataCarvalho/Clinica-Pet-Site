Algoritmo "semnome"
// Disciplina  : Linguagem e L�gica de Programa��o
// Professor   : Alessandro Palmeira
// Descri��o   : Aqui voc� descreve o que o programa faz! (fun��o)
// Autor(a)    : Nome do(a) aluno(a)
// Data atual  : 14/02/2019
Var
   // Se��o de Declara��es das vari�veis
  n1,n2:inteiro

Inicio
   // Se��o de Comandos, procedimento, fun��es, operadores, etc...

   escreva("Digite um numero entre 0 e 100: ")
   leia(n1)
   escreva("Digite um numero entre 300 e 400: ")
   leia(n2)

   se ((n1<0)ou(n1>100))e((n2<300)ou(n2>400))entao
      escreva("Numero invalido")
   senao
      repita

         n1 <- n1+1
         n2 <- n2-1

         se( n1 mod 2 = 0)entao
            escreval(n1," , ",n2)
         fimse
      ate n1=n2

   fimse
Fimalgoritmo