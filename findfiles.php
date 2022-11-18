<?php
 
$stringsearch = "texttosearchfor";
$stringreplace = "texttoreplacewith";

$dir = array("assets/js");

foreach ($dir as $d) { 
	SearchandReplace($d, "open", "", false, false);
}

function SearchandReplace($dir, $stringsearch, $stringreplace, $delete=false, $replace=false)
{
	//echo "Starting search for $stringsearch within directory $dir";
	$listDir = array();
	if ($handler = opendir($dir)) { 
		while (($sub = readdir($handler)) !== FALSE) { 
			if ($sub != "." && $sub != ".." && $sub != "Thumb.db") { 
				if (is_file($dir."/".$sub) && (strpos(strtolower($sub), ".php") !== false || strpos(strtolower($sub), ".phtml") !== false|| strpos(strtolower($sub), ".js") !== false|| strpos(strtolower($sub), ".css") !== false || strpos(strtolower($sub), ".xml") !== false )) {
				//if (is_file($dir."/".$sub) && (strpos(strtolower($sub), ".txt") !== false)) {
					$getfilecontents = file_get_contents($dir."/".$sub);
					if (strpos($getfilecontents, $stringsearch) !== FALSE) { 
						echo   $dir ."/".$sub . "<br />";
						//echo '<a href="http://www.kncrowder.com/slidingdoor/'.$sub.'" target="_blank">'.$sub."</a><br />";
						//unlink($dir."/".$sub);
					}
					//unlink($dir."/".$sub);
					$listDir[] = $sub;
				} elseif (is_dir($dir."/".$sub)) { 
					$listDir[$sub] = SearchandReplace($dir."/".$sub,$stringsearch,$stringreplace,$delete,$replace);
				}
			}
		}
		closedir($handler);
	}
	return $listDir;
}
?>