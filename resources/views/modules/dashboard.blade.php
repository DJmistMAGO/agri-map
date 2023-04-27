@extends('layouts.app-content')

@section('title')
    Dashboard
@endsection

@section('content')
    <div class="row">
        <div class="col-md-6 mt-2">
            <div class="card card-custom card-stretch">
                <div class="card-header" style="background-color: #2a969a">
                    <div class="card-title">
                        <h3 class="card-label text-white">SOIL PH</h3>
                    </div>
                </div>
                <div class="card-body">
                    <div id="soilPh">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 mt-2">
            <div class="card card-custom card-stretch">
                <div class="card-header" style="background-color: #a8602c">
                    <div class="card-title">
                        <h3 class="card-label text-white">SOIL TYPE</h3>
                    </div>
                </div>
                <div class="card-body">
                    <div id="soilType">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script>
        var options = {
            series: [
                {{ $very_dry }},
                {{ $dry }},
                {{ $moist }},
                {{ $wet }},
                {{ $very_wet }},
            ],
            chart: {
                type: 'pie',
            },
            labels: ['Very Acidic', 'Acidic', 'Slightly Acidic', 'Nearly Acidic', 'Slightly Alkaline',
                'Alkaline to Very Alkaline',
            ],
            legend: {
                position: "bottom",
                verticalAlign: "top",
            },
        };
        var chart = new ApexCharts(document.querySelector("#soilPh"), options);
        chart.render();
    </script>
    <script>
        var options = {
            chart: {
                type: 'bar'
            },
            plotOptions: {
                bar: {
                    horizontal: true
                }
            },
            series: [{
                data: [{
                        x: 'Macabare Sandy Loam',
                        y: {{ $macabare }}
                    },
                    {
                        x: 'Beach Sand',
                        y: {{ $beach }}
                    }, {
                        x: 'Bulusan Sandy Loam',
                        y: {{ $bulusan }}
                    }, {
                        x: 'Bascaran Sandy Loam',
                        y: {{ $bascaran }}
                    },
                    {
                        x: 'Ubay Clay Loam',
                        y: {{ $ubay }}
                    },
                    {
                        x: 'Silay Fine Sandy Loam',
                        y: {{ $silay }}
                    }
                ]
            }]
        }
        var chart = new ApexCharts(document.querySelector("#soilType"), options);
        chart.render();
    </script>
@endpush
