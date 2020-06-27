@extends('layouts.master')
@section('Content-fluid')
<div class="panel-header panel-header-sm">
  
</div>
@endsection
@section('title')
    Annonce
@endsection
@section('titlePage')
    Liste des demandes
@endsection

@section('content')
<div class="table-responsive tablepadding" >
    <table class="table">
        <thead class="tableTitle">
        <tr style=" text-align: center ;" >
            <th scope="col"> NOM</th>
            <th scope="col">PRENOM</th>
            <th scope="col">VILLE</th>
            <th scope="col">SUJET</th>
            <th scope="col">Detail</th>
            <th>Accepter</th>
            <th>Refuser</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
            
       

            @foreach ($annonces as $row)
            @if ($row->valide == false)
            @foreach ($beneficiares as $beneficiare)
                @if ($beneficiare->id == $row->beneficiare_id)
                    @foreach ($users as $user)
                        @if ($beneficiare->user_id == $user->id)
                        <tr>
                            <td>{{$user->nom}}</td>
                            <td>{{$user->prenom}}</td>
                            <td>{{$row->ville}}</td>
                            <td>{{$row->sujet}}</td>
                            <td>{{$row->detail}}</td>

                            <th scope="col"> <a class="VoirPlus" href="/accept/{{ $row->id }}">Accepter</a></th>
                           <th scope="col"> <a class="VoirPlus" href="/delete/{{ $row->id }}">Supprimer</a></th>
                        </tr>  
                        @endif
                    @endforeach
                @endif
            @endforeach
            @endif
         @endforeach


        </tbody>
    </table>
</div>
@endsection