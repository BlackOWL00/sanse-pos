function fnOpenNav(){
    document.getElementById("mySideNav").style.width = "335px";

}

function fnCloseNav(){
    document.getElementById("mySideNav").style.width = "0px";
}
////////////////////////////////////////////////////////////////////////////////////////////////
var ctx = document.getElementById('lineGraph');
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'],
        datasets: [{
            label: 'Sales of the Week',
            data: [12, 19, 3, 5, 2, 3, 20],
            backgroundColor: [
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 3
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
/////////////////////////////////////////////////////////////////////////////////////////////////
var ctx1 = document.getElementById('');