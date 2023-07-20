
<h1>Compare Images</h1>
<form action="{{ route('check') }}" method="post">
    @csrf
    <input type="file" name="image1">
    <input type="file" name="image2">
    <input type="submit" value="Compare">
</form>

