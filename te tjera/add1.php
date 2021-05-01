<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
  
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
  
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>    
</head>

<body>

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a class="navbar-brand" href="#">BookStore <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-book-fill" viewBox="0 0 16 16"><path d="M8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
		</svg></a>

		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
       		 <span class="navbar-toggler-icon"></span>
   	    </button>

	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item active">
				<a class="nav-link" href="#"> Home <span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="https://www.bing.com/images/search?q=foto+librash&qpvt=foto+librash&form=IGRE&first=1&tsc=ImageBasicHover" target="_blank">Picture of books </a>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sites</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">

					<a class="dropdown-item" href="index.php">List <span style="font-size:.5em; position:absolute; top:3px; left:2px">Books</span></a>
					<a class="dropdown-item" href="edit.php"> Edit Books</a>
					<a class="dropdown-item" href="delete.php">Delete</a>
				</div>
			</li>
		</ul>
	</div>

	        <form class="form-inline my-2 my-lg-0">
				<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
				<button class="btn btn-primary my-2 my-sm-0" type="submit">Search </button>
			</form>

</nav>

	<div class="row">
			<div class="col-sm">
				<h2> Welcome to the BookStore</h2>
					<div class="alert alert-success">
						<strong>Good day!</strong> Visit <a href="add1.php" target="_blank">BookStore page</a>!
					</div>
			</div>
		</div>

		<div class="row">
			<div class="col-sm">
				<form action="#" method="post">
					<table class="table table-hover">
						<tr>
							<td>Title</td>
							<td><input type="text" name="titulli" class="form-control" required></td>
						</tr>
						<tr>
							<td> Author</td>
							<td><input type="text" name="autori" class="form-control" required></td>
						</tr>
						<tr>
							<td>Published Date</td>
							<td><input type="date" name="data_regjistrimit" class="form-control"></td>
						</tr>
						<tr>
							<td></td>
							<td><button type="submit" class="btn btn-primary">
								<span class="glyphicon glyphicon_plus"></span> Submit
								</button>
							</td>
						</tr>
					</table>
				</form>
			</div>
		</div>
	</div>		

	



		



</body>
</html>