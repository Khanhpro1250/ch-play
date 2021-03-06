<?php
    include "quanly/ketnoi.php";
    session_start();
?>
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="logo3.png">
    <title>Google Play</title>

</head>

<body class="index">
    <!--Header-->
    <?php
    if (isset($_SESSION['tenKH'])){
        $MSKH=$_SESSION['mskh'];
        $sql = "SELECT * FROM khachhang WHERE MSKH='$MSKH'";
        $query = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($query);
    }
    if(isset($_REQUEST['MSAPP']) && $_REQUEST['MSAPP']!=""){
        $msapp = $_GET['MSAPP'];
        $sql = "SELECT * FROM ungdung WHERE MSAPP ='$msapp' ";
        $query = mysqli_query($conn,$sql);
        $row= mysqli_fetch_array($query);

    }
?>

    <nav class="navbar fixed-top navbar-expand-lg navbar-dark " >
        <a class="navbar-brand" href="index.php"><img src="logo3.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <?php if(isset($_SESSION['tenKH']) && $_SESSION['tenKH']!="Administrator"){?>
        <div class="collapse navbar-collapse f-right" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Google Play<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Danh m???c ???ng d???ng
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="index.php?findgame=game"><i class="fas fa-gamepad"
                                ></i>Tr?? ch??i ??i???n t???</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="index.php?findgame=book"><i class="fas fa-book"></i> S??ch </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="index.php?findgame=mxh"><i class="fas fa-facebook"></i>M???ng x??
                            h???i</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="index.php?findgame=freetainhieu"><i
                                class="fas fa-facebook"></i>Free t???i nhi???u</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="index.php?findgame=tainhieu"><i class="fas fa-facebook"></i>???ng
                            d???ng t???i nhi???u</a>

                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Nh?? ph??t tri???n
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="index.php?findgame=KH000"><i class="fas fa-user"
                                ></i> Administrator</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="index.php?findgame=KH001"><i class="fas fa-user"
                                ></i> Khanh Hu???nh</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="index.php?findgame=KH002"><i class="fas fa-user"
                                ></i> Nh???t Linh</a>


                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="changeprofile.php">Th??ng tin c?? nh??n</a>
                </li>
            </ul>
        </div>
        <div class="dropdown nav-item">
            <span id="nguoidung"><i class="fas fa-user"></i> <?php echo $_SESSION['tenKH']; ?> </span>
            <span class="sodu">S??? d??: <?php echo $row['SoDu']; ?>$</span>
            <div class="dropdown-content">
                <a href="lichsunap.php">L???ch s??? n???p th???</a>
                <hr>
                <a href="napthecao.php">N???p th???</a>
                <hr>
                <a href="lichsudownload.php">L???ch s??? t???i v???</a>
                <hr>
                <a href="upgrade.php">N??ng c???p Developer</a>
                <hr>
                <a href="dangnhap/doimatkhau.php">?????i m???t kh???u</a>
                <hr>
                <a id="logout" href="dangnhap/logout.php">????ng xu???t</a>
            </div>
        </div>
        <?php }else{ ?>
        <div class="collapse navbar-collapse f-right" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Google Play<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Danh m???c ???ng d???ng
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="index.php?findgame=game"><i class="fas fa-gamepad"
                               ></i> Tr?? ch??i ??i???n t???</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="index.php?findgame=book"><i class="fas fa-book"></i> S??ch</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="index.php?findgame=MXH"><i class="fas fa-user"></i>M???ng x??
                            h???i</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="index.php?findgame=freetainhieu"><i class="fas fa-book"></i>L?????t
                            mi???n ph?? t???i nhi???u</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="index.php?findgame=tainhieu"><i class="fas fa-book"></i>L?????t t???i
                            nhi???u</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Nh?? ph??t tri???n
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="index.php?findgame=KH000"><i class="fas fa-user"
                                ></i> Administrator</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="index.php?findgame=KH001"><i class="fas fa-user"
                                ></i> Khanh Hu???nh</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="index.php?findgame=KH002"><i class="fas fa-user"
                                ></i> Nh???t Linh</a>


                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#footer">Li??n h???</a>
                </li>
            </ul>
        </div>
        <div class="dropdown nav-item">
            <span><i class="fas fa-user"></i> T??i kho???n</span>
            <div class="dropdown-content">
                <a href="dangnhap\login.php"><i class="fas fa-sign-in-alt"></i> ????ng nh???p</a>
                <hr>
                <a href="dangnhap\register.php"><i class="fas fa-user-plus"></i> ????ng k??</a>
            </div>
        </div>
        <?php } ?>

        &ensp;
        <div class="form-inline">
            <form class="form-inline" method="post">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" name="tukhoa">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="search">Search</button>
            </form>
        </div>
    </nav>
    <br>
    <br>
    <br>
    <?php
    if (isset($_POST['search'])|| isset($_GET['findgame'])){
        if(isset($_POST['search'])){
            $tukhoa = $_POST['tukhoa'];
        }else{
            $tukhoa = $_GET['findgame'];
        }
        if($tukhoa=='freetainhieu'){
            $timkiem = "SELECT * FROM ungdung WHERE Gia=0 order by luottai desc";
            $ketqua = mysqli_query($conn,$timkiem);
        }elseif($tukhoa=='tainhieu'){
            $timkiem = "SELECT * FROM ungdung WHERE Gia>0 order by luottai desc";
            $ketqua = mysqli_query($conn,$timkiem);
        }else{
            $timkiem = "SELECT * FROM ungdung WHERE TenAPP LIKE '%$tukhoa%' or manhom LIKE '%$tukhoa%' or Gia like'$tukhoa%' or nhaphattrien='$tukhoa'";
            $ketqua = mysqli_query($conn,$timkiem);
        }
        
        
        
        
?>
    <br>
    <br>
    <br>
    <nav class="navbar navbar-light bg-light">
        <div class="nav-item dropdown a-left f-left">
            <a class="navbar-brand">
                <h2>???ng d???ng</h2>
            </a>
        </div>
        <div class="nav-item dropdown a-right f-right">
    </nav>
    <div class="row row-cols-1 row-cols-md-4">
        <?php while ($tk = mysqli_fetch_array($ketqua)){?>
        <div class="col-3">
            <div class="card" >
                <a
                    href="chitietungdung.php?MSAPP=<?php echo $tk['MSAPP']; ?>&&loai=<?php echo $tk['MaNhom']; ?>&&npt=<?php echo $tk['nhaphattrien']; ?>">
                    <img class="card-img-top" src="images\<?php echo $tk['Hinh']; ?>">
                </a>
                <div class="card-body">
                    <h5  class="card-text"><?php echo $tk['TenAPP']; ?></h5>
                    <div>
                        <?php
                                        $maapp=$tk['MSAPP'];
                                         $star = "SELECT star from ungdung where MSAPP='$maapp'";
                                        $rating1=mysqli_query($conn,$star);
                                        ?>
                        <h6>????nh gi??</h6>
                        <?php
                                        $rating=mysqli_fetch_array($rating1);
                                        for($i=0;$i<(int)$rating[0];$i++) {?>
                        <span class="fa fa-star checked"></span>
                        <?php } ?>
                        <?php for($i=0;$i<5-(int)$rating[0];$i++) {?>
                        <span class="fa fa-star"></span>
                        <?php } ?>
                    </div>
                    <div>

                        <?php if (isset($_SESSION['tenKH'])){
                                        $MSKH=$_SESSION['mskh'];
                                        $sql = "SELECT * FROM khachhang WHERE MSKH='$MSKH'";
                                        $query = mysqli_query($conn,$sql);
                                        $row = mysqli_fetch_array($query);
                                        $ls="SELECT * from lichsudownload where username ='$MSKH' and msapp='$maapp'";
                                        $thuchien = mysqli_query($conn,$ls); 
                                        $d=mysqli_num_rows($thuchien);
                                        $t='Downloaded';
                                    ?>
                        <h3 class="card-text money"><?php
                                        if($d!=0){echo $t;} else{  echo number_format($tk['Gia'],0,".",",").'$';} 
                                        ?>
                        </h3>

                        <?php }else{?>
                        <h3 class="card-text money"><?php
                                        echo number_format($tk['Gia'],0,".",",").'$';} 
                                        ?>
                        </h3>

                        <a href="chitietungdung.php?MSAPP=<?php echo $tk['MSAPP']; ?>&&loai=<?php echo $tk['MaNhom']; ?>&&npt=<?php echo $tk['nhaphattrien']; ?>">
                            <button class="btn-app like btn btn-default" title="Th??m v??o gi??? h??ng" type="submit">
                                Download
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
    <?php    }else{
        
    
        ?>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="images/slide1-new.gif" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/slide2-new.gif" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/slide3-new.gif" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/slide4-new.gif" alt="Second slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!--Product product-->
    <br>
    <br>
    <br>
    <!-- M???i -->
    <?php
        $a="SELECT * from theloai";
        $ca=mysqli_query($conn,$a);   
        while( $row=mysqli_fetch_array($ca)){?>
    <div class="container-product">
        <!-- As a link -->
        <?php 
                    $theloai=$row['matheloai'];
                    $b="SELECT * from ungdung where manhom='$theloai'";
                    $cb=mysqli_query($conn,$b);
                    
                    ?>
        <nav class="navbar navbar-light bg-light">
            <div class="nav-item dropdown a-left f-left">
                <a class="navbar-brand">
                    <h2><?php echo $row['tentheloai']?></h2>
                </a>
            </div>
            <div class="nav-item dropdown a-right f-right">
        </nav>
        <div class="row row-cols-1 row-cols-md-4">
            <?php while ($rbook = mysqli_fetch_array($cb)){ ?>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <div class="card" >
                    <a
                        href="chitietungdung.php?MSAPP=<?php echo $rbook['MSAPP']; ?>&&loai=<?php echo $rbook['MaNhom']; ?>&&npt=<?php echo $rbook['nhaphattrien']; ?>">
                        <img class="card-img-top" src="images\<?php echo $rbook['Hinh']; ?>">
                    </a>
                    <div class="card-body">
                        <h5 class="card-text"><?php echo $rbook['TenAPP']; ?></h5>
                        <div>
                            <?php
                                            $maapp=$rbook['MSAPP'];
                                            $star = "SELECT star from ungdung where MSAPP='$maapp'";
                                            $rating1=mysqli_query($conn,$star);
                                            ?>
                            <h6>????nh gi??</h6>
                            <?php
                                            $rating=mysqli_fetch_array($rating1);
                                            for($i=0;$i<(int)$rating[0];$i++) {?>
                            <span class="fa fa-star checked"></span>
                            <?php } ?>
                            <?php for($i=0;$i<5-(int)$rating[0];$i++) {?>
                            <span class="fa fa-star"></span>
                            <?php } ?>
                        </div>
                        <div>


                            <?php if (isset($_SESSION['tenKH'])){
                                            $MSKH=$_SESSION['mskh'];
                                            $sql = "SELECT * FROM khachhang WHERE MSKH='$MSKH'";
                                            $query = mysqli_query($conn,$sql);
                                            $row = mysqli_fetch_array($query);
                                            $ls="SELECT * from lichsudownload where username ='$MSKH' and msapp='$maapp'";
                                            $thuchien = mysqli_query($conn,$ls); 
                                            $d=mysqli_num_rows($thuchien);
                                            $t='Downloaded';
                                        ?>
                            <h3 class="card-text money"><?php
                                            if($d!=0){echo $t;} else{  echo number_format($rbook['Gia'],0,".",",").'$';} 
                                            ?>
                            </h3>

                            <?php }else{?>
                            <h3 class="card-text money"><?php
                                            echo number_format($rbook['Gia'],0,".",",").'$';} 
                                            ?>
                            </h3>
                            <a
                                href="chitietungdung.php?MSAPP=<?php echo $rbook['MSAPP']; ?>&&loai=<?php echo $rbook['MaNhom']; ?>&&npt=<?php echo $rbook['nhaphattrien']; ?>">
                                <button  class="btn-app btn btn-default" title="Download" type="submit">
                                    Download
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
    <?php } ?>
    <?php } ?>
    <!--  -->
    <!--Footer-->
    <br>
    <hr>
    <?php
            include 'footer.php';
        ?>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>