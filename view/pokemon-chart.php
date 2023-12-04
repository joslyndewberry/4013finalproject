<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<div id="chartContainer" style="width: 50%; height: 50%; background-color: white;">
  <canvas id="myChart"></canvas>
</div>

  <script>
  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'radar',
    data: {
      labels: ['HP', 'Attack', 'Defense', 'SP Attack', 'SP Defense', 'Speed'],
      datasets: [{
        data: [
          <?php
          while ($pokemon = $pokemons->fetch_assoc()) {
            echo $pokemon['hp'] . ", " . $pokemon['attack'] . ", " . $pokemon['defense'] . ", " . $pokemon['sp_attack'] . ", " . $pokemon['sp_defense'] . ", " . $pokemon['speed'] . ", ";
          }
          ?>
        ]
      }]
    },
    options: {
      scales: {
        r: {
          angleLines: {
            display: false
          },
          suggestedMin: 10,
          suggestedMax: 150
        }
      }
    }
  });
</script>
