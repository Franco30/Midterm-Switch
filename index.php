<!DOCTYPE html>
<html>
<head>
	<title>Color Buttons</title>
	<link rel="stylesheet" type="text/css" href="./color_buttons.css">
	<script>
        function colorChanger(color) {
  switch(color) {
		case "red":
			document.getElementById("color_box").style.backgroundColor = "red";
			break;
		case "orange":
			document.getElementById("color_box").style.backgroundColor = "orange";
			break;
		case "yellow":
			document.getElementById("color_box").style.backgroundColor = "yellow";
			break;
		case "green":
			document.getElementById("color_box").style.backgroundColor = "green";
			break;
		case "blue":
			document.getElementById("color_box").style.backgroundColor = "blue";
			break;
		case "indigo":
			document.getElementById("color_box").style.backgroundColor = "indigo";
			break;
		case "violet":
			document.getElementById("color_box").style.backgroundColor = "violet";
			break;		
	}
}
    </script>
    <style>
    @viewport {
    zoom: 1.0;
    width: device-width;
}

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

#color_box {
	width: 20rem;
	height: 20rem;
	border: solid 1px;
}
    </style>
</head>
<body>
<div id="color_box">
</div>
<div id="button_box">
	<button type="button" id="red" onclick="colorChanger(this.id)">Red</button>
	<button type="button" id="orange" onclick="colorChanger(this.id)">Orange</button>
	<button type="button" id="yellow" onclick="colorChanger(this.id)">Yellow</button>
	<button type="button" id="green" onclick="colorChanger(this.id)">Green</button>
	<button type="button" id="blue" onclick="colorChanger(this.id)">Blue</button>
	<button type="button" id="indigo" onclick="colorChanger(this.id)">Indigo</button>
	<button type="button" id="violet" onclick="colorChanger(this.id)">Violet</button>
</div>
</body>
</html>
