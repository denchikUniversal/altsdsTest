<?php
require_once 'config.php';
require_once 'functions.php';
$events = get_events();
print_r($events);
echo $events = get_json($events);

if(!empty($_POST['clickDate'])){
	print_r($_POST);
	die;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Calendar</title>
	<link rel="stylesheet" href="bootstrap.min.css">
	<link rel="stylesheet" href="css/jquery-ui.css">
	<link rel="stylesheet" href="fullcalendar.css">
	<link rel="stylesheet" href="fullcalendar.print.css" media="print">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>

	<div id="calendar"></div>

	<div id="dialog">
		<form>
		  <div class="form-group">
		    <label for="title">Название задачи</label>
		    <input type="text" class="form-control" id="title" placeholder="Название задачи">
		  </div>
		  <div class="form-group">
		    <label for="description">Описание</label>
		    <input type="text" class="form-control" id="description" placeholder="Описание">
		  </div>
		  <div class="form-group">
		    <label for="start">Начало события</label>
		    <input type="text" class="form-control datepicker" id="start" placeholder="Начало">
		  </div>
		   <div class="form-group">
		    <label for="end">Конец события</label>
		    <input type="text" class="form-control datepicker" id="end" placeholder="Конец">
		  </div>
		  <button type="submit" class="btn btn-success">Добавить</button>
		</form>
	</div>
	

	<script src="lib/jquery.min.js"></script>
	<script src="jquery-ui.min.js"></script>
	<script src="lib/moment.min.js"></script>
	<script src="fullcalendar.js"></script>
	<script src="locale/ru.js"></script>
	<script src="js/main.js"></script>
</body>
</html>