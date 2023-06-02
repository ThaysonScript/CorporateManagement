# Laravel Inventory Management System
>Este projeto é uma aplicação web desenvolvida em Laravel que permite gerenciar o estoque de um comércio. 
>
>Com ela, é possível cadastrar produtos, fornecedores, clientes e controlar as entradas e saídas de estoque.


# Tecnologias utilizadas

- Laravel como framework PHP;

- TailwindCss para o design de interface;

- MySQL como banco de dados relacional.


# Requisitos do sistema

- PHP 8.1 ou superior;

- Laravel 10x;

- Servidor web Apache ou Nginx;

- MySQL 5.7 ou superior.


# Funcionalidades

- Cadastro de usuários com informações como: nome, e-mail e senha;

- Cadastro de produtos com informações como: nome, descrição, preço, quantidade em estoque e categoria;

- Cadastro de fornecedores com informações como: nome, endereço, telefone e e-mail;

- Registro de entrada e saída de produtos no estoque;

- Relatórios de produtos em estoque, produtos mais vendidos e fornecedores mais utilizados.


# Instalação
Rodar o Gerenciador de Estoque em sua máquina local é uma tarefa extremamente simples.

## Clone o repositório para a sua máquina local:
### Via Http
```
https://github.com/ThaysonScript/GerenciarEstoque-Laravel.git
```
### Via Ssh, caso o tenha configurado
```
git@github.com:ThaysonScript/GerenciarEstoque-Laravel.git
```

## Instale as dependências do projeto digitando o comando
```
composer install
```

## Configure o seu banco de dados

- Crie um arquivo `.env` na raiz do projeto, copiando o conteúdo do arquivo `.env.example`


- Configure a conexão com o seu banco de dados de preferência
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=GerenciarEstoque-Laravel
DB_USERNAME=root
DB_PASSWORD=
```

# Configuração de ambiente seguro

- A aplicação utiliza informações sensíveis, como a chave de criptografia da aplicação e as informações de conexão com o banco de dados.

- Você pode configurar essas variáveis no arquivo `.env` criando o seu próprio DB, usuário e senha.

Para gerar a chave de criptografia, execute o comando:
```
php artisan key:generate
```


## Execute as migrações do banco de dados com
```
php artisan migrate
```


## Inicie a aplicação em modo de desenvolvimento com
```
php artisan serve
```


# Testes automatizados

- O projeto inclui testes automatizados para garantir que as funcionalidades principais estejam funcionando corretamente.

Para executar os testes, utilize o comando
```
php artisan test
```


# Documentação

Para gerar a documentação do projeto, utilize o comando 
```
php artisan docs:generate
```

A documentação será gerada em HTML e salva na pasta `public/docs`.


# Contribuindo

## Contribuições são bem-vindas!

Para contribuir com este projeto, siga as seguintes etapas:

- Crie um fork do repositório.

- Crie uma branch com suas alterações 
```
git checkout -b my-new-feature
```

- Faça o commit das suas alterações
```
git commit -am 'Add some feature'
```

- Faça o push para a sua branch 
```
git push origin my-new-feature
```

- Crie um novo Pull Request.


# Conclusão

Este é um projeto simples, mas completo, para gerenciar o estoque de um comércio.
Com ele, é possível cadastrar produtos, fornecedores e clientes, além de controlar as entradas e saídas de estoque. 
Esperamos que este projeto possa ser útil para quem precisa de uma solução de gerenciamento de estoque simples e fácil de usar. 
Se tiver alguma dúvida ou sugestão, fique à vontade para entrar em contato conosco ou contribuir com o projeto.


# Licença

Este projeto está licenciado sob a [Licença MIT](https://github.com/ThaysonScript/GerenciarEstoque-Laravel/blob/31b9d564bb55b0dff41ff6555412ffc56cd51e73/LICENSE) - veja o arquivo `LICENSE` para mais detalhes.

## Contribuidores

<a href="https://github.com/thaysonScript/GerenciadorEstoque-Laravel/graphs/contributors">
  <img src="https://contributors-img.web.app/image?repo=thaysonScript/GerenciadorEstoque-Laravel&max=500" alt="Lista de contribuidores" width="100%"/>
</a>