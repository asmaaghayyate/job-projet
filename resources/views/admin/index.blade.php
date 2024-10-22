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
                                            Annances Publiée
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
                                    <span class="text-white">Annances En Attente</span>
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
                                    <span class="text-white">Annances Fermée</span>
                                    <h2 class="text-white mb-0">{{$annancesfermeecount}}</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
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
