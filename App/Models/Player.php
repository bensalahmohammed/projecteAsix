<?php
namespace App\Models;
use Core\App;
use PDO;
class Player {
    protected static $table = "players";
    public $id;
    public $name;
    public $team;
    public $position;
    public $birthYear;
    public function __construct($data = []) {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        $this->name = $data['name'];
        $this->team = $data['team'];
        $this->position = $data['position'];
        $this->birthYear = $data['birthYear'];
    }
    public function save() {
        $db = App::get('database')->getConnection();
        if ($this->id) {
            // Actualizar jugador existente
            $statement = $db->prepare('UPDATE ' . static::$table . ' SET name = :name, team = :team, position = :position, birthYear = :birthYear WHERE id = :id');
            $statement->bindValue(':id', $this->id);
            $statement->bindValue(':name', $this->name);
            $statement->bindValue(':team', $this->team);
            $statement->bindValue(':position', $this->position);
            $statement->bindValue(':birthYear', $this->birthYear);
            $statement->execute();
        } else {
            // Crear nuevo jugador
            $statement = $db->prepare('INSERT INTO ' . static::$table . ' (name, team, position, birthYear) VALUES (:name, :team, :position, :birthYear)');
            $statement->bindValue(':name', $this->name);
            $statement->bindValue(':team', $this->team);
            $statement->bindValue(':position', $this->position);
            $statement->bindValue(':birthYear', $this->birthYear);
            $statement->execute();

            if (!$this->id) {
                $this->id = $db->lastInsertId();
            }
        }
    }

    public static function all() {
        $db = App::get('database')->getConnection();
        $statement = $db->prepare('SELECT * FROM ' . static::$table);
        $statement->execute();
        $players = [];
        $results = $statement->fetchAll();
        foreach ($results as $result) {
            $players[] = new self($result);
        }
        return $players;
    }

    public function find($id) {
        $db = App::get('database')->getConnection();
        $statement = $db->prepare('SELECT * FROM ' . static::$table . ' WHERE id = :id');
        $statement->bindValue(':id', $id);
        $statement->execute();
        $data = $statement->fetch();
        return $data ? new self($data) : null;
    }

    public function delete($id) {
        $db = App::get('database')->getConnection();
        $statement = $db->prepare('DELETE FROM ' . static::$table . ' WHERE id = :id');
        $statement->bindValue(':id', $id);
        $statement->execute();
    }
}
