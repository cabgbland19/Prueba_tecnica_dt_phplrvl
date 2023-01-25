<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Episodes;


class episodesController extends Controller
{
    public function allEpisodes(Request $request){

        $episodes = Episodes::all();

        return response()->json($episodes);

       }

       public function save(Request $request){

        $episodes=new Episodes;
        $episodes->name= $request->name;
        $episodes->air_date= $request->air_date;
        $episodes->episode= $request->episode;
        $episodes->characters= $request->characters;
        $episodes->url= $request->url;
        $episodes->created= $request->created;


        $episodes->save();

        $data=[
            'message' =>'episodes created successfully',
            'episodes' => $episodes
        ];

        return response()->json($data);
       }

       public function getById(Episodes $episodes){

            return response()->json($episodes);

       }

       public function update(Request $request,Episodes $episodes){

        $episodes->name= $request->name;
        $episodes->air_date= $request->air_date;
        $episodes->episode= $request->episode;
        $episodes->characters= $request->characters;
        $episodes->url= $request->url;
        $episodes->created= $request->created;
            $episodes->save();

        $data=[
            'message' =>'episodes updated successfully',
            'episodes' => $episodes
        ];

        return response()->json($data);



       }

       public function destroy(Episodes $episodes){


            $episodes->delete();
            $data=[
            'message' =>'episodes deleted successfully',
            'episodes' => $episodes
            ];
            return response()->json($data);
       }
}
