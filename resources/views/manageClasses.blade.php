
<?php
//print_r($classes);exit;
?>
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
        </style>
    </head>
    <header class='w3-top'>
        @include('header')
    </header>
    <body class="w3-light-grey">
    <!-- Sidebar/menu -->
    @include('dashboardSidebar')
    <div class="w3-main"  style="margin-left:310px;margin-top:43px;margin-right:10px;">
        <header class="w3-container w3-margin" style="padding-top:22px">
            <a class=""><i class="fa fa-cogs w3-text-blue w3-xlarge"></i> Manage Class</a>
            <a href = "/add/class"class="w3-button"><i class="fa fa-plus w3-text-blue"></i> Add Class</a>
        </header>
        <div class="w3-row-padding w3-margin-bottom w3-white w3-card">
            <div class="school-tables">
            <div>
                    <?php
                        foreach($classes as $employee){
                            ?>
                                <div class="w3-container w3-margin w3-accordion">
                                    <button class="w3-indigo  w3-button w3-block w3-left-align staff-show" id ="school-<?php echo $employee[0]->id?>">
                                        <?php echo $employee[0]->school_name; ?>
                                        <i class="fa fa-plus w3-right"></i>
                                    </button>
                                    <table width='100%' style='text-align:center' class="inactive w3-table w3-margin w3-accordion-content content-table school-<?php echo $employee[0]->id?>">
                                        <tr class="w3-white">
                                            <th><i class='fa fa-bank w3-text-purple w3-xlarge'></i> Class</th>
                                            <th><i class='fa fa-book w3-text-purple w3-xlarge'></i> Subjects</th>
                                            <th><i class='fa fa-user w3-text-purple w3-xlarge'></i> Class Teacher</th>
                                            <th><i class='fa fa-target w3-text-purple w3-xlarge'></i> Class Strength</th>
                                        </tr>
                                        <?php
                                            foreach($employee as $employee_data){
                                                ?>
                                                    <tr>
                                                        <td><?php echo $employee_data->value?></td>
                                                        <td><?php echo $employee_data->num_subjects?></td>
                                                        <td><?php echo 'soon';//echo $employee_data->class_teache?></td>
                                                        <td><?php echo 'soon'?></td>
                                                        <td><a type='button' class='w3-button w3-blue' value='Edit'>Edit</a></td>
                                                        <td><a type='button' class='w3-button w3-purple' value='Delete'>Subjects</a></td>
                                                        <td><a type='button' class='w3-button w3-indigo' value='Delete'>Timetable</a></td>
                                                        <td><a type='button' class='w3-button w3-red' value='Delete'>Delete</a></td>
                                                    </tr>
                                                <?php
                                            }
                                        ?>
                                    </table>
                                </div>
                            <?php
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
    </body>
    <footer class='footer w3-bottom'>
        @include('footer')
    </footer>
</html>
