<?php

namespace Modules\Base\Interface;

interface BaseInterface
{
    public function index();
    public function store(array $data);

    public function find($id);
    public function destroy($id);




}
