<!DOCTYPE html>
<?PHP
require_once("./include/membersite_config.php");

if(!$fgmembersite->CheckLogin())
{
    $fgmembersite->RedirectToURL("login.php");
    exit;
}
?>
<link rel="stylesheet" type="text/css" href="style/css.css">
<head>
	<title>Resume</title>
</head>

<body style="padding-bottom: 150px;">
	<div class="pad">
		<div class="main">
			<div class="title">
				<h1>Matthew Guerra</h1>
			</div>
			<div class="center">
				<img id="center" src="picture.jpg" height="320" width="280">
			</div>
			<h5>Three-time Global Couch Gymnastics Winner</h5>
			<br>

			<br>
			<div class="generalbubble">
				<p><b>Email: </b><a href=maito:therealslimshady@shady.net>therealslimshady@shady.net</a></p>
				<p><b>Cell Phone: </b>1-800-541-1777</p>
				<p><b>Address: </b>777 Shady Saint Slim Ln. Blvd. St.</p>
			</div>
			<br>
			<h3>Skills</h3>
			<hr>
			<div class="skillsbubblein">
				<div class="skillsbubbleout">
					<ul class="head">
						<li>Leadership/Management</li>
						<li>3D Modeling/Animation</li>
						<li>CDL License</li>
						<li>Languages</li>
							<ul>
								<li><i>English</i></li>
								<li><i>Spanish</i></li>
								<li><i>French</i></li>
							</ul>
						<li>Computer Languages</li>
							<ul>
								<li><i>FORTRAN</i></li>
								<li><i>COBOL</i></li>
								<li><i>PL/I</i></li>
								<li><i>RPG</i></li>
								<li><i>RPG II</i></li>
								<li><i>RPG II</i></li>
								<li><i>APL</i></li>
								<li><i>ADA</i></li>
							</ul>
						<li>"Computer Languages"</li>
							<ul>
								<li><i>C</i></li>
								<li><i>C++</i></li>
								<li><i>C#</i></li>
								<li><i>Objective-C</i></li>
								<li><i>Swift</i></li>
								<li><i>Java</i></li>
								<li><i>Lua</i></li>
								<li><i>Lisp</i></li>
								<li><i>Ruby</i></li>
								<li><i>Assembly</i></li>
							</ul>
						<li>Can leap over the tallest building.</li>
						<li>Have Spacesuit, Will Travel.</li>
						<li>Can swim faster than a shark.</li>
							<ul>
								<li><i>Unlike others that rhyme with Nicheal Felps</i></li>
							</ul>
					</ul>
				</div>
			</div>
			<br>
			<h3>Achievements</h3>
			<hr>
			<div class="achievebubblein">
				<div class="achievebubbleout">
					<ul class="head">
						<li>Competitive Minesweeper Rank No. 3012</li>
						<li>All-time Mario Kart 64 Champion</li>
						<li>Collaborated with NASA on projects:</li>
							<ul>
								<li><i>Send Ants to The Sun</i></li>
								<li><i>Jet Fuel for Tractors</i></li>
								<li><i>Wingless Jets</i></li>
							</ul>
						<li>Leapt off a Twenty-Story Building into a Cup with Water and Survived</li>
						<li>Went 5-rounds against Mayweather in an Underground Match</li>
							<ul>
								<li><i>And Won</i></li>
							</ul>
						<li>Journeyed to the Center of the World</li>
						<li>Attempted to Make Homemade Kimchi</li>
						<li>Attached Skis onto a Car</li>
					</ul>
				</div>
			</div>
			<br>
			<table>
				<h3>Previous Employments</h3>
				<hr>
				<thead>
					<tr>
						<th class="generalbubble">Position</th>
						<th class="generalbubble">Employer</th>
						<th class="generalbubble">Last Date of Employment</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Son</td>
						<td>Mother</td>
						<td>Ongoing</td>
					</tr>
					<tr>
						<td>General Technician</td>
						<td>Grandfather'sRanch.org</td>
						<td>June 2012</td>
					</tr>
					<tr>
						<td>Temp. Forklift Operator</td>
						<td>Comco</td>
						<td>August 2015</td>
					</tr>
					<tr>
						<td>Temp. Janitor</td>
						<td>Sunrise Mall</td>
						<td>December 2015</td>
					</tr>
					<tr>
						<td>Student</td>
						<td>UTRGV</td>
						<td>Ongoing</td>
					</tr>
					<tr>
						<td>IT</td>
						<td>FamilyMembers</td>
						<td>Ongoing</td>
					</tr>
				</tbody>
			</table>

			<?php

					//magic, don't touch

					function printt($randoma){
						$i = 0;
						echo '<table><tr>';
						while ($i < pg_num_fields($randoma))
						{
							$fieldName = pg_field_name($randoma, $i);
							echo '<th class="generalbubble">' . $fieldName . '</th>';
							$i = $i + 1;
						}
						echo '</tr>';
						$i = 0;

						while ($row = pg_fetch_row($randoma)) 
						{
							echo '<tr>';
							$count = count($row);
							$y = 0;
							while ($y < $count)
							{
								$c_row = current($row);
								echo '<td>' . $c_row . '</td>';
								next($row);
								$y = $y + 1;
							}
							echo '</tr>';
							$i = $i + 1;
						}
						pg_free_result($randoma);
						echo '</table>';
					}

					//magic, don't touch

			?>

			<br>
			<br>
			<h3>PostgreSQL Query</h3>
			<hr>
			<div class="generalbubble" id="here1" style="padding: 40px 20px;">
				<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
					<fieldset>
						SQL Command:<br>
						<input type="text" name="command" style="color: black;">
						<br><br>
						<input type="submit" name="maga" value="Submit Form" style="color:black">
					</fieldset>
				</form>
			</div>
			<?php
				if(isset($_POST['maga'])){
				    $auto1 = $_POST['command'];
					echo "<h3>From PostgreSQL Database!</h3>";

					$dbconn = pg_connect("host=hanno.db.elephantsql.com dbname=ojmcfyxx user=ojmcfyxx password=Ul8_69tEwI2GPAS3igAYKFpGtdDLWFnr");
					print("<hr>");
					$result = pg_query($dbconn, $auto1);
					printt($result);

					$dbconn = null;
					echo "<script>window.location.hash = '#here1'</script>";
				}
			?>
			<br>
			<br>
			<h3>PostgreSQL Query</h3>
			<hr>
			<div class="generalbubble" id="here2" style="padding: 40px 20px;">
				<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
					<select name="lucky">
						<option value="*">*</option>
						<option value="fname || ' ' || lname as Name">Name</option>
						<option value="fname || ' ' || lname as Name, hair_color || ' ' || hair_style as Hair">Name, Hair</option>
						<option value="fname || ' ' || lname as Name, eyes">Name, Eyes</option>
						<option value="fname || ' ' || lname as Name, skin_color || ' ' || skin_details as Skin">Name, Skin</option>
						<option value="fname || ' ' || lname as Name, hair_color || ' ' || hair_style as Hair, eyes">Name, Hair, Eyes</option>
						<option value="fname || ' ' || lname as Name, hair_color || ' ' || hair_style as Hair, skin_color || ' ' || skin_details as Skin">Name, Hair, Skin</option>
						<option value="fname || ' ' || lname as Name, eyes, skin_color || ' ' || skin_details as Skin">Name, Eyes, Skin</option>
						<option value="fname || ' ' || lname as Name, hair_color || ' ' || hair_style as Hair, eyes, skin_color || ' ' || skin_details as Skin">Name, Hair, Eyes, Skin</option>
					</select>
					<input type="submit" name="submit" value="Submit Form" style="color:black">
				</form>
			</div>

			<?php
				if(isset($_POST['submit'])){
				    $auto2 = $_POST['lucky'];
					echo "<h3>From PostgreSQL Database!</h3>";

					$dbconn = pg_connect("host=hanno.db.elephantsql.com dbname=ojmcfyxx user=ojmcfyxx password=Ul8_69tEwI2GPAS3igAYKFpGtdDLWFnr");
					print("<hr>");
					$result = pg_query($dbconn, "select ".$auto2." from lolihouse order by id asc");
					printt($result);

					$dbconn = null;
					echo "<script>window.location.hash = '#here2'</script>";
				}
			?>

			<br>
			<br>
		</div>
	</div>
</body>
</html>