<?php

namespace App\Http\Controllers;

use App\Models\Location as ModelsLocation;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Location extends Controller
{
    public function index()
    {
    }

    public function store(Request $request)
    {
        $long = $request->longitude;
        $lat = $request->latitude;

        $validator = Validator::make($request->all(), [
            'longitude' => 'required',
            'latitude' => 'required',
        ]);

        if ($validator->fails()) {

            return response()->json($validator->errors(), 404);

        } else {

            $save = ModelsLocation::create([
                'longitude' => $long,
                'latitude' => $lat 
            ]);

            if ($save) {
                return response()->json('success', 200);
            } else {
                return response()->json("sorry, can't save location", 404);
            }
        }
    }

    public function view()
    {

        $data = ModelsLocation::get();


        if ($data) {
            return response()->json($data, 200);
        } else {
            return response()->json("sorry, can't get data location", 404);
        }
    }
}
