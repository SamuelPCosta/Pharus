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
Chart.defaults.global.legend.labels.usePointStyle = true;
Chart.defaults.global.legend.labels.position = 'bottom';
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
        },{
            label: 'Curva padrão',
            fill: false,
            backgroundColor: '#3b94af',
            borderColor: '#3b94af44',
            lineTension : 0,
            data: [0.022,0.022,0.022,0.022,0.022,0.022,0.022,0.2,0.3,0.34,0.34,0.3,0.2,0.15,0.2,0.3,0.4,0.5,0.9,1.15,1.2,1.15,1,0.6],
        }]
    },
    options: {
        responsive: true,
        title: {
            display: true,
            text: 'Gráfico de Consumo por hora',
            fontSize: 25,
            fontStyle: 'normal',
            fontFamily: 'Open Sans'
        },
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        },
        legend: {
            display: true,
            position: 'bottom'
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
            label: "Consumo",
            backgroundColor: "#343a40",
            borderWidth: 1,
            borderColor: '#343a40',
            hoverBackgroundColor:"#22242a",
            highlightFill: "#f8f9fa",
            data: [0,0,0,0],
        },
        {
            label: "Meta",
            backgroundColor: "#ffc107dd",
            borderWidth: 1,
            borderColor: '#ffc107dd',
            hoverBackgroundColor:"#ffc107",
            lineTension: 0,
            data: [0,0,0,0]
        },
        {
            label: "Média",
            backgroundColor: "#3b94af55",
            borderWidth: 1,
            borderColor: '#3b94af',
            hoverBackgroundColor:"#3b94af",
            lineTension: 0,
            data: [0,0,0,0]
        }]
    },
    options: {
        responsive: true,
        title: {
            display: true,
            text: 'Gráfico de expectativas por mês',
            fontSize: 25,
            fontStyle: 'normal',
            fontFamily: 'Open Sans'
        },
        legend: {
            display: true,
            position: 'bottom'
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

/*###########Tip###########*/
const tipdisabled = localStorage.getItem('tipdisabled')
if (tipdisabled) {
  document.getElementById("alerta-dica-chart").style.display = "none";
}

$("#hide").click(function(e) {
  e.preventDefault();
    document.getElementById("alerta-dica-chart").style.display = "none";
    if ($("input[type=checkbox]").is(":checked")) {
      localStorage.setItem('tipdisabled', true); 
      return
    } 
});
