README do Grupo – Atividade: Auditoria e Refatoração (Sistema da Biblioteca)
Entregável do aluno – Preencha este arquivo e entregue junto com o código e o checklist. Mantenha o texto objetivo e cite evidências (arquivo/linha/commit).

Identificação
Turma/UC: Desenvolvimento De Sistema - G9254 Teste de Sistemas  
Professor: Aislan Souza
Integrantes: Caique Barroso Dos Anjos, Marcos Antonio Sales Feitoza Junior,Victor Santos Silva.

Linguagem e Ambiente
Linguagem escolhida: ( x ) PHP  ( ) JavaScript (Node.js)
Versão: PHP 8.2.12 / Node 22.15.0
Como instalar dependências: Não tem.


- Como Executar PHP

Pegar o código do github

Servidor embutido, utilizar o xampp, e entrar na web pelo localhost

JavaScript (Node)

node js/app.js

Arquivos criados  =
index.php
adicionar.php
emprestimo.php
livros.php
livros.json



Estrutura do Projeto (após refatoração)
 biblioteca/
├── index.php        - Página principal (lista livros)
├── adicionar.php    - Formulário para adicionar livros
├── devolver.php     - Processa devolução de livros
├── livros.php       - Funções compartilhadas
└──  livros.json      - Banco de dados em JSON
