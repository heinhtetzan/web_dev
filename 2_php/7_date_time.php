<?php

date_default_timezone_set("Asia/Yangon");

//echo date("j-n-Y h:i");

$date = date_create(date("d-m-Y"));
date_add($date,date_interval_create_from_date_string('6 months'));
echo date_format($date,"d-m-Y");
echo "<br>";
echo cal_days_in_month(CAL_GREGORIAN,date("m"),date("Y"));