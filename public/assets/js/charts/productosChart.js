$(document).ready(function() {
    let sociedad = document.getElementById('id_sociedad').value;
    $.ajax({
        url: "http://gastrosociety.herokuapp.com/api/productos",
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            console.log()
            grafico(data)

        }
    });


    const grafico = (datos) => {
        console.log(datos)
        google.charts.load("current", { packages: ['corechart'] });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            let chart_data = [
                ["Nombre", "Unidades", { role: "style" }]
            ];

            for (x in datos) {
                chart_data.push([datos[x].nombre, parseInt(datos[x].unidades), '#007bff']);

            }

            var data = google.visualization.arrayToDataTable(chart_data

            );

            var view = new google.visualization.DataView(data);
            view.setColumns([0, 1,
                {
                    calc: "stringify",
                    sourceColumn: 1,
                    type: "string",
                    role: "annotation"
                },
                2
            ]);

            var options = {
                height: 500,
                bar: { groupWidth: "85%" },
                legend: { position: "none" },
            };
            var chart = new google.visualization.ColumnChart(document.getElementById("productos"));
            chart.draw(view, options);
        }
    }

    function getRandomColor() {
        var letters = '0123456789ABCDEF'.split('');
        var color = '#';
        for (var i = 0; i < 6; i++) {
            color += letters[Math.floor(Math.random() * 16)];
        }
        return color;
    }


});