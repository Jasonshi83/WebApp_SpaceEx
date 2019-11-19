<?php
$conn = mysqli_connect("localhost", "myuser", "mypass", "mydb1") or die("could not connect to DB");

/*collect data*/

if(isset($_POST['search'])){
    $searchq = $_POST['search'];
    $searchq = preg_replace('#[^0-9a-z]#i','',$searchq); // replace if not 0-9 or a-z
    $query = mysqli_query($conn,"SELECT * FROM users WHERE name LIKE '%$searchq%'");
    $count = mysqli_num_rows($query); // how many rows will be picked up according to the searching.
    if($count == 0){ // if count is 0 means no data was matched
        $output = 'there was no search results';
    }else{
        while($row = mysqli_fetch_array($query)){
            $id = $row['id'];
            $name = $row['name'];
            $email = $row['email'];
            $birth = $row['birth'];
            $output .= '<div>'.$id.'  '.$name.'  '.$email.'  '.$birth.'</div>';
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Search</title>
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


<div class="Search">

    <br>
    <br>
    <h3>Input Member Name</h3>
    <br>

    <form id="searchForm" action="Search.php" method="post">
        <input type="text" name="search" placeholder="Search for Member detail">
        <input type="submit" value=">>">
        <br>
        <br>
        <br>
    </form>
    <h3>RESULT</h3>
    <br>
    <br>
    <div id="output">
        <?php

        if(isset($output)){
            print("$output");
        }
        ?>
    </div>

    <br>
    <br>
    <br>

</div>

</body>
</html>