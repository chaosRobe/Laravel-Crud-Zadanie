<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;
class PersonController extends Controller
{
    public function index(){
        return view('person.index');
    }
    public function showData(){
        $people = Person::all();
        return view('person.allData',['people'=>$people]);
    }

    public function showData_specific(Person $person_id){
        $people = $person_id;
        return view('person.allData',['people'=>$people]);
    }

    public function edit(Person $person_id){
        return view('person.edit',['person_id'=>$person_id]);
    }

    public function update( Request $request, Person $person_id){
        $data = $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'phone' => 'required|numeric',
            'address' => 'required',
            'country' => 'required'
           ]);
           
           $person_id->update($data);
           return redirect(route('person.index'));
    }

    public function create(){
        return view('person.create');
    }
    public function store(Request $request){
       $data = $request->validate([
        'name' => 'required',
        'surname' => 'required',
        'phone' => 'required|numeric',
        'address' => 'required',
        'country' => 'required'
       ]);
       $newPerson = Person::create($data);
       return redirect(route('person.index'));
    }
    public function delete(Person $person_id){
        return view('person.delete',['person_id'=>$person_id]);
    }
    public function delete_conf(Person $person_id){
        $person_id->delete();
        return view('person.index');
    }







    public function creating(Request $request){
        $data=new Person();
        $data->name = $request->name;
        $data->surname = $request->surname;
        $data->phone = $request->phone;
        $data->address = $request->address;
        $data->country = $request->country;
        $data->save() ;
        return response()->json($data);
    }

    public function editing(Request $request, Person $person_id){
        $data=$person_id;
        $data->name = $request->name;
        $data->surname = $request->surname;
        $data->phone = $request->phone;
        $data->address = $request->address;
        $data->country = $request->country;
        $data->update() ;
        return response()->json($data);
    }

    public function deleting( Request $request,Person $person_id){
      
        $data = Person::findorfail($person_id->id)->delete() ;
        return response()->json($data);
    }
    public function getting(){
      
        $data = Person::all();
        return response()->json($data);
    }
    public function getting_one(Person $person_id){
      
        $data = $person_id;
        return response()->json($data);
    }
}
