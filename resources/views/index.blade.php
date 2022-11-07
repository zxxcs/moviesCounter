@section('title','Insert Movie')
@include('test')
@include('home')

<style>
    .inp{
        width: 50%
    }
</style>
    <div>
        @if ($errors->any())
            <strong>{{$errors->first()}}</strong>
        @endif

        <center>
        <h3>Insert Movie</h3>
        <form enctype="multipart/form-data" action="/movie" method="post">
            @csrf
            <div class="form-group">
                <label for="titleInsert">Title</label>
                <input id="titleInsert" type="text" name="title" placeholder="Title" class="form-control inp" required>
            </div>
            <div class="form-group">
                <label for="descInsert">Description</label>
                <input id="descSInsert" type="text" name="description" placeholder="Description" class="form-control inp" required>
            </div>
            <br>
            <label for="imageInsert">Image</label>
            <input type="file" id="imageInsert" name="image">
            <input type="submit" value="Insert" class="btn btn-primary">
        </form>
        <br>
        <h3>Insert Episode</h3>
        <form enctype="multipart/form-data" action="/episode" method="POST">
            @csrf
            <div class="form-group">
                <label for="movieIDInsert">Movie ID</label>
                <input type="text" name="movieID" id="movieIDInsert" placeholder="Movie ID" class="form-control inp" required>
            </div>
            <div class="form-group">
                <label for="episodeInsert">Episode</label>
                <input id="episodeInsert" type="text" name="episode" placeholder="Episode" class="form-control inp" required>
            </div>
            <div class="form-group">
                <label for="titleInsert">Title</label>
                <input id="titleInsert" type="text" name="title" placeholder="Title" class="form-control inp" required>
            </div>
            <br>
            <input type="submit" value="Insert" class="btn btn-primary">
        </form>
    </center>
    </div>
</body>
</html>
