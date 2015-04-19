	<?php
	$username = "root";   //PHPmyadmin User
    $password = "mattmichael.";    //PHPmyadmin Password
    $hostname = "localhost";   //PHPmyadmin host ip

    $dbhandle = mysql_connect($hostname, $username, $password) or die("Could not connect to database");
    //Connects phpmyadmin using info above or errors if failed

    $selected = mysql_select_db("sigma", $dbhandle);
    //connected to the database

    $query = "SELECT * FROM 9amstaff";
    //grabs username and password info from database query
    $result = mysql_query($query, $dbhandle); //gets result of query

    $final = mysql_fetch_array($result);
	?>

<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Web Calendar</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
	<div id="big_wrapper">
		<header id="top_header">
			<h1>Welcome to Web Calendar</h1>
		</header>

		<table id="calendar_table">
	    <thead>
	        <tr>
	            <th>&nbsp;</th>
	            <th id="weeknames" width="20%">Monday</th>
	            <th id="weeknames" width="20%">Tuesday</th>
	            <th id="weeknames" width="20%">Wednesday</th>
	            <th id="weeknames" width="20%">Thursday</th>
	            <th id="weeknames" width="20%">Friday</th>
	        </tr>
	    </thead>

	    <tbody>

	    <?php  
	    $count =  mysql_num_rows($result);
	   
	    ?>
	        <tr>
	            <td>09:00</td>
	            <?php 
	               	$Mondayquery = "SELECT Monday FROM 9amstaff";
				    //grabs username and password info from database query
				    $Mondayresult = mysql_query($Mondayquery, $dbhandle); //gets result of query

				    $Mondayfinal = mysql_fetch_array($Mondayresult);
	            error_reporting(0); if($Mondayfinal[0] == ""){echo '<td id="no-events" rowspan="1">';}else{
	            	echo '<td id="has-events" rowspan="2">
	            	 <div id="details" style="width: 99%; height: 96%;">
	                     <span id="lecturer"><a>' . $Mondayfinal[0] . '</a></span> 
	                </div>
	                </td>
	            	';
	            	}; ?>
	               
	            
	             <?php 
	               	$Tuesdayquery = "SELECT Tuesday FROM 9amstaff";
				    //grabs username and password info from database query
				    $Tuesdayresult = mysql_query($Tuesdayquery, $dbhandle); //gets result of query

				    $Tuesdayfinal = mysql_fetch_array($Tuesdayresult);
	            error_reporting(0); if($Tuesdayfinal[0] == ""){echo '<td id="no-events" rowspan="1">';}else{
	            	echo '<td id="has-events" rowspan="2">
	            	 <div id="details" style="width: 99%; height: 96%;">
	                     <span id="lecturer"><a>' . $Tuesdayfinal[0] . '</a></span> 
	                </div>
	                </td>
	            	';
	            	}; ?>
	            		<!-- dsgsdgsf -->
	            <?php 
	               	$Wednesdayquery = "SELECT Wednesday FROM 9amstaff";
				    //grabs username and password info from database query
				    $Wednesdayresult = mysql_query($Wednesdayquery, $dbhandle); //gets result of query

				    $Wednesdayfinal = mysql_fetch_array($Wednesdayresult);
	            error_reporting(0); if($Wednesdayfinal[0] == ""){echo '<td id="no-events" rowspan="1">';}else{
	            	echo '<td id="has-events" rowspan="2">
	            	 <div id="details" style="width: 99%; height: 96%;">
	                     <span id="lecturer"><a>' . $Wednesdayfinal[0] . '</a></span> 
	                </div>
	                </td>
	            	';
	            	}; ?>

	          <?php 
	               	$Thursdayquery = "SELECT Thursday FROM 9amstaff";
				    //grabs username and password info from database query
				    $Thursdayresult = mysql_query($Thursdayquery, $dbhandle); //gets result of query

				    $Thursdayfinal = mysql_fetch_array($Thursdayresult);
	            error_reporting(0); if($Thursdayfinal[0] == ""){echo '<td id="no-events" rowspan="1">';}else{
	            	echo '<td id="has-events" rowspan="2">
	            	 <div id="details" style="width: 99%; height: 96%;">
	                     <span id="lecturer"><a>' . $Thursdayfinal[0] . '</a></span> 
	                </div>
	                </td>
	            	';
	            	}; ?>

	             <?php 
	               	$Fridayquery = "SELECT Friday FROM 9amstaff";
				    //grabs username and password info from database query
				    $Fridayresult = mysql_query($Fridayquery, $dbhandle); //gets result of query

				    $Fridayfinal = mysql_fetch_array($Fridayresult);
	            error_reporting(0); if($Fridayfinal[0] == ""){echo '<td id="no-events" rowspan="1">';}else{
	            	echo '<td id="has-events" rowspan="2">
	            	 <div id="details" style="width: 99%; height: 96%;">
	                     <span id="lecturer"><a>' . $Fridayfinal[0] . '</a></span> 
	                </div>
	                </td>
	            	';
	            	}; ?>
	        </tr>

	        <tr>
	            <td>09:30</td>
	            <td id="no-events" rowspan="1"></td>
	            <td id="no-events" rowspan="1"></td>
	            <td id="no-events" rowspan="1"></td>
	            <td id="no-events" rowspan="1"></td>
	            <td id="no-events" rowspan="1"></td>
	        </tr>

 		<tr>
            <td>10:00</td>
            	            <?php 
	               	$Mondayquery = "SELECT Monday FROM 9amstaff WHERE id = 2";
				    //grabs username and password info from database query
				    $Mondayresult = mysql_query($Mondayquery, $dbhandle); //gets result of query

				    $Mondayfinal = mysql_fetch_array($Mondayresult);
	            error_reporting(0); if($Mondayfinal[0] == ""){echo '<td id="no-events" rowspan="1">';}else{
	            	echo '<td id="has-events" rowspan="2">
	            	 <div id="details" style="width: 99%; height: 96%;">
	                     <span id="lecturer"><a>' . $Mondayfinal[0] . '</a></span> 
	                </div>
	                </td>
	            	';
	            	}; ?>
	               
	            
	             <?php 
	               	$Tuesdayquery = "SELECT Tuesday FROM 9amstaff WHERE id = 2";
				    //grabs username and password info from database query
				    $Tuesdayresult = mysql_query($Tuesdayquery, $dbhandle); //gets result of query

				    $Tuesdayfinal = mysql_fetch_array($Tuesdayresult);
	            error_reporting(0); if($Tuesdayfinal[0] == ""){echo '<td id="no-events" rowspan="1">';}else{
	            	echo '<td id="has-events" rowspan="2">
	            	 <div id="details" style="width: 99%; height: 96%;">
	                     <span id="lecturer"><a>' . $Tuesdayfinal[0] . '</a></span> 
	                </div>
	                </td>
	            	';
	            	}; ?>
	            		
	            <?php 
	               	$Wednesdayquery = "SELECT Wednesday FROM 9amstaff WHERE id = 2";
				    //grabs username and password info from database query
				    $Wednesdayresult = mysql_query($Wednesdayquery, $dbhandle); //gets result of query

				    $Wednesdayfinal = mysql_fetch_array($Wednesdayresult);
	            error_reporting(0); if($Wednesdayfinal[0] == ""){echo '<td id="no-events" rowspan="1">';}else{
	            	echo '<td id="has-events" rowspan="2">
	            	 <div id="details" style="width: 99%; height: 96%;">
	                     <span id="lecturer"><a>' . $Wednesdayfinal[0] . '</a></span> 
	                </div>
	                </td>
	            	';
	            	}; ?>

	          <?php 
	               	$Thursdayquery = "SELECT Thursday FROM 9amstaff WHERE id = 2";
				    //grabs username and password info from database query
				    $Thursdayresult = mysql_query($Thursdayquery, $dbhandle); //gets result of query

				    $Thursdayfinal = mysql_fetch_array($Thursdayresult);
	            error_reporting(0); if($Thursdayfinal[0] == ""){echo '<td id="no-events" rowspan="1">';}else{
	            	echo '<td id="has-events" rowspan="2">
	            	 <div id="details" style="width: 99%; height: 96%;">
	                     <span id="lecturer"><a>' . $Thursdayfinal[0] . '</a></span> 
	                </div>
	                </td>
	            	';
	            	}; ?>

	             <?php 
	               	$Fridayquery = "SELECT Friday FROM 9amstaff WHERE id = 2";
				    //grabs username and password info from database query
				    $Fridayresult = mysql_query($Fridayquery, $dbhandle); //gets result of query

				    $Fridayfinal = mysql_fetch_array($Fridayresult);
	            error_reporting(0); if($Fridayfinal[0] == ""){echo '<td id="no-events" rowspan="1">';}else{
	            	echo '<td id="has-events" rowspan="2">
	            	 <div id="details" style="width: 99%; height: 96%;">
	                     <span id="lecturer"><a>' . $Fridayfinal[0] . '</a></span> 
	                </div>
	                </td>
	            	';
	            	}; ?>
           	
        </tr>

        <tr>
            <td>10:30</td>
            <td id="no-events" rowspan="1"></td>
            <td id="no-events" rowspan="1"></td>
            <td id="no-events" rowspan="1"></td>
            <td id="no-events" rowspan="1"></td>
            <td id="no-events" rowspan="1"></td>
        </tr>

        <tr>
            <td>11:00</td>
          	                  	            <?php 
	               	$Mondayquery = "SELECT Monday FROM 9amstaff WHERE id = 3";
				    //grabs username and password info from database query
				    $Mondayresult = mysql_query($Mondayquery, $dbhandle); //gets result of query

				    $Mondayfinal = mysql_fetch_array($Mondayresult);
	            error_reporting(0); if($Mondayfinal[0] == ""){echo '<td id="no-events" rowspan="1">';}else{
	            	echo '<td id="has-events" rowspan="2">
	            	 <div id="details" style="width: 99%; height: 96%;">
	                     <span id="lecturer"><a>' . $Mondayfinal[0] . '</a></span> 
	                </div>
	                </td>
	            	';
	            	}; ?>
	               
	            
	             <?php 
	               	$Tuesdayquery = "SELECT Tuesday FROM 9amstaff WHERE id = 3";
				    //grabs username and password info from database query
				    $Tuesdayresult = mysql_query($Tuesdayquery, $dbhandle); //gets result of query

				    $Tuesdayfinal = mysql_fetch_array($Tuesdayresult);
	            error_reporting(0); if($Tuesdayfinal[0] == ""){echo '<td id="no-events" rowspan="1">';}else{
	            	echo '<td id="has-events" rowspan="2">
	            	 <div id="details" style="width: 99%; height: 96%;">
	                     <span id="lecturer"><a>' . $Tuesdayfinal[0] . '</a></span> 
	                </div>
	                </td>
	            	';
	            	}; ?>
	            		
	            <?php 
	               	$Wednesdayquery = "SELECT Wednesday FROM 9amstaff WHERE id = 3";
				    //grabs username and password info from database query
				    $Wednesdayresult = mysql_query($Wednesdayquery, $dbhandle); //gets result of query

				    $Wednesdayfinal = mysql_fetch_array($Wednesdayresult);
	            error_reporting(0); if($Wednesdayfinal[0] == ""){echo '<td id="no-events" rowspan="1">';}else{
	            	echo '<td id="has-events" rowspan="2">
	            	 <div id="details" style="width: 99%; height: 96%;">
	                     <span id="lecturer"><a>' . $Wednesdayfinal[0] . '</a></span> 
	                </div>
	                </td>
	            	';
	            	}; ?>

	          <?php 
	               	$Thursdayquery = "SELECT Thursday FROM 9amstaff WHERE id = 3";
				    //grabs username and password info from database query
				    $Thursdayresult = mysql_query($Thursdayquery, $dbhandle); //gets result of query

				    $Thursdayfinal = mysql_fetch_array($Thursdayresult);
	            error_reporting(0); if($Thursdayfinal[0] == ""){echo '<td id="no-events" rowspan="1">';}else{
	            	echo '<td id="has-events" rowspan="2">
	            	 <div id="details" style="width: 99%; height: 96%;">
	                     <span id="lecturer"><a>' . $Thursdayfinal[0] . '</a></span> 
	                </div>
	                </td>
	            	';
	            	}; ?>

	             <?php 
	               	$Fridayquery = "SELECT Friday FROM 9amstaff WHERE id = 3";
				    //grabs username and password info from database query
				    $Fridayresult = mysql_query($Fridayquery, $dbhandle); //gets result of query

				    $Fridayfinal = mysql_fetch_array($Fridayresult);
	            error_reporting(0); if($Fridayfinal[0] == ""){echo '<td id="no-events" rowspan="1">';}else{
	            	echo '<td id="has-events" rowspan="2">
	            	 <div id="details" style="width: 99%; height: 96%;">
	                     <span id="lecturer"><a>' . $Fridayfinal[0] . '</a></span> 
	                </div>
	                </td>
	            	';
	            	}; ?>
        </tr>

        <tr>
            <td>11:30</td>
            <td id="no-events" rowspan="1"></td>
            <td id="no-events" rowspan="1"></td>
            <td id="no-events" rowspan="1"></td>
            <td id="no-events" rowspan="1"></td>
            <td id="no-events" rowspan="1"></td>
        </tr>

 		<tr>
            <td>12:00</td>
          	                	            <?php 
	               	$Mondayquery = "SELECT Monday FROM 9amstaff WHERE id = 4";
				    //grabs username and password info from database query
				    $Mondayresult = mysql_query($Mondayquery, $dbhandle); //gets result of query

				    $Mondayfinal = mysql_fetch_array($Mondayresult);
	            error_reporting(0); if($Mondayfinal[0] == ""){echo '<td id="no-events" rowspan="1">';}else{
	            	echo '<td id="has-events" rowspan="2">
	            	 <div id="details" style="width: 99%; height: 96%;">
	                     <span id="lecturer"><a>' . $Mondayfinal[0] . '</a></span> 
	                </div>
	                </td>
	            	';
	            	}; ?>
	               
	            
	             <?php 
	               	$Tuesdayquery = "SELECT Tuesday FROM 9amstaff WHERE id = 4";
				    //grabs username and password info from database query
				    $Tuesdayresult = mysql_query($Tuesdayquery, $dbhandle); //gets result of query

				    $Tuesdayfinal = mysql_fetch_array($Tuesdayresult);
	            error_reporting(0); if($Tuesdayfinal[0] == ""){echo '<td id="no-events" rowspan="1">';}else{
	            	echo '<td id="has-events" rowspan="2">
	            	 <div id="details" style="width: 99%; height: 96%;">
	                     <span id="lecturer"><a>' . $Tuesdayfinal[0] . '</a></span> 
	                </div>
	                </td>
	            	';
	            	}; ?>
	            		
	            <?php 
	               	$Wednesdayquery = "SELECT Wednesday FROM 9amstaff WHERE id = 4";
				    //grabs username and password info from database query
				    $Wednesdayresult = mysql_query($Wednesdayquery, $dbhandle); //gets result of query

				    $Wednesdayfinal = mysql_fetch_array($Wednesdayresult);
	            error_reporting(0); if($Wednesdayfinal[0] == ""){echo '<td id="no-events" rowspan="1">';}else{
	            	echo '<td id="has-events" rowspan="2">
	            	 <div id="details" style="width: 99%; height: 96%;">
	                     <span id="lecturer"><a>' . $Wednesdayfinal[0] . '</a></span> 
	                </div>
	                </td>
	            	';
	            	}; ?>

	          <?php 
	               	$Thursdayquery = "SELECT Thursday FROM 9amstaff WHERE id = 4";
				    //grabs username and password info from database query
				    $Thursdayresult = mysql_query($Thursdayquery, $dbhandle); //gets result of query

				    $Thursdayfinal = mysql_fetch_array($Thursdayresult);
	            error_reporting(0); if($Thursdayfinal[0] == ""){echo '<td id="no-events" rowspan="1">';}else{
	            	echo '<td id="has-events" rowspan="2">
	            	 <div id="details" style="width: 99%; height: 96%;">
	                     <span id="lecturer"><a>' . $Thursdayfinal[0] . '</a></span> 
	                </div>
	                </td>
	            	';
	            	}; ?>

	             <?php 
	               	$Fridayquery = "SELECT Friday FROM 9amstaff WHERE id = 4";
				    //grabs username and password info from database query
				    $Fridayresult = mysql_query($Fridayquery, $dbhandle); //gets result of query

				    $Fridayfinal = mysql_fetch_array($Fridayresult);
	            error_reporting(0); if($Fridayfinal[0] == ""){echo '<td id="no-events" rowspan="1">';}else{
	            	echo '<td id="has-events" rowspan="2">
	            	 <div id="details" style="width: 99%; height: 96%;">
	                     <span id="lecturer"><a>' . $Fridayfinal[0] . '</a></span> 
	                </div>
	                </td>
	            	';
	            	}; ?>
        </tr>

        <tr>
            <td>12:30</td>
            <td id="no-events" rowspan="1"></td>
            <td id="no-events" rowspan="1"></td>
            <td id="no-events" rowspan="1"></td>
            <td id="no-events" rowspan="1"></td>
            <td id="no-events" rowspan="1"></td>
        </tr>

        <tr>
            <td>13:00</td>
          	                    	                	            <?php 
	               	$Mondayquery = "SELECT Monday FROM 9amstaff WHERE id = 5";
				    //grabs username and password info from database query
				    $Mondayresult = mysql_query($Mondayquery, $dbhandle); //gets result of query

				    $Mondayfinal = mysql_fetch_array($Mondayresult);
	            error_reporting(0); if($Mondayfinal[0] == ""){echo '<td id="no-events" rowspan="1">';}else{
	            	echo '<td id="has-events" rowspan="2">
	            	 <div id="details" style="width: 99%; height: 96%;">
	                     <span id="lecturer"><a>' . $Mondayfinal[0] . '</a></span> 
	                </div>
	                </td>
	            	';
	            	}; ?>
	               
	            
	             <?php 
	               	$Tuesdayquery = "SELECT Tuesday FROM 9amstaff WHERE id = 5";
				    //grabs username and password info from database query
				    $Tuesdayresult = mysql_query($Tuesdayquery, $dbhandle); //gets result of query

				    $Tuesdayfinal = mysql_fetch_array($Tuesdayresult);
	            error_reporting(0); if($Tuesdayfinal[0] == ""){echo '<td id="no-events" rowspan="1">';}else{
	            	echo '<td id="has-events" rowspan="2">
	            	 <div id="details" style="width: 99%; height: 96%;">
	                     <span id="lecturer"><a>' . $Tuesdayfinal[0] . '</a></span> 
	                </div>
	                </td>
	            	';
	            	}; ?>
	            		
	            <?php 
	               	$Wednesdayquery = "SELECT Wednesday FROM 9amstaff WHERE id = 5";
				    //grabs username and password info from database query
				    $Wednesdayresult = mysql_query($Wednesdayquery, $dbhandle); //gets result of query

				    $Wednesdayfinal = mysql_fetch_array($Wednesdayresult);
	            error_reporting(0); if($Wednesdayfinal[0] == ""){echo '<td id="no-events" rowspan="1">';}else{
	            	echo '<td id="has-events" rowspan="2">
	            	 <div id="details" style="width: 99%; height: 96%;">
	                     <span id="lecturer"><a>' . $Wednesdayfinal[0] . '</a></span> 
	                </div>
	                </td>
	            	';
	            	}; ?>

	          <?php 
	               	$Thursdayquery = "SELECT Thursday FROM 9amstaff WHERE id = 5";
				    //grabs username and password info from database query
				    $Thursdayresult = mysql_query($Thursdayquery, $dbhandle); //gets result of query

				    $Thursdayfinal = mysql_fetch_array($Thursdayresult);
	            error_reporting(0); if($Thursdayfinal[0] == ""){echo '<td id="no-events" rowspan="1">';}else{
	            	echo '<td id="has-events" rowspan="2">
	            	 <div id="details" style="width: 99%; height: 96%;">
	                     <span id="lecturer"><a>' . $Thursdayfinal[0] . '</a></span> 
	                </div>
	                </td>
	            	';
	            	}; ?>

	             <?php 
	               	$Fridayquery = "SELECT Friday FROM 9amstaff WHERE id = 5";
				    //grabs username and password info from database query
				    $Fridayresult = mysql_query($Fridayquery, $dbhandle); //gets result of query

				    $Fridayfinal = mysql_fetch_array($Fridayresult);
	            error_reporting(0); if($Fridayfinal[0] == ""){echo '<td id="no-events" rowspan="1">';}else{
	            	echo '<td id="has-events" rowspan="2">
	            	 <div id="details" style="width: 99%; height: 96%;">
	                     <span id="lecturer"><a>' . $Fridayfinal[0] . '</a></span> 
	                </div>
	                </td>
	            	';
	            	}; ?>
        </tr>

        <tr>
            <td>13:30</td>
            <td id="no-events" rowspan="1"></td>
            <td id="no-events" rowspan="1"></td>
            <td id="no-events" rowspan="1"></td>
            <td id="no-events" rowspan="1"></td>
            <td id="no-events" rowspan="1"></td>
        </tr>

        <tr>
       	 <td>14:00</td>
          	                   	                	            <?php 
	               	$Mondayquery = "SELECT Monday FROM 9amstaff WHERE id = 6";
				    //grabs username and password info from database query
				    $Mondayresult = mysql_query($Mondayquery, $dbhandle); //gets result of query

				    $Mondayfinal = mysql_fetch_array($Mondayresult);
	            error_reporting(0); if($Mondayfinal[0] == ""){echo '<td id="no-events" rowspan="1">';}else{
	            	echo '<td id="has-events" rowspan="2">
	            	 <div id="details" style="width: 99%; height: 96%;">
	                     <span id="lecturer"><a>' . $Mondayfinal[0] . '</a></span> 
	                </div>
	                </td>
	            	';
	            	}; ?>
	               
	            
	             <?php 
	               	$Tuesdayquery = "SELECT Tuesday FROM 9amstaff WHERE id = 6";
				    //grabs username and password info from database query
				    $Tuesdayresult = mysql_query($Tuesdayquery, $dbhandle); //gets result of query

				    $Tuesdayfinal = mysql_fetch_array($Tuesdayresult);
	            error_reporting(0); if($Tuesdayfinal[0] == ""){echo '<td id="no-events" rowspan="1">';}else{
	            	echo '<td id="has-events" rowspan="2">
	            	 <div id="details" style="width: 99%; height: 96%;">
	                     <span id="lecturer"><a>' . $Tuesdayfinal[0] . '</a></span> 
	                </div>
	                </td>
	            	';
	            	}; ?>
	            		
	            <?php 
	               	$Wednesdayquery = "SELECT Wednesday FROM 9amstaff WHERE id = 6";
				    //grabs username and password info from database query
				    $Wednesdayresult = mysql_query($Wednesdayquery, $dbhandle); //gets result of query

				    $Wednesdayfinal = mysql_fetch_array($Wednesdayresult);
	            error_reporting(0); if($Wednesdayfinal[0] == ""){echo '<td id="no-events" rowspan="1">';}else{
	            	echo '<td id="has-events" rowspan="2">
	            	 <div id="details" style="width: 99%; height: 96%;">
	                     <span id="lecturer"><a>' . $Wednesdayfinal[0] . '</a></span> 
	                </div>
	                </td>
	            	';
	            	}; ?>

	          <?php 
	               	$Thursdayquery = "SELECT Thursday FROM 9amstaff WHERE id = 6";
				    //grabs username and password info from database query
				    $Thursdayresult = mysql_query($Thursdayquery, $dbhandle); //gets result of query

				    $Thursdayfinal = mysql_fetch_array($Thursdayresult);
	            error_reporting(0); if($Thursdayfinal[0] == ""){echo '<td id="no-events" rowspan="1">';}else{
	            	echo '<td id="has-events" rowspan="2">
	            	 <div id="details" style="width: 99%; height: 96%;">
	                     <span id="lecturer"><a>' . $Thursdayfinal[0] . '</a></span> 
	                </div>
	                </td>
	            	';
	            	}; ?>

	             <?php 
	               	$Fridayquery = "SELECT Friday FROM 9amstaff WHERE id = 6";
				    //grabs username and password info from database query
				    $Fridayresult = mysql_query($Fridayquery, $dbhandle); //gets result of query

				    $Fridayfinal = mysql_fetch_array($Fridayresult);
	            error_reporting(0); if($Fridayfinal[0] == ""){echo '<td id="no-events" rowspan="1">';}else{
	            	echo '<td id="has-events" rowspan="2">
	            	 <div id="details" style="width: 99%; height: 96%;">
	                     <span id="lecturer"><a>' . $Fridayfinal[0] . '</a></span> 
	                </div>
	                </td>
	            	';
	            	}; ?>
        </tr>

        <tr>
            <td>14:30</td>
            <td id="no-events" rowspan="1"></td>
            <td id="no-events" rowspan="1"></td>
            <td id="no-events" rowspan="1"></td>
            <td id="no-events" rowspan="1"></td>
            <td id="no-events" rowspan="1"></td>
        </tr>

        <tr>
            <td>15:00</td>
          	                     	                	            <?php 
	               	$Mondayquery = "SELECT Monday FROM 9amstaff WHERE id = 7";
				    //grabs username and password info from database query
				    $Mondayresult = mysql_query($Mondayquery, $dbhandle); //gets result of query

				    $Mondayfinal = mysql_fetch_array($Mondayresult);
	            error_reporting(0); if($Mondayfinal[0] == ""){echo '<td id="no-events" rowspan="1">';}else{
	            	echo '<td id="has-events" rowspan="2">
	            	 <div id="details" style="width: 99%; height: 96%;">
	                     <span id="lecturer"><a>' . $Mondayfinal[0] . '</a></span> 
	                </div>
	                </td>
	            	';
	            	}; ?>
	               
	            
	             <?php 
	               	$Tuesdayquery = "SELECT Tuesday FROM 9amstaff WHERE id = 7";
				    //grabs username and password info from database query
				    $Tuesdayresult = mysql_query($Tuesdayquery, $dbhandle); //gets result of query

				    $Tuesdayfinal = mysql_fetch_array($Tuesdayresult);
	            error_reporting(0); if($Tuesdayfinal[0] == ""){echo '<td id="no-events" rowspan="1">';}else{
	            	echo '<td id="has-events" rowspan="2">
	            	 <div id="details" style="width: 99%; height: 96%;">
	                     <span id="lecturer"><a>' . $Tuesdayfinal[0] . '</a></span> 
	                </div>
	                </td>
	            	';
	            	}; ?>
	            		
	            <?php 
	               	$Wednesdayquery = "SELECT Wednesday FROM 9amstaff WHERE id = 7";
				    //grabs username and password info from database query
				    $Wednesdayresult = mysql_query($Wednesdayquery, $dbhandle); //gets result of query

				    $Wednesdayfinal = mysql_fetch_array($Wednesdayresult);
	            error_reporting(0); if($Wednesdayfinal[0] == ""){echo '<td id="no-events" rowspan="1">';}else{
	            	echo '<td id="has-events" rowspan="2">
	            	 <div id="details" style="width: 99%; height: 96%;">
	                     <span id="lecturer"><a>' . $Wednesdayfinal[0] . '</a></span> 
	                </div>
	                </td>
	            	';
	            	}; ?>

	          <?php 
	               	$Thursdayquery = "SELECT Thursday FROM 9amstaff WHERE id = 7";
				    //grabs username and password info from database query
				    $Thursdayresult = mysql_query($Thursdayquery, $dbhandle); //gets result of query

				    $Thursdayfinal = mysql_fetch_array($Thursdayresult);
	            error_reporting(0); if($Thursdayfinal[0] == ""){echo '<td id="no-events" rowspan="1">';}else{
	            	echo '<td id="has-events" rowspan="2">
	            	 <div id="details" style="width: 99%; height: 96%;">
	                     <span id="lecturer"><a>' . $Thursdayfinal[0] . '</a></span> 
	                </div>
	                </td>
	            	';
	            	}; ?>

	             <?php 
	               	$Fridayquery = "SELECT Friday FROM 9amstaff WHERE id = 7";
				    //grabs username and password info from database query
				    $Fridayresult = mysql_query($Fridayquery, $dbhandle); //gets result of query

				    $Fridayfinal = mysql_fetch_array($Fridayresult);
	            error_reporting(0); if($Fridayfinal[0] == ""){echo '<td id="no-events" rowspan="1">';}else{
	            	echo '<td id="has-events" rowspan="2">
	            	 <div id="details" style="width: 99%; height: 96%;">
	                     <span id="lecturer"><a>' . $Fridayfinal[0] . '</a></span> 
	                </div>
	                </td>
	            	';
	            	}; ?>
        </tr>

        <tr>
            <td>15:30</td>
            <td id="no-events" rowspan="1"></td>
            <td id="no-events" rowspan="1"></td>
            <td id="no-events" rowspan="1"></td>
            <td id="no-events" rowspan="1"></td>
            <td id="no-events" rowspan="1"></td>
        </tr>

        <tr>
            <td>16:00</td>
          	                     	                	            <?php 
	               	$Mondayquery = "SELECT Monday FROM 9amstaff WHERE id = 8";
				    //grabs username and password info from database query
				    $Mondayresult = mysql_query($Mondayquery, $dbhandle); //gets result of query

				    $Mondayfinal = mysql_fetch_array($Mondayresult);
	            error_reporting(0); if($Mondayfinal[0] == ""){echo '<td id="no-events" rowspan="1">';}else{
	            	echo '<td id="has-events" rowspan="2">
	            	 <div id="details" style="width: 99%; height: 96%;">
	                     <span id="lecturer"><a>' . $Mondayfinal[0] . '</a></span> 
	                </div>
	                </td>
	            	';
	            	}; ?>
	               
	            
	             <?php 
	               	$Tuesdayquery = "SELECT Tuesday FROM 9amstaff WHERE id = 8";
				    //grabs username and password info from database query
				    $Tuesdayresult = mysql_query($Tuesdayquery, $dbhandle); //gets result of query

				    $Tuesdayfinal = mysql_fetch_array($Tuesdayresult);
	            error_reporting(0); if($Tuesdayfinal[0] == ""){echo '<td id="no-events" rowspan="1">';}else{
	            	echo '<td id="has-events" rowspan="2">
	            	 <div id="details" style="width: 99%; height: 96%;">
	                     <span id="lecturer"><a>' . $Tuesdayfinal[0] . '</a></span> 
	                </div>
	                </td>
	            	';
	            	}; ?>
	            		
	            <?php 
	               	$Wednesdayquery = "SELECT Wednesday FROM 9amstaff WHERE id = 8";
				    //grabs username and password info from database query
				    $Wednesdayresult = mysql_query($Wednesdayquery, $dbhandle); //gets result of query

				    $Wednesdayfinal = mysql_fetch_array($Wednesdayresult);
	            error_reporting(0); if($Wednesdayfinal[0] == ""){echo '<td id="no-events" rowspan="1">';}else{
	            	echo '<td id="has-events" rowspan="2">
	            	 <div id="details" style="width: 99%; height: 96%;">
	                     <span id="lecturer"><a>' . $Wednesdayfinal[0] . '</a></span> 
	                </div>
	                </td>
	            	';
	            	}; ?>

	          <?php 
	               	$Thursdayquery = "SELECT Thursday FROM 9amstaff WHERE id = 8";
				    //grabs username and password info from database query
				    $Thursdayresult = mysql_query($Thursdayquery, $dbhandle); //gets result of query

				    $Thursdayfinal = mysql_fetch_array($Thursdayresult);
	            error_reporting(0); if($Thursdayfinal[0] == ""){echo '<td id="no-events" rowspan="1">';}else{
	            	echo '<td id="has-events" rowspan="2">
	            	 <div id="details" style="width: 99%; height: 96%;">
	                     <span id="lecturer"><a>' . $Thursdayfinal[0] . '</a></span> 
	                </div>
	                </td>
	            	';
	            	}; ?>

	             <?php 
	               	$Fridayquery = "SELECT Friday FROM 9amstaff WHERE id = 8";
				    //grabs username and password info from database query
				    $Fridayresult = mysql_query($Fridayquery, $dbhandle); //gets result of query

				    $Fridayfinal = mysql_fetch_array($Fridayresult);
	            error_reporting(0); if($Fridayfinal[0] == ""){echo '<td id="no-events" rowspan="1">';}else{
	            	echo '<td id="has-events" rowspan="2">
	            	 <div id="details" style="width: 99%; height: 96%;">
	                     <span id="lecturer"><a>' . $Fridayfinal[0] . '</a></span> 
	                </div>
	                </td>
	            	';
	            	}; ?>
        </tr>

        <tr>
            <td>16:30</td>
            <td id="no-events" rowspan="1"></td>
            <td id="no-events" rowspan="1"></td>
            <td id="no-events" rowspan="1"></td>
            <td id="no-events" rowspan="1"></td>
            <td id="no-events" rowspan="1"></td>
        </tr>

        <tr>
            <td>17:00</td>
          	                     	                	            <?php 
	               	$Mondayquery = "SELECT Monday FROM 9amstaff WHERE id = 9";
				    //grabs username and password info from database query
				    $Mondayresult = mysql_query($Mondayquery, $dbhandle); //gets result of query

				    $Mondayfinal = mysql_fetch_array($Mondayresult);
	            error_reporting(0); if($Mondayfinal[0] == ""){echo '<td id="no-events" rowspan="1">';}else{
	            	echo '<td id="has-events" rowspan="2">
	            	 <div id="details" style="width: 99%; height: 96%;">
	                     <span id="lecturer"><a>' . $Mondayfinal[0] . '</a></span> 
	                </div>
	                </td>
	            	';
	            	}; ?>
	               
	            
	             <?php 
	               	$Tuesdayquery = "SELECT Tuesday FROM 9amstaff WHERE id = 9";
				    //grabs username and password info from database query
				    $Tuesdayresult = mysql_query($Tuesdayquery, $dbhandle); //gets result of query

				    $Tuesdayfinal = mysql_fetch_array($Tuesdayresult);
	            error_reporting(0); if($Tuesdayfinal[0] == ""){echo '<td id="no-events" rowspan="1">';}else{
	            	echo '<td id="has-events" rowspan="2">
	            	 <div id="details" style="width: 99%; height: 96%;">
	                     <span id="lecturer"><a>' . $Tuesdayfinal[0] . '</a></span> 
	                </div>
	                </td>
	            	';
	            	}; ?>
	            		
	            <?php 
	               	$Wednesdayquery = "SELECT Wednesday FROM 9amstaff WHERE id = 9";
				    //grabs username and password info from database query
				    $Wednesdayresult = mysql_query($Wednesdayquery, $dbhandle); //gets result of query

				    $Wednesdayfinal = mysql_fetch_array($Wednesdayresult);
	            error_reporting(0); if($Wednesdayfinal[0] == ""){echo '<td id="no-events" rowspan="1">';}else{
	            	echo '<td id="has-events" rowspan="2">
	            	 <div id="details" style="width: 99%; height: 96%;">
	                     <span id="lecturer"><a>' . $Wednesdayfinal[0] . '</a></span> 
	                </div>
	                </td>
	            	';
	            	}; ?>

	          <?php 
	               	$Thursdayquery = "SELECT Thursday FROM 9amstaff WHERE id = 9";
				    //grabs username and password info from database query
				    $Thursdayresult = mysql_query($Thursdayquery, $dbhandle); //gets result of query

				    $Thursdayfinal = mysql_fetch_array($Thursdayresult);
	            error_reporting(0); if($Thursdayfinal[0] == ""){echo '<td id="no-events" rowspan="1">';}else{
	            	echo '<td id="has-events" rowspan="2">
	            	 <div id="details" style="width: 99%; height: 96%;">
	                     <span id="lecturer"><a>' . $Thursdayfinal[0] . '</a></span> 
	                </div>
	                </td>
	            	';
	            	}; ?>

	             <?php 
	               	$Fridayquery = "SELECT Friday FROM 9amstaff WHERE id = 9";
				    //grabs username and password info from database query
				    $Fridayresult = mysql_query($Fridayquery, $dbhandle); //gets result of query

				    $Fridayfinal = mysql_fetch_array($Fridayresult);
	            error_reporting(0); if($Fridayfinal[0] == ""){echo '<td id="no-events" rowspan="1">';}else{
	            	echo '<td id="has-events" rowspan="2">
	            	 <div id="details" style="width: 99%; height: 96%;">
	                     <span id="lecturer"><a>' . $Fridayfinal[0] . '</a></span> 
	                </div>
	                </td>
	            	';
	            	}; ?>
        </tr>
 
        <tr>
            <td>17:30</td>
            <td id="no-events" rowspan="1"></td>
            <td id="no-events" rowspan="1"></td>
            <td id="no-events" rowspan="1"></td>
            <td id="no-events" rowspan="1"></td>
            <td id="no-events" rowspan="1"></td>
        </tr>

        <tr>
            <td>18:00</td>
            <td id="no-events" rowspan="1"></td>
            <td id="no-events" rowspan="1"></td>
            <td id="no-events" rowspan="1"></td>
            <td id="no-events" rowspan="1"></td>
            <td id="no-events" rowspan="1"></td>

        </tr>

	    </tbody>

	</div>

	<footer id="the_footer">
			Copyright Matt&Michael 2015
	</footer>
</div>

</body>
</html> 