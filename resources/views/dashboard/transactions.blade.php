@extends('layouts.dashboard')
@section('DashboardContent')

        <section class="middle">
            <button id="add"><a href="/Transactions/add">Add</a></button>
            <table>
                <thead>
                  <tr>
                    <th>Destination</th>
                    <th>Type</th>
                    <th>Category</th>
                    <th>Amount</th>
                    <th>Date</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($data as $d)  
                        <tr>
                            <td>{{$d->Destination}}</td>
                            <td>{{$d->Type}}</td>
                            <td>{{$d->Category}}</td>
                            <td>{{$d->Amount}}</td>
                            <td><script> document.write(new Date().toLocaleDateString()); </script></td>
                            <td><span class="bg-success p-sm-1 rounded">Completed</span></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </section>
    
    @endsection