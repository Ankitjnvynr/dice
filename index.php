<?php
    if(!isset($_GET['section'])){
        $_GET['section']='admission';
    }
    $i=false;
    $i=$_GET['section'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Student zone</title>
</head>

<body>
    <div class="container">
        <div class="student-zone">
            <div class="sidebar">
                <ul>
                    <li class=" sidebarItem <?php if($i=='admission') echo 'active'; ?>"><a href="index.php?section=admission">Admission</a></li>
                    <li class=" sidebarItem <?php if($i=='certificate') echo 'active'; ?>"><a href="index.php?section=certificate">Certificate</a></li>
                    <li class=" sidebarItem <?php if($i=='admit-card') echo 'active'; ?>"><a href="index.php?section=admit-card">Admit Card</a></li>
                </ul>
            </div>
            <div class="content-div">
            <?php
                if($i=='admission') include('studentZone\admission-form.php'); 
                if($i=='certificate') include('studentZone\certificate.php');
                if($i=='admit-card') include('studentZone\admit-card.php');
            ?>
                
            </div>
        </div>
    </div>
    <script src="script.js"></script>
</body>

</html>