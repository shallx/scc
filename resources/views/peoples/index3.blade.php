@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Voter List <span class="float-right"><a href="listings/create" class="btn btn-primary">Create Listing</a></span></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row">
                    @if(count($peoples))
                        @foreach ($peoples as $people)
                            <div class="col-lg-6 col-xs-12">
                                <div class="mycard m-3 border">
                                    <div class="row">
                                        <div class="col-5"> 
                                            <div class="row">
                                                <div class="col-12">
                                                    <h5 class="text-center c-font-name p-1"><b>M-Code: {{$people->mcode}}</b></h5>
                                                </div>
                                                
                                                <div class="col-12">
                                                <img src="{{$people->image_path}}" class="img img-thumbnail rounded mx-auto">
                                                </div>
                                                <div class="col-12">
                                                    <div class=" text-center c-font-name p-1"><b>{{$people->vname}}</b></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-7">
                                            <div class="col-4 offset-8 mt-3">{{$people->id}}</div>
                                            <div class="row mt-4">

                                                <div class="col-12 c-font-title">
                                                    <div><i class="fa fa-briefcase mr-2 rounded-circle" aria-hidden="true" style="color:sienna;"></i></span>{{$people->bname}}</div>
                                                    <div><i class="fa fa-map-marker-alt mr-2 rounded-circle" aria-hidden="true" style="color:crimson"></i>{{$people->faddress}}</div>
                                                    <div><i class="fa fa-phone mr-2 rounded-circle" aria-hidden="true" style="color:darkturquoise"></i>{{$people->phone}}</div>
                                                    <div><i class="fa fa-address-card mr-2 rounded-circle" aria-hidden="true" style="color:seagreen;"></i>{{$people->tin}}</div>
                                                    
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>

                            </div>
                            
                        @endforeach
                    </div>
                    @endif
                </div>
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
@endsection