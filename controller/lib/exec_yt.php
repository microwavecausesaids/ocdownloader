<?php

namespace OCA\ocDownloader\Controller;

use OCA\ocDownloader\Controller\Lib\YouTube;

/*


$argv[0] = youtube-dl path
$argv[1] = UID
$argv[2] = DID

Need to gather youtube-dl path
Need to gather UID (User ID)
Need to gather DID Param (UniqueID for the directory in which configs are stored)

Downloading specs are in the /tmp/ytdownloader/$ID directory


*/

error_log("HERE --> Parsed to execute" . $argv[0]. " ". $argv[1] . " " . $argv[2]  , 0);

#$YouTube = new YouTube($this->YTDLBinary, $_POST['FILE']);

?>