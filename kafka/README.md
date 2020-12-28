# Kafka

Este projeto baseado em [Docker](https://www.docker.com/) e, por isso, é necessário o ter instalado para execução do ambiente.

A pasta `./bin` possui diversos scripts utilitários, para configuração, execução e manipulação do ambiente de desenvolvimento da aplicação.

Para configurar e acessar o projeto, execute:

```

### Executando o container
```
./bin/run
```
Inicia o containers Docker.


### Consumindo Tópicos
```
./bin/kafka-consumer customers
```
Consome o tópico "customers"

```
./bin/kafka-consumer products
```
Consome o tópico "products"