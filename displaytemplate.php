<!DOCTYPE HTML>
<!-- Contains the tags that are used to pull words for the story and then allow the stories to be pulled and displated -->
<html>
	<script>
		var ni;
		var ai;
		var vi;
		var bi;
		var pi;
		var numi;
		var foi;
		
		function displayTextBoxes(para) 
		{
			var n = (para.split("[NOUN]").length-1);
			var a = (para.split("[ADJ]").length-1);
			var v = (para.split("[VERB]").length-1);
			var b = (para.split("[BODYPARTS]").length-1);
			var p = (para.split("[PLACE]").length-1);
			var num = (para.split("[NUMBER]").length-1);
			var fo = (para.split("[FOOD]").length-1);
			
			ni = n;
			ai = a;
			vi = v;
			bi = b;
			pi = p;
			numi = num;
			foi = fo;
			
			var ix = 0;
			var iy = 0;
			var iz = 0;
			var ib = 0;
			var ip = 0;
			var inum = 0;
			var ifo = 0;
			
			var container = document.getElementById("container");

		while(n != 0)
		{
			var input = document.createElement("input");
			input.type = "text";
			input.id = "noun" + ix;
			container.appendChild(input);
			container.innerHTML = container.innerHTML + "NOUN"
	
			n--;
			ix++;
		}
	
		while(a != 0)
		{
			var input = document.createElement("input");
			input.type = "text";
			input.id = "adj" + iy;
			container.appendChild(input);
			container.innerHTML = container.innerHTML + "ADJECTIVE"
		
			a--;
			iy++;
		}
	
		while(v != 0)
		{
			var input = document.createElement("input");
			input.type = "text";
			input.id = "verb" + iz;
			container.appendChild(input);
			container.innerHTML = container.innerHTML + "VERB"
		
			v--;
			iz++;
		}
		
		while(b != 0)
		{
			var input = document.createElement("input");
			input.type = "text";
			input.id = "bodypart" + ib;
			container.appendChild(input);
			container.innerHTML = container.innerHTML + "BODYPART"
		
			b--;
			ib++;
		}
	
		while(p != 0)
		{
			var input = document.createElement("input");
			input.type = "text";
			input.id = "place" + ip;
			container.appendChild(input);
			container.innerHTML = container.innerHTML + "PLACE"
		
			p--;
			ip++;
		}
		
		while(num != 0)
		{
			var input = document.createElement("input");
			input.type = "text";
			input.id = "number" + inum;
			container.appendChild(input);
			container.innerHTML = container.innerHTML + "NUMBER"
		
			num--;
			inum++;
		}
		
		while(fo != 0)
		{
			var input = document.createElement("input");
			input.type = "text";
			input.id = "food" + ifo;
			container.appendChild(input);
			container.innerHTML = container.innerHTML + "FOOD"
		
			fo--;
			ifo++;
		}
		
		container.innerHTML = container.innerHTML + "<input type='submit' value='Submit' name='btn' onclick='displayStory();'>"
		}
</script>
	<head>
		<title>Template Display</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main1.css" />
		
		<style>
			input[type="submit"]{
				
				float: right;
			}
			
			html,body {
				overflow: auto;
			}

			.container, .contents {
				height: 800px;
				overflow: auto;
			}
			
			<!-- Div functions place whatever is between the tags to certain parts of the page. divT to the top,
			 divR to the right, divL to the left-->
			divT {
				height: 200px;
				width: 400px;
				background: transparent;
				
				word-wrap: break-word;
				position: fixed;
				top: 20%;
				left: 55%;
				margin-top: -100px;
				margin-left: -200px;
			}
			
			divR {
				height: 400px;
				width: 800px;
				background: transparent;
				
				position: fixed;
				top: 35%;
				left: 30%;
				margin-top: -72px;
				margin-left: 400px;
			}
			
			divL {
				height: 400px;
				width: 800px;
				background: transparent;
			
				position: fixed;
				top: 35%;
				left: 29%;
				margin-top: -100px;
				margin-left: -400px;
			}
			
			.box {
				width: 45%;
				height: 80%;
				background-color: black;
				border: solid 3px silver;
				
				position: fixed;
				margin-top: 5%;
				margin-left: 25%;
			}
			
			divD {
				height: 200px;
				width: 400px;
				background: transparent;
				
				position: fixed;
				top: 75%;
				left: 50%;
				margin-top: -100px;
				margin-left: -200px;
			}
			
			div1 {
				height: 200px;
				width: 400px;
				background: transparent;

				position: fixed;
				top: 50%;
				left: 50%;
				margin-top: -100px;
				margin-left: -200px;
			}
		
		<!-- Contains css functions that allow the dropdown button to persist. Can be moved to css file 
			  but leaving here for now incase anything breaks-->
			.dropbtn {
				background-color: transparent;
				color: white;
				padding: 0px;
				font-size: 25px;
				border: none;
				cursor: pointer;
			}

			.dropdown {
				
				position: relative;
				display: inline-block;
			}

			.dropdown-content {
				display: none;
				color: white;
				font-size: 20px;
				position: absolute;
				list-style-type: none;
				background-color: gray;
				min-width: 160px;
				box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
			}

			.dropdown-content a {
				color: white;
				font-size: 20px;
				padding: 12px 16px;
				text-decoration: none;
				
				display: block;
			}

			.dropdown-content a:hover {
				background-color: #f1f1f1
			}

			.dropdown:hover .dropdown-content {
				display: block;
			}

			.dropdown:hover .dropbtn {
				background-color: transparent;
			}
