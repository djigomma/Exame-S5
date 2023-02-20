@extends('layouts.admin')

@section('content')

 <div class="container ">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>Ajouter un Etudiant</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('ajoutE') }} " method="POST" >
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-md-6 p-2">
                                <label for="">Nom</label>
                                <input type="text" name="nom"  class="form-control">
                            </div>
                            <div class="col-md-6 p-2">
                                <label for="">Prenom</label>
                                <input type="prenom" name="prenom" class="form-control">
                            </div>
                            <div class="col-md-6 p-2">
                                <label for="">Email</label>
                                <input type="text" name="email" class="form-control">
                            </div>
                            <div class="col-md-6 p-2">
                                <label for="">Age</label>
                                <input type="text" name="age" class="form-control">
                            </div>
                            <div class="col-md-6 p-2">
                                <label for="">Niveau d'etude</label>
                                <select name="niveauEtude" id="" class="form-control">
                                    <option value="">--Selection votre Niveau--</option>
                                    <option value="College">College</option>
                                    <option value="Lycee">Lycee</option>
                                    <option value="Bac">Bac</option>
                                    <option value="Bac+1">Bac+1</option>
                                    <option value="Bac+2">Bac+2</option>
                                    <option value="Bac+3">Bac+3</option>
                                    <option value="Bac+4">Bac+4</option>
                                    <option value="Bac+5">Bac+5</option>
                                </select>
                            </div>
                            <div class="col-md-6 p-2">
                                <label for="">Sexe</label>
                                <select name="sexe" id="" class="form-control">
                                    <option value="Masculin">Masculin</option>
                                    <option value="Feminin">Feminin</option>
                                </select>
                            </div>
                            <div class="col-md-6 p-2">
                                <label for="">Formation</label>
                                <select name="formation_id" id=""  class="form-control">
                                    @foreach($formations as $fo)
                                    <option value="{{ $fo->id}}">{{ $fo->nom}}</option>
                                    @endforeach
                                </select>
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