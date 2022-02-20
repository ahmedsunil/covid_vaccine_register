<style>
    @import url(https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css);
</style>
<div class="grid grid-cols-3">
    <div class="w-full px-2">
        <div class="rounded-lg shadow-sm mb-4">
            <div class="rounded-lg bg-white shadow-lg md:shadow-xl relative overflow-hidden">
                <div class="px-3 pt-8 pb-10 text-center relative z-10">
                    <h4 class="text-sm uppercase text-gray-500 leading-tight">Dose 1</h4>
                    <h3 class="text-3xl text-gray-700 font-semibold leading-tight my-3">915</h3>
                    <p class="text-xs text-green-500 leading-tight">95%</p>
                </div>
                <div class="absolute bottom-0 inset-x-0">
                    <canvas id="chart1" height="70"></canvas>
                </div>
            </div>
        </div>
    </div>
    <div class="w-full px-2">
        <div class="rounded-lg shadow-sm mb-4">
            <div class="rounded-lg bg-white shadow-lg md:shadow-xl relative overflow-hidden">
                <div class="px-3 pt-8 pb-10 text-center relative z-10">
                    <h4 class="text-sm uppercase text-gray-500 leading-tight">Dose 2</h4>
                    <h3 class="text-3xl text-gray-700 font-semibold leading-tight my-3">919</h3>
                    <p class="text-md text-red-500 leading-tight">95%</p>
                </div>
                <div class="absolute bottom-0 inset-x-0">
                    <canvas id="chart2" height="70"></canvas>
                </div>
            </div>
        </div>
    </div>
    <div class="w-full px-2">
        <div class="rounded-lg shadow-sm mb-4">
            <div class="rounded-lg bg-white shadow-lg md:shadow-xl relative overflow-hidden">
                <div class="px-3 pt-8 pb-10 text-center relative z-10">
                    <h4 class="text-sm uppercase text-gray-500 leading-tight">Booster</h4>
                    <h3 class="text-3xl text-gray-700 font-semibold leading-tight my-3">154</h3>
                    <p class="text-xs text-green-500 leading-tight">16%</p>
                </div>
                <div class="absolute bottom-0 inset-x-0">
                    <canvas id="chart3" height="70"></canvas>
                </div>
            </div>
        </div>
    </div>

</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
<script>
    const chartOptions = {
        maintainAspectRatio: false,
        legend: {
            display: false,
        },
        tooltips: {
            enabled: false,
        },
        elements: {
            point: {
                radius: 0
            },
        },
        scales: {
            xAxes: [{
                gridLines: false,
                scaleLabel: false,
                ticks: {
                    display: false
                }
            }],
            yAxes: [{
                gridLines: false,
                scaleLabel: false,
                ticks: {
                    display: false,
                    suggestedMin: 0,
                    suggestedMax: 10
                }
            }]
        }
    };
    //
    var ctx = document.getElementById('chart1').getContext('2d');
    var chart = new Chart(ctx, {
        type: "line",
        data: {
            labels: [1, 2, 1, 3, 5, 4, 7],
            datasets: [
                {
                    backgroundColor: "rgba(101, 116, 205, 0.1)",
                    borderColor: "rgba(101, 116, 205, 0.8)",
                    borderWidth: 2,
                    data: [1, 2, 1, 3, 5, 4, 7],
                },
            ],
        },
        options: chartOptions
    });
    //
    var ctx = document.getElementById('chart2').getContext('2d');
    var chart = new Chart(ctx, {
        type: "line",
        data: {
            labels: [2, 3, 2, 9, 7, 7, 4],
            datasets: [
                {
                    backgroundColor: "rgba(246, 109, 155, 0.1)",
                    borderColor: "rgba(246, 109, 155, 0.8)",
                    borderWidth: 2,
                    data: [2, 3, 2, 9, 7, 7, 4],
                },
            ],
        },
        options: chartOptions
    });
    //
    var ctx = document.getElementById('chart3').getContext('2d');
    var chart = new Chart(ctx, {
        type: "line",
        data: {
            labels: [2, 5, 1, 3, 2, 6, 7],
            datasets: [
                {
                    backgroundColor: "rgba(246, 153, 63, 0.1)",
                    borderColor: "rgba(246, 153, 63, 0.8)",
                    borderWidth: 2,
                    data: [2, 5, 1, 3, 2, 6, 7],
                },
            ],
        },
        options: chartOptions
    });
</script>
