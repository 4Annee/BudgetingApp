@extends('layouts.dashboard')
@section('DashboardContent')
<section class="middle">
    <div class="flexrow flex.centered header">
        <h1>Overview</h1>
        <input type="date" class="py-sm-1 px-2 rounded bg-white text-gray-dark">
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
                    <img src="/images/btc.png">
                    <h4 class="text-dark">BTC</h4>
                </div>
                <img src="/images/visa.png" class="right">
            </div>
            <div class="middleCard flexrow">
                <h2>$827,199</h2>
                <img src="/images/chip.png" class="chip">
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
                    <img src="/images/eur.png" id="img_euro">
                    <h4 class="text-dark">EUR</h4>
                </div>
                <img src="/images/masterCard.png" class="right">
            </div>
            <div class="middleCard flexrow">
                <h2>$79,017</h2>
                <img src="/images/chip.png" class="chip">
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
            <a href="/Transactions" class="ml-3"><span class="material-icons-sharp">add</span></a>
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
                <h5 class="text-gray">$145.000.000</h5>
            </div>
        </div>
    </div>

    <div class="transactions">
        <div class="flexrow flexcol.centered mt-1 p-1 pb-0 header">
            <h3>Transactions</h3>
            <a href="/Transactions" class="ml-4"><span class="material-icons-sharp">chevron_right</span> </a>
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
                <div class="text ml-sm-2">
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
@endsection