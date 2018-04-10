<?php
// src/Controller/ArticlesController.php

namespace App\Controller;

class ArticlesController extends AppController
{
	public function index()
    {
        $this->set(compact('articles'));
    }
}