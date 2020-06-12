### Para instalação do projeto, rodar o comando
```
composer install
```

### CONFIGURACAO .ENV ###

### No projeto terá um .env.example. Ele está exatamente como a API precisa rodar. Copiar esse arquivo e criar um chamado .env;

### Antes de começar a rodar os comandos, já deve existir um banco de dados com o nome "perfil-gc" criado;

###     Se APP_KEY (dentro do arquivo .env) não estiver preenchida, rodar o comando a seguir;
```
php artisan key:generate
```

### Para criação do banco de dados, deverá rodar a migrate para instalação da tabela utilizada; Para esse comando funcionar, o banco de dados com o nome configurado no .env já deve estar criado;
```
php artisan migrate
```

### Para rodar a API, deverá executar o comando a seguir;
```
php artisan serve --host=0.0.0.0
```

### A API estará rodando com o seu IP; Você pode consultar o seu IP utilizando o comando ipconfig no console do windows; Não se esqueça de utilizar a porta padrão do laravel (:8000) como o exemplo abaixo;
```
http://192.168.1.4:8000/api
```

### Também é possível acessar os dados através de 
```
http://localhost:8000/api
```

### Esse endereço consultado via comando no windows deve estar presente no arquivo ENV.JS do client;
