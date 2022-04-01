## JN2 Desafio -> Christian Jorge

Framework utilizada: *Laravel 8*

O nosso desafio consiste na criação de um sistema de controle de clientes e suas respectivas placas de carro.
Possui uma base de dados com os seguintes campos:
 
ID;<br>
Nome;<br>
Telefone;<br>
CPF;<br>
Placa do Carro.<br>

Para o gerenciamento dessa base, foi construído uma API REST contendo os seguintes endpoints:

Método |Endpoint |                    Descrição<br>
POST |	/api/cliente |	                    Cadastro de novo cliente.<br>
PUT |	    /api/cliente/{id} |	                Edição de um cliente já existente.<br>
DELETE |	/api/cliente/{id} |                Remoção de um cliente existente.<br>
GET |	    /api/cliente/{id} |                Consulta de dados de um cliente.<br>
GET |	    /api/consulta/final-placa/{numero} |	Consulta de todos os clientes cadastrados na base, onde o último número da placa do carro é igual ao informado.

## Regras

OK! - Você deve construir o seu ambiente utilizando o docker e docker-compose (você pode utilizar uma receita de ambiente pronta, encontrada na internet);

OK! - Você deve utilizar um framework PHP de sua escolha;

OK! - Você será avaliado pela lógica e leitura do seu código, seguindo os princípios SOLID e PSR.

 