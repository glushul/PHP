<?php
namespace src\Models;
use src\Services\Db;

abstract class ActiveRecordEntity {
    protected $id;
    public function getId() {
        return $this->id;
    }
    public function __set($name, $value) {
        $camelCaseName = $this->underscoreToCamelCase($name);
        $this->$camelCaseName = $value;
    }
    private function underscoreToCamelCase($column) {
        return lcfirst(str_replace('_', '', ucwords($column, '_')));
    }
    public static function findAll(): array {
        $db = Db::getInstance();
        $sql = 'SELECT * FROM ' . static::getTableName();
        return $db->query($sql, [], static::class);
    }

    public static function getById(int $id) {
        $db = Db::getInstance();
        $sql = 'SELECT * FROM ' . static::getTableName() . ' WHERE id=' . $id;
        $entities = $db->query($sql, [], static::class);
        return $entities ? $entities[0] : null;
    }

    abstract public static function getTableName(): string;
}