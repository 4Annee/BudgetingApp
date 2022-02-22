@extends('layouts.dashboard')
@section('DashboardContent')
    <section class="sett">
        <h1>Settings</h1>
        <div class="w-100 mt-sm-15 titlesContainer">
            <ul>
                <li><a href="/Settings">Profile</a></li>
                <li><a href="#" class="active">My Cards</a></li>
                <li><a href="/Help">Help</a></li>
                <li><a href="/About">About</a></li>
            </ul>
        </div>
        <div class="Mycards">
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
                        <img src="/images/eur.png" id="img_euro2">
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
        </div>
    </section>
@endsection