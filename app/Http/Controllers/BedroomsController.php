<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Bedroom;
use App\Hotel;

class BedroomsController extends Controller
{

    public function edit(Bedroom $bedroom){

      return view('bedrooms.edit', compact('bedroom'));
    }

    public function update(Request $request, Bedroom $bedroom){

      $bedroom->update( $request->all() );

      return redirect('hotels/'. $bedroom->hotel_id);
    }

    public function delete(Bedroom $bedroom)
    {
      $hotel_id = $bedroom->hotel_id;

      $bedroom->delete();

      return redirect('hotels/' . $hotel_id);
    }

    public function store(Request $request, Hotel $hotel)
    {

      // $this->validate ( $request, [
      //   'name' => 'required | min:10',
      //   'status' => 'required',
      //   'beds' => 'required | numeric'
      // ], [
      //   'min' => 'El campo :attribute debe tener al menos 20 caracteres.',
      //   'required' => 'El campo :attribute no puede ser vacío.',
      //   'numeric' => 'El campo :attribute debe ser númerico.'
      // ]);

      $bedroom = new Bedroom();

      $bedroom->hotel_id = $hotel->id;
      $bedroom->name = $request->name;
      $bedroom->status = $request->status;
      $bedroom->beds = $request->beds;

      $bedroom->save();
      
      return redirect('hotels/' . $hotel->id);
    }

}
