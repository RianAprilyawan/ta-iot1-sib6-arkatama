@extends ('layouts.dashboard')

@section('content')
    <div class="card iq-mb-3">
        <div class="card-body">
            <h4 class="card-title"> Monitoring Data Sensor</h4>
            <p class="card-text">Grafik berikut merupakan grafik dari data sensor 3 menit terakhir.
            </p>

            <div id="monitoringGas"></div>

            <p class="card-text"><small class="text-muted">Last Update 3 mins ago</small></p>
        </div>
    </div>
@endsection
@push('scripts')
<script src="https://code.highcharts.com/highcharts.js"></script>

<script>
let chartGas; // global

/**
 * Request data from the server, add it to the graph and set a timeout to
 * request again
 */
async function requestData() {
    const result = await fetch('https://demo-live-data.highcharts.com/time-rows.json');
    if (result.ok) {
        const data = await result.json();

        const [date, value] = data[0];
        const point = [new Date(date).getTime(), value * 10];
        const series = chartGas.series[0],
            shift = series.data.length > 20; // shift if the series is
            // longer than 20

        // add the point
        chartGas.series[0].addPoint(point, true, shift);
        // call it again after one second
        setTimeout(requestData, 1000);
    }
}

window.addEventListener('load', function () {
    chartGas = new Highcharts.Chart({
        chart: {
            renderTo: 'monitoringGas',
            defaultSeriesType: 'spline',
            events: {
                load: requestData
            }
        },
        title: {
            text: 'Live random data'
        },
        xAxis: {
            type: 'datetime',
            tickPixelInterval: 150,
            maxZoom: 20 * 1000
        },
        yAxis: {
            minPadding: 0.2,
            maxPadding: 0.2,
            title: {
                text: 'Value',
                margin: 80
            }
        },
        series: [{
            name: 'Random data',
            data: []
        }]
    });
});

</script>

@endpush
