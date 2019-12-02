<form class="" action="{{ route('update', 3 )}}" method="post>
  @csrf
  <input type="text" name="t" value="" placeholder="tittle">
  <input type="text" name="d" value="" placeholder="deskripsi">
  <input type="submit">
</form>
