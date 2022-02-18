# Como configurar

1° Clone o repositório com o comando: git clone git@github.com:Grisende/store.git <br>
2° Rode o comando: composer-install dento da pasta com o projeto (caso não tenha instalado o composer segue o link https://getcomposer.org/download/) <br>
3° copie o o arquivo .env.example e renomeie para .env <br>
4° Altere as informações do banco de dados dentro do arquivo .env de DB_CONNECTION até DB_PASSWORD <br>
5° Rode o comando: php artisan key:generate para gerar o APP_KEY no .env <br>
6° Em config/database.php na sessão 'mysql' altere 'engine' => null para 'engine' => 'innoDB'

#Configurações opcionais
- Caso queira criar as tabelas sem precisar utilizar comandos mysql você pode rodar o comando: php artisan:migrate <br>
- Caso queira popular as tabelas você pode rodar o comando: php artisan db:seed

#SQL Relatório de Relevância

```SQL
select
  tags.tag_id,
  tags.name,
  count(product_tags.product_id) as quantity
from
  product_tags
join tags on tags.tag_id = product_tags.tag_id
group by product_tags.tag_id
```
