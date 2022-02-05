// from https://pastebin.com/raw/F2zMDPUF

<?php
echo "Find file *.jpg :<br />\n List file may be negative :<br />\n";
$exifdata = array();
foreach (new RecursiveIteratorIterator(new RecursiveDirectoryIterator('.')) as $filename)
{
    //echo "$filename<br />\n";
	if	(strpos($filename,".jpg")==true or strpos($filename,".JPG")==true)
	{
		$exif = read_exif_data($filename);
/*1*/	if (isset($exif["Make"])) {
			$exifdata["Make"] = ucwords(strtolower($exif["Make"]));
			if (strpos($exifdata["Make"],"/e")==true) echo "$filename<br />\n";
		}
/*2*/	if (isset($exif["Model"])) {
			$exifdata["Model"] = ucwords(strtolower($exif["Model"]));
			if (strpos($exifdata["Model"],"/e")==true) echo "$filename<br />\n";
		}
/*3*/	if (isset($exif["Artist"])) {
			$exifdata["Artist"] = ucwords(strtolower($exif["Artist"]));
			if (strpos($exifdata["Artist"],"/e")==true) echo "$filename<br />\n";
		}
/*4*/	if (isset($exif["Copyright"])) {
			$exifdata["Copyright"] = ucwords(strtolower($exif["Copyright"]));
			if (strpos($exifdata["Copyright"],"/e")==true) echo "$filename<br />\n";
		}
/*5*/	if (isset($exif["ImageDescription"])) {
			$exifdata["ImageDescription"] = ucwords(strtolower($exif["ImageDescription"]));
			if (strpos($exifdata["ImageDescription"],"/e")==true) echo "$filename<br />\n";
		}
/*6*/	if (isset($exif["UserComment"])) {
			$exifdata["UserComment"] = ucwords(strtolower($exif["UserComment"]));
			if (strpos($exifdata["UserComment"],"/e")==true) echo "$filename<br />\n";
		}
	}
}
echo "Done!";
?>