@section('title','Update Movie')
@include('home')
@include('test')





<h3>Update Movie</h3>
        <form enctype="multipart/form-data" action="/movie" method="POST">
            {{method_field('PUT')}}
            @csrf
            <label for="idUpdate">ID</label>
            <input type="text" name="id" id="idUpdate" placeholder="ID">
            <label for="imageUpdate">Image</label>
            <input type="file" id="imageUpdate" name="image">
            <label for="titleUpdate">Title</label>
            <input id="titleUpdate" type="text" name="title" placeholder="Title">
            <label for="descUpdate">Description</label>
            <input id="descUpdate" type="text" name="description" placeholder="Description">
            <input type="submit" value="Update">
</form>


