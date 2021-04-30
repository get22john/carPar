<?php require_once 'includes/header.php'; ?>

<body>
	<div id="page">
		<!-- Main Navigation -->
		<?php include_once 'includes/navigation.php'; ?>
		<div>
		</div>
		<div id="body" class="home">

			<div class="body">
				<div>
					<h1>Contact Us</h1>
					<div class="col-xs-7 contact-text w3-agileits">
						<p>
							<i class="fa fa-map-marker"></i> 1112 1200th St,
						</p>
						<p>
							<i class="fa fa-phone"></i> Harlan, IA 51537, USA.
						</p>
						<p>
							<i class="fa fa-fax"></i> TEL : (641) 200-0633
						</p>
						<p>
							<i class="fa fa-envelope-o"></i> Email :
							<a href="mailto:sales@stevenautomobilesales.com">sales@stevenautomobilesales.com</a>
						</p>
						<br><br>
						<p>You can only make order through phone call and e-mail for now. All credit cards are accepted
						</p>
					</div>

					<!-- contact -->
					<div class="contact" style="margin-bottom: 1.5rem">
						<div class="contact-agileinfo">
							<div class="contact-form wthree">
								<?php echo ((!empty($errorMessage)) ? $errorMessage : '') ?>
								<div id="error"></div>
								<form name="frmContact" method="post" action="" id="contactForm">
									<div class="">
										<input type="text" name="name" placeholder="Name" id="name">
									</div>
									<div class="">
										<input class="text" type="text" name="subject" placeholder="Subject" id="subject">
									</div>
									<div class="">
										<input class="email" type="email" name="email" placeholder="Email" id="email">
									</div>
									<div class="">
										<textarea placeholder="Message" name="message" id="message"></textarea>
									</div>
									<button type="submit" name="send" id="btn-send">Submit</button>
								</form>
							</div>

						</div>
					</div>
					<!-- //contact -->
				</div>
			</div>
			<div class="footer">
          <div>
            <ul>
              <li>
                <h1>OUR PRODUCTS</h1>
                <img src="images/hosting_project4.jpg" alt="" /><span></span>
              </li>
              <li>
                <h1>DETAILS</h1>
                <ul>
                  <li>
                    <span
                      >PreviousNext Short EngineShort Engine Short Engine 1934
                      Rolls Royce 20/25 hp Short engine for sale The engine is
                      reputed to have been removed from the original car in 1964
                      by Adams and Oliver. </span
                    ><span class="price">$2,150</span>
                  </li>
                  <li>
                    <span style="color: black">(641) 200-0633 OR</span>
                    <span style="color: black"
                      ><p>
                        href="mailto:sales@stevenautomobilesales.com">sales@stevenautomobilesales.com
                      </p></span
                    >
                    <a href="products.php" class="more">All Products</a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
		</div>
		<div id="footer">
			<div class="connect">
				<div>
					<h1>FOLLOW OUR MISSIONS ON</h1>
					<div>
						<a href="http://facebook.com/stevenautomobilesales " class="facebook">facebook</a>
						<a href="http://twitter.com/stevenautomobilesales" class="twitter">twitter</a>
						<a href="http://youtube.com/stevenautomobilesales " class="youtube">youtube</a>
						<img src="images/we-accept.png" class="we_accept" alt="" />
						<!-- (c) 2005, 2021. Authorize.Net is a registered trademark of CyberSource Corporation -->
						<div class="AuthorizeNetSeal">
							<script type="text/javascript" language="javascript">
								var ANS_customer_id = "85ad9419-9076-430d-9564-27f2dca0cb41";
							</script>
							<script
								type="text/javascript"
								language="javascript"
								src="//verify.authorize.net:443/anetseal/seal.js"
							></script>
						</div>
					</div>
				</div>
			</div>
			<div class="footnote">
				<div>
					<p>&copy; STEVEN AUTOMOBILE SALES 2021 | ALL RIGHTS RESERVED</p>
				</div>
			</div>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>
	<script src="js/sendmail.js"></script>

</body>

</html>