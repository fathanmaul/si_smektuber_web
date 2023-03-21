<?php
namespace Modules\Actions;

class User {
    public function get($id) {
        return "User {$id}";
    }

    public function store($data) {
        return "User {$data['name']} stored";
    }

    public function delete($id)
    {
        return "User {$id} deleted";
    }

    public function edit($id, $data)
    {
        return "User {$id} edited";
    }
}