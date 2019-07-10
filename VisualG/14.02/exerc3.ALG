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

   //Fazer um algoritmo para somar os número pares existentes entre
   //um número inicial no intervalo [0, 100] e um número final no
   //intervalo [300, 400], informado pelo usuário
   //O sistema acaba quando os valores se igualam

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
         
         se((( n1 mod 2 = 0)e(n2 mod 2 =0)) ou
         ((n1 mod 2 = 1)e(n2 mod 2 = 1))ou((n1 mod 2 = 1)
         e(n2 mod 2 = 0))ou((n1 mod 2 = 0)e(n2 mod 2 = 1)) )
         entao

         escreval(n1," , ",n2)
         senao
            n1 <- n1 +1 +2
            n2 <- n1 +1 +2
            escreva  (n1," , ",n2)
         fimse
      fimse
   ate n1=n2

fimse

Fimalgoritmo