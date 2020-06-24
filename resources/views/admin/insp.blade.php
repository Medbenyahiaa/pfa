@extends('layouts.master')
@section('Content-fluid')
<div class="panel-header panel-header-sm">
  
</div>
@endsection

@section('title')
    Users
@endsection
@section('titlePage')
    Users Profile
@endsection


@section('content')
 
  
  
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                  {{ session('status') }}
                </div>
              @endif
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                      <th>Role</th>
                      <th>Nom</th>
                      <th>Prenom</th>
                      <th>Pays</th>
                      <th>Sexe</th>
                      <th>Telephone</th>
                      <th>Email</th>
                      <th>EDIT</th>
                      <th>DELETE</th>
              </thead>
              <tbody>
                      @foreach ($users as $row)
                          <tr>
                              <td>{{$row->role}}</td>
                              <td>{{$row->nom}}</td>
                              <td>{{$row->prenom}}</td>
                              <td>{{$row->pays}}</td>
                              <td>{{$row->sexe}}</td>
                              <td>{{$row->telephone}}</td>
                              <td>{{$row->email}}</td>
                              <td>
                                  <a href="/role-edit/{{$row->id}}" class="btn btn-success">EDIT</a>
                              </td>
                              <td>
                                  <form action="/role-delete/{{$row->id}}" method="POST">
                                    {{ csrf_field() }}
                                    {{method_field('DELETE') }}
                                    <button type="submit" class="btn btn-danger">DELETE</button>
                                  </form>
                              </td>
                          </tr>
                      @endforeach
              </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    

@endsection

@section('scripts')
    
@endsection