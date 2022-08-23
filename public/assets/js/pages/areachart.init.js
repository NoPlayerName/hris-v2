function getChartColorsArray(e) {
    if (null !== document.getElementById(e)) {
        var r = document.getElementById(e).getAttribute("data-colors");
        if (r) return (r = JSON.parse(r)).map(function(e) {
            var r = e.replace(" ", "");
            if (-1 === r.indexOf(",")) {
                var t = getComputedStyle(document.documentElement).getPropertyValue(r);
                return t || r
            }
            e = e.split(",");
            return 2 != e.length ? r : "rgba(" + getComputedStyle(document.documentElement).getPropertyValue(e[0]) + "," + e[1] + ")"
        });
        console.warn("data-colors atributes not found on", e)
    }
}
var areachartmini1Colors = getChartColorsArray("mini-chart-1");
areachartmini1Colors && (options1 = {
    series: [{
        data: [25, 66, 41, 89, 63, 25, 44, 12]
    }],
    chart: {
        type: "line",
        width: 80,
        height: 30,
        sparkline: {
            enabled: !0
        }
    },
    colors: areachartmini1Colors,
    stroke: {
        curve: "smooth",
        width: 2.3
    },
    tooltip: {
        fixed: {
            enabled: !1
        },
        x: {
            show: !1
        },
        y: {
            title: {
                formatter: function(e) {
                    return ""
                }
            }
        },
        marker: {
            show: !1
        }
    }
}, (chart1 = new ApexCharts(document.querySelector("#mini-chart-1"), options1)).render());
var areachartmini2Colors = getChartColorsArray("mini-chart-2");
areachartmini2Colors && (options1 = {
    series: [{
        data: [50, 15, 35, 62, 23, 56, 44, 12]
    }],
    chart: {
        type: "line",
        width: 80,
        height: 30,
        sparkline: {
            enabled: !0
        }
    },
    colors: areachartmini2Colors,
    stroke: {
        curve: "smooth",
        width: 2.3
    },
    tooltip: {
        fixed: {
            enabled: !1
        },
        x: {
            show: !1
        },
        y: {
            title: {
                formatter: function(e) {
                    return ""
                }
            }
        },
        marker: {
            show: !1
        }
    }
}, (chart1 = new ApexCharts(document.querySelector("#mini-chart-2"), options1)).render());
var areachartmini3Colors = getChartColorsArray("mini-chart-3");
areachartmini3Colors && (options1 = {
    series: [{
        data: [25, 35, 35, 89, 63, 25, 44, 12]
    }],
    chart: {
        type: "line",
        width: 80,
        height: 30,
        sparkline: {
            enabled: !0
        }
    },
    colors: areachartmini3Colors,
    stroke: {
        curve: "smooth",
        width: 2.3
    },
    tooltip: {
        fixed: {
            enabled: !1
        },
        x: {
            show: !1
        },
        y: {
            title: {
                formatter: function(e) {
                    return ""
                }
            }
        },
        marker: {
            show: !1
        }
    }
}, (chart1 = new ApexCharts(document.querySelector("#mini-chart-3"), options1)).render());
var areachartmini4Colors = getChartColorsArray("mini-chart-4");
areachartmini4Colors && (options1 = {
    series: [{
        data: [50, 15, 20, 34, 23, 56, 65, 41]
    }],
    chart: {
        type: "line",
        width: 80,
        height: 30,
        sparkline: {
            enabled: !0
        }
    },
    colors: areachartmini4Colors,
    stroke: {
        curve: "smooth",
        width: 2.3
    },
    tooltip: {
        fixed: {
            enabled: !1
        },
        x: {
            show: !1
        },
        y: {
            title: {
                formatter: function(e) {
                    return ""
                }
            }
        },
        marker: {
            show: !1
        }
    }
}, (chart1 = new ApexCharts(document.querySelector("#mini-chart-4"), options1)).render());
var areachartmini5Colors = getChartColorsArray("mini-chart-5");
areachartmini5Colors && (options1 = {
    series: [{
        data: [45, 53, 24, 89, 63, 60, 36, 50]
    }],
    chart: {
        type: "line",
        width: 80,
        height: 30,
        sparkline: {
            enabled: !0
        }
    },
    colors: areachartmini5Colors,
    stroke: {
        curve: "smooth",
        width: 2.3
    },
    tooltip: {
        fixed: {
            enabled: !1
        },
        x: {
            show: !1
        },
        y: {
            title: {
                formatter: function(e) {
                    return ""
                }
            }
        },
        marker: {
            show: !1
        }
    }
}, (chart1 = new ApexCharts(document.querySelector("#mini-chart-5"), options1)).render());
var areachartmini6Colors = getChartColorsArray("mini-chart-6");
areachartmini6Colors && (options1 = {
    series: [{
        data: [50, 15, 35, 62, 23, 56, 44, 12]
    }],
    chart: {
        type: "line",
        width: 80,
        height: 30,
        sparkline: {
            enabled: !0
        }
    },
    colors: areachartmini6Colors,
    stroke: {
        curve: "smooth",
        width: 2.3
    },
    tooltip: {
        fixed: {
            enabled: !1
        },
        x: {
            show: !1
        },
        y: {
            title: {
                formatter: function(e) {
                    return ""
                }
            }
        },
        marker: {
            show: !1
        }
    }
}, (chart1 = new ApexCharts(document.querySelector("#mini-chart-6"), options1)).render());
var areachartmini7Colors = getChartColorsArray("mini-chart-7");
areachartmini7Colors && (options1 = {
    series: [{
        data: [50, 15, 20, 34, 23, 56, 65, 41]
    }],
    chart: {
        type: "line",
        width: 80,
        height: 30,
        sparkline: {
            enabled: !0
        }
    },
    colors: areachartmini7Colors,
    stroke: {
        curve: "smooth",
        width: 2.3
    },
    tooltip: {
        fixed: {
            enabled: !1
        },
        x: {
            show: !1
        },
        y: {
            title: {
                formatter: function(e) {
                    return ""
                }
            }
        },
        marker: {
            show: !1
        }
    }
}, (chart1 = new ApexCharts(document.querySelector("#mini-chart-7"), options1)).render());
var options1, chart1, areachartmini8Colors = getChartColorsArray("mini-chart-8");
areachartmini8Colors && (options1 = {
    series: [{
        data: [45, 53, 24, 89, 63, 60, 36, 50]
    }],
    chart: {
        type: "line",
        width: 80,
        height: 30,
        sparkline: {
            enabled: !0
        }
    },
    colors: areachartmini8Colors,
    stroke: {
        curve: "smooth",
        width: 2.3
    },
    tooltip: {
        fixed: {
            enabled: !1
        },
        x: {
            show: !1
        },
        y: {
            title: {
                formatter: function(e) {
                    return ""
                }
            }
        },
        marker: {
            show: !1
        }
    }
}, (chart1 = new ApexCharts(document.querySelector("#mini-chart-8"), options1)).render());
var dealTypeChartsColors = getChartColorsArray("deal-type-charts");
dealTypeChartsColors && (options = {
    series: [{
        name: "Ethereum",
        data: [80, 50, 30, 40, 100, 20]
    }, {
        name: "Artwork Sold",
        data: [20, 30, 40, 80, 20, 80]
    }, {
        name: "Cancelation",
        data: [44, 76, 78, 13, 43, 10]
    }],
    chart: {
        height: 270,
        type: "radar",
        dropShadow: {
            enabled: !0,
            blur: 1,
            left: 1,
            top: 1
        },
        toolbar: {
            show: !1
        }
    },
    stroke: {
        width: 2
    },
    fill: {
        opacity: .2
    },
    legend: {
        show: !1,
        fontWeight: 500,
        offsetX: 0,
        offsetY: -8,
        markers: {
            width: 8,
            height: 8,
            radius: 6
        },
        itemMargin: {
            horizontal: 10,
            vertical: 0
        }
    },
    markers: {
        size: 0
    },
    colors: dealTypeChartsColors,
    xaxis: {
        categories: ["2016", "2017", "2018", "2019", "2020", "2021"]
    }
}, (chart = new ApexCharts(document.querySelector("#deal-type-charts"), options)).render());
var swiper = new Swiper(".marketplace-swiper", {
        loop: !0,
        slidesPerView: 1,
        spaceBetween: 10,
        pagination: {
            el: ".swiper-pagination",
            clickable: !0
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev"
        },
        autoplay: {
            delay: 2500,
            disableOnInteraction: !1
        },
        breakpoints: {
            640: {
                slidesPerView: 2,
                spaceBetween: 20
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 24
            },
            1445: {
                slidesPerView: 3,
                spaceBetween: 24
            }
        }
    }),
    swiper = new Swiper(".collection-slider", {
        loop: !0,
        slidesPerView: 1,
        spaceBetween: 10,
        pagination: {
            el: ".swiper-pagination",
            clickable: !0
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev"
        },
        autoplay: {
            delay: 2500,
            disableOnInteraction: !1
        }
    }),
    barchartColors = getChartColorsArray("market-overview");
