<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Http;
use App\Http\Requests\VehicleRequest;
use App\Models\Vehicle;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;
use app\Helpers\DatabaseHelper;

class VehicleController extends Controller
{   protected $helper;
    public function __construct(DatabaseHelper $helper)
    {
        $this->helper = $helper;
    }
    public function index()
    {
        $response = Http::get(url('/api/all')); // Assuming you're using your own API endpoint

        $users = $response->json(); // Get the JSON response

        // Pass the data to the Blade view
        return view('Home', compact('users'));
    }

    public function search(Request $request,$Model_ID,$Tank_ID,$Owner_ID,$Transimision_ID,$Type_ID,$Motor_ID,$Color_ID,$Condition_ID)
    {

        $vehicle = Vehicle::where('id', '1')
        ->when($request->PropertyType, function($query) {
            $query->where('Model_ID', request()->Model_ID);
        })
        ->when($request->Tank_ID, function($query) {
            $query->where('Tank_ID',request()->Tank_ID);
        })
        ->when($request->Owner_ID, function($query) {
            $query->where('Owner_ID', request()->Owner_ID);
        })
        ->when($request->Transimision_ID, function($query) {
            $query->Where('Transimision_ID',request()->Transimision_ID);
        })->
        when($request->Type_ID, function($query) {
            $query->Where('Type_ID',request()->Type_ID);
        })->when($request->Motor_ID, function($query) {
            $Motor_ID = request()->Motor_ID;
            $query->Where('Motor_ID',request()->Motor_ID);

        })
        //sa7e7a->orderBy('created_at','desc')
        ->paginate(5);
    }
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(VehicleRequest $request)
    {
        $vehicle = Vehicle::create($request->validated());
        return redirect('home');
    }

    /**
     * Display the specified resource.
     */
    public function show(Vehicle $vehicle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vehicle $vehicle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Vehicle $vehicle)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vehicle $vehicle)
    {
        //
    }
    public function searchprice(Request $request)
    {
        $minprice = (int)$request->minprice;
        $maxprice = (int)$request->maxprice;
        $response = Http::post(url('api/search/'.$minprice.'/'.$maxprice)); // Assuming you're using your own API endpoint

        $result = collect($response->json());
        return view('Results.Result',['result'=>$result->all()]);

    }
    public function AddVehicleByForm(Request $request)
    {   $Vehicle  = new Vehicle;
        $Vehicle->Model_ID = $request->Model_ID;
        $Vehicle->Tank_ID = $request->Tank_ID;
        $Vehicle->Owner_ID = $request->ownerID;
        $Vehicle->Transimision_ID = $request->Transimision_ID;
        $Vehicle->Type_ID = $request->Type_ID;
        $Vehicle->Motor_ID = $request->Motor;
        $Vehicle->Color_ID = $request->Color_ID;
        $Vehicle->Condition_ID = $request->Condition_ID;
        $Vehicle->Price = $request->Price;
       // $Vehicle->Photo = $request->photo;

       if($request->hasfile('photo'))
       {

               $file = $request->file('photo');
               $extension = $file->getClientOriginalExtension();
               $fileName = time().'.'.$extension;
               $file->move('VehicleImages/',$fileName);
               $Vehicle->Photo = $fileName;

       }
        $Vehicle->save();
        return redirect('cars');

    }
    public function PassVehicleToView($id)
    {
       $Details = Vehicle::where('id',$id)->first();
       return view('vehicledetails')->with(['Details'=> $Details]);
    }
    public function MultipleSearch(Request $request)
{

    $Vehicles = Vehicle::where('Type_ID', $request->Type_ID)
    ->when($request->Model_ID, function($query) {
        $query->where('Model_ID', request()->Model_ID);
    })
    ->when($request->Tank_ID, function($query) {
        $query->where('Tank_ID',request()->Tank_ID);
    })
    ->when($request->ownerID, function($query) {
        $query->where('Owner_ID',request()->ownerID );
    })
    ->when($request->Transimision_ID, function($query) {
        $query->Where('Transimision_ID',request()->Transimision_ID);
    })->
    when($request->Motor, function($query) {
        $query->Where('Motor_ID','<=',request()->Motor);
    })->when($request->Color_ID, function($query) {
        $query->Where('Color_ID',request()->Color_ID);
    })->when($request->Condition_ID, function($query) {
        $query->Where('Condition_ID',request()->Condition_ID);
    })
    ->paginate(5);

   return view('PartialViews.CarsList',['Vehicles'=>$Vehicles,'ItemsNumber'=>$Vehicles->count()]);

}
}
