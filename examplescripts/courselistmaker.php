<?php

echo '<div id="accordion" class="accordion">';


$f = fopen("courselist.csv", "r");

while (($line = fgetcsv($f)) !== false) {
  $theCourseInfo ='<div class="accordion__section" style="border-bottom: 1px solid #aaa;" >';
  $theCourseInfo.='<h4 class="accordion__heading" style="font-size:1.2rem; font-family: Helvetica, Arial, sans-serif;">'.htmlspecialchars($line[0]).'&nbsp;'.htmlspecialchars($line[1]).'&nbsp;-&nbsp;'.htmlspecialchars($line[2]).'</h4>';
  $theCourseInfo.='';
  $theCourseInfo.='<div aria-hidden="true" class="accordion__content">';
  $theCourseInfo.='<p style="font-family: Helvetica, Arial, sans-serif; line-height: 1.4; font-size: 90%;">'.htmlspecialchars($line[3]).'</p>';
  $theCourseInfo.='<hr/>';
  $theCourseInfo.='<div style="padding: 5px; background: rgb(232, 232, 232); border-radius: 5px;">';


  $theCourseInfo.='<p style="margin: 0 0 2px 0; font-size: 70%; font-family: Helvetica, Arial, sans-serif;">Credits: '.htmlspecialchars($line[5]).'  </p>';
  $theCourseInfo.='<p style="margin: 0 0 2px 0; font-size: 70%; font-family: Helvetica, Arial, sans-serif;">Pre-requisites: '.htmlspecialchars($line[6]).'  </p>';
  $theCourseInfo.='<p style="margin: 0 0 2px 0; font-size: 70%; font-family: Helvetica, Arial, sans-serif;">Contact Hours: '.htmlspecialchars($line[7]).'  </p>';
  $theCourseInfo.='<p style="margin: 0 0 2px 0; font-size: 70%; font-family: Helvetica, Arial, sans-serif;">Notes: '.htmlspecialchars($line[4]).'  </p>';
  $theCourseInfo.='</div>';
  $theCourseInfo.='</div>';
  $theCourseInfo.='</div>';
  echo $theCourseInfo;
}
fclose($f);
echo "\n</div>";

?>
