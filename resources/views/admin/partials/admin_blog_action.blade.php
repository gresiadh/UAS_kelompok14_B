<a href="{{ url('/admin/blogs/' . $blog->id . '/edit') }}" class=" p-2 rounded-md bg-indigo-600 text-white text-md">
    <span class="inline-flex"><i class="bx bxs-edit mr-1"></i></span>
    Edit
</a>

<form action="{{ url('/admin/blogs/' . $blog->id) }}" class="inline-block" method="POST">
    @csrf
    @method('delete')
    <button type="submit" class="bg-red-500 text-white rounded-lg text-md p-2 ml-4"
        onclick="return confirm('{{ 'Are you sure you want to delete this user??' }}')">
        <span><i class="bx bx-trash"></i></span>
        Delete
    </button>
</form>
