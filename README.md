# Projeto Carro - Site de Loja de Veículos (E-commerce) em PHP

Este projeto PHP foi desenvolvido para criar um site de loja de veículos (ecommerce) com funcionalidades avançadas, incluindo um painel de administração e sistemas de login separados para administradores e clientes. A estrutura do código segue o padrão de arquitetura MVC (Model-View-Controller), proporcionando organização e escalabilidade.

No desenvolvimento, optou-se por utilizar PHP puro, garantindo uma implementação mais leve e flexível, sem depender de frameworks específicos. O Smarty Framework foi adotado como um sistema de template para gerenciar a criação das telas HTML. Essa escolha visa separar claramente a lógica de apresentação do código PHP, facilitando a manutenção e a compreensão do código.

A camada de acesso a dados é implementada utilizando o PDO (PHP Data Objects), uma extensão do PHP que oferece uma interface consistente para interagir com diferentes sistemas de gerenciamento de banco de dados. Isso não apenas melhora a segurança da aplicação, mas também permite uma fácil migração entre diferentes bancos de dados.

## Configuração do Banco de Dados

Antes de iniciar o projeto, é necessário configurar o banco de dados. Crie um arquivo chamado .env na raiz do projeto e configure as informações do banco de dados:

```env
DB_HOST=seu_host
DB_PORT=seu_port
DB_DATABASE=nome_do_banco
DB_USERNAME=seu_usuario
DB_PASSWORD=sua_senha
```

## Instalação

Para criar o banco de dados, execute o seguinte comando:

```
composer run artisan createDatabase
```

Em seguida, para criar as tabelas necessárias, utilize o comando:

```
composer run artisan createTables
```

## Adicionar uma Conta de Administrador

Para adicionar uma conta de administrador, execute o seguinte comando, substituindo nome, email e senha pelos valores desejados:

```
composer run artisan insert nome email senha
```

## Resetar o Banco de Dados

Caso seja necessário resetar o banco de dados, utilize o seguinte comando:

```
composer run artisan reset
```

## Iniciar o Servidor

Para iniciar o servidor na porta 3000, execute o seguinte comando:

```
composer run server
```

Acesse o site no navegador em http://localhost:3000.

## Estrutura do Projeto

- Config:

Contém arquivos de configuração para o projeto, como definições do banco de dados, configurações de aplicativos e outras variáveis globais específicas do projeto.

- Controller:

Neste diretório, encontram-se os controladores, que têm a responsabilidade de receber as solicitações do usuário, processá-las e interagir com os modelos e as visões. Os controladores atuam como intermediários entre a lógica de negócios (modelos) e a interface do usuário (visões).

- Core:

Este diretório abriga componentes centrais e classes fundamentais essenciais para o funcionamento do framework ou da aplicação. Inclui classes para manipulação de solicitações HTTP, gerenciamento de sessões, tratamento de erros, entre outras funcionalidades cruciais.

- Model:

Aqui estão os modelos, que representam a camada de acesso a dados ou lógica de negócios. Os modelos são responsáveis pela interação com o banco de dados, validação de dados e implementação de regras de negócios.

- Routes:

Este diretório contém arquivos ou classes relacionados ao roteamento. O roteamento é responsável por direcionar as solicitações do usuário para os controladores apropriados com base nos URLs. Isso ajuda a organizar e estruturar as diferentes partes da aplicação.

- View:

Contém os arquivos de visualização, responsáveis por exibir dados ao usuário. As visões normalmente consistem em HTML combinado com código PHP (ou outras linguagens de template) para apresentar dinamicamente os dados recuperados pelos controladores.

## Observações

Certifique-se de ter o Composer instalado antes de executar os comandos. Para instalar as dependências, utilize:

```
composer install
```

Lembre-se de configurar adequadamente o ambiente antes de iniciar o projeto.
