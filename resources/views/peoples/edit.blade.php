@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit <a href="/dashboard" class="btn btn-default float-right">Back</a></div>

                <div class="card-body">
                <form action="/peoples/{{$person->id}}" method="POST" enctype="multipart/form-data">
                      @csrf
                      @method('put')
                        <div class="form-group">
                          <label for="mcode">M-Code</label>
                        <input type="text" name="mcode" id="" class="form-control" placeholder="Ajax Jackson" aria-describedby="helpId" value="{{$person->mcode}}">
                        </div>
                        <div class="form-group">
                          <label for="bname">Business Name</label>
                          <input type="text" name="bname" id="" class="form-control" placeholder="address@mail.com" aria-describedby="helpId" value="{{$person->bname}}">
                        </div>
                        <div class="form-group">
                          <label for="faddress">Farm Address</label>
                          <input type="text" name="faddress" id="" class="form-control" placeholder="ajaxjackson.com" aria-describedby="helpId" value="{{$person->faddress}}">
                        </div>
                        <div class="form-group">
                          <label for="vname">Voter Name</label>
                          <input type="text" name="vname" id="" class="form-control" placeholder="000-000-000-000" aria-describedby="helpId" value="{{$person->vname}}">
                        </div>
                        <div class="form-group">
                          <label for="phone">Phone Number</label>
                          <input type="text" name="phone" id="" class="form-control" placeholder="65B, Wales steet Road 2" aria-describedby="helpId" value="{{$person->phone}}">
                        </div>
                        <div class="form-group">
                          <label for="tin">Tin</label>
                          <input type="text" name="tin" id="" class="form-control" placeholder="65B, Wales steet Road 2" aria-describedby="helpId" value="{{$person->tin}}">
                        </div>
                        

                        <input type="submit" class="btn btn-primary" value="submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
