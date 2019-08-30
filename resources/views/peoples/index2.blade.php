@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card hidden-xs-up">
                <div class="card-header">Dashboard <span class="float-right"><a href="listings/create" class="btn btn-primary">Create Listing</a></span></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h3>Voter Listing</h3>
                    @if(count($peoples))
                        <div class="row tab-row bg-dark text-white">
                            <div class="col-1 p-3 text-center">Voter #</div>
                            <div class="col-1 p-3 text-center">M-Code</div>
                            <div class="col-2 p-3 text-center">Business Name</div>
                            <div class="col-2 p-3 text-center">Farm Address</div>
                            <div class="col-2 p-3 text-center">Voter Name</div>
                            <div class="col-1 p-3 text-center">Phone</div>
                            <div class="col-1 p-3 text-center">Tin</div>
                            <div class="col-1 p-3 text-center">Image</div>
                            <div class="col-1 p-3 text-center">Action</div>
                        </div>

                        @foreach ($peoples as $people)
                            <div class="row tab-row">
                                <div class="col-1 text-center">{{$people->id}}</div>
                                <div class="col-1 text-center">{{$people->mcode}}</div>
                                <div class="col-2 text-center">{{$people->bname}}</div>
                                <div class="col-2 text-center">{{$people->faddress}}</div>
                                <div class="col-2 text-center">{{$people->vname}}</div>
                                <div class="col-1 text-center">{{$people->phone}}</div>
                                <div class="col-1 text-center">{{$people->tin}}</div>
                                <div class="col-1 text-center">{{$people->Image}}</div>
                                <div class="col-1 text-center">
                                    <div class=""><a class="btn btn-primary p-2" href="peoples/{{$people->id}}/edit">Edit</a>
                                            <form action="/peoples/{{$people->id}}" method="post" class="float-right">
                                                @csrf 
                                                @method('delete')

                                                <button type="submit" class="btn btn-danger float-right p-2">Delete</button>
                                            </form>                                     
                                    </div>
                                </div>
                            </div>
                            
                        @endforeach
                    @endif
                    <nav aria-label="Page navigation example">
                            <ul class="pagination">
                              <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                  <span aria-hidden="true">&laquo;</span>
                                  <span class="sr-only">Previous</span>
                                </a>
                              </li>
                              {{$peoples->links()}}
                                <a class="page-link" href="#" aria-label="Next">
                                  <span aria-hidden="true">&raquo;</span>
                                  <span class="sr-only">Next</span>
                                </a>
                              </li>
                            </ul>
                          </nav>
                </div>
            </div>
        </div>
    </div>
@endsection