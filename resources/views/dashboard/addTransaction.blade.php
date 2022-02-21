@extends('layouts.dashboard')
@section('DashboardContent')
    <section>
        <form action="" method="get" name="addT" id="add">
            <label>Destination</label>
            <input type="text" name="dest">

            <label>Type</label>
            <select name="select" id="type">
                <option value="shopping">Shopping</option>
                <option value="insurance">Insurance</option>
                <option value="subscription">Subscription</option>
                <option value="personal">Personal</option>
                <option value="business">Business</option>
            </select>

            <label>Amount</label>
            <input type="text" name="amount">

            <button type="submit" name="submit">Add</a></button>

        </form>
    </section>
@endsection
