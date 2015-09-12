<?php

exec("git pull", $output);
foreach ($output as $a) {
	echo $a . "\n";
}
exec("composer update", $output);
foreach ($output as $a) {
	echo $a . "\n";
}
