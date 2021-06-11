<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">

	<title>test form</title>
	
	<style >
		
	*{
		margin: 0;
		padding: 0;
		box-sizing: border-box;
		font-family: 'Poppins',sans-serif;
	}
	section{
		position: relative;
		width: 100%;
		height: 100vh;
		display: flex;
	}
	section .imgBx{
		position: relative;
		width: 50%;
		height: 100%;
	}



	
	section .imgBx img{
		position: absolute;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		object-fit: cover;
	}

	section .contentBx{
		display: flex;
		justify-content: center;
		align-items: center;
		width: 50%;
		height: 100%;
	}

	section .contentBx .formBx{
		width: 50%;
	}

	section .contentBx .formBx h2{
		color: #607d8b;
		font-weight: 600;
		font-size: 1.5em;
		text-transform: uppercase;
		margin-bottom: 20px;
		border-bottom: 4px solid #cc2ce7;
		display: inline-block;
		letter-spacing: 1px;
	}
	section .contentBx .formBx .inputBx{
		margin-bottom: 20px;
	}
	section .contentBx .formBx .inputBx span{
		font-size:16px ;
		margin-bottom: 5px;
		display: inline-block;  
		color: #607d8b;
		font-weight: 300;
		font-size:16px ;  /* we have used inline block thats why 2 times font-size*/
		letter-spacing:1px ;
	}
	section .contentBx .formBx .inputBx input{
		width: 100%;
		padding: 10px 20px;
		outline: none;
		font-weight: 400;
		border: 1px solid #607d8b;
		letter-spacing: 1px;
		color:#607d8b  ;
		background: transparent;
		border-radius: 30px;

	}

	section .contentBx .formBx .inputBx input[type="submit"]{
		background: #cc2ce7 ;
		color: #fff;
		outline: none;
		border: none;
		font-weight: 500;
		cursor: pointer;
	}
	section .contentBx .formBx .inputBx input[type="submit"]:hover{
		background: #753380;
	}

	/*@media(min-width:400px)
	{

		section .imgBx 
		{
   	 		position: absolute;
    		width: 100%;
    		height: 100%;
    		top: 0;
    		left: 0;
    	}
    section .contentBx 
    	{
    		display: flex;
    		justify-content: center;
    		align-items: center;
    		width: 100%;
    		height: 100%;
    		z-index: 1;
	}
	section .contentBx .formBx 
	{
    		width: 100%;
    		background: rgb(255 255 255 / 90%);
    		padding: 50px;
    		margin: 50px;
	}

}*/
	</style>
</head>
<body>

<section>
	<div class="imgBx">
		<img src="image/2.jpg">
		
	</div>
	<div class="contentBx">
		<div class="formBx">
			<h2>Login form</h2>
			<form method="post" action="login_insert.php">
				<div class="inputBx">
					<span>email</span>
					<input type="text" name="email">
				</div>
				<div class="inputBx">
					<span>Password</span>
					<input type="text" name="password">
				</div>

				


				<div class="inputBx">
					<input type="submit" name="" value="LOG IN">
				</div>
			</form>
			
		</div>
		
	</div>
</section>

		


</body>
</html>