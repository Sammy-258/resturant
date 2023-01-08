document.getElementById("menu-small").addEventListener("click", ()=>{
    document.getElementById("small-menu-show").classList.remove("d-none");
    document.getElementById("small-menu-show").classList.add("d-block");
})
document.getElementById("close-menu").addEventListener("click", ()=>{
    document.getElementById("small-menu-show").classList.add("d-none");
    document.getElementById("small-menu-show").classList.remove("d-block");
})