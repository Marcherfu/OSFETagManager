<!DOCTYPE html>
<html>
	<head>
		<title>OSFE Tag Manager</title>
		<meta charset="UTF-8">
	</head>
	<body>
		<hr>
		<form action="compile.php" method="post">
			<?php
				/*
				List of existing tags :
				Base
				BonusNG
				BonusSK
				Cpu
				Demo
				Live
				NoDoublecast
				NoFlex
				NoFlow
				NoShield
				NoShieldPlus
				NoStrafe
				Player
				PvP
				SaffronBoss
				SkipTest
				Starting
				Weapon
				*/
				//Reading file BaseSpells.xml
				$xml = simplexml_load_file("./BaseSpells.xml");
				foreach($xml as $item) {
					echo "Spell Name : ".$item->Name."<br>";
					echo "Tags :<br>
					<table style='text-align: center;'>
						<thead>
							<tr>
								<th>Base</th>
								<th>BonusNG</th>
								<th>BonusRe</th>
								<th>BonusSK</th>
								<th>Cpu</th>
								<th>Demo</th>
								<th>Drone</th>
								<th>Expansion</th>
								<th>Flower</th>
								<th>Gem</th>
								<th>Holly</th>
								<th>Live</th>
								<th>Negative</th>
								<th>NoDoublecast</th>
								<th>NoFlex</th>
								<th>NoFlow</th>
								<th>NoPierce</th>
								<th>NoShield</th>
								<th>NoShieldPlus</th>
								<th>NoStrafe</th>
								<th>Player</th>
								<th>PvP</th>
								<th>Random</th>
								<th>SaffronBoss</th>
								<th>SkipTest</th>
								<th>Starting</th>
								<th>Weapon</th>
							</tr>
						</thead>
						<tbody>
							<tr>";
					$tags = explode(", ", $item->Tags);
					//Loading Tags as Checkboxes
					if (in_array("Base", $tags)) {
						echo "<td><input type='checkbox' name='tagsBase".$item['itemID']."' value='true' checked></td>";
					} else {
						echo "<td><input type='checkbox' name='tagsBase".$item['itemID']."' value='false'></td>";
					}

					if (in_array("BonusNG", $tags)) {
						echo "<td><input type='checkbox' name='tagsBonusNG".$item['itemID']."' value='true' checked></td>";
					} else {
						echo "<td><input type='checkbox' name='tagsBonusNG".$item['itemID']."' value='false'></td>";
					}
					
					if (in_array("BonusRe", $tags)) {
						echo "<td><input type='checkbox' name='tagsBonusRe".$item['itemID']."' value='true' checked></td>";
					} else {
						echo "<td><input type='checkbox' name='tagsBonusRe".$item['itemID']."' value='false'></td>";
					}

					if (in_array("BonusSK", $tags)) {
						echo "<td><input type='checkbox' name='tagsBonusNG".$item['itemID']."' value='true' checked></td>";
					} else {
						echo "<td><input type='checkbox' name='tagsBonusNG".$item['itemID']."' value='false'></td>";
					}

					if (in_array("Cpu", $tags)) {
						echo "<td><input type='checkbox' name='tagsCpu".$item['itemID']."' value='true' checked></td>";
					} else {
						echo "<td><input type='checkbox' name='tagsCpu".$item['itemID']."' value='false'></td>";
					}

					if (in_array("Demo", $tags)) {
						echo "<td><input type='checkbox' name='tagsDemo".$item['itemID']."' value='true' checked></td>";
					} else {
						echo "<td><input type='checkbox' name='tagsDemo".$item['itemID']."' value='false'></td>";
					}

					if (in_array("Drone", $tags)) {
						echo "<td><input type='checkbox' name='tagsDemo".$item['itemID']."' value='true' checked></td>";
					} else {
						echo "<td><input type='checkbox' name='tagsDemo".$item['itemID']."' value='false'></td>";
					}

					if (in_array("Expansion", $tags)) {
						echo "<td><input type='checkbox' name='tagsExpansion".$item['itemID']."' value='true' checked></td>";
					} else {
						echo "<td><input type='checkbox' name='tagsExpansion".$item['itemID']."' value='false'></td>";
					}

					if (in_array("Flower", $tags)) {
						echo "<td><input type='checkbox' name='tagsFlower".$item['itemID']."' value='true' checked></td>";
					} else {
						echo "<td><input type='checkbox' name='tagsFlower".$item['itemID']."' value='false'></td>";
					}

					if (in_array("Gem", $tags)) {
						echo "<td><input type='checkbox' name='tagsGem".$item['itemID']."' value='true' checked></td>";
					} else {
						echo "<td><input type='checkbox' name='tagsGem".$item['itemID']."' value='false'></td>";
					}

					if (in_array("Holly", $tags)) {
						echo "<td><input type='checkbox' name='tagsHolly".$item['itemID']."' value='true' checked></td>";
					} else {
						echo "<td><input type='checkbox' name='tagsHolly".$item['itemID']."' value='false'></td>";
					}

					if (in_array("Live", $tags)) {
						echo "<td><input type='checkbox' name='tagsLive".$item['itemID']."' value='true' checked></td>";
					} else {
						echo "<td><input type='checkbox' name='tagsLive".$item['itemID']."' value='false'></td>";
					}

					if (in_array("Negative", $tags)) {
						echo "<td><input type='checkbox' name='tagsNegative".$item['itemID']."' value='true' checked></td>";
					} else {
						echo "<td><input type='checkbox' name='tagsNegative".$item['itemID']."' value='false'></td>";
					}

					if (in_array("NoDoublecast", $tags)) {
						echo "<td><input type='checkbox' name='tagsNoDoublecast".$item['itemID']."' value='true' checked></td>";
					} else {
						echo "<td><input type='checkbox' name='tagsNoDoublecast".$item['itemID']."' value='false'></td>";
					}

					if (in_array("NoFlex", $tags)) {
						echo "<td><input type='checkbox' name='tagsNoFlex".$item['itemID']."' value='true' checked></td>";
					} else {
						echo "<td><input type='checkbox' name='tagsNoFlex".$item['itemID']."' value='false'></td>";
					}

					if (in_array("NoFlow", $tags)) {
						echo "<td><input type='checkbox' name='tagsNoFlow".$item['itemID']."' value='true' checked></td>";
					} else {
						echo "<td><input type='checkbox' name='tagsNoFlow".$item['itemID']."' value='false'></td>";
					}

					if (in_array("NoPierce", $tags)) {
						echo "<td><input type='checkbox' name='tagsNoPierce".$item['itemID']."' value='true' checked></td>";
					} else {
						echo "<td><input type='checkbox' name='tagsNoPierce".$item['itemID']."' value='false'></td>";
					}
					
					if (in_array("NoShield", $tags)) {
						echo "<td><input type='checkbox' name='tagsNoShield".$item['itemID']."' value='true' checked></td>";
					} else {
						echo "<td><input type='checkbox' name='tagsNoShield".$item['itemID']."' value='false'></td>";
					}

					if (in_array("NoShieldPlus", $tags)) {
						echo "<td><input type='checkbox' name='tagsNoShieldPlus".$item['itemID']."' value='true' checked></td>";
					} else {
						echo "<td><input type='checkbox' name='tagsNoShieldPlus".$item['itemID']."' value='false'></td>";
					}

					if (in_array("NoStrafe", $tags)) {
						echo "<td><input type='checkbox' name='tagsNoStrafe".$item['itemID']."' value='true' checked></td>";
					} else {
						echo "<td><input type='checkbox' name='tagsNoStrafe".$item['itemID']."' value='false'></td>";
					}

					if (in_array("Player", $tags)) {
						echo "<td><input type='checkbox' name='tagsPlayer".$item['itemID']."' value='true' checked></td>";
					} else {
						echo "<td><input type='checkbox' name='tagsPlayer".$item['itemID']."' value='false'></td>";
					}

					if (in_array("PvP", $tags)) {
						echo "<td><input type='checkbox' name='tagsPvP".$item['itemID']."' value='true' checked></td>";
					} else {
						echo "<td><input type='checkbox' name='tagsPvP".$item['itemID']."' value='false'></td>";
					}

					if (in_array("Random", $tags)) {
						echo "<td><input type='checkbox' name='tagsRandom".$item['itemID']."' value='true' checked></td>";
					} else {
						echo "<td><input type='checkbox' name='tagsRandom".$item['itemID']."' value='false'></td>";
					}
					
					if (in_array("SaffronBoss", $tags)) {
						echo "<td><input type='checkbox' name='tagsSaffronBoss".$item['itemID']."' value='true' checked></td>";
					} else {
						echo "<td><input type='checkbox' name='tagsSaffronBoss".$item['itemID']."' value='false'></td>";
					}

					if (in_array("SkipTest", $tags)) {
						echo "<td><input type='checkbox' name='tagsSkipTest".$item['itemID']."' value='true' checked></td>";
					} else {
						echo "<td><input type='checkbox' name='tagsSkipTest".$item['itemID']."' value='false'></td>";
					}

					if (in_array("Starting", $tags)) {
						echo "<td><input type='checkbox' name='tagsStarting".$item['itemID']."' value='true' checked></td>";
					} else {
						echo "<td><input type='checkbox' name='tagsStarting".$item['itemID']."' value='false'></td>";
					}

					if (in_array("Weapon", $tags)) {
						echo "<td><input type='checkbox' name='tagsWeapon".$item['itemID']."' value='true' checked></td></tbody></table><hr>";
					} else {
						echo "<td><input type='checkbox' name='tagsWeapon".$item['itemID']."' value='false'></td></tbody></table><hr>";
					}
				}
			?>
			<button type="submit" name="update">Generate Tags</button>
		</form>
	</body>
</html>