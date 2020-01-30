$(document).ready(function() {
    //url: "http://10.14.1.240:1234/api/lineas/1",
    $.ajax({
        url: "http://192.168.0.12:1234/api/reservas/1",
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
                ["Reservas", "Fecha", { role: "style" }]
            ];

            for (x in datos) {
                console.log(datos[x].fecha)
                chart_data.push([new Date(datos[x].fecha), datos[x].reservas, '#007bff']);

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
                title: "Reservas",
                width: 1000,
                height: 400,

                bar: { groupWidth: "95%" },
                legend: { position: "none" },
            };
            var chart = new google.visualization.ColumnChart(document.getElementById("reservas"));
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