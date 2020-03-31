<div class="tablesbs">
	<div class="item1">
	<h1> Received Messages </h1>
		<?php echo $errormsgs; ?>
		<?php foreach ($resultmsgs as $resultmsg): ?>
			<div class="feed-message">
				<h3 class="sender"><?php echo $resultmsg['username']; ?></h3>
				<div class="message-body">
					<p><?php echo $resultmsg['message_body']; ?></p>
				</div>

				<div class="message-interaction">
					<button>Reply</button>
					<button>Like</button>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
	
	<div class="item2">
	<h1> Sent Messages </h1>
		<?php echo $errorsent; ?>
		<?php foreach ($resultsent as $resultsent1): ?>
			<div class="feed-message">
				<h3 class="sender"><?php echo $resultsent1['username']; ?></h3>
				<div class="message-body">
					<p><?php echo $resultsent1['message_body']; ?></p>
				</div>

				<div class="message-interaction">
					<button>Reply</button>
					<button>Like</button>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
	
	<div class="item3">
	<h1> Users </h1>
		<?php echo $errorusers; ?>
		<?php foreach ($resultusers as $resultuser): ?>
			<div class="feed-message">
				<h3 class="sender"><?php echo $resultuser['username']; ?></h3>
			</div>
		<?php endforeach; ?>
		
	</div>


</div>