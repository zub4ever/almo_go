<form action="{{ route('check') }}" method="post" enctype="multipart/form-data">
    @csrf

    <input type="file" name="image1" />
    <input type="file" name="image2" />

    <button type="submit">Compare</button>
</form>
