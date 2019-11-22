<?php include('master_header.php'); ?>





<?php 
error_reporting(E_ERROR | E_PARSE);
session_start();
$cname = $_SESSION['coll_name'];
$category = '1';
$href = "http://testdemoprojects.com/ait/CookBookChatApp/enginnerchat/v1/index.php/products_ontapri//49//$";
$newstr = substr_replace($href, $category, 91, 0);
$newstr1 = substr_replace($newstr, $cname, 96, 0);
$json = file_get_contents($newstr1);

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

?>  
							
<?php include('master_footer.php'); ?>			
						