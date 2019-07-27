@extends('layouts.app')


@section('content')
<div class="container">

<h2>Rd cases</h2>

  <table class="table table-striped">
    <thead>
      <tr>
       <th>Rd ID</th>
        <th>Responsible Name</th>
        <th>address</th>
        <th>husband Name</th>
        <th>expire date</th>
      </tr>
    </thead>
    <tbody>

    @foreach ($rds as $rd)
      <tr data-href="/rd/{{$rd->id}}" style=" cursor: pointer;">
        <td>{{ $rd->id}}</td>
        <td>{{ $rd->responsible_name}}</td>
        <td>{{ $rd->address}}</td>
        <td>{{ $rd->husband_name}}</td>
        <td>{{ $rd->expire_date}}</td>

      </tr>


    @endforeach
    </tbody>
    </table>

    {{ $rds->links() }}
</div>

<script>
document.addEventListener("DOMContentLoaded", () =>{
    const rows = document.querySelectorAll("tr[data-href]");

    rows.forEach( row => {
        row.addEventListener("click", () =>{
            window.location.href = row.dataset.href;
        });
    });
});
</script>
@endsection
