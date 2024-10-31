@extends('admin.layouts.master')

@section('title', 'Home Page')


@section('content')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="left-content">
            <div>
                <h2 class="main-content-title tx-24 mg-b-1 mg-b-lg-1">
                    bienvenue, Administrateur </h2>
            </div>
        </div>
    </div>
    <!-- /breadcrumb -->

    <div class="container-fluid">
        <div class="row row-sm">
            <div class="col-lg-6 col-xl-3 col-md-6 col-12">
                <div class="card bg-primary-gradient text-white ">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="icon1 mt-2 text-center">
                                    <i class="fa-solid fa-user-tie tx-40"></i>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mt-0 text-center">
                                    <span>
                                        <a class="text-white" >
                                            Utilisateurs
                                        </a>
                                    </span>
                                    <h2 class="text-white mb-0">{{$utilisateurcount}}</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-xl-3 col-md-6 col-12">
                <div class="card bg-warning-gradient text-white">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="icon1 mt-2 text-center">
                                    <i class="fa-solid fa-building-user tx-40"></i>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mt-0 text-center">
                                    <span>
                                        <a href="#" class="text-white">
                                            Annonces Publiée
                                        </a>
                                    </span>
                                    <h2 class="text-white mb-0">{{$annancespublieecount}}</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-3 col-md-6 col-12">
                <div class="card bg-success-gradient text-white">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="icon1 mt-2 text-center">
                                    <i class="fa-solid fa-building-user tx-40"></i>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mt-0 text-center">
                                    <span class="text-white">Annonces En Attente</span>
                                    <h2 class="text-white mb-0">{{$annancesenattentecount}}</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-6 col-xl-3 col-md-6 col-12">
                <div class="card bg-success-gradient text-white">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="icon1 mt-2 text-center">
                                    <i class="fa-solid fa-building-user tx-40"></i>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mt-0 text-center">
                                    <span class="text-white">Annonces Fermée</span>
                                    <h2 class="text-white mb-0">{{$annancesfermeecount}}</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>



 <div class="row row-sm">
            <div class="col-md-6">

                <div class="card mg-b-20" style="text-align: center;  padding-top: 2%;">
                    les pourcentage des annonces Fermées/Publiées/En attent
                    <div id="chartdiv"></div>
                </div>


            </div><!-- col-6 -->


            
            <div class="col-md-6">

                <div class="card mg-b-20">
                    <canvas id="myLineChart" width="820" height="600"></canvas>
                </div>


            </div><!-- col-6 -->
</div>


            <!-- HTML -->


            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
            <script>
                const ctx = document.getElementById('myLineChart').getContext('2d');
                const myLineChart = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: {!! json_encode($mois) !!}, // Les mois
                        datasets: [{
                            label: 'Annonces Acceptées',
                            data: {!! json_encode($totaux) !!}, // Totaux par mois
                            borderColor: 'rgba(54, 162, 235, 1)',
                            backgroundColor: 'rgba(54, 162, 235, 0.2)',
                            borderWidth: 2,
                            fill: true // Remplir la zone sous la courbe
                        }]
                    },
                    options: {
                        responsive: true,
                        plugins: {
                            legend: {
                                position: 'top',
                            },
                            title: {
                                display: true,
                                text: 'Évolution des Annonces publiées au Fil du Temps'
                            }
                        },
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });
            </script>



            <style>
                #chartdiv {
                  width: 103%;
                  height: 500px;
                }
                </style>

                <!-- Resources -->
                <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
                <script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
                <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>

                <!-- Chart code -->
                <script>
                am5.ready(function() {

                // Create root element
                // https://www.amcharts.com/docs/v5/getting-started/#Root_element
                var root = am5.Root.new("chartdiv");


                // Set themes
                // https://www.amcharts.com/docs/v5/concepts/themes/
                root.setThemes([
                  am5themes_Animated.new(root)
                ]);


                // Create chart
                // https://www.amcharts.com/docs/v5/charts/percent-charts/pie-chart/
                var chart = root.container.children.push(am5percent.PieChart.new(root, {
                  layout: root.verticalLayout
                }));


                // Create series
                // https://www.amcharts.com/docs/v5/charts/percent-charts/pie-chart/#Series
                var series = chart.series.push(am5percent.PieSeries.new(root, {
                  valueField: "value",
                  categoryField: "category"
                }));


                // Set data
                // https://www.amcharts.com/docs/v5/charts/percent-charts/pie-chart/#Setting_data
                series.data.setAll([
                  { value: {{$annancesfermeecount}}, category: "Annonce Fermée" },
                  { value:{{$annancespublieecount}}, category: "Annonce publiée" },
                  { value: {{$annancesenattentecount}}, category: "Annonce en attente" },

                ]);


                // Create legend
                // https://www.amcharts.com/docs/v5/charts/percent-charts/legend-percent-series/
                var legend = chart.children.push(am5.Legend.new(root, {
                  centerX: am5.percent(50),
                  x: am5.percent(50),
                  marginTop: 15,
                  marginBottom: 15
                }));

                legend.data.setAll(series.dataItems);


                // Play initial series animation
                // https://www.amcharts.com/docs/v5/concepts/animations/#Animation_of_series
                series.appear(1000, 100);

                }); // end am5.ready()
                </script>








  </div>




    <!-- row opened -->


@endsection


@section('scripts')
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {
            'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Year', 'Sales', 'Expenses'],
                ['2013', 1000, 400],
                ['2014', 1170, 460],
                ['2015', 660, 1120],
                ['2016', 1030, 540]
            ]);

            var options = {
                title: 'Company Performance',
                hAxis: {
                    title: 'Year',
                    titleTextStyle: {
                        color: '#333'
                    }
                },
                vAxis: {
                    minValue: 0
                }
            };

            var chart = new google.visualization.AreaChart(document.getElementById('chartOne'));
            chart.draw(data, options);
        }
    </script>

    <script type="text/javascript">
        google.charts.load('current', {
            'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Year', 'Sales', 'Expenses'],
                ['2004', 1000, 400],
                ['2005', 1170, 460],
                ['2006', 660, 1120],
                ['2007', 1030, 540]
            ]);

            var options = {
                title: 'Company Performance',
                curveType: 'function',
                legend: {
                    position: 'bottom'
                }
            };

            var chart = new google.visualization.LineChart(document.getElementById('chartTwo'));

            chart.draw(data, options);
        }
    </script>
    <!--Internal App calendar js -->
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {

            });
            calendar.render();
        });
    </script>
@endsection









@section('styles')
    <link href="https://cdn.jsdelivr.net/npm/@fullcalendar/core/main.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/@fullcalendar/daygrid/main.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/@fullcalendar/timegrid/main.css" rel="stylesheet" />
@endsection
