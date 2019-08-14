<?php
if(!isset($_SESSION['name'])){
    header('Location: index.php');
}
else{
	if(isset($_GET['logout'])){ 
     
    //Simple exit message
    $fp = fopen("log.html", 'a');
    fwrite($fp, "<div class='msgln'><i>User ". $_SESSION['name'] ." has left the chat session.</i><br></div>");
    fclose($fp);
     
    
    header("Location: home.php"); //Redirect the user
}
?>
<div class="container">
	<div class="row">
		<h1>Welcome <?php echo $_SESSION['name'];?></h1>
		<div class="chatwrapper d-flex">
			<div class="chat">
				<button class="enterchat btn btn-success btn-lg btn-block">Enter Chat</button>
				<button class="closechat btn btn-danger btn-lg btn-block">Leave Chat</button>
				<input type="hidden" name="logger" value="0" class="logger">
				
				<div class="chatroom">
					<div class="closechat" id="closechat">
						<i class="fas fa-sign-out-alt"></i>
					</div>
					<div class="messages">
<?php
if(file_exists("log.html") && filesize("log.html") > 0){
    $handle = fopen("log.html", "r");
    $contents = fread($handle, filesize("log.html"));
    fclose($handle);
     
    echo $contents;
}
?>

					</div>
					<div class="ownmessage">
						<form action="post.php" method="post">
							<input type="text" name="chatinput" class="w-100 chatinput" placeholder="Type your message">
							<input type="submit" name="chatsubmit" placeholder="SEND" class="sender btn-primary w-100 chatsubmit">
						</form>
					</div>

				</div>
				
			</div>
			<div class="usersonline">
				<div class="card">
					<div class="card-header">
						<h4>Spelers Online</h4>
					</div>
					<div class="card-body">
						<ul>
							<li>todo01 : spelerslijst maken</li>
							<li>todo02 : spelerslijst maken</li>
							<li>todo03 : spelerslijst maken</li>
						</ul>
					</div>
					<div class="card-footer"></div>
				</div>
				<!-- card 002 highscores -->
				<div class="card">
					<div class="card-header">
						<h4>HighScores</h4>
					</div>
					<div class="card-body">
						<ul>
							<li>todo01 : spelerslijst maken</li>
							<li>todo02 : spelerslijst maken</li>
							<li>todo03 : spelerslijst maken</li>
						</ul>
					</div>
					<div class="card-footer"></div>
				</div>
			</div>
			
		</div>
	</div>
</div>
<!-- <script src="vendor/jquery-3.4.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>
<script src="js/bsinlog.js">
</script> -->
<?php
}
?>