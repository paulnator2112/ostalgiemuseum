<?php
?>
<html>
	<head lang="de">
		<meta charset="UTF-8">
		<title>Galerie</title>
		<link rel="stylesheet" href="css/stylesheet.css" />
	</head>
	<body bgcolor="gray">	
		<nav>
			<a href="index.html">HOME</a>
			<a href="galerie.php">GALERIE</a>
			<a href="kontakt.html">KONTAKT</a>
			<a href="impressum.html">IMPRESSUM</a>
		</nav>
		<div id="allImages">
			<?php
			$images = scandir("img/");
			$ini = parse_ini_file("img/display.ini",1);
			foreach($images as $key => $value){
				if(!($value == ".." or $value =="." or $value == "display.ini")){
					$split = explode(".",$value);
					if($ini["display"][$split[0]]){
						echo '<div class="gallery">
								<a target="_blank" href="img/'.$value.'">
									<img src="img/'.$value.'" width="300" height="200">
								</a>
								<div class="desc">'.$ini["title"][$split[0]].'</div>
							</div>';
					}
				}
			}
			?>		
		</div>
	</body>
</html>

