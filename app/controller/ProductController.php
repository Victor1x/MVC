<?php

namespace app\controller;

use app\interfaces\ControllerInterface;
use app\library\Email;

class ProductController implements ControllerInterface
{

    public function index(): void
    {
        dd('index ProductController');
    }
    public function index2(string $test ,string $test2): void
    {
        dd($test , $test2);
    }

    public function create(): void
    {
        // TODO: Implement create() method.
    }

    public function store($id): void
    {
        // TODO: Implement store() method.
    }

    public function show($id): void
    {
        // TODO: Implement show() method.
    }

    public function edit($id): void
    {
        // TODO: Implement edit() method.
    }

    public function update($id, array $data): void
    {
        // TODO: Implement update() method.
    }

    public function destroy($id): void
    {
        // TODO: Implement destroy() method.
    }
}