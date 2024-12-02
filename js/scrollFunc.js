const header = document.getElementById("header");

window.addEventListener("scroll", () => {
    const scrollPosition = window.scrollY;
    const maxScroll = document.documentElement.scrollHeight - window.innerHeight;    

    if (scrollPosition > maxScroll * 0.1) {
        header.classList.add("scrolled");
    } else {
        header.classList.remove("scrolled");
    }
});