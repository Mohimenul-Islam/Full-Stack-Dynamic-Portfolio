<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id = "card-desc">
        <h1>Card Title</h1>
        <p>A very short description</p>
    </div>
    <script>
        document.getElementById("card-desc").addEventListener("mouseover", function() {
    this.style.color = "red";
    this.style.backgroundColor = "yellow";
    this.style.borderRadius = "10px";
    this.style.padding = "10px";
});

document.getElementById("card-desc").addEventListener("onclick", function() {
    console.log("Card clicked!");
    this.style.color = "blue";
    this.style.backgroundColor = "yellow";
    this.style.borderRadius = "10px";
    this.style.padding = "50px";
});
    </script>
</body>
</html>