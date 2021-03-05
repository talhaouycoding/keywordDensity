@extends('layouts.app')
@section('content')

    <table class="table table-hover table-responsive-md">
        <thead>
            <th>Keyword</th>
            <th>Count</th>
            <th>Density</th>
        </thead>
        <tbody id="body_table">
         



        </tbody>
    </table>
    
@endsection

@section('scripts')
    <script>
        var keywords =   @json($keywords);
        var table = document.getElementById("body_table");
        for(let i = 0;i<keywords.length;i++){
           var tr = document.createElement('tr');
           var td1 = document.createElement('td');
           var td2 = document.createElement('td');
           var td3 = document.createElement('td');
           td1.appendChild(document.createTextNode(keywords[i].keyword));
           td2.appendChild(document.createTextNode(keywords[i].count));
           td3.appendChild(document.createTextNode(keywords[i].density+'%'));
           tr.appendChild(td1);
           tr.appendChild(td2);
           tr.appendChild(td3);
           table.appendChild(tr);
        }
    </script>
@endsection