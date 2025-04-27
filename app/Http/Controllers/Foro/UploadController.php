<?php

namespace App\Http\Controllers\Foro;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Foro;


class UploadController extends Controller
{
    public function show() {
        return view('foro.upload');
    }

    public function uploadPost(Request $request) {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        $hoy = Carbon::now();

        Foro::create([
            'user_id' => auth()->id(),
            'nombre_post' => $request->input('title'),
            'contenido_post' => $request->input('content'),
            'created_at' => $hoy,
            'updated_at' => $hoy,
        ]);
        
        return redirect()->route('profile.me')->with('success', 'Post uploaded successfully!');
    }
}
