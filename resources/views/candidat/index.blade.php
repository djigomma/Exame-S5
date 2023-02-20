@extends('layouts.admin')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h2>Listes des Candidats
                    </h2>
                </div>
                <div class="card-body">
                    <br> <br>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>N</th>
                                    <th>Nom</th>
                                    <th>Prenom</th>
                                    <th>Email</th>
                                    <th>Age</th>
                                    <th>Niveau d'etude</th>
                                    <th>Formation</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach( $candidats as $candidat)
                                    <tr>
                                    
                                        <td>{{$candidat->id}}</td>
                                        <td>{{$candidat->nom}}</td>
                                        <td>{{$candidat->prenom}}</td>
                                        <td>{{$candidat->email}}</td>
                                        <td>{{$candidat->age}} ans</td>
                                        <td>{{$candidat->niveauEtude}}</td>
                                        <td>
                                            @if($candidat->formation)
                                                {{$candidat->formation->nom}}
                                            @endif    
                                        </td>
                                    </tr>
                                @endforeach    
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection