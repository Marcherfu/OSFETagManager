<!DOCTYPE html>
<html>
	<head>
		<title>OSFE Tag Manager</title>
		<meta charset="UTF-8">
	</head>
	<body>
		<?php
			//Reading file BaseSpells.xml and set-up of the export
			$xml = simplexml_load_file("./BaseSpells.xml");
			//$export = new SimpleXMLElement($xml);
			$tag;
			foreach($xml as $item) {
				$tag["".$item['itemID']] = "";
				if(isset($_POST["tagsBase".$item['itemID']])) {
					$tag["".$item['itemID']] = $tag["".$item['itemID']]."Base, ";
				};
				if(isset($_POST["tagsBonusNG".$item['itemID']])) {
					$tag["".$item['itemID']] = $tag["".$item['itemID']]."BonusNG, ";
				};
				if(isset($_POST["tagsBonusRe".$item['itemID']])) {
					$tag["".$item['itemID']] = $tag["".$item['itemID']]."BonusRe, ";
				};
				if(isset($_POST["tagsBonusSK".$item['itemID']])) {
					$tag["".$item['itemID']] = $tag["".$item['itemID']]."BonusSK, ";
				};
				if(isset($_POST["tagsCpu".$item['itemID']])) {
					$tag["".$item['itemID']] = $tag["".$item['itemID']]."Cpu, ";
				};
				if(isset($_POST["tagsDemo".$item['itemID']])) {
					$tag["".$item['itemID']] = $tag["".$item['itemID']]."Demo, ";
				};
				if(isset($_POST["tagsDrone".$item['itemID']])) {
					$tag["".$item['itemID']] = $tag["".$item['itemID']]."Drone, ";
				};
				if(isset($_POST["tagsExpansion".$item['itemID']])) {
					$tag["".$item['itemID']] = $tag["".$item['itemID']]."Expansion, ";
				};
				if(isset($_POST["tagsFlower".$item['itemID']])) {
					$tag["".$item['itemID']] = $tag["".$item['itemID']]."Flower, ";
				};
				if(isset($_POST["tagsGem".$item['itemID']])) {
					$tag["".$item['itemID']] = $tag["".$item['itemID']]."Gem, ";
				};
				if(isset($_POST["tagsHolly".$item['itemID']])) {
					$tag["".$item['itemID']] = $tag["".$item['itemID']]."Holly, ";
				};
				if(isset($_POST["tagsLive".$item['itemID']])) {
					$tag["".$item['itemID']] = $tag["".$item['itemID']]."Live, ";
				};
				if(isset($_POST["tagsNegative".$item['itemID']])) {
					$tag["".$item['itemID']] = $tag["".$item['itemID']]."Negative, ";
				};
				if(isset($_POST["tagsNoDoublecast".$item['itemID']])) {
					$tag["".$item['itemID']] = $tag["".$item['itemID']]."NoDoublecast, ";
				};
				if(isset($_POST["tagsNoFlex".$item['itemID']])) {
					$tag["".$item['itemID']] = $tag["".$item['itemID']]."NoFlex, ";
				};
				if(isset($_POST["tagsNoFlow".$item['itemID']])) {
					$tag["".$item['itemID']] = $tag["".$item['itemID']]."NoFlow, ";
				};
				if(isset($_POST["tagsNoShield".$item['itemID']])) {
					$tag["".$item['itemID']] = $tag["".$item['itemID']]."NoShield, ";
				};
				if(isset($_POST["tagsNoShieldPlus".$item['itemID']])) {
					$tag["".$item['itemID']] = $tag["".$item['itemID']]."NoShieldPlus, ";
				};
				if(isset($_POST["tagsNoStrafe".$item['itemID']])) {
					$tag["".$item['itemID']] = $tag["".$item['itemID']]."NoStrafe, ";
				};
				if(isset($_POST["tagsPlayer".$item['itemID']])) {
					$tag["".$item['itemID']] = $tag["".$item['itemID']]."Player, ";
				};
				if(isset($_POST["tagsPvP".$item['itemID']])) {
					$tag["".$item['itemID']] = $tag["".$item['itemID']]."PvP, ";
				};
				if(isset($_POST["tagsRandom".$item['itemID']])) {
					$tag["".$item['itemID']] = $tag["".$item['itemID']]."Random, ";
				};
				if(isset($_POST["tagsSaffronBoss".$item['itemID']])) {
					$tag["".$item['itemID']] = $tag["".$item['itemID']]."SaffronBoss, ";
				};
				if(isset($_POST["tagsSkipTest".$item['itemID']])) {
					$tag["".$item['itemID']] = $tag["".$item['itemID']]."SkipTest, ";
				};
				if(isset($_POST["tagsStarting".$item['itemID']])) {
					$tag["".$item['itemID']] = $tag["".$item['itemID']]."Starting, ";
				};
				if(isset($_POST["tagsWeapon".$item['itemID']])) {
					$tag["".$item['itemID']] = $tag["".$item['itemID']]."Weapon, ";
				};
				$tag["".$item['itemID']]=substr($tag["".$item['itemID']], 0, -2);
				//Rebuilding the entire Spell, needed to avoid breaking the animations for example.
				//Also including changed Tags to it.
				$item->Stats = $item->Stats.'';
				$item->HitAllies = $item->HitAllies.'';
				$item->HitEnemies = $item->HitEnemies.'';
				$item->HitSelf = $item->HitSelf.'';
				$item->HitStructures = $item->HitStructures.'';
				$item->Name = $item->Name.'';
				$item->Tags = ''.$tag["".$item['itemID']];
				$item->Description = $item->Description.'';
				$item->Meta = $item->Meta.'';
				$item->Rarity = $item->Rarity.'';
				$item->Brand = $item->Brand.'';
				$item->Mana = $item->Mana.'';
				$item->Damage = $item->Damage.'';
				$item->Shots = $item->Shots.'';
				$item->Tiles = $item->Tiles.'';
				$item->TimeBetweenShots = $item->TimeBetweenShots.'';
				$item->ShotVelocity = $item->ShotVelocity.'';
				$item->ShotDuration = $item->ShotDuration.'';
				$item->ShotDelay = $item->ShotDelay.'';
				$item->CastDelay = $item->CastDelay.'';
				$item->BlastDuration = $item->BlastDuration.'';
				$item->DestroyOnHit = $item->DestroyOnHit.'';
			}
			$newfile = "Spells.xml";
			$xml->asXML($newfile);
		?>
	</body>
</html>