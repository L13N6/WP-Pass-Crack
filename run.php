<?php
include("wpHash.php");
include("Header.php");
$wList = file_get_contents("wList.txt");
$wList = explode("\n",$wList);
echo $white;
echo base64_decode("ICAgX19fX18gICAgICAgICAgIF8gIF9fX19fICAgICAgICAgIF8gICAgICAKICAvIF9fX198ICAgICAgICAgfCB8LyBfX19ffCAgICAgICAgfCB8ICAgICAKIHwgKF9fXyAgIF9fIF8gIF9ffCB8IHwgICAgIF9fXyAgIF9ffCB8IF9fXyAKICBcX19fIFwgLyBfYCB8LyBfYCB8IHwgICAgLyBfIFwgLyBfYCB8LyBfIFwKICBfX19fKSB8IChffCB8IChffCB8IHxfX198IChfKSB8IChffCB8ICBfXy8KIHxfX19fXy8gXF9fLF98XF9fLF98XF9fX19fXF9fXy8gXF9fLF98XF9fX3w");
echo "\n";
echo "			     $yellow| $green WP Hash Password cracker v1.0 $yellow|              \n";
echo "			        $yellow| $green Coded by SadCode Official $yellow|              \n";
echo $end;
echo "\n";
echo $green;
echo "	[+] Enter WP hash : ";
$Hash = fgets(STDIN,1024);
$Hash = trim($Hash);
echo "\n";
echo $yellow."	[~] Wait ....\n";
foreach($wList as $wList2){
$wList2 = trim($wList2);
$wp_hasher = new PasswordHash(16, true);
$Found = false;
if($wp_hasher->CheckPassword($wList2, $Hash)) {
	echo "	[+] Yes password is correct : $wList2\n" ; 	
$Found = null;
} else {
}
}
