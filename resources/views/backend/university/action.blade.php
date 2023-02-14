
{{--Edit--}}
<div class="row">
        <a href="{{url('university/'.$id.'/edit')}}" class="btn btn-primary btn-sm ml-2 mr-1"><i class="fas fa-edit"></i></a>

        <form action="{{route('university.destroy',[$id])}}" method="POST">
            @method('DELETE')
            @csrf

            <button type="submit" class="btn btn-sm @if($status == 1) btn-danger  @else btn-success @endif" onclick="return confirm('Are you Sure?')">
                @if($status == 1)
                    <i class="fas fa-chevron-circle-down" title="Disable"></i>
                @else
                    <i class="fas fa-chevron-circle-up" title="Enable"></i>
                @endif
            </button>
        </form>
</div>
