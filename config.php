<!Doctype <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<title>ITCG - Actividades Extraescolares</title>
    <script src="https://kit.fontawesome.com/9584a3d4cd.js" crossorigin="anonymous"></script>
    
    <link rel="SHORTCUT ICON" href="itcg.jpg" type="image/x-icon">
</head>
<body>
<style type="text/css">
	*{
		margin: 0;
		padding: 0;
		font-family: TimesNewRoman, "Times New Roman", Times, Baskerville, Georgia, serif;
		box-sizing: border-box;
	}

	.cabecera{
		display: flex;
		justify-content: space-between;
		align-items: center;
		padding: 15px 30px;
		background: #23242b;
		color: #fff;
	}

	.body{
		display: flex;
	}

	.windows{
		width: 100%;
		display: flex;
		justify-content: center;
		align-items: center;
		flex-direction: column;
	}

	.windows h4{
		color: black;
		font-size: 40px;
	}

	#checkbox{
		display: none;
	}

	#navbtn{
		cursor: pointer;
		padding-left: 17px;
		font-size: 20px;
		transition: 500ms color;
	}

	.side-bar{
		width: 250px;
		background: #262931;
		min-height: 100vh;
		transition: 500ms background;

	}

	.user-p{
		text-align: center;
		padding-top: 25px;
	}

	img{
		border-radius: 25%;
		width: 100px;
		margin-bottom: 10px;
	}

	h4{
		color: #fff;
	}

	ul{
		list-style: none;
		margin-top: 20px;
	}

	ul li{
		padding: 15px 0;
		font-size: 16px;
		padding-left: 20px;
		transition: 500ms background;
		white-space: nowrap;
		overflow: hidden;
		text-overflow: ellipsis;
	}

	ul li a{
		text-decoration: none;
		color: #fff;
		cursor: pointer;
		letter-spacing: 1px;
	}

	.side-bar ul li  a i{
		display: inline-block;
		font-size: 23px;
		margin-right: 10px;
	}

	ul li:hover{
		background: #127b8e;
	}

	.cabecera i:hover{
		color: #127b8e;
	}

	#checkbox:checked ~ .body .side-bar{
		width: 65px;
	}

	#checkbox:checked ~ .body .side-bar .user-p{
		visibility: hidden;
	}

	#checkbox:checked ~ .body .side-bar a span{
		display: none;
	}


	@media(max-width: 1024px){
		.body .side-bar{
			width: 65px;
		}

		.body .side-bar .user-p{
			visibility: hidden;
		}

		.body .side-bar a span{
			display: none;
		}

		#checkbox:checked ~ .body .side-bar{
			width: 250px;
		}


		#checkbox:checked ~ .body .side-bar .user-p{
			visibility: visible;
		}

		#checkbox:checked ~ .body .side-bar a span{
			display: inline-block;
		}
	}

</style>


	<input type="checkbox" id="checkbox">

	<header class="cabecera">
		<h2 class="u-name">ITCG <b> Departamento de Actividades Extraescolares </b>
		<label for="checkbox">
			<i id="navbtn" class="fa-solid fa-bars"></i>
		</label>
	</header>

	<div class="body">
		<nav class="side-bar">
			<div class="user-p">
				<img src="itcg.jpg">
				<h4>Jose</h4>
			</div>

			<ul>
				
				<li>
					<a href="">
						<i class="fa-solid fa-desktop"></i>
						<span>Inicio</span>
					</a>
				</li>
				<li>
					<a href="">
						<i class="fa-solid fa-power-off"></i>
						<span>Cerrar Sesión</span>
					</a>
				</li>
			</ul>


		</nav>

		<section class="windows">
			<h4> Hola Mundo </h4>
		</section>

	</div>


	


</body>
</html>
