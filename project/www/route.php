<?php

return [
    '~^$~' => [src\Controllers\ArticleController::class, 'index'],
    '~hello/(.+)$~' => [src\Controllers\MainController::class, 'sayHello'],
    '~bye/(.+)$~' => [src\Controllers\MainController::class, 'sayBye'],
    '~article/(\d+)~' => [src\Controllers\ArticleController::class, 'show'],
];