barchartColors && (options = {
    series: [{
        name: "Like",
        data: [12.45, 16.2, 8.9, 11.42, 12.6, 18.1, 18.2, 14.16]
    }, {
        name: "Share",
        data: [-11.45, -15.42, -7.9, -12.42, -12.6, -18.1, -18.2, -14.16]
    }],
    chart: {
        type: "bar",
        height: 260,
        stacked: !0,
        toolbar: {
            show: !1
        }
    },
    plotOptions: {
        bar: {
            columnWidth: "20%",
            borderRadius: [4, 4]
        }
    },
    colors: barchartColors,
    fill: {
        opacity: 1
    },
    dataLabels: {
        enabled: !1,
        textAnchor: "top"
    },
    yaxis: {
        labels: {
            show: !1,
            formatter: function(e) {
                return e.toFixed(0) + "%"
            }
        }
    },
    legend: {
        position: "top",
        horizontalAlign: "right"
    },
    xaxis: {
        categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug"],
        labels: {
            rotate: -90
        }
    }
}, (chart = new ApexCharts(document.querySelector("#market-overview"), options)).render());
var options, chart, linechartBasicColors = getChartColorsArray("line_chart_basic");
linechartBasicColors && (options = {
    series: [{
        name: "Turnover 2022",
        data: [10, 41, 35, 51, 49, 62, 69, 91, 108, 98, 90, 98]
    }, {
        name: "Turnover 2021",
        data: [40, 100, 83, 45, 31, 74, 35, 34, 78, 86, 86, 90]
    }],
    chart: {
        height: 350,
        type: "line",
        zoom: {
            enabled: !1
        },
        toolbar: {
            show: !1
        }
    },
    dataLabels: {
        enabled: !1
    },
    stroke: {
        curve: "smooth",
        width: 3
    },
    colors: linechartBasicColors,
    xaxis: {
        categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"]
    }
}, (chart = new ApexCharts(document.querySelector("#line_chart_basic"), options)).render());
var worldemapmarkers, vectorMapWorldMarkersColors = getChartColorsArray("creators-by-locations");
vectorMapWorldMarkersColors && (worldemapmarkers = new jsVectorMap({
    map: "world_merc",
    selector: "#creators-by-locations",
    zoomOnScroll: !1,
    zoomButtons: !1,
    selectedMarkers: [0, 5],
    regionStyle: {
        initial: {
            stroke: "#9599ad",
            strokeWidth: .25,
            fill: vectorMapWorldMarkersColors[0],
            fillOpacity: 1
        }
    },
    markersSelectable: !0,
    markers: [{
        name: "United States",
        coords: [37.0902, 95.7129],
        style: {
            image: "assets/images/flags/us.svg"
        }
    }, {
        name: "Russia",
        coords: [61.524, 105.3188],
        style: {
            image: "assets/images/flags/russia.svg"
        }
    }, {
        name: "Spain",
        coords: [40.4637, 3.7492],
        style: {
            image: "assets/images/flags/spain.svg"
        }
    }, {
        name: "Italy",
        coords: [41.8719, 12.5674],
        style: {
            image: "assets/images/flags/italy.svg"
        }
    }, {
        name: "Germany",
        coords: [51.1657, 10.4515],
        style: {
            image: "assets/images/flags/germany.svg"
        }
    }],
    markerStyle: {
        initial: {
            fill: vectorMapWorldMarkersColors[1]
        },
        selected: {
            fill: vectorMapWorldMarkersColors[2]
        }
    },
    labels: {
        markers: {
            render: function(e) {
                return e.name
            }
        }
    }
}));
function getChartColorsArray(e) {
    if (null !== document.getElementById(e)) {
        var r = document.getElementById(e).getAttribute("data-colors");
        if (r) return (r = JSON.parse(r)).map(function(e) {
            var r = e.replace(" ", "");
            if (-1 === r.indexOf(",")) {
                var t = getComputedStyle(document.documentElement).getPropertyValue(r);
                return t || r
            }
            e = e.split(",");
            return 2 != e.length ? r : "rgba(" + getComputedStyle(document.documentElement).getPropertyValue(e[0]) + "," + e[1] + ")"
        });
        console.warn("data-colors atributes not found on", e)
    }
}
var linechartcustomerColors = getChartColorsArray("customer_impression_charts");
linechartcustomerColors && (options = {
    series: [{
        name: "Orders",
        type: "area",
        data: [34, 65, 46, 68, 49, 61, 42, 44, 78, 52, 63, 67]
    }, {
        name: "Earnings",
        type: "bar",
        data: [89.25, 98.58, 68.74, 108.87, 77.54, 84.03, 51.24, 28.57, 92.57, 42.36, 88.51, 36.57]
    }, {
        name: "Refunds",
        type: "line",
        data: [8, 12, 7, 17, 21, 11, 5, 9, 7, 29, 12, 35]
    }],
    chart: {
        height: 370,
        type: "line",
        toolbar: {
            show: !1
        }
    },
    stroke: {
        curve: "straight",
        dashArray: [0, 0, 8],
        width: [2, 0, 2.2]
    },
    fill: {
        opacity: [.1, .9, 1]
    },
    markers: {
        size: [0, 0, 0],
        strokeWidth: 2,
        hover: {
            size: 4
        }
    },
    xaxis: {
        categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        axisTicks: {
            show: !1
        },
        axisBorder: {
            show: !1
        }
    },
    grid: {
        show: !0,
        xaxis: {
            lines: {
                show: !0
            }
        },
        yaxis: {
            lines: {
                show: !1
            }
        },
        padding: {
            top: 0,
            right: -2,
            bottom: 15,
            left: 10
        }
    },
    legend: {
        show: !0,
        horizontalAlign: "center",
        offsetX: 0,
        offsetY: -5,
        markers: {
            width: 9,
            height: 9,
            radius: 6
        },
        itemMargin: {
            horizontal: 10,
            vertical: 0
        }
    },
    plotOptions: {
        bar: {
            columnWidth: "30%",
            barHeight: "70%"
        }
    },
    colors: linechartcustomerColors,
    tooltip: {
        shared: !0,
        y: [{
            formatter: function(e) {
                return void 0 !== e ? e.toFixed(0) : e
            }
        }, {
            formatter: function(e) {
                return void 0 !== e ? "$" + e.toFixed(2) + "k" : e
            }
        }, {
            formatter: function(e) {
                return void 0 !== e ? e.toFixed(0) + " Sales" : e
            }
        }]
    }
}, (chart = new ApexCharts(document.querySelector("#customer_impression_charts"), options)).render());
var options, chart, chartDonutBasicColors = getChartColorsArray("store-visits-source");
chartDonutBasicColors && (options = {
    series: [44, 55, 41],
    labels: ["Staff", "Non Staff", "Freelance"],
    chart: {
        height: 333,
        type: "donut"
    },
    legend: {
        position: "bottom"
    },
    stroke: {
        show: !1
    },
    dataLabels: {
        dropShadow: {
            enabled: !1
        }
    },
    colors: chartDonutBasicColors
}, (chart = new ApexCharts(document.querySelector("#store-visits-source"), options)).render());
var worldemapmarkers, vectorMapWorldMarkersColors = getChartColorsArray("sales-by-locations");
vectorMapWorldMarkersColors && (worldemapmarkers = new jsVectorMap({
    map: "world_merc",
    selector: "#sales-by-locations",
    zoomOnScroll: !1,
    zoomButtons: !1,
    selectedMarkers: [0, 5],
    regionStyle: {
        initial: {
            stroke: "#9599ad",
            strokeWidth: .25,
            fill: vectorMapWorldMarkersColors[0],
            fillOpacity: 1
        }
    },
    markersSelectable: !0,
    markers: [{
        name: "Palestine",
        coords: [31.9474, 35.2272]
    }, {
        name: "Russia",
        coords: [61.524, 105.3188]
    }, {
        name: "Canada",
        coords: [56.1304, -106.3468]
    }, {
        name: "Greenland",
        coords: [71.7069, -42.6043]
    }],
    markerStyle: {
        initial: {
            fill: vectorMapWorldMarkersColors[1]
        },
        selected: {
            fill: vectorMapWorldMarkersColors[2]
        }
    },
    labels: {
        markers: {
            render: function(e) {
                return e.name
            }
        }
    }
}));
var overlay, swiper = new Swiper(".vertical-swiper", {
        slidesPerView: 2,
        spaceBetween: 10,
        mousewheel: !0,
        loop: !0,
        direction: "vertical",
        autoplay: {
            delay: 2500,
            disableOnInteraction: !1
        }
    }),
    layoutRightSideBtn = document.querySelector(".layout-rightside-btn");
