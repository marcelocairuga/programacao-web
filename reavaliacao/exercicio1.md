# 📝 Atividade – Criando elementos do DOM em JavaScript

Você recebeu um arquivo **HTML** e **CSS** já prontos. Nesse arquivo existem alguns controles de entrada para capturar dados de um estudante:  

- Um campo de texto para o **nome**  
- Um campo numérico para a **idade**  
- Um `<select>` para escolher o **curso** (entre *Informática* e *Mecatrônica*)  
- Dois botões de opção (*rádio buttons*) para indicar o **turno** (*manhã* ou *tarde*)  
- Um **botão** para gerar o card  

Também já existe uma `<div id="resultado"></div>` onde o card deve ser exibido.  
O arquivo possui ainda uma tag `<script>` vazia — é nesse espaço que você deve escrever todo o código JavaScript.  

---

## O que você deve fazer

1. **Capturar o clique** no botão “Criar Card”.  
   - Para isso, você precisa criar um **evento** em JavaScript associado ao botão.  

2. **Ler os valores** digitados ou selecionados em cada controle:  
   - Pegue o valor do campo de texto (**nome**);  
   - Pegue o valor do campo numérico (**idade**);  
   - Pegue o valor do `<select>` (**curso**);  
   - Descubra qual botão de rádio foi marcado (**turno**).  

3. **Criar dinamicamente um card** no DOM:  
   - O card deve ser um elemento `<div>` com a classe `"card"`.  
   - Dentro dele, crie um `<h3>` para exibir o nome do estudante.  
   - Depois, crie elementos `<p>` para mostrar a idade, o curso e o turno.  

4. **Inserir o card pronto** dentro da `<div id="resultado">`.  
 
---

## Regras da atividade

- Você **não deve alterar o HTML ou o CSS** fornecidos.  
- Todo o trabalho de criar e inserir elementos deve ser feito **via JavaScript**.  
- O código precisa funcionar mesmo que diferentes nomes, idades, cursos ou turnos sejam informados.  

---
