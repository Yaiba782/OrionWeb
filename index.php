<!DOCTYPE HTML>
<html>
	<head>
		<title>Orion by Yaiba</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>

		<!-- Header -->
			<section id="header">
				<header>
					<h1>Orion</h1>
					<p>By Abdessamad GERARD</p>
				</header>
				<footer>
					<a href="#banner" class="button style2 scrolly-middle">Voir la description</a>
				</footer>
			</section>

		<!-- Banner -->
			<section id="banner">
				<header>
					<h2>Bienvenue sur Orion</h2>
				</header>
				<p>
					Orion vous permet de contrôler les lumières de votre maison depuis cette interface web.</br>
					Vous pouvez, depuis votre ordinateur ou votre smartphone, allumer ou éteindre les lumières.<br />
					Peut importe où vous êtes, gardez le contrôle.
				</p>
				<footer>
					<a href="#panel" class="button style2 scrolly">Panneau de contrôle</a>
				</footer>
			</section>

		<!-- Banner 2 -->

				<article id="panel" class="container box style2">
					<header>
						<h2>Panneau de controle</h2>

					</header>

					<div class="control_panel">
						<table>
							<tr>
								<td id="entree" class="bg-dangerX">Entrée</td>
								<td id="salon" class="bg-dangerX">Salon</td>
								<td id="chambre" class="bg-dangerX">Chambre</td>
							</tr>
							<tr>
								<td class="switch bg-dangerX" data-id="11" data-td="entree"><img src="images/lampOff.png" alt=""></td>
								<td class="switch bg-dangerX" data-id="15" data-td="salon"><img src="images/lampOff.png" alt=""></td>
								<td class="switch bg-dangerX" data-id="7" data-td="chambre"><img src="images/lampOff.png" alt=""></td>
							</tr>
						</table>
					</div>
				</article>



		<section id="footer">
			<div class="copyright">
				<ul class="menu">
					<li>&copy; Orion. All rights reserved.</li><li>Design: Yaiba782</li>
				</ul>
			</div>
		</section>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.poptrox.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
		<script language="JavaScript">
			$('.switch').on('click', function(){
				var id = $(this).data("id");
				$.ajax({
					url: './process/switch.php?id='+id
				});
				if ($(this).hasClass('bg-dangerX'))
				{
					$(this).addClass('bg-successX');
					$(this).removeClass('bg-dangerX');

					$('#'+$(this).data('td')).removeClass('bg-dangerX');
					$('#'+$(this).data('td')).addClass('bg-successX');
					$(this).html('');
					$(this).html('<img src="images/lampOn.png" alt="">');
				}else{
					$(this).addClass('bg-dangerX');
					$(this).removeClass('bg-successX');

					$('#'+$(this).data('td')).addClass('bg-dangerX');
					$('#'+$(this).data('td')).removeClass('bg-successX');

					$(this).html('');
					$(this).html('<img src="images/lampOff.png" alt="">');
				}
			});
		</script>

	</body>
</html>