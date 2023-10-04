<?php
/**
*
*/
require('./config.php');

class Advertiser
{
	function getDataFromAdertiserApis()
	{
		$advertisers_api = Advertisers;
		$advertisers_data_array = [];
		foreach ($advertisers_api as $key => $advertiser) {
			$advertiser_json_data = file_get_contents($advertiser);
			if ($advertiser_json_data !== false) {
				$advertiser_data_array = json_decode($advertiser_json_data);
				array_push($advertisers_data_array, $advertiser_data_array);
			}
		}

		return $advertisers_data_array;

	}
}

?>