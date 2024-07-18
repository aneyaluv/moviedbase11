<?php

namespace App\Http\Controllers;

use App\Models\Actor;

class ActorController extends Controller
{
    public function getActorById($id)
    {
        $actor = Actor::with('movies')->find($id);

        if (!$actor) {
            return response()->json(['error' => 'Actor not found'], 404);
        }

        return response()->json($actor);
    }
}
