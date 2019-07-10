Algoritmo "semnome"
// Disciplina  : Linguagem e Lógica de Programação
// Professor   : Alessandro Palmeira
// Descrição   : Aqui você descreve o que o programa faz! (função)
// Autor(a)    : Nome do(a) aluno(a)
// Data atual  : 12/02/2019
Var
   // Seção de Declarações das variáveis
   n1,n2,n3:inteiro

Inicio
   // Seção de Comandos, procedimento, funções, operadores, etc...

   Escreva("Digite um numero: ")
   leia(n1)

   Escreva("Digite um numero: ")
   leia(n2)

   Escreva("Digite um numero: ")
   leia(n3)

   se(n1<n2)e(n1<n3)e(n2<n3) entao
      escreva(n1,",",n2,",",n3,".")
   senao
      se(n1<n2)e(n1<n3)e(n3<n2)entao
         escreva(n1,",",n3,",",n2,".")
         escreva(n1,",",n2,",",n3,".")
      senao
         se(n2<n1)e(n2<n3)e(n1<n3) entao
            escreva(n2,",",n1,",",n3,".")
         senao
            se(n2<n1)e(n2<n3)e(n3<n1) entao
               escreva(n2,",",n3,",",n1,".")
            senao
               se(n3<n1)e(n3<n2)e(n1<n2) entao
                  escreva(n3,",",n1,",",n2,".")
               senao
                  se(n3<n1)e(n3<n2)e(n2<n1) entao
                     escreva(n3,",",n2,",",n1,".")

                  fimse
               fimse
            fimse
         fimse
      fimse
   fimse

Fimalgoritmo

