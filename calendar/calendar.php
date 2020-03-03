<?php
	$cssSection = '<link rel="stylesheet" type="text/css" href="/css/calendar/calendar.min.css">';
	include(getRootPathFile('calendar/events.php'));
?>

<div id="calendarContainer" class="container">
	<div class="page-header">
		<div class="pull-right form-inline">
			<div class="btn-group">
				<button class="btn btn-primary" data-calendar-nav="prev"><< Anterior</button>
				<button class="btn btn-default" data-calendar-nav="today">Hoy</button>
				<button class="btn btn-primary" data-calendar-nav="next">Siguiente >></button>
			</div>
			<div class="btn-group">
				<button class="btn btn-warning" data-calendar-view="year">Año</button>
				<button class="btn btn-warning active" data-calendar-view="month">Mes</button>
				<button class="btn btn-warning" data-calendar-view="week">Semana</button>
				<button class="btn btn-warning" data-calendar-view="day">Día</button>
			</div>
		</div>
		<h3></h3>
	</div>
	<div class="row">
		<div class="col-md-9">
			<div id="showEventCalendar"></div>
		</div>
		<div class="col-md-3">
			<h4>Lista de todos los eventos</h4>
			<ul id="eventlist" class="nav nav-list"></ul>
		</div>
	</div>
</div>
<?php
	$javascriptSection = 
		'<script type="text/javascript" src="/js/calendar/language/es-ES.js"></script>
		<script type="text/javascript" src="/js/calendar/calendar.min.js"></script>
		<script type="text/javascript" src="/js/event/event.js"></script>';
?>