layoutRightSideBtn && (Array.from(document.querySelectorAll(".layout-rightside-btn")).forEach(function(e) {
    var r = document.querySelector(".layout-rightside-col");
    e.addEventListener("click", function() {
        r.classList.contains("d-block") ? (r.classList.remove("d-block"), r.classList.add("d-none")) : (r.classList.remove("d-none"), r.classList.add("d-block"))
    })
}), window.addEventListener("resize", function() {
    var e = document.querySelector(".layout-rightside-col");
    e && Array.from(document.querySelectorAll(".layout-rightside-btn")).forEach(function() {
        window.outerWidth < 1699 || 3440 < window.outerWidth ? e.classList.remove("d-block") : 1699 < window.outerWidth && e.classList.add("d-block")
    })
}), (overlay = document.querySelector(".overlay")) && document.querySelector(".overlay").addEventListener("click", function() {
    1 == document.querySelector(".layout-rightside-col").classList.contains("d-block") && document.querySelector(".layout-rightside-col").classList.remove("d-block")
})), window.addEventListener("load", function() {
    var e = document.querySelector(".layout-rightside-col");
    e && Array.from(document.querySelectorAll(".layout-rightside-btn")).forEach(function() {
        window.outerWidth < 1699 || 3440 < window.outerWidth ? e.classList.remove("d-block") : 1699 < window.outerWidth && e.classList.add("d-block")
    })
});