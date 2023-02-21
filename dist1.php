<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Dropdown</title>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script>
		$(document).ready(function(){
			$("#district").change(function(){
				var district = $(this).val();
				$.ajax({
					type: "POST",
					url: "vill.php",
					data: { district: district },
					dataType: "json",
					success: function(data){
						$("#villages").empty();
						$.each(data, function(index, village){
							$("#villages").append('<option value="' + village + '">' + village + '</option>');
						});
					}
				});
			});
		});
	</script>
</head>
<body>
	<h1>Karur and Nagapattinam</h1>
	<table>
		<tr>
	<td><label for="state">State:</label></td>
	<td>
		<input type="text" value="Tamil Nadu" readonly>
	</td>
	</tr>
	<tr></tr>
	<tr></tr>
	<tr>
	<td><label for="district">Select District:</label></td>
	<td><select id="district">
		<option value="select">Select</option>
		<option value="karur">Karur</option>
		<option value="nagapattinam">Nagapattinam</option>
	</select></td>
	</tr>
	<tr></tr>
	<tr></tr>
	<tr>
	<td><label for="villages">Select Village:</label></td>
	<td><select id="villages">
		<option>Select a district first</option>
	</select></td>
	</table>
</body>
</html>
