feito por - Pedro Rodrigues e Eduardo Oliveira Andrade


Para rodar o projeto você precisa primeiro garantir que tenha PHP instalado em versão atualizada, assim como MySQL ou MariaDB. Depois de clonar ou extrair os arquivos do projeto, é necessário criar o banco de dados no MySQL. Isso pode ser feito executando um CREATE DATABASE cadastro e, em seguida, importando o arquivo pessoa.sql que já traz a tabela pronta. Com isso, a estrutura da base estará configurada para receber os registros.

No código, a conexão ao banco está centralizada no arquivo app/Core/Database.php. É ali que você deve ajustar o nome do banco, usuário e senha do MySQL, garantindo que combinem com a configuração criada. Se você não alterar nada, ele tenta usar o banco cadastro com usuário root e senha vazia, que é o padrão em muitas instalações locais. Caso queira, também pode configurar variáveis de ambiente via .env, mas não é obrigatório.

Para executar a aplicação existem duas opções principais. A mais simples é usar o servidor embutido do PHP. Basta abrir um terminal, navegar até a pasta public/html e rodar o comando php -S localhost:8080. Com isso, a aplicação já pode ser acessada em http://localhost:8080/formPessoa.html. A outra forma é configurar o projeto em um servidor web como Apache ou Nginx, definindo o diretório público do site como sendo a pasta public/html. Nesse caso, a aplicação ficará disponível em um endereço como http://localhost/pessoas-mvc-api/public/html/formPessoa.html.

Depois de rodar o servidor, ao abrir o formulário você já pode cadastrar pessoas informando nome, CPF e telefone. O backend validará os dados, gravará no banco e retornará mensagens de sucesso ou erro. Os registros inseridos serão listados na própria página, permitindo também editar ou excluir com botões diretos. Se ocorrer algum erro de conexão, basta revisar o Database.php e ajustar os parâmetros do MySQL. A partir desse ponto, você já tem um CRUD completo funcionando em PHP com MVC.
