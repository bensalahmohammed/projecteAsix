<?php
namespace App\Controllers;
use App\Models\Player;

class PlayersController {

    public function index() {
        // Obtener todos los jugadores
        $players = Player::all();
        require '../resources/views/players/index.blade.php';
    }

    public function create() {
        // Mostrar formulario para agregar un nuevo jugador
        require '../resources/views/players/create.blade.php';
    }

    public function store() {
        // Guardar nuevo jugador
        $name = $_POST['name'];
        $team = $_POST['team'];
        $position = $_POST['position'];
        $birthYear = $_POST['birthYear'];

        $newPlayer = new Player([
            'name' => $name,
            'team' => $team,
            'position' => $position,
            'birthYear' => $birthYear
        ]);
        $newPlayer->save();
        header('Location: /players');
    }

    public function edit($id) {
        // Buscar jugador por ID y mostrar formulario de edición
        $player = (new \App\Models\Player)->find($id);
        if (!$player) {
            header('Location: /players');
            exit();
        }
        require '../resources/views/players/edit.blade.php';
    }

    public function update($id) {
        // Actualizar información del jugador
        $player = (new \App\Models\Player)->find($id);
        if (!$player) {
            header('Location: /players');
            exit();
        }
        $player->name = $_POST['name'];
        $player->team = $_POST['team'];
        $player->position = $_POST['position'];
        $player->birthYear = $_POST['birthYear'];
        $player->save();
        header('Location: /players');
    }

    public function delete($id) {
        // Mostrar confirmación de eliminación
        if ($id === null) {
            header('Location: /players');
            exit();
        }
        $player = (new \App\Models\Player)->find($id);
        return require '../resources/views/players/delete.blade.php';
    }

    public function destroy($id) {
        // Eliminar jugador
        (new \App\Models\Player)->delete($id);
        header('Location: /players');
    }

    public function confirmDelete($id) {
        // Confirmar eliminación del jugador
        $player = (new \App\Models\Player)->find($id);
        return require '../resources/views/players/delete.blade.php';
    }
    public function show($id) {
        // Mostrar detalles del jugador
        $player = (new \App\Models\Player)->find($id);
        if (!$player) {
            header('Location: /players');
            exit();
        }
        require '../resources/views/players/show.blade.php';
    }
}
