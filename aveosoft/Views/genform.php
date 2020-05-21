<div class="box" style="padding: 30px;">
	
	<nav aria-label="breadcrumb">
	  <ol class="breadcrumb">
	    <li class="breadcrumb-item"><a href="index">Index</a></li>
	    <li class="breadcrumb-item"><a href="task2">Task-2</a></li>
	    <li class="breadcrumb-item active" aria-current="page">Generate Form</li>
	  </ol>
	</nav>

	<h3>Task-2</h3><hr>
	  	<div class="row vdivide">
	  		<div class="card-body">
	    		<div class="row">
					<div  class="col-sm-4 col-xs-12">
	  					
						  	<?php 
								$form = "<form method='post'>";

						  		foreach ($abc['Data'] as $row) 
						  		{
										
											//echo "<pre>";
											//print_r($row);
											$variable = substr($row->Type, 0, strpos($row->Type, "("));
										if ($row->Field != "id" && $variable == 'varchar') 
										{
								            $form .= "<div class='form-group'>";
								            $form .= "<label for='" . $row->Field . "' style='text-transform:capitalize'>" . $row->Field . "</label> 
								            		  <input type='text' class='form-control col-md-10' name='" . $row->Field . "' >";
								            $form .= "</div>";
								        }
								        elseif ($row->Field != "id" && $variable == 'int') 
								        {
								        	$form .= "<div class='form-group'>";
								            $form .= "<label for='" . $row->Field . "' style='text-transform:capitalize'>" . $row->Field . "</label> 
								            		  <input type='number' class='form-control col-md-10' name='" . $row->Field . "' >";
								            $form .= "</div>";
								        }
								        elseif ($row->Field != "id" && $row->Type == 'text') 
								        {
								        	$form .= "<div class='form-group'>";
								            $form .= "<label for='" . $row->Field . "' style='text-transform:capitalize'>" . $row->Field . "</label> 
								            		  <textarea class='form-control col-md-10' name='" . $row->Field . "' ></textarea>";
								            $form .= "</div>";
								        }
								        elseif ($row->Field != "id" && $row->Type == 'date') 
								        {
								        	$form .= "<div class='form-group'>";
								            $form .= "<label for='" . $row->Field . "' style='text-transform:capitalize'>" . $row->Field . "</label> 
								            		  <input type='date' class='form-control col-md-10' name='" . $row->Field . "' >";
								            $form .= "</div>";
								        }
								        elseif ($row->Field != "id") 
								        {
								        	$form .= "<div class='form-group'>";
								            $form .= "<label for='" . $row->Field . "' style='text-transform:capitalize'>" . $row->Field . "</label> 
								            		  <input type='text' class='form-control col-md-10' name='" . $row->Field . "' >";
								            $form .= "</div>";
								        }
								        
								} 

					            $form .= "<input type='submit' class='btn btn-success' name='genformdata' value='Submit'>
					            		  <input type='reset' class='btn btn-danger'></form>";
								echo $form;

							?>
						
					</div>

					<div class="col-sm-8 col-xs-12">
						<h5>Table: <?php echo $gettblname; ?></h5><br>
						<table class="table">
						  <thead>
						    <tr>
						      <?php foreach ($selheader1 as $key) { ?>
						      		<th scope="col" style="text-transform:capitalize"><?php echo $key->Field; ?></th>
						      <?php } ?>
						    </tr>
						  </thead>
						  <tbody>
						    <?php if($gettblname=='user')
						    {  
						    	foreach ($seltbl['Data'] as $seltbl) { ?>
						    		<tr>
								      <th><?php echo $seltbl->id; ?></th>
								      <td><?php echo $seltbl->name; ?></td>
								      <td><?php echo $seltbl->age; ?></td>
								      <td><?php echo $seltbl->address; ?></td>
								      <td><?php echo $seltbl->mobile; ?></td>
							    	</tr>	
						    	<?php } }  
						    elseif($gettblname=='education')
						    {  
						    	foreach ($seltbl['Data'] as $seltbl) { ?>
						    		<tr>
								      <th><?php echo $seltbl->id; ?></th>
								      <td><?php echo $seltbl->fname; ?></td>
								      <td><?php echo $seltbl->lname; ?></td>
								      <td><?php echo $seltbl->education; ?></td>
								      <td><?php echo $seltbl->mobile; ?></td>
								      <td><?php echo $seltbl->email; ?></td>
							    	</tr>	
						    <?php }  }  
						    elseif($gettblname=='company')
						   	{  
						    	foreach ($seltbl['Data'] as $seltbl) { ?>
						    		<tr>
								      <th><?php echo $seltbl->id; ?></th>
								      <td><?php echo $seltbl->name; ?></td>
								      <td><?php echo $seltbl->projects; ?></td>
								      <td><?php echo $seltbl->about; ?></td>
								      <td><?php echo $seltbl->establishment; ?></td>
							    	</tr>	
						   	<?php } } ?>

						  </tbody>
						</table>
					</div>


				</div>
			</div>
		</div>
</div>