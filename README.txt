Exam it-akademy - Developpeur web et mobile - session 2017-18

Sujet: Création d'une application permettant la gestion d'un magasin de musique.

Utilisation de Virtual Box et Vagrant.
Vagrant -> vm.box = ubuntu/xenal64 / private.network = http://192.168.33.10 / vm.synced_folder: "./data", "/var/www/html"
Installation -> apache2, zip, php7.2, mysql-server, composer, laravel
Liaision -> libapache2-mod-php7.2, php7.2-zip, php7.2-mysql, php7.2-mbstring, php7.2-dom
Autorisation apache -> a2enmod rewrite
Modification apache -> 000default.config (DocumentRoot /var/www/html/laravel/public;
					  Ajout de <Directory /var/www/html> Options Indexes FollowSymLinks MultiView, 
									     AllowOverride All, Require all granted
						   </Directory>)
		    -> envars (export APACHE_RUN_USER=vagrant; export APACHE_RUN_GROUP=vagrant)
Composer -> après installation, créer un alias: sudo mv composer.phar /usr/local/bin/composer
Laravel/html -> composer require laravelcollective/html; composer update
mysql/database -> create database storeMusic
Ajouter une langue sur laravel -> composer require caouecs/laravel-lang:~3.0; Déplacement du dossier "vendor/caoues/laravel-lang/fr"(ou autres) dans le dossier "ressources/lang" 

--- Laravel ---

Terminal: php artisant key:generate si besoin.
Terminal: php artisan make:controller NavController -> pour contrôler la navigation entre les pages.

Laravel: Modifier "routes/web.php" -> Route::get('/', 'NavController@Accueil'); -> Pour lier l'url de la page principale avec le NavController créer précedament.
Laravel: Modifier "app/Http/Controller/NavController.php -> public function Accueil() { return view('welcome');} -> Pour lier la page que l'on souhaite afficher dans le dossier "ressoures/views/welcome.php

-->Faire de même pour les "Article"s et le "Contact".

Laravel: Mise en place d'un template pour garder le menu de navigation visible dans toute les pages.   
