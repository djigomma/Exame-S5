@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-md-12 grid-margin">
      <div class="d-flex justify-content-between flex-wrap">
        <div class="d-flex align-items-end flex-wrap">
          <div class="me-md-3 me-xl-5">
            <h2>Tableau de Bord</h2>
          </div>
          <div class="d-flex">
            <i class="mdi mdi-home text-muted hover-cursor"></i>
            <p class="text-muted mb-0 hover-cursor">&nbsp;/&nbsp;Dashboard&nbsp;&nbsp;</p>
          </div>
        </div>
       
      </div>
    </div>
  </div>
  <div class="container">
      <h4>Nombre de candidats par formation</h4>

      <table class="table">
          <thead>
              <tr>
                  <th>Formation</th>
                  <th>Nombre de candidats</th>
              </tr>
          </thead>
          <tbody>
              @foreach($formations as $formation)
                  <tr>
                      <td>{{ $formation->nom }}</td>
                      <td>{{ $formation->candidats_count }}</td>
                  </tr>
              @endforeach
          </tbody>
      </table>
  
  </div>
  <div class="container">
    <h4>Nombre de formation par referentiel</h4>

    <table class="table">
        <thead>
            <tr>
                <th>Référentiel</th>
                <th>Nombre de formations</th>
            </tr>
        </thead>
        <tbody>
            @foreach($referentiels as $referentiel)
                <tr>
                    <td>
                        {{-- @if($referentiel->type_id)
                          {{$referentiel->type->libelle}}
                        @else 
                          Pas de donnes  
                        @endif   --}}
                        {{$referentiel->type_id}}
                    </td>
                    <td>{{ $referentiel->formations_count }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
<div class="container">
  <h4>Repartition des candidats par sexe</h4>

  <table class="table">
      <thead>
          <tr>
              <th>Sexe</th>
              <th>Nombre de candidats</th>
          </tr>
      </thead>
      <tbody>
          @foreach($candidats as $candidat)
              <tr>
                  <td>{{ $candidat->sexe }}</td>
                  <td>{{ $candidat->candidats_count }}</td>
              </tr>
          @endforeach
      </tbody>
  </table>
</div>
<div class="container">
  <h4>Nombre de Formation par type</h4>

  <table class="table">
      <thead>
          <tr>
              <th>Type de formation</th>
              <th>Nombre de formations</th>
          </tr>
      </thead>
      <tbody>
          @foreach($formationR as $formation)
              <tr>
                  <td>{{ $formation->referentiel_id }}</td>
                  <td>{{ $formation->formations_count }}</td>
              </tr>
          @endforeach
      </tbody>
  </table>
</div>

<div class="container">
  <h4>Tranche d'age des candidats</h4>

  <canvas id="ageChart"></canvas>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  var ageRanges = @json($ageRanges);

  var ageLabels = ageRanges.map(function(ageRange) {
      return ageRange.age_range + " ans";
  });

  var ageData = ageRanges.map(function(ageRange) {
      return ageRange.candidats_count;
  });

  var ctx = document.getElementById('ageChart').getContext('2d');
  var ageChart = new Chart(ctx, {
      type: 'line',
      data: {
          labels: ageLabels,
          datasets: [{
              label: 'Tranche d\'âge des candidats',
              data: ageData,
              backgroundColor: [
                  'rgba(255, 99, 132, 0.2)',
                  'rgba(54, 162, 235, 0.2)',
                  'rgba(255, 206, 86, 0.2)',
                  'rgba(75, 192, 192, 0.2)',
                  'rgba(153, 102, 255, 0.2)',
                  'rgba(255, 159, 64, 0.2)',
                  'rgba(255, 99, 132, 0.2)',
                  'rgba(54, 162, 235, 0.2)',
                  'rgba(255, 206, 86, 0.2)',
                  'rgba(75, 192, 192, 0.2)'
              ],
              borderColor: [
                  'rgba(255, 99, 132, 1)',
                  'rgba(54, 162, 235, 1)',
                  'rgba(255, 206, 86, 1)',
                  'rgba(75, 192, 192, 1)',
                  'rgba(153, 102, 255, 1)',
                  'rgba(255, 159, 64, 1)',
                  'rgba(255, 99, 132, 1)',
                  'rgba(54, 162, 235, 1)',
                  'rgba(255, 206, 86, 1)',
                  'rgba(75, 192, 192, 1)'
              ],
              borderWidth: 1
          }]
      },
      options: {
          scales: {
              y: {
                  beginAtZero: true
              }
          }
      }
  });
</script>
<div >
<h4>Statistique des Formations</h4>
<canvas id="myChart"></canvas>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['En cours', 'En attente'],
            datasets: [{
                label: 'Formations',
                data: [{{$nbEnCours}}, {{$nbEnAttente}}],
                backgroundColor: [
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 99, 132, 0.2)',
                ],
                borderColor: [
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 99, 132, 1)',
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>

@endsection
