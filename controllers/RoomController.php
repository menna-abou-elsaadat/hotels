<?php

	require('./models/Rooms.php');

	class RoomController
	{
		
		function getRoomsData()
		{
			
			$rooms_obj = new Rooms();
			$rooms = $rooms_obj->getRoomsData();
			return json_encode($rooms);
		}

	}
?>