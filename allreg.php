<?php include"header.php"; ?>
	<!-- //header-ends -->
			<div id="page-wrapper">
				<div class="graphs">
					<h3 class="blank1">My Balance </h3>
					 <div class="xs tabls">
					 <div class="panel-body1">
					 <?php if(get("success")):?>
                                            <div>
                                               <?=App::message("success", "Successfully deleted an Admin!")?>
                                            </div>
                                            <?php endif;?>
					   <table class="table">
					    <thead>
							<tr>
							  <th>#</th>
							  <th>Registration ID</th>
<th>Business Name</th>
<th>Last Paid</th>
<th>Payment Status</th>
<th>Balance</th>
<th>Next Due Date</th>
							</tr>
						  </thead>
						  <tbody>
						   <?php                     //include('../connect.php');
                            if(!isset($_GET["page"])){
                                $_GET["page"] = 1;
                            }
                                
                                $tbl_name="finance";		//your table name
	// How many adjacent pages should be shown on each side?
	$adjacents = 3;
	
                            /*$query = "SELECT COUNT(*) as num FROM $tbl_name";
	$total_pages = mysql_fetch_array(mysql_query($query));
	$total_pages = $total_pages['num'];
	*/
        $get_excos = ORM::for_table("$tbl_name")
                 ->find_array();
         
	$total_pages = count($get_excos);
	/* Setup vars for query. */
	$targetpage = "pagination.php"; 	//your file name  (the name of this file)
	$limit = 10; 								//how many items to show per page
	$page = $_GET['page'];
	if($page) 
		$start = ($page - 1) * $limit; 			//first item to display on this page
	else
		$start = 0;								//if no page var is given, set start to 0
	
	/* Get data. */
	
				$result = $db->prepare("SELECT * FROM finance where name = '$session_id'");
				$result->execute();
                                
                                /* Setup page vars for display. */
	if ($page == 0) $page = 1;					//if no page var is given, default to 1.
	$prev = $page - 1;							//previous page is page - 1
	$next = $page + 1;							//next page is page + 1
	$lastpage = ceil($total_pages/$limit);		//lastpage is = total pages / items per page, rounded up.
	$lpm1 = $lastpage - 1;						//last page minus 1
	 ?>
			              
                            <span class="text-muted m-r-sm">Showing
                                 <?php if($lastpage == $next-1):?>
                                    <?=$total_pages?>
                                <?php else:?>
                                <?=$page * $limit?> 
                            <?php endif;?>
                                of <?=$total_pages?>
                                        </span>
                            
                            <div class="btn-group">
                                <?php if($page != 1):?>
                                <a class="btn btn-default" href="?page=<?=$prev?>"><i class="fa fa-angle-left"></i></a>
                                <?php endif;?>
                                
                                <?php if($lastpage == $next-1):?>
                                
                                <?php else:?>
                                <a class="btn btn-default" href="?page=<?=$next?>"><i class="fa fa-angle-right"></i></a>
                                <?php endif;?>
                            </div>
                        
			        
			    </div>
               </div>
                <table class="table">
                      <?php
        
				for($i=1; $row = $result->fetch(); $i++){
                                    
                  
               ?> 
						  
							<tr>
							  <th scope="row"><?php echo $i; ?></th>
							   <td><?php echo $row['id']; ?></td>
      <td> <?php echo $row['name']; ?> </td>
      <td><?php echo $row['date']; ?></td>
       <td><?php echo $row['status']; ?></td>
      <td><?php echo $row['amount']; ?></td>
       <td><?php
$d= strtotime("+10months", strtotime(date("y-m-d")));
        echo $time = date("y/m/d", $d);   ?>
        </td>
							

							</tr>
							 </tbody>
							 <?php } ?>
							 
						</table>
						<input type="submit" value="Print Receipt" onclick="myFunction()">
			<script>
function myFunction() {
  window.print();
}
</script>
						</div>
						</div>
				</div>
			</div>
			
		</div>
		<?php include"footer.php"; ?>