<?php
set_time_limit (300);
while (@ ob_end_flush()); // end all output buffers if any

$proc = popen('Rscript "R/Main.R" 2>&1', 'r');
echo '<pre>';
while (!feof($proc))
{
    echo fread($proc, 4096);
    @ flush();
}
echo '</pre>';