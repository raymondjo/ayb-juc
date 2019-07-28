@extends('layouts.app')


@section('content')
<div class="container">

<h2>Rd cases</h2>
<!-- Search form -->
<form method="get" action="/rd/search" enctype="multipart/form-data">
    <div class="row justify-content-md-center">
    
            <div class="col-md-auto col-md-4">
                    <div class="active-cyan-3 active-cyan-4 mb-4">
                    
                    <input class="form-control" type="number" placeholder="Search" name="search" aria-label="Search"> 
                   
                    </div>
            </div>
            <div class="col-md-auto col-md-1">
            <button type="submit" class="btn btn-primary">search</button>
            </div>
       
</div>
</form> 
</div>
@endsection
