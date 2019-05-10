@extends('layouts/master')

@section('title')
 Bootstrap 4 Grids
@endsection


@section('content')

  
        <div class="row my-row justify-content-around">
            <div class=" col-xs-12  col-sm-12 col-md-4 col-lg-3 my-col ">
                Row 1 Col 1
            </div>
            <div class=" col-xs-12  col-sm-12 col-md-4 col-lg-3 my-col">
                Row 1 Col 2
            </div>
        </div>
        <div class="row my-row justify-content-between">
            <div class="col-xs-12 col-sm-12 col-md-4 my-col ">
                Row 2 Col 1
            </div>
            <div class=" col-xs-12 col-sm-12 col-md-4 my-col ">
                Row 2 Col 2
            </div>
        </div>
 

@endsection