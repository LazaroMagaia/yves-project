<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function __construct()
    {
        // Middleware de role
        $this->middleware('role:admin')->only('adminDashboard');

        // Middleware de permissão
        $this->middleware('permission:edit articles')->only('editArticle');
    }

    public function adminDashboard()
    {
        // Método acessível somente para admins
        echo("Método acessível somente para admins");
    }

    public function editArticle()
    {
        // Método acessível somente para usuários com a permissão "edit articles"
        echo("Método acessível somente para usuários com a permissão");
    }
}
