# ExerciciosPHP

<h1> Como Rodar </h1>

Para rodar os exercicios PHP em um ambiente isolado usando o Docker, siga estes passos:

1- Certifique-se de ter o Docker instalado em sua máquina. 
Você pode baixá-lo a partir do site oficial do Docker: https://www.docker.com/

2- Crie um arquivo `docker-compose.yml` no diretório raiz do seu projeto PHP. 

3- No arquivo `docker-compose.yml`, inclua as seguintes informações:

```yaml
version: '3.9'
services:
  php-apache:
    image: php:8.2.4-apache-buster
    ports:
      - 8080:80
    volumes: 
      - ./:/var/www/html

```


4- Salve o arquivo docker-compose.yml e execute o seguinte comando no terminal, dentro do diretório raiz do seu projeto:

```yaml
docker-compose up -d
```

5- Quando o ambiente estiver pronto, você pode acessar o código PHP em seu navegador em http://localhost:8080. 

6- É importante lembrar que o arquivo `docker-compose.yml` deve estar presente no diretório raiz do projeto e o comando `docker-compose up -d` deve ser executado dentro deste diretório.