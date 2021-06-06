<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>graficas de lineas</title>
</head>
<body>

 <div id="chart-container"></div> 
<!-- <div id="container"></div> -->
<!-- <canvas id="chart-container" width="400" height="400"></canvas> -->

<script src="https://code.highcharts.com/highcharts.js"></script>
  <script>
    var datas = <?php echo json_encode ($datas) ?>

    Highcharts.chart('chart-container', {
        title: {
            text: 'incremente de nuevo usuarios'
        },
        subtitle:{
            text: 'Fuente: mediod de TI'
        },
        xAxis:{
           categories: ['ene', 'feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul']
 
        },
        yAxis:{
            title:{
                text: 'Numero de usuarios nuevos'
            }
        },
        legend: {
            layout: 'verical',
            align: 'right',
            verticalAling: 'middle'
        },
        plotOptions:{
            series:{
                allonPointSelect: true
            }
        },
        series: [{
            name: 'Nuevo Usuario',
            data: datas
        }],
        responsive:{
            rules: [
                {
                    condition:{
                        maxwidth:500
                    },
                    chartOptions:{
                        legend:{
                            layout: 'horizontal',
                            aling: 'center',
                            verticalAling: 'bottom'
                        }
                    }
                }]
        }
    }) 
</script> 

 <!-- <script>
    var datas = <?php echo json_encode ($datas) ?>

    Highcharts.chart('container', {
        title: {
            text: 'incremente de nuevo usuarios por dia'
        },
        subtitle:{
            text: 'Fuente: EDUCUANTICO'
        },
        xAxis:{
           categories: ['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31']
        },
        yAxis:{
            title:{
                text: 'Numero de usuarios dia'
            }
        },
        legend: {
            layout: 'verical',
            align: 'right',
            verticalAling: 'middle'
        },
        plotOptions:{
            series:{
                allonPointSelect: true
            }
        },
        series: [{
            name: 'Nuevo Usuario',
            data: datas
        }],
        responsive:{
            rules: [
                {
                    condition:{
                        maxwidth:500
                    },
                    chartOptions:{
                        legend:{
                            layout: 'horizontal',
                            aling: 'center',
                            verticalAling: 'bottom'
                        }
                    }
                }]
        }
    })
</script>   -->
</body>
</html>