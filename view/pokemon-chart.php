<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<div>
  <canvas id="myChart"></canvas>
</div>


  <script>
  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'radar',
    data: {
    labels: ['HP', 'Attack', 'Defense, 'SP Attack', 'SP Defense', 'Speed'
],
    datasets: [{
        data: [
<?php
while ($pokemon = $pokemons->fetch_assoc()) {
  echo $pokemon['hp'] . ", " . echo $pokemon['attack'] . ", " . echo $pokemon['defense'] . ", " . echo $pokemon['sp_attack'] . ", " . echo $pokemon['sp_defense'] . ", " . echo $pokemon['speed'] . ", ";
}
      
?>]
    }
    ]
},
   options = {
    scales: {
        r: {
            angleLines: {
                display: false
            },
            suggestedMin: 10,
            suggestedMax: 150
        }
    }
});
</script>
