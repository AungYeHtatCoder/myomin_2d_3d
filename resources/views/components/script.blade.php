<script src="{{ asset('./bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('./bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('./bootstrap/js/popper.min.js') }}"></script>
<script src="{{ asset('./script.js') }}" type="text/javascript"></script>
<script>
  document.addEventListener("DOMContentLoaded", function() {
  const hamburgerMenu = document.getElementById("hamburgerMenu");
  const body = document.body;

  hamburgerMenu.addEventListener("click", function() {
    body.classList.toggle("show-sidebar");
  });
});
</script>