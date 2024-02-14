document.getElementById('square1').addEventListener('click', function() {
    window.open("https://note.com/super_hosta562/n/nb7b208e67418", "_blank") ;
});
document.getElementById('square2').addEventListener('click', function() {
    window.open("https://note.com/super_hosta562/n/nff9363fb6be2", "_blank") ;
});
document.getElementById('square3').addEventListener('click', function() {
    window.open("https://note.com/super_hosta562/n/n99b9d57ebc34", "_blank") ;
});
document.getElementById('square4').addEventListener('click', function() {
    window.open("https://note.com/super_hosta562/n/na3ea5cdc342b", "_blank") ;
});

document.getElementById('rectangle1').addEventListener('click', function() {
    window.open("https://masapon14.com/only-one", "_blank") ;
});
document.getElementById('rectangle2').addEventListener('click', function() {
    window.open("https://masapon14.com/berlitz", "_blank") ;
});
document.getElementById('rectangle3').addEventListener('click', function() {
    window.open("https://masapon14.com/rizap", "_blank") ;
});
document.getElementById('rectangle4').addEventListener('click', function() {
    window.open("https://masapon14.com/why-muyami", "_blank") ;
});

let titlehero = document.querySelector(".hero");




let options ={
    rootMargin: "0px",
    threshould:0.5,
};


let setItemActive =(entries) =>{
    console.log(entries);
    entries.forEach((entry) =>{
    if(entry.isIntersecting){
        entry.target.classList.add("active")
    }
    else{
        entry.target.classList.remove("active");
    }
    });
};


//どこにいるのか監視する。そして特定の位置に来たら//
let observer = new IntersectionObserver(setItemActive,options);

observer.observe(titlehero);







