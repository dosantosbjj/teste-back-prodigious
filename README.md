# Teste Técnico Prodigious
Foi um prazer desenvolver este teste e colocar em prática algumas de minhas habilidades. Obrigado pela oportunidade!!!

# Visão geral
Foram desenvolvidas as seguintes operações:
1. Cadastro de usuário com anexo.
2. Listagem dos usuários cadastrados.
3. Edição de usuários. 
4. Exclusão de usuários.
5. Busca por usuários (utilizando Ajax com jQuery).

# Instalação do projeto
Crie uma pasta com um nome qualquer aonde desejar. Com o composer e git devidamente instalados e configurados no seu ambiente windows, execute os comandos a seguir:

 Clonar projeto:
 
`git clone https://dosantosbjj/teste-prodigious.git`


 Instalar projeto e suas dependências: 
 
`composer install`

 Gerar chave da aplicação: 
 
`php artisan key:generate`

# Banco de dados: 
Criar base de dados no gerenciador mysql de preferência e editar dados para conexão no arquivo ".ENV".

Executar migration que cria tabela de usuário:
`php artisan migrate`

# Executar aplicação
Para executar e debugar o teste técnico, execute no terminal:
`php artisan serve`

O sistema pode ser acessado no endereço:
[Teste para dev back-end na Prodigious](http://localhost:8000)

*Obrigado pela atenção!!!*
