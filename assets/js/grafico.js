/* Gráfico de linha */
var numeros = new Array(25);
for(var h=0; h < 24; h++){
    numeros[h] = h;
}
var ctx = document.getElementById('line-chart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
        datasets: [{
            label: 'Consumo por hora',
            data: [12, 19, 3, 5, 2, 3],
            // backgroundColor:,
            borderWidth: 3,
            borderColor: '#808080',
            pointBorderWidth: 10,
            pointHitRadius: 15,
            fill: false,
            lineTension : 0,
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

/* Gráfico de barras */
var ctx = document.getElementById("bar-chart").getContext("2d");
var myBarChart = new Chart(ctx,{
    type: 'bar',
    data:{
        labels: ["Janeiro", "Fevereiro", "Março", "Abril"],
        datasets: [{
            label: "Usuário",
            data: [25, 59, 40, 41],
            borderColor: "#808080",
            //strokeColor: "#364046",
            
            highlightFill: "#f8f9fa",
            //highlightStroke: "#808080",
        },
        {
            label: "Meta",
            borderColor: "#2e6171",
            //strokeColor: "#364046",
            highlightFill: "#ffc107",
            //highlightStroke: "#ffc107",
            lineTension: 0,
            data: [28, 48, 40, 19]
        }]
    }
});

/*window.onresize=function() { 
    var largura = window.innerWidth;
    var ctx = document.getElementById("line-chart").getContext("2d");
    ctx.canvas.width = largura;
    var myNewChart = new Chart(ctx).Line(data);
}*/

