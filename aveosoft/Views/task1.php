<div class="box" style="padding: 30px;">
	
	<nav aria-label="breadcrumb">
	  <ol class="breadcrumb">
	    <li class="breadcrumb-item"><a href="index">Index</a></li>
	    <li class="breadcrumb-item active" aria-current="page">Task-1</li>
	  </ol>
	</nav>


	<h3>Task-1</h3><hr>
	<div class="row vdivide">
	  	<div class="card-body">
	    	<div class="row">
				<div  class="col-sm-6 col-xs-12">
					<form method="post" enctype="multipart/form-data">
						  <div class="form-group">
						    <label for="textarea"><b>Input Text:</b></label>
						    <textarea class="form-control" name="textinput" id="textarea" rows="7"></textarea>
						  </div>
						   <center>
                                <input type="submit" class="btn btn-success" name="sendtext"> 
                                <input type="reset" class="btn btn-danger">
                            </center>
					 	</form>		
					 	<?php
							if (isset($_POST['sendtext'])) 
							{
								$pattern = '/(http|https)\:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/';
								$str = $_POST['textinput'];
								//echo $str;
								if($num_found = preg_match_all($pattern, $str, $out))
								{
								  
									$counter = 1;
									?>
										<br>
										<table class="table table-bordered">
										  	<thead>
										    	<tr>
										      		<th scope="col" style="width: 10%;">#</th>
										   			<th scope="col">Links</th>
										    	</tr>
										  	</thead>
										  	<tbody>
												<?php foreach ($out[0] as $inputtext) 
												    { ?>
												    <tr>
												      <th scope="row"><?php echo $counter; ?></th>
												      <td><a href="<?php echo $inputtext; ?>"><?php echo $inputtext; ?></a></td>
										    		</tr>
										    	<?php $counter++; } ?>
										  	</tbody>
										</table>
										<?php
								}
							} 
						?>
						
					</div>
					
					<div class="col-sm-6 col-xs-12">
						<form method="post" enctype="multipart/form-data">
							<div class="form-group">
						    <label for="textarea"><b>Insert File:</b></label><br>
						    <input type="file" class="form-control-file" name="textfile" id="textfile">
						  </div>
						   <center>
                                <input type="submit" class="btn btn-success" name="sendfile"> 
                                <input type="reset" class="btn btn-danger">
                            </center>
					 	</form>

					 	<?php 
					 	if (isset($_POST['sendfile'])) 
					 	{
					 		
					 		//print_r($_FILES['textfile']['type']);exit;
					 		if ($_FILES['textfile']['type'] != 'text/plain') 
					 		{
					 			?>
					 				<script type="text/javascript">
					 					alert('You can only upload txt file.');
					 					window.location.href = 'task1';
					 				</script>
					 			<?php
					 		}
					 		else
					 		{
					 		
						 		$fp = fopen($_FILES['textfile']['tmp_name'], 'rb');
							    while ( ($line = fgets($fp)) !== false) {
							      $str1[] = $line;
							      //echo "$line";
							    }
								/*echo "<pre>";
								print_r($str1);*/

						 		$pattern = '/(http|https)\:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/';
									$str = implode(" ", $str1);
									//echo $str;
									if($num_found = preg_match_all($pattern, $str, $out))
									{
									  
										$counter = 1;
										?>
											<br>
											<table class="table table-bordered">
											  	<thead>
											    	<tr>
											      		<th scope="col" style="width: 10%;">#</th>
											   			<th scope="col">Links</th>
											    	</tr>
											  	</thead>
											  	<tbody>
													<?php foreach ($out[0] as $inputtext) 
													    {  ?>
													    <tr>
													      <th scope="row"><?php echo $counter; ?></th>
													      <td><a href="<?php echo $inputtext; ?>"><?php echo $inputtext; ?></a></td>
											    		</tr>
											    	<?php $counter++; } ?>
											  	</tbody>
											</table>
											<?php
									}
								} 
							}
							?>
					</div>
				</div>
			</div>
		</div><br><br>
		<div class="card demotxt" id="main">
			<h5 class="card-title">Demo Text</h5><hr>
			<div class="card-body">
			   	Example Document: Lorem Ipsum is simply dummy text of the printing and typesetting
				industry. Lorem Ipsum has been the industry's http://link1.com standard dummy text ever
				since the 1500s, when an unknown printer took a galley of type and scrambled it to make a
				type specimen book. It has survived https://link2.com not only five centuries, but also the
				leap into electronic http://link3.com typesetting, remaining essentially unchanged. It was
				popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
				passages, and more recently with desktop publishing software like http://link4.com Aldus
				PageMaker including versions of Lorem Ipsum.
			</div>
		</div>
	</div>
</div>