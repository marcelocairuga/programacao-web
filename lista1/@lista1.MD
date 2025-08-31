# Lista de Exercícios 1 – Introdução ao PHP

## 01. Olá Mundo
Crie um script que imprima o texto **“Olá, Mundo!”**.

---

## 02. Título em HTML
Crie um script que imprima um título `<h1>` com o texto **“Olá, Mundo!”**.

---

## 03. Variável simples
Em um script PHP, crie uma variável `nome` e atribua o seu nome.  
Então imprima um parágrafo `<p>` com o conteúdo:  
**“Meu nome é Elesbão.”**

---

## 04. Concatenação de strings
Em um script PHP, crie as variáveis `nome` e `idade`, atribuindo o seu nome e a sua idade.  
Então, imprima um parágrafo `<p>` com o texto:  
**“Meu nome é Elesbão e tenho 21 anos.”**  
➡️ Utilize o **operador de concatenação (`.`)**.

---

## 05. Interpolação de variáveis
Repita o exercício anterior, mas utilize **interpolação de variáveis** (aspas duplas).

---

## 06. Impressão de dados formatados
Em um script PHP, crie as variáveis `nome`, `turma` e `nota`, atribuindo valores de sua preferência.  
Usando apenas PHP, imprima os seguintes elementos HTML:

```html
<h2>Dados do Estudante</h2>
<p>Nome: Genoveva</p>
<p>Turma: INF2AM</p>
<p>Nota Final: 9.5</p>
```

---

## 07. Documento HTML com PHP
Em um script PHP, crie as variáveis `nome`, `turma` e `nota`, atribuindo valores de sua preferência.  
Então, crie um **documento HTML inteiro**, com os mesmos elementos do exercício anterior em seu corpo.  
➡️ Use o PHP apenas para imprimir o **conteúdo das variáveis** dentro do respectivo elemento.

---

## 08. Situação do estudante
Partindo do exercício anterior, acrescente mais um parágrafo ao final, com o seguinte conteúdo:  

```html
<p>Situação: aprovado(a)</p>
```

A situação deve ser calculada a partir da nota:  
- Se for maior ou igual a **6**, o estudante está **aprovado**.  
- Caso contrário, está **reprovado**.  

➡️ Use o **operador ternário**.

---

## 09. Operações matemáticas
Crie duas variáveis `x` e `y` e atribua números inteiros entre 1 e 10.  
Utilizando apenas PHP, imprima os elementos HTML no formato abaixo, substituindo os valores **7 e 5** pelos valores das variáveis:

```text
Operações entre 7 e 5
Adição: 7 + 5 = 12
Subtração: 7 – 5 = 2
Multiplicação: 7 x 5 = 35
Divisão: 7 / 5 = 1.4
```

---

## 10. Exibindo imagem com PHP
Utilizando apenas PHP, crie um script que exibe o logo do IFSul na tela através de um elemento `<img>`.  

Defina os seguintes atributos:
- **src**: `https://www.ifsul.edu.br/images/Verso-Horizontal-2.png`  
- **width**: `400`

---

## 11. Lista de divisores com for
Em um script PHP, crie uma variável `x` e atribua um valor inteiro entre 1 e 100.  
Utilizando o laço **for**, imprima uma lista (`<ul>`) com todos os **divisores** de `x`.

---

## 12. Lista de múltiplos com while
Em um script PHP, crie uma variável `x` e atribua um valor inteiro entre 1 e 10.  
Utilizando o laço **while**, imprima uma lista (`<ul>`) com todos os seus **múltiplos menores do que 100**.
