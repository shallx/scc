@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
            <div class="card-header">Search Results ( {{$results->total()}} ) <span class="float-right"><a href="peoples" class="btn btn-default border">Back</a></span></div>
                   
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @isset($errormsg)
                        <div class='alert alert-danger'>{{$errormsg}}</div>
                    @endisset
                    <div class="row">
                    @if(isset($results))
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
                                        <div class="col-7 mt-2">
                                            <div class="col-5 offset-7"><small>{{$result->id}}</small></div>
                                            <div class="row mt-1">

                                                <div class="col-12 c-font-title">
                                                    <div><i class="fa fa-briefcase mr-2 rounded-circle" aria-hidden="true" style="color:sienna;"></i></span>{{$result->bname}}</div>
                                                    <div><i class="fa fa-map-marker-alt mr-2 rounded-circle" aria-hidden="true" style="color:crimson"></i>{{$result->faddress}}</div>
                                                    <div><i class="fa fa-phone mr-2 rounded-circle" aria-hidden="true" style="color:darkturquoise"></i><a href="tel:{{$result->phone}}">{{$result->phone}}</a></div>
                                                    <div><i class="fa fa-address-card mr-2 rounded-circle" aria-hidden="true" style="color:seagreen;"></i>{{$result->tin}}</div>
                                                    
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div><a name="" id="" class="btn btn-default editbtn p-1 border" href="peoples/{{$result->id}}/edit" role="button">Edit</a></div>
                                    </div>
                                </div>

                            </div>
                            
                        @endforeach
                    </div>
                    @endif
                </div>
                    @isset($results)
                        <div class="container">

                            {{$results->render()}}
                        </div>
                    
                        
                    @endisset
            </div>
        </div>
    </div>

    


@endsection

@section('customscript')
    <script src="//code.jquery.com/jquery.min.js"></script>

    <script>
        //Highlight Code
        
        // jQuery(document).ready(function(){
        //     jQuery(window).on('load', function(){
        //         highlight();
        //     })
        //     function highlight(){
        //         var content = jQuery("body").html();
        //         var searchExp = new RegExp("{{$search_term}}", "ig");
        //         var matches = content.match(searchExp);
        //         console.log(matches);
        //         if(matches)
        //         {
        //             jQuery(".content").html(content.replace(searchExp, function(match){
        //                 return "<span class='highlight'>" + match + "</span>";
        //             }));
        //         }

        //     }
        // });
    </script>

@endsection