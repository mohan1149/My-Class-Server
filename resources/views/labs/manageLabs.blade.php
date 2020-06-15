<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Sailor | Manage Classes</title>
        <!-- Styles -->
        <style>
            .menu{
                display:none;
            }
            h3,h4{
                color:#636b6f;
                font-weight:200 !important;
                font-family: 'Nunito', sans-serif !important;
                text-transform:uppercase;
            }
            td{
                font-weight:200 !important;
                font-family: 'Nunito', sans-serif !important;
            }
            .menu-item{
                margin-bottom: 16px;
            }
            .menu-item div{
                background:#fff;
            }
            .menu-item .fa{
                color: rgb(61, 94, 161);
            }
            .title{
                font-family: 'Nunito', sans-serif;
                font-weight:200;
                font-size:30px;
                margin-top:5px;
            }
            .active{
                display:block;
            }
            .inactive{
                display:none!important;
            }
            .active-inner{
                display:block;
            }
            .inactive-inner{
                display:none!important;
            }
            .class-show{
                margin-left:16px;
                width:90%!important;
                margin-top:5px;
                margin-bottom:5px;
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
        <header class="w3-container w3-margin" style="padding-top:22px">
          <ul class="breadcrumb">
            <li><a href="/school/dashboard">Dashboard</a></li>
            <li><a href="">Manage Labs</a></li>
          </ul>
        </header>
        <div class="w3-row-padding w3-margin-bottom w3-white w3-card">
            <div class="school-tables">
            <div>
                    <?php
                        if(count($response_data) !=0 ){
                          foreach($response_data as $school){
                              ?>
                                  <div class="w3-container w3-margin w3-accordion">
                                      <button class="w3-indigo  w3-button w3-block w3-left-align staff-show" id ="school-<?php echo $school['id']?>">
                                          <?php echo $school['school_name']; ?>
                                          <i class="fa fa-plus w3-right"></i>
                                      </button>
                                      <div class="inactive w3-table w3-bordered w3-margin w3-accordion-content content-table school-<?php echo $school['id']?>">
                                        <?php
                                            if(count($school['dept_data']) !=0){
                                                foreach ($school['dept_data'] as $dept) {
                                                ?>
                                                    <button class="w3-indigo w3-button w3-block w3-left-align class-show" id ="dept-<?php echo $dept['id']?>">
                                                        <?php echo $dept['dept_name']; ?>
                                                        <i class="fa fa-plus w3-right"></i>
                                                    </button>
                                                    <table style='text-align:center;width:90%' class="inactive-inner w3-table w3-bordered w3-margin w3-accordion-content content-table-inner dept-<?php echo $dept['id']?>">
                                                        <tr class="w3-white">
                                                            <th><i class='fa fa-laptop w3-text-purple w3-xlarge'></i> Lab Name</th>
                                                            <th><i class='fa fa-diamond w3-text-purple w3-xlarge'></i> Working Machines</th>
                                                        </tr>
                                                        <?php
                                                            if(count($dept['lab_data']) == 0){
                                                                ?>
                                                                    <tr>
                                                                        <td>
                                                                            <i class="fa fa-exclamation-triangle"></i><span> No labs are added to this department</span>
                                                                        </td>
                                                                    </tr>
                                                                <?php
                                                            }else{
                                                                if(count($dept['lab_data']) != 0){
                                                                    foreach($dept['lab_data'] as $key => $lab){
                                                                        ?>
                                                                            <tr>
                                                                                <td><?php echo $lab->name?></td>
                                                                                <td><?php echo $lab->machines?></td>
                                                                                <td><a href='/edit/lab/<?php echo base64_encode($lab->id)?>' class='w3-xlarge w3-text-blue' title='Edit'><i class="fa fa-edit"></i></a></td>                                                                                
                                                                                <td><a href='javascript:void(0)' url = "/delete/lab/<?php echo $lab->id ?>" class='w3-xlarge w3-text-red delete-button' title='Delete'><i class="fa fa-trash"></i></a></td>
                                                                            </tr>
                                                                        <?php
                                                                    }
                                                                }else{
                                                                    ?>
                                                                        <tr>
                                                                            <td>
                                                                                <p><i class="fa fa-exclamation-triangle w3-xlarge"></i>  No Lab has added. <a href="/add/lab">Click here to add</a></p>
                                                                            </td>
                                                                        </tr>
                                                                    <?php
                                                                }
                                                            }
                                                        ?>
                                                    </table>
                                                <?php
                                                }
                                            }else{
                                            ?>
                                              <div class=" w3-container w3-panel w3-red">
                                                  <p>
                                                        <i class="fa fa-exclamation-triangle w3-xumbo"></i>
                                                         No data added.
                                                  </p>
                                              </div>
                                            <?php
                                          }
                                        ?>
                                      </div>
                                  </div>
                              <?php
                          }
                        }else{
                          ?>
                              <div class="w3-panel w3-red">
                                  <p>
                                      <i class="fa fa-exclamation-triangle w3-xlarge"></i>
                                        No data added.                                        
                                  </p>
                              </div>
                          <?php
                        }
                    ?>
                </div>
            </div>
        </div>
        <!-- delete modal start -->
        <div class="w3-modal delete-modal" id="delete-modal">
            <div class="w3-modal-content w3-animate-top w3-card-4">
                <header class="w3-container w3-indigo">
                    <span onclick="document.getElementById('delete-modal').style.display='none'"
                        class="w3-button w3-xlarge w3-display-topright">&times;</span>
                    <h2>Are you sure to Delete?</h2>
                </header>
                <div class="w3-container">
                    <p class="w3-dark-text-grey w3-xlarge">Once you delete all related information will be removed from the Sailor System.</p>
                    <button class="w3-red w3-margin w3-button w3-xlarge delete-confirm">Sure! Delete</button>
                    <button class="w3-green w3-margin w3-button w3-xlarge" onclick="document.getElementById('delete-modal').style.display='none'" >Cancel</button>
                </div>
                <footer class="w3-container w3-dark-grey">
                    <p>@Sailor Sytem </p>
                </footer>
            </div>
        </div>
        <!-- end -->
    </div>
    </body>
    <footer class='footer w3-bottom'>
        @include('footer')
    </footer>
</html>
