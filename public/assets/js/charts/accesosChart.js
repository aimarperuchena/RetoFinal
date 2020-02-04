$(document).ready(function() {
    $.ajax({
        url: "http://192.168.0.12:1234/api/accesos/1",
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            grafico(data)
        }
    });

    const grafico = (datos) => {
        console.log(datos)
        google.charts.load("current", { packages: ['corechart'] });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            let chart_data = [
                ["Dia", "Accesos", { role: "style" }]
            ];

            for (x in datos) {
                chart_data.push([datos[x].fecha, parseInt(datos[x].accesos), '#007bff']);

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
                title: 'Accesos diarios de los usuarios',
                curveType: 'function',
                legend: { position: 'none' }
            };
            var chart = new google.visualization.AreaChart(document.getElementById("accesos"));
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