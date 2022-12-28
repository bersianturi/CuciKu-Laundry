<script type="text/javascript">
    (function($) {
        $(function() {
            $('.money').mask('#.##0', {
                reverse: true
            });
            $('.phone').mask('000-0000-00000');
        });
    })(jQuery);
</script>
<script src="<?= base_url('assets') ?>/dashboard/js/core/jquery-3.6.1.min.js" type="text/javascript"></script>
<script src="<?= base_url('assets') ?>/dashboard/js/core/popper.min.js" type="text/javascript"></script>
<script src="<?= base_url('assets') ?>/dashboard/js/core/bootstrap.min.js" type="text/javascript"></script>
<script src="<?= base_url('assets') ?>/dashboard/js/plugins/perfect-scrollbar.min.js"></script>
<script src="<?= base_url('assets') ?>/dashboard/js/plugins/chartjs.min.js"></script>
<script>
    var ctx1 = document.getElementById("chart-line").getContext("2d");

    var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);

    gradientStroke1.addColorStop(1, 'rgba(94, 114, 228, 0.2)');
    gradientStroke1.addColorStop(0.2, 'rgba(94, 114, 228, 0.0)');
    gradientStroke1.addColorStop(0, 'rgba(94, 114, 228, 0)');
    new Chart(ctx1, {
        type: "line",
        data: {
            labels: ["Apr", "Mei", "Jun", "Jul", "Agu", "Sep", "Okt", "Nov", "Des"],
            datasets: [{
                label: "Penjualan",
                tension: 0.4,
                borderWidth: 0,
                pointRadius: 0,
                borderColor: "#23aae1",
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
<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
<script src="<?= base_url('assets') ?>/dashboard/js/argon-dashboard.min.js?v=2.0.4"></script>
</body>

</html>