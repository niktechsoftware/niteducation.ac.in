<?php $this->load->view('header.php')?>

       <br> <br> <br> <br> <br> <br> <br> <br> <br>
		
        <hr>
        
        </div>
        <div class="container">
		    <div class="row wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.2s">
                <h3><strong>Success Page</strong></h3>
            </div>
    		<div class="row">
    		    <?php if($success): ?>
                    <div class="col-xs-8 col-lg-10 col-md-10  wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                        <h3>Thank You. Your order status is <?= $status ?>.</h3>
                        <h4>Your Transaction ID for this transaction is <?= $txnid ?>.</h4>
                        <h4>We have received a payment of Rs. <?= $amount; ?>.</h4>
                    </div>
                <?php else: ?>
                    <div class="col-xs-8 col-lg-10 col-md-10  wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                        <h2>Invalid Transaction. Please try again.</h2>
                    </div>
                <?php endif; ?>
                    
            </div>
    		<br>
        </div>
        <br>

<?php $this->load->view('footer.php')?>