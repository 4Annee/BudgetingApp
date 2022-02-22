@extends('layouts.dashboard')
@section('CssPlaceholder')  
<script src="/js/jquery-3.6.0.js"></script>
<style>
    .formdiv{
        display: flex;
        flex-direction: column;
    }
    input{
        padding: 8px 1em;
        margin-top: 4px;
        border-radius: .6em;
    }
    .AccountButton{
        background-color: cornflowerblue;
    }
    tr.hidden{
        display: none;
    }
    .AccountButton:hover{
        cursor: pointer;
        background-color: rgb(58, 113, 214);
    }
</style>
@endsection

@section('DashboardContent')
    <div style="grid-column: span 2;display:grid;grid-template-columns: 2fr 3fr">
        <div class="m-1  pr-sm-1 div1">
            <h2 class="mb-1">Create new Account</h2>
             <form action="/Accounts/Create" method="POST">
                @csrf
                <div class="formdiv">
                    <label for="accname">Account Name</label>
                    <input required class="mb-1" name="accname" type="text">
                    <label for="acctype">Account Type</label>
                    <input required class="mb-1" name="acctype" type="text">
                    <label for="accBalance">Initial Balance</label>
                    <input required class="mb-2" name="accBalance" type="number">
                    <input type="submit" class="AccountButton" value="Create Account">
                </div>
            </form>
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
                    @foreach($accounts as $acc)
                        <tr id="acc{{$acc->id}}">
                            <td>{{$acc->name}}</td>
                            <td>{{$acc->balance}}</td>
                            <td>{{$acc->type}}</td>
                            <td><a class="btn btn-primary m-1" href="#">Details</a><a class="btn btn-warning m-1" href="#">Edit</a><button class="btn btn-danger m-1 showdel" onclick="showdel(event)" href="#">Delete</button></td>
                        </tr>
                        <tr id="tr{{$acc->id}}" class="hidden">
                            <td colspan=4>Are You Sure You Want To Delete this Account<button class="btn btn-danger delete" type="button" id="{{$acc->id}}">Delete</button><button class="btn btn-secondary cancel" type="button" id="c{{$acc->id}}">Cancel</button></td>
                        </tr>
                    @endforeach   
                    
                    
                </tbody>
            </table>
    </div>
    </div>


@endsection

@section('scriptContent')
<script>
    $.ready(()=>{
        
        showdel(ev){
            $('tr'+ev.target.id).css('display','block')
        }

        $('button.showdel').on("click",function(){
            alert(this.id);
        });
        $('button.showdel').on("click",function(){
            alert(this.id);
        });
    });
    var buttons = document.ready(()=>{
        querySelectorAll("button.delete");
        buttons.forEach(button => {
            button.onclick=DeleteElement(this.id);
        });
    });
    showdel(ev){
        $('tr'+ev.target.id).css('display','block')
    }
    DeleteElement(id){
        alert(id);
    }
</script>
@endsection