</script>

<form onsubmit="return validate(this);">
  <input type="text" name="username">
  <input type="submit">
</form>

<script type="text/javascript">
function validate(form) {
  var re = /^[a-z,A-Z]+$/i;

  if (!re.test(form.foo.value)) {
    alert('Please enter only letters from a to z');
    return false;
  }
}
</script>