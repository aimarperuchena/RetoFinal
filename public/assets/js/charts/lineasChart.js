$(document).ready(function() {
    //url: "http://10.14.1.240:1234/api/lineas/1",
    $.ajax({
<<<<<<< HEAD
        url: "http://10.14.0.229:1234/api/lineas/1",
=======
        url: "http://10.14.1.240:1234/api/lineas/1",
>>>>>>> c7a5218bd3e12b5135c2dbf91c82c3d3e9b8d7e1
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            grafico1(data)
            grafico2(data)

        }
    });


    const grafico1 = (datos) => {
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
                title: "Unidades Vendidas Por articulo",
                width: 600,
                height: 400,
                bar: { groupWidth: "95%" },
                legend: { position: "none" },
            };
            var chart = new google.visualization.ColumnChart(document.getElementById("unidades"));
            chart.draw(view, options);
        }
    }

    const grafico2 = (datos) => {
        console.log(datos)
        google.charts.load("current", { packages: ['corechart'] });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            let chart_data = [
                ["Nombre", "Importe", { role: "style" }]
            ];

            for (x in datos) {
                chart_data.push([datos[x].nombre, parseInt(datos[x].importe), '#007bff']);

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
                title: "Unidades Vendidas Por articulo",
                width: 600,
                height: 400,
                bar: { groupWidth: "95%" },
                legend: { position: "none" },
            };
            var chart = new google.visualization.ColumnChart(document.getElementById("importe"));
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