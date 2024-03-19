<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReaderController extends Controller
{
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            if (Auth::user() && Auth::user()->is_admin) {
                return redirect()->route('home'); // Jika admin, arahkan ke home
            }
            return $next($request);
        });
    }

    public function index()
    {
        $posts = Post::paginate(10); // Mengambil 10 postingan per halaman
        return view('reader.index', [
            'title' => 'Judul Halaman Reader',
            'posts' => $posts,
        ]);
    }
}
