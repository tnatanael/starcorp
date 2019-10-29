# Teste StarCorp

Este teste foi realizado usando os seguites packages como base:

"splitbrain/php-cli": "^1.1"  
"symfony/var-dumper": "^4.3"  
"phpunit/phpunit": "^8.3"  

Observações:  
  O código fonte principal está na pasta **src/**  
  Os códigos de teste unitário seguem suas respectivas classes com o sulfixo **Test.php**  

## Instalação

Clonar o repositório:

```
git clone https://github.com/tnatanael/starcorp
```

Instalar as dependências
```
composer install
```

Executar a aplicação:
```
php run.php -s 1 -e 100
```

Rodar testes unitários:
```
composer dump && vendor/bin/phpunit src/
```

Para ver uma ajuda:
```
php run.php -h
```

Para visualizar o relatório de code coverage, abrir no navegador o arquivo:
```
tests/build/coverage/index.html
```
