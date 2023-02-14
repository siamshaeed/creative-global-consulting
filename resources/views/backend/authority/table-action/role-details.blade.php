@if($row->getRoleNames())
@foreach($row->getRoleNames() as $v)
    <label class="badge badge-success">{{ $v }}</label>
@endforeach
@endif