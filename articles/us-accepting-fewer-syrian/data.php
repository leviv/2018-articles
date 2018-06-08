<?php
$article_identifier = 'Outrage';
$author = 'Brian Smith';
$pubdate = 'June 7, 2018';
$title = 'The U.S. is accepting fewer Syrian refugees: Should we be taking more?';

$featured_img_caption = '';
$superlative = "";
if ($religion == "Christian") {
    $superlative = "many";
} else {
    $superlative = "most";
}

$firstStatement = "";
$secondStatement = "Robert Watkins of the Greater Alexandria Chamber of Commerce says “We have an obligation to take care of the people in our community";
$nameTitle = "Pastor";

if ($first == "church") {
    $firstStatement = "Pastor David Miller of Central Methodist Church in Virginia believes the U.S. should be doing more. “The Syrian refugees are our brothers and sisters. They are in need, and it is our responsibility as a God-fearing nation to allow them into our country and help them";
} else if ($first == "commerce"){
    $firstStatement = "Robert Watkins of the Greater Alexandria Chamber of Commerce believes the U.S. should be doing more. “The Syrian refugees are in need, and it is our responsibility as a nation to allow them into our country and help them";
    $secondStatement = "Pastor David Miller of Central Methodist Church in Virginia says, “We have an obligation as a God-fearing nation to take care of our own brothers and sisters";
} else {
    $firstStatement = "David Miller of the Northern Virginia Hospital System believes the U.S. should be doing more. “The Syrian refugees are in need, and it is our responsibility as a nation to allow them into our country and help them";
    $nameTitle = "Mr.";
}

$article = '
<p><strong>WASHINGTON -</strong> Since the start of the 2018 fiscal year last October, the US has resettled just 44 Syrian refugees, according to State Department data. That\'s down from about 6,000 in the same time frame last year.</p>

<p>This has started a debate in the U.S. about whether we should be accepting more refugees, '. $superlative .' of whom are ' . $religion . '.</p>

<p>'. $firstStatement .'. We, as Americans, need to act with compassion and generosity.”</p>

<p>Others, however, think that the United States should not be prioritizing refugees over the needs of Americans. '. $secondStatement .'. Our focus should be on improving the lives of those already living in the U.S.”</p>

<p>At a congressional hearing on Wednesday, members questioned State Department officials about the policy, suggesting it was inconsistent for the administration to intervene militarily on behalf of Syrians affected by chemical weapons attacks while limiting the resettlement of other vulnerable Syrian civilians caught up in the conflict.</p>

<p>For some, this policy shift has hit closer to home. “Because of these changes, I have family and friends who cannot escape the violence,” says '. $name .' Homsi. Homsi is a Syrian ' . $religion . ' in his early 30s who came as a refugee to the United States with his wife and daughter in 2015.</p>

<p>Homsi went on to say that he has been following the ongoing discussions closely. “This is something that is going to affect me and my community,” he says, “A lot of people I know will be paying attention.” Homsi lives in Northern Virginia, which has received a large number of Syrian refugees since 2012. He says that many other Syrian ' . $religion . 's in his neighborhood have loved ones trying to come to the United States.</p>

<p>The slowdown may just be the cause of a logistical problem and the State Department doing their due diligence with incoming refugees. "The process is a little bit slower because additional vetting mechanisms have been put in place," State Department spokeswoman Heather Nauert explained to reporters in a briefing. </p>

<p>That said, the State Department has classified what is going on in Syria as "a humanitarian crisis" and claims "there is no way to effectively facilitate a large-scale, safe and voluntary return of refugees without a political solution."</p>

<p>While there is widespread agreement in the U.S. that Syrians are in a terrible situation, '. $nameTitle .' Miller and Mr. Watkins exemplify the divisions regarding America’s responsibility to accept refugees from Syria.</p>';

$corrections = '<p>None</p>';
$who_spoke_to = array(
    ''
);
$where_written = '<p>This story was written on assignment in San Francisco, California</p>';
$editor = '<p>Marlene Bryant, science editor at <em>The News Beat</em></p>';
$version_history = '<p>There are no older versions of this story.</p>';

$comments = array();

?>
