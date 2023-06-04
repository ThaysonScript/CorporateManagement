# Laravel Inventory Management System
>Este projeto é uma aplicação web desenvolvida em Laravel que permite gerenciar o estoque de um comércio. 
>
>Com ela, é possível cadastrar produtos, fornecedores, clientes e controlar as entradas e saídas de estoque.

# Instalar e rodar o projeto
Rodar o Gerenciador de Estoque em sua máquina local é uma tarefa extremamente simples.

## Dependências Globais
Você precisa ter três principais dependências instaladas:

- PHP 8.x
- Servidor web, geralmente (Apache - Nginx)
- Banco de dados relacional, geralmente (Mysql - PostgreSql)

### Instalando um ambiente rápido
Os serviços aqui listados baixam e instalam as dependências acima:
- xampp
- laragon (baixe individualmente o php 8.x e configure na aplicação)


## Dependências Locais
Então, após baixar o repositório `git clone`, não se esqueça de instalar as dependências locais do projeto:
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
DB_USERNAME=configurar-usuario-proprio
DB_PASSWORD=configurar-senha-propria
```

# Configuração de ambiente seguro

- A aplicação utiliza informações sensíveis, como a chave de criptografia da aplicação e as informações de conexão com o banco de dados.

- Você pode configurar essas variáveis no arquivo `.env` criando o seu próprio DB, usuário e senha.

- Para gerar a chave de criptografia, execute o comando:
```
php artisan key:generate
```


## Execute as migrações do banco de dados com
```
php artisan migrate
```

## Deseja configurar um host personalizado?
Você pode configurar um host personalizado para o seu ambiente:

crie um novo arquivo .conf no servidor/conf/example.conf
```
<VirtualHost *:80>
    ServerName seuhost.local
    DocumentRoot /caminho/para/o/diretorio

    <Directory /caminho/para/o/diretorio>
        Options Indexes FollowSymLinks
        AllowOverride All
        Require all granted
    </Directory>

</VirtualHost>
```

- ServerName = 'nome do host';
- DocumentRoot = 'apontamento raiz do projeto - configure para apontar para a pasta public do laravel';
- Directory /caminho/para/o/diretorio = 'aponte para a pasta public do seu app laravel';

### Se tiver no Linux ative o host personalizado com
`sudo a2ensite meuhost.conf`

### Se tiver no Windows ative o host personalizado no arquivo httpd.conf com
`Include "C:/caminho/para/o/seuhost.conf"`

### Opcionalmente adicione o host a sua maquina para que seja reconhecido pelo nome definido
`127.0.0.1    seuhost.local`

- Windows: C:\Windows\System32\drivers\etc\hosts
- Linux: /etc/hosts


## Inicie a aplicação em modo de desenvolvimento com
Inicie seu servidor local e banco de dados e digite na raiz do projeto:
```
php artisan serve
```
ou, caso host configurado digite a url do seu host no servidor, exemplo
```
GerenciadorEstoque.com
```


# Tecnologias utilizadas na Aplicação

- Laravel como framework PHP;

- Bootstrap 5 para o design de interface;

- MySQL como banco de dados relacional.


# Requisitos do sistema

- PHP 8.1 ou superior;

- Laravel 10x;

- Servidor web Apache ou Nginx;

- MySQL 5.7 ou superior.


# Funcionalidades

[] Cadastro de usuários com informações como: nome, e-mail e senha;

[] Cadastro de produtos com informações como: nome, descrição, preço, quantidade em estoque e categoria;

[] Cadastro de fornecedores com informações como: nome, endereço, telefone e e-mail;

[] Registro de entrada e saída de produtos no estoque;

[] Relatórios de produtos em estoque, produtos mais vendidos e fornecedores mais utilizados.


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

<a href="https://github.com/ThaysonScript/GerenciadorEstoque-Laravel/graphs/contributors">
  <img src="https://contributors-img.web.app/image?repo=ThaysonScript/GerenciadorEstoque-Laravel&max=500" alt="Lista de contribuidores" width="100%"/>
</a>