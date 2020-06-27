@extends('layouts.master')
@section('Content-fluid')
<div class="panel-header panel-header-sm">
  
</div>
@endsection

@section('title')
    Annonce
@endsection
@section('titlePage')
Bonjour {{Auth::user()->nom}}
@endsection


@section('content')
 
  
  
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
             <h4 class="card-title">Mes Annonces</h4>
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
                      <th>Nom</th>
                      <th>Prenom</th>
                      <th>Ville</th>
                      <th>sujet</th>
                      <th>detail</th>
                      <th>image</th>
                      
                      <th>EDIT</th>
                      <th>DELETE</th>
              </thead>
              <tbody>
                      @foreach ($annonces as $row)
                         @if ($row->valide == true && $benficiare->id == $row->beneficiare_id)
                         @php
                            $beneficiare=App\Beneficiare::findOrFail($row->beneficiare_id);
                            $user=App\User::findOrFail($beneficiare->user_id);
                        @endphp
                         <tr>
                          <td>{{$user->nom}}</td>
                          <td>{{$user->prenom}}</td>
                          <td>{{$row->ville}}</td>
                          <td>{{$row->sujet}}</td>
                          <td>{{$row->detail}}</td>
                          <td>{{$row->photo}}</td>
                          <td>
                              <a href="/edit/{{$row->id}}" class="btn btn-success">EDIT</a>
                          </td>
                          <td>
                              <form action="/delete/{{$row->id}}" method="POST">
                                {{ csrf_field() }}
                                {{method_field('DELETE') }}
                                <button type="submit" class="btn btn-danger">DELETE</button>
                              </form>
                          </td>
                      </tr>  
                         @endif
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