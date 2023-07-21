
<h1>Compare Images</h1><b><br></b>
<form action="{{ route('check') }}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="file" name="source_image_url" />
    <input type="file" name="target_image_url" />
    <button type="submit">Compare</button>
</form>
