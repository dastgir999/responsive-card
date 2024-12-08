<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style type="text/css">
		*{
			margin:0;
			padding:0;
			box-sizing: border-box;
			font-family: sans-serif;


		}

		.training-section{
			width:100%;
			background-color:whitesmoke;
			padding-bottom:50px;
			
		}

		.training-section h1{
			text-align: center;
			padding:25px 0;
		}

		.container{
			width:1020px;
			margin:auto;
/*			border: 1px solid red;*/
			display: flex;
			flex-wrap: wrap;
			justify-content: space-around;

		}

		.training-item{

			flex-basis:23%;
			background-color:wheat;
			margin:10px 0px;
			box-shadow:0px 0px 10px 3px lightgray;
			text-align: center;
			padding:20px 0px;
		}

		.training-item h3{
			padding: 10px 0px;

		}

		.training-item p{
            font-size:14px;
            padding:10px;

		}

		.training-item button{
			background-color: blueviolet;
			color:white;
			padding:10px 25px;
			border: none;
			border-radius:10px;
			margin:10px 0px;

		}

		.training-item:hover{
			background-color:red;

		}

		.training-item:hover h3, .training-item:hover p{
			color:white;

		}

		.training-item:hover button{
			background-color:white;
			color:red;

		}

		@media screen and (min-width:200px) and (max-width:767px){
			.container{
			width:100%;
			flex-direction:column;

		}

		.training-item{
			margin:10px;
        }

		}


	</style>
	<title>Responsive Card</title>
</head>
<body>
	<div class="training-section">
		<h1>Our Training Cources</h1>
		<div class="container">
			<!--card start--->
			<div class="training-item">
				<img src="../images/mic icon.png" alt="mic">
				<h3>PHP web Development</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				anim id est laborum.</p>
				<button>Read More</button>
			</div>

			<!--card end--->
			<!--card start--->
			<div class="training-item">
				<img src="../images/mic icon.png" alt="mic">
				<h3>React web Designing</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				anim id est laborum.</p>
				<button>Read More</button>
			</div>

			<!--card end--->
			<!--card start--->
			<div class="training-item">
				<img src="../images/mic icon.png" alt="mic">
				<h3>Java App Development</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				anim id est laborum.</p>
				<button>Read More</button>
			</div>

			<!--card end--->
			<!--card start--->
			<div class="training-item">
				<img src="../images/mic icon.png" alt="mic">
				<h3>Python App Development</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				anim id est laborum.</p>
				<button>Read More</button>
			</div>

			<!--card end--->

			<!--card start--->
			<div class="training-item">
				<img src="../images/mic icon.png" alt="mic">
				<h3>PHP web Development</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				anim id est laborum.</p>
				<button>Read More</button>
			</div>

			<!--card end--->
			<!--card start--->
			<div class="training-item">
				<img src="../images/mic icon.png" alt="mic">
				<h3>React web Designing</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				anim id est laborum.</p>
				<button>Read More</button>
			</div>

			<!--card end--->
			<!--card start--->
			<div class="training-item">
				<img src="../images/mic icon.png" alt="mic">
				<h3>Java App Development</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				anim id est laborum.</p>
				<button>Read More</button>
			</div>

			<!--card end--->
			<!--card start--->
			<div class="training-item">
				<img src="../images/mic icon.png" alt="mic">
				<h3>Python App Development</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				anim id est laborum.</p>
				<button>Read More</button>
			</div>

			<!--card end--->
		</div>
	</div>



</body>
</html>