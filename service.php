<?php
include "dbconn.php";

$nameErr = $LastNameErr= $EMailErr = $PhoneErr = "";
$Name = $Last-Name=$E-Mail = $Phone = $result = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (empty($_POST["Name"])) {
		$nameErr = "title='Name is required' style='border: 1px solid;'";
	} else {
		$Name = $_POST["Name"];
		
		if (!preg_match("/^[a-zA-Z ]*$/", $Name)) {
			$nameErr = "title='Only letters and white space are allowed' style='border: 1px solid;'";
		}
	}
	if (empty($_POST["Last-Name"])) {
		$Last-NameErr = "title='Name is required' style='border: 1px solid;'";
	} else {
		$Last-Name = $_POST["Last-Name"];
		
		if (!preg_match("/^[a-zA-Z ]*$/", $Last-Name)) {
			$Last-NameErr = "title='Only letters and white space are allowed' style='border: 1px solid;'";
		}
	}
	if (empty($_POST["E-Mail"])) {
		$E-MailErr = "title='Email is required' style='border: 1px solid;'";
	} else {
		$E-Mail = $_POST["E-Mail"];
		
		if (!preg_match("/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/", $E-Mail)) {
			$E-MailErr = "title='invalid E-mail syntax' style='border: 1px solid;'";
		}
	}
	
	if (empty($_POST["Phone"])) {
		$phoneErr = "title='Number is required' style='border: 1px solid;'";
	} else {
		$Phone = $_POST["Phone"];
		
		if (!preg_match("/^[0-9 ]*$/", $Phone)) {
			$Phone = "title='Only numbers and white space are allowed' style='border: 1px solid;'";
		}
	}
    if ($NameErr == "" && $E-MailErr == "" && $PhoneErr == "" && $Last-NameErr) {
		$sql = "INSERT INTO job (Name, Email, Last-Name,Phone) VALUES ('$Name', '$E-Mail', '$Last-Name','$Phone')";
		
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
                <h2 class="article-heading">Service</h2>
                <p class="font">Required information is marked with an asterisk (*).</p>

                <div class="div">
                    <table class="tableclass">
                        <tr class="jobform1">
                            <td class="jobform">*First Name:</td>
                            <td>
                                <form>
                                    <input type="text" name="Name" <?php echo $NameErr;?> required>
                                </form>
                            </td>

                        <tr class="jobform1">
                            <td class="jobform">*Last Name:</td>
                            <td>
                                <form>
                                    <input type="text" name="Last-Name" <?php echo $Last-NameErr;?> required>
                                </form>
                            </td>

                        <tr class="jobform1">
                            <td class="jobform">*E-Mail:</td>
                            <td>
                                <form>
                                    <input type="text" name="E-Mail" <?php echo $E-MailErr;?> required>
                                </form>
                            </td>
                        <tr class="jobform1">
                            <td class="jobform">Phone:</td>
                            <td>
                                <form>
                                    <input type="text" name="Phone"  <?php echo $PhoneErr;?> required>
                                </form>
                            </td>

                        </tr>
                        <tr>
                            <td class="jobform">Business Name:</td>
                            <td>
                                <form>
                                    <input type="text" name="Business name">
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