<?php

namespace app\controller;

use app\interfaces\ControllerInterface;

class HomerController implements ControllerInterface
{


    public function index()
    {
         echo "aqui no index";
    }

    public function show(int $id): void
    {
        // TODO: Implement show() method.
    }

    public function create(): void
    {
        // TODO: Implement create() method.
    }

    public function store(array $data): void
    {
        // TODO: Implement store() method.
    }

    public function edit(int $id): void
    {
        // TODO: Implement edit() method.
    }

    public function update(int $id, array $data): void
    {
        // TODO: Implement update() method.
    }

    public function destroy(int $id): void
    {
        // TODO: Implement destroy() method.
    }
}