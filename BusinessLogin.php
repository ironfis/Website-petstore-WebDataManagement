<?php
include "dbconn.php";

$nameErr = $ServiceErr= "";
$Name = $Service=$result = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (empty($_POST["Name"])) {
		$nameErr = "title='Name is required' style='border: 1px solid;'";
	} else {
		$Name = $_POST["Name"];
		
		if (!preg_match("/^[a-zA-Z ]*$/", $Name)) {
			$nameErr = "title='Only letters and white space are allowed' style='border: 1px solid;'";
		}
	}
	if (empty($_POST["Service"])) {
		$ServiceErr = "title='Name is required' style='border: 1px solid;'";
	} else {
		$Service = $_POST["Service"];
		
		if (!preg_match("/^[a-zA-Z ]*$/", $Service)) {
			$Last-NameErr = "title='Only letters and white space are allowed' style='border: 1px solid;'";
		}
	}
	if ($NameErr == "" && $ServiceErr) {
		$sql = "INSERT INTO job (Name,Service) VALUES ('$Name','$Service')";
		
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
    <title>Login Business</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/index.css">
</head>

<body>
<div id="wrapper">
    <header>Business' Pet Store</header>
    <div class="row">
        <div class="column1">
           
        </div>
        <div class="column2">
            <img src="images/index.png">
            <article class="article">
                <h2 class="article-heading">My Business</h2>
                <p class="font">Required information is marked with an asterisk (*).</p>

                <div class="div">
                    <table class="tableclass">
                        <tr class="jobform1">
                            <td class="jobform">Business Name:</td> 

                            <td>
                                <form>
                                    <input type="text" name="Name" <?php echo $NameErr;?> required>
                                </form>
                            </td>

                        <tr class="jobform1">
                            <td class="jobform">*Service:</td>
                            <td>
                                <form>
                                    <input type="text" name="Service" <?php echo $ServiceErr;?> required>
                                </form>
                            </td>
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