<?php

date_default_timezone_set('Asia/Kolkata');
require_once("Model/MyModel.php");
session_start();
class MyController extends MyModel
{
	function __construct()
	{
		parent::__construct();
		if (isset($_SERVER['PATH_INFO']))
		{
			switch ($_SERVER['PATH_INFO'])
			{
				
				case '/index':
					
					include 'Views/header.php';
					include 'Views/index.php';
					include 'Views/footer.php';
				
				break;

				case '/task1':
					
					include 'Views/header.php';
					include 'Views/task1.php';
					include 'Views/footer.php';
				
				break;

				case '/task2':
					
					$abc = $this->DefineTbl('user');
					
					include 'Views/header.php';
					include 'Views/task2.php';
					include 'Views/footer.php';
					
					if (isset($_POST['instbl'])) 
					{
						
						if (empty($_POST['tblname'])) 
						{
							?>
								<script type="text/javascript">
									alert('Please enter table name.');
									window.location.href = 'task2';
								</script>
							<?php
						}
						else
						{
							$tblname = $_POST['tblname'];
							?>
								<script type="text/javascript">
									window.location.href = 'genform?tblname=<?php echo urlencode($tblname); ?>';
								</script>
							<?php
						}
					}
				break;

				case '/genform':
					
					if (!isset($_REQUEST['tblname'])) 
					{
						?>
							<script type="text/javascript">
								alert('Please select table.');
								window.location.href = 'task2';
							</script>
						<?php
					}

					$gettblname =  urldecode($_REQUEST['tblname']);
					$abc = $this->DefineTbl($gettblname);
					$seltbl = $this->SelectData($gettblname);
					//print_r(count($abc['Data']));exit();
					foreach ($abc['Data'] as $selheader) 
					{
						$selheader1[] = $selheader;
					}
					include 'Views/header.php';
					include 'Views/genform.php';
					include 'Views/footer.php';

					if (isset($_POST['genformdata'])) 
					{
						
						/*FOR MAKING ARRAY OF DB FIELD NAME*/
						
						foreach ($abc['Data'] as $frmdata) 
						{
							//print_r($frmdata->Field);echo "<br>";
							$formdata[] = $frmdata->Field;
							//echo $formdata."<br>";
						}
						//print_r($formdata[1]);
						
						/*FOR REMOVING ID FIELD FROM ARRAY BECAUSE IT IS AUTOINCREMENT AND PRIMARYKEY SO NO NEED TO INSERT FROM USERSIDE*/
						
						foreach (array_keys($formdata, 'id') as $id) {
						    unset($formdata[$id]);
						}
						//print_r($formdata);


						/*FOR FETCHING DATA FROM FORM*/
						
						foreach ($formdata as $postdata) 
						{
							//echo $_POST[$postdata];
							$fetched_data[] = $_POST[$postdata];
						}
						//print_r($fetched_data);

						$alldata = array_combine($formdata,$fetched_data);
						//print_r($alldata);

						$insdata = $this->InsertData($gettblname,$alldata);

						if ($insdata['Code']==1) 
						{
							?>
								<script type="text/javascript">
									alert('Data successfully inserted.');
									window.location.href = 'genform?tblname=<?php echo urlencode($gettblname); ?>';
								</script>
							<?php
						}
						else
						{
							?>
								<script type="text/javascript">
									alert('Error while inserting data.');
									window.location.href = 'genform?tblname=<?php echo urlencode($gettblname); ?>';
								</script>
							<?php
						}
					}

				break;

			}
		}
		else
		{
			?>
				<script type="text/javascript">
					window.location.href = 'index';
				</script>
			<?php
		}
	}	
}

$obj = new MyController;
?>