*Documentação:*

Arquivo *db.php*
Foi configurado a conexão com o banco de dados, com um único tratamento de erro.

Arquivo *functions.php*
Foi listada todas as funções para serem chamadas em arquivos diferentes para execuções independentes.

*Functions* criadas:
Salvar em JSON, para uma visualização mais clara do que estar sendo feito e se a API estar sendo executada da forma correta.

*Function* listar produtos:
Para que eu consiga ver todos os produtos cadastrados no sistema. já está atribuída de forma automática, na aba de cadastrar produtos, para que assim que o cadastro for finalizado, seja mostrado na execução do arquivo: index.php

*Function* cadastrar produtos:
Informando todos os detalhes do produto. Foram tratados erros de conexão com o banco de dados. Ao configurar o código, algumas informações, precisarão ser descritas como informado no banco de dados. Nesse caso, foi usado variáveis como condição, para que ela pudessem ser chamadas e os valores informados dentro da instrução pudessem ser acrescentados a elas e que em seguida o comando de salvar fosse executado corretamente.

*Function* buscar produto:
Após o WHERE temos que informar a chave primária da tabela, da forma que foi escrita na mesma para podermos manipular, que foi *ID_produto"*, pois quando foi pesquisado, era informado uma variável que recebia o nome de *$id*. Essa explicação acabou confundindo a forma de pensar da equipe, mas resolvida com sucesso, após uma melhor interpretação.

*Function* atualizar produto:
Precisou ser chamado todas as variáveis descritas, para que fosse possível manipular, tanto na condição, quanto na instrução final. Se fez necessário também, adicionar a variável global *$pdo*, o nome da tabela e todas as colunas de forma em que fizesse sentido com os ID's.

*Function* deletar produto:
Apesar da sua facilidade de passar a instrução da tabela, temos de ter cuidado, para não deletar toda a tabela. Lembrar sempre de usar WHERE, para que nenhum erro seja cometido, pois ela informa o número do ID (coluna), corretamente.