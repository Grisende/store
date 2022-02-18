# Como configurar

1° Clone o repositório com o comando: git clone git@github.com:Grisende/store.git
2° Rode o comando: composer-install dento da pasta com o projeto(caso não tenha instalado o composer segue o link https://getcomposer.org/download/)
3° copie o o arquivo .env.example e renomeie para .env
4° Altere as informações do banco de dados dentro do arquivo .env de DB_CONNECTION até DB_PASSWORD
5° Rode o comando: php artisan key:generate para gerar o APP_KEY no .env
6° Em config/database.php na sessão 'mysql' altere 'engine' => null para 'engine' => 'innoDB'

#Configurações opcionais
- Caso queira criar as tabelas sem precisar utilizar comandos mysql você pode rodar o comando: php artisan:migrate
- Caso queira popular as tabelas você pode rodar o comando: php artisan db:seed
