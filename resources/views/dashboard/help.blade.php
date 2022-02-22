@extends('layouts.dashboard')
@section('DashboardContent')
    <section class="sett">
        <h1>Settings</h1>
        <div class="w-100 mt-sm-15 titlesContainer">
            <ul>
                <li><a href="/Settings">Profile</a></li>
                <li><a href="/Cards">My Cards</a></li>
                <li><a href="/Help" class="active">Help</a></li>
                <li><a href="/About">About</a></li>
            </ul>
        </div>
        <div class="help">
          <div class="top">
            <img src="{{asset('images/Instruction manual-pana.png')}}">
            <h1>How can we help you?</h1>
          </div>
            <p class="mt-1">
              &nbsp;&nbsp;&nbsp; This section contains answers to most frequently asked questions in order to help you find the answer to yours.
            </p>
            <h4 class="mt-2"><i>What is ESIBudgeting?</i></h4>
            <p class="mt-1">
              &nbsp;&nbsp;&nbsp; ESIBudgeting is a professional website focused on managing user bank accounts and transactions.
              It's a website where users are able to track their incomes, spendings, savings and manage
              the different cards he has.
            </p>
            <h4 class="mt-2"><i>How does it work?</i></h4>
            <p class="mt-1">
              &nbsp;&nbsp;&nbsp; ESIBudgeting is an easy-to-browse plateform. In order to be a part of the
              community, you will have to create an account first. After
              becoming an official member, you will be directed to your
              dashboard, where you will find on the left side of your page
              multiple items.
              <br>
              &nbsp;&nbsp;&nbsp; In your <i>Dashboard</i>, you will be able to see the cards you use most, beside your 
              current total balance, and the amount of money that is spent and received. You can estimate the amount of 
              money spent on each category as well as having a quick access to the recent transactions you have made.
              <br>
              &nbsp;&nbsp;&nbsp; In the <i>Accounts</i> page, you will find all of your accounts listed, which you will 
              be able to see the details of each.
              <br>
              &nbsp;&nbsp;&nbsp; You want to send money to someone or pay for your monthy subscription? No worries, just 
              click on the 'Add' button in the <i>Transactions</i> page and you will be able to manage any transaction 
              you want.
              <br>
              &nbsp;&nbsp;&nbsp; You have the possibility of getting a general view on your spendings in the <i>Stats</i> 
              page, where different graphs represent your activity.
            </p>
        </div>
    </section>
@endsection