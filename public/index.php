<?php
//Включаем запрет на неявное преобразование типов
declare(strict_types=1);

try {
   //Создаем экземпляр приложения и запускаем его
   $app = require_once __DIR__ . '/../core/bootstrap.php';
   $app->run();
} catch (\Throwable $exception) {
   echo '<pre>';
   print_r($exception);
   echo '</pre>';
}

stream_context_set_default([
   'ssl' => [
       'verify_peer' => false,
       'verify_peer_name' => false,
   ],
]);