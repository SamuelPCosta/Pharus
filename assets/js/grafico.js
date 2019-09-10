/* Gráfico de linha */
var numeros = new Array(25);
for(var h=0; h < 24; h++){
    numeros[h] = h;
}
var data = {
  labels: [0,1,2,3,4,5,6,7,8,9,10,12,],
  datasets: [{
    label: "Dataset #1",
    fillColor: "rgba(151,187,205,0.0)",
    strokeColor: "#f8f9fa",
    pointColor: "rgba(151,187,205,1)",
    pointStrokeColor: "#fff",
    pointHighlightFill: "#fff",
    pointHighlightStroke: "rgba(220,220,220,1)",
    data: [15, 59, 30, 31, 56, 55, 40, 59, 30, 31, 56, 55, 15, 59, 30, 31, 56, 55, 40, 59, 30, 31, 56, 55]
   },
  ]
};

var options = {
    bezierCurve : false
};

var ctx = document.getElementById("line-chart").getContext("2d");
var myNewChart = new Chart(ctx).Line(data, options);

var data = {
    labels: ["Janeiro", "Fevereiro", "Março", "Abril"],
    datasets: [
        {
            label: "Usuário",
            fillColor: "#808080",
            //strokeColor: "#364046",
            highlightFill: "#f8f9fa",
            //highlightStroke: "#808080",
            data: [25, 59, 40, 41]
        },
        {
            label: "Meta",
            fillColor: "#2e6171",
            //strokeColor: "#364046",
            highlightFill: "#ffc107",
            //highlightStroke: "#ffc107",
            lineTension: 0,
            data: [28, 48, 40, 19]
        }
    ]
};
var ctx = document.getElementById("myChart").getContext("2d");
var myBarChart = new Chart(ctx).Bar(data);

/*window.onresize=function() { 
    var largura = window.innerWidth;
    var ctx = document.getElementById("line-chart").getContext("2d");
    ctx.canvas.width = largura;
    var myNewChart = new Chart(ctx).Line(data);
}*/

