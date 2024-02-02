

const containerReportResults = document.getElementById(
  "container-report_results"
);
////////// udah terhubung sama utility.js, jadi tinggal pake
// const containerOverviewReport = document.getElementById("finding--overview");

containerReportResults.addEventListener("click", (e) => {
  const btnResReport = e.target.closest(".btn--resReport");
  if (btnResReport) {
    console.log("clicked");
    containerOverviewReport.classList.remove("translate-x-[100%]");
    containerOverviewReport.classList.add("translate-x-0");
  }
});
