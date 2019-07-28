/* Gráfico de linha */

var data = {
  labels: ["January", "February", "March", "April", "May", "June", "July"],
  datasets: [{
    label: "My First dataset",
    fillColor: "rgba(220,220,220,0.0)",
    strokeColor: "rgba(220,220,220,1)",
    pointColor: "rgba(220,220,220,1)",
    pointStrokeColor: "#fff",
    pointHighlightFill: "#fff",
    pointHighlightStroke: "rgba(220,220,220,1)",
    data: [65, 59, 80, 81, 56, 55, 40]
  }, {
    label: "My Second dataset",
    fillColor: "rgba(151,187,205,0.0)",
    strokeColor: "rgba(151,187,205,1)",
    pointColor: "rgba(151,187,205,1)",
    pointStrokeColor: "#fff",
    pointHighlightFill: "#fff",
    pointHighlightStroke: "rgba(151,187,205,1)",
    data: [28, 48, 40, 19, 86, 27, 90]
  }]
};
var options = {
    bezierCurve : false
};

var ctx = document.getElementById("line-chart").getContext("2d");
var myNewChart = new Chart(ctx).Line(data, options);

var data = {
    labels: ["January", "Fevereiro", "Março", "Abril"],
    datasets: [
        {
            label: "Usuário",
            fillColor: "#36404655",
            //strokeColor: "#36404655",
            highlightFill: "#9aada3",
            //highlightStroke: "#9aada3",
            data: [25, 59, 40, 41]
        },
        {
            label: "Meta",
            fillColor: "#364046",
            //strokeColor: "#364046",
            highlightFill: "#0a522d",
            //highlightStroke: "#0a522d",
            lineTension: 0,
            data: [28, 48, 40, 19]
        }
    ]
};
var ctx = document.getElementById("myChart").getContext("2d");
ctx.canvas.width = 10;
var myBarChart = new Chart(ctx).Bar(data);

/*window.onresize=function() { 
    var largura = window.innerWidth;
    var ctx = document.getElementById("line-chart").getContext("2d");
    ctx.canvas.width = largura;
    var myNewChart = new Chart(ctx).Line(data);
}*/

