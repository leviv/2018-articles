<?php
$identifier = 'trust';
$title = 'Partisan Bickering Puts State Welfare Program in Peril';
$author = 'Brian Smith';
$pubdate = 'Feb. 26, 2017';
$featured_img = '../../dist/img/tideAd.png';

$firstStatement = "Robert Watkins of the Lansing Community Hospital, a vocal supporter of the program, thinks that cash assistance plays an essential role in allowing the less fortunate to live with dignity. “I think we can all agree that it is important to look out for our neighbors, and that means helping those in our community. We must care for those in need, and this policy helps do just that.”";
$secondStatement = "";
$nameTitle = "Pastor";

if ($first == "church") {
    $firstStatement = "Pastor David Miller of Central Methodist Church in Lansing, a vocal supporter of the program, thinks that cash assistance plays an essential role in allowing the less fortunate to live with dignity. “The Bible requires us to love thy neighbor and that means helping those in our community. God has called us to care for our brothers and sisters in need, and this policy helps do just that.”";
    $secondStatement = "Robert Watkins of the Lansing Community Hospital has repeatedly spoken out against the policy, saying last week “We have a personal responsibility to take care of those who have fallen on hard times";
} else if ($first == "commerce"){
    $secondStatement = "David Miller of the Lansing Chamber of Commerce has repeatedly spoken out against the policy, saying last week “We have a personal responsibility to take care of those who have fallen on hard times";
} else {
    $firstStatement = "Robert Watkins of the Lansing Community Hospital, a vocal supporter of the program, thinks that cash assistance plays an essential role in allowing the less fortunate to live with dignity. “I think we can all agree that it is important to look out for our neighbors, and that means helping those in our community. We must care for those in need, and this policy helps do just that.”";
    $secondStatement = "Pastor David Miller of Central Methodist Church in Lansing has repeatedly spoken out against the policy, saying last week “The Bible requires us to take care of our brothers and sisters who have fallen on hard times";

}

$featured_img_caption = '';
$article = '
<p><strong>LANSING</strong> – Republicans and Democrats remain deadlocked in the debate over the future of the Family Independence Program (FIP), a program that provides cash assistance to families living below the poverty line. Along with food stamps and Medicaid, FIP comprises the central tier of the welfare program for the state of Michigan. The state will not have the money to continue the current program if an agreement has not been reached by March 1st. </p>

<p>This stalemate could have important implications for many Michigan citizens. “Because politicians can’t come to an agreement, my son and I may not have food next month,” says Wendy Brown. Brown is a '. $race .' woman in her early 30s with a high school degree and has been receiving aid from the Family Independence Program (FIP) for the past year to help support herself and her three-year-old son.</p>

<p>Brown went on to say that she has been following the ongoing debates closely. “This is something that is going to affect me and my community,” Brown says, “A lot of people I know will be paying attention.” Brown, who lives in a predominantly '. $race .' neighborhood outside of Grand Rapids, believes that her friends and neighbors have a lot to lose if the parties cannot reach an agreement.</p>

<p>Community leaders have also been debating what the future of FIP should be. '. $firstStatement .'</p>

<p>Yet others in the state think the government is overstepping its role by providing cash assistance. '. $secondStatement .'. Communities and individuals need to come together to alleviate poverty. This is not something we should hand over to the government.”</p>

<p>While the legislature does not seem close to passing a bill, it appears as though every part of the program is up for negotiation. Some of the proposed changes to FIP would:</p>

<ul>
<li><p>	Put time limits on how long able-bodied recipients can receive benefits</p></li>
<li><p>	Provide additional compensation for families with a large number of children</p></li>
<li><p>	Implement work requirements and drug testing in order to receive benefits</p></li>
<li><p>	Double the number of social workers in the state</p></li>
<li><p>	Allow faith-based organizations to receive funds in order to provide job training</p></li>
<li><p>	Increase the number of job-training programs available</p></li>

</ul>

<p>The latest overhaul proposal, by Representative Paul Koretz, is called the Comprehensive Assistance Plan. Michigan Governor Rick Snyder has not formally taken a stance on the proposal, but he has made it clear that he wants substantive welfare reform passed soon.</p>

';

$corrections = '<p>None</p>';
$who_spoke_to = array(
    ''
);
$where_written = '<p>This story was written on assignment in San Francisco, California</p>';
$editor = '<p>Marlene Bryant, science editor at <em>The News Beat</em></p>';
$version_history = '<p>There are no older versions of this story.</p>';

$comments = array();

?>
