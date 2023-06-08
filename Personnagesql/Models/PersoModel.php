<?php

namespace App\Models;

require_once 'Database.php';
require_once 'Models/Perso.php';

use App\Database;

use PDO;

class PersoModel
{
    private $connection;

    public function __construct()
    {
        $this->connection = new Database();
    }
    public function getAll()
    {
        $query = $this->connection->getPdo()->prepare("SELECT id,name,classe,race,statattaque,statdefense FROM perso");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_CLASS, "App\Models\Perso");
    }
    public function getById($id)
    {
        $query = $this->connection->getPdo()->prepare("SELECT id, name, classe, race, statattaque, statdefense FROM perso WHERE id = :id");
        $query->execute(['id' => $id]);
        $data = $query->fetch(PDO::FETCH_ASSOC);

        $perso = new Perso();
        $perso->setId($data['id']);
        $perso->setName($data['name']);
        $perso->setClasse($data['classe']);
        $perso->setRace($data['race']);
        $perso->setStatattaque($data['statattaque']);
        $perso->setStatdefense($data['statdefense']);

        return $perso;
    }

    public function create($perso)
    {
        $query = $this->connection->getPdo()->prepare('INSERT INTO perso (name,classe,race,statattaque,statdefense) VALUES (:name,:classe,:race,:statattaque,:statdefense)');
        $query->execute([
            'name' => $perso['name'],
            'classe' => $perso['classe'],
            'race' => $perso['race'],
            'statattaque' => $perso['statattaque'],
            'statdefense' => $perso['statdefense'],
        ]);
    }

    public function update($id, $perso)
    {
        $query = $this->connection->getPdo()->prepare('UPDATE perso SET name = :name, classe = :classe, race = :race, statattaque = :statattaque, statdefense = :statdefense WHERE id = :id');
        $query->execute([
            'id' => $id,
            'name' => $perso['name'],
            'classe' => $perso['classe'],
            'race' => $perso['race'],
            'statattaque' => $perso['statattaque'],
            'statdefense' => $perso['statdefense'],
        ]);
    }

    public function delete($id){
        $query = $this->connection->getPdo()->prepare('DELETE FROM perso WHERE id = :id');
        $query->execute([
            'id' => $id,
        ]);
    }
}
