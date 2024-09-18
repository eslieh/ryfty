<!DOCTYPE html>
<html lang="en">
<style>
    #this{
        background-color: white;
        color: black;
    }
</style>
<?php
    include('req/header.php');
?>
<body>
    <?php
        include('req/navs.php');
    ?>
    <div class="body-content">
        <div class="nameandema">
            <div class="station-name">
                <h2>Victor Movers And CO.</h2>
            </div>
            <div class="accountandi">
                <div class="imahehhe">
                    <img src="https://thumbs.dreamstime.com/b/icon-profile-color-green-icon-profile-color-green-circle-color-dark-green-background-color-white-194702090.jpg" alt="" class="pprio">
                </div>
                <div class="naeme">
                    <span class="nd">Eslieh</span>
                </div>
            </div>
        </div>
        <div class="dashboard">
            <div class="thinhs">
                <div class="container">
                    <div class="headre">Total Offices</div>
                    <div class="valuecount">145</div>
                </div>
                <div class="container">
                    <div class="headre">Total Offices</div>
                    <div class="valuecount">145</div>
                </div>
                <div class="container">
                    <div class="headre">Total Offices</div>
                    <div class="valuecount">145</div>
                </div>
            </div>
            <div class="chart-area">
                <canvas id="myChart" style="width:100%;" class="chatdtt"></canvas>
            </div>
        </div>
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'line',
    data: {
      labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
      datasets: [{
        label: '# of Votes',
        data: [12, 19, 3, 5, 2, 3],
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
</html>
