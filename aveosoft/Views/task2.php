<div class="box" style="padding: 30px;">
	
	<nav aria-label="breadcrumb">
	  <ol class="breadcrumb">
	    <li class="breadcrumb-item"><a href="index">Index</a></li>
	    <li class="breadcrumb-item active" aria-current="page">Task-2</li>
	  </ol>
	</nav>


	<h3>Task-2</h3><hr>
	  	<div class="card-body">
	  		<form method="post" enctype="multipart/form-data">
	  			<div class="form-group">
				    <label for="tblname"><b>Enter Table Name:</b></label>
				    <input type="text" name="tblname" id="tblname" class="form-control col-md-4">
				</div>
                	<input type="submit" class="btn btn-success" name="instbl"> 
                    <input type="reset" class="btn btn-danger">
			</form>
	  	</div>
	  	<hr>

	<div class="row">
		<div class="card" style="width: 18rem;margin: 15px;">
		  <div class="card-body">
		    <h5 class="card-title">Table Name: user</h5><hr>
		    <p class="card-text">Name: varchar(20)<br>Age: int(3)<br>Address: varchar(100)<br>Mobile: varchar(10)</p>
		  </div>
		</div>
		
		<div class="card" style="width: 18rem;margin: 15px;">
		  <div class="card-body">
		   <h5 class="card-title">Table Name: education</h5><hr>
		   <p class="card-text">Fname: varchar(20)<br>Lname: varchar(20)<br>Education: varchar(20)<br>Mobile: varchar(10)<br>Email: text</p>
		  </div>
		</div>

		<div class="card" style="width: 18rem;margin: 15px;">
		  <div class="card-body">
		    <h5 class="card-title">Table Name: company</h5><hr>
		    <p class="card-text">Name: varchar(20)<br>Projects: int(8)<br>About: text<br>Establishment: date</p>
		  </div>
		</div>
	</div>
</div>