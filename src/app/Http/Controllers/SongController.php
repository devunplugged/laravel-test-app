<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;
use App\Models\Song;

class SongController extends Controller
{
    /**
     * List songs
     */
    public function browse(Request $request): Response
    {
        $songs = Song::query()->with(['artists'/*, 'formats'*/])->orderBy('title')->get();

        return Inertia::render('Songs/Browse', [
            'songs' => $songs,
        ]);
    }

}
