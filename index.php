<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form handling with IF Satement</title>
	<style>

		body{
			background-color: #af8bcd;
		}
		div {
			background-color: #0093F0;
			width: 500px;
			padding: 30px;
			margin: 50px auto;
			color: #fff;
			border: 1px solid #000;
				-moz-border-radius: 10px;
				-webkit-border-radius: 10px;
				-o-border-radius: 10px;
			border-radius: 10px;
			box-shadow: 5px 5px 10px #000;
		}

		div form fieldset{
			border: 2px solid #fff;
				-moz-border-radius: 10px;
				-webkit-border-radius: 10px;
				-o-border-radius: 10px;
			border-radius: 10px;
			padding: 15px;
		}
		div form fieldset legend{
			font-family: Arial, sans-serif;
			font-size: 20px;
			color: #fff;
		}
				
		h1 {
			font-family: Arial, sans-serif;
			font-size: 45px;
			color: #0ab8e3;
			padding-left: 30px;
			width: 600px;
			margin: 0 auto;
			text-shadow: 3px 3px 5px #000;
		} 
	</style>
</head>
<body>
	<div>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
			<fieldset>
				<legend>Get Rsult</legend>
				<input type="number" name="mark" id="mrk" required placeholder="Input number" title="Input Your Number">
				<input type="submit" value="Get Result">
			</fieldset>
		</form>
	</div>


<?php
  
#  && $_POST["mark"] != ""

#  && is_numeric($_POST["mark"])== true
   
 
	if (isset($_POST["mark"]) && is_numeric($_POST["mark"])== true){ 
    $mark= $_POST["mark"];
	
    switch ($mark){
    	case 0:case 1:case 2:case 3:case 4:case 5:case 6:case 7:case 8:case 9:case 10:case 11:case 12:case 13:case 14:    	
		case 15:case 16:case 17:case 18:case 19:case 20:case 21:case 22:case 23:case 24:case 25:case 26:case 27:case 28:
		case 29:case 30:case 31:case 32:		
			echo "<h1>You have failed the exam and obtained <strong style=\"color:red\">$mark</strong> numbers.</h1>";
			break;
		case 33:case 34:case 35:case 36:case 37:case 38:case 39:
			echo "<h1>Congratulations..!<br>You have obtained <strong style=\"color:green;\">'D'</strong> Grade.</h1>";
			break;
		case 40:case 41:case 42:case 43:case 44:case 45:case 46:case 47:case 48:case 49:
			echo "<h1>Congratulations..!<br>You have obtained <strong style=\"color:green;\">'C'</strong> Grade.</h1>";
			break;
		case 50:case 51:case 52:case 53:case 54:case 55:case 56:case 57:case 58:case 59:
			echo "<h1>Congratulations..!<br>You have obtained <strong style=\"color:green;\">'B'</strong> Grade.</h1>";
			break;
		case 60:case 61:case 62:case 63:case 64:case 65:case 66:case 67:case 68:case 69:
			echo "<h1>Congratulations..!<br>You have obtained <strong style=\"color:green;\">'A-'</strong> Grade.</h1>";
			break;
		case 70:case 71:case 72:case 73:case 74:case 75:case 76:case 77:case 78:case 79:
			echo "<h1>Congratulations..!<br>You have obtained <strong style=\"color:green;\">'A'</strong> Grade.</h1>";
			break;
		case 80:case 81:case 82:case 83:case 84:case 85:case 86:case 87:case 88:case 89:case 90:case 91:case 92:case 93:
		case 94:case 95:case 96:case 97:case 98:case 99:
			echo "<h1>Congratulations..!<br>You have obtained <strong style=\"color:green;\">'A+'</strong> Grade.</h1>";
			break;
		case 100:
			echo "<h1><strong style=\"color:red\">Very Well done..!</strong><br>You have obtained <strong style=\"color:green;\">'100%'</strong> Marks.</h1>";
			break;
		default:
			echo "<h1 style=\"color:red;\">You have entered an invalid number.</h1>";
			break;
			}
        }


/*elseif (isset($_POST["mark"]) && is_numeric($_POST["mark"])== true){

	echo "<h1>You have entered an invalid number.</h1>";
};*/

?>
</body>
</html>
