<div class="row">
    <a href="{{ route('authority.edit',$id)}}" class="btn btn-primary btn-sm ml-2 mr-1"><i class="fas fa-edit"></i></a>

    <form action="{{route('authority.destroy',$id)}}" method="POST">
        @method('DELETE')
        @csrf

        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are You Want to Delete?')">
            <i class="fa fa-trash" aria-hidden="true"></i>
        </button>
    </form>
</div>