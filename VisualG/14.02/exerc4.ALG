Algoritmo "semnome"
// Disciplina  : Linguagem e L�gica de Programa��o
// Professor   : Alessandro Palmeira
// Descri��o   : Aqui voc� descreve o que o programa faz! (fun��o)
// Autor(a)    : Nome do(a) aluno(a)
// Data atual  : 14/02/2019
Var
   // Se��o de Declara��es das vari�veis
   n1,n2:inteiro
   media:real
   fim,opcao:caracter

Inicio
   // Se��o de Comandos, procedimento, fun��es, operadores, etc...
   escreva("Digite um numero: ")
   leia(n1)
   escreva("Digite um numero: ")
   leia(n2)

   media <- (n1+n2)/2

   se media <- media mod=2)entao
      escreva(media)
   senao

    repita
      escreval("Fim para terminar a leitura. ")
      leia(opcao)
   fimse

   ate opcao = fim

