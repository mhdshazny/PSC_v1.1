<!--<div class="container-fluid" style="width:1800px">-->
<?php
include("../Common/session.php");
?>

<div class="container-fluid bd-gray" style="width: 100%; background-color: #011d21;">
<nav class="navbar navbar-expand-lg" style="">
    <a class="navbar-brand text-white" onclick="location.reload()">Paddy Storage Cooperation System V1.1</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        </ul>
            <ul class="navbar-nav" style="left: 0px">
                <li class="nav-item">
                    <a class="nav-link text-white" href="../Identity/login.php"><?php echo $_SESSION['loggedUser']; ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Settings</a>
                </li>
            </ul>
    </div>
</nav>
</div>
