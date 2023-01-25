<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Character;

use Exception;




class characterController extends Controller
{
    public function allCharacters(Request $request)
    {

        $characters = Character::all();

        return response()->json($characters);

    }

    public function save(Request $request)
    {

        $character = new Character;
        $character->name = $request->name;
        $character->status = $request->status;
        $character->species = $request->species;
        $character->type = $request->type;
        $character->gender = $request->gender;
        $character->origin = $request->origin;
        $character->location = $request->location;
        $character->image = $request->image;
        $character->episode = $request->episode;
        $character->url = $request->url;
        $character->created = $request->created;

        $character->save();

        $data = [
            'message' => 'Character created successfully',
            'character' => $character
        ];

        return response()->json($data);
    }

    public function getById(Character $character)
    {

        return response()->json($character);

    }

    public function update(Request $request, Character $character)
    {




        $character->name = $request->name;
        $character->species = $request->species;
        $character->type = $request->type;
        $character->gender = $request->gender;
        $character->origin = $request->origin;
        $character->location = $request->location;
        $character->image = $request->image;
        $character->episode = $request->episode;
        $character->url = $request->url;
        $character->created = $request->created;
        $character->status = $request->status;
        $character->save();

        $data = [
            'message' => 'Character updated successfully',
            'character' => $character
        ];

        return response()->json($data);



    }

    public function destroy(Character $character)
    {


        $character->delete();
        $data = [
            'message' => 'Character deleted successfully',
            'character' => $character
        ];
        echo 'Message:';





        return response()->json($data);



    }


}
