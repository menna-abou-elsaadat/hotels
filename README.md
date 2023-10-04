How to run the project
=======================

1- clone the repo.
2- run composer update.
3- hit this url http://localhost/hotels/index.php.
4- when you open up the above link you will find empty table and a button, please click on the button to load filtered rooms details and you can refresh the data from the same button.
5- you can use this http://localhost/hotels/roomRouteHandler.php?action=getRoomsData to get filtered rooms data in json format

note
====
 All advertisers api are located in config.php in form of array so if you want you add an extra api add it there.

 Design pattern used
 ====================
 - I used mvc design pattern.
 - view (views/rooms_table.php) contains html code
 	1- I used bootstrap in styling the table where rooms details will be shown 
	2- There is a button when it is clicked a jquery function (located in scripts.js) is called to load filtered rooms data and append it to the table.

  - controller (controllers/RoomController) It is a class containing getRoomsData function 
  		this function creates an object from room model to get room data then convert it to json data.

  - model 

  		- models/Advertiser.php: contains getDataFromAdertiserApis function to load data  from advertisers api located in config.php
  		- models/Rooms.php : It get advertisers data array from Advertiser model and then create an object from RoomService to filter these data.

  	- service (services/RoomService.php) has a function to filter rooms data to return lowest price of same room code and room type.

  	Tests
  	======
  	- phpunit fromwork is used
  	- use (./vendor/bin/phpunit tests ) to run tests






