<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>2D 3D Demo Project</title>
  <link href="{{ asset('./bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
  <link rel="stylesheet" href="{{ asset('./style.css') }}">
</head>

<body>
  <div class="container overflow-hidden">
    <div class="col-lg-6 col-md-10 mx-auto">
      <div class="row g-md-2">
        <!-- nav bar  -->
        @include('frontend.layouts.navbar')
        <!-- nav bar  -->
        <!-- content  -->
        <div class="main-content position-relative overflow-hidden">
          <!-- side bar  -->
          @include('frontend.layouts.sidebar')
          <!-- side bar  -->
          @yield('content')
          @include('frontend.layouts.footer')
        </div>
      </div>
    </div>
  </div>

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

  (function() {
  const fetchData = () => {
    const url = "https://api.thaistock2d.com/live";

    fetch(url)
      .then(response => {
        if (!response.ok) {
          throw new Error("Network response was not ok");
        }
        return response.json();
      })
      .then(data => {
        const updatedTime = new Date(data.live.time);
        const day = updatedTime.getDate().toString().padStart(2, "0");
        const month = (updatedTime.getMonth() + 1).toString().padStart(2, "0");
        const year = updatedTime.getFullYear();
        let hours = updatedTime.getHours();
        const minutes = updatedTime.getMinutes();
        const ampm = hours >= 12 ? "PM" : "AM";
        hours = hours % 12;
        hours = hours ? hours : 12;
        const updatedTimeFormat = `${day}-${month}-${year} ${hours}:${minutes
          .toString()
          .padStart(2, "0")}:${updatedTime
          .getSeconds()
          .toString()
          .padStart(2, "0")}${ampm}`;

        document.getElementById("live_2d").textContent = data.live.twod;
        document.getElementById(
          "live_updated_time"
        ).textContent = updatedTimeFormat;

        let newHTML = "";
        data.result.forEach(r => {
          newHTML += `
            <div class="col-12 col-md-6">
              <div class="digit-card mb-1 rounded-4 mb-2"> 
                <h5 class="text-center text-white">${r.open_time}</h5>
                <table class="table table-dark table-striped-columns">
                  <tr>
                    <td>Set</td>
                    <td>${r.set}</td>
                  </tr>
                  <tr>
                    <td>Value</td>
                    <td>${r.set}</td>
                  </tr>
                  <tr>
                    <td>2D</td>
                    <td>${r.twod}</td>
                  </tr>
                </table>
              </div>
            </div>
          `;
        });
        document.getElementById("result").innerHTML = newHTML;
      })
      .catch(error => {
        document.getElementById("result").innerHTML =
          "<div>Error fetching data</div>";
      });
  };

  setInterval(fetchData, 1000);
})();
</script>
</body>
</html>