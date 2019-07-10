Algoritmo "semnome"
// Disciplina  : Linguagem e Lógica de Programação
// Professor   : Alessandro Palmeira
// Descrição   : Aqui você descreve o que o programa faz! (função)
// Autor(a)    : Nome do(a) aluno(a)
// Data atual  : 12/02/2019
Var
   // Seção de Declarações das variáveis
   nome:caracter
   anoFut,idadeFut1,idadeFut2,anoNasc,anoAtual,mesNasc,mesAtual,idade1,idade2: inteiro

Inicio
   // Seção de Comandos, procedimento, funções, operadores, etc...
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
      escreval(nome,"sua idade no momento é",idade1)
      escreval ("e você terá em 2028,",idadeFut1)
   senao
      escreval()
      escreval(nome,"sua idade no momento é",idade2)
      escreval ("e você terá em 2028,",idadeFut2)
   fimse
   
   
Fimalgoritmo