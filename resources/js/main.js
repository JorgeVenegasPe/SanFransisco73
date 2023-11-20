// Función para añadir o quitar la clase "active" en los modales
const toggleModal = (modalIndex, action) => {
    serviceModals[modalIndex].classList[action]("active");
};

// Evento de scroll para el header pegajoso
window.addEventListener("scroll", () => {
    const header = document.querySelector("header");
    header.classList.toggle("sticky", window.scrollY > 0);
});

// Eventos para abrir modales
learnmoreBtns.forEach((learnmoreBtn, i) => {
    learnmoreBtn.addEventListener("click", () => toggleModal(i, "add"));
});

// Eventos para cerrar modales
modalCloseBtns.forEach((modalCloseBtn) => {
    modalCloseBtn.addEventListener("click", () => {
        serviceModals.forEach((modalView) => {
            modalView.classList.remove("active");
        });
    });
});

// Botón de scroll hacia arriba
const scrollToTopBtn = document.querySelector(".scrollToTop-btn");
window.addEventListener("scroll", () => {
    scrollToTopBtn.classList.toggle("active", window.scrollY > 500);
});

scrollToTopBtn.addEventListener("click", () => {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
});

// Menú de navegación
const toggleNavigation = () => navigation.classList.toggle("active");

menuBtn.addEventListener("click", toggleNavigation);
closeBtn.addEventListener("click", toggleNavigation);

navItems.forEach((navItem) => {
    navItem.addEventListener("click", toggleNavigation);
});

// Configuración de ScrollReveal
ScrollReveal({
    distance: '60px',
    duration: 2500,
    delay: 100
});

const revealConfig = {
    delay: 500,
    origin: 'left',
    interval: 200
};

// Elementos a revelar
const elementsToReveal = [
    '.home .info h2, .section-title-01, .section-title-02',
    '.home .info h3, .home .info p, .about-info .btn',
    '.home .info .btn',
    '.media-icons i, .contact-left li',
    '.home-img, .about-img',
    '.about .description, .contact-right',
    '.about .professional-list li',
    '.habilidades-description, .services-description, .contact-left h2',
    '.experience-card, .service-card, .education'
];

elementsToReveal.forEach((element) => ScrollReveal().reveal(element, revealConfig));
