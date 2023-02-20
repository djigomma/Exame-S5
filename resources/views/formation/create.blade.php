@extends('layouts.admin')

@section('content')

 <div class="container ">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>Ajouter une Formation</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('ajoutF') }}" method="POST" >
                        @csrf
                        <div class="row">
                            <div class="col-md-6 p-2">
                                <label for="">Nom</label>
                                <input type="text" name="nom"  class="form-control">
                            </div>
                            <div class="col-md-6 p-2">
                                <label for="">Duree</label>
                                <input type="nmber" name="duree" class="form-control">
                            </div>
                            <div class="col-md-6 p-2">
                                <label for="">Description</label>
                                <textarea name="description" id="" cols="2" rows="2" class="form-control"></textarea>
                            </div>
                            <div class="col-md-6 p-2">
                                <label for="">Referentiel</label>
                                <select name="referentiel_id" id=""  class="form-control">
                                    @foreach($referentiels as $re)
                                    <option value="{{ $re->id}}">{{ $re->id}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6 p-2">
                                <label for="">En Cours</label> <br>
                                <input type="checkbox" name="isStarted" class="width:50px; height:50px">
                            </div>
                            <div class="col-md-6 p-2">
                                <label for="">Date de Debut </label>
                                <input type="date" name="date_debut" class="form-control">
                            </div>
                            
                            <div class="col-md-2 p-2">
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