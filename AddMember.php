<?php
$conn = mysqli_connect("localhost", "myuser", "mypass", "mydb1") or die("could not connect to DB");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>AddMember</title>
    <link rel="stylesheet" href="GridLayoutStyle.css" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Anton|Biryani|Luckiest+Guy|Mansalva|Open+Sans:400i|Press+Start+2P&display=swap" rel="stylesheet">

</head>
<body>

<div class="header">
    <div class="inner_header">
        <div class="logo_container">
            <h1>THE<span>SPACE</span></h1>
        </div>
        <ul class="navigation">
            <a>
                <li>BE BRAVE & BE PATIENT</li>
            </a>
        </ul>
    </div>
</div>


<div class="addMember">

    <?php
    $sql = "INSERT INTO users (name, email, birth) VALUES (?,?,?)";
    $stmt = mysqli_prepare($conn,$sql);
    $stmt->bind_param("sss", $_POST['name'], $_POST['email'], $_POST['birth']);
    $stmt -> execute();
    "submitted"
    ?>


    <div>
        <h3 id="addMember">Registration</h3>
    </div>

    <form method="post">
        <label class="add_detail"> Name :</label> <br>
        <input type="text" name="name" placeholder="Input User Name"> <br>
        <br>

        <label class="add_detail"> Email :</label> <br>
        <input type="text" name="email" placeholder="Input User Email"> <br>
        <br>

        <label class="add_detail"> Birth :</label> <br>
        <input type="text" name="birth" placeholder="Input User Birthday"> <br>
        <br>

        <button class="add_detail" type="submit" name="save"> Submit </button>

    </form>

</div>



</body>
</html>