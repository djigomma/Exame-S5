@extends('layouts.admin')

@section('content')

<div class="container">
    <div class="row" style="margin:20px">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h2>Listes des Formations
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
                                    <th>Duree</th>
                                    <th>Description</th>
                                    <th>En cours</th>
                                    <th>Date debut</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach( $formations as $f)
                                    <tr>
                                        $nbcandidat++;
                                        <td>{{$f->id}}</td>
                                        <td>{{$f->nom}}</td>
                                        <td>{{$f->duree}} mois</td>
                                        <td>{{$f->description}}</td>
                                        <td>{{$f->isStarted == '1' ? 'Oui' : 'Non'}}</td>
                                        <td>{{$f->date_debut}}</td>
                                    
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