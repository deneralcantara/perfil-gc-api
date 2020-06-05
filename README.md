### Para execução do projeto, rodar o comando
```
composer install
```

### Linkar o Storage para funcionar troca de avatar
```
php artisan storage:link (para linkar o storage e funcionar a troca de avatar)
```

### Para criação do banco de dados, deverá rodar a migrate para instalação da tabela utilizada;
```
php artisan migrate
```


### CONFIGURACAO .ENV ###

###     Na parte de APP_URL, deverá colocar em qual URL sua API irá estar ativa, como por exemplo "APP_URL=http://localhost:8000";

###     Na parte de APP_URL, deverá informar qual banco de dados você irá utilizar, no caso, "perfil-gc", juntamente com o usuário e senha
###     em DB_USERNAME e DB_PASSWORD respectivamente;

###     Se APP_KEY não estiver preenchida, rodar o comando a seguir;
```
php artisan key:generate
```

### ---------- CONFIGURACAO ---------- .ENV ###



### Para rodar a API, deverá executar o comando a seguir;
```
php artisan serve --host=0.0.0.0
```
