<x-app-layout>

    <form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">

        @csrf
        <div class="mb-3">
            <label for="" class="form-label">Post Title</label>
            <input type="text" required class="form-control" name="name" id="" aria-describedby="helpId"
                placeholder="Post Title">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Post desc</label>
            <input type="text" required class="form-control" name="description" id="" aria-describedby="helpId"
                placeholder="Post Title">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Post desc</label>
            <input type="file" required class="form-control" name="image" id="" aria-describedby="helpId"
                placeholder="Post Title">
        </div>
        <button type="submit" class="btn btn-sm btn-danger">Submit</button>

    </form>
</x-app-layout>
