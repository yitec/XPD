<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <title>Demo - jQuery Week Calendar</title>

  <link rel='stylesheet' type='text/css' href='includes/libs_weekcalendar/css/smoothness/jquery-ui-1.8.11.custom.css' />
  <link rel='stylesheet' type='text/css' href='css/jquery.weekcalendar.css' />
  <script type="text/javascript" src="http://jqueryui.com/themeroller/themeswitchertool/"></script>
	<link rel='stylesheet' type='text/css' href='css/weekcalendar.css' />
	<link rel='stylesheet' type='text/css' href='css/reset_weekcalendar.css' />  	
  <link rel='stylesheet' type='text/css' href='css/agenda.css' />   
  <style type='text/css'>
  body {
    font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
    margin: 0;
  }

  h1 {
    margin: 0 0 1em;
    padding: 0.5em;
  }

  p.description {
    font-size: 0.8em;
    padding: 1em;
    position: absolute;
    top: 3.2em;
    margin-right: 400px;
  }

  #message {
    font-size: 0.7em;
    position: absolute;
    top: 1em;
    right: 1em;
    width: 350px;
    display: none;
    padding: 1em;
    background: #ffc;
    border: 1px solid #dda;
  }
  </style>

  <script type='text/javascript' src='includes/libs_weekcalendar/jquery-1.4.4.min.js'></script>
  <script type='text/javascript' src='includes/libs_weekcalendar/jquery-ui-1.8.11.custom.min.js'></script>

  <script type="text/javascript" src="includes/libs_weekcalendar/date.js"></script>
  <script type='text/javascript' src='includes/jquery.weekcalendar.js'></script>
  <script type='text/javascript' src='includes/weekcalendar.js'></script>
  
</head>
<body>
 <div id="barra_principal"></div>
 <?include ('menu_superior.php');?>
  <div align="center">
  <div id='calendar' style=" width: 1000px;"></div>
	<div id="event_edit_container">
		<form>
			<input type="hidden" />
			<ul>
				<li>
					<span>Fecha: </span><span class="date_holder"></span> 
				</li>
				<li>
					<label for="start">Hora Inicio: </label><select name="start"><option value="">Select Start Time</option></select>
				</li>
				<li>
					<label for="end">Hora Fin: </label><select name="end"><option value="">Select End Time</option></select>
				</li>
				<li>
					<label for="title">Asunto: </label><input type="text" name="title" />
				</li>
				<li>
					<label for="body">Detalles: </label><textarea name="body"></textarea>
				</li>
			</ul>
		</form>
	</div>
</div>
</body>
</html>
