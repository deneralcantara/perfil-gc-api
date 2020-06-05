### Para instalação do projeto, rodar o comando
```
composer install
```


### CONFIGURACAO .ENV ###

### No projeto terá um .env.example. Copiar esse arquivo e criar um chamado .env;

###     Na parte de APP_URL, deverá colocar em qual URL sua API estará ativa (a porta também deverá ser colocada aqui);
```
APP_URL=http://localhost:8000
```

###     Na parte de DB_DATABASE, deverá informar qual banco de dados você irá utilizar, no caso, "perfil-gc", juntamente com o usuário e senha em DB_USERNAME e DB_PASSWORD respectivamente;

###     Se APP_KEY não estiver preenchida, rodar o comando a seguir;
```
php artisan key:generate
```

### Linkar o Storage para funcionar troca de avatar
```
php artisan storage:link
```

### Para criação do banco de dados, deverá rodar a migrate para instalação da tabela utilizada; Para esse comando funcionar, o banco de dados com o nome configurado no .env já deve estar criado;
```
php artisan migrate
```



### Para rodar a API, deverá executar o comando a seguir;
```
php artisan serve --host=0.0.0.0
```
