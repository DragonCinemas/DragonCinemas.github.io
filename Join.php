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
		<img src="Images/DCinemas-02.jpg" width="100%" id="DCLOGO" style="box-shadow: 10px 2px 12px #000000">
		<img src="Images/DCinemas-2_Mob.jpg" id="DCLOGO2" style="box-shadow: 10px 2px 12px #000000">
	</center>
	
	<br>
	<table align="center">
		<tr>
			<td>
				<a href="index.php">
					<button class="navigationBtn">
						<font size="+1" color="#FFFFFF" class="Shadow Britannic">
							HOME
						</font>
					</button>
				</a>
			</td>
			
			<td>
				<div class="dropdown">
					<button class="navigationBtn">
						<font size="+1" color="#FFFFFF" class="Shadow Britannic">CREATIONS</font>
					</button>
					
					<div class="dropdown-content">
						<a href="Films.php">
							<button class="SUBbtn; Shadow" id="CREATIONS1">
								<font color="#FFFFFF" class="Shadow Britannic">
									FILMS
								</font>
							</button>	
						</a>

						<a href="Shortfilms.php">
							<button class="SUBbtn; Shadow" id="CREATIONS2">
								<font color="#FFFFFF" class="Shadow Britannic">
									SHORTFILMS
								</font>
							</button>
						</a>

						<a href="Thedal.php">
							<button class="SUBbtn; Shadow" id="CREATIONS3">
								<font color="#FFFFFF" class="Shadow Britannic">
									THEDAL
								</font>
							</button>
						</a>
					</div>
				</div>
			</td>
			
			<td>
				<div class="dropdown">
					<button class="navigationBtn">
						<font size="+1" color="#FFFFFF" class="Shadow Britannic">GROUP</font>
					</button>

					<div class="dropdown-content">
						<a href="Members.php">
							<button class="SUBbtn; Shadow" id="MEMBERS1">
								<font color="#FFFFFF" class="Shadow Britannic">
									MEMBERS
								</font>
							</button>
						</a>

						<a href="Self_Works.php">
							<button class="SUBbtn; Shadow" id="MEMBERS2">
								<font color="#FFFFFF" class="Shadow Britannic">
									WORKS
								</font>
							</button>
						</a>
					</div>
				</div>
			</td>
			
			<td>
				<a href="More.php">
					<button class="navigationBtn">
						<font size="+1" color="#FFFFFF" class="Shadow Britannic">
							MORE
						</font>
					</button>
				</a>
			</td>
		</tr>
	</table>
	
	<h1 align="center" id="M">
		<font class="Gabriola" size="+4" style="text-shadow: 1px 1px 10px black; color:orange">
			<u>JOIN WITH DRAGON CINEMAS</u>
		</font>
	</h1>

	<table align="center" id="G" style="background-color: rgba(0, 0, 0, 0.5); width: 35em" cellpadding="45px">
		<tr>
			<td>
				<br>
				<font class="Adopecaslonpro" style="text-shadow: 1px 1px 4px gray; color:whitesmoke">
					<form action="http://localhost:8080/send" method="post" enctype="application/x-www-form-urlencoded">
						<label>FIRST NAME &emsp;</label>
						<input type="text" placeholder="YOUR FIRST NAME" name="FirstName" required>

						<br><br>
						<label>LAST NAME &emsp;</label>
						<input type="text" placeholder="YOUR LAST NAME" name="LastName" required>

						<br><br>
						<label>DATE OF BIRTH &emsp;</label>
						<input type="date" name="DOB" style="width: 11em" required>

						<br><br>
						<label>GENDER &emsp;</label>
						<input type="radio" name="Gender" value="Male" required>
						<label>MALE &emsp;</label>
						<input type="radio" name="Gender" value="Female" required>
						<label>FEMALE</label>

						<br><br>
						<label>CITY &emsp;</label>
						<input type="text" name="City" placeholder="Eg:- Negombo" style="width: 10em" required>

						<br><br>
						<label>TELEPHONE NUMBER &emsp;</label>
						<input type="tel" name="Tel_Number" placeholder="YOUR MOBILE NUMBER"  style="width: 12em" required>

						<br><br>
						<label>EMAIL ADDRESS &emsp;</label>
						<input type="Email" name="Email" placeholder="YOUR EMAIL ADDRESS" style="width: 20em" required>
						
						<br><br>
						<label>PROFESSION &emsp;</label>
						
						<input type="radio" name="Profession" value="Studying" required>
						<label>STUDYING &emsp;</label>
						
						<input type="radio" name="Profession" value="Working" required>
						<label>WORKING &emsp;</label>
						
						<input type="radio" name="Profession" value="None" required>
						<label>NONE &emsp;</label>
						
						<br><br>
						<label>SKILLS &emsp;</label>
						<br><textarea name="Skills" placeholder="EG:- 1. STORY WRITTER	2. CRICKETER	3. ARTIST" style="width: 35em; height: 10em" required></textarea>

						<br><br><br>
						<center>
							<input type="submit" value="SUBMIT">
							<input type="reset" value="RESET">
						</center>
						
						<br>
						<p>
							&emsp;&emsp;&emsp;NOTE :- WE WILL GET THESE FORM DEATAILS BY
							<br>YOUR EMAIL. SO BEFORE SUBMIT THIS FORM PLEASE
							<br>LOGIN YOUR GMAIL ACCOUNT. IF YOU DON'T HAVE ANY
							<br>GMAIL ACCOUNT PLEASE SINGUP OR LOGIN WITH YOUR
							<br>RELATION'S GMAIL ACCOUNT.
						</p>
					</form>
				</font>
			</td>
		</tr>
	</table>

	<h1 align="center" id="M2">
		<font class="Gabriola" size="+2" style="text-shadow: 1px 1px 12px black; color:orange">
			<u>JOIN WITH DRAGON CINEMAS</u>
		</font>
	</h1>
	
	<table align="center" id="G2" style="background-color: rgba(0, 0, 0, 0.4); width: 21em" cellpadding="15px">
		<tr>
			<td>
				<font class="Adopecaslonpro" color="#FFFFFF" style="text-shadow: 4px 2px 4px #000000">
					<form action="http://localhost:8080/send" method="post" enctype="application/x-www-form-urlencoded">
						<label>FIRST NAME &emsp;</label>
						<input type="text" placeholder="YOUR FIRST NAME" name="FirstName" required>

						<br><br>
						<label>LAST NAME &emsp;</label>
						<input type="text" placeholder="YOUR LAST NAME" name="LastName" required>

						<br><br>
						<label>DATE OF BIRTH &emsp;</label>
						<input type="date" name="DOB" style="width: 11em" required>

						<br><br>
						<label>GENDER &emsp;</label>
						<input type="radio" name="Gender" value="Male" required>
						<label>MALE &emsp;</label>
						<input type="radio" name="Gender" value="Female" required>
						<label>FEMALE</label>

						<br><br>
						<label>CITY &emsp;</label>
						<input type="text" name="City" placeholder="Eg:- Negombo" style="width: 10em" required>

						<br><br>
						<label>TELEPHONE NUMBER &emsp;</label>
						<input type="tel" name="Tel_Number" placeholder="YOUR MOBILE NUMBER"  style="width: 12em" required>

						<br><br>
						<label>EMAIL ADDRESS &emsp;</label>
						<input type="Email" name="Email" placeholder="YOUR EMAIL ADDRESS" style="width: 20em" required>
						
						<br><br>
						<label>PROFESSION &emsp;</label>
						
						<input type="radio" name="Profession" value="Studying" required>
						<label>STUDYING &emsp;</label>
						
						<input type="radio" name="Profession" value="Working" required>
						<label>WORKING &emsp;</label>
						
						<input type="radio" name="Profession" value="None" required>
						<label>NONE &emsp;</label>
						
						<br><br>
						<label>SKILLS &emsp;</label>
						<br><textarea name="Skills" placeholder="EG:- 1. STORY WRITTER	2. CRICKETER	3. ARTIST" style="width: 35em; height: 10em" required></textarea>

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