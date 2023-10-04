<?php

	/**
	 * 
	 */
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);

	require('./controllers/RoomController.php');

	if(isset($_GET['action']) && $_GET['action'] == 'getRoomsData')
	{
		$room_controller = new RoomController();
		$rooms = $room_controller->getRoomsData();
		print_r($rooms) ;
	}

?>