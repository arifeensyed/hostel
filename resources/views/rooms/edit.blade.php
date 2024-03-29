@extends('layouts.main')

<div class="container" style="background-color: whitesmoke;margin-top: 80px;">

    <form action={{route( 'rooms.update',['id'=>$room->id])}} method="POST">
        @csrf @method('PUT')
        <div class="form-group row">
            <label for="roomname" class="col"> Room Name </label>
            <input type="text" id="roomname" class="form-control" name="name" placeholder="Room Name"

                   value={{$room->name}}
            />
            @foreach($errors->get('name') as $message)
                <p style="color: red">{{ $message }}</p>
            @endforeach

        </div>
        <div class="form-group row">
            <label for="roomdesc" class="col"> Room Description </label>
            <input type="text" id="roomdesc" class="form-control" name="description" placeholder="Room Description"

                   value={{$room->description}}
            />
            @foreach($errors->get('description') as $message)
                <p style="color: red">{{ $message }}</p>
            @endforeach

        </div>
        <div class="form-group row">
            <label for="roomcap" class="col"> Capacity </label>
            <select class="form-control" id="roomcap" name="capacity">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="4">4</option>
            </select>

        </div>
        <div class="radio form-group row">
            <label><input type="radio" name="hasAc" value="0" checked>Without Ac</label>
        </div>
        <div class="radio form-group row">
            <label><input type="radio" name="hasAc" value="1">With AC</label>
        </div>


        <div class="form-group row">
            <div class="offset-sm-2 col-sm-10">
                <button type="submit" class="btn btn-primary">Update Room</button>
            </div>
        </div>
    </form>
</div>