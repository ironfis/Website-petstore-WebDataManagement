	
<html>

<head>
    <title>Login Client</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/index.css">
</head>

<body>
<div id="wrapper">
    <header>Client's Pet Store</header>
    <div class="row">
        <div class="column1">
           
        </div>
        <div class="column2">
            <img src="images/index.png">
            <article class="article">
                <h2 class="article-heading">My Pet</h2>
                <p class="font">Required information is marked with an asterisk (*).</p>

                <div class="div">
                    <table class="tableclass">
                        <tr class="jobform1">
                            <td class="jobform">Client Name:</td> 

                            <td>
                                <form>
                                    <input type="text" name="Name" <?php echo $NameErr;?> required>
                                </form>
                            </td>

                        <tr class="jobform1">
                            <td class="jobform">*My Pet:</td>
                            <td>
                                <form>
                                    <input type="text" name="Last-Name" <?php echo $Last-NameErr;?> required>
                                </form>
                            </td>
							</table>
                </div>
                <div class="buttondiv">
                    <button type="button">Add New One</button>
                </div>
            </article>
            <!-- <footer class="pet-footer">
                <div>
                    <span>Copyright &copy 2018 Pet Store</span>
                    <br><span></span>
                </div>
            </footer> -->
             <footer>
		<p> <i><span style="color:#A9A9A9;">Copyright &copy 2018 Pet Store</span> 
		<br><span><a href="mailto:Karthik@SomanahalliMuralidhara">Karthik@SomanahalliMuralidhara.com</a></i></p></span>
	</footer>
        </div>
    </div>
	</div>
	<?php echo $result;?>
</body>

</html>