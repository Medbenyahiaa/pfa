@extends('layouts.master')
@section('Content-fluid')
<div class="panel-header panel-header-sm">
  
</div>
@endsection

@section('title')
    Users
@endsection
@section('titlePage')
Bonjour {{Auth::user()->nom}}
@endsection


@section('content')
 
  
  
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Les Annonces Actuelles </h4>
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
              </thead>
              <tbody>
                      @foreach ($annonces  as $row)
                        @if ($row->valide == true )
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
                          <!--
                          <a href="/mess/{{$row->id}}/{{$user->email}}" class="btn btn-success">Contacter</a>
                          -->                          
                           <a href="mailto:{{$user->email}} "class="btn btn-success" target="_blank">contacter</a>

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