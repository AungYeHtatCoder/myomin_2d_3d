<!DOCTYPE html>
<html lang="en">

<x-head />

<body>
  <div class="container overflow-hidden">
    <div class="col-lg-6 col-md-10 mx-auto">
      <div class="row g-md-2">
        <!-- nav bar  -->
        <x-navbar />
        <!-- nav bar  -->
        <!-- content  -->
        <div class="main-content position-relative overflow-hidden z-3">
          <!-- side bar  -->
          <x-sidebar />
          <!-- side bar  -->
          {{ $slot }}
          <x-footer />
        </div>
      </div>
    </div>
  </div>

  <x-script />
</body>
</html>