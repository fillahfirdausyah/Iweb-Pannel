<form action="../inc/ta.php" method="post">
								<div class="panel panel-default">
								  <div class="panel-body"> 
								  <h3>comment box</h3>
								  <input type="text" name="name" placeholder="name ..."> 
								  <input type="text" class="form-control" name="des" placeholder="description ...">
								  <input type="hidden" name="sort" value="<?php echo $_GET[u]; ?>">
								  <input type="submit" class="btn btn-default" value="Enter">
								  </div>
								</div>
</form>