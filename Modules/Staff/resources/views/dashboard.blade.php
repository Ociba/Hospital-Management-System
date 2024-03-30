<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="robots" content="noindex,nofollow" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        @include('layouts.css')
    </head>
    <body onLoad="doOnLoad();">
        @include('layouts.navbar')
        <div class="container-fluid">
            <div class="row">
                @if(auth()->user()->user_type == 'admin')
                @include('admin.sidebars.admin')
                @endif
                @if(auth()->user()->user_type == 'staff')
                @include('admin.sidebars.staff')
                @endif
                @if(auth()->user()->user_type == 'patient')
                @include('admin.sidebars.patient')
                @endif
                <main class="col-md-9 ms-sm-auto common col-lg-10 px-md-4">
                    @include('layouts.breadcrumb')
                    <div class="row crm_2 mt-4">
                        <div class="col-lg-3 col-md-6">
                            <div class="analytic_2l1 bg-white">
                                <h6 class="font_14 col_3">Campaign</h6>
                                <h3>180 <span class="pull-right col_3"><i class="fa fa-users"></i></span></h3>
                                <p class="col_2 mb-0"><i class="fa fa-long-arrow-up"></i> 5.27% <span
                                    class="pull-right col_3">Since last month</span></p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="analytic_2l1 bg-white">
                                <h6 class="font_14 col_3">New Leads</h6>
                                <h3>180 <span class="pull-right col_3"><i class="fa fa-users"></i></span></h3>
                                <p class="col_4 mb-0"><i class="fa fa-long-arrow-up"></i> 5.27% <span
                                    class="pull-right col_3">Since last month</span></p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="analytic_2l1 bg-white">
                                <h6 class="font_14 col_3">Deals</h6>
                                <h3>180 <span class="pull-right col_3"><i class="fa fa-users"></i></span></h3>
                                <p class="col_2 mb-0"><i class="fa fa-long-arrow-up"></i> 5.27% <span
                                    class="pull-right col_3">Since last month</span></p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="analytic_2l1 bg-white">
                                <h6 class="font_14 col_3">Booked Reve</h6>
                                <h3>180 <span class="pull-right col_3"><i class="fa fa-users"></i></span></h3>
                                <p class="col_2 mb-0"><i class="fa fa-long-arrow-up"></i> 5.27% <span
                                    class="pull-right col_3">Since last month</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="row analytic_3 mt-4">
                        <div class="col-md-12">
                            <div class="analytic_3i bg-white">
                                @livewire('patient.appointment')
                            </div>
                        </div>
                    </div>
                    @include('layouts.footer')
                </main>
            </div>
        </div>
        @include('layouts.javascript')
        <script>
            //================ Line chart With Multiple Lines ========
            
            var xValues = [100, 200, 300, 400, 500, 600, 700, 800, 900, 1000];
            
            new Chart("multipleLineChart", {
                labels: 'Multiple Line Chart',
                type: "line",
                data: {
                    labels: xValues,
                    datasets: [{
                        label: 'India',
                        data: [860, 1140, 1060, 1060, 1070, 1110, 1330, 2210, 7830, 2478],
                        borderColor: "red",
                        fill: false
                    }, {
                        label: 'US',
                        data: [1600, 1700, 1700, 1900, 2000, 2700, 4000, 5000, 6000, 7000],
                        borderColor: "green",
                        fill: false
                    }, {
                        label: 'China',
                        data: [300, 700, 2000, 5000, 6000, 4000, 2000, 1000, 200, 100],
                        borderColor: "blue",
                        fill: false
                    }]
                },
                options: {
                    legend: {
                        display: false
                    }
                }
            });
            
            
            
            
            //============== Bar Chart Single Dataset ============
            
            var xValuesBarSingle = ["Italy", "France", "Spain", "USA", "Argentina"];
            var yValuesBarSingle = [55, 49, 44, 24, 15];
            var barColors = ["red", "green", "blue", "orange", "brown"];
            
            new Chart("barSingleChart", {
                type: "bar",
                data: {
                    labels: xValuesBarSingle,
                    datasets: [{
                        backgroundColor: barColors,
                        data: yValuesBarSingle
                    }]
                },
                options: {}
            });
            
            
            //================ Line chart With SINGLE Line ========
            
            const labelsLine = [
                'January',
                'February',
                'March',
                'April',
                'May',
                'June',
                'July'
            ];
            
            const dataLine = {
                labels: labelsLine,
                datasets: [{
                    label: 'Products',
                    backgroundColor: "rgba(0,0,0,1.0)",
                    borderColor: "rgba(0,0,0,0.1)",
                    data: [0, 10, 5, 2, 20, 30, 45],
            
                }]
            };
            
            const config = {
                type: 'line',
                data: dataLine,
                options: {}
            };
            
            const lineChart = new Chart(
                document.getElementById('lineChart'),
                config
            );
            
            //============== Pie Chart Single Dataset ============
            
            var xValuesPieChart = ["Crome", "Firefox", "Safari", "Android", "Internet Explorer"];
            var yValuesPieChart = [55, 49, 44, 24, 15];
            var barColors = [
                "#b91d47",
                "#00aba9",
                "#2b5797",
                "#e8c3b9",
                "#1e7145"
            ];
            
            new Chart("pieChart", {
                type: "pie",
                data: {
                    labels: xValuesPieChart,
                    datasets: [{
                        backgroundColor: barColors,
                        data: yValuesPieChart
                    }]
                },
                options: {
                    title: {
                        display: true,
                        text: "Production 2022"
                    }
                }
            });
            
             //============== Pie Chart Single Dataset ============
            
            var xValuesPieChart = ["Crome", "Firefox", "Safari", "Android", "Internet Explorer"];
            var yValuesPieChart = [55, 49, 44, 24, 15];
            var barColors = [
                "#b91d47",
                "#00aba9",
                "#2b5797",
                "#e8c3b9",
                "#1e7145"
            ];
            
            new Chart("pieChart1", {
                type: "pie",
                data: {
                    labels: xValuesPieChart,
                    datasets: [{
                        backgroundColor: barColors,
                        data: yValuesPieChart
                    }]
                },
                options: {
                    title: {
                        display: true,
                        text: "Production 2022"
                    }
                }
            });
            
             //============== Pie Chart Single Dataset ============
            
            var xValuesPieChart = ["Crome", "Firefox", "Safari", "Android", "Internet Explorer"];
            var yValuesPieChart = [55, 49, 44, 24, 15];
            var barColors = [
                "#b91d47",
                "#00aba9",
                "#2b5797",
                "#e8c3b9",
                "#1e7145"
            ];
            
            new Chart("pieChart2", {
                type: "pie",
                data: {
                    labels: xValuesPieChart,
                    datasets: [{
                        backgroundColor: barColors,
                        data: yValuesPieChart
                    }]
                },
                options: {
                    title: {
                        display: true,
                        text: "Production 2022"
                    }
                }
            });
            
            
            //============== Bar Chart Multiple Datasets ============
            const dataBar = [{
                x: 'Jan',
                net: 100,
                cogs: 50,
                gm: 50
            }, {
                x: 'Feb',
                net: 120,
                cogs: 55,
                gm: 75
            }];
            const configBar = {
                type: 'bar',
                data: {
                    labels: ['Jan', 'Feb'],
                    datasets: [{
                        label: 'Net sales',
                        data: dataBar,
                        parsing: {
                            yAxisKey: 'net'
                        },
                        backgroundColor: '#232e3c',
                        borderColor: '#32455c',
                    }, {
                        label: 'Cost of goods sold',
                        data: dataBar,
                        parsing: {
                            yAxisKey: 'cogs'
                        }
                    }, {
                        label: 'Gross margin',
                        data: dataBar,
                        parsing: {
                            yAxisKey: 'gm'
                        }
                    }]
                },
            
            };
            
            const barChart = new Chart(
                document.getElementById('barChart'),
                configBar
            );
            
            
            //============== Area Chart ============
            const configArea = {
                type: 'line',
                labels: 'Area Chart',
                data: {
                    labels: ["Tokyo", "Mumbai", "Mexico City", "Shanghai", "Sao Paulo", "New York", "Karachi",
                        "Buenos Aires", "Delhi", "Moscow"
                    ],
                    datasets: [{
                            label: 'Series 1', // Name the series
                            data: [500, 50, 2424, 14040, 14141, 4111, 4544, 47, 5555,
                                6811
                            ], // Specify the data values array
                            fill: true,
                            borderColor: '#2196f3', // Add custom color border (Line)
                            backgroundColor: '#2196f3', // Add custom color background (Points and Fill)
                            borderWidth: 1 // Specify bar border width
                        },
                        {
                            label: 'Series 2', // Name the series
                            data: [1288, 88942, 44545, 7588, 99, 242, 1417, 5504, 75,
                                457
                            ], // Specify the data values array
                            fill: true,
                            borderColor: '#4CAF50', // Add custom color border (Line)
                            backgroundColor: '#4CAF50', // Add custom color background (Points and Fill)
                            borderWidth: 1 // Specify bar border width
                        }
                    ]
                },
                options: {
                    responsive: true, // Instruct chart js to respond nicely.
                    maintainAspectRatio: false, // Add to prevent default behaviour of full-width/height 
                }
            };
            
            
            const areaChart = new Chart(
                document.getElementById('areaChart'),
                configArea
            );
            
            
            // ===================== Function Chart ====================
            
            var xValuesFunction = [];
            var yValuesFunction = [];
            generateDataFunctionChart("Math.sin(x)", 0, 10, 0.5);
            
            new Chart("functionChart", {
                type: "line",
                data: {
                    labels: xValuesFunction,
                    datasets: [{
                        fill: false,
                        pointRadius: 2,
                        borderColor: "rgba(0,0,255,0.5)",
                        data: yValuesFunction
                    }]
                },
                options: {
                    legend: {
                        display: false
                    },
                    title: {
                        display: true,
                        text: "y = x * 2 + 7",
                        fontSize: 16
                    }
                }
            });
            
            function generateDataFunctionChart(value, i1, i2, step = 1) {
                for (let x = i1; x <= i2; x += step) {
                    yValuesFunction.push(eval(value));
                    xValuesFunction.push(x);
                }
            }
            
            
            // ============== Linear Graphs ==============
            
            var xValueslinear = [];
            var yValueslinear = [];
            generateData("x * 2 + 7", 0, 10, 0.5);
            
            new Chart("linearChart", {
                type: "line",
                data: {
                    labels: xValueslinear,
                    datasets: [{
                        label: 'Linear Chart',
                        fill: false,
                        pointRadius: 3,
                        borderColor: "rgba(255,0,0,0.5)",
                        data: yValueslinear
                    }]
                },
                options: {
                    legend: {
                        display: false
                    },
                    title: {
                        display: true,
                        text: "y = x * 2 + 7",
                        fontSize: 16
                    }
                }
            });
            
            function generateData(value, i1, i2, step = 1) {
                for (let x = i1; x <= i2; x += step) {
                    yValueslinear.push(eval(value));
                    xValueslinear.push(x);
                }
            }
            
            
            //============== Doughnut Chart Single Dataset ============
            
            var xValuesDoughnut = ["Italy", "France", "Spain", "USA", "Argentina"];
            var yValuesDoughnut = [55, 49, 44, 24, 15];
            var barColors = [
                "#b91d47",
                "#00aba9",
                "#2b5797",
                "#e8c3b9",
                "#1e7145"
            ];
            
            new Chart("doughnutChart", {
                type: "doughnut",
                data: {
                    labels: xValuesDoughnut,
                    datasets: [{
                        backgroundColor: barColors,
                        data: yValuesDoughnut
                    }]
                },
                options: {
                    title: {
                        display: true,
                        text: "Production 2022"
                    }
                }
            });
        </script>
    </body>
</html>