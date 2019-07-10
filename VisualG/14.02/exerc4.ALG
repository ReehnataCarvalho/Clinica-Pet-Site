Algoritmo "semnome"
// Disciplina  : Linguagem e Lógica de Programação
// Professor   : Alessandro Palmeira
// Descrição   : Aqui você descreve o que o programa faz! (função)
// Autor(a)    : Nome do(a) aluno(a)
// Data atual  : 14/02/2019
Var
   // Seção de Declarações das variáveis
   n1,n2:inteiro
   media:real
   fim,opcao:caracter

Inicio
   // Seção de Comandos, procedimento, funções, operadores, etc...
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

