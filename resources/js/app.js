import "./bootstrap";
import AOS from "aos";
import "aos/dist/aos.css";
import Alpine from "alpinejs";

window.Alpine = Alpine;
window.darkMode = darkMode;

Alpine.start();
// AOS.init();
AOS.init({ duration: 900, once: true, offset: 80 });
function darkMode() {
    return {
        theme: "light",
        init() {
            const stored = localStorage.getItem("theme");
            if (stored) {
                this.theme = stored;
            } else {
                this.theme = window.matchMedia("(prefers-color-scheme: dark)")
                    .matches
                    ? "dark"
                    : "light";
            }
        },
        toggle() {
            this.theme = this.theme === "dark" ? "light" : "dark";
            localStorage.setItem("theme", this.theme);
        },
    };
}

const scrollBtn = document.getElementById("scrollToTopBtn");

// Tampilkan tombol saat scroll ke bawah 100px
window.addEventListener("scroll", () => {
    if (window.scrollY > 100) {
        scrollBtn.classList.remove("opacity-0", "invisible");
        scrollBtn.classList.add("opacity-100", "visible");
    } else {
        scrollBtn.classList.add("opacity-0", "invisible");
        scrollBtn.classList.remove("opacity-100", "visible");
    }
});

// Scroll ke atas saat tombol diklik
scrollBtn.addEventListener("click", () => {
    window.scrollTo({
        top: 0,
        behavior: "smooth",
    });
});
