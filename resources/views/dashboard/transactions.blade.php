@extends('layouts.dashboard')
@section('DashboardContent')

        <section class="middle">
            <button id="add"><a href="/add">Add</a></button>
            <table>
                <thead>
                  <tr>
                    <th>Destination</th>
                    <th>Type</th>
                    <th>Amount</th>
                    <th>Date</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Amazon</td>
                        <td>Shopping</td>
                        <td>$145.00</td>
                        <td>18-02-2022</td>
                        <td><span class="bg-success p-sm-1 rounded">Completed</span></td>
                    </tr>
                    <tr>
                        <td>Car insurance</td>
                        <td>Insurance</td>
                        <td>$1430</td>
                        <td>18-02-2022</td>
                        <td><span class="bg-warning p-sm-1 px-1 rounded">Pending</span></td>
                    </tr>
                    <tr>
                        <td>Youtube</td>
                        <td>Subscription</td>
                        <td>$145.00</td>
                        <td>18-02-2022</td>
                        <td><span class="bg-danger p-sm-1 px-1 rounded">Failed</span></td>
                    </tr>
                </tbody>
            </table>
        </section>
    
    @endsection