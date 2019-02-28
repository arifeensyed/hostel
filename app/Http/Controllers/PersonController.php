<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePersonRequest;
use App\Person;
use App\Room;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $person = Person::orderby('id')->paginate(10);
        return view('people.index')->with('people', $person);
    }

    public function allotRoom($id){
        return view('people.create')->with('id', $id);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePersonRequest $request)
    {
        $person = Person::create($request->all());
        $room=Room::where('id', $request->input('room_id'))->first();
        $count=$room->available_capacity;
        $count=$count-1;
        $room->available_capacity=$count;
        $room->save();
        if(!$person->exists)
            return redirect(route('people.index') )->with('status','room not alloted');
        else
//        session()->put('key', '<b>sd</b>');

//    $value = $request->session()->get('key', 'default');
            return redirect(route('available'))->with('status', 'Room alloted Successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function show(Person $person)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function edit(Person $person)
    {
        return view('people.edit')->with('person', $person);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function update(StorePersonRequest $request, Person $person)
    {
        $person->update($request->all());
        return redirect(route('people.index'))->with('status', 'updated successfully')->withInput($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function destroy(Person $person)
    {
        $room=Room::where('id', $person->room_id)->first();
        $count=$room->available_capacity;
        $count=$count+1;
        $room->available_capacity=$count;
        $room->save();
        Person::destroy($person->id);
        return redirect()->route('people.index')->with('status', 'successfully deleted');

    }
}
