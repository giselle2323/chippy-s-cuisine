<html>
    <head>
	    <title>Delivery page</title>
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <link rel="stylesheet" href="main.css">
	    <script>function setText7(obj){
	var val = obj.value;
	console.log(val);
	document.getElementById('textBox').value = val;
}</script>
    </head>
    <body>
        <div id="myform">
	        <h1>  
		      PLEASE ENTER YOUR ORDER AND DELIVERY DETAILS
	        </h1>
           <form method="POST" name="orderForm" action="database.php">
	            <fieldset>
		             <label for="food" >Food
			          <input type="text" name="textBox" id="textBox" value="" />
		           </label>
		           <br>
		           <label for="plates">Plate:
			          <input type="number" name="plate" id="plate">
		            </label>
		            <label for="email" >Email:
			          <input type="email" name="email" id="email">
		           </label>
		           <br>
		           <label for="Delivery Address">Delivery Address:
			          <input type="text" name="address" id="address">
		            </label>
		            <br>
		            <label for="Telephone">Telephone:
			          <input type="text" name="telephone" id="telephoe">
		            </label>
		            <input type="submit" name="submit" value="submit">
		        </fieldset>
		    </form>
		</div>           
    </body>
</html>