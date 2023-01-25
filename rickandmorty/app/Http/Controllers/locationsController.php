<?php

namespace App\Http\Controllers;


use App\Models\Locations;

use Illuminate\Http\Request;

class locationsController extends Controller
{
    public function allLocations(Request $request){

        $locations = Locations::all();

        return response()->json($locations);

       }

       public function save(Request $request){

        $locations=new Locations;
        $locations->name= $request->name;
        $locations->type= $request->type;
        $locations->dimension= $request->dimension;
        $locations->residents= $request->residents;
        $locations->url= $request->url;
        $locations->created= $request->created;


        $locations->save();

        $data=[
            'message' =>'locations created successfully',
            'locations' => $locations
        ];

        return response()->json($data);
       }

       public function getById(Locations $locations){

            return response()->json($locations);

       }

       public function update(Request $request,Locations $locations){

        $locations->name= $request->name;
        $locations->type= $request->type;
        $locations->dimension= $request->dimension;
        $locations->residents= $request->residents;
        $locations->url= $request->url;
        $locations->created= $request->created;
            $locations->save();

        $data=[
            'message' =>'locations updated successfully',
            'locations' => $locations
        ];

        return response()->json($data);



       }

       public function destroy(Locations $locations){


            $locations->delete();
            $data=[
            'message' =>'locations deleted successfully',
            'locations' => $locations
            ];
            return response()->json($data);
       }
}
