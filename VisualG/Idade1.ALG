Algoritmo "semnome"
// Disciplina  : Linguagem e L�gica de Programa��o
// Professor   : Alessandro Palmeira
// Descri��o   : Aqui voc� descreve o que o programa faz! (fun��o)
// Autor(a)    : Nome do(a) aluno(a)
// Data atual  : 12/02/2019
Var
   // Se��o de Declara��es das vari�veis
   nome:caracter
   anoFut,idadeFut1,idadeFut2,anoNasc,anoAtual,mesNasc,mesAtual,idade1,idade2,: inteiro

Inicio
   // Se��o de Comandos, procedimento, fun��es, operadores, etc...
   anoFut <- 2028
   
   escreva("Digite o seu nome: ")
   leia(nome)
   escreva("Digite o mes do seu nascimento: ")
   leia(mesNasc)
   escreva("Digite o ano do seu nascimento: ")
   leia(anoNasc)
   escreva("Digite o mes atual: ")
   leia(mesAtual)
   escreva("Digite o ano atual: ")
   leia(anoAtual)

   idade1 <- anoAtual - anoNasc
   idade2 <- idade1 - 1

   
   idadeFut1 <- anoFut - anoNasc
   idadeFut2 <- idadeFut1 - 1
   

   se (mesAtual >= mesNasc) entao
      escreval()
      escreval(nome,"sua idade no momento �",idade1)
      escreval ("e voc� ter� em 2028,",idadeFut1)
   senao
      escreval()
      escreval(nome,"sua idade no momento �",idade2)
      escreval ("e voc� ter� em 2028,",idadeFut2)
   fimse
   
   
Fimalgoritmo