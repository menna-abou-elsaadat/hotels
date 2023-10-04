<?php

use PHPUnit\Framework\TestCase;

final class RoomTest extends TestCase
{

	public function testGetRoomData():void
	{
		require_once('./controllers/RoomController.php');

		$room_controller = new RoomController();
		$this->assertJson($room_controller->getRoomsData());
	}

	public function testGetDataFromAdertiserApis():void
	{
		require_once('./models/Advertiser.php');
		
		$advertisers_obj = new Advertiser();
		$this->assertNotEmpty($advertisers_obj->getDataFromAdertiserApis());
	}

}

?>