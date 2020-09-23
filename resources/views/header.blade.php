<?php
    include(app_path().'/translations/strings.php');
    $strings = $_SESSION['lang'];
?>
<!DOCTYPE html>
    <head>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="/w3.css">
        <script type="text/javascript" src="/jquery.min.js"></script>
        <script type="text/javascript" src="/master.js"></script>
        <script type="text/javascript" src="/axios.min.js"></script>
        <script src="https://www.gstatic.com/firebasejs/6.5.0/firebase-app.js"></script>
        <script src="https://www.gstatic.com/firebasejs/6.5.0/firebase-auth.js"></script>
        <script src="https://www.gstatic.com/firebasejs/6.5.0/firebase-firestore.js"></script>  
        <script src="https://www.gstatic.com/firebasejs/6.5.0/firebase-messaging.js"></script>  
        <script src="https://www.gstatic.com/firebasejs/6.5.0/firebase-storage.js"></script>
        <script>            
            var firebaseConfig = {
                apiKey: "AIzaSyC9n71Dc_LAmQlbXG3q-aJ95ER6YZ4Rtxs",
                authDomain: "sailor-server.firebaseapp.com",
                databaseURL: "https://sailor-server.firebaseio.com",
                projectId: "sailor-server",
                storageBucket: "sailor-server.appspot.com",
                messagingSenderId: "661317463566",
                appId: "1:661317463566:web:adfbc6b9ebc03adfb5d65f",
                measurementId: "G-G6C9F1EPX0"
            };            
            firebase.initializeApp(firebaseConfig);          
          </script>
        <style>
            .center-list {
                align-items: center;
                display: flex;
                justify-content: center;
                /* height:50px; */
            }
            .links > a {
                color: #fff;
                padding: 0 25px;
                font-size: 15px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
                font-family: 'Nunito', sans-serif;
            }
            ul.breadcrumb {
              padding: 10px 16px;
              list-style: none;
              background-color: #fff;
            }
            ul.breadcrumb li {
              display: inline;
              font-size: 18px;
            }
            ul.breadcrumb li+li:before {
              padding: 8px;
              color: black;
              content: "/\00a0";
            }
            ul.breadcrumb li a {
              color: #0275d8;
              text-decoration: none;
            }
            ul.breadcrumb li a:hover {
              color: #01447e;
              text-decoration: underline;
            }
            .search-container{
              width: 40vw;
              margin: 10px;
              border: 2px solid grey;
            }
            .search{
              border: none;
              width: 90%;
              padding: 10px;
            }
        </style>
    </head>
    <body>
        <div class="center-list w3-card" style='height:70px;background-color: rgb(61, 94, 161);'>
            <a href="/<?php echo $_SESSION['ins']; ?>/dashboard">
                <svg width="40" viewBox="0 0 268.2120056152344 267.4739990234375">
                    <g>
                        <svg viewBox="0 0 268.212 267.474" fill="#fff">
                            <path d="M268.212,227.412c-9.872,12.646-22.085,27.813-31.956,40.062c-1.081,0-192.286-0.576-199.788-0.576  c-0.18,0-1.909-1.188-5.197-3.566c-6.413-3.999-12.799-9.583-19.194-16.717C4.197,238.185,0.18,231.447,0,226.331L268.212,227.412z   M86.672,207.057H20.581L86.672,0.541V207.057z M253.946,207.057H110.522V0L253.946,207.057z">
                            </path>
                        </svg>
                    </g>
                </svg>
            </a>
            <div class="content">
                <div class="links ">
                    <a href="/coming/soon" class=''><?php echo $$strings['about']?></a>
                    <a href="/coming/soon" class=''><?php echo $$strings['contact']?></a>
                    <a href="/coming/soon" class=''><?php echo $$strings['faq']?></a>
                    <a href="/coming/soon" class=''><?php echo $$strings['help']?></a>
                    <a href="/coming/soon" class=''><?php echo $$strings['howtouse']?></a>
                    <a href="/logout" class='logout'><?php echo $$strings['logout']?></a>
                </div>
            </div>
        </div>
        <div class="w3-sidebar w3-bar-block w3-card w3-animate-left side-nav" style="display:none">
            <a href="/add/school" class="w3-bar-item w3-button w3-blue">Add School</a>
            <a href="/api/manage/schools" class="w3-bar-item w3-button w3-blue">Manage Schools</a>
            <a href="/api/add/class" class="w3-bar-item w3-button w3-blue">Add Class</a>
            <a href="/api/manage/class" class="w3-bar-item w3-button w3-blue">Manage Class</a>
            <a href="/api/add/staff" class="w3-bar-item w3-button w3-blue">Add Staff</a>
            <a href="/api/manage/staff" class="w3-bar-item w3-button w3-blue">Manage Staff</a>
            <a href="/api/add/class" class="w3-bar-item w3-button w3-blue">Students</a>
        </div>
    </body>
</html>
