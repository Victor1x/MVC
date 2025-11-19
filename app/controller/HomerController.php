<?php

namespace app\controller;

use app\interfaces\ControllerInterface;
use core\library\Templates;

class HomerController implements ControllerInterface
{
    public function index(): void
    {
//        dd(VIEW_PATH);
        Templates::render("home");
    }

    public function show($id): void
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