const studentDiagramCtx = document
  .getElementById("students-diagram")
  .getContext("2d");

const attendancesDiagramCtx = document
  .getElementById("attendances-diagram")
  .getContext("2d");

const financeDiagramCtx = document
  .getElementById("finance-diagram")
  .getContext("2d");

const StudentData = {
  labels: ["Female", "Male"],
  datasets: [
    {
      label: "Students",
      data: [565, 691],
      backgroundColor: ["#ead474", "#c4ebfc"],
      hoverOffset: 4,
    },
  ],
};

const attendancesData = {
  labels: ["Mon", "Tue", "Wed", "Thu", "Fru", "Sat"],
  datasets: [
    {
      label: "Present",
      data: [65, 59, 80, 81, 56, 55, 40],
      backgroundColor: ["#ead474"],
    },
    {
      label: "Absent",
      data: [5, 2, 8, 15, 0, 1, 1],
      backgroundColor: ["#c4ebfc"],
    },
  ],
};

const financeData = {
  labels: [
    "January",
    "February",
    "March",
    "April",
    "May",
    "June",
    "July",
    "August",
    "September",
    "October",
    "November",
    "December",
  ],
  datasets: [
    {
      label: "Income",
      data: [
        4500, 4200, 4800, 4700, 4900, 5000, 5300, 5200, 5100, 5300, 5500, 5600,
      ],
      fill: false,
      borderColor: "#c4ebfc",
      backgroundColor: "#c4ebfc",
      tension: 0.1,
    },
    {
      label: "Expense",
      data: [
        3000, 3200, 3100, 3300, 3400, 3200, 3100, 3500, 3400, 3600, 3700, 3900,
      ],
      fill: false,
      borderColor: "#ead474",
      backgroundColor: "#ead474",
      tension: 0.1,
    },
  ],
};

new Chart(studentDiagramCtx, {
  type: "doughnut",
  data: StudentData,
});

new Chart(attendancesDiagramCtx, {
  type: "bar",
  data: attendancesData,
});

new Chart(financeDiagramCtx, {
  type: "line",
  data: financeData,
});

const currentDate = document.querySelector(".current-date");
const days = document.querySelector(".days");
const controlBtn = document.querySelectorAll(".control-btn");

let date = new Date(),
  currentYear = date.getFullYear(),
  currentMonth = date.getMonth();

const months = [
  "January",
  "February",
  "March",
  "April",
  "May",
  "June",
  "July",
  "August",
  "September",
  "October",
  "November",
  "December",
];

const renderCalendar = () => {
  let firstDayofMonth = new Date(currentYear, currentMonth, 1).getDay();
  let lastDateofMonth = new Date(currentYear, currentMonth + 1, 0).getDate();
  let lastDayofMonth = new Date(
    currentYear,
    currentMonth,
    lastDateofMonth
  ).getDay();
  let lastDateofLastMonth = new Date(currentYear, currentMonth, 0).getDate();
  let li = "";

  for (let i = firstDayofMonth; i > 0; i--) {
    li += `<li class="inactive">${lastDateofLastMonth - i + 1}</li>`;
  }

  for (let i = 1; i <= lastDateofMonth; i++) {
    const isToday =
      i == date.getDate() &&
      new Date().getMonth() == currentMonth &&
      currentYear == new Date().getFullYear();

    const className = isToday ? "active" : "";

    li += `<li class="${className}">${i}</li>`;
  }

  // Ajouter les jours inactifs après la fin du mois actuel
  for (let i = lastDayofMonth + 1; i <= 6; i++) {
    li += `<li class="inactive">${i - lastDayofMonth}</li>`;
  }

  days.innerHTML = li;
  currentDate.innerText = `${months[currentMonth]} ${currentYear}`;
};

renderCalendar();

controlBtn.forEach((btn) => {
  btn.addEventListener("click", () => {
    if (btn.id === "prev") {
      currentMonth--;
      if (currentMonth < 0) {
        currentMonth = 11;
        currentYear--;
      }
    } else {
      currentMonth++;
      if (currentMonth > 11) {
        currentMonth = 0;
        currentYear++;
      }
    }
    renderCalendar();
  });
});
