@section('title','Insert Movie')
@include('test')
@include('home')
 

    <div>
        @if ($errors->any())
            <strong>{{$errors->first()}}</strong>
        @endif

        <center>
        <h3>Insert Movie</h3>
        <form enctype="multipart/form-data" action="/movie" method="post">
            @csrf
            <label for="imageInsert">Image</label>
            <input type="file" id="imageInsert" name="image">
            <label for="titleInsert">Title</label>
            <input id="titleInsert" type="text" name="title" placeholder="Title">
            <label for="descInsert">Description</label>
            <input id="descSInsert" type="text" name="description" placeholder="Description">
            <input type="submit" value="Insert">
        </form>
        <h3>Insert Episode</h3>
        <form enctype="multipart/form-data" action="/episode" method="POST">
            @csrf
            <label for="movieIDInsert">Movie ID</label>
            <input type="text" name="movieID" id="movieIDInsert" placeholder="Movie ID">
            <label for="episodeInsert">Episode</label>
            <input id="episodeInsert" type="text" name="episode" placeholder="Episode">
            <label for="titleInsert">Title</label>
            <input id="titleInsert" type="text" name="title" placeholder="Title">
            <input type="submit" value="Insert">
        </form>
    </center>
    </div>
</body>
</html>
