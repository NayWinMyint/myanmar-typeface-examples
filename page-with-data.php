<?php
	include_once ("./functions/connection.php");
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Myanmar Typeface Examples</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<link href="./stylesheets/typography.css" rel="stylesheet">
		<link href="./stylesheets/main.css" rel="stylesheet">

		<?php include_once("header.php");?>
	</head>
	<body>
		<div class="container">

			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Saving Myanmar typeface to MySQL Database</h3>
				</div>
				<div class="panel-body">
					<form class="form-inline" id="newMyanmarTypefaceForm" method="get" action="./functions/data-save.php">

						<div class="m-b-10">
							<Label class="form-group m-r-10 w-150">Input in Myanmar3</Label>
							<input type="text" class="form-control mm-myanmar3 w-200" name="mm-Myanmar3" value="ကင်းခြေများ.ခြေတစ်ချောင်းကျိုး၍..အသွားမပျက်">
						</div>
						<div class="m-b-10">
							<Label class="form-group m-r-10 w-150">Input in Myanmar Census</Label>
							<input type="text" class="form-control mm-myanmarCensus w-200" name="mm-MyanmarCensus" value="ကင်းခြေများ.ခြေတစ်ချောင်းကျိုး၍..အသွားမပျက်">
						</div>
						<div class="m-b-10">
							<Label class="form-group m-r-10 w-150">Input in Unicode</Label>
							<input type="text" class="form-control mm-unicode w-200" name="mm-Unicode" value="ကင်းခြေများ.ခြေတစ်ချောင်းကျိုး၍..အသွားမပျက်">
						</div>
						<div class="m-b-10">
							<Label class="form-group m-r-10 w-150">Input in Padauk</Label>
							<input type="text" class="form-control mm-padauk w-200" name="mm-Padauk" value="ကင်းခြေများ.ခြေတစ်ချောင်းကျိုး၍..အသွားမပျက်">
						</div>
						<div class="m-b-10">
							<Label class="form-group m-r-10 w-150">Input in Zawgyi One</Label>
							<input type="text" class="form-control mm-zawgyione w-200" name="mm-ZawgyiOne" value="ကင္းေျခမ်ား.ေျခတစ္ေခ်ာင္းက်ဳိး၍..အသြားမပ်က္">
						</div>

            <button type="submit" class="btn btn-success">Submit</button>
					</form>
				</div>
			</div><!--./ in Input -->

      <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                      <th>Myanmar3</th>
                      <th>Myanmar Census</th>
                      <th>Unicode</th>
                      <th>Padauk</th>
                      <th>Zawgyi-One</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $sqlMyanmarText = "SELECT Myanmar3, MyanmarCensus, Unicode, Padauk, ZawgyiOne FROM tblMyanmarTypefaces";
                    $resultText     = mysqli_query($con, $sqlMyanmarText);
                    while($row = mysqli_fetch_array($resultText)){
                        $mmMyanmar3		   = $row['Myanmar3'];
                        $mmMyanmarCensus = $row['MyanmarCensus'];
                        $mmUnicode 	= $row['Unicode'];
                        $mmPadauk		= $row['Padauk'];
                        $mmZawgyiOne= $row['ZawgyiOne'];
                    echo "<tr>
                        <td class='mm-myanmar3'>".$mmMyanmar3."</td>
                        <td class='mm-myanmarCensus'>".$mmMyanmarCensus."</td>
                        <td class='mm-unicode'>".$mmUnicode."</td>
                        <td class='mm-padauk'>".$mmPadauk."</td>
                        <td class='mm-zawgyione'>".$mmZawgyiOne."</td>
                        </tr>";
                        }
                   ?>
                </tbody>
            </table>

        </div><!-- /.box-body -->

		</div><!-- container --->

		<div class="navbar amber navbar-static-bottom">
			<p class="navbar-text pull-left">Nay Win Myint @2016</p>
		</div>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	</body>
</html>
