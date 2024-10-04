<script src="{{ asset('../../be/assets/js/jquery.js') }}"></script>
<script src="{{ asset('../../be/assets/js/core/popper.min.js') }}"></script>
<script src="{{ asset('../../be/assets/js/core/bootstrap.min.js') }}"></script>
<script src="{{ asset('../../be/assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
<script src="{{ asset('../../be/assets/js/plugins/smooth-scrollbar.min.js') }}"></script>
<script src="{{ asset('../../be/assets/js/plugins/choices.min.js') }}"></script>
<script src="{{ asset('../../be/assets/js/plugins/dragula/dragula.min.js') }}"></script>
<script src="{{ asset('../../be/assets/js/plugins/jkanban/jkanban.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
{{-- <script src="https://demos.creative-tim.com/test/argon-dashboard-pro/assets/js/plugins/datatables.js" type="text/javascript"></script> --}}
<script src="{{ asset('../../be/assets/js/plugins/chartjs.min.js') }}"></script>
<script src="{{ asset('../../be/assets/js/plugins/countup.min.js') }}"></script>
<script src="{{ asset('../../be/assets/js/plugins/round-slider.min.js') }}"></script>

<script>
    // Rounded slider
    const setValue = function(value, active) {
        document.querySelectorAll("round-slider").forEach(function(el) {
            if (el.value === undefined) return;
            el.value = value;
        });
        const span = document.querySelector("#value");
        span.innerHTML = value;
        if (active) span.style.color = "red";
        else span.style.color = "black";
    };

    document.querySelectorAll("round-slider").forEach(function(el) {
        el.addEventListener("value-changed", function(ev) {
            if (ev.detail.value !== undefined) setValue(ev.detail.value, false);
            else if (ev.detail.low !== undefined) setLow(ev.detail.low, false);
            else if (ev.detail.high !== undefined) setHigh(ev.detail.high, false);
        });

        el.addEventListener("value-changing", function(ev) {
            if (ev.detail.value !== undefined) setValue(ev.detail.value, true);
            else if (ev.detail.low !== undefined) setLow(ev.detail.low, true);
            else if (ev.detail.high !== undefined) setHigh(ev.detail.high, true);
        });
    });

    // Count To
    if (document.getElementById("status1")) {
        const countUp = new CountUp(
            "status1",
            document.getElementById("status1").getAttribute("countTo")
        );
        if (!countUp.error) {
            countUp.start();
        } else {
            console.error(countUp.error);
        }
    }
    if (document.getElementById("status2")) {
        const countUp = new CountUp(
            "status2",
            document.getElementById("status2").getAttribute("countTo")
        );
        if (!countUp.error) {
            countUp.start();
        } else {
            console.error(countUp.error);
        }
    }
    if (document.getElementById("status3")) {
        const countUp = new CountUp(
            "status3",
            document.getElementById("status3").getAttribute("countTo")
        );
        if (!countUp.error) {
            countUp.start();
        } else {
            console.error(countUp.error);
        }
    }
    if (document.getElementById("status4")) {
        const countUp = new CountUp(
            "status4",
            document.getElementById("status4").getAttribute("countTo")
        );
        if (!countUp.error) {
            countUp.start();
        } else {
            console.error(countUp.error);
        }
    }
    if (document.getElementById("status5")) {
        const countUp = new CountUp(
            "status5",
            document.getElementById("status5").getAttribute("countTo")
        );
        if (!countUp.error) {
            countUp.start();
        } else {
            console.error(countUp.error);
        }
    }
    if (document.getElementById("status6")) {
        const countUp = new CountUp(
            "status6",
            document.getElementById("status6").getAttribute("countTo")
        );
        if (!countUp.error) {
            countUp.start();
        } else {
            console.error(countUp.error);
        }
    }
</script>
<script>
    var ctx1 = document.getElementById("chart-line").getContext("2d");

    var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);

    gradientStroke1.addColorStop(1, 'rgba(94, 114, 228, 0.2)');
    gradientStroke1.addColorStop(0.2, 'rgba(94, 114, 228, 0.0)');
    gradientStroke1.addColorStop(0, 'rgba(94, 114, 228, 0)');
    new Chart(ctx1, {
        type: "line",
        data: {
            labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            datasets: [{
                label: "Mobile apps",
                tension: 0.4,
                borderWidth: 0,
                pointRadius: 0,
                borderColor: "#5e72e4",
                backgroundColor: gradientStroke1,
                borderWidth: 3,
                fill: true,
                data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
                maxBarThickness: 6

            }],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false,
                }
            },
            interaction: {
                intersect: false,
                mode: 'index',
            },
            scales: {
                y: {
                    grid: {
                        drawBorder: false,
                        display: true,
                        drawOnChartArea: true,
                        drawTicks: false,
                        borderDash: [5, 5]
                    },
                    ticks: {
                        display: true,
                        padding: 10,
                        color: '#fbfbfb',
                        font: {
                            size: 11,
                            family: "Open Sans",
                            style: 'normal',
                            lineHeight: 2
                        },
                    }
                },
                x: {
                    grid: {
                        drawBorder: false,
                        display: false,
                        drawOnChartArea: false,
                        drawTicks: false,
                        borderDash: [5, 5]
                    },
                    ticks: {
                        display: true,
                        color: '#ccc',
                        padding: 20,
                        font: {
                            size: 11,
                            family: "Open Sans",
                            style: 'normal',
                            lineHeight: 2
                        },
                    }
                },
            },
        },
    });
</script>
<script>
    var win = navigator.platform.indexOf("Win") > -1;
    if (win && document.querySelector("#sidenav-scrollbar")) {
        var options = {
            damping: "0.5",
        };
        Scrollbar.init(document.querySelector("#sidenav-scrollbar"), options);
    }
</script>

<script async defer src="{{ asset('../../be/assets/buttons.github.io/buttons.js') }}"></script>

<script src="{{ asset('../../be/assets/js/argon-dashboard.min9c7f.js?v=2.0.5') }}"></script>


@stack('script')
