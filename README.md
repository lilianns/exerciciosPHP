# ExerciciosPHP
<h1> Instruções </h1>

Certifique-se de ter os seguintes requisitos antes de executar os exercícios PHP: 
- PHP 8 instalado na sua máquina, digitando o seguinte comando no terminal: `php -v` se não tiver, você pode baixar e instalar o PHP 8 a partir do site oficial do PHP (https://www.php.net/downloads.php).

<h2> Para rodar os exercícios PHP, siga estes passos: </h2>

1- Clone o repositório do git na sua máquina (É necessário que o Git esteja instalado em seu computador) e navegue até o diretório raiz do seu projeto clonado.
```
git clone https://github.com/lilianns/exerciciosPHP.git
```
2- Certifique-se de ter o Docker instalado em sua máquina. 
Você pode baixá-lo a partir do site oficial do Docker: https://www.docker.com/

3- Execute o seguinte comando no terminal, dentro do diretório raiz do seu projeto:
```
docker-compose up -d
```

4- Quando o ambiente estiver pronto, você pode acessar o código PHP em seu navegador em http://localhost:8181. 

5- No terminal, execute o seguinte comando para instalar as dependências do Composer: 
```
composer install
``` 
Isso irá baixar e instalar as dependências necessárias, incluindo o Codeception.

6- Execute o teste com o seguinte comando 
```
php vendor/bin/codecept run --steps
```
 Certifique-se de que está na raiz do projeto ao executar o comando.