<?php include "header.php"; ?>
	<!-- //header-ends -->
			<div id="page-wrapper">
				<div class="graphs">
				
					<div class="xs">
						
						<div class="col-md-8 inbox_right">
							<div class="Compose-Message">               
								<div class="panel panel-default">
									<div class="panel-heading">
									Make Payment
									</div>
									<?php if(get("success")):?>
                                            <div>
                                               <?=App::message("success", "Successfully saved information!")?>
                                            </div>
                                            <?php endif;?>
									<div class="panel-body panel-body-com-m">
										
										<form class="com-mail" action="savepay.php" method="post">
											
												<label>Registration ID : </label>
												<input type="text" name="id"  placeholder="" class="form-control1 control3">
												<label>Business Name : </label>
												<input type="text" name="name" class="form-control1 control3">
												<label>Year for Payment : </label>
												<input type="number" name="year" class="form-control1 control3">
												<label>Means of Payement : </label>
												<input type="text" name="means" class="form-control1 control3">
												<label>Amount : </label>
												<input type="text" name="amount" class="form-control1 control3">
												<input type="submit" value="Submit Admin" name="save">
										</form>
									</div>
								 </div>
							  </div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
		</div>
					
		<?php include "footer.php"; ?>