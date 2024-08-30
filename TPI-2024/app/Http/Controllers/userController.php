<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class userController extends Controller
{
    

    public function createAdmin() {
        // Crear un usuario con un estado específico 'is_admin'
        //$admin = 
        User::factory()->state(['is_admin' => true, 'lastName' => 'Admin',] )->create();
        echo 'usuario admin creado';
    }
}
