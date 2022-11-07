@section('title','Update Movie')
@include('home')
@include('test')

<style>
    .inp{
        width: 50%
    }
</style>


<center>


<h3>Update Movie</h3>
        <form enctype="multipart/form-data" action="/movie" method="POST">
            {{method_field('PUT')}}
            @csrf
            <div class="form-group">
                <label for="idUpdate">ID</label>
                <input type="text" name="id" id="idUpdate" placeholder="ID" class="form-control inp" required>
            </div>

            <div class="form-group">
                <label for="titleUpdate">Title</label>
                <input id="titleUpdate" type="text" name="title" placeholder="Title" class="form-control inp" required>
            </div>
            <div class="form-group">
                <label for="descUpdate">Description</label>
                <input id="descUpdate" type="text" name="description" placeholder="Description" class="form-control inp">
            </div>
            <div class="form-group">
                <br>
                <label for="imageUpdate">Image</label>
                <input type="file" id="imageUpdate" name="image">
                <input type="submit" value="Update" class="btn btn-primary">
                <br>
            </div>
            <br>

</form>
</center>


