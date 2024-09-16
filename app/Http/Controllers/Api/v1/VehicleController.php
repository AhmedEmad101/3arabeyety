<?php

namespace App\Http\Controllers\Api\v1;
use App\Models\Vehicle;
use App\Http\Controllers\Controller;
use App\Http\Requests\VehicleRequest;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    public function index()
    {
       return Vehicle::all();
    }
    public function AddVehicle(VehicleRequest $request)
    {
        $Vehicle = Vehicle::create($request->all());
        return response()->json($Vehicle);;
    }
    public function update(Request $request, $id)
    {
        $Vehicle = $request->find($id);
    }
    public function destroy($id)
    {
      Vehicle::destroy($id);
      return response()->json(['message' => 'Record'.$id . ' deleted successfully ']);

    }
    public function GetCarModel($id)
    {
        $Vehicle = Vehicle::where('id',$id)->first();
        return $Vehicle->CarModel->Name??'NoCarModel';
    }
}
