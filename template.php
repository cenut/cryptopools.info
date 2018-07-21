<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
	<link href="css/bootstrap.css" rel="stylesheet" />
  <link href="css/pe-icon-7-stroke.css" rel="stylesheet" />
	<link href="css/style.css" rel="stylesheet" />
</head>
<body>
<div class="img-src darker blur-me" style="background-image: url('images/bitcoin-mining.jpg')"></div>
 <div id="navbar-full" >
    <div id="navbar">
       <!--
        navbar-default can be changed with navbar-ct-blue navbar-ct-azzure navbar-ct-red navbar-ct-green navbar-ct-orange
        -->
        <nav class="navbar navbar-ct-blue navbar-fixed-top navbar-transparent" role="navigation">

          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand navbar-brand-logo" href="https://cryptopools.info">

                    <div class="brand"> CryptoPools.info </div>
              </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right">

                    <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="pe-7s-help1"></i>
                                <p>About</p>
                            </a>
                          <ul class="dropdown-menu">
                            <li><a href="#">About us</a></li>

                            <li class="divider"></li>
                            <li><a href="#">Contact us</a></li>
                          </ul>
                    </li>
               </ul>


            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
				<div class="blurred-container ">
				</div>
    </div><!--  end navbar -->

</div> <!-- end menu-dropdown -->
<div class="main">
	<section id="table" class="">
		<div class="container">
			<h1 class="text-center" style="margin-bottom:100px;">More on the way soon</h1>
			<p class="alert alert-info">
				<span class="pe-7s-volume" style="padding:0 15px 0 0; font-size:130%;"></span><strong>Need more hash?</strong> Rent a Rig from <a href="https://www.miningrigrentals.com/register?ref=46728">Mining Rig Rentals</a>  |  Set your pool to <code>pirl.cryptopools.info:8002</code>
			</p>
			<h2 class="text-center" style="margin-top:50px;"><small>Coin data: @ <?php echo date("F d Y H:i:s",filemtime("stats.php")); ?></small></h2>
      <div class="fresh-table full-color-blue">
        <table id="fresh-table" class="table">
            <thead>
              <th data-field="id"></th>
            	<th data-field="name" data-sortable="true">Name</th>
            	<th data-field="speed" data-sortable="true">Speed</th>
            	<th data-field="miners" data-sortable="true">Miners</th>
            	<th data-field="blocks" data-sortable="true">Blocks</th>
		<th data-field="usd" data-sortable="true">USD</th>
		<th data-field="btc" data-sortable="true">BTC</th>
		<th data-field="change" data-sortable="true">%change</th>
            	<th data-field="mineNow" data-sortable="false"> </th>
            </thead>
            <tbody>
<?php include("stats.php"); ?>
            </tbody>
        </table>
    </div>
		</div>
	</section>
	<section id="about-us" class="lighter">
		<div class="container">
			<h2 class="text-center">
				About us
				<br />
				<small>
			We provide extremely stable, safe and profitable mining pools for ETHASH coins that interest us. 
	Quality bandwidth and hardware, and updated pool software and payout schemas make CryptoPools a leading choice amongst other mining pools.
				</small>
			</h2>
			<div class="text-center">
				<a style="margin-top:20px;padding:10px 30px; font-size:22px;" class="btn btn-success" href="https://discord.gg/cNfvhAy">Questions? Join us on Discord!</a>

			</div>
		</div>
	</section>
	<section id="contact-us">
		<div class="container">
			<h2 class="text-center">
				Contact Us
				<br />
				<small>You can contact us with anything related to our pools. We'll get in touch with you as soon as possible.
				<br />Or maybe only say Hi..
				</small>
			</h2>
			<div class="card">
				<div style="padding:50px; color:#333333; font-size:25px;" class="text-center">

					<div class="contact-us">
						<form role="form" id="contact-form" method="post">
						  <div class="form-group">
						      <input type="text" class="form-control" id="name" placeholder="Your name">
						  </div>
						  <div class="form-group">
						      <input type="email" class="form-control" id="email" placeholder="Email address">
						  </div>
						  <div class="form-group">
						      <textarea class="form-control" rows="6" id="message" placeholder="Your message"></textarea>
						  </div>
						  <div class="submit text-center">
						      <input type="submit" class="btn btn-success btn-block btn-lg" value="Send">
						  </div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
<!-- end main -->
<footer class="x-darker">
		<div class="container">
			<nav>
					<ul>
							<li><a href="https://discord.gg/cNfvhAy">Discord</a></li>

					</ul>
			</nav>
			<div class="copyright">
				© <script>document.write(new Date().getFullYear())</script> CryptoPools.info
			</div>
		</div>
</footer>
</body>

  <script src="js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="js/bootstrap.js" type="text/javascript"></script>
	<script src="js/ct-navbar.js"></script>
	<script type="text/javascript" src="js/bootstrap-table.js"></script>
	<script type="text/javascript">
			var $table = $('#fresh-table'),
					full_screen = false;

			$().ready(function(){
					$table.bootstrapTable({
							striped: true,
							icons: {
									refresh: 'fa fa-refresh',
									toggle: 'fa fa-th-list',
									columns: 'fa fa-columns',
									detailOpen: 'fa fa-plus-circle',
									detailClose: 'fa fa-minus-circle'
							}
					});

					$(window).resize(function () {
							$table.bootstrapTable('resetView');
					});

					window.operateEvents = {
							'click .like': function (e, value, row, index) {
									alert('You click like icon, row: ' + JSON.stringify(row));
									console.log(value, row, index);
							},
							'click .edit': function (e, value, row, index) {
									alert('You click edit icon, row: ' + JSON.stringify(row));
									console.log(value, row, index);
							},
							'click .remove': function (e, value, row, index) {
									$table.bootstrapTable('remove', {
											field: 'id',
											values: [row.id]
									});
							}
					};
			});

			function operateFormatter(value, row, index) {
					return [
							'<a rel="tooltip" title="Like" class="table-action like" href="javascript:void(0)" title="Like">',
									'<i class="fa fa-heart"></i>',
							'</a>',
							'<a rel="tooltip" title="Edit" class="table-action edit" href="javascript:void(0)" title="Edit">',
									'<i class="fa fa-edit"></i>',
							'</a>',
							'<a rel="tooltip" title="Remove" class="table-action remove" href="javascript:void(0)" title="Remove">',
									'<i class="fa fa-remove"></i>',
							'</a>'
					].join('');
			}
	</script>
</html>
