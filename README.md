# API de Cadastro de Alunos 📚👨‍🎓

Este é um projeto de API desenvolvido em Laravel utilizando o Artisan. A finalidade dessa API é permitir o cadastro de alunos e foi criada com fins de estudo. Será utilizada como parte de um projeto fullstack, onde será consumida por um front-end desenvolvido em Angular.

## Como executar o programa ▶️

Para executar o programa, siga as etapas abaixo:

1. Certifique-se de ter o ambiente de desenvolvimento Laravel configurado em sua máquina.
2. Clone este repositório em seu ambiente local.
3. Abra o terminal e navegue até o diretório do projeto.
4. Execute o comando `composer install` para instalar as dependências do Laravel.
5. Crie um arquivo `.env` na raiz do projeto e configure as informações do banco de dados.
6. Execute o comando `php artisan migrate` para criar as tabelas do banco de dados.
7. Por fim, execute o comando `php artisan serve` para iniciar o servidor local.

Agora você pode acessar a API de cadastro de alunos através do endereço `http://localhost:8000`.

## Criação das tabelas e migrations 🗃️

Para criar as tabelas necessárias para o funcionamento da API, siga as etapas abaixo:

1. Certifique-se de ter configurado corretamente o arquivo `.env` com as informações do banco de dados.
2. No terminal, execute o comando `php artisan migrate` para executar as migrations e criar as tabelas no banco de dados.

## Controllers 🎛️

Este projeto possui os seguintes controllers:

- `AlunoController`: Responsável por gerenciar as operações relacionadas aos alunos.

Você pode encontrar os controllers na pasta `app/Http/Controllers`.

## Observações 📝

Este projeto foi desenvolvido com fins de estudo e serve como base para a criação de um projeto fullstack. Sinta-se à vontade para explorar e personalizar a API de acordo com suas necessidades.

Caso tenha alguma dúvida ou precise de mais informações, estou à disposição para ajudar.
