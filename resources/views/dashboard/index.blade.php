@extends('layout.index')

@section('content')
    {{-- <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header> --}}
    <div class="page-heading">
        <h3>Profile Statistics</h3>
    </div>
    <div class="page-content">
        <section class="row">
            <div class="row-12 col-lg-9">
                <div class="row">
                    @if (auth()->user()->role == 'admin')
                        <div class="col-6 col-lg-3 col-md-6">
                            <div class="card">
                                <div class="card-body px-4 py-4-5">
                                    <div class="row">
                                        <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                                            <div class="stats-icon purple mb-2">
                                                👨‍💻
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                            <h6 class="text-muted font-semibold">
                                                Pegawai
                                            </h6>
                                            <h6 class="font-extrabold mb-0">{{ $pegawai }}</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body px-4 py-4-5">
                                <div class="row">
                                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                                        <div class="stats-icon blue mb-2">
                                            🛒
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                        <h6 class="text-muted font-semibold">Menu</h6>
                                        <h6 class="font-extrabold mb-0">{{ $menu }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body px-4 py-4-5">
                                <div class="row">
                                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                                        <div class="stats-icon green mb-2">
                                            <i class="iconly-boldAdd-User"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                        <h6 class="text-muted font-semibold">?</h6>
                                        <h6 class="font-extrabold mb-0"></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body px-4 py-4-5">
                                <div class="row">
                                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                                        <div class="stats-icon red mb-2">
                                            <i class="iconly-boldBookmark"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                        <h6 class="text-muted font-semibold">?</h6>
                                        <h6 class="font-extrabold mb-0"></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Grafik Penjualan</h4>
                            </div>
                            <div class="card-body">
                                <div id="chart-profile-visit" style="min-height: 315px;">
                                    <div id="apexchartstef8oydv"
                                        class="apexcharts-canvas apexchartstef8oydv apexcharts-theme-light"
                                        style="width: 783px; height: 300px;"><svg id="SvgjsSvg3301" width="783"
                                            height="300" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                            class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                            style="background: transparent;">
                                            <g id="SvgjsG3303" class="apexcharts-inner apexcharts-graphical"
                                                transform="translate(39.25, 30)">
                                                <defs id="SvgjsDefs3302">
                                                    <linearGradient id="SvgjsLinearGradient3307" x1="0"
                                                        y1="0" x2="0" y2="1">
                                                        <stop id="SvgjsStop3308" stop-opacity="0.4"
                                                            stop-color="rgba(216,227,240,0.4)" offset="0"></stop>
                                                        <stop id="SvgjsStop3309" stop-opacity="0.5"
                                                            stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                                        <stop id="SvgjsStop3310" stop-opacity="0.5"
                                                            stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                                    </linearGradient>
                                                    <clipPath id="gridRectMasktef8oydv">
                                                        <rect id="SvgjsRect3312" width="737.75" height="232.348"
                                                            x="-2" y="0" rx="0" ry="0"
                                                            opacity="1" stroke-width="0" stroke="none"
                                                            stroke-dasharray="0" fill="#fff">
                                                        </rect>
                                                    </clipPath>
                                                    <clipPath id="forecastMasktef8oydv"></clipPath>
                                                    <clipPath id="nonForecastMasktef8oydv"></clipPath>
                                                    <clipPath id="gridRectMarkerMasktef8oydv">
                                                        <rect id="SvgjsRect3313" width="737.75" height="236.348"
                                                            x="-2" y="-2" rx="0" ry="0"
                                                            opacity="1" stroke-width="0" stroke="none"
                                                            stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                </defs>
                                                <rect id="SvgjsRect3311" width="42.80208333333334" height="232.348"
                                                    x="0" y="0" rx="0" ry="0"
                                                    opacity="1" stroke-width="0" stroke-dasharray="3"
                                                    fill="url(#SvgjsLinearGradient3307)" class="apexcharts-xcrosshairs"
                                                    y2="232.348" filter="none" fill-opacity="0.9"></rect>
                                                <line id="SvgjsLine3346" x1="0" y1="233.348" x2="0"
                                                    y2="239.348" stroke="#e0e0e0" stroke-dasharray="0"
                                                    stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                                <line id="SvgjsLine3347" x1="61.145833333333336" y1="233.348"
                                                    x2="61.145833333333336" y2="239.348" stroke="#e0e0e0"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-xaxis-tick">
                                                </line>
                                                <line id="SvgjsLine3348" x1="122.29166666666667" y1="233.348"
                                                    x2="122.29166666666667" y2="239.348" stroke="#e0e0e0"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-xaxis-tick">
                                                </line>
                                                <line id="SvgjsLine3349" x1="183.4375" y1="233.348" x2="183.4375"
                                                    y2="239.348" stroke="#e0e0e0" stroke-dasharray="0"
                                                    stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                                <line id="SvgjsLine3350" x1="244.58333333333334" y1="233.348"
                                                    x2="244.58333333333334" y2="239.348" stroke="#e0e0e0"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-xaxis-tick">
                                                </line>
                                                <line id="SvgjsLine3351" x1="305.7291666666667" y1="233.348"
                                                    x2="305.7291666666667" y2="239.348" stroke="#e0e0e0"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-xaxis-tick">
                                                </line>
                                                <line id="SvgjsLine3352" x1="366.875" y1="233.348" x2="366.875"
                                                    y2="239.348" stroke="#e0e0e0" stroke-dasharray="0"
                                                    stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                                <line id="SvgjsLine3353" x1="428.0208333333333" y1="233.348"
                                                    x2="428.0208333333333" y2="239.348" stroke="#e0e0e0"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-xaxis-tick">
                                                </line>
                                                <line id="SvgjsLine3354" x1="489.16666666666663" y1="233.348"
                                                    x2="489.16666666666663" y2="239.348" stroke="#e0e0e0"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-xaxis-tick">
                                                </line>
                                                <line id="SvgjsLine3355" x1="550.3125" y1="233.348" x2="550.3125"
                                                    y2="239.348" stroke="#e0e0e0" stroke-dasharray="0"
                                                    stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                                <line id="SvgjsLine3356" x1="611.4583333333334" y1="233.348"
                                                    x2="611.4583333333334" y2="239.348" stroke="#e0e0e0"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-xaxis-tick">
                                                </line>
                                                <line id="SvgjsLine3357" x1="672.6041666666667" y1="233.348"
                                                    x2="672.6041666666667" y2="239.348" stroke="#e0e0e0"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-xaxis-tick">
                                                </line>
                                                <line id="SvgjsLine3358" x1="733.7500000000001" y1="233.348"
                                                    x2="733.7500000000001" y2="239.348" stroke="#e0e0e0"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-xaxis-tick">
                                                </line>
                                                <g id="SvgjsG3366" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                    <g id="SvgjsG3367" class="apexcharts-xaxis-texts-g"
                                                        transform="translate(0, -4)"><text id="SvgjsText3369"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="30.572916666666668" y="261.348" text-anchor="middle"
                                                            dominant-baseline="auto" font-size="12px" font-weight="400"
                                                            fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan3370">Jan</tspan>
                                                            <title>Jan</title>
                                                        </text><text id="SvgjsText3372"
                                                            font-family="Helvetica, Arial, sans-serif" x="91.71875"
                                                            y="261.348" text-anchor="middle" dominant-baseline="auto"
                                                            font-size="12px" font-weight="400" fill="#373d3f"
                                                            class="apexcharts-text apexcharts-xaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan3373">Feb</tspan>
                                                            <title>Feb</title>
                                                        </text><text id="SvgjsText3375"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="152.86458333333334" y="261.348" text-anchor="middle"
                                                            dominant-baseline="auto" font-size="12px" font-weight="400"
                                                            fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan3376">Mar</tspan>
                                                            <title>Mar</title>
                                                        </text><text id="SvgjsText3378"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="214.01041666666669" y="261.348" text-anchor="middle"
                                                            dominant-baseline="auto" font-size="12px" font-weight="400"
                                                            fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan3379">Apr</tspan>
                                                            <title>Apr</title>
                                                        </text><text id="SvgjsText3381"
                                                            font-family="Helvetica, Arial, sans-serif" x="275.15625"
                                                            y="261.348" text-anchor="middle" dominant-baseline="auto"
                                                            font-size="12px" font-weight="400" fill="#373d3f"
                                                            class="apexcharts-text apexcharts-xaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan3382">Mei</tspan>
                                                            <title>Mei</title>
                                                        </text><text id="SvgjsText3384"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="336.3020833333333" y="261.348" text-anchor="middle"
                                                            dominant-baseline="auto" font-size="12px" font-weight="400"
                                                            fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan3385">Jun</tspan>
                                                            <title>Jun</title>
                                                        </text><text id="SvgjsText3387"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="397.44791666666663" y="261.348" text-anchor="middle"
                                                            dominant-baseline="auto" font-size="12px" font-weight="400"
                                                            fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan3388">Jul</tspan>
                                                            <title>Jul</title>
                                                        </text><text id="SvgjsText3390"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="458.59374999999994" y="261.348" text-anchor="middle"
                                                            dominant-baseline="auto" font-size="12px" font-weight="400"
                                                            fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan3391">Agu</tspan>
                                                            <title>Agu</title>
                                                        </text><text id="SvgjsText3393"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="519.7395833333334" y="261.348" text-anchor="middle"
                                                            dominant-baseline="auto" font-size="12px" font-weight="400"
                                                            fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan3394">Sep</tspan>
                                                            <title>Sep</title>
                                                        </text><text id="SvgjsText3396"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="580.8854166666667" y="261.348" text-anchor="middle"
                                                            dominant-baseline="auto" font-size="12px" font-weight="400"
                                                            fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan3397">Okt</tspan>
                                                            <title>Okt</title>
                                                        </text><text id="SvgjsText3399"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="642.0312500000001" y="261.348" text-anchor="middle"
                                                            dominant-baseline="auto" font-size="12px" font-weight="400"
                                                            fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan3400">Nov</tspan>
                                                            <title>Nov</title>
                                                        </text><text id="SvgjsText3402"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="703.1770833333335" y="261.348" text-anchor="middle"
                                                            dominant-baseline="auto" font-size="12px" font-weight="400"
                                                            fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan3403">Des</tspan>
                                                            <title>Des</title>
                                                        </text></g>
                                                </g>
                                                <g id="SvgjsG3342" class="apexcharts-grid">
                                                    <g id="SvgjsG3343" class="apexcharts-gridlines-horizontal">
                                                        <line id="SvgjsLine3360" x1="0" y1="58.087"
                                                            x2="733.75" y2="58.087" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine3361" x1="0" y1="116.174"
                                                            x2="733.75" y2="116.174" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine3362" x1="0" y1="174.26100000000002"
                                                            x2="733.75" y2="174.26100000000002" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                    </g>
                                                    <g id="SvgjsG3344" class="apexcharts-gridlines-vertical"></g>
                                                    <line id="SvgjsLine3365" x1="0" y1="232.348"
                                                        x2="733.75" y2="232.348" stroke="transparent"
                                                        stroke-dasharray="0" stroke-linecap="butt"></line>
                                                    <line id="SvgjsLine3364" x1="0" y1="1"
                                                        x2="0" y2="232.348" stroke="transparent"
                                                        stroke-dasharray="0" stroke-linecap="butt"></line>
                                                </g>
                                                <g id="SvgjsG3422" class="apexcharts-yaxis-annotations"></g>
                                                <g id="SvgjsG3423" class="apexcharts-xaxis-annotations"></g>
                                                <g id="SvgjsG3424" class="apexcharts-point-annotations"></g>
                                                <g id="SvgjsG3314" class="apexcharts-bar-series apexcharts-plot-series">
                                                    <g id="SvgjsG3315" class="apexcharts-series" rel="1"
                                                        seriesName="sales" data:realIndex="0">
                                                        <path id="SvgjsPath3319"
                                                            d="M 9.171874999999996 232.34900000000002 L 9.171874999999996 167.00112500000003 L 51.97395833333334 167.00112500000003 L 51.97395833333334 232.34900000000002 Z"
                                                            fill="rgba(67,94,190,1)" fill-opacity="1" stroke-opacity="1"
                                                            stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                            class="apexcharts-bar-area" index="0"
                                                            clip-path="url(#gridRectMasktef8oydv)"
                                                            pathTo="M 9.171874999999996 232.34900000000002 L 9.171874999999996 167.00112500000003 L 51.97395833333334 167.00112500000003 L 51.97395833333334 232.34900000000002 Z"
                                                            pathFrom="M 9.171874999999996 232.34900000000002 L 9.171874999999996 232.34900000000002 L 51.97395833333334 232.34900000000002 L 51.97395833333334 232.34900000000002 L 51.97395833333334 232.34900000000002 L 51.97395833333334 232.34900000000002 L 51.97395833333334 232.34900000000002 L 9.171874999999996 232.34900000000002 Z"
                                                            cy="167.00012500000003" cx="70.31770833333333" j="0"
                                                            val="9" barHeight="65.347875"
                                                            barWidth="42.80208333333334"></path>
                                                        <path id="SvgjsPath3321"
                                                            d="M 70.31770833333333 232.34900000000002 L 70.31770833333333 87.13149999999999 L 113.11979166666667 87.13149999999999 L 113.11979166666667 232.34900000000002 Z"
                                                            fill="rgba(67,94,190,1)" fill-opacity="1" stroke-opacity="1"
                                                            stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                            class="apexcharts-bar-area" index="0"
                                                            clip-path="url(#gridRectMasktef8oydv)"
                                                            pathTo="M 70.31770833333333 232.34900000000002 L 70.31770833333333 87.13149999999999 L 113.11979166666667 87.13149999999999 L 113.11979166666667 232.34900000000002 Z"
                                                            pathFrom="M 70.31770833333333 232.34900000000002 L 70.31770833333333 232.34900000000002 L 113.11979166666667 232.34900000000002 L 113.11979166666667 232.34900000000002 L 113.11979166666667 232.34900000000002 L 113.11979166666667 232.34900000000002 L 113.11979166666667 232.34900000000002 L 70.31770833333333 232.34900000000002 Z"
                                                            cy="87.13049999999998" cx="131.46354166666666" j="1"
                                                            val="20" barHeight="145.21750000000003"
                                                            barWidth="42.80208333333334"></path>
                                                        <path id="SvgjsPath3323"
                                                            d="M 131.46354166666666 232.34900000000002 L 131.46354166666666 14.522749999999997 L 174.265625 14.522749999999997 L 174.265625 232.34900000000002 Z"
                                                            fill="rgba(67,94,190,1)" fill-opacity="1" stroke-opacity="1"
                                                            stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                            class="apexcharts-bar-area" index="0"
                                                            clip-path="url(#gridRectMasktef8oydv)"
                                                            pathTo="M 131.46354166666666 232.34900000000002 L 131.46354166666666 14.522749999999997 L 174.265625 14.522749999999997 L 174.265625 232.34900000000002 Z"
                                                            pathFrom="M 131.46354166666666 232.34900000000002 L 131.46354166666666 232.34900000000002 L 174.265625 232.34900000000002 L 174.265625 232.34900000000002 L 174.265625 232.34900000000002 L 174.265625 232.34900000000002 L 174.265625 232.34900000000002 L 131.46354166666666 232.34900000000002 Z"
                                                            cy="14.521749999999997" cx="192.609375" j="2"
                                                            val="30" barHeight="217.82625000000002"
                                                            barWidth="42.80208333333334"></path>
                                                        <path id="SvgjsPath3325"
                                                            d="M 192.609375 232.34900000000002 L 192.609375 87.13149999999999 L 235.41145833333334 87.13149999999999 L 235.41145833333334 232.34900000000002 Z"
                                                            fill="rgba(67,94,190,1)" fill-opacity="1" stroke-opacity="1"
                                                            stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                            class="apexcharts-bar-area" index="0"
                                                            clip-path="url(#gridRectMasktef8oydv)"
                                                            pathTo="M 192.609375 232.34900000000002 L 192.609375 87.13149999999999 L 235.41145833333334 87.13149999999999 L 235.41145833333334 232.34900000000002 Z"
                                                            pathFrom="M 192.609375 232.34900000000002 L 192.609375 232.34900000000002 L 235.41145833333334 232.34900000000002 L 235.41145833333334 232.34900000000002 L 235.41145833333334 232.34900000000002 L 235.41145833333334 232.34900000000002 L 235.41145833333334 232.34900000000002 L 192.609375 232.34900000000002 Z"
                                                            cy="87.13049999999998" cx="253.75520833333334" j="3"
                                                            val="20" barHeight="145.21750000000003"
                                                            barWidth="42.80208333333334"></path>
                                                        <path id="SvgjsPath3327"
                                                            d="M 253.75520833333334 232.34900000000002 L 253.75520833333334 159.74025 L 296.5572916666667 159.74025 L 296.5572916666667 232.34900000000002 Z"
                                                            fill="rgba(67,94,190,1)" fill-opacity="1" stroke-opacity="1"
                                                            stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                            class="apexcharts-bar-area" index="0"
                                                            clip-path="url(#gridRectMasktef8oydv)"
                                                            pathTo="M 253.75520833333334 232.34900000000002 L 253.75520833333334 159.74025 L 296.5572916666667 159.74025 L 296.5572916666667 232.34900000000002 Z"
                                                            pathFrom="M 253.75520833333334 232.34900000000002 L 253.75520833333334 232.34900000000002 L 296.5572916666667 232.34900000000002 L 296.5572916666667 232.34900000000002 L 296.5572916666667 232.34900000000002 L 296.5572916666667 232.34900000000002 L 296.5572916666667 232.34900000000002 L 253.75520833333334 232.34900000000002 Z"
                                                            cy="159.73925" cx="314.9010416666667" j="4"
                                                            val="10" barHeight="72.60875000000001"
                                                            barWidth="42.80208333333334"></path>
                                                        <path id="SvgjsPath3329"
                                                            d="M 314.9010416666667 232.34900000000002 L 314.9010416666667 87.13149999999999 L 357.703125 87.13149999999999 L 357.703125 232.34900000000002 Z"
                                                            fill="rgba(67,94,190,1)" fill-opacity="1" stroke-opacity="1"
                                                            stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                            class="apexcharts-bar-area" index="0"
                                                            clip-path="url(#gridRectMasktef8oydv)"
                                                            pathTo="M 314.9010416666667 232.34900000000002 L 314.9010416666667 87.13149999999999 L 357.703125 87.13149999999999 L 357.703125 232.34900000000002 Z"
                                                            pathFrom="M 314.9010416666667 232.34900000000002 L 314.9010416666667 232.34900000000002 L 357.703125 232.34900000000002 L 357.703125 232.34900000000002 L 357.703125 232.34900000000002 L 357.703125 232.34900000000002 L 357.703125 232.34900000000002 L 314.9010416666667 232.34900000000002 Z"
                                                            cy="87.13049999999998" cx="376.046875" j="5"
                                                            val="20" barHeight="145.21750000000003"
                                                            barWidth="42.80208333333334"></path>
                                                        <path id="SvgjsPath3331"
                                                            d="M 376.046875 232.34900000000002 L 376.046875 14.522749999999997 L 418.84895833333337 14.522749999999997 L 418.84895833333337 232.34900000000002 Z"
                                                            fill="rgba(67,94,190,1)" fill-opacity="1" stroke-opacity="1"
                                                            stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                            class="apexcharts-bar-area" index="0"
                                                            clip-path="url(#gridRectMasktef8oydv)"
                                                            pathTo="M 376.046875 232.34900000000002 L 376.046875 14.522749999999997 L 418.84895833333337 14.522749999999997 L 418.84895833333337 232.34900000000002 Z"
                                                            pathFrom="M 376.046875 232.34900000000002 L 376.046875 232.34900000000002 L 418.84895833333337 232.34900000000002 L 418.84895833333337 232.34900000000002 L 418.84895833333337 232.34900000000002 L 418.84895833333337 232.34900000000002 L 418.84895833333337 232.34900000000002 L 376.046875 232.34900000000002 Z"
                                                            cy="14.521749999999997" cx="437.1927083333333" j="6"
                                                            val="30" barHeight="217.82625000000002"
                                                            barWidth="42.80208333333334"></path>
                                                        <path id="SvgjsPath3333"
                                                            d="M 437.1927083333333 232.34900000000002 L 437.1927083333333 87.13149999999999 L 479.99479166666663 87.13149999999999 L 479.99479166666663 232.34900000000002 Z"
                                                            fill="rgba(67,94,190,1)" fill-opacity="1" stroke-opacity="1"
                                                            stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                            class="apexcharts-bar-area" index="0"
                                                            clip-path="url(#gridRectMasktef8oydv)"
                                                            pathTo="M 437.1927083333333 232.34900000000002 L 437.1927083333333 87.13149999999999 L 479.99479166666663 87.13149999999999 L 479.99479166666663 232.34900000000002 Z"
                                                            pathFrom="M 437.1927083333333 232.34900000000002 L 437.1927083333333 232.34900000000002 L 479.99479166666663 232.34900000000002 L 479.99479166666663 232.34900000000002 L 479.99479166666663 232.34900000000002 L 479.99479166666663 232.34900000000002 L 479.99479166666663 232.34900000000002 L 437.1927083333333 232.34900000000002 Z"
                                                            cy="87.13049999999998" cx="498.33854166666663" j="7"
                                                            val="20" barHeight="145.21750000000003"
                                                            barWidth="42.80208333333334"></path>
                                                        <path id="SvgjsPath3335"
                                                            d="M 498.33854166666663 232.34900000000002 L 498.33854166666663 159.74025 L 541.140625 159.74025 L 541.140625 232.34900000000002 Z"
                                                            fill="rgba(67,94,190,1)" fill-opacity="1" stroke-opacity="1"
                                                            stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                            class="apexcharts-bar-area" index="0"
                                                            clip-path="url(#gridRectMasktef8oydv)"
                                                            pathTo="M 498.33854166666663 232.34900000000002 L 498.33854166666663 159.74025 L 541.140625 159.74025 L 541.140625 232.34900000000002 Z"
                                                            pathFrom="M 498.33854166666663 232.34900000000002 L 498.33854166666663 232.34900000000002 L 541.140625 232.34900000000002 L 541.140625 232.34900000000002 L 541.140625 232.34900000000002 L 541.140625 232.34900000000002 L 541.140625 232.34900000000002 L 498.33854166666663 232.34900000000002 Z"
                                                            cy="159.73925" cx="559.484375" j="8" val="10"
                                                            barHeight="72.60875000000001" barWidth="42.80208333333334">
                                                        </path>
                                                        <path id="SvgjsPath3337"
                                                            d="M 559.484375 232.34900000000002 L 559.484375 87.13149999999999 L 602.2864583333334 87.13149999999999 L 602.2864583333334 232.34900000000002 Z"
                                                            fill="rgba(67,94,190,1)" fill-opacity="1" stroke-opacity="1"
                                                            stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                            class="apexcharts-bar-area" index="0"
                                                            clip-path="url(#gridRectMasktef8oydv)"
                                                            pathTo="M 559.484375 232.34900000000002 L 559.484375 87.13149999999999 L 602.2864583333334 87.13149999999999 L 602.2864583333334 232.34900000000002 Z"
                                                            pathFrom="M 559.484375 232.34900000000002 L 559.484375 232.34900000000002 L 602.2864583333334 232.34900000000002 L 602.2864583333334 232.34900000000002 L 602.2864583333334 232.34900000000002 L 602.2864583333334 232.34900000000002 L 602.2864583333334 232.34900000000002 L 559.484375 232.34900000000002 Z"
                                                            cy="87.13049999999998" cx="620.6302083333334" j="9"
                                                            val="20" barHeight="145.21750000000003"
                                                            barWidth="42.80208333333334"></path>
                                                        <path id="SvgjsPath3339"
                                                            d="M 620.6302083333334 232.34900000000002 L 620.6302083333334 14.522749999999997 L 663.4322916666667 14.522749999999997 L 663.4322916666667 232.34900000000002 Z"
                                                            fill="rgba(67,94,190,1)" fill-opacity="1" stroke-opacity="1"
                                                            stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                            class="apexcharts-bar-area" index="0"
                                                            clip-path="url(#gridRectMasktef8oydv)"
                                                            pathTo="M 620.6302083333334 232.34900000000002 L 620.6302083333334 14.522749999999997 L 663.4322916666667 14.522749999999997 L 663.4322916666667 232.34900000000002 Z"
                                                            pathFrom="M 620.6302083333334 232.34900000000002 L 620.6302083333334 232.34900000000002 L 663.4322916666667 232.34900000000002 L 663.4322916666667 232.34900000000002 L 663.4322916666667 232.34900000000002 L 663.4322916666667 232.34900000000002 L 663.4322916666667 232.34900000000002 L 620.6302083333334 232.34900000000002 Z"
                                                            cy="14.521749999999997" cx="681.7760416666667" j="10"
                                                            val="30" barHeight="217.82625000000002"
                                                            barWidth="42.80208333333334"></path>
                                                        <path id="SvgjsPath3341"
                                                            d="M 681.7760416666667 232.34900000000002 L 681.7760416666667 87.13149999999999 L 724.5781250000001 87.13149999999999 L 724.5781250000001 232.34900000000002 Z"
                                                            fill="rgba(67,94,190,1)" fill-opacity="1" stroke-opacity="1"
                                                            stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                            class="apexcharts-bar-area" index="0"
                                                            clip-path="url(#gridRectMasktef8oydv)"
                                                            pathTo="M 681.7760416666667 232.34900000000002 L 681.7760416666667 87.13149999999999 L 724.5781250000001 87.13149999999999 L 724.5781250000001 232.34900000000002 Z"
                                                            pathFrom="M 681.7760416666667 232.34900000000002 L 681.7760416666667 232.34900000000002 L 724.5781250000001 232.34900000000002 L 724.5781250000001 232.34900000000002 L 724.5781250000001 232.34900000000002 L 724.5781250000001 232.34900000000002 L 724.5781250000001 232.34900000000002 L 681.7760416666667 232.34900000000002 Z"
                                                            cy="87.13049999999998" cx="742.9218750000001" j="11"
                                                            val="20" barHeight="145.21750000000003"
                                                            barWidth="42.80208333333334"></path>
                                                        <g id="SvgjsG3317" class="apexcharts-bar-goals-markers"
                                                            style="pointer-events: none">
                                                            <g id="SvgjsG3318" className="apexcharts-bar-goals-groups">
                                                            </g>
                                                            <g id="SvgjsG3320" className="apexcharts-bar-goals-groups">
                                                            </g>
                                                            <g id="SvgjsG3322" className="apexcharts-bar-goals-groups">
                                                            </g>
                                                            <g id="SvgjsG3324" className="apexcharts-bar-goals-groups">
                                                            </g>
                                                            <g id="SvgjsG3326" className="apexcharts-bar-goals-groups">
                                                            </g>
                                                            <g id="SvgjsG3328" className="apexcharts-bar-goals-groups">
                                                            </g>
                                                            <g id="SvgjsG3330" className="apexcharts-bar-goals-groups">
                                                            </g>
                                                            <g id="SvgjsG3332" className="apexcharts-bar-goals-groups">
                                                            </g>
                                                            <g id="SvgjsG3334" className="apexcharts-bar-goals-groups">
                                                            </g>
                                                            <g id="SvgjsG3336" className="apexcharts-bar-goals-groups">
                                                            </g>
                                                            <g id="SvgjsG3338" className="apexcharts-bar-goals-groups">
                                                            </g>
                                                            <g id="SvgjsG3340" className="apexcharts-bar-goals-groups">
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g id="SvgjsG3316" class="apexcharts-datalabels" data:realIndex="0">
                                                    </g>
                                                </g>
                                                <g id="SvgjsG3345" class="apexcharts-grid-borders">
                                                    <line id="SvgjsLine3359" x1="0" y1="0"
                                                        x2="733.75" y2="0" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine3363" x1="0" y1="232.348"
                                                        x2="733.75" y2="232.348" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine3404" x1="0" y1="233.348"
                                                        x2="733.75" y2="233.348" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-width="1" stroke-linecap="butt">
                                                    </line>
                                                </g>
                                                <line id="SvgjsLine3425" x1="0" y1="0" x2="733.75"
                                                    y2="0" stroke="#b6b6b6" stroke-dasharray="0"
                                                    stroke-width="1" stroke-linecap="butt"
                                                    class="apexcharts-ycrosshairs"></line>
                                                <line id="SvgjsLine3426" x1="0" y1="0" x2="733.75"
                                                    y2="0" stroke-dasharray="0" stroke-width="0"
                                                    stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                            </g>
                                            <g id="SvgjsG3405" class="apexcharts-yaxis" rel="0"
                                                transform="translate(9.25, 0)">
                                                <g id="SvgjsG3406" class="apexcharts-yaxis-texts-g"><text
                                                        id="SvgjsText3408" font-family="Helvetica, Arial, sans-serif"
                                                        x="20" y="31.4" text-anchor="end"
                                                        dominant-baseline="auto" font-size="11px" font-weight="400"
                                                        fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label "
                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan3409">32</tspan>
                                                        <title>32</title>
                                                    </text><text id="SvgjsText3411"
                                                        font-family="Helvetica, Arial, sans-serif" x="20"
                                                        y="89.48700000000001" text-anchor="end" dominant-baseline="auto"
                                                        font-size="11px" font-weight="400" fill="#373d3f"
                                                        class="apexcharts-text apexcharts-yaxis-label "
                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan3412">24</tspan>
                                                        <title>24</title>
                                                    </text><text id="SvgjsText3414"
                                                        font-family="Helvetica, Arial, sans-serif" x="20"
                                                        y="147.574" text-anchor="end" dominant-baseline="auto"
                                                        font-size="11px" font-weight="400" fill="#373d3f"
                                                        class="apexcharts-text apexcharts-yaxis-label "
                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan3415">16</tspan>
                                                        <title>16</title>
                                                    </text><text id="SvgjsText3417"
                                                        font-family="Helvetica, Arial, sans-serif" x="20"
                                                        y="205.66100000000003" text-anchor="end" dominant-baseline="auto"
                                                        font-size="11px" font-weight="400" fill="#373d3f"
                                                        class="apexcharts-text apexcharts-yaxis-label "
                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan3418">8</tspan>
                                                        <title>8</title>
                                                    </text><text id="SvgjsText3420"
                                                        font-family="Helvetica, Arial, sans-serif" x="20"
                                                        y="263.748" text-anchor="end" dominant-baseline="auto"
                                                        font-size="11px" font-weight="400" fill="#373d3f"
                                                        class="apexcharts-text apexcharts-yaxis-label "
                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan3421">0</tspan>
                                                        <title>0</title>
                                                    </text></g>
                                            </g>
                                            <g id="SvgjsG3304" class="apexcharts-annotations"></g>
                                        </svg>
                                        <div class="apexcharts-legend" style="max-height: 150px;"></div>
                                        <div class="apexcharts-tooltip apexcharts-theme-light">
                                            <div class="apexcharts-tooltip-title"
                                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                            <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                                    class="apexcharts-tooltip-marker"></span>
                                                <div class="apexcharts-tooltip-text"
                                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                    <div class="apexcharts-tooltip-y-group"><span
                                                            class="apexcharts-tooltip-text-y-label"></span><span
                                                            class="apexcharts-tooltip-text-y-value"></span></div>
                                                    <div class="apexcharts-tooltip-goals-group"><span
                                                            class="apexcharts-tooltip-text-goals-label"></span><span
                                                            class="apexcharts-tooltip-text-goals-value"></span></div>
                                                    <div class="apexcharts-tooltip-z-group"><span
                                                            class="apexcharts-tooltip-text-z-label"></span><span
                                                            class="apexcharts-tooltip-text-z-value"></span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row-12 col-lg-3">
                <div class="card">
                    <div class="row">
                        <div class="card-body py-4 px-5">
                            <div class="d-flex align-items-center">
                                <div class="avatar avatar-xl">
                                    <img src="{{ asset('template') }}/assets/images/faces/1.jpg" alt="Face 1">
                                </div>
                                <div class="ms-3 name">
                                    <h5 class="font-bold">{{ Auth()->user()->nama }}</h5>
                                    <h6 class="text-muted mb-0">{{ Auth()->user()->role }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Bar Chart</h4>
                    </div>
                    <div class="card-body">
                        <div id="bar"></div>
                    </div>
                </div>
            </div> --}}
        </section>
    </div>
@endsection
