<?php

/**
 * 
 */
require('Advertiser.php');
require('./services/RoomService.php');

class Rooms 
{
	
	function __construct()
	{
		$this->advertisers = new Advertiser();
	}

	function getRoomsData()
	{
		$room_service = new RoomService();
		$advertisers_data_array = $this->advertisers->getDataFromAdertiserApis();
		$advertisers_rooms_data_array = $room_service->getAdvertisersLowestPriceRooms($advertisers_data_array );
		return $advertisers_rooms_data_array;
		
	}
}
?>