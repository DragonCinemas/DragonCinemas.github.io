<?php 
if(isset($_POST['submit'])){
    $to = "madushanthmadu007@gmail.com"; // this is your Email address
    $from = $_POST['Email']; // this is the sender's Email address
    $first_name = $_POST['FirstName'];
    $last_name = $_POST['LastName'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>

<!doctype html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no">
	<link rel="stylesheet" href="CSS.css">
	<title>JOIN US</title>
	
</head>
<body id="BG">
	
	<hr color="#FF6E00" size="6">
	<hr color="#FFB600" size="6">
	
	<center>
		<img src="Images/DCinemas-2.jpg" width="1315em" height="150em" id="DCLOGO" style="box-shadow: 10px 2px 12px #000000">
		<img src="Images/DCinemas-2_Mob.jpg" id="DCLOGO2" style="box-shadow: 10px 2px 12px #000000">
	</center>
	
	<br>
	<table align="center">
		<tr>
			<td>
				<a href="index.php">
					<button class="navigationBtn"><font face="Britamic" size="+1" color="#FFFFFF" class="Shadow">HOME</font></button>
				</a>
			</td>
			
			<td>
				<div class="dropdown">
					<button class="navigationBtn">
						<font face="Britamic" size="+1" color="#FFFFFF" class="Shadow">CREATIONS</font>
					</button>
					<div class="dropdown-content">
						<button class="SUBbtn; Shadow" id="CREATIONS1">
							<a href="Films.php">
								<font face="Britamic" color="#FFFFFF" class="Shadow">
									FILMS
								</font>
							</a>
						</button>
						<button class="SUBbtn; Shadow" id="CREATIONS2">
							<a href="Shortfilms.php">
								<font face="Britamic" color="#FFFFFF" class="Shadow">
									SHORTFILMS
								</font>
							</a>
						</button>
						<button class="SUBbtn; Shadow" id="CREATIONS3">
							<a href="Thedal.php">
								<font face="Britamic" color="#FFFFFF" class="Shadow">
									THEDAL
								</font>
							</a>
						</button>
					</div>
				</div>
			</td>
			
			<td>
				<div class="dropdown">
					<button class="navigationBtn">
						<font face="Britamic" size="+1" color="#FFFFFF" class="Shadow">GROUP</font>
					</button>
					<div class="dropdown-content">
						<button class="SUBbtn; Shadow" id="MEMBERS1">
							<a href="Members.php">
								<font face="Britamic" color="#FFFFFF" class="Shadow">
									MEMBERS
								</font>
							</a>
						</button>
						<button class="SUBbtn; Shadow" id="MEMBERS2">
							<a href="Join.php">
								<font face="Britamic" color="#FFFFFF" class="Shadow">
									JOIN US
								</font>
							</a>
						</button>
					</div>
				</div>
			</td>
			
			<td>
				<a href="More.php">
					<button class="navigationBtn">
						<font face="Britamic" size="+1" color="#FFFFFF" class="Shadow">
							MORE
						</font>
					</button>
				</a>
			</td>
		</tr>
	</table>
	
	<h1 align="center" id="M">
		<font face="Gabriola" size="+4" style="text-shadow: 1px 1px 10px black; color:orange">
			<u>JOIN WITH DRAGON CINEMAS</u>
		</font>
	</h1>

	<table align="center" id="G" style="background-color: rgba(0, 0, 0, 0.5); width: 35em" cellpadding="45px">
		<tr>
			<td>
			<br>
				<font face="Adobe Caslon Pro" style="text-shadow: 1px 1px 4px gray; color:whitesmoke">
					<form action="" method="post" enctype="text/plain">
						<label for="FirstName">FIRST NAME &emsp;</label>
						<input type="text" id="FirstName" placeholder="YOUR FIRST NAME" name="FirstName" required>

						<br><br>
						<label for="LastName">LAST NAME &emsp;</label>
						<input type="text" id="LastName" placeholder="YOUR LAST NAME" name="LastName" required>

						<br><br>
						<label for="DOB">DATE OF BIRTH &emsp;</label>
						<input type="date" id="DOB" name="Date" style="width: 11em" required>

						<br><br>
						<label>GENDER &emsp;</label>
						<input type="radio" id="Male" name="Gender" value="Male" required>
						<label for="Male">MALE &emsp;</label>
						<input type="radio" id="Female" name="Gender" value="Female" required>
						<label for="Male">FEMALE</label>

						<br><br>
						<label for="City">CITY &emsp;</label>
						<input type="text" id="City" name="City" placeholder="Eg:- Negombo" style="width: 10em" required>

						<br><br>
						<label for="Tel.Number">TELEPHONE NUMBER &emsp;</label>
						<input type="tel" id="Tel.Number" name="Tel.Number" placeholder="YOUR MOBILE NUMBER"  style="width: 12em" required>

						<br><br>
						<label for="Email">EMAIL ADDRESS &emsp;</label>
						<input type="Email" id="Email" name="Email" placeholder="YOUR EMAIL ADDRESS" style="width: 20em" required>
						
						<br><br>
						<label>PROFESSION &emsp;</label>
						
						<input type="radio" id="Studying" name="Profession" value="Studying" required>
						<label for="Studying">STUDYING &emsp;</label>
						
						<input type="radio" id="Working" name="Profession" value="Working" required>
						<label for="Working">WORKING &emsp;</label>
						
						<input type="radio" id="None" name="Profession" value="None" required>
						<label for="None">NONE &emsp;</label>
						
						<br><br>
						<label for="Skills">SKILLS &emsp;</label>
						<br><textarea id="Skills" name="Skills" placeholder="EG:- 1. STORY WRITTER	2. CRICKETER	3. ARTIST" style="width: 35em; height: 10em" required></textarea>

						<br><br><br>
						<center>
							<input type="submit" value="SUBMIT">
							<input type="reset" value="RESET">
						</center>
						
						<br>
						<p>
							&emsp;&emsp;&emsp;NOTE :- WE WILL GET THESE FORM DEATAILS BY <br>YOUR EMAIL. SO BEFORE SUBMIT THIS FORM PLEASE <br>LOGIN YOUR GMAIL ACCOUNT. IF YOU DON'T HAVE ANY <br>GMAIL ACCOUNT PLEASE SINGUP OR LOGIN WITH YOUR <br>RELATION'S GMAIL ACCOUNT.
						</p>
					</form>
				</font>
			</td>
		</tr>
	</table>
	<h1 align="center" id="M2">
		<font face="Gabriola" size="+2" style="text-shadow: 1px 1px 12px black; color:orange">
			<u>JOIN WITH DRAGON CINEMAS</u>
		</font>
	</h1>

	<table align="center" id="G2" style="background-color: rgba(0, 0, 0, 0.4); width: 21em" cellpadding="15px">
		<tr>
			<td>
				<font face="Adobe Caslon Pro" color="#FFFFFF" style="text-shadow: 4px 2px 4px #000000">
					<form action="" method="post" enctype="text/plain">
						<label for="FirstName2">FIRST NAME &emsp;</label>
						<input type="text" id="FirstName2" placeholder="YOUR FIRST NAME" name="FirstName" style="width: 20em" required>

						<br><br>
						<label for="LastName2">LAST NAME &emsp;</label>
						<input type="text" id="LastName2" placeholder="YOUR LAST NAME" name="LastName" style="width: 20em" required>
						
						<br><br>
						<label for="DOB2">DATE OF BIRTH &emsp;</label>
						<input type="date" id="DOB2" name="Date" style="width: 15em" required>

						<br><br>
						<label>GENDER &emsp;&emsp;</label>
						
						<input type="radio" id="Male2" name="Gender" value="Male" required>
						<label for="Male2">MALE &emsp;&emsp;</label>
						
						<br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" id="Female2" name="Gender" value="Female" required>
						<label for="Female2">FEMALE</label>

						<br><br>
						<label for="City2">CITY &emsp;</label>
						<input type="text" id="City2" name="City" placeholder="Eg:- Negombo" style="width: 20em" required>

						<br><br>
						<label for="Tel.Number2">TELEPHONE NUMBER &emsp;</label>
						<input type="tel" id="Tel.Numbe2r" name="Tel.Number" placeholder="YOUR MOBILE NUMBER"  style="width: 20em" required>

						<br><br>
						<label for="Email2">EMAIL ADDRESS &emsp;</label>
						<input type="Email" id="Email2" name="Email" placeholder="YOUR EMAIL ADDRESS" style="width: 20em" required>
						
						<br><br>
						<label>PROFESSION &emsp;</label>
						
						<input type="radio" id="Studying2" name="Profession" value="Studying" required>
						<label for="Studying2">STUDYING &emsp;</label>
						
						<br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
						<input type="radio" id="Working2" name="Profession" value="Working" required>
						<label for="Working2">WORKING &emsp;</label>
						
						<br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
						<input type="radio" id="None2" name="Profession" value="None" required>
						<label for="None2">NONE &emsp;</label>
						
						<br><br>
						<label for="Skills2">SKILLS &emsp;</label>
						<br><textarea id="Skills2" name="Skills" placeholder="EG:- 1.STORY WRITTER 2.CRICKETER 3.ARTIST" style="width: 98%; height: 10em" required></textarea>

						<br><br><br>
						<center>
							<input type="submit" value="SUBMIT">
							<input type="reset" value="RESET">
						</center>
						
						<br>
						<p align="center">
							NOTE :- WE WILL GET THESE FORM DEATAILS BY YOUR EMAIL. SO BEFORE SUBMIT
							THIS FORM PLEASE LOGIN YOUR GMAIL ACCOUNT. IF YOU DON'T HAVE ANY GMAIL
							ACCOUNT PLEASE SINGUP OR LOGIN WITH YOUR RELATIONS GMAIL ACCOUNT.
						</p>
					</form>
				</font>
			</td>
		</tr>
	</table>
	
	<br><br>
	<hr color="#FFB600" size="6">
	<hr color="#FF6E00" size="6">
</body>
</html>