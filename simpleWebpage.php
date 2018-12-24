

<html>

<head>
<script type = "text/javascript" src = "process.js"></script> 
<style type = "text/css">
form {font-weight:bold;
	color: white;}
	
section {
	width: 650px;
	border: 3px solid black;
	padding: 2em 0em 1em;
	}

label {
		float: left;
		width: 11em;
		text-align: right;
		}
input {
		margin-left: 1em;
		margin-bottom: .5em;
	}

body {
	background-color:#282931;
	text-color:blue;
	margin-left:7em;
	margin-right:7em;
	margin-top:1em;
	}

p {
	font-family: Arial, Helvetica, sans-serif;
	text-align: justify;
	color: blue;
	line-height: 200%;
}

h1 {
	font-family: :Arial, Helvetica, sans-serif;
	color: black;
	text-align: center;
	background-color: white;
}

h3 {
	color: #f0758a;
}



</style>



</head>

<body>

<h1> GUN VOILINCE: </h1>
<p>Gun violence in the United States results in tens of thousands of deaths and injuries annually. In 2013, there were 73,505 nonfatal firearm injuries (23.2 injuries per 100,000 U.S. citizens), and 33,636 deaths due to "injury by firearms" (10.6 deaths per 100,000 U.S. citizens).</p>
<img src = "gun.jpg.jpg">

<hl> Domesctic Gun Violence </h1>
<p>Last weekend's massacre in Las Vegas is only the latest reminder of the persistent gun violence in the United States. And a new set of statistics on the rates of gun violence unrelated to conflict underscores just how outsize U.S. rates of gun deaths are compared with those in much of the rest of the world.
<img src = "gunvoilence.jpg">

Take countries with the top indicators of socioeconomic success — income per person and average education level, for instance. The United States ranks ninth in the world among them, bested only by the likes of Luxembourg, Denmark, Norway, the Netherlands, Iceland, Andorra, Canada and Finland.</p>
<h1> Understanding Domestic Gun Violence  </h1>
<p>Gun violence in the United States results in tens of thousands of deaths and injuries annually. ... These deaths consisted of 11,208 homicides, 21,175 suicides, 505 deaths due to accidental or negligent discharge of a firearm, and 281 deaths due to firearms use with "undetermined intent".</p>

<h1>What needs to be done to stop gun voilence?</h1>
<p>
Given the current political landscape, it is unlikely that additional gun control measures will be adopted in Washington. In fact, the opposite may occur. The new Congress just voted to repeal the Social Security disability gun rule. This rule limits access to guns for individuals with mental disabilities who are unable to manage their day-to-day affairs. According to the Washington Post, the rule would have prevented about 75,000 individuals with mental health issues from purchasing firearms.

Other gun rights measures that may be considered by Congress and the Trump administration include lifting the ban on suppressors/silencers, eliminating gun-free zones near schools and on military bases and streamlining the background check process.

These proposals are difficult to understand if as Americans we share a common desire to reduce preventable deaths and trauma from gun injuries, both intentional and accidental.

At the state and local levels, the politics of guns is more fluid, reflecting different cultural norms across the country. In November 2016, for example, voters in California, Nevada and Washington adopted new gun control measures, while voters in Maine narrowly rejected one. And in Florida, a federal appeals court just struck down on a state law that barred doctors from discussing gun ownership with their patients.</p>


<h1> Join us to stop gun voilence. </h1>

<section>
<form id = "form1" action = "connection.php" method = "post">
<!--First Name&nbsp;<input type = "text" name = "firstname">
Last Name&nbsp; <input type = "text" name= "lastname"> <br />
Address&nbsp&nbsp; <input type = "text" name= "address"> <br />
<input type = "submit" value = "Submit">
</form> -->

<label for= "firstname">First Name </label>
<input type = "text" id="firstname" name = "firstname">
<span id = "firstname_error">*</span><br>

<label for = "lastname">Last Name </label> 
<input type = "text" id="lastname" name = "lastname">
<span id = "lastname_error">*</span><br>

<label for = "address">Address </label> 
<input type = "text" id="address" name = "address"> 
<span id = "address_error">*</span><br>

<input type = "submit" id = "submit" onclick="moveOn()" value = "Submit" >
</form>
</section>

<br>

<h3> Total participant. <h3>
<a href = "display.php"> Click Here </a>

</html>
