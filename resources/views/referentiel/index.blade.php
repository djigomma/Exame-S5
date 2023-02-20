@extends('layouts.admin')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h2>Listes des Referentiels
                    </h2>
                </div>
                <div class="card-body">
                    <br> <br>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>N</th>
                                    <th>Libelle</th>
                                    <th>Horaire</th>
                                    <th>Validation</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach( $referentiels as $re)
                                    <tr>
                                        <td>{{$re->id}}</td>
                                        <td>
                                            @if($re->type)
                                                {{$re->type->libelle}}   
                                            @endif
                                        </td>
                                        <td>{{$re->horaire}}</td>
                                        <td>{{$re->Validated == '0' ? 'Oui' : 'Non'}}</td>
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