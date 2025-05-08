<?php
namespace src\Modules\Articles;
use \src\Modules\Users\user;

class Article {
    private $id;
    private $name;
    private $text;
    private $authorId;
    private $createdAt;

    public function __set($name, $value) {
        $camelCaseName = $this->underscoreToCamelCase($name);
        $this->$camelCaseName = $value;
    }
    public function getId(): int {
        return $this->id;
    }
    public function getName(): string {
        return $this->name;
    }
    public function getText(): string {
        return $this->text;
    }
    private function underscoreToCamelCase(string $source): string {
        return lcfirst(str_replace('_', '', ucwords($source, '_')));
    }
}