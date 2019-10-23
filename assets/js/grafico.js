/* Gráfico de linha */
data=new Date();
var hora = data.getHours(); 
var numeros = new Array();
for(var h=0; h <= hora; h++){//Passando o limite como uma variável com o numero de horas 
    numeros[h] = h;
}
if (nightModeStorage) {
  Chart.defaults.global.defaultFontColor = 'white';
}else{
  Chart.defaults.global.defaultFontColor = '#343a40'
}
function update(myChart) {
    Chart.defaults.global.defaultFontColor = (Chart.defaults.global.defaultFontColor == '#343a40') ? 'white' : '#343a40';
    myChart.update();
    myBarChart.update();
}

var consumo = localStorage.getItem('consumo');
console.log(consumo);
console.log(numeros);
Chart.defaults.global.defaultFontSize = 16;
var ctx = document.getElementById('line-chart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: numeros, //Passando direto o nome do array ele organiza
        datasets: [{
            label: 'Consumo kWh',
            data: JSON.parse(consumo),//consumo
            // backgroundColor:,
            borderWidth: 3,
            backgroundColor: '#FFC107',
            borderColor: '#FFC107',
            pointBorderWidth: 5,
            pointHitRadius: 10,
            fill: false,
            lineTension : 0
        }]
    },
    options: {
        responsive: true,
        title: {
            display: true,
            text: 'Gráfico de Consumo por hora',
            fontSize: 25
        },
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        },
        tooltips: {
            mode: 'index',
            intersect: false,
        },
        hover: {
            mode: 'nearest',
            intersect: true
        }
    }
});

/* Gráfico de barras */

var ctx = document.getElementById("bar-chart").getContext("2d");
var myBarChart = new Chart(ctx,{
    type: 'bar',
    data:{
        labels: ["Janeiro", "Fevereiro", "Março", "Abril"],
        datasets: [{
            label: "Meu Consumo",
            data: [25, 59, 40, 41],
            backgroundColor: "#ddd",
            borderWidth: 1,
            borderColor: '#808080',
            hoverBackgroundColor:"#808080",
            highlightFill: "#f8f9fa",
        },
        {
            label: "Minha Meta",
            backgroundColor: "#555",
            borderWidth: 1,
            borderColor: '#808080',
            hoverBackgroundColor:"#ffc107",
            lineTension: 0,
            data: [28, 48, 40, 19]
        }]
    },
    options: {
        responsive: true,
        title: {
            display: true,
            text: 'Gráfico de expectativas por mês',
            fontSize: 25
        },
        tooltips: {
            mode: 'index',
            intersect: true
        },
        scales: {
            yAxes: [{
                type: 'linear', // only linear but allow scale type registration. This allows extensions to exist solely for log scale for instance
                display: true,
                position: 'left',
                id: 'y-axis-1',
            }],
        }
    }
});