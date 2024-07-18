<?php

namespace App\Http\Controllers;

use App\Models\Director;

class DirectorController extends Controller
{
    public function getDirectorById($id)
    {
        $director = Director::with('movies')->find($id);

        if (!$director) {
            return response()->json(['error' => 'Director not found'], 404);
        }

        return response()->json($director);
    }
}
