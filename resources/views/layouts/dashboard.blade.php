<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- STYLESHEET -->
    <!--<link rel="stylesheet" href="https://raw.githubusercontent.com/4Annee/CoolFrameworkCSS/main/Styles/style.css">-->
    <link rel="stylesheet" href="http://localhost/BudgetingApp/public/css/app.css">
    <link rel="stylesheet" href="http://localhost/BudgetingApp/public/coolcss/style.css">
    <link rel="stylesheet" href="http://localhost/BudgetingApp/public/coolcss/dashboardStyle.css">
    <!-- MATERIAL ICONS CDN -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <!-- GOOGLE FONTS (ROBOTO) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <title>Dashboard -</title>
</head>
<body class="font-roboto mh-100">
    <!-- NAVBAR -->
    <nav class="w-100 my-0 mx-auto">
        <div class="flexrow container2">
            <img src="http://localhost/BudgetingApp/public/images/logo.png" class="logo w-100">
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
                        <img src="http://localhost/BudgetingApp/public/images/profile.png" class="w-100">
                    </div>
                    <h5>Username</h5>
                    <span class="material-icons-sharp expand" onclick="menu()">expand_more</span>
                    <div class="menu bg-gray-dark">
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
                <a href="#" class="flexrow text-gray active">
                    <span class="material-icons-sharp ml-2">grid_view</span>
                    <h4>Dashboard</h4>
                </a>
                <a href="accounts.blade.php" class="flexrow text-gray">
                    <span class="material-icons-sharp ml-2">manage_accounts</span>
                    <h4>Accounts</h4>
                </a>
                <a href="transactions.blade.php" class="flexrow text-gray">
                    <span class="material-icons-sharp ml-2">attach_money</span>
                    <h4>Transactions</h4>
                </a>
                <a href="stats.blade.php" class="flexrow text-gray">
                    <span class="material-icons-sharp ml-2">trending_up</span>
                    <h4>Stats</h4>
                </a>   
                <a href="settings.blade.php" class="flexrow text-gray" id="last-elt">
                    <span class="material-icons-sharp ml-2">settings</span>
                    <h4>Settings</h4>
                </a>
            </div>
        </aside>

        <section class="middle">
            <div class="flexrow flex.centered header">
                <h1>Overview</h1>
                <input type="text" value="06/01/2022" disabled class="py-sm-1 px-2 rounded bg-white text-gray-dark">
            </div>

            <div class="mt-1 cards">
                <div class="card-first">
                    <div class="top">
                        <h4 class="mt-1 mb-1">Your total balance</h4>
                        <h2 class="mb-1">$5,30,250.75</h2>
                    </div>
                    <div class="btm flexrow">
                        <div class="btm1">
                            <h4><span class="material-icons-sharp text-success">north</span> $500.50</h4>
                            <h4 class="mt-sm-1">Today's Income</h4>
                        </div>
                        <div class="btm2">
                            <h4><span class="material-icons-sharp text-danger">south</span> $150.75</h4>
                            <h4 class="mt-sm-1">Today's spending</h4>
                        </div>
                    </div>
                </div>
                <!-- CARD 1 -->
                <div class="p-sm-3 rounded text-white card flexcol shadow">
                    <div class="flexrow flexcol.centered top">
                        <div class="left flexrow">
                            <img src="http://localhost/BudgetingApp/public/images/btc.png">
                            <h4 class="text-dark">BTC</h4>
                        </div>
                        <img src="http://localhost/BudgetingApp/public/images/visa.png" class="right">
                    </div>
                    <div class="middleCard flexrow">
                        <h2>$827,199</h2>
                        <img src="http://localhost/BudgetingApp/public/images/chip.png" class="chip">
                    </div>
                    <div class="bottom flexrow">
                        <div class="left">
                            <small>Card Holder</small>
                            <h5>JOHN DOE</h5>
                        </div>
                        <div class="right flexrow">
                            <div class="expiry">
                                <small>Expiry</small>
                                <h5>08/23</h5>
                            </div>
                            <div class="cvv">
                                <small>CVV</small>
                                <h5>123</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END OF CARD 1 -->
                <!-- CARD 2 -->
                <div class="p-sm-3 rounded text-white card flexcol shadow">
                    <div class="flexrow flexcol.centered top">
                        <div class="left flexrow">
                            <img src="http://localhost/BudgetingApp/public/images/eur.png" id="img_euro">
                            <h4 class="text-dark">EUR</h4>
                        </div>
                        <img src="http://localhost/BudgetingApp/public/images/masterCard.png" class="right">
                    </div>
                    <div class="middleCard flexrow">
                        <h2>$79,017</h2>
                        <img src="http://localhost/BudgetingApp/public/images/chip.png" class="chip">
                    </div>
                    <div class="bottom flexrow">
                        <div class="left">
                            <small>Card Holder</small>
                            <h5>JOHN DOE</h5>
                        </div>
                        <div class="right flexrow">
                            <div class="expiry">
                                <small>Expiry</small>
                                <h5>08/23</h5>
                            </div>
                            <div class="cvv">
                                <small>CVV</small>
                                <h5>123</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END OF CARD 2 -->
            </div>
            <div class="bg-white mt-2 rounded p-sm-3 chart_container">
                <!--<canvas id="chart" class="bg-white mt-2 rounded p-sm-3"></canvas>-->
                <canvas id="chart"></canvas>
           </div>
        </section>
            
        <section class="right">
            <div class="bg-white rounded categories">
                <div class="flexrow flexcol.centered p-1 pb-0 header">
                    <h2>Categories</h2>
                    <a href="#" class="ml-3"><span class="material-icons-sharp">add</span></a>
                </div>
                <div class="flexrow flexcol.centered p-sm-2 category">
                    <span class="material-icons-sharp p-sm-0 rounded text-white">receipt</span>
                    <div class="text ml-1">
                        <h3>Bills</h3>
                        <h5 class="text-gray">$145.000.000</h5>
                    </div>
                </div>
                <div class="flexrow flexcol.centered p-sm-2 category">
                    <span class="material-icons-sharp p-sm-0 bg-info rounded text-white">shopping_cart</span>
                    <div class="text ml-1">
                        <h3>Shopping</h3>
                        <h5 class="text-gray">$145.000.000</h5>
                    </div>
                </div>
                <div class="flexrow flexcol.centered p-sm-2 category">
                    <span class="material-icons-sharp p-sm-0 rounded text-white">subscriptions</span>
                    <div class="text ml-1">
                        <h3>Subscriptions</h3>
                        <h5 class="text-gray">$145.000.000</h5>
                    </div>
                </div>
                <div class="flexrow flexcol.centered p-sm-2 category">
                <span class="material-icons-sharp p-sm-0 bg-primary rounded text-white">category</span>
                    <div class="text ml-1">
                        <h3>Other</h3>
                        <h5 class="text-gray">$145.000.000</h55>
                    </div>
                </div>
            </div>

            <div class="transactions">
                <div class="flexrow flexcol.centered mt-1 p-1 pb-0 header">
                    <h3>Transactions</h3>
                    <a href="transactions.blade.php" class="ml-4"><span class="material-icons-sharp">chevron_right</span> </a>
                </div>
                <div class="flexrow flexcol.centered p-sm-2 transaction">
                    <div class="flexrow flexcol.centered left">
                        <span class="material-icons-sharp text-gray">person</span>
                        <div class="text ml-sm-1">
                            <h3>Jhon A</h3>
                            <h5 class="text-gray">15 Jan 2021</h5>
                        </div>
                    </div>
                    <div class="right">
                        <h4>$120.00</h4>
                    </div>
                </div>
                <div class="flexrow flexcol.centered p-sm-2 transaction">
                    <div class="flexrow flexcol.centered left">
                        <span class="material-icons-sharp  text-gray">business_center</span>
                        <div class="text ml-sm-1">
                            <h3>Academia</h3>
                            <h5 class="text-gray">15 Jan 2021</h5>
                        </div>
                    </div>
                    <div class="right">
                        <h4>$5000.00</h4>
                    </div>
                </div>
                <div class="flexrow flexcol.centered p-sm-2 transaction">
                    <div class="flexrow flexcol.centered left">
                        <span class="material-icons-sharp text-gray">person</span>
                        <div class="text ml-sm-1">
                            <h3> Steven</h3>
                            <h5 class="text-gray">15 Jan 2021</h5>
                        </div>
                    </div>
                    <div class="right">
                        <h4 class="text-warning">$500.00</h4>
                    </div>
                </div>
                <div class="flexrow flexcol.centered p-sm-2 transaction">
                    <div class="flexrow flexcol.centered left">
                        <span class="material-icons-sharp text-gray">podcasts</span>
                        <div class="text ml-sm-1">
                            <h3>Spotify</h3>
                            <h5 class="text-gray">15 Jan 2021</h5>
                        </div>
                    </div>
                    <div class="right">
                        <h4>$12.00</h4>
                    </div>
                </div>         
            </div>
        </section>
    </main>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js" integrity="sha512-TW5s0IT/IppJtu76UbysrBH9Hy/5X41OTAbQuffZFU6lQ1rdcLHzpU5BzVvr/YFykoiMYZVWlr/PX1mDcfM9Qg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="http://localhost/BudgetingApp/public/js/dash.js"></script>
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
    <!-- END OF MAIN -->
    <!-- @yield('content') ->
</body>
</html>