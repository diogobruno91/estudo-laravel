<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Restaurant;
use App\Http\Requests\RestaurantRequest;

class RestaurantController extends Controller
{
    public function index() 
    {        
         $restaurants = Restaurant::all();
         return view('admin.restaurants.index', compact('restaurants'));
    }

    public function new() 
    {
        return view('admin.restaurants.store');
    }

    public function store(RestaurantRequest $request)
    {
        $restaurantData = $request->all();

        $request->validator();

        $restaurant = new Restaurant();
        $restaurant->create($restaurantData);

        print 'Restaurante criado com sucesso';
    }

    public function edit(Restaurant $restaurant) 
    {
        //dd($restaurant);
        return view('admin.restaurants.edit', compact('restaurant'));
    }

    public function update(RestaurantRequest $request, $id)
    {
        $restaurantData = $request->all();

        $request->validator();

        $restaurant = Restaurant::findOrFail($id);
        $restaurant->update($restaurantData);

        print 'Restaurante Editado com sucesso';
    }

    public function delete($id)
    {
        $restaurant = Restaurant::findOrFail($id);
        $restaurant->delete();

        print 'Restaurante Removido com sucesso';
    }
}
