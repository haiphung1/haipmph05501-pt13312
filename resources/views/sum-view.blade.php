<form action="{{ route('sum') }}" method="POST">
    @csrf
    <div class="form-group">
      <label for="">So a</label>
      <input type="number"
        class="form-control" name="n1" id="" aria-describedby="helpId" placeholder="So a">
    </div>
    <div class="form-group">
        <label for="">So b</label>
        <input type="number"
          class="form-control" name="n2" id="" aria-describedby="helpId" placeholder="So b">
    </div>
    <div class="form-group">
        <label for="">So c</label>
        <input type="number"
          class="form-control" name="n3" id="" aria-describedby="helpId" placeholder="So b">
    </div>
      <button type="submit">Giai phuong trinh bac 2</button>
</form>