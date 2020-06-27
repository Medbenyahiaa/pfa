@extends('layouts.master')
@section('Content-fluid')
<div class="panel-header panel-header-sm">
  
</div>
@endsection

@section('title')
    Modfier votre Annonce
@endsection
@section('titlePage')
            Modfier votre Annonce
@endsection
@section('CustomCss')
    <style>
        input[type=text], select, textarea {
  width: 100%; /* Full width */
  padding: 12px; /* Some padding */ 
  border: 1px solid #ccc; /* Gray border */
  border-radius: 4px; /* Rounded borders */
  box-sizing: border-box; /* Make sure that padding and width stays in place */
  margin-top: 6px; /* Add a top margin */
  margin-bottom: 16px; /* Bottom margin */
  resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */
}

    </style>
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                
                <div class="card-body">
                   <div class="row">
                       <div class="col-md-6">
                            <form action="/update/{{$annonces->id}}" method="POST">
                                {{ csrf_field() }}
                                {{method_field('Put') }}
                                    <div class="form-group">
                                        <label >sujet</label>
                                        <input type="text" name="username" value="{{ $annonces->sujet}}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label >detail</label>
                                    <textarea type="text" name="detail" value="{{ $annonces->detail}}"  placeholder="Write something.." style="height:200px"class="form-control" ></textarea>
                            </div>
                                <button type="submit" class="btn btn-info">Update</button>
                                <a href="/homeBeneficiare" class="btn btn-danger">Cancel</a>
        
                            </form>
                       </div>
                   </div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')

    
@endsection