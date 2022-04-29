<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Add New Product</title>
</head>
<body>
	<form action="/product/save" method="post">
		Product Name <input type="text" name="product_name"><br><br>
		Product Price <input type="text" name="product_price"><br>
		<button type="submit">Save</button>
	</form>
</body>
</html>