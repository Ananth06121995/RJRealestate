<!DOCTYPE html>
<html>
<head>
	<title>contact form</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	</head>
	<body>
	<div class="container">
	<form method="post" action="meil.php">
    <div class="form-group">
    <label for="name">Name</label>
    <input type="text" name="name" class="form-control" id="exampleInputEmail1" id="name" placeholder="Enter fullname">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
    <label for="email">Enter your email</label>
    <input type="email" name="email" class="form-control" id="email" placeholder="Email">
    </div>
    <div class="form-group">
    <label for="message">Write something</label>
    <textarea id="message" class="form-control"></textarea>
    </div>
    <button type="submit" name="submit"class="btn btn-primary">Submit</button>
    </form>
	
	</body>
	</html>