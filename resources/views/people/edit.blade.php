@extends('layouts.main')

@section('main-content')
    <div class="container" style="background-color: whitesmoke;margin-top: 80px;">

        <form action={{route( 'people.update',['id'=>$person->id])}} method="POST">
            @csrf

            <div class="form-group row">
                <label for="name" class="col"> Name </label>
                <input type="text" id="name" class="form-control" name="name"
                       value={{$person->name}}/>
                @foreach($errors->get('name') as $message)
                    <p style="color: red">{{ $message }}</p>
                @endforeach

            </div>
            <div class="form-group row">
                <label for="cnic" class="col"> CNIC </label>
                <input type="text" id="cnic" class="form-control" name="cnic"
                       value={{$person->cnic}}/>
                @foreach($errors->get('cnic') as $message)
                    <p style="color: red">{{ $message }}</p>
                @endforeach

            </div>
            <div class="form-group row">
                <label for="contact" class="col"> Contact </label>
                <input type="text" id="cnic" class="form-control" name="contact"
                       value={{$person->contact}}/>
                @foreach($errors->get('contact') as $message)
                    <p style="color: red">{{ $message }}</p>
                @endforeach
            </div>
            <div class="form-group row">
                <label for="institute" class="col"> Institute </label>
                <input type="text" id="institute" class="form-control" name="institute"
                       value={{$person->institute}}/>
                @foreach($errors->get('institute') as $message)
                    <p style="color: red">{{ $message }}</p>
                @endforeach

            </div>
            <div class="form-group row">
                <div class="offset-sm-2 col-sm-10">
                    <button type="submit" class="btn btn-primary">Allot Room</button>
                </div>
            </div>
        </form>
    </div>
@endsection