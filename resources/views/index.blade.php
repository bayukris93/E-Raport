@extends('layouts/master')
@section('content')
<div class="section-header">
    <h4>Dashboard</h4>
</div>
<div class="section-body">
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis, consequatur iure? Sequi aut, odio repellat saepe esse dolor, tempora asperiores, nesciunt maiores cumque neque voluptatum numquam consequuntur adipisci minima exercitationem.</p>
    {{auth()->User()->email}}
</div>
</section>
@endsection