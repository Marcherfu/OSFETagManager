# OSFETagManager
A Tag Manager for One Step From Eden's spells.


## Set-up
Step 1 : Download the index.php and compile.php files.

Step 2 : Put them on your localhost folder. (if you don't have one/don't know what it is, i recommand you downloading Xampp or anything that works like it with a www or htdocs folder)

Step 3 : Copy the Spells.xml from your OSFE folder (One Step From Eden\OSFE_Data\StreamingAssets\Data, for Steam this folder is in Steam\steamapps\common) and put it in the same folder as index.php and compile.php and rename it BaseSpells.xml. (Also : KEEP A BACK-UP OF IT !)

Step 3.5 : In your php.ini configuration file, I heavily recommend that you verify if your max_input_vars allows a big enough amount (I've put it to like 32768 on my own installation) and if there is nothing that might make it not work.

Step 4 : Go to localhost/<foldername> where <foldername> is the name of the folder where you've put all these.

Step 4.5 : Wait for everything to load, this could take some time.

Step 5 : Do whatever you want, but keep in mind some restrictions : having less than 8 spells with the PvP tag (modded spells included) will make a black screen at the start of a PvP session and you might want to keep most of the Player tags and SaffronBoss tags.

Step 6 : When done, click at the bottom of the page on Generate Tags.

Step 7 : Wait a bit and when it's done, copy the new Spells.xml file that got generated in the folder into the Data folder of OSFE. (where you've got the original Spells.xml one)

Step 8 : Launch the game ! \o/

## Frequently Asked Questions

Q: Do you plan to optimize it a bit more ?

A: No, at first it was just made to change PvP tags for a drafting idea I've got, but I decided to extend it to other tags, it do what it was made for without needing too much work so I'm fine with it the way it is.


Q: I don't have the original Spells.xml anymore because I've forgot to do a back-up ! What i should do ?

A: Don't worry, if you're on Steam you can repair the files. However keep in mind that if you're into modding and you've not updated your mod yet it might go back to a previous state if you're not doing this correctly. (It happened to me because I was editing it in the wrong folder lmao)


Q: I've changed the file but the changes are not here. Why ?

A: If you haven't done it yet, just close and open the game again. It's because OSFE load it's files on start. (Changing profile might also work, not sure tho)


Q: Do you have any ideas of what to do with these tags ?

A: Yes ! Here's a couple ideas I've got :
  1. Change PvP Tags to keep only 8 spells. The idea is to make it so you draft the 8 spells with PvP Tag along with your opponent, picking 4 each. This would avoid making PvP completely RNG-based on who gets the better option.
  2. Change SaffronBoss tags. This would allow Saffron to get other patterns, it is not that much recommended tho.
  3. Change Player tags. This would allow to remove some Spells from the pool during Solo play.


Q: What does each tag do ?

A: Read Tags.md for informations about this.
