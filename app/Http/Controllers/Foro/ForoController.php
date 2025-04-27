<?php

namespace App\Http\Controllers\Foro;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Foro;
use App\Models\User;

class ForoController extends Controller
{
    public function show()
    {
        // Obtener los posts con la relación 'user' cargada
        $posts = Foro::with('user:id,username,profile_photo')->paginate(10);
    
        // Retornar los datos directamente sin transformarlos
        return view('foro.index', compact('posts'));
    }
}
