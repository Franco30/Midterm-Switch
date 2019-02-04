<!DOCTYPE html>
<html>
<body>
<input id="color" type="text">

<button type="button" onclick="colorChanger(color)">Try it</button>

<div id="color_box">
    </div>

<script>
function colorChanger(color) {
  switch(color) {
		case "red":
			document.getElementById("color_box").style.backgroundColor = "red";
			break;
		case "blue":
			document.getElementById("color_box").style.backgroundColor = "blue";
			break;
		case "green":
			document.getElementById("color_box").style.backgroundColor = "green";
			break;
		default:
			document.getElementById("color_box").style.backgroundColor = "violet";
			break;
		
	}
}
</script>

</body>
</html>
