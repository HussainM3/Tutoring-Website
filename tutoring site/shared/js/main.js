// scroll fade in affect
document.addEventListener("DOMContentLoaded", () => {
    // variable detect when information fade in sections enter viewport
    var observer = new IntersectionObserver((entries) => { 
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add("visible"); // add visible class to information section
                observer.unobserve(entry.target); // only fade in once
            }
        });
    }, {
        threshold: 0.2 // make effect happen when 20% of section is visible
    });

    // get all information section and add transition to them
    document.querySelectorAll('.information').forEach(section => {
        observer.observe(section);
    });
});
