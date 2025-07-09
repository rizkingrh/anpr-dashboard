/*
Template Name: Color Admin - Responsive Admin Dashboard Template build with Twitter Bootstrap 5
Version: 5.3.2
Author: Sean Ngu
Website: http://www.seantheme.com/color-admin/
*/

let activityChart = null;

let handleGritterNotification = (message) => {
	if (message) {
		$.gritter.add({
			title: 'Login berhasil!',
			text: message,
			image: '../assets/img/success_icon.png',
			sticky: false,
			time: 4000
		});
	}
};

let handleApexChart = function (trendLabels, trendData) {
	const options = {
		chart: {
			type: 'area',
			height: 350,
			toolbar: {
				show: false
			},
			zoom: {
				enabled: false
			}
		},
		series: [{
			name: 'Jumlah Entri',
			data: trendData
		}],
		xaxis: {
			categories: trendLabels,
		},
		yaxis: {
			title: {
				text: 'Jumlah Kendaraan'
			},
			min: 0
		},
		stroke: {
			curve: 'smooth',
			width: 2
		},
		colors: ['#348FE2'],
		dataLabels: {
			enabled: false
		},
		legend: {
			position: 'top'
		}
	};

	// Initialize the chart
	activityChart = new ApexCharts(document.querySelector("#activityTrendChart"), options);
	activityChart.render();
};

let handleDateRangeFilter = function () {
	$('#daterange-filter span').html(moment().subtract(7, 'days').format('D MMMM YYYY') + ' - ' + moment().format('D MMMM YYYY'));
	$('#daterange-prev-date').html(moment().subtract(15, 'days').format('D MMMM') + ' - ' + moment().subtract(8, 'days').format('D MMMM YYYY'));

	$('#daterange-filter').daterangepicker({
		format: 'MM-DD-YYYY',
		startDate: moment().subtract(7, 'days'),
		endDate: moment(),
		minDate: '01/01/2024',
		maxDate: moment(),
		dateLimit: { days: 60 },
		showDropdowns: true,
		showWeekNumbers: true,
		timePicker: false,
		timePickerIncrement: 1,
		timePicker12Hour: true,
		ranges: {
			'Today': [moment(), moment()],
			'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
			'Last 7 Days': [moment().subtract(6, 'days'), moment()],
			'Last 30 Days': [moment().subtract(29, 'days'), moment()],
			'This Month': [moment().startOf('month'), moment().endOf('month')],
			'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
		},
		opens: 'right',
		drops: 'down',
		buttonClasses: ['btn', 'btn-sm'],
		applyClass: 'btn-primary',
		cancelClass: 'btn-default',
		separator: ' to ',
		locale: {
			applyLabel: 'Submit',
			cancelLabel: 'Cancel',
			fromLabel: 'From',
			toLabel: 'To',
			customRangeLabel: 'Custom',
			daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
			monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
			firstDay: 1
		}
	}, function (start, end, label) {
		let startDate = start.format('YYYY-MM-DD');
		let endDate = end.format('YYYY-MM-DD');

		$('#daterange-filter span').html(start.format('D MMMM YYYY') + ' - ' + end.format('D MMMM YYYY'));

		// AJAX
		$.ajax({
			url: '/dashboard', // Adjust this URL to match your route
			type: 'GET',
			data: {
				startDate: startDate,
				endDate: endDate,
			},
			beforeSend: function () {
				// Optional: Show loading indicator
				console.log('Sending request...');
				// You can add a loading spinner here
			},
			success: function (response) {
				console.log('Success:', response);
				// Handle the successful response here
				// // For example, update charts or tables with new data
				if (response.trendLabels && response.trendData) {
					// Update your chart with new data
					updateChart(response.trendLabels, response.trendData);
				}
			},
			error: function (xhr, status, error) {
				console.error('Error:', error);
				console.error('Status:', status);
				console.error('Response:', xhr.responseText);
				// Handle error case
				alert('Failed to load data. Please try again.');
			}
		});
	});
};

// Function to update ApexCharts chart
function updateChart(labels, data) {
	console.log('Updating chart with:', { labels, data });

	// Check if chart exists
	if (activityChart) {
		// Update categories (x-axis labels)
		activityChart.updateOptions({
			xaxis: {
				categories: labels
			}
		}, false, false); // false parameters prevent redraw until series update

		// Update series data
		activityChart.updateSeries([{
			name: 'Jumlah Entri',
			data: data
		}]);

		console.log('Chart updated successfully');
	} else {
		console.error('Chart not found. Make sure the chart is initialized first.');
	}
}

let Dashboard = function () {
	"use strict";
	return {
		//main function
		init: function (trendLabels, trendData, notifications = {}) {
			if (trendLabels && trendData) {
				handleApexChart(trendLabels, trendData);
			}
			if (notifications.success) {
				handleGritterNotification(notifications.success);
			}
			handleDateRangeFilter();
		}
	};
}();

$(document).ready(function() {
	// Auto-initialize if dashboard data exists
	if (window.dashboardData) {
		Dashboard.init(
			window.dashboardData.trendLabels,
			window.dashboardData.trendData,
			window.dashboardData.notifications
		);
	} else {
		// Fallback: initialize without chart data
		Dashboard.init();
	}
});