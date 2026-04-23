document.addEventListener('DOMContentLoaded', function () {
    
    // 1. Overall Maturity Gauge (RadialBar)
    var gaugeOptions = {
        series: [60], // 4.2 out of 7 is 60%
        chart: {
            type: 'radialBar',
            height: 250,
            offsetY: -20,
            sparkline: {
                enabled: true
            }
        },
        plotOptions: {
            radialBar: {
                startAngle: -90,
                endAngle: 90,
                track: {
                    background: "#e7e7e7",
                    strokeWidth: '97%',
                    margin: 5, // margin is in pixels
                    dropShadow: {
                        enabled: true,
                        top: 2,
                        left: 0,
                        color: '#999',
                        opacity: 1,
                        blur: 2
                    }
                },
                dataLabels: {
                    name: {
                        show: false
                    },
                    value: {
                        offsetY: -2,
                        fontSize: '32px',
                        fontWeight: 700,
                        color: '#0f172a',
                        formatter: function (val) {
                            return (val * 7 / 100).toFixed(1);
                        }
                    }
                }
            }
        },
        fill: {
            type: 'gradient',
            gradient: {
                shade: 'light',
                shadeIntensity: 0.4,
                inverseColors: false,
                opacityFrom: 1,
                opacityTo: 1,
                stops: [0, 50, 53, 91],
                colorStops: [
                    { offset: 0, color: '#ef4444', opacity: 1 },
                    { offset: 40, color: '#f59e0b', opacity: 1 },
                    { offset: 70, color: '#10b981', opacity: 1 },
                    { offset: 100, color: '#3b82f6', opacity: 1 }
                ]
            }
        },
        labels: ['Maturity'],
    };

    window.gaugeChart = new ApexCharts(document.querySelector("#gaugeMaturityChart"), gaugeOptions);
    window.gaugeChart.render();
    
    // Add custom absolute text below the gauge value
    setTimeout(() => {
        let gaugeEl = document.querySelector("#gaugeMaturityChart");
        let textSub = document.createElement("div");
        textSub.innerHTML = "OUT OF 7.0";
        textSub.style.position = "absolute";
        textSub.style.bottom = "10px";
        textSub.style.width = "100%";
        textSub.style.textAlign = "center";
        textSub.style.fontSize = "10px";
        textSub.style.color = "var(--text-muted)";
        textSub.style.fontWeight = "600";
        textSub.style.left = "0";
        gaugeEl.style.position = "relative";
        gaugeEl.appendChild(textSub);
    }, 500);


    // 2. Capability Dimensions (Radar Chart)
    var radarOptions = {
        series: [{
            name: 'Current Score',
            data: [3.5, 4.0, 3.8, 4.5, 4.2, 3.0, 4.8, 3.2, 4.1],
        }, {
            name: 'Target',
            data: [5, 5, 5, 5, 5, 5, 5, 5, 5],
        }],
        chart: {
            height: 350,
            type: 'radar',
            toolbar: { show: false },
            dropShadow: {
                enabled: true,
                blur: 1,
                left: 1,
                top: 1
            }
        },
        stroke: {
            width: 2,
            curve: 'smooth'
        },
        fill: {
            opacity: [0.4, 0.1]
        },
        markers: {
            size: 3,
            hover: { size: 5 }
        },
        colors: ['#3b82f6', '#94a3b8'],
        xaxis: {
            categories: ['Culture', 'Leadership', 'Employees', 'Customer Int.', 'Products', 'Operations', 'Data Gov.', 'Tech Infra.', 'Environment'],
            labels: {
                style: {
                    colors: Array(9).fill('#64748b'),
                    fontSize: '10px',
                    fontFamily: 'Inter, sans-serif'
                }
            }
        },
        yaxis: {
            show: false,
            min: 0,
            max: 6,
            tickAmount: 6
        },
        legend: {
            position: 'bottom',
            markers: { radius: 12 },
            itemMargin: { horizontal: 10, vertical: 0 }
        }
    };

    window.radarChart = new ApexCharts(document.querySelector("#radarDimensionsChart"), radarOptions);
    window.radarChart.render();

    // 3. Maturity Progression (Line Chart)
    var progressionOptions = {
        series: [{
            name: 'Maturity Score',
            data: [2.1, 2.5, 3.0, 3.2, 3.8, 4.2]
        }],
        chart: {
            type: 'area',
            height: 250,
            toolbar: { show: false }
        },
        stroke: {
            curve: 'smooth',
            width: 3
        },
        colors: ['#3b82f6'],
        fill: {
            type: 'gradient',
            gradient: {
                shadeIntensity: 1,
                opacityFrom: 0.4,
                opacityTo: 0.05,
                stops: [0, 100]
            }
        },
        markers: {
            size: 5,
            colors: ['#fff'],
            strokeColors: '#3b82f6',
            strokeWidth: 2,
        },
        dataLabels: {
            enabled: false
        },
        xaxis: {
            categories: ['Q1 2021', 'Q4 2021', 'Q1 2022', 'Q4 2022', 'Q1 2023', 'Q4 2023'],
            axisBorder: { show: false },
            axisTicks: { show: false },
            labels: {
                style: { colors: '#94a3b8', fontSize: '11px' }
            }
        },
        yaxis: {
            min: 0,
            max: 7,
            tickAmount: 7,
            labels: {
                style: { colors: '#94a3b8', fontSize: '11px' }
            }
        },
        grid: {
            borderColor: '#f1f5f9',
            strokeDashArray: 4,
            xaxis: { lines: { show: true } },
            yaxis: { lines: { show: true } },
            padding: { top: 0, right: 0, bottom: 0, left: 10 }
        }
    };

    var progressionChart = new ApexCharts(document.querySelector("#progressionLineChart"), progressionOptions);
    progressionChart.render();


    // 4. Industry Benchmark (Bar Chart)
    var benchmarkOptions = {
        series: [{
            name: 'Your Organization',
            data: [4.1, 3.5, 4.5]
        }, {
            name: 'Industry Avg',
            data: [3.6, 3.8, 3.9]
        }],
        chart: {
            type: 'bar',
            height: 250,
            toolbar: { show: false }
        },
        plotOptions: {
            bar: {
                horizontal: false,
                columnWidth: '55%',
                borderRadius: 2,
            },
        },
        dataLabels: { enabled: false },
        stroke: {
            show: true,
            width: 2,
            colors: ['transparent']
        },
        colors: ['#0f172a', '#cbd5e1'],
        xaxis: {
            categories: ['Org Readiness', 'Tech Readiness', 'Processes'],
            axisBorder: { show: false },
            axisTicks: { show: false },
            labels: {
                style: { colors: '#64748b', fontSize: '11px', fontWeight: 500 }
            }
        },
        yaxis: {
            min: 0,
            max: 6,
            tickAmount: 3,
            labels: {
                style: { colors: '#94a3b8', fontSize: '11px' }
            }
        },
        grid: {
            borderColor: '#f1f5f9',
            strokeDashArray: 4,
            yaxis: { lines: { show: true } }
        },
        legend: {
            position: 'top',
            horizontalAlign: 'center',
            markers: { radius: 2 }
        }
    };

    var benchmarkChart = new ApexCharts(document.querySelector("#benchmarkBarChart"), benchmarkOptions);
    benchmarkChart.render();

    if (typeof app !== 'undefined') {
        app.refreshDashboardScores();
    }
});
