<?php

namespace app\controller;

use app\interfaces\ControllerInterface;

class LoginController implements  ControllerInterface
{


    public function index(): void
    {
        dd("chegou aqui no login");     }

    public function show(int $id): void
    {

    }

    public function create(): void
    {
        // TODO: Implement create() method.
    }

    public function store(array $data): void
    {
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