Algoritmo "semnome"
// Disciplina  : Linguagem e L�gica de Programa��o
// Professor   : Alessandro Palmeira
// Descri��o   : Aqui voc� descreve o que o programa faz! (fun��o)
// Autor(a)    : Nome do(a) aluno(a)
// Data atual  : 12/02/2019
Var
   // Se��o de Declara��es das vari�veis
   senhaCorr,senha:inteiro
   nome: caracter

Inicio
   // Se��o de Comandos, procedimento, fun��es, operadores, etc...
   senhacorr <- 4531
   
   escreva("Digite seu nome: ")
   leia (nome)

   escreva("Digite sua senha: ")
   leia(senha)

   se(senha = senhaCorr )entao
      escreval()
      escreval(nome,",seu acesso foi permetido-")
      escreval()
   senao
      escreval()
      escreval(nome,",seu acesso foi negado-")
      escreval()
   fimse



Fimalgoritmo