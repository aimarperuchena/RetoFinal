$(document).ready(function() {
    $.ajax({
        url: "http://gastrosociety.herokuapp.com//api/socios/1",
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
                ["Sociedad", "Socios", { role: "style" }]
            ];

            for (x in datos) {
                chart_data.push([datos[x].nombre, parseInt(datos[x].socios), '#007bff']);

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
                cbar: { groupWidth: "85%" },
                legend: { position: "none" },
            };
            var chart = new google.visualization.ColumnChart(document.getElementById("socios"));
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