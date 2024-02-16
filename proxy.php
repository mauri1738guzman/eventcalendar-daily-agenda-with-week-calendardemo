<?php
// Set the URL of the Outlook calendar
$outlook_calendar_url = 'https://outlook.office365.com/owa/calendar/9b145e467e0548bcb17686eb2cd3f363@houstontx.gov/c0722fa9cc3a41fcb9e4eb2eb2c96b7814182939682509455415/calendar.html';

// Fetch the calendar data
$calendar_data = file_get_contents($outlook_calendar_url);

// Output the calendar data
header('Content-Type: text/html');
echo $calendar_data;
?>