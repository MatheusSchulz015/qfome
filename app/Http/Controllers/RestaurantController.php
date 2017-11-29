<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Restaurante;
class RestaurantController extends Controller
{
    //
    public function getRestaurants(Restaurante $restaurant)
    {
      $rest = $restaurant->all();
      return response()->json($rest);
    }
}
