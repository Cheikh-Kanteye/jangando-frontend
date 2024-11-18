const menuItems = [
  {
    href: "pages/home.php",
    icon: "ri-dashboard-line",
    text: "Home",
    authorized: ["admin", "student", "parent", "teacher"],
  },
  {
    href: "pages/students.php",
    icon: "ri-group-line",
    text: "Students",
    authorized: ["admin", "teacher"],
  },
  {
    href: "pages/teachers.php",
    icon: "ri-presentation-line",
    text: "Teachers",
    authorized: ["admin", "teacher"],
  },
  {
    href: "pages/parents.php",
    icon: "ri-team-line",
    text: "Parents",
    authorized: ["admin", "teacher"],
  },
  {
    href: "pages/subjects.php",
    icon: "ri-book-line",
    text: "Subjects",
    authorized: ["admin"],
  },
  {
    href: "pages/classes.php",
    icon: "ri-home-2-line",
    text: "Classes",
    authorized: ["admin", "teacher"],
  },
  {
    href: "pages/lessons.php",
    icon: "ri-book-open-line",
    text: "Lessons",
    authorized: ["admin", "teacher"],
  },
  {
    href: "pages/exams.php",
    icon: "ri-file-list-line",
    text: "Exams",
    authorized: ["admin", "student", "parent", "teacher"],
  },
  {
    href: "pages/assignments.php",
    icon: "ri-file-copy-line",
    text: "Assignments",
    authorized: ["admin", "student", "parent", "teacher"],
  },
  {
    href: "pages/results.php",
    icon: "ri-trophy-line",
    text: "Results",
    authorized: ["admin", "student", "parent", "teacher"],
  },
  {
    href: "pages/attendance.php",
    icon: "ri-user-follow-line",
    text: "Attendance",
    authorized: ["admin", "student", "parent", "teacher"],
  },
  {
    href: "pages/events.php",
    icon: "ri-calendar-event-line",
    text: "Events",
    authorized: ["admin", "student", "parent", "teacher"],
  },
  {
    href: "pages/announcements.php",
    icon: "ri-megaphone-line",
    text: "Announcements",
    authorized: ["admin", "student", "parent", "teacher"],
  },
];

document.addEventListener("DOMContentLoaded", () => {
  const showMenu = document.getElementById("show-menu");
  const sidebar = document.querySelector(".sidebar");
  const overlay = document.querySelector(".overlay");
  const role = "admin"; //default role

  showMenu.addEventListener("click", () => {
    sidebar.classList.add("show");
  });

  overlay.addEventListener("click", () => {
    sidebar.classList.remove("show");
  });

  // Initialisation
  loadPage();
  generateMenu(role);

  function loadPage(page = "pages/home.php") {
    fetch(page)
      .then((response) => {
        if (!response.ok) {
          throw new Error("Erreur réseau");
        }
        return response.text();
      })
      .then((data) => {
        document.getElementById("content").innerHTML = data;

        // Déterminer le nom du script en fonction de la page
        const scriptName = `js/${page.split("/").pop().replace(".php", ".js")}`;

        // Vérifier et supprimer l'ancien script s'il existe, basé sur un ID unique
        const existingScript = document.getElementById("dynamic-script");
        if (existingScript) {
          existingScript.remove();
        }

        // Ajouter le nouveau script avec un ID unique
        const script = document.createElement("script");
        script.id = "dynamic-script"; // ID fixe pour tout script
        script.src = scriptName;
        document.body.appendChild(script);

        // Pour afficher ou masquer les formulaires
        toggleForm();
      })
      .catch((error) => console.error("Erreur de chargement:", error));
  }

  function generateMenu(role) {
    const menu = document.getElementById("menu");
    menu.innerHTML = ""; // Vider le menu existant

    menuItems
      .filter((item) => item.authorized.includes(role)) // Filtrer selon le rôle
      .forEach((item) => {
        const link = document.createElement("a");
        link.classList.add("link-items");
        link.href = item.href;
        link.innerHTML = `<i class="${item.icon}"></i><span>${item.text}</span>`;

        // Attacher l'événement de navigation à chaque lien
        link.addEventListener("click", (e) => {
          e.preventDefault();
          loadPage(item.href);
          sidebar.classList.remove("show"); // Masquer le sidebar après la navigation
        });

        menu.appendChild(link);
      });

    const linkItems = document.querySelectorAll(".link-items");
    linkItems[0].classList.add("active");

    linkItems.forEach((item) => {
      item.addEventListener("click", function () {
        linkItems.forEach((link) => {
          link.classList.remove("active");
        });
        if (this.textContent == "Home") {
          window.location.reload();
        }
        this.classList.add("active");
      });
    });
  }

  function toggleForm() {
    const formContainer = document.querySelector(".form-container");
    const addBtn = document.querySelector(".add-btn");
    const form = document.querySelector("form");

    if (addBtn && formContainer && form) {
      addBtn.addEventListener("click", () => {
        formContainer.classList.add("show");
      });

      formContainer.addEventListener("click", (event) => {
        if (event.target === formContainer || event.target === closeForm) {
          formContainer.classList.remove("show");
        }
      });

      form.addEventListener("click", (event) => {
        event.stopPropagation();
      });
    }
  }
});
