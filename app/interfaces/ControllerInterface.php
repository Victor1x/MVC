<?php

namespace app\interfaces;

interface ControllerInterface
{
    public function index();

    public function show(int $id);

    public function create();

    public function store(array $data);

    public function edit(int $id);

    public function update(int $id, array $data);

    public function destroy(int $id);
}
