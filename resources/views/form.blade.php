<form method="POST" action="/example">
  <div>
    <input type="text" name="username" placeholder="Nhap username...">
    <input type="hidden" name="_method" value="put">
    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
  </div>
  <button type="submit">Submit</button>
</form>