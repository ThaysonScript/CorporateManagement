# Laravel Inventory Management System

>Este projeto é uma aplicação web desenvolvida em Laravel que permite gerenciar o estoque de um comércio. 
>
>Com ela, é possível cadastrar produtos, fornecedores, clientes e controlar as entradas e saídas de estoque.


# Tecnologias utilizadas

- Laravel como framework PHP;
- TailwindCss para o design responsivo da interface;
- MySQL como banco de dados relacional.


# Requisitos do sistema

- PHP 8.1 ou superior;
- Laravel 10x;
- Servidor web Apache ou Nginx;
- MySQL 5.7 ou superior.


# Funcionalidades

- Cadastro de produtos com informações como nome, descrição, preço, quantidade em estoque, fornecedor e categoria;
- Cadastro de fornecedores com informações como nome, endereço, telefone e e-mail;
- Cadastro de clientes com informações como nome, endereço, telefone e e-mail;
- Registro de entrada e saída de produtos no estoque;
- Relatórios de produtos em estoque, produtos mais vendidos, clientes mais frequentes e fornecedores mais utilizados.


# Instalação

Clone o repositório para a sua máquina local.

Instale as dependências do projeto com o comando composer install.

Crie um arquivo `.env` na raiz do projeto, copiando o conteúdo do arquivo `.env.example` e configurando as variáveis de ambiente conforme necessário (como conexão com banco de dados, por exemplo).

Execute as migrações do banco de dados com o comando `php artisan migrate`.

Inicie a aplicação com o comando `php artisan serve`.


# Configuração de ambiente

A aplicação utiliza variáveis de ambiente para armazenar informações sensíveis, como a chave de criptografia da aplicação e as informações de conexão com o banco de dados. 
Você pode configurar essas variáveis no arquivo `.env`.

Para gerar a chave de criptografia, execute o comando `php artisan key:generate`.


# Testes automatizados

O projeto inclui testes automatizados para garantir que as funcionalidades principais estejam funcionando corretamente. 
Para executar os testes, utilize o comando `php artisan test`.


# Documentação

Para gerar a documentação do projeto, utilize o comando `php artisan docs:generate`. 

A documentação será gerada em HTML e salva na pasta `public/docs`.


# Contribuindo

Contribuições são bem-vindas! Para contribuir com este projeto, siga as seguintes etapas:

- Crie um fork do repositório.
- Crie uma branch com suas alterações `git checkout -b my-new-feature`.
- Faça o commit das suas alterações `git commit -am 'Add some feature'`.
- Faça o push para a sua branch `git push origin my-new-feature`.
- Crie um novo Pull Request.


# Conclusão

Este é um projeto simples, mas completo, para gerenciar o estoque de um comércio. 
Com ele, é possível cadastrar produtos, fornecedores e clientes, além de controlar as entradas e saídas de estoque. 
Esperamos que este projeto possa ser útil para quem precisa de uma solução de gerenciamento de estoque simples e fácil de usar. 
Se tiver alguma dúvida ou sugestão, fique à vontade para entrar em contato conosco ou contribuir com o projeto.

# Licença
Este projeto está licenciado sob a [Licença MIT]() - veja o arquivo `LICENSE` para mais detalhes.
