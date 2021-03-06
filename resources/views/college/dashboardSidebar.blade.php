<?php
    include(app_path().'/translations/strings.php');
    $strings = $_SESSION['lang'];      
?>
    <nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:0;width:300px;margin-top:15px;" id="mySidebar"><br>
        <div class="w3-container">
            <div class="">
                <img src="https://www.w3schools.com/w3images/avatar2.png" class="w3-circle w3-margin-right" style="width:46px">
                <span >Welcome, <strong>Mohan</strong></span><br>
            </div>
            <div class="center-list user-nav">
                <a href="/college/dashboard"><i title ="Home" class="fa fa-home" style="font-size:24px;"></i></a>
                <a href="/profile" title ="Profile" ><i class="fa fa-user" style="font-size:24px;"></i></a>
                <!-- <a href="/mailbox" title ="Mailbox" ><i class="fa fa-envelope" style="font-size:24px;"></i></a> -->
                <a href="/notifications" title ="Notifcations"><i class="fa fa-bell" style="font-size:24px;"></i></a>
            </div>
        </div>
        <hr>
        <div class="w3-container">
            <h5 class="w3-xlarge"><?php echo $$strings['dashboard']?></h5>
        </div>
        <div class="w3-bar-block sidenav">
            <!-- side nav bar -->

            <!-- college -->
            <div class="w3-margin dd-outer" id="college">
                <i class="fa fa-bank w3-xlarge w3-text-blue"></i>
                <span>Colleges</span>
                <i class="fa fa-chevron-right w3-right w3-margin-right w3-small dd-toggle-icon w3-text-dark-grey"></i>
            </div>
            <div class="dd-content w3-light-grey college" id="college">
                <a class="w3-bar-item w3-button" href="/manage/colleges"><i class="fa fa-cogs fa-fw w3-large w3-text-blue"></i>&nbsp; Manage Colleges</a>                    
                <a class="w3-bar-item w3-button" href="/add/college"><i class="fa fa-plus fa-fw w3-large w3-text-blue"></i>&nbsp; Add College</a>                                        
            </div>
            <!-- departments -->
            <div class="w3-margin dd-outer" id="depts">
                <i class="fa fa-share-alt w3-xlarge w3-text-blue"></i>
                <span>Departments</span>
                <i class="fa fa-chevron-right w3-right w3-margin-right w3-small dd-toggle-icon w3-text-dark-grey"></i>
            </div>
            <div class="dd-content w3-light-grey depts" id="depts">
                <a class="w3-bar-item w3-button" href="/manage/departments"><i class="fa fa-cogs fa-fw w3-large w3-text-blue"></i>&nbsp; Manage Departments</a>                
                <a class="w3-bar-item w3-button" href="/add/department"><i class="fa fa-plus fa-fw w3-large w3-text-blue"></i>&nbsp; Add Department</a>                                        
            </div>
            <!-- classes -->
            <div class="w3-margin dd-outer" id="classes">
                <i class="fa fa-book w3-xlarge w3-text-blue"></i>
                <span>Classes</span>
                <i class="fa fa-chevron-right w3-right w3-margin-right w3-small dd-toggle-icon w3-text-dark-grey"></i>
            </div>
            <div class="dd-content w3-light-grey classes" id="classes">
                <a class="w3-bar-item w3-button" href="/manage/classes"><i class="fa fa-cogs fa-fw w3-large w3-text-blue"></i>&nbsp; Manage Classes</a>                    
                <a class="w3-bar-item w3-button" href="/add/class"><i class="fa fa-plus fa-fw w3-large w3-text-blue"></i>&nbsp; Add Class</a>                                                                                            
            </div>
            <!-- Teaching Staff -->
            <div class="w3-margin dd-outer" id="tstaff">
                <i class="fa fa-black-tie w3-xlarge w3-text-blue"></i>
                <span>Teaching staff</span>
                <i class="fa fa-chevron-right w3-right w3-margin-right w3-small dd-toggle-icon w3-text-dark-grey"></i>
            </div>
            <div class="dd-content w3-light-grey tstaff" id="tstaff">
                <a class="w3-bar-item w3-button" href="/manage/staff"><i class="fa fa-cogs fa-fw w3-large w3-text-blue"></i>&nbsp; Manage Teaching Staf</a>                    
                <a class="w3-bar-item w3-button" href="/add/staff"><i class="fa fa-plus fa-fw w3-large w3-text-blue"></i>&nbsp; Add Teaching staff</a>                                                                                            
            </div>
            <!-- employees -->
            <div class="w3-margin dd-outer" id="emps">
                <i class="fa fa-users w3-xlarge w3-text-blue"></i>
                <span>employess</span>
                <i class="fa fa-chevron-right w3-right w3-margin-right w3-small dd-toggle-icon w3-text-dark-grey"></i>
            </div>
            <div class="dd-content w3-light-grey emps" id="emps">
                <a class="w3-bar-item w3-button" href="/manage/staff"><i class="fa fa-cogs fa-fw w3-large w3-text-blue"></i>&nbsp; Manage Classes</a>                    
                <a class="w3-bar-item w3-button" href="/add/staff"><i class="fa fa-plus fa-fw w3-large w3-text-blue"></i>&nbsp; Add Class</a>                                                                                            
            </div>
            <!-- students -->
            <div class="w3-margin dd-outer" id="studs">
                <i class="fa fa-graduation-cap w3-xlarge w3-text-blue"></i>
                <span>students</span>
                <i class="fa fa-chevron-right w3-right w3-margin-right w3-small dd-toggle-icon w3-text-dark-grey"></i>
            </div>
            <div class="dd-content w3-light-grey studs" id="studs">
                <a class="w3-bar-item w3-button" href="/manage/staff"><i class="fa fa-cogs fa-fw w3-large w3-text-blue"></i>&nbsp; Manage Classes</a>                    
                <a class="w3-bar-item w3-button" href="/add/staff"><i class="fa fa-plus fa-fw w3-large w3-text-blue"></i>&nbsp; Add Class</a>                                                                                            
            </div>
            <!-- labs -->
            <div class="w3-margin dd-outer" id="labs">
                <i class="fa fa-laptop w3-xlarge w3-text-blue"></i>
                <span>Labs</span>
                <i class="fa fa-chevron-right w3-right w3-margin-right w3-small dd-toggle-icon w3-text-dark-grey"></i>
            </div>
            <div class="dd-content w3-light-grey labs" id="labs">
                <a class="w3-bar-item w3-button" href="/manage/staff"><i class="fa fa-cogs fa-fw w3-large w3-text-blue"></i>&nbsp; Manage Classes</a>                    
                <a class="w3-bar-item w3-button" href="/add/staff"><i class="fa fa-plus fa-fw w3-large w3-text-blue"></i>&nbsp; Add Class</a>                                                                                            
            </div>
            <!-- articles -->
            <div class="w3-margin dd-outer" id="articles">
                <i class="fa fa-comments w3-xlarge w3-text-blue"></i>
                <span>Articles</span>
                <i class="fa fa-chevron-right w3-right w3-margin-right w3-small dd-toggle-icon w3-text-dark-grey"></i>
            </div>
            <div class="dd-content w3-light-grey articles" id="articles">
                <a class="w3-bar-item w3-button" href="/manage/staff"><i class="fa fa-cogs fa-fw w3-large w3-text-blue"></i>&nbsp; Manage Classes</a>                    
                <a class="w3-bar-item w3-button" href="/add/staff"><i class="fa fa-plus fa-fw w3-large w3-text-blue"></i>&nbsp; Add Class</a>                                                                                            
            </div>
        
            <a href="/permissions" class="w3-bar-item w3-button w3-padding w3-xlarge"><i class="fa fa-user-secret fa-fw w3-xlarge w3-text-blue"></i>&nbsp; <?php echo 'Permissions'?></a>
            <a href="/data/import" class="w3-bar-item w3-button w3-padding w3-xlarge"><i class="fa fa-download fa-fw w3-xlarge w3-text-blue"></i>&nbsp; <?php echo 'Data Import'?></a>
            <a href="#" class="w3-bar-item w3-button w3-padding w3-xlarge"><i class="fa fa-diamond fa-fw w3-xlarge w3-text-blue"></i>&nbsp; <?php echo $$strings['payments']?></a>        
            <a href="#" class="w3-bar-item w3-button w3-padding w3-xlarge"><i class="fa fa-cloud fa-fw w3-xlarge w3-text-blue"></i>&nbsp; <?php echo 'Archives'?></a>
            <a href="/webrtc" class="w3-bar-item w3-button w3-padding w3-xlarge"><i class="fa fa-laptop fa-fw w3-xlarge w3-text-blue"></i>&nbsp; <?php echo 'Online Classes'?></a>
            <a href="#" class="w3-bar-item w3-button w3-padding w3-xlarge"><i class="fa fa-laptop fa-fw w3-xlarge w3-text-blue"></i>&nbsp; <?php echo 'Online Exams'?></a>
        </div>
    </nav>
    <style>
        .sidenav a{
            color: #636b6f!important;
            padding: 0 25px;
            font-size: 13px!important;
            font-weight: 600;
            text-decoration: none;
            text-transform: uppercase;
            font-family: 'Nunito', sans-serif;
        }
        .dd-outer span{
            color: #636b6f!important;
            padding: 0 5px;
            font-size: 17x!important;
            font-weight: 600;
            text-decoration: none;
            text-transform: uppercase;
            font-family: 'Nunito', sans-serif;
        }
        .dd-toggle-icon{
            margin-top:7px;
        }
        .user-nav .fa{
            color: #636b6f!important;
            padding:0 5px;
        }
        .menu-dd{
            margin-top: 5px;
            display: inline;
            font-size: 10px;
        }
        .dd-content{
            display:none;
        }
    </style>
