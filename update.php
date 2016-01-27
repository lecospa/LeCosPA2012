<?php

exec("git pull", $output);
foreach ($output as $a) {
	echo $a . "\n";
}
