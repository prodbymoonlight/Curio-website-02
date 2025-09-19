let mouseMovement = document.documentElement;
var on = true;

function LightSwitch() {
    if(on == true) {
        on = false;
    }
    else if(on == false) {
        on = true;
    }

    console.log(on);
}

if(on == true) {
    mouseMovement.addEventListener("mousemove", (mouseInfo) => {
        mouseMovement.style.setProperty("--x", mouseInfo.clientX + "px");
        mouseMovement.style.setProperty("--y", mouseInfo.clientY + "px");
    });
}
else if (on == false) {
    mouseMovement.style += "background: transparent;";
}