<?php
include "dbconn.php";
$E-MailErr = $PasswordErr = "";
$E-Mail = $Password = $result = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
if (empty($_POST["E-Mail"])) {
		$E-MailErr = "title='Email is required' style='border: 1px solid;'";
	} else {
		$E-Mail = $_POST["E-Mail"];
		
		if (!preg_match("/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/", $E-Mail)) {
			$E-MailErr = "title='invalid E-mail syntax' style='border: 1px solid;'";
		}
       }
	   if (empty($_POST["Password"])) {
		$PasswordErr = "title='Password is required' style='border: 1px solid;'";
	} else {
		$Password = $_POST["Password"];
		
		if (!preg_match("/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/", $Password)) {
			$PasswordErr = "title='Password invalid' style='border: 1px solid;'";
		}
       }
	   if ($PasswordErr == "" && $E-MailErr == "" ) {
		$sql = "INSERT INTO job (E-Mail,Password) VALUES ('E-Mail','Password')";
		
		if ($conn->query($sql) === TRUE) {
			$result = "<span style='color: green;'>Your application was sent successfully!</span>";
		} else {
			$result = "<span style='color: red;'>An error occurred while trying to send your application.</span>";
		}
	}
}
$conn->close();
?>	

<html>

<head>
    <title>Pet Store</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/index.css">
</head>

<body>
<div id="wrapper">
    <header>Pet Store</header>
    <div class="row">
        <div class="column1">
            <a href="index.html">Home</a><br>
            <a href="about.html">About Us</a><br>
            <a href="contactus.html">Contact Us</a><br>
            <a href="client.html">Client</a><br>
            <a href="service.html">Service</a><br>
            <a href="login.html">Login</a>
        </div>
        <div class="column2">
            <img src="images/index.png">
            <article class="article">
                <h2 class="article-heading">Login</h2>
                <p class="font">Required information is marked with an asterisk (*).</p>

                <div class="div">
                    <table class="tableclass">

                        <tr class="jobform1">
                            <td class="jobform">*E-Mail:</td>
                            <td>
                                <form>
                                    <input type="text" name="E-Mail" <?php echo $E-MailErr;?> required>
                                </form>
                            </td>
                        <tr class="jobform1">
                            <td class="jobform">*Password:</td>
                            <td>  
                                <form>
                                    <input type="Password" name="Password" <?php echo $PasswordErr;?> required>
                                </form>
                            </td>

                        </tr>


                    </table>
                </div>
                <div class="buttondiv">
                    <button type="button">Submit</button>
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