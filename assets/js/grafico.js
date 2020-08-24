/* Gráfico de linha */
data=new Date();
var hora = data.getHours(); 
var numeros = new Array();
for(var h=0; h <= hora; h++){//Passando o limite como uma variável com o numero de horas 
    numeros[h] = h;
}
if (typeof Chart !== 'undefined') {
if (nightModeStorage) {
  Chart.defaults.global.defaultFontColor = 'white';
}else{
  Chart.defaults.global.defaultFontColor = '#343a40'

}
function update(myChart) {
    Chart.defaults.global.defaultFontColor = (Chart.defaults.global.defaultFontColor == '#343a40') ? 'white' : '#343a40';
    var cordabarra = 'white';
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
            backgroundColor: '#80bef7',
            borderColor: '#3b94af44',
            lineTension : 0,
            data: [0.022,0.022,0.022,0.022,0.022,0.022,0.022,0.2,0.3,0.34,0.34,0.3,0.2,0.15,0.2,0.3,0.4,0.5,0.9,1.15,1.2,1.15,1,0.6],
        }]
    },
    options: {
        responsive: true,
        title: {
            display: true,
            text: 'Gráfico de Consumo por hora (kWh)',
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
        labels: [mesatual],
        datasets: [{
            label: "Meu consumo",
            backgroundColor: "#80bef7",
            borderWidth: 0,
            borderColor: '#80bef7',
            hoverBackgroundColor:"#80bef7",
            highlightFill: "#f8f9fa",
            data: [JSON.parse(meuconsumo)],
        },
        {
            label: "Minha meta",
            backgroundColor: "#FFC107",
            borderWidth: 0,
            borderColor: '#FFC107',
            hoverBackgroundColor:"#FFC107",
            lineTension: 0,
            data: [JSON.parse(meta)]
        },
        {
            label: "Média da faixa "+minhafaixa,
            backgroundColor: '#f7da80',
            borderWidth: 0,
            borderColor: '#f7da80',
            hoverBackgroundColor:"#f7da80",
            lineTension: 0,
            data: [JSON.parse(mediafaixa)]
        }]
    },
    options: {
        responsive: true,
        title: {
            display: true,
            text: 'Gráfico de expectativas por mês (kWh)',
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
                ticks: {
                    beginAtZero: true
                }
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
}