@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard <span class="float-right"><a href="listings/create" class="btn btn-primary">Create Listing</a></span></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h3>Voter Listing</h3>
                    @if(count($peoples))
                        <table class="table table-stripped table-hover">
                            <thead>
                                <tr class="bg-success">
                                    <th clas="col">Voter #</th>
                                    <th clas="col">M-Code</th>
                                    <th clas="col">Business Name</th>
                                    <th clas="col">Farm Address</th>
                                    <th clas="col">Voter Name</th>
                                    <th clas="col">Phone</th>
                                    <th clas="col">Tin</th>
                                    <th clas="col">Image</th>
                                    <th clas="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($peoples as $people)
                                    <tr>
                                    <td scope="row">{{$people->id}}</td>
                                        <td>{{$people->mcode}}</td>
                                        <td>{{$people->bname}}</td>
                                        <td>{{$people->faddress}}</td>
                                        <td>{{$people->vname}}</td>
                                        <td>{{$people->phone}}</td>
                                        <td>{{$people->tin}}</td>
                                        <td>{{$people->Image}}</td>
                                        <td class="float-right"><a class="btn btn-primary" href="peoples/{{$people->id}}/edit">Edit</a>
                                                <form action="/peoples/{{$people->id}}" method="post" class="float-right form-inline">
                                                    @csrf 
                                                    @method('delete')
    
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>                                     
                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection