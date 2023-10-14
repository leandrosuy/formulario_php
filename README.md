# Formulário de Cadastro com PHP

Este repositório contém um formulário de cadastro simples implementado em HTML e PHP. O formulário coleta informações como nome, e-mail, website, comentário e gênero, com validações básicas em PHP.

## Conteúdo

- [Estrutura do Projeto](#estrutura-do-projeto)
- [Como Usar](#como-usar)
- [Validações](#validações)
- [Contribuições](#contribuições)
- [Licença](#licença)

## Estrutura do Projeto

```
./
│
├── index.php
└── README.md
```

- **index.php**: Contém o código do formulário e as validações em PHP.
- **README.md**: Este arquivo que você está lendo.

## Como Usar

1. Clone o repositório:

```bash
git clone https://github.com/leandrosuy/formulario_php
```

2. Abra o arquivo `index.php` em um navegador web.

3. Preencha o formulário e clique em "Enviar" para ver os dados enviados.

## Validações

O código PHP inclui algumas validações básicas:

- O campo "Nome" deve ser preenchido e ter entre 3 e 100 caracteres.
- O campo "E-mail" deve ser preenchido e ser um endereço de e-mail válido.
- O campo "Website" deve ser um URL válido (opcional).
- O campo "Gênero" deve ser selecionado.

Caso alguma validação falhe, uma mensagem de erro será exibida, e o processamento será interrompido.

## Contribuições

Contribuições são bem-vindas! Sinta-se à vontade para abrir issues ou pull requests para melhorias, correções de bugs ou novos recursos.

## Licença

Este projeto está licenciado sob a [MIT License](LICENSE).