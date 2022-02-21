@extends('layouts.dashboard')
@section('DashboardContent')
    <section class="addTrans">
        <h1 class="title">Add a transaction</h1>
        <form action="/confirm" method="get">
            <div class="formInput">
                <label>Destination</label>
                <input type="text" name="dest" value="{{old('dest')}}">
                <span style="color:red;">@error('name') {{$message}} @enderror</span>
            </div>
            <div class="formInput">
                <label>Type</label>
                <select name="selectType" id="selT">
                    <option selected disabled></option>
                    <option value="income">Income</option>
                    <option value="accTOacc">Acount to account</option>
                    <option value="outcome">Outcome</option>
                </select>
                <span style="color:red;">@error('selectType') {{$message}} @enderror</span>
            </div>
            <div class="formInput">
                <label>Category</label>
                <select name="selectCateg" id="selC">
                    <option selected disabled></option>
                    <option value="shopping">Shopping</option>
                    <option value="insurance">Insurance</option>
                    <option value="subscription">subscription</option>
                    <option value="transfer">Transfer</option>
                </select>
                <span style="color:red;">@error('selectCateg') {{$message}} @enderror</span>
            </div>
            <div class="formInput">
                <label>Amount</label>
                <input type="text" name="amount" value="{{old('amount')}}">
                <span style="color:red;">@error('amount') {{$message}} @enderror</span>
            </div>
            <input type="submit" name="addt" value="Confirm" id="addt">
        </form>        
    </section>
@endsection
