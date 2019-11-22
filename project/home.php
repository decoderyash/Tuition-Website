<?php include('master_header.php'); ?>
<div class="four-grids">
					<div class="col-md-3 four-grid">
						<div class="four-agileits">
							<div class="icon">
								<i class="glyphicon glyphicon-user" aria-hidden="true"></i>
							</div>
							<div class="four-text">
								<h3>User</h3>
								<h4> 24,420  </h4>
								
							</div>
							
						</div>
					</div>
					<div class="col-md-3 four-grid">
						<div class="four-agileinfo">
							<div class="icon">
								<i class="glyphicon glyphicon-list-alt" aria-hidden="true"></i>
							</div>
							<div class="four-text">
								<h3>Clients</h3>
								<h4>15,520</h4>

							</div>
							
						</div>
					</div>
					<div class="col-md-3 four-grid">
						<div class="four-w3ls">
							<div class="icon">
								<i class="glyphicon glyphicon-folder-open" aria-hidden="true"></i>
							</div>
							<div class="four-text">
								<h3>Projects</h3>
								<h4>12,430</h4>
								
							</div>
							
						</div>
					</div>
					<div class="col-md-3 four-grid">
						<div class="four-wthree">
							<div class="icon">
								<i class="glyphicon glyphicon-briefcase" aria-hidden="true"></i>
							</div>
							<div class="four-text">
								<h3>Old Projects</h3>
								<h4>14,430</h4>
								
							</div>
							
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="agileinfo-grap">
					<div class="agileits-box">
					
						<?php
							error_reporting(E_ERROR | E_PARSE);
							session_start();
							echo $_SESSION['coll_name'];
						?>
					<div class="jumbotron">

						<form action="home.php" method="POST">
						<div class="form-group">
						 <div class="col-xs-12">
							<select class="form-control" name="drpcol">
								<option value="">Select College</option>
								<option <?php if(isset($_POST['submit']))if($_POST['drpcol'] == 'GOVERNMENT_ENGINEERING_COLLEGE_MODASA') echo 'selected="selected"'; ?> value="GOVERNMENT_ENGINEERING_COLLEGE_MODASA">GOVERNMENT ENGINEERING COLLEGE MODASA</option>
								<option <?php if(isset($_POST['submit']))if($_POST['drpcol'] == 'VENUS_INTRNATIONAL_COLLEGE_OF_TECHNOLOGY') echo 'selected="selected"'; ?> value="VENUS_INTRNATIONAL_COLLEGE_OF_TECHNOLOGY">VENUS INTRNATIONAL COLLEGE OF TECHNOLOGY</option>
								<option <?php if(isset($_POST['submit']))if($_POST['drpcol'] == 'VIDHYAHARTI_TRUST_POLYTECHNIC_INSTITUTE') echo 'selected="selected"'; ?>value="VIDHYAHARTI_TRUST_POLYTECHNIC_INSTITUTE">VIDHYAHARTI TRUST POLYTECHNIC INSTITUTE</option>
								<option <?php if(isset($_POST['submit']))if($_POST['drpcol'] == 'VIDYABHARTI_TRUST_INSTITUTE_OF_TECHNOLOGY_AND_RESEARC') echo 'selected="selected"'; ?>value="VIDYABHARTI_TRUST_INSTITUTE_OF_TECHNOLOGY_AND_RESEARC">VIDYABHARTI TRUST INSTITUTE OF TECHNOLOGY AND RESEARC</option>
								<option <?php if(isset($_POST['submit']))if($_POST['drpcol'] == 'VISHWAKARMA_GOVERNMENT_ENGINEERING_COLLEGE') echo 'selected="selected"'; ?>value="VISHWAKARMA_GOVERNMENT_ENGINEERING_COLLEGE">VISHWAKARMA GOVERNMENT ENGINEERING COLLEGE</option>
								<option <?php if(isset($_POST['submit']))if($_POST['drpcol'] == 'VIVEKANAND_INSTITUTE_OF_TECHNOLOGY') echo 'selected="selected"'; ?>value="VIVEKANAND_INSTITUTE_OF_TECHNOLOGY">VIVEKANAND INSTITUTE OF TECHNOLOGY</option>
								<option <?php if(isset($_POST['submit']))if($_POST['drpcol'] == 'VPMP_POLYTECHNIC') echo 'selected="selected"'; ?>value="VPMP_POLYTECHNIC">VPMP POLYTECHNIC</option>
							</select>
							</br>
						</div>
						
						<div class="form-group">
						 <div class="col-xs-12">
						<select class="form-control" name="drpcat">
									
								<option value="0">ALL</option>
								<option <?php if(isset($_POST['submit']))if($_POST['drpcat'] == '1') echo 'selected="selected"'; ?> value="1">Books</option>
								<option <?php if(isset($_POST['submit']))if($_POST['drpcat'] == '2') echo 'selected="selected"'; ?> value="2">Stationary</option>
								<option <?php if(isset($_POST['submit']))if($_POST['drpcat'] == '3') echo 'selected="selected"'; ?>value="3">Food Zone</option>
								<option <?php if(isset($_POST['submit']))if($_POST['drpcat'] == '4') echo 'selected="selected"'; ?> value="4">PG</option>
								<option <?php if(isset($_POST['submit']))if($_POST['drpcat'] == '5') echo 'selected="selected"'; ?> value="5">Gadgets</option>
								<option <?php if(isset($_POST['submit']))if($_POST['drpcat'] == '6') echo 'selected="selected"'; ?> value="6">Accessories</option>
								<option <?php if(isset($_POST['submit']))if($_POST['drpcat'] == '71') echo 'selected="selected"'; ?> value="7">Others</option>
							</select>
							</br>
						</div> 
						</div>
						
						<div class="form-group" align="center">
							 <br><button type="submit" name="submit" class="btn btn-default">Submit</button>
						</div>	
							
							 
						</form>
						</div>
						</div>
						</div>
						</div>
