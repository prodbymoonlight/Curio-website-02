const section = document.querySelector("#animate");
const observer = new IntersectionObserver((entries)=> {
    console.log(entries);
    if(entries[0].isIntersecting) {
        entries[0].target.classList.add("show");
    } else {
        entries[0].target.classList.remove("show");
    }
}, {
    
})
observer.observe(section);