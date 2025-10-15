function matrixRain() {
    return {
        drops: [],
        start() {
            setInterval(() => {
                const chars = "!@#$%^*()";
                const id = Date.now() + Math.random();
                const drop = {
                    id,
                    char: chars[Math.floor(Math.random() * chars.length)],
                    left: Math.floor(Math.random() * 280),
                    size: (0.8 + Math.random() * 1.2).toFixed(2),
                    duration: (1 + Math.random()).toFixed(2),
                };
                this.drops.push(drop);

                // Hapus drop setelah 2 detik
                setTimeout(() => {
                    this.drops = this.drops.filter((d) => d.id !== id);
                }, 2000);
            }, 25);
        },
    };
}
function randomText() {
    const text = "!@#$%^*()";
    return text[Math.floor(Math.random() * text.length)];
}

function rain() {
    const cloud = document.querySelector(".cloud");
    const drop = document.createElement("div");

    // Add Tailwind classes
    drop.className =
        "absolute top-13 h-5 leading-5 text-green-500 drop-animation";

    cloud.appendChild(drop);

    const left = Math.floor(Math.random() * 300);
    const size = Math.random() * 1.5;
    const duration = Math.random() * 1;

    drop.innerText = randomText();
    drop.style.left = left + "px";
    drop.style.fontSize = 0.5 + size + "em";
    drop.style.animationDuration = 1 + duration + "s";

    setTimeout(() => {
        if (cloud.contains(drop)) {
            cloud.removeChild(drop);
        }
    }, 2000);
}

setInterval(rain, 20);

const header = document.querySelector("header");
window.addEventListener("scroll", () => {
    if (window.scrollY > 20) header.classList.add("scrolled");
    else header.classList.remove("scrolled");
});

// --- Init GLightbox (portfolio) ---
const lightbox = GLightbox({ selector: ".glightbox" });

// --- Init Swiper (testimonials) ---
const swiper = new Swiper(".mySwiper", {
    slidesPerView: 1,
    spaceBetween: 24,
    loop: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    breakpoints: {
        768: { slidesPerView: 2 },
        1024: { slidesPerView: 3 },
    },
});
