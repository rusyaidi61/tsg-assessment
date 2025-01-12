<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class CarController extends Controller
{
    public function index()
    {
        // Execute SQL query to fetch data
        $cars = DB::select("
            SELECT 
                cars.id, 
                cars.name AS 'Model name', 
                cars.date_created AS 'Date created', 
                manufactures.name AS 'Manufacture' 
            FROM cars
            INNER JOIN manufactures ON cars.manufacture_id = manufactures.id
        ");

        // Pass the data to a view
        return view('cars.index', compact('cars'));
    }
}
