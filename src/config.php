<?php

use App\Core\Config;

// Plik do wprowadzania konfiguracji aplikacji w postaci wartości KLUCZ->WARTOŚĆ

//------------------------------------------------------------------------------------------------------------------------------------------

Config::set('__ROLES', array('czytelnik', 'administrator'));                                        // tablica ról użytkowników aplikacji
Config::set('__SELF_SANITIZED', filter_var($_SERVER['PHP_SELF'], FILTER_SANITIZE_URL));             // zmienna wskazująca na aktualny adres

Config::set('__MVC_DEF_METHOD', 'index');                                                           // domyślna metoda kontrolera (w przypadku braku parametrów)
Config::set('__MVC_DEF_CONTROLLER', 'auth');                                                        // domyślny kontroler (w przypadku braku parametrów)
Config::set('__MVC_CONTROLLER_SUFFIX', 'Controller');                                               // suffix używany przy klasach kontrolera
Config::set('__MVC_CONTROLLERS_DIR', Config::build_path(__DIR__, 'controllers'));                   // ścieżka do klas kontrolerów
Config::set('__MVC_VIEWS_DIR', Config::build_path(__DIR__, 'views'));                               // ścieżka do widoków aplikacji
Config::set('__MVC_VIEWS_PARTIALS_DIR', Config::build_path(__DIR__, 'views', 'partials'));          // ścieżka do widoków częściowych aplikacji
Config::set('__MVC_CONTROLLERS_NAMESPACE', 'App\Controllers\\');                                    // przestrzeń nazw dla kontrolerów

Config::set('__DB_DSN', 'mysql:host=localhost;dbname=pdo');                                         // data source name do bazy danych
Config::set('__DB_USERNAME', 'root');                                                               // nazwa użytkownika bazy danych
Config::set('__DB_PASSWORD', '');                                                                   // nazwa użytkownika bazy danych
Config::set('__DB_INIT_COMMANDS', array(PDO::MYSQL_ATTR_INIT_COMMAND, 'SET NAMES "UTF8"'));         // wymuszenie kodowania znaków UTF-8