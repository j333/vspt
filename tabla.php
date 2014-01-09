<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>jQuery.FilterTable Sample</title>
</head>
<body>
              <table>

<thead>
			<tr>
				<th title="President Number">#</th>
				<th>President</th>
				<th>Terms</th>
				<th>Tenure</th>
			</tr>
		</thead>
		<tbody>
			<tr><td>1</td><td>George Washington</td><td>two</td><td>1789-1797</td></tr>
			<tr><td>2</td><td>John Adams</td><td>one</td><td>1797-1801</td></tr>
			<tr><td>3</td><td>Thomas Jefferson</td><td>two</td><td>1801-1809</td></tr>
			<tr><td>4</td><td>James Madison</td><td>two</td><td>1809-1817</td></tr>
			<tr><td>5</td><td>James Monroe</td><td>two</td><td>1817-1825</td></tr>
			<tr><td>6</td><td>John Quincy Adams</td><td>one</td><td>1825-1829</td></tr>
			<tr><td>7</td><td>John Quincy Adams</td><td>one</td><td>1825-1829</td></tr>
			<tr><td>8</td><td>John Quincy Adams</td><td>one</td><td>1825-1829</td></tr>
			<tr><td>9</td><td>John Quincy Adams</td><td>one</td><td>1825-1829</td></tr>
		</tbody>

              </table>

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
	<script src="js/jquery.filtertable.min.js"></script>
	<script>
	$(document).ready(function() {
		$('table').filterTable();
	});
	</script>
</body>
</html>