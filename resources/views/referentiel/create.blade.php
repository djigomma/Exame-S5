@extends('layouts.admin')

@section('content')

 <div class="container ">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>Ajouter un Referentiel</h3>
                </div>
                <div class="card-body">
                    <form action="{{ url('/re') }}" method="POST" >
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <label for="">Libelle</label>
                                <select name="type_id" class="form-control">
                                    @foreach($types as $type)
                                        <option value="{{ $type->id}}">{{ $type->libelle}}</option>
                                    @endforeach    
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="">Validation</label>
                                <input type="checkbox" name="validated">
                            </div>
                            <div class="col-md-6">
                                <label for="">Horaire</label>
                                <input type="time" name="horaire" class="form-control">
                            </div>
                            <div class="col-md-2">
                                <button type="submit" class="btn btn-success m-3">Enregistrer</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
 </div>
 @endsection