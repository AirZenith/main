<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // chart of air quality
    const aqi = document.getElementById("chartaqi");

    new Chart(aqi, {
        type: "line",
        data: {
            // labels: ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'],
            labels: [<?php 
            for($n=0;$n<=6;$n++){
                echo "'".date('D - m/d/Y',strtotime("-$n day"))."'".",";
            } ?>
            ],
            datasets: [{
                    label: "Air Quality",
                    data: [120, 135, 110, 105, 152, 111, 124],
                    borderColor: 'green',
                    tension: 0.5,
                    borderWidth: 3,
                },
                // {
                //   label: "Child Growth",
                //   data: [1,2,3,4,5,6,7],
                //   borderWidth: 2,
                // },
            ],
        },
        options: {
            scales: {
                y: {
                    // beginAtZero: true,
                },
            },
        },
    });
</script>
</body>
</body>

</html>