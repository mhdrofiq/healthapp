var ctx1 = document.getElementById('tempschart');

var temps = [35, 34, 36, 36, 35, 34, 33, 35, 36];
var tempstime = ['10:00', '10:30', '11:00', '11:30', '12:00', '12:30', '01:00', '01:30', '02:00'];

var tempschart = new Chart(ctx1, {
    type: 'line',
    data: {
       labels: tempstime,
       datasets: [{
           data: temps
           }]
    },
    options: {
        legend: {
            display: false
        },
        tooltips: {
            callbacks: {
               label: function(tooltipItem) {
                      return tooltipItem.yLabel;
               }
            }
        }
    }
});

var ctx2 = document.getElementById('heartchart');

var heart = [74, 75, 77, 80, 73, 74, 76, 75, 75];
var hearttime = ['10:00', '10:30', '11:00', '11:30', '12:00', '12:30', '01:00', '01:30', '02:00'];

var heartchart = new Chart(ctx2, {
    type: 'line',
    data: {
       labels: hearttime,
       datasets: [{
           data: heart
           }]
    },
    options: {
        legend: {
            display: false
        },
        tooltips: {
            callbacks: {
               label: function(tooltipItem) {
                      return tooltipItem.yLabel;
               }
            }
        }
    }
});