<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
<canvas id="myChart" width="400" height="400"></canvas>

<script>
var ctx = document.getElementById("myChart").getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar', // 圖表類型
    data: { // 顯示資料
        labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"], //項目
        datasets: [{ //圖表設置
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    }, // 配置選項
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        },
        legend: {
            labels: {
            // This more specific font property overrides the global property
                fontColor: 'black',
                fontSize: 16
                }
            }
        }
});
</script>