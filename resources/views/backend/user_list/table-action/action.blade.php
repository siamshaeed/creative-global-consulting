<a type="button" class="btn btn-primary btn-icon btn-sm"
    data-placement="top" title="View Profile Details" data-original-title="Edit"
    href="{{route('userlist.show', $id)}}"
    data-title="{{__("User Details")}}">
    <i class="dripicons-preview"></i>
</a>

<a type="button" class="btn btn-info btn-icon btn-sm"
    data-placement="top" title="Appropriate university List" data-original-title="Edit"
    href="{{route('searchUniversity', $id)}}"
    data-title="{{__("User University")}}">
    <i class="bx bx-border-all"></i>
</a>
