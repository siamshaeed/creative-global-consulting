@if($row->graduation_level == 1)
    <strong class="text-success">Undergraduate</strong>
@elseif($row->graduation_level == 2)
    <strong class="text-info">Postgraduate</strong>
@else
    <strong class="text-info">N/A</strong>
@endif