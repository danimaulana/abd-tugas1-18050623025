<?php defined('SYSTEMPATH') || exit('No direct script access allowed'); ?>

CRITICAL - 2020-11-19 07:38:45 --> Unable to connect to the database.
#0 C:\xamppnew\htdocs\tugas-adb\vendor\codeigniter4\framework\system\Database\BaseConnection.php(646): CodeIgniter\Database\BaseConnection->initialize()
#1 C:\xamppnew\htdocs\tugas-adb\vendor\codeigniter4\framework\system\Database\BaseBuilder.php(1952): CodeIgniter\Database\BaseConnection->query('SELECT COUNT(*)...', Array, false)
#2 C:\xamppnew\htdocs\tugas-adb\app\Controllers\BookController.php(120): CodeIgniter\Database\BaseBuilder->countAllResults()
#3 C:\xamppnew\htdocs\tugas-adb\vendor\codeigniter4\framework\system\CodeIgniter.php(918): App\Controllers\BookController->datatable()
#4 C:\xamppnew\htdocs\tugas-adb\vendor\codeigniter4\framework\system\CodeIgniter.php(404): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\BookController))
#5 C:\xamppnew\htdocs\tugas-adb\vendor\codeigniter4\framework\system\CodeIgniter.php(312): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 C:\xamppnew\htdocs\tugas-adb\public\index.php(44): CodeIgniter\CodeIgniter->run()
#7 C:\xamppnew\htdocs\tugas-adb\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\xamppnew\\htd...')
#8 {main}
