/* Gráfico de linha */
var numeros = new Array(25);
for(var h=0; h < 24; h++){
    numeros[h] = h;
}
var data = {
  labels: [0,1,2,3,4,5,6,7,8,9,10,12,12,13,14,15,16,17,18,19,20,21,22,23],
  datasets: [{
    label: "My First dataset",
    fillColor: "rgba(151,187,205,0.0)",
    strokeColor: "#9aada3",//"rgba(151,187,205,1)",
    pointColor: "rgba(151,187,205,1)",
    pointStrokeColor: "#fff",
    pointHighlightFill: "#fff",
    pointHighlightStroke: "rgba(220,220,220,1)",
    data: [15, 59, 30, 31, 56, 55, 40, 59, 30, 31, 56, 55, 15, 59, 30, 31, 56, 55, 40, 59, 30, 31, 56, 55]
   }, //{
  //   label: "My Second dataset",
  //   fillColor: "rgba(220,220,220,0.0)",
  //   strokeColor: "rgba(220,220,220,1)",
  //   pointColor: "rgba(220,220,220,1)",
  //   pointStrokeColor: "#fff",
  //   pointHighlightFill: "#fff",
  //   pointHighlightStroke: "rgba(151,187,205,1)",
  //   data: [28, 48, 40, 19, 36, 27, 30]}
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
            fillColor: "#364046",
            //strokeColor: "#364046",
            highlightFill: "#9aada3",
            //highlightStroke: "#9aada3",
            data: [25, 59, 40, 41]
        },
        {
            label: "Meta",
            fillColor: "#464b51",
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

