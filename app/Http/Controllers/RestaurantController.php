<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Restaurante;
use App\Menu;
class RestaurantController extends Controller
{
    //
    public function getRestaurants(Restaurante $restaurant)
    {
      $rest = $restaurant->all();
      return response()->json($rest);
    }

    public function getMenu(Request $request,Menu $menu)
    {
      $restaurantMenu = $menu->findOrFail($request->id);
      return response()->json($restaurantMenu);
    }
}
