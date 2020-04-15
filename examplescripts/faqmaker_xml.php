<?php

echo '<div id="accordion" class="accordion">';
if (file_exists('data/faq.xml')) {
    $xml = simplexml_load_file('data/faq.xml');
    //print_r($xml);
} else {
    exit('Failed to open test.xml.');
}

$list = $xml->question;

for ($i = 0; $i < count($list); $i++) {

    // echo '<b>Q</b> ' . $list[$i]->thequestion . '<br>';
    //
    // echo 'Ans: ' . $list[$i]->theanswer . '<br>';

    $aQuestionEntry ='<div class="accordion__section" style="border-bottom: 1px solid #aaa;" >';
    $aQuestionEntry.='<h3 class="accordion__heading" style="color: #707070; letter-spacing: .5px; font-size:1.2rem; font-family: Helvetica, Arial, sans-serif;">'.$list[$i]->thequestion.'</h3>';
    $aQuestionEntry.='';
    $aQuestionEntry.='<div aria-hidden="true" class="accordion__content">';
    $aQuestionEntry.='<p style="line-height: 1.4; font-size: 90%;">'.$list[$i]->theanswer .'</p>';
    $aQuestionEntry.='</div>';
    $aQuestionEntry.='</div>';

    echo $aQuestionEntry;


}
echo "\n</div>";

?>
