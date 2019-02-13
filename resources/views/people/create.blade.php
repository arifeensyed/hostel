@extends('layouts.main')

@section('main-content')
    <div class="container" style="background-color: whitesmoke;margin-top: 80px;">

        <form action={{route( 'people.store')}} method="POST">
            @csrf

            <div class="form-group row">
                <label for="name" class="col"> Name </label>
                <input type="text" id="name" class="form-control" name="name"
                       placeholder="Name"/>

            </div>
            <div class="form-group row">
                <label for="cnic" class="col"> CNIC </label>
                <input type="text" id="cnic" class="form-control" name="cnic"
                       placeholder="CNIC"/>

            </div>
            <div class="form-group row">
                <label for="contact" class="col"> Contact </label>
                <input type="text" id="cnic" class="form-control" name="contact"
                       placeholder="Contact"/>

            </div>
            <div class="form-group row">
                <label for="institute" class="col"> Institute </label>
                <input type="text" id="cnic" class="form-control" name="institute"
                       placeholder="Institute"/>

            </div>

            <input type="hidden" id="roomid" class="form-control" name="room_id"
                       value="{{$id}}"/>





            <div class="form-group row">
                <div class="offset-sm-2 col-sm-10">
                    <button type="submit" class="btn btn-primary">Allot Room</button>
                </div>
            </div>
        </form>
    </div>
@endsection