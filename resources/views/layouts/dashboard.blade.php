<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- STYLESHEET -->
    <!--<link rel="stylesheet" href="https://raw.githubusercontent.com/4Annee/CoolFrameworkCSS/main/Styles/style.css">-->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('coolcss/style.css')}}">
    <link rel="stylesheet" href="{{asset('coolcss/dashboardStyle.css')}}">
    @yield('CssPlaceholder')
    <!-- MATERIAL ICONS CDN -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <!-- GOOGLE FONTS (ROBOTO) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <title>Dashboard - {{$page}}</title>
</head>
<body class="font-roboto mh-100">
    <!-- NAVBAR -->
    <nav class="w-100 my-0 mx-auto">
        <div class="flexrow container2">
            <img src="{{asset('images/logo.png')}}" class="logo w-100">
            <div class="bg-light rounded flexrow text-gray-light search-bar">
                <span class="material-icons-sharp">search</span>
                <input type="search" placeholder="Search" class="text-dark bg-light w-100">
            </div>
            <div class="flexrow profile-area">
                <div class="flexrow rounded p-sm-1 theme-btn ">
                    <span class="material-icons-sharp" id="theme">invert_colors</span>
                </div>
                <div class="flexrow profile">
                    <div class="profile-photo">
                        <img src="/images/profile.png" class="w-100">
                    </div>
                    <h5>Username</h5>
                    <span class="material-icons-sharp expand" onclick="menu()">expand_more</span>
                    <div class="menu bg-dark">
                        <ul>
                            <li>
                              <span class="material-icons-sharp">person</span>
                              <a href="#"  class="pl-1">Profile</a>
                            </li>
                            <li>
                              <span class="material-icons-sharp">logout</span>
                              <a href="#" class="pl-1">Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <button>
                    <span class="material-icons-sharp">menu</span>
                </button>
            </div>
        </div>
    </nav>
    <!-- END OF NAVBAR -->

    <!-- MAIN -->
    <main class="mt-1 mx-auto mb-4">
        <aside class="pt-1">
            <button id="close-btn">
                <span class="material-icons-sharp">close</span>
            </button>
            <div class="sidebar">
                <a href="/Dashboard" class="flexrow text-gray {{$page=='Index'?'active':''}}">
                    <span class="material-icons-sharp ml-2">grid_view</span>
                    <h4>Dashboard</h4>
                </a>
                <a href="/Accounts" class="flexrow text-gray {{$page=='Accounts'?'active':''}}">
                    <span class="material-icons-sharp ml-2">manage_accounts</span>
                    <h4>Accounts</h4>
                </a>
                <a href="/Transactions" class="flexrow text-gray {{$page=='Transactions'?'active':''}}">
                    <span class="material-icons-sharp ml-2">attach_money</span>
                    <h4>Transactions</h4>
                </a>
                <a href="/Stats" class="flexrow text-gray {{$page=='Stats'?'active':''}}">
                    <span class="material-icons-sharp ml-2">trending_up</span>
                    <h4>Stats</h4>
                </a>   
                <a href="/Settings" class="flexrow text-gray {{$page=='Settings'?'active':''}}" id="last-elt">
                    <span class="material-icons-sharp ml-2">settings</span>
                    <h4>Settings</h4>
                </a>
            </div>
        </aside>

        @yield('DashboardContent')
    </main>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js" integrity="sha512-TW5s0IT/IppJtu76UbysrBH9Hy/5X41OTAbQuffZFU6lQ1rdcLHzpU5BzVvr/YFykoiMYZVWlr/PX1mDcfM9Qg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="/js/dash.js"></script>
    <script>
        function menu() {
            const menu = document.querySelector(".menu");
            menu.classList.toggle("active");
        }
        var theme_btn = document.querySelector(".theme-btn");
        var navBar = document.querySelector("nav");
        theme_btn.addEventListener("click", () => {
            document.body.classList.toggle('dark');
            navBar.classList.toggle('dark');
            theme_btn.classList.toggle('dark');
        })
    </script>
</body>
</html>