<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title></title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
		<script src="https://releases.jquery.com/git/jquery-git.min.js"></script>
		<script src="./scripts.js"></script>
	</head>
	<body>
		<div class="container" style="margin: 10px;">
			<button class="btn btn-primary get_rooms_data" >get rooms data</button>
			<table class="table">
				<thead>
					<tr>
						<th scope="col">Advertiser</th>
						<th scope="col">Hotel</th>
						<th scope="col">Stars</th>
						<th scope="col">Room code</th>
						<th scope="col">Room type</th>
						<th scope="col">Room net price</th>
						<th scope="col">Room taxes</th>
						<th scope="col">Room price</th>
					</tr>
				</thead>
				<tbody class="rooms_table_data">
					
				</tbody>
			</table>
		</div>
		<!-- loader -->
		<div id="iframeloading" style= "display: none; position: fixed; top: 0px; left: 0px; width: 100%; height: 100%;">
			<img src="assests/images/loader.gif" alt="loading" style="top: 0px; position: fixed; left: 0px;"  />
		</div>
	</body>
</html>