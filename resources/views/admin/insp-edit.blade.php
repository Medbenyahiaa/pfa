@extends('layouts.master')
@section('Content-fluid')
<div class="panel-header panel-header-sm">
  
</div>
@endsection

@section('title')
    Edit-Users
@endsection
@section('titlePage')
       Edit Users
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                
                <div class="card-body">
                   <div class="row">
                       <div class="col-md-6">
                            <form action="/role-insp-update/{{$users->id}}" method="POST">
                                {{ csrf_field() }}
                                {{method_field('Put') }}
                                    <div class="form-group">
                                        <label >Nom</label>
                                        <input type="text" name="username" value="{{ $users->nom}}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label >User Role </label>
                                    <select name="role" class="form-control">
                                        <option value="donateur">donateur</option>
                                        <option value="beneficiare">beneficiare</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-info">Update</button>
                                <a href="/role-users" class="btn btn-danger">Cancel</a>
        
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