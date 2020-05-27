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
        <title>Sailor | Add Staff</title>
        <!-- Styles -->
        <style>
            html, body {
                /* color: #636b6f; */
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
            
            .form-input{
                width:60%!important;
                margin-bottom:10px;
                border-radius:30px;
                padding:4px;
                padding-left:10px;
                margin-left:2px;
                height:50px;
                font-size:20px;
                border: 2px solid #2196F3;
            }            
            .form-submit{
                color:#fff!important;
                width:50%;
                border-radius:30px;
                background-color: rgb(61, 94, 161)!important;
            }
            .add-institute{
                margin:10px;
            }
            .form-group{
                margin-bottom:5px;
                text-align: center;
            }
            
        </style>
        <script>
            window.ins_data = <?php echo json_encode($return_data); ?>
        </script>
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
            <li><a href="">Add Teaching Staff To School</a></li>
            </ul>
        </header>
        <div class="w3-row-padding w3-margin-bottom w3-white w3-card">
            <div class="add-staff">                
                <form action='/add/staff' method="POST" enctype="multipart/form-data" class="w3-margin-top">
                    @csrf
                        <div class='form-group'>
                            <span><i class='fa fa-id-badge w3-xlarge w3-text-blue'></i></span>
                            <input class="form-input" type='text' name='staff_id' placeholder='ID' >
                        </div>
                        <div class='form-group'>
                            <span><i class='fa fa-user w3-xlarge w3-text-blue'></i></span>
                            <input class="form-input" type='text' name='staffname' placeholder='staff name' >
                        </div>
                        <div class='form-group'>
                            <span><i class='fa fa-phone w3-xlarge w3-text-blue'></i></span>
                            <input  class="form-input" type='tel' placeholder='phone' name='phone'>
                        </div>
                        <div class='form-group'>
                            <span><i class='fa fa-envelope w3-xlarge w3-text-blue'></i></span>
                            <input class="form-input"  type='email' placeholder='email' name='email'>
                        </div>
                        <div class='form-group'>
                            <span><i class='fa fa-book w3-xlarge w3-text-blue'></i></span>
                            <input  class="form-input" type='text' placeholder='designation' name='designation'>
                        </div>                        
                        <div class='form-group'>
                            <span><i class='fa fa-bank w3-xlarge w3-text-blue'></i></span>
                            <select  class="form-input select-school" name='ins_id'>
                            <option value="0">School</option>
                                <?php                                
                                    foreach($return_data as $key => $ins){                                        
                                        ?>
                                            <option id="<?php echo $key; ?>" value=<?php echo $ins['ins_id'];?>><?php echo $ins['ins_name'] ?></option>
                                        <?php
                                    }
                                ?>
                            </select>
                        </div>
                        <div class='form-group'>
                            <span><i class='fa fa-share-alt w3-xlarge w3-text-blue'></i></span>
                            <select class="form-input department" name='department'>
                                <option>Department</option>
                            </select>
                        </div>
                        <div class='form-group'> 
                            <p>Date Of Joining</p>                           
                            <span><i class='fa fa-calendar w3-xlarge w3-text-blue'></i></span>
                            <input  class="form-input" type='date' name='doj'>                            
                        </div>                                               
                        <div class='form-group'>
                            <span><i class='fa fa-image w3-xlarge w3-text-blue'></i></span>
                            <input class="form-input" type='file' accept="image/*" name='profile'>
                        </div>
                        <input type="hidden" name="type" value="school">
                        <div class='form-group' style='text-align:center'>
                            <input  class="w3-button form-input form-submit" type='submit' value="Add">
                        </div>
                    </form>
            </div>
        </div>
    </div>
    </body>
    <footer class='footer w3-bottom'>
        @include('footer')
    </footer>
</html>
