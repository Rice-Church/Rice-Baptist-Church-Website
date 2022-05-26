burger.addEventListener("click", () => {
    document.querySelector("nav").classList.toggle("open");
});

document.querySelectorAll(".expandable_button").forEach((button) => {
    button.addEventListener("click", () => {
        const expandable_content = button.nextElementSibling;

        button.classList.toggle("expandable_button_active");

        if (button.classList.contains("expandable_button_active")) {
            expandable_content.style.maxHeight = expandable_content.scrollHeight + "px";
        } else {
            expandable_content.style.maxHeight = 0;
        }
    });
});
