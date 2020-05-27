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
        <title>Sailor | View School</title>
        <!-- Styles -->
        <style>
            html, body {
                /* color: #636b6f; */
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .school-logo{
                display:flex;
                justify-content: center;
            }
            .logo{
                width:200px;
                height:200px;
                border-radius: 50%;
                margin-bottom: 15px;
            }
            .school-data .data-item{
                cursor: pointer;
                list-style: none;
            }
            .s_info{
                border-right: 1px solid gray;
            }
            .count-text{
                color: #636b6f;
                text-transform: uppercase;
                font-family: 'Nunito', sans-serif;
                letter-spacing: .1rem;
                font-weight: 600;
                cursor: pointer;
            }
            .inner-content table{
              display: none;
            }
        </style>
    </head>
    <header class='w3-top'>
        @include('header')
    </header>
    <body class="w3-light-grey">
    <!-- Sidebar/menu -->
    @include('school.dashboardSidebar')
    <div class="w3-main"  style="margin-left:310px;margin-top:43px;margin-right:10px;">
        <header class="w3-container" style="padding-top:22px">            
            <ul class="breadcrumb">
              <li><a href="/dashboard">Dashboard</a></li>
              <li><a href="/manage/colleges">Manage Schools</a></li>
              <li><a href="">View School</a></li>
              <li><?php echo $responseData['school']->school_name ?></li>
            </ul>
        </header>
        <div class="w3-row-padding w3-margin-bottom w3-white w3-card">
            <div class="add-institute">
                <div class="w3-row">
                    <div class="w3-third s_info">
                        <div class="w3-display-container school-logo">
                            <img class="w3-margin logo "src="<?php echo $responseData['school']->school_logo?>" width="100%">
                        </div>
                        <div class="w3-container w3-text-black">
                            <h2><?php echo $responseData['school']->school_name ?></h2>
                        </div>
                        <div class="w3-container">
                            <p><i class="fa fa-map-marker fa-fw w3-margin-right w3-large w3-text-red w3-xlarge"></i><?php echo $responseData['school']->school_address?></p>
                            <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-red w3-xlarge"></i><?php echo $responseData['school']->school_email?></p>
                            <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-red w3-xlarge"></i><?php echo $responseData['school']->school_phone?></p>
                            <p><i class="fa fa-globe fa-fw w3-margin-right w3-large w3-text-red w3-xlarge"></i><?php echo $responseData['school']->school_website?></p>
                        </div>
                    </div>
                    <div class="w3-twothird s_data">
                        <div class="w3-margin">
                            <div class="w3-container">
                                <div class="w3-container data-container w3-row">
                                    <div class="w3-quarter w3-col w3-center">
                                        <div class="w3-margin-top"><i class="fa fa-share-alt w3-jumbo w3-text-blue"></i></div>
                                        <span class="w3-xxxlarge count"><?php echo count($responseData['deps']) ?></span>
                                        <div class="w3-xlarge count-text depts">Departments</div>
                                    </div>
                                    <div class="w3-quarter w3-col w3-center">
                                        <div class="w3-margin-top"><i class="fa fa-book w3-jumbo w3-text-blue"></i></div>
                                        <span class="w3-xxxlarge count"><?php echo count($responseData['classes']) ?></span>
                                        <div class="w3-xlarge count-text">Classes</div>
                                    </div>
                                    <div class="w3-quarter w3-col w3-center">
                                        <div class="w3-margin-top"><i class="fa fa-black-tie w3-jumbo w3-text-blue"></i></div>
                                        <span class="w3-xxxlarge count"><?php echo count($responseData['staff']) ?></span>
                                        <div class="w3-xlarge count-text">Staff</div>
                                    </div>
                                    <div class="w3-quarter w3-col w3-center">
                                        <div class="w3-margin-top"><i class="fa fa-graduation-cap w3-jumbo w3-text-blue"></i></div>
                                        <span class="w3-xxxlarge count"><?php echo count($responseData['students']) ?></span>
                                        <div class="w3-xlarge count-text">Students</div>
                                    </div>
                                    <div class="w3-quarter w3-col w3-center">
                                        <div class="w3-margin-top"><i class="fa fa-users w3-jumbo w3-text-blue"></i></div>
                                        <span class="w3-xxxlarge count"><?php echo count($responseData['emps']) ?></span>
                                        <div class="w3-xlarge count-text">employees</div>
                                    </div>
                                    <div class="w3-quarter w3-col w3-center">
                                        <div class="w3-margin-top"><i class="fa fa-laptop w3-jumbo w3-text-blue"></i></div>
                                        <span class="w3-xxxlarge count"><?php echo count($responseData['labs']) ?></span>
                                        <div class="w3-xlarge count-text">labs</div>
                                    </div>
                                </div>                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
    <footer class='footer w3-bottom'>
        @include('footer')
    </footer>
</html>
