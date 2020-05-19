<?php

require_once "connection.php";

if(isset($_REQUEST['btn_insert']))
{
	try
	{
		$id		= $_REQUEST['txt_id'];
		$name	= $_REQUEST['txt_name'];	//textbox name "txt_name"
		$details	= $_REQUEST['txt_details'];
		$price	= $_REQUEST['txt_price'];
		
		$image_file	= $_FILES["txt_file"]["name"];
		$type		= $_FILES["txt_file"]["type"];	//file name "txt_file"	
		$size		= $_FILES["txt_file"]["size"];
		$temp		= $_FILES["txt_file"]["tmp_name"];
		
		$path="upload/".$image_file; //set upload folder path
		
		if(empty($id)){
			$errorMsg="Please Enter ID";
		}
		if(empty($name)){
			$errorMsg="Please Enter Name";
		}
	
		if(empty($price)){
			$errorMsg="Please Enter Price";
		}
		else if(empty($image_file)){
			$errorMsg="Please Select Image";
		}
		else if($type=="image/jpg" || $type=='image/jpeg' || $type=='image/png' || $type=='image/gif') //check file extension
		{	
			if(!file_exists($path)) //check file not exist in your upload folder path
			{
				if($size < 5000000) //check file size 5MB
				{
					move_uploaded_file($temp, "images/" .$image_file); //move upload file temperory directory to your upload folder
				}
				else
				{
					$errorMsg="Your File To large Please Upload 5MB Size"; //error message file size not large than 5MB
				}
			}
			else
			{	
				$errorMsg="File Already Exists...Check Upload Folder"; //error message file not exists your upload folder path
			}
		}
		else
		{
			$errorMsg="Upload JPG , JPEG , PNG & GIF File Formate.....CHECK FILE EXTENSION"; //error message file extension
		}
		
		if(!isset($errorMsg))
		{
			$insert_stmt=$db->prepare('INSERT INTO wd_card(id,name,details,price,image) VALUES(:fid,:fname,:fdetails,:fprice,:fimage)'); //sql insert query
			$insert_stmt->bindParam(':fid',$id);			
			$insert_stmt->bindParam(':fname',$name);
			$insert_stmt->bindParam(':fdetails',$details);
			$insert_stmt->bindParam(':fprice',$price);			
			$insert_stmt->bindParam(':fimage',$image_file);	  //bind all parameter 
		
			if($insert_stmt->execute())
			{
				$insertMsg="File Upload Successfully........"; //execute query success message
				header("refresh:1;platinumbd.php"); //refresh 3 second and redirect to index.php page
			}
		}
	}
	catch(PDOException $e)
	{
		echo $e->getMessage();
	}
}

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="initial-scale=1.0, maximum-scale=2.0">
<title>Add Weeding Invitation Card</title>
		
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<script src="js/jquery-1.12.4-jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	
</head>	
	<div class="wrapper">	
		<div class="container">
			
		<div class="col-lg-12">
		
		<?php
		if(isset($errorMsg))
		{
			?>
            <div class="alert alert-danger">
            	<strong>WRONG ! <?php echo $errorMsg; ?></strong>
            </div>
            <?php
		}
		if(isset($insertMsg)){
		?>
			<div class="alert alert-success">
				<strong>SUCCESS ! <?php echo $insertMsg; ?></strong>
			</div>
        <?php
		}
		?>   
		<header role="banner">
      <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container">
          <a class="navbar-brand" href="admin_home.php">Admin Panel</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarsExample05">
            <ul class="navbar-nav ml-auto pl-lg-5 pl-0">
              <li class="nav-item">
                <a class="nav-link" href="admin_home.php">Home</a>
              </li>
			  
               <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle active" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Add</a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                  <a class="dropdown-item" href="add_birthday.php">Birthday</a>
                  <a class="dropdown-item" href="add_weeding.php">Weeding</a>
                    <a class="dropdown-item" href="add_corporate.php">Corporate</a>
             
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle active" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Delete</a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                  <a class="dropdown-item" href="del_birthday.php">Birthday</a>
                  <a class="dropdown-item" href="del_weeding.php">Weeding</a>
                    <a class="dropdown-item" href="del_corporate.php">Corporate</a>
                </div>
              </li>

                 <li class="nav-item">
                <a class="nav-link" href="logout1.php">logout</a>
              </li>
            </ul>  
          </div>
        </div>
      </nav>
    </header>

<body>	
			<form method="post" class="form-horizontal" enctype="multipart/form-data">
				
				<div class="form-group">
				<label class="col-sm-3 control-label">ID</label>
				<div class="col-sm-6">
				<input type="text" name="txt_id" class="form-control" placeholder="Enter ID" />
				</div>
				</div>
				
				<div class="form-group">
				<label class="col-sm-3 control-label">Name</label>
				<div class="col-sm-6">
				<input type="text" name="txt_name" class="form-control" placeholder="Enter Name" />
				</div>
				</div>
					
				<div class="form-group">
				<label class="col-sm-3 control-label">Details</label>
				<div class="col-sm-6">
				<input type="text" name="txt_details" class="form-control" placeholder="Enter Details" />
				</div>
				</div>
				
				<div class="form-group">
				<label class="col-sm-3 control-label">Price</label>
				<div class="col-sm-6">
				<input type="text" name="txt_price" class="form-control" placeholder="Enter Price" />
				</div>
				</div>
				
				<div class="form-group">
				<label class="col-sm-3 control-label">File</label>
				<div class="col-sm-6">
				<input type="file" name="txt_file" class="form-control" />
				</div>
				</div>
						
				<div class="form-group">
				<div class="col-sm-offset-3 col-sm-9 m-t-15">
				<input type="submit"  name="btn_insert" class="btn btn-success" value="Insert">
				<a href="admin_home.php" class="btn btn-danger">Cancel</a>
				<a href="platinumwd.php" class="btn btn-success">Customer View</a>
				</div>
				</div>
					
			</form>	

				<div class="col-lg-12">
			<div class="col-lg-12">
                    <div class="panel panel-default">
                        
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
											<th>ID</th>
                                            <th>Name</th>
											<th>Details</th>
											<th>Price</th>
                                            <th>Photo</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php
									$select_stmt=$db->prepare("SELECT * FROM wd_card");	//sql select query
									$select_stmt->execute();
									while($row=$select_stmt->fetch(PDO::FETCH_ASSOC))
									{
									?>
                                        <tr>
											<td><?php echo $row['id']; ?></td>
                                            <td><?php echo $row['name']; ?></td>
											<td><?php echo $row['details']; ?></td>
											<td><?php echo $row['price']; ?></td>
                                            <td><img src="images/<?php echo $row['image']; ?>" width="100px" height="60px"></td>
                                        </tr>
                                    <?php
									}
									?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
				
		</div>

</div>		
	</div>			
		</div>									
</body>
</html>