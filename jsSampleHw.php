<html>
<head>
	<script>
		//TODO solutions
                //Google/Explore how to create an element and add it to the DOM
                //create a div tag, add "added new element" as the text
                //add it to the DOM body


	function newElement(){
		var newElement = document.createElement ('div');
		newElement.textContent = 'added a new element';
		console.log(newElement);

		document.body.append(newElement);
}

	</script>
</head>
<body onload="newElement();">
</body>

</html>
