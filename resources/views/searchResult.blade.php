@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
            <div class="card-header">Search Results ( {{$results->total()}} )</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row">
                    @if(count($results))
                        @foreach ($results as $result)
                            <div class="col-lg-6 col-xs-12">
                                <div class="mycard m-3 border">
                                    <div class="row">
                                        <div class="col-5"> 
                                            <div class="row">
                                                <div class="col-12">
                                                    <h5 class="text-center c-font-name p-1"><b>M-Code: {{$result->mcode}}</b></h5>
                                                </div>
                                                
                                                <div class="col-12">
                                                    <img src="{{$result->image_path}}" class="img img-thumbnail rounded mx-auto">
                                                </div>
                                                <div class="col-12">
                                                    <div class=" text-center c-font-name p-1"><b>{{$result->vname}}</b></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-7">
                                            <div class="col-4 offset-8 mt-3">{{$result->id}}</div>
                                            <div class="row mt-4">

                                                <div class="col-12 c-font-title">
                                                    <div><i class="fa fa-briefcase mr-2 rounded-circle" aria-hidden="true" style="color:sienna;"></i></span>{{$result->bname}}</div>
                                                    <div><i class="fa fa-map-marker-alt mr-2 rounded-circle" aria-hidden="true" style="color:crimson"></i>{{$result->faddress}}</div>
                                                    <div><i class="fa fa-phone mr-2 rounded-circle" aria-hidden="true" style="color:darkturquoise"></i>{{$result->phone}}</div>
                                                    <div><i class="fa fa-address-card mr-2 rounded-circle" aria-hidden="true" style="color:seagreen;"></i>{{$result->tin}}</div>
                                                    
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
                            {{$results->links()}}
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

@section('customscript')
    <script src="//code.jquery.com/jquery.min.js"></script>
    <script src="js/jQuery.highlight.js"></script>
    <script>
        // $("body").seekAndWrap({
        //     "search":{{$search_term}}
        //     });

        jQuery(document).ready(function(){
            jQuery('body').highlight({{$search_term}},{
            wholeWord: true // or false
            });
        });
    </script>
@endsection