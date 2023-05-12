# ExerciciosPHP

<h1> Como Rodar </h1>

Para rodar os exercicios PHP  usando o Docker, siga estes passos:

1- Clone o repositório do git na sua máquina depois certifique-se de ter o Docker instalado em sua máquina. 
Você pode baixá-lo a partir do site oficial do Docker: https://www.docker.com/

2- Execute o seguinte comando no terminal, dentro do diretório raiz do seu projeto:

```yaml
docker-compose up -d
```

5- Quando o ambiente estiver pronto, você pode acessar o código PHP em seu navegador em http://localhost:8181. 

6- É importante lembrar que o arquivo `docker-compose.yml` deve estar presente no diretório raiz do projeto e o comando `docker-compose up -d` deve ser executado dentro deste diretório.
 
7- Instale o Codecption para os testes automatizados, no terminal execute esse comando: `composer require "codeception/codeception" --dev`

8- Execute o teste com o seguinte comando `php vendor/bin/codecept run --steps`. Certifique-se de que está na raiz do projeto ao executar o comando de teste.
