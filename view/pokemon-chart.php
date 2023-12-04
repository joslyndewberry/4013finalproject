<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<div id="chartContainer">
  <canvas id="myChart"></canvas>
</div>

  <script>
    const ctx = document.getElementById('myChart');

    new Chart(ctx, {
      type: 'radar',
      data: {
        labels: ['HP', 'Attack', 'Defense', 'SP Attack', 'SP Defense', 'Speed'],
        datasets: [
          <?php
          $pokemons->data_seek(0); // Reset the pointer to the beginning of the result set
          while ($pokemon = $pokemons->fetch_assoc()) {
            echo "{";
            echo "label: '" . $pokemon['pokemon_name'] . "',";
            echo "data: [" . $pokemon['hp'] . ", " . $pokemon['attack'] . ", " . $pokemon['defense'] . ", " . $pokemon['sp_attack'] . ", " . $pokemon['sp_defense'] . ", " . $pokemon['speed'] . "],";
            echo "},";
          }
          ?>
        ]
      },
      options: {
        scales: {
          r: {
            angleLines: {
              display: false
            },
            suggestedMin: 10,
            suggestedMax: 150,
            pointLabels: {
              font: {
                family: 'SpaceType, sans-serif'
              }
            }
          }
        },
        plugins: {
          legend: {
            labels: {
              font: {
                family: 'SpaceType, sans-serif'
              }
            }
          },
          tooltip: {
            bodyFont: {
              family: 'SpaceType, sans-serif'
            }
          }
        }
      }
    });
  </script>
