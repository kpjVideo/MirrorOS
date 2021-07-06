<?php
/*
  _____               _           _ _            _____        __ _                             _____                       
 |  __ \             (_)         (_) |          / ____|      / _| |                           / ____|                      
 | |__) | __ _____  ___ _ __ ___  _| |_ _   _  | (___   ___ | |_| |___      ____ _ _ __ ___  | |  __ _ __ ___  _   _ _ __  
 |  ___/ '__/ _ \ \/ / | '_ ` _ \| | __| | | |  \___ \ / _ \|  _| __\ \ /\ / / _` | '__/ _ \ | | |_ | '__/ _ \| | | | '_ \ 
 | |   | | | (_) >  <| | | | | | | | |_| |_| |  ____) | (_) | | | |_ \ V  V / (_| | | |  __/ | |__| | | | (_) | |_| | |_) |
 |_|   |_|  \___/_/\_\_|_| |_| |_|_|\__|\__, | |_____/ \___/|_|  \__| \_/\_/ \__,_|_|  \___|  \_____|_|  \___/ \__,_| .__/ 
                                         __/ |                                                                      | |    
                                        |___/                                                                       |_|    
                                            																 ___ __  _  __
                                            																|_  )  \/ |/ /
                                            																 / / () | / _ \
                                            																/___\__/|_\___/

-- PHP Source Code © Proximity Software Group

-- This file is original and proprietary. Unless you have been granted a legal license,
-- you have no legal right to view or use any part of this code. Violations or removal of any
-- copyright notices, or any text herein constitutes copyright infringement and lead to prosecution.
-- Intercepting a copy through a breach of file transfer protocol, or otherwise intercepting a transmission
-- does not constitute a legal license or legal receipt of this code. Our code is transmitted to your device
-- in order to run the software as we dictate. Using this code for your own personal or commercial use without
-- a legal license granted by us may be prosecuted to the fullest extent of law for willful copyright infringement.

-- All Rights Reserved.
-- This material may not be modified, stored, published, rewritten, sold, redistributed, duplicated or reproduced in whole or in part without the
-- express written permission with a lawful license for use granted thereof.
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Stylesheets -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/jquery.gridstrap@0.0.0-semantically-released/dist/jquery.gridstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/flip.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<!-- Javascript -->
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/jquery.gridstrap@0.0.0-semantically-released/dist/jquery.gridstrap.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
	<script src="js/chart.js"></script>
	<script src="js/flip.min.js"></script>
	<script src="http://code.jquery.com/color/jquery.color-2.1.2.min.js"></script>
	<script src="https://unpkg.com/gelerator@4.0.0/dist/gelerator.min.js"></script>
	<!-- Page Tags -->
	<title></title>
</head>
<body>

<div class="container-fluid px-2 py-2">
		<div class="row">
			<div class="col-3">
				<div class="text-center tlLoading d-flex align-items-center justify-content-center" style="width: 600px;height: 400px;background-color: #101010;border-radius: 4px;vertical-align: middle;">
					<div class="spinner-border tlSpinner" style="width: 5vw; height: 5vw;" role="status"></div>
				</div>
				<!--
				<div class="weatherBG">
					<div class="container px-4 py-2">
						<div class="row">
							<div class="col-8">
								<h1 class="display-6 sunnyText">Party Cloudy</h1>
								<div class="temp">
									<span class="sunnyTemp">24</span>
									<span class="deg">°F</span>
								</div>
								<div class="location">Salt Lake City, Utah</div>
							</div>
							<div class="col-4">
								<div style="display: flex;justify-content: center;align-items: center;width: 100%;height: 100%;">
									<img class="weatherIcon" src="img/icon_few_clouds_day.svg"/>
								</div>
							</div>
						</div>
					</div>
				</div>
				-->
				<div class="row weatherDisplay" style="display: none;">
					<div class="col-6 m-auto">
						<div>
							<div class="row" style="line-height: 1;">
								<div class="col-6" style="text-align: right;">
									<img class="weatherIcon" id="currentWeatherIcon" src="img/icon_few_clouds_day.svg"/>
								</div>
								<div class="col-6 d-flex text-left align-items-center">
									<span class="sunnyTemp"></span>
								</div>
							</div>
						</div>
						<div class="row" style="line-height: 1;">
							<div class="col-12 text-center">
								<span class="text-center" style="font-weight: 100;font-size: 2em;" id="cityName"></span>
							</div>
						</div>
					</div>
					<div class="col-6 d-flex flex-column justify-content-between">
						<div style="font-size: 2.5em;font-weight: 200;white-space: nowrap;" class="weatherDesc"></div>

						<div>
							<div style="font-size: 0.8vw;font-weight: 400;line-height: 1;padding-top: 1ch;">
								<div class="row">
									<div class="col-1">
										<img class="miniIcon" src="img/icon_clear_sky_day.svg"/>
									</div>
									<div class="col-5">
										<span class="fw-400" id="sunRise"></span>
									</div>
									<div class="col-1">
										<img class="miniIcon" src="img/icon_clear_sky_night.svg"/>
									</div>
									<div class="col-5">
										<span class="fw-400" id="sunSet"></span>
									</div>
								</div>
							</div>
							<div style="font-size: 0.8vw;font-weight: 400;line-height: 1;">
								<div class="row">
									<div class="col-6">
										<span class="fw-200">Humidity</span>
									</div>
									<div class="col-4">
										<span class="fw-400 humidity"></span>
									</div>
								</div>
							</div>
							<div style="font-size: 0.8vw;font-weight: 400;line-height: 1;">
								<div class="row">
									<div class="col-6">
										<span class="fw-200">Wind</span>
									</div>
									<div class="col-4">
										<span class="fw-400 windSpeed"></span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<br>
				<div class="container" id="weatherForecast" style="display: none;">
					<?php
						for($i = 1; $i < 8; $i++ ){
							echo '<div class="row weatherBar" id="weather-day-' . $i . '">';
								echo '<div class="col-4">';
									echo '<span class="weatherSub" id="dayName' . $i . '"></span>';
								echo '</div>';
								echo '<div class="col-3">';
									echo '<div class="centerAlign">';
										echo '<img class="weatherIconSub" id="dayIcon' . $i . '" src="img/icon_few_clouds_day.svg"/>';
									echo '</div>';
								echo '</div>';
								echo '<div class="col-4">';
									echo '<div class="rightAlign weatherSub">';
										echo '<span class="spacerRight" id="dayHigh' . $i . '"></span>';
										echo '<span class="low" id="dayLow' . $i . '"></span>';
									echo '</div>';
								echo '</div>';
							echo '</div>';
						}
					?>
				</div>
			</div>
			<div class="col-3">
			</div>
			<div class="col-6">
				<div class="container justify-end">
					<div class="text-center trLoading d-flex align-items-center justify-content-center" style="width: 400px;height: 200px;background-color: #101010;border-radius: 4px;vertical-align: middle;">
						<div class="spinner-border trSpinner" style="width: 5vw; height: 5vw;" role="status"></div>
					</div>
					<div class="display-1" style="display: none;">
						<div class="time"></div>
						<div class="date"></div>
					</div>
				</div>
			</div>
		</div>
</div>

<div class="container-fluid px-2 py-2 bottom">
	<div class="text-center blLoading d-flex align-items-center justify-content-center" style="width: 800px;height: 120px;background-color: #101010;border-radius: 4px;vertical-align: middle;">
		<div class="spinner-border blSpinner" style="width: 2vw; height: 2vw;" role="status"></div>
	</div>
	<div class="row" id="Stocks" style="overflow: hidden;white-space: nowrap;display: none;">
		<div class="col-2 pe-0">
			<div class="row">
				<div class="col-7">
					<div id="chart"></div>
				</div>
				<div class="col-5">
					<br>
					<div class="stockContainer">
						<div class="d-flex align-items-center">
							<svg width="16" height="16">
								<circle fill="#ff0000" stroke="none" cx="8" cy="8" r="8">
									<animate attributeName="opacity" dur="1s" values="0;1;0" repeatCount="indefinite" begin="0.1"/>
								</circle>
							</svg>
							<span class="stockName stockName0 fw-500"></span>
						</div>
						<div class="stockFullName stockFullName0 fw-100"></div>
						<div class="stockPrice">
							<div class="fs-2 fw-700">$</div>
							<div class="flipPrice flipPrice0 fs-2 fw-700"></div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Stock 2 -->
		<div class="col-2 pe-0">
			<div class="row">
				<div class="col-6">
					<div id="chart2"></div>
				</div>
				<div class="col-6">
					<br>
					<div class="stockContainer">
						<div class="d-flex align-items-center">
							<svg width="16" height="16">
								<circle fill="#ff0000" stroke="none" cx="8" cy="8" r="8">
									<animate attributeName="opacity" dur="1s" values="0;1;0" repeatCount="indefinite" begin="0.1"/>
								</circle>
							</svg>
							<span class="stockName stockName1 fw-500"></span>
						</div>
						<div class="stockFullName stockFullName1 fw-100"></div>
						<div class="stockPrice">
							<div class="fs-2 fw-700">$</div>
							<div class="flipPrice flipPrice1 fs-2 fw-700"></div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Stock 3 -->
		<div class="col-2 pe-0">
			<div class="row">
				<div class="col-6">
					<div id="chart3"></div>
				</div>
				<div class="col-6">
					<br>
					<div class="stockContainer">
						<div class="d-flex align-items-center">
							<svg width="16" height="16">
								<circle fill="#ff0000" stroke="none" cx="8" cy="8" r="8">
									<animate attributeName="opacity" dur="1s" values="0;1;0" repeatCount="indefinite" begin="0.1"/>
								</circle>
							</svg>
							<span class="stockName stockName2 fw-500"></span>
						</div>
						<div class="stockFullName stockFullName2 fw-100"></div>
						<div class="stockPrice">
							<div class="fs-2 fw-700">$</div>
							<div class="flipPrice flipPrice2 fs-2 fw-700"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script src="modules/stock.js"></script>
<script src="modules/datetime.js"></script>
<script src="modules/weather.js"></script>

<!-- Debug Only! -->
<script type="text/javascript">
	var c1 = genChartOptions([1.0, 1.1, 1.2, 1.3, 1.4, 1.5, 1.6, 1.7, 1.8, 1.9, 2.0]);
	renderChart( "#chart", c1 );
</script>

</body>
</html>