<?php

return [
    '~^$~' => [src\Controllers\ArticleController::class, 'index'],
    '~hello/(.+)$~' => [src\Controllers\MainController::class, 'sayHello'],
    '~article/(\d+)~' => [src\Controllers\ArticleController::class, 'show'],
];