</style>

		
	</head>
	
	<body>
		
		<!-- Wrapper -->
			<div id="wrapper" class="dropdown"  >
				<button class="dropbtn">Menu</button>

				<!-- Header -->
					<header >
						
						<div class="dropdown-content">
							<! Menu bubbles> 
							<li><a href="http://localhost/indexweb.php">Home </a></li>
							<li><a href="http://localhost/enterinfo.html">Make A Story</a></li>
							<li><a href="http://localhost/retrievestory.php">Stories</a></li>
							<li><a href="http://localhost/reading.html">Contact Us</a></li>				
						<div>
					</header>
			</div>
				<!-- Main -->			
				<div class="box"> 
				<ul>
					<?php
					$dbhost = "localhost";
					$user = "root";
					$password = "";
					$db = "seem website";
	
					$conn = mysql_connect($dbhost, $user, $password);
					mysql_select_db($db);
	
					if ($conn == false) {
						die("Connection failed");
					}
					$rowid = $_GET['rowid'];
					
					$sql = "SELECT story FROM makeastory WHERE id = $rowid";
	
					$result = mysql_query($sql, $conn);
					$grab = mysql_fetch_assoc($result);
					
					if(!$result)
					{
						echo 'could not run query';
					}					
					?>
					
				<form name="displayForm id="displayForm" method="post" class="textareaStyle">	
					<div id="container"/>
					<script>displayTextBoxes("<?php echo ($grab['story']); ?>") </script>
					

				</form>
				
				
				</li> 
				</div>
				
			</div>
			
	</body>
			<script>
			
			function displayStory() {
	
			var n = ni;
			var a = ai;
			var v = vi;
			var b = bi;
			var p = pi;
			var num = numi;
			var fo = foi;
			
			var para = <?php echo json_encode($grab['story']); ?>;
			
			var ix = 0;
			var iy = 0;
			var iz = 0;
			var ib = 0;
			var ip = 0;
			var inum = 0;
			var ifo = 0;
			
			while(n != 0)		
			{
				var ele = document.getElementById('noun' + ix).value;
				para = para.replace("[NOUN]", ele)
				n--;
				ix++;
			}	
	
			while(a != 0)
			{
				var ele = document.getElementById('adj' + iy).value;
				para = para.replace("[ADJ]", ele)
				a--;
				iy++;
			}
	
			while(v != 0)
			{
				var ele = document.getElementById('verb' + iz).value;
				para = para.replace("[VERB]", ele)
				v--;
				iz++;
			}
			
			while(b != 0)
			{
				var ele = document.getElementById('bodypart' + ib).value;
				para = para.replace("[BODYPARTS]", ele)
				b--;
				ib++;
			}
			
			while(p != 0)
			{
				var ele = document.getElementById('place' + ip).value;
				para = para.replace("[PLACE]", ele)
				p--;
				ip++;
			}
			
			while(num != 0)
			{
				var ele = document.getElementById('number' + inum).value;
				para = para.replace("[NUMBER]", ele)
				num--;
				inum++;
			}
			
			while(fo != 0)
			{
				var ele = document.getElementById('food' + ifo).value;
				para = para.replace("[FOOD]", ele)
				fo--;
				ifo++;
			}
			
			container.innerHTML = para;
		
		}
		
		</script>
</html>