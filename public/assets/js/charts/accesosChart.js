$(document).ready(function() {
    //url: "http://192.168.0.10:1234/api/lineas/1",
    $.ajax({

        url: "http://gastrosociety.herokuapp.com/api/accesos/1",

        type: 'GET',
        dataType: 'json',
        success: function(data) {
            grafico(data)


        }
    });


    const grafico = (datos) => {
        google.load('visualization', '1', { packages: ['controls', 'charteditor'] });
        google.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = new google.visualization.DataTable();
            data.addColumn('date', 'Fecha');
            data.addColumn('number', 'Accesos');

            for (x in datos) {
                console.log(datos[x].fecha)
                data.addRow([new Date(datos[x].fecha), datos[x].accesos]);

            }
            var view = new google.visualization.DataView(data);
            view.setColumns([0, 1,
                {
                    calc: "stringify",
                    sourceColumn: 1,
                    type: "string",
                    role: "annotation"
                }

            ]);

            var dash = new google.visualization.Dashboard(document.getElementById('accesos'));

            var control = new google.visualization.ControlWrapper({
                controlType: 'ChartRangeFilter',
                containerId: 'control_div',

                options: {

                    filterColumnIndex: 0,
                    ui: {
                        chartOptions: {
                            height: 25,
                            chartArea: {

                            }
                        },
                        chartView: {
                            columns: [0, 1]
                        }
                    }
                }
            });


            var chart = new google.visualization.ChartWrapper({
                chartType: 'LineChart',
                containerId: 'chart_div'
            });

            function setOptions(wrapper) {
                wrapper.setOption('height', 500);
                wrapper.setOption('chartArea.width', );
            }

            setOptions(chart);

            dash.bind([control], [chart]);
            dash.draw(data, view);
            google.visualization.events.addListener(control, 'statechange', function() {
                var v = control.getState();
                return 0;
            });
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