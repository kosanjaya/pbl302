////////// Severity Spectrum

// var reportData = {
//   users: {{ $users }},
//   report: {{ $report }},
//   approved: {{ $approved }},
//   rejected: {{ $rejected }},
//   high: {{ $high }},
//   critical: {{ $critical }},
//   medium: {{ $medium }},
//   low: {{ $low }}
// };


const severityEl = document
  .getElementById("severity-doughnut")
  .getContext("2d");

// Data
const severity = {
  critical: 200,
  high: 200,
  medium: 700,
  low: 350,
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
