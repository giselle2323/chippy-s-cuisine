<?php 
	require 'db.php';
 		
 		$sqltran = mysqli_query($con, "SELECT * FROM orders ")or die(mysqli_error($con));
		$arrVal = array();
 		
		$i=1;
 		while ($rowList = mysqli_fetch_array($sqltran)) {
 								 
						$name = array(
								'num' => $i,
 	 		 	 				'food'=> $rowList['textBox'],
                                'fullName'=> $rowList['fullName'],
                                'email'=> $rowList['email'],
                                'address'=> $rowList['address'],
                                'tele'=> $rowList['tele'],
                                'plate'=> $rowList['plate'],
                                'created_date'=> $rowList['created_date']
                                   
 	 		 	 			);		
 
 
							array_push($arrVal, $name);	
			$i++;			
	 	}
	 		 echo  json_encode($arrVal);		
 ?>