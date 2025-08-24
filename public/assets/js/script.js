// console.log(document.getElementById("test").innerText);

tags = document.querySelector(".nav-links").children;
for (i = 0; i < tags.length; i++) {
    tags[i].addEventListener("click", function() {
        console.log(this.innerText);
    });
}

document.querySelectorAll(".title").forEach(function(element) {
    element.onclick = function() {
        this.innerHTML = `<h1>I was supposed to disappear</h1>`;
        this.style.color = "red";
        this.style.backgroundColor = "yellow";
        this.style.borderRadius = "10px";
        this.style.padding = "10px";

        avatar = document.getElementById("avatar");
    };
    
});

// document.querySelectorAll(".card-desc").forEach(function(element) {
//     element.hover = function() {
//         // this.innerHTML = `<h1>I was supposed to disappear</h1>`;
//         this.style.color = "red";
//         this.style.backgroundColor = "yellow";
//         this.style.borderRadius = "10px";
//         this.style.padding = "10px";

//         // avatar = document.getElementById("avatar");
//     };

//     elelment.onclick = function() {
//         this.innerHTML = `<h1> A detailed text box </h1>
//         <p>lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt 
//         ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nost</p>`
//     }
    
// });

document.getElementById("card-desc").addEventListener("mouseover", function() {
    this.style.color = "red";
    this.style.backgroundColor = "yellow";
    this.style.borderRadius = "10px";
    this.style.padding = "10px";
});

document.getElementById("card-desc").addEventListener("onclick", function() {
    this.innerHTML = `<h1> A detailed text box </h1>
    <p>lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt
    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>`;
    this.style.color = "blue";
    this.style.backgroundColor = "yellow";
    this.style.borderRadius = "10px";
    this.style.padding = "50px";
});