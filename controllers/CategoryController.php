<?php

class CategoryController extends BaseController
{
    public function index()
    {
        return $this->view('fontend.categories.index');
    }

    public function store()
    {
        echo __METHOD__;
    }
}
