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
                'rgba(255, 159, 64, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 3
        }]
    },
    options: {
        title: {
            display: true,
            text: 'Sales Monitor',
            fontSize: 25
        },
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
var ctx = document.getElementById('donutGraph');
var donutchart = new Chart(ctx , {
    type: 'doughnut',
    data: {
        labels: ["Beverages", "Desserts", "Meals", "Bundle-Meals"],
        datasets: [{
            data: [100, 20, 15, 50],
            backgroundColor: ['#ffdab3','#ffc180','#ffa94d','#ff901a']
        }]
    },
    options: {
        title: {
            display: true,
            text: 'Categories Percentage',
            fontSize: 25
        },
        cutoutPercentage: 50,
        animation: {
        animatedScale: true        
        }
    }
});
/////////////////////////////////////////////////////////////////////////////////////////////////
var ctx = document.getElementById('barGraph');
var BarGraph = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Sunday',"Monday", 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'],
        datasets: [{
            label: 'Sales of the Day',
            data: [12, 19, 3, 5, 2, 3, 20],
            backgroundColor: '#ff901a'
        }]
    }
})