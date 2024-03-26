<a href="{{ route('customers.edit', $id) }}" class="btn btn-primary">
    <i class="bi bi-pencil"></i>
</a>

<a href="{{ route('customers.show', $id) }}" class="btn btn-info">
    <i class="bi bi-eye text-white"></i>
</a>

<form action="{{ route('customers.destroy', $id) }}" method="POST" style="display: inline;">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">
        <i class="bi bi-trash3"></i>
    </button>
</form>
