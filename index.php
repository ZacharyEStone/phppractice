<?php
//Lesson 1
//Variable printing
$address = "742 Graves Street, Charlottesville, VA 22902 USA";
echo $address; 


//Author array
$authors = array(
'1870' => 'Charles Dickens',
'1863' => 'William Thackery',
'1882' => 'Anthony Trollope',
'1889' => 'Gerald Manley Hopkins');

 echo " <ol>"; 
foreach ($authors as $year => $name){
	echo "<li>$name";
	echo " died in ";
	echo "$year</li>";
}
 echo "</ol>";

 //Variable passing
 function greeting($hello){
 	echo $hello." Zach, I hope you are enjoing PHP";
 }

greeting("Hi");
echo "<p>";
greeting("Yo");

//Lesson 2
//Time Conversion Function
function timeconverter($seconds){
	return $seconds/60/60/24/365;
}
echo "<p>".timeconverter(600000000)."<p>";
echo "<p>".timeconverter(60)."<p>";
echo "<p>".timeconverter(4000.33)."<p>";

//Time Traveller Function
function timetraveller($traveller){
	if ($traveller >= 2020)
		echo "<p> Hail wanderer from beyond!";
	elseif ($traveller < 1900)
		echo "<p> Stranger from the past, what brings you here?";
	else {
		echo "<p> Hey friend";
	};
};

timetraveller(1608);
timetraveller(2100);
timetraveller(2013);

//Lesson 3
//Multiplication Function
function multiply($x,$y){
	return $x*$y;
}
echo "<p>".multiply(4,2)."<p>";
echo multiply(0,4)."<p>";
echo multiply(900,32)."<p>";
echo multiply(299999,23)."<p>";

//Division Function
function division($n,$d){
	if ($d != 0)
		return $n/$d;
	else 
		echo "0<p>";
}
echo division(4,2)."<p>";
echo division(2,4)."<p>";
echo division(384,0)."<p>";
echo division(900,32)."<p>";

//Evaluator Function

function evaluator($a,$b){
	if ($a>$b)
		echo $b;
	elseif ($a<$b)
		echo $a;
	else 
		echo "Those be the samez!";
}
echo "<p>".evaluator(2,3)."<p>";
echo evaluator(1,1)."<p>";
echo evaluator(5,2)."<p>";

//String Length Function
function stringcounter($stringer){
	strlen ($stringer);
}

echo stringcounter("Zach is the greatest PHPer in Praxis History");
?> 

<ol>
<?php foreach($authors as $year => $name): ?>
	<li><?php echo $year ?> <?php echo $name ?></li>
<?php endforeach; ?>
</ol>
