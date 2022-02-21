@extends('layouts.dashboard')
@section('CssPlaceholder')  
@endsection

@section('DashboardContent')
    <style>
        td{
            padding: 25px;
        }
    </style>

    <div style="grid-column: span 2;display:grid;grid-template-columns: 2fr 3fr">
        <div>
            <h2>Create new Account</h2>
        </div>
        <div>
            <h2>Account's List</h2>
            <table class="Table">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Balance</th>
                    <th>Type</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                    <?php
                        foreach ($accounts as $acc) {
                            echo '<tr>';
                                echo '<td>'.$acc->name.'</td>';
                                echo "<td>".$acc->balance."</td>";
                                echo "<td>".$acc->type."</td>";
                                echo '<td>'.'<a class="btn btn-primary m-1" href="#">Details</a>'.'<a class="btn btn-warning m-1" href="#">Edit</a>'.'<a class="btn btn-danger m-1" href="#">Delete</a>'.'</td>';
                            echo "</tr>";
                        }   
                    ?>
                </tbody>
            </table>
    </div>
    </div>
@endsection