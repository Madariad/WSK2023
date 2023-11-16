@extends("Layouts.app")
@section("content")
    
<div class="h-100 d-flex align-items-center justify-content-center bg-dark">

    <form class="text-light w-25 d-flex flex-column" action="{{ route('workspace.store') }}" method="POST">
        @csrf
        <h2>Create Workspace</h2>
        <div class="form-group my-4">
            <label for="title">Workspace title</label>
            <input type="text" name="title" id="description" class="form-control" placeholder="title">
            @error('title')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group my-4">
            <label for="description">Workspace description</label>
            <input type="text" name="description" id="description" class="form-control" placeholder="Description">
            @error('description')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="d-flex justify-content-between">
            <a href="{{ route('workspace.index') }}" type="button" class="btn btn-danger">
                Cancel
            </a>
            <button type="submit" class="btn btn-primary ">
                Create Workspace
            </button>
        </div>
    </form>

</div>
@endsection