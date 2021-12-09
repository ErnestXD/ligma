<!DOCTYPE html>
<html lang="en">
<head>
    <style>
    /*.mainwindow {*/
    /*    background-color: gray;*/
    /*    color: white;*/
    /*    border: 2px solid black;*/
    /*    height: 650px;*/
    /*}*/
	/*migtukai su paveiksl*/
    .kaire{
        /*border: 2px solid black;*/
        margin: 20px;
		padding: 10px;
    }
    .button {
        background-color: wheat;
        border: 3px solid black;
        color: black;
        height: 60px;
        text-align: center;
        display: inline-block;
        font-size: 16px;
		margin:12px 0px 5px 0px;
		width:100%;
    }
    .buttons {
        /*border: 2px solid black;*/
		padding:10px;
    }
	/*tel nr*/
    .nmr {
        /*border: 2px solid black;*/
        height: 100px;
        margin: 2%;
		padding:15px;
    }
	/*user*/
    .user {
		display: grid;
		grid-template-columns: 40% auto;
        /*border: 2px solid black;*/
        height: 100px;
        margin: 25px;
    }
    
    .dukk {
        
    }
	/*migtukas "Pradzia"*/
    .pradzbutton {
        height: 100px;
    }

	.virsus{
		display:grid;
		grid-template-columns:20% 20% 20% 20% auto;
	}
	.pagrindas{
		display:grid;
		grid-template-columns:20% auto;
	}
	.duk {
		text-align:right;
        height: 20px;
        margin-right: 40px;
		grid-column-start: 1;
		grid-column-end: 3;
		justify-content: end;
    }
	.profo{


		border: 2px solid black;
		/*width: 37%;*/

	}
	.vardas {

		/*border: 2px solid black;*/
	}
	
    </style>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
	<div class="pagrindas">
		<div class="kaire">
			<img src="ligma.png" style="width: 100%">
			<div class="buttons">
				<div class="pradzbutton">
					<button class="button">Pradžia</button>
				</div>
				<button class="button" >Mano paskyra</button>
				<button class="button" >Užsiregistruoti pas daktarą</button>
				<button class="button" >Peržiurėti vizitų laiką</button>
				<button class="button" >Gydimo taktikos sekimas</button>
				<button class="button" >Sekti paskyrimus į analizes</button>
				<button class="button" >Susisiekti su administracija</button>
				<button class="button" >Moketi už paslaugas</button>
			</div>
		</div>
		<div class="desine">
			<div class="virsus">
				<div class="nmr">
					<article>
						<h4>Centro padalinys</h4>
						<p>(8 37) 409 222</p>
					</article>
				</div>
				<div class="nmr">
					<article>
						<h4>Kalnečių padalinys</h4>
						<p>(8 37) 401 222</p>
					</article>
				</div>
				<div class="nmr">
					<article>
						<h4>Dainavos padalinys</h4>
						<p>(8 37) 403 900</p>
					</article>
				</div>
				<div class="nmr">
					<article>
						<h4>Šančių padalinys</h4>
						<p>(8 37) 342 167</p>
					</article>
				</div>
				<div class="user">
					<div class="profo">
						<img src="profile.jpg" style="width: 100%">
					</div>
					<div>
						<h4>Vardas Pavarde</h4>
						<button>Pranešimai</button>
						<button>Atsijungti</button>
					</div>
<!--                        abobA-->
				</div>
			</div>
			

<!--			<div class ="mainwindow">-->
				<?php
					$server = "localhost";
					$db = "ligma";
					$user = "root";
					$password = "";
					$dbc=mysqli_connect($server,$user,$password, $db);

					$select = "SELECT * FROM medikamentai";
					$result = mysqli_query($dbc, $select);
                    echo "<table>";
                    echo "<th>medikamentai</th>";
                    echo "<th>proceduros</th>";
                    echo "<th>periodas</th>";

					while($row = mysqli_fetch_array($result))
                    {
                        echo "<tr>";
                        echo "<td style='border: red 30px; margin-right: 50px !important;'>".$row['name']."</td>";
                        echo "<td style='margin-right: 50px'>sdgfhjk</td>";
                        echo "<td>askdjaklsd</td>";
                        echo "</tr>";
                    }
                    echo "</table>";

				?>
<!--			</div>-->
		</div>
		<div class="duk">
			<button type="button" class="dukk">D.U.K.?</button>
		</div>
	</div>

    

</body>
</html>