<?php 
if(isset($_POST['submit'])){
$cname = $_POST['drpcol'];	
$category = $_POST['drpcat'];
$href = "http://testdemoprojects.com/ait/CookBookChatApp/enginnerchat/v1/index.php/products_ontapri//49//$";
$newstr = substr_replace($href, $category, 91, 0);
$newstr1 = substr_replace($newstr, $cname, 96, 0);
$json = file_get_contents($newstr1);
error_reporting(E_ERROR | E_PARSE);
$data = json_decode($json, TRUE);

$countries = array(); 

//var_dump($data);
/*$json_string = json_encode($data, JSON_PRETTY_PRINT);
echo $json_string;*/
/*

<div class="panel panel-default">
  <div class="panel-heading">Panel Heading</div>
  <div class="panel-body">Panel Content</div>
</div>

*/
	//echo $data[1]['product_id'];
	?>
	<?php foreach($data as $users){
		foreach($users as $user){
			?>
			 <div class="agileinfo-grap">
			<div class="agileits-box">
			 <div class="panel-heading">
			 <b> Product Name: </b>
			 <b><?php  echo $user['product_name'].'<br/>'; ?> </b></div>
			 <div class="panel-body">
			
		<table  id="table-breakpoint"> 
			<tr>
				<td>
					<b>Product ID</b>
				</td>
				<td>
				<?php echo $user['product_id'].'<br/>';?>
				</td>
			</tr>
			
			<tr>
				<td>
					<b>Product Name</b>
				</td>
				<td>
				<?php echo $user['product_name'].'<br/>';?>
				</td>
			</tr>
			
			<tr>
				<td>
					<b>Product Price</b>
				</td>
				<td>
				<?php echo $user['product_price'].'<br/>';?>
				</td>
			</tr>
			
			<tr>
				<td>
					<b>Product Category</b>
				</td>
				<td>
				<?php echo $user['product_category'].'<br/>';?>
				</td>
			</tr>
			
			<tr>
				<td>
					<b>Description</b>
				</td>
				<td>
				<?php echo $user['description'].'<br/>';?>
				</td>
			</tr>
			
			<tr>
				<td>
					<b>Creator ID</b>
				</td>
				<td>
				<?php echo $user['creator_id'].'<br/>';?>
				</td>
			</tr>
			
			<tr>
				<td>
					<b>Creator College</b>
				</td>
				<td>
				<?php echo $user['creator_college'].'<br/>';?>
				</td>
			</tr>
			
			<tr>
				<td>
					<b>Contact Number</b>
				</td>
				<td>
				<?php echo $user['cell'].'<br/>';?>
				</td>
			</tr>
			
			<tr>
				<td>
					<b>IsActive</b>
				</td>
				<td>
				<?php echo $user['isactive'].'<br/>';?>
				</td>
			</tr>
			
			
	</table>
	</div>
	  </div>	
	  </div>
	 
	  <?php 
	}
	}
}
?>  
						
			
						
					
				
<?php include('master_footer.php'); ?>