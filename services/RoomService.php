<?php

/**
 * 
 */
class RoomService 
{
	
	function getAdvertisersLowestPriceRooms($advertisers_data_array)
	{
		$advertisers_rooms_data_array = [];

		// loop on all advertisers data
		foreach ($advertisers_data_array as $advertiser_key => $advertiser_hotels_data) {

		// loop on all hotels data foreach advertiser	
			foreach ($advertiser_hotels_data as $key => $advertiser_hotel_data) {
				$advertiser_hotel_data = (array) $advertiser_hotel_data;

				// loop on all rooms foreach hotel 
				foreach ($advertiser_hotel_data['rooms'] as $key => $advertiser_hotel_room_data) {

					$save_room = 1; // this variable to check if room will be saved or not

					$advertiser_hotel_room_data = (array) $advertiser_hotel_room_data;

					// getting room type from room['name'] if not set it will be single
					$room_type = isset($advertiser_hotel_room_data['name'])?$advertiser_hotel_room_data['name']:'Single Room';

					// total price sometimes saved in total and sometimes saved to toalPrice
					$room_total_price = isset($advertiser_hotel_room_data['total'])?$advertiser_hotel_room_data['total']:$advertiser_hotel_room_data['totalPrice'];

					// here check if room code and its type exsits if yes so total prices will be compared with each and the highest one will be removed
					$check_room_code = array_keys(array_column($advertisers_rooms_data_array, 'room_code'),$advertiser_hotel_room_data['code']);
					if (count($check_room_code)) {
						foreach ($check_room_code as $key => $value) {
							if ($advertisers_rooms_data_array[$value]['room_type'] == $room_type) {

								if ($advertisers_rooms_data_array[$value]['room_price'] > $room_total_price) {
									unset($advertisers_rooms_data_array[$value]);
									$advertisers_rooms_data_array = array_values($advertisers_rooms_data_array);
								}
								else
								{
									$save_room = 0;
								}
							}
						}
					}
					if ($save_room) {
						$taxes = $advertiser_hotel_room_data['taxes'];
						if (is_array($taxes)) {
							$taxes = $taxes[0];
						}
						$taxes = (array) $taxes;

						$rooms_data_array['advertister_number'] = $advertiser_key + 1;
						$rooms_data_array['hotel_name'] = $advertiser_hotel_data['name'];
						$rooms_data_array['hotel_stars'] = $advertiser_hotel_data['stars'];
						$rooms_data_array['room_code'] = $advertiser_hotel_room_data['code'];
						$rooms_data_array['room_type'] = $room_type;
						$rooms_data_array['room_net_price'] = isset($advertiser_hotel_room_data['net_price'])?$advertiser_hotel_room_data['net_price']:$advertiser_hotel_room_data['net_rate'];
						
						$rooms_data_array['room_taxes'] = $taxes['amount'];
						$rooms_data_array['room_price'] = $room_total_price;

						array_push($advertisers_rooms_data_array,$rooms_data_array);
					}
					
					
				}	
			}
		}

		return $advertisers_rooms_data_array;
	}
}
?>