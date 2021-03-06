<?php
    include(app_path().'/translations/strings.php');
    $strings = $_SESSION['lang'];
?>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" integrity="sha256-R4pqcOYV8lt7snxMQO/HSbVCFRPMdrhAFMH+vr9giYI=" crossorigin="anonymous"></script>
        <title>Sailor | Dashboard</title>
        <!-- Styles -->
        <style>
            .menu{
                display:none;
            }
            h3,h4{
                color:#fff;
                font-weight:600 !important;
                font-family: 'Nunito', sans-serif !important;
                text-transform:uppercase;
            }
            .app-credits{
                font-family: 'Nunito', sans-serif !important;
                color:#636b6f;
                text-transform:uppercase;
            }
            .menu-item{
                margin-bottom: 16px;
            }
            .menu-item div{
                /* background:#fff; */
            }
            .menu-item .fa{
                /* color: rgb(61, 94, 161); */
            }
            .menu-item a{
                text-decoration: none;
            }
            .w3-sidebar{
                margin-top:0px!important;
            }
        </style>
    </head>
    <header class='w3-top'>
        @include('header')
    </header>
    <body class="w3-light-grey">
        <!-- Sidebar/menu -->
        @include('school.dashboardSidebar')
        <div class="w3-main" style="margin-left:300px;">        
            <div class="w3-row-padding w3-margin-bottom" style="margin-top:80px">
                <div class="w3-quarter menu-item">
                    <div class="w3-container w3-padding-16 w3-card  w3-indigo">
                        <div class="w3-left"><i class="fa fa-bank w3-xxxlarge"></i></div>
                        <div class="w3-clear"></div>
                        <h4><a href="/add/school"><?php echo $$strings['addinsti']?> <i class="fa fa-chevron-right"></i></a></h4>
                    </div>
                </div>
                <div class="w3-quarter menu-item ">
                    <div class="w3-container w3-padding-16 w3-card w3-purple">
                        <div class="w3-left"><i class="fa fa-share-alt w3-xxxlarge"></i></div>
                        <div class="w3-clear"></div>
                        <h4><a href="/add/department"><?php echo $$strings['adddept']?> <i class="fa fa-chevron-right"></i></a></h4>
                    </div>
                </div>
                <div class="w3-quarter menu-item">
                    <div class="w3-container w3-padding-16 w3-card w3-blue">
                        <div class="w3-left"><i class="fa fa-black-tie w3-xxxlarge"></i></div>
                        <div class="w3-clear"></div>
                        <h4><a href="/add/staff"><?php echo $$strings['addstaff']?> <i class="fa fa-chevron-right"></i></a></h4>
                    </div>
                </div>
                <div class="w3-quarter menu-item">
                    <div class="w3-container w3-padding-16 w3-card w3-teal">
                        <div class="w3-left"><i class="fa fa-graduation-cap w3-xxxlarge"></i></div>
                        <div class="w3-clear"></div>
                        <h4><a href="/add/student"><?php echo $$strings['addstud']?> <i class="fa fa-chevron-right"></i></a></h4>
                    </div>
                </div>
                <div class="w3-quarter menu-item">
                    <div class="w3-container w3-padding-16 w3-card w3-blue-grey">
                        <div class="w3-left"><i class="w3-text-white fa fa-book w3-xxxlarge"></i></div>
                        <div class="w3-clear"></div>
                        <h4><a href="/add/class"><?php echo $$strings['addclass']?> <i class="fa fa-chevron-right"></i></a></h4>
                    </div>
                </div>
                <div class="w3-quarter menu-item">
                    <div class="w3-container w3-padding-16 w3-card w3-red">
                        <div class="w3-left"><i class="fa fa-laptop w3-xxxlarge"></i></div>
                        <div class="w3-clear"></div>
                        <h4><a href="/add/lab">Add Lab <i class="fa fa-chevron-right"></i></a></h4>
                    </div>
                </div>
                <div class="w3-quarter menu-item">
                    <div class="w3-container w3-padding-16 w3-card w3-green">
                        <div class="w3-left"><i class="fa fa-calendar w3-xxxlarge"></i></div>
                        <div class="w3-clear"></div>
                        <h4><a href="/add/studying/year">Add Year <i class="fa fa-chevron-right"></i></a></h4>
                    </div>
                </div>
                <div class="w3-quarter menu-item">
                    <div class="w3-container w3-padding-16 w3-card w3-deep-purple">
                        <div class="w3-left"><i class="fa fa-user-plus w3-xxxlarge"></i></div>
                        <div class="w3-clear"></div>
                        <h4><a href="/add/employee">Add Employee <i class="fa fa-chevron-right"></i></a></h4>
                    </div>
                </div>
            </div>
            <div class="w3-row">
                <div class="w3-half">
                    <canvas class="w3-white w3-card w3-margin" id="institute-canvas"></canvas>
                </div>
                <div class="w3-half">
                    <div class="w3-margin w3-white w3-card w3-padding" style="margin-left:26px!important;">
                        <h4 class="w3-text-grey">Latest Posts</h4>
                        <ul class="w3-ul w3-white">                            
                            <?php 
                                foreach ($response['posts'] as $key => $post) {                                    
                                    ?>
                                    <li class="w3-padding-16">
                                            <img alt='Avatar' src="<?php echo $post->poster_image?>" class="w3-left w3-circle w3-margin-right" style="width:45px">
                                            <a href="#" class="w3-large"><?php echo $post->post_title?></a>
                                        </li>
                                    <?php
                                }
                            ?>                            
                        </ul>
                    </div>                    
                </div>
            </div>
            <div class="w3-white w3-margin w3-card">
                <h4 class="w3-text-grey w3-margin w3-padding">Latest Notifications</h4>
                <?php
                    foreach ($response['notifs'] as $key => $notif) {                    
                        ?>
                        <div class="w3-row w3-padding">
                                <div class="w3-col m2 text-center w3-center w3-margin-top">
                                    <img class="w3-circle" src="<?php echo $notif->emp_photo?>" style="width:96px;height:96px">
                                </div>
                                <div class="w3-col m10 w3-container">
                                    <h4 class="w3-text-indigo"><?php echo $notif->emp_username; ?> <span class="w3-opacity w3-medium"><?php echo $notif->notif_date ?></span></h4>
                                    <p><?php echo $notif->notif_title?></p>
                                    <a href="#" class="w3-button w3-indigo">Read More</a>
                                </div>
                            </div>
                            <hr>
                        <?php
                    }
                ?>                
            </div>
        </div>  
    </body>
    <!-- load script for bar graph -->
    <script src="/js/getSchoolsBasicData.js"></script>
</html>
