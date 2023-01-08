<?php

namespace App\Http\Controllers;

use App\Models\food;
use App\Models\reservation;
use App\Models\reservation_users;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;

class foodController extends Controller
{
    public function food(){
        return view('menu',[
            'food' => food::latest()->filter(request(['tag', 'search']))->paginate(10)
        ]);
    }

    public function meal($id){
        $food=food::find($id);

        if($food){
            return view('meal', [
                'meal' => $food
            ]);
        }else{
            abort('404');
        }
    }

    public function create(){
        return view('admin.create');
    }

    public function store(Request $request){
      $formfields=$request->validate([
        'name'=>['required', Rule::unique('food', 'name')],
        'description'=>'required',
        'price'=>'required',
        'tags'=>'required'
      ]);

      food::create($formfields);

      return redirect('/admin/index')->with('message', 'menu created successfully');
    }

    public function admin(){
        return view('admin.index',[
            'food' => food::latest()->filter(request(['tag', 'search']))->paginate(10)
        ]);
    }

    public function showEdit(food $food){
        // dd($food);
        return view('admin.edit', ['food'=>$food]);
    }

    public function storeEdit(Request $request, food $food){
        $formfields=$request->validate([
          'name'=>['required'],
          'description'=>'required',
          'price'=>'required',
          'tags'=>'required'
        ]);

        $food->update($formfields);

        return redirect('/admin/index')->with('message', 'menu updated successfully');
    }

    public function delete(food $food){
        $food->delete();
        return redirect('/admin/index')->with('message', 'menu deleted successfully');
    }

    // show details in reservation
    public function reservation(){
        return view('reservation', [
            'reservations' =>reservation::where('reserve', 'available')->get()
        ]);
    }

    // store reservation
    public function storeReservation(Request $request, reservation $reserve){
        // dd($request);
        $formfields=$request->validate([
            'name'=>'required',
            'email'=>['required', Rule::unique('reservation_users', 'email')],
            'type' =>'required',
            'table'=>'required',
            'people'=>'required',
            'date'=>'required'
        ]);
        // dd($request->table);

        reservation_users::create($formfields);

        // Find the record to update
        $reservation = reservation::where('name', '=', $request->table)->first();

        // Update the record
        $reservation->update(['reserve' => 'booked']);

        return redirect('/reservation')->with('message', 'You are booked successfully');
    }


    // admin reservation
    public function adminReservation(){
        return view('admin.reservation', [
            'reservation'=>reservation_users::all()
        ]);
    }
}
