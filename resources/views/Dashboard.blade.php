  @extends('master.Layout_master')
  @section('content')
        <!-- Content Start -->
        <h3
          class="text-white text-[2.5rem] font-sans font-normal tracking-wider"
        >
          Dashboard
        </h3>
        <p class="text-white text-[1rem] font-sans font-thin tracking-wider">
          Key Metrics at a Glance
        </p>
        <!-- Main Unit Metrics Start -->
        <div class="flex gap-4 my-10">
          <div class="w-[14.8rem] bg-[#449693] rounded-md px-6 py-2">
            <div
              class="flex items-center gap-4 text-white text-[1rem] font-sans font-light tracking-wider py-2"
            >
              <div>
                <svg
                  class="fill-white"
                  width="18"
                  height="19"
                  viewBox="0 0 18 19"
                >
                  <path
                    d="M9 0C8.01109 0 7.04439 0.293245 6.22215 0.842652C5.3999 1.39206 4.75904 2.17295 4.3806 3.08658C4.00216 4.00021 3.90315 5.00555 4.09607 5.97545C4.289 6.94536 4.7652 7.83627 5.46447 8.53553C6.16373 9.2348 7.05464 9.711 8.02455 9.90393C8.99445 10.0969 9.99979 9.99784 10.9134 9.6194C11.827 9.24096 12.6079 8.6001 13.1573 7.77785C13.7068 6.95561 14 5.98891 14 5C14 3.67392 13.4732 2.40215 12.5355 1.46447C11.5979 0.526784 10.3261 0 9 0ZM9 8C8.40666 8 7.82664 7.82405 7.33329 7.49441C6.83994 7.16476 6.45542 6.69623 6.22836 6.14805C6.0013 5.59987 5.94189 4.99667 6.05764 4.41473C6.1734 3.83279 6.45912 3.29824 6.87868 2.87868C7.29824 2.45912 7.83279 2.1734 8.41473 2.05764C8.99667 1.94189 9.59987 2.0013 10.1481 2.22836C10.6962 2.45542 11.1648 2.83994 11.4944 3.33329C11.8241 3.82664 12 4.40666 12 5C12 5.79565 11.6839 6.55871 11.1213 7.12132C10.5587 7.68393 9.79565 8 9 8ZM18 19V18C18 16.1435 17.2625 14.363 15.9497 13.0503C14.637 11.7375 12.8565 11 11 11H7C5.14348 11 3.36301 11.7375 2.05025 13.0503C0.737498 14.363 0 16.1435 0 18V19H2V18C2 16.6739 2.52678 15.4021 3.46447 14.4645C4.40215 13.5268 5.67392 13 7 13H11C12.3261 13 13.5979 13.5268 14.5355 14.4645C15.4732 15.4021 16 16.6739 16 18V19H18Z"
                  />
                </svg>
              </div>
              Number of Users
            </div>
            <p
              class="text-white text-[1.5rem] font-sans font-medium tracking-wider"
            >
              {{ $users }}
            </p>
          </div>
          <!-- gap -->
          <div class="w-[14.8rem] bg-secondary rounded-md px-6 py-2">
            <div
              class="flex items-center gap-4 text-white text-[1rem] font-sans font-light tracking-wider py-2"
            >
              <div>
                <svg
                  class="fill-white"
                  width="20"
                  height="20"
                  viewBox="0 0 20 20"
                >
                  <path
                    d="M14.895 4.226L17.708 1.414L16.294 0L13.448 2.846C13.2171 2.67916 12.9756 2.52751 12.725 2.392C11.8867 1.94364 10.9507 1.70906 10 1.70906C9.04932 1.70906 8.11332 1.94364 7.275 2.392C7.025 2.524 6.787 2.679 6.553 2.845L3.707 0L2.293 1.414L5.106 4.226C4.52036 4.97164 4.06402 5.81029 3.756 6.707H0V8.707H2.307C2.242 9.202 2.2 9.704 2.2 10.207C2.2 10.714 2.242 11.22 2.307 11.718H0V13.718H2.753C2.766 13.757 2.774 13.798 2.787 13.836C2.975 14.391 3.208 14.929 3.482 15.436C3.526 15.517 3.577 15.591 3.623 15.67L1.293 18L2.707 19.414L4.817 17.303C5.40541 17.9605 6.10554 18.5086 6.885 18.922C7.364 19.175 7.867 19.371 8.381 19.502C9.44273 19.7747 10.5561 19.775 11.618 19.503C12.1378 19.3693 12.6399 19.1746 13.114 18.923C13.579 18.677 14.028 18.373 14.447 18.019C14.705 17.801 14.947 17.557 15.181 17.303L17.292 19.414L18.706 18L16.376 15.67C16.423 15.59 16.474 15.515 16.518 15.434C16.791 14.929 17.025 14.391 17.212 13.835C17.225 13.796 17.233 13.756 17.246 13.717H20V11.717H17.692C17.757 11.218 17.799 10.713 17.799 10.206C17.799 9.703 17.757 9.201 17.693 8.706H20V6.707H16.244C15.9359 5.81052 15.48 4.97193 14.895 4.226ZM6.681 5.455C7.126 4.897 7.641 4.462 8.209 4.161C8.75919 3.86438 9.37445 3.70909 9.9995 3.70909C10.6246 3.70909 11.2398 3.86438 11.79 4.161C12.3839 4.48248 12.9048 4.9234 13.32 5.456C13.619 5.829 13.86 6.256 14.073 6.707H5.927C6.141 6.256 6.381 5.828 6.681 5.455ZM15.8 10.207C15.8 10.729 15.758 11.251 15.674 11.76C15.595 12.25 15.475 12.733 15.319 13.196C15.1695 13.6404 14.9825 14.0713 14.76 14.484C14.5486 14.8747 14.3033 15.2462 14.027 15.594C13.76 15.927 13.467 16.23 13.158 16.492C12.848 16.753 12.519 16.976 12.179 17.156C11.839 17.336 11.484 17.473 11.122 17.566C11.082 17.576 11.04 17.58 11 17.589V11.707H9V17.588C8.96 17.579 8.918 17.575 8.878 17.565C8.517 17.472 8.161 17.335 7.821 17.155C7.481 16.975 7.152 16.752 6.843 16.491C6.52426 16.2202 6.23256 15.9191 5.972 15.592C5.69564 15.2453 5.45099 14.8745 5.241 14.484C5.01839 14.0709 4.83105 13.6397 4.681 13.195C4.52334 12.7262 4.40428 12.2452 4.325 11.757C4.16065 10.7471 4.15862 9.7175 4.319 8.707H15.68C15.759 9.198 15.8 9.702 15.8 10.207Z"
                  />
                </svg>
              </div>
              Bug Reports
            </div>
            <p
              class="text-white text-[1.5rem] font-sans font-medium tracking-wider"
            >
              {{$report}}
            </p>
          </div>
          <!-- gap -->
          <div class="w-[14.8rem] bg-secondary rounded-md px-6 py-2">
            <div
              class="flex items-center gap-4 text-white text-[1rem] font-sans font-light tracking-wider py-2"
            >
              <div>
                <svg
                  class="fill-white"
                  width="15"
                  height="12"
                  viewBox="0 0 15 12"
                >
                  <path
                    d="M4.707 8.293L1.414 5L0 6.414L4.707 11.121L14.414 1.414L13 0L4.707 8.293Z"
                  />
                </svg>
              </div>
              Approved Reports
            </div>
            <p
              class="text-white text-[1.5rem] font-sans font-medium tracking-wider"
            >
              {{$approved}}
            </p>
          </div>
          <!-- gap -->
          <div class="w-[14.8rem] bg-secondary rounded-md px-6 py-2">
            <div
              class="flex items-center gap-4 text-white text-[1rem] font-sans font-light tracking-wider py-2"
            >
              <div>
                <svg
                  class="fill-white"
                  width="12"
                  height="12"
                  viewBox="0 0 12 12"
                >
                  <path
                    d="M9.899 0L5.656 4.242L1.414 0L0 1.414L4.242 5.656L0 9.898L1.414 11.312L5.656 7.07L9.899 11.312L11.313 9.898L7.071 5.656L11.313 1.414L9.899 0Z"
                  />
                </svg>
              </div>
              Rejected Reports
            </div>
            <p
              class="text-white text-[1.5rem] font-sans font-medium tracking-wider"
            >
              {{$rejected}}
            </p>
          </div>
        </div>
        <!-- Main Unit Metrics End -->

        <h4
          class="text-white text-[1.5rem] font-sans font-light tracking-wider pb-4"
        >
          Severity Spectrum
        </h4>
        <!-- Severity Spectrum Start -->
        <section class="flex gap-4 mb-10">
          <div class="w-[46.2rem] bg-secondary rounded-2xl">
            <p
              class="text-white text-[1.2rem] text-center font-sans font-thin tracking-wider py-4"
            >
              Severity Visualization
            </p>
            <div class="flex justify-center w-full h-[20rem]">
              <div
                class="-translate-x-12 flex justify-center items-center w-[40%] h-full px-4 pb-8"
              >
                <canvas
                  class="object-contain z-10"
                  id="severity-doughnut"
                  width="100%"
                  height="100%"
                ></canvas>
              </div>
              <div
                class="flex items-center text-white text-[1rem] font-sans font-light tracking-wider"
              >
                <div class="flex flex-col gap-3 pb-6">
                  <div class="flex items-center gap-4">
                    <div class="w-20 h-4 bg-[#E31937]"></div>
                    <p>Critical</p>
                  </div>
                  <div class="flex items-center gap-4">
                    <div class="w-20 h-4 bg-[#FF9900]"></div>
                    <p>High</p>
                  </div>
                  <div class="flex items-center gap-4">
                    <div class="w-20 h-4 bg-[#FFE417]"></div>
                    <p>Medium</p>
                  </div>
                  <div class="flex items-center gap-4">
                    <div class="w-20 h-4 bg-[#25D366]"></div>
                    <p>Low</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- severity metrics -->
          <div class="flex flex-col gap-4">
            <div class="flex gap-4">
              <div class="w-[14.8rem] bg-secondary rounded-md px-6 py-2">
                <div
                  class="flex items-center gap-4 text-white text-[1rem] font-sans font-light tracking-wider py-2"
                >
                  Severity :
                  <span class="text-[#E31937] font-medium">CRITICAL</span>
                </div>
                <p
                  class="text-white text-[1.5rem] font-sans font-medium tracking-wider"
                >
                  {{$critical}}
                </p>
              </div>
              <div class="w-[14.8rem] bg-secondary rounded-md px-6 py-2">
                <div
                  class="flex items-center gap-4 text-white text-[1rem] font-sans font-light tracking-wider py-2"
                >
                  Severity :
                  <span class="text-[#FF9900] font-medium">HIGH</span>
                </div>
                <p
                  class="text-white text-[1.5rem] font-sans font-medium tracking-wider"
                >
                  {{ $high }}
                </p>
              </div>
            </div>
            <div class="flex gap-4">
              <div class="w-[14.8rem] bg-secondary rounded-md px-6 py-2">
                <div
                  class="flex items-center gap-4 text-white text-[1rem] font-sans font-light tracking-wider py-2"
                >
                  Severity :
                  <span class="text-[#FFE417] font-medium">MEDIUM</span>
                </div>
                <p
                  class="text-white text-[1.5rem] font-sans font-medium tracking-wider"
                >
                  {{ $medium }}
                </p>
              </div>
              <div class="w-[14.8rem] bg-secondary rounded-md px-6 py-2">
                <div
                  class="flex items-center gap-4 text-white text-[1rem] font-sans font-light tracking-wider py-2"
                >
                  Severity : <span class="text-[#25D366] font-medium">LOW</span>
                </div>
                <p
                  class="text-white text-[1.5rem] font-sans font-medium tracking-wider"
                >
                  {{$low}}
                </p>
              </div>
            </div>
          </div>
        </section>
        <!-- Severity Spectrum End -->

        <h4
          class="text-white text-[1.5rem] font-sans font-light tracking-wider pb-4"
        >
          Report Status Analitics
        </h4>
        <section class="flex items-start flex-wrap gap-4">
          <!-- Status Report Daily Start -->
          <div class="w-[58rem] bg-secondary rounded-2xl px-8 pb-8">
            <p
              class="text-white text-[1.2rem] text-center font-sans font-thin tracking-wider py-4"
            >
              Reports per Day
            </p>
            <!-- Status Report Daily Metrics -->
            <div class="w-full h-[24rem]">
              <canvas
                class="object-contain w-full z-10"
                id="status-line"
                width="100%"
                height="100%"
              ></canvas>
            </div>
          </div>
          <!-- Status Report Daily End -->
          <!-- Status Report Hourly Start -->
          <div class="w-[40rem] bg-secondary rounded-2xl px-8 pb-8">
            <p
              class="text-white text-[1.2rem] text-center font-sans font-thin tracking-wider py-4"
            >
              Reports per Hourly
            </p>
            <!-- Status Report Hourly Metrics -->
            <div class="w-full h-[16.5rem]">
              <canvas
                class="object-contain w-full z-10"
                id="status-bar"
                width="100%"
                height="100%"
              ></canvas>
            </div>
          </div>
    <script src="node_modules/chart.js/dist/chart.umd.js"></script>
    <!-- <script src="script/js/app/dashboard/metrics.js" type="text/javascript"></script> -->
    <script>
      // var CRITICAL =  echo json_encode($critical);
      var CRITICAL = @json($critical);
      var HIGH = @json($high);
      var MEDIUM = @json($medium);
      var LOW = @json($low);
      
      const severityEl = document
        .getElementById("severity-doughnut")
        .getContext("2d");

      // Data
      const severity = {
        critical: CRITICAL,
        high: HIGH,
        medium: MEDIUM,
        low: LOW,
      };

      const dataSeverity = [
        { severity: severity.critical, color: "#E31937" },
        { severity: severity.high, color: "#FF9900" },
        { severity: severity.medium, color: "#FFE417" },
        { severity: severity.low, color: "#25D366" },
      ];

      const setupSeverity = {
        datasets: [
          {
            data: dataSeverity.map((data) => data.severity),
            backgroundColor: dataSeverity.map((data) => data.color),
            hoverOffset: 15,
            borderColor: "rgb(0,0,0,0)",
          },
        ],
      };

      const doughnutMetrics = new Chart(severityEl, {
        type: "doughnut",
        data: setupSeverity,
      });

      ////////// Report Status Analitics [Daily]
      const statusLineEl = document.getElementById("status-line").getContext("2d");

      // Data
      const statusApprovedDaily = {
        senin: 100,
        selasa: 20,
        rabu: 35,
        kamis: 65,
        jumat: 50,
        sabtu: 40,
        minggu: 15,
      };

      const statusRejectedDaily = {
        senin: 20,
        selasa: 30,
        rabu: 45,
        kamis: 35,
        jumat: 55,
        sabtu: 40,
        minggu: 20,
      };

      const dataStatusDaily = [
        { approved: statusApprovedDaily.senin, rejected: statusRejectedDaily.senin },
        {
          approved: statusApprovedDaily.selasa,
          rejected: statusRejectedDaily.selasa,
        },
        { approved: statusApprovedDaily.rabu, rejected: statusRejectedDaily.rabu },
        { approved: statusApprovedDaily.kamis, rejected: statusRejectedDaily.kamis },
        { approved: statusApprovedDaily.jumat, rejected: statusRejectedDaily.jumat },
        { approved: statusApprovedDaily.sabtu, rejected: statusRejectedDaily.sabtu },
        {
          approved: statusApprovedDaily.minggu,
          rejected: statusRejectedDaily.minggu,
        },
      ];

      const statusLine = {
        labels: ["Senin", "Selasa", "Rabu", "Kamis", "Jum'at", "Sabtu", "Minggu"],
        datasets: [
          {
            label: "Approved",
            data: dataStatusDaily.map((data) => data.approved),
            fill: false,
            backgroundColor: "#25D366",
            borderColor: "#25D366",
            tension: 0.1,
          },
          {
            label: "Rejected",
            data: dataStatusDaily.map((data) => data.rejected),
            fill: false,
            backgroundColor: "#E31937",
            borderColor: "#E31937",
            tension: 0.1,
          },
        ],
      };

      const lineMetrics = new Chart(statusLineEl, {
        type: "line",
        data: statusLine,
        options: {
          responsive: true,
          maintainAspectRatio: false,
          scales: {
            x: {
              grid: {
                color: "#4E4E4E",
              },
              ticks: {
                color: "#EBF0F9",
              },
            },
            y: {
              grid: {
                color: "#4E4E4E",
              },
              ticks: {
                color: "#EBF0F9",
              },
            },
          },
        },
      });

      ////////// Report Status Analitics [Hourly]
      const statusBarEl = document.getElementById("status-bar").getContext("2d");

      // Data
      const statusApprovedHourly = {
        twelveAM: 100,
        threeAM: 20,
        sixAM: 45,
        nineAM: 60,
        twelvePM: 75,
        threePM: 30,
        sixPM: 35,
        ninePM: 70,
      };

      const statusRejectedHourly = {
        twelveAM: 100,
        threeAM: 20,
        sixAM: 45,
        nineAM: 60,
        twelvePM: 75,
        threePM: 30,
        sixPM: 35,
        ninePM: 70,
      };

      const dataStatusHourly = [
        {
          approved: statusApprovedHourly.twelveAM,
          rejected: statusRejectedHourly.twelveAM,
        },
        {
          approved: statusApprovedHourly.threeAM,
          rejected: statusRejectedHourly.threeAM,
        },
        {
          approved: statusApprovedHourly.sixAM,
          rejected: statusRejectedHourly.sixAM,
        },
        {
          approved: statusApprovedHourly.nineAM,
          rejected: statusRejectedHourly.nineAM,
        },
        {
          approved: statusApprovedHourly.twelvePM,
          rejected: statusRejectedHourly.twelvePM,
        },
        {
          approved: statusApprovedHourly.threePM,
          rejected: statusRejectedHourly.threePM,
        },
        {
          approved: statusApprovedHourly.sixPM,
          rejected: statusRejectedHourly.sixPM,
        },
        {
          approved: statusApprovedHourly.ninePM,
          rejected: statusRejectedHourly.ninePM,
        },
      ];

      const statusBar = {
        labels: [
          "00.00",
          "03.00",
          "06.00",
          "09.00",
          "12.00",
          "15.00",
          "18.00",
          "21.00",
        ],
        datasets: [
          {
            label: "Approved",
            data: dataStatusHourly.map((data) => data.approved),
            backgroundColor: "rgba(37, 211, 102, .3)",
            borderColor: "rgba(37, 211, 102, 1)",
            borderWidth: 1,
          },
          {
            label: "Rejected",
            data: dataStatusHourly.map((data) => data.rejected),
            backgroundColor: "rgba(227, 25, 55, .3)",
            borderColor: "rgba(227, 25, 55, 1)",
            borderWidth: 1,
          },
        ],
      };

      const barMetrics = new Chart(statusBarEl, {
        type: "bar",
        data: statusBar,
        options: {
          responsive: true,
          maintainAspectRatio: false,
          scales: {
            x: {
              grid: {
                color: "#4E4E4E",
              },
              ticks: {
                color: "#EBF0F9",
              },
            },
            y: {
              grid: {
                color: "#4E4E4E",
              },
              ticks: {
                color: "#EBF0F9",
              },
            },
          },
        },
      });

    </script>
@endsection