<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="../css/app.css"> -->

    <style>
        body{
            padding:0;
            margin:0;
            padding-left:5%; 
            padding-right: 5%;
        }
        .flex{
            display: flex;
        }
        .center{
            justify-content: center;
            flex-wrap: wrap;
            align-items: center;
            width: 100%;
        }
        .space_between{
            display: flex;
            justify-content: space-between;
        }
        .align{
            flex-wrap: wrap;
            align-content : center;
        }
        .flex h3{
            padding: 10px;
        }
        a{
            text-decoration: none;
        }
    </style>
</head>
<body>
    <nav >
        <div class="flex align">
            <div id = "avatar" class="flex center"><img src="{{asset('assets/images/mohimenul.jpeg')}}" alt="" style="height:300px"></div>
            <div class = "flex center nav-links">
                <h3><a href="#">Home</a></h3>
                <h3><a href="#">Work</a></h3>
                <h3><a href="#">Experience</a></h3>
                <h3><a href="#">Contact</a></h3>
            </div>
        </div>
    </nav>

    <!-- dash -->
    <section class = "title">
        <h1>Hi, there</h1>
        <h1>This is Mohimenul Islam</h1>
        <h3>Software Engineer</h3>
        
    </section>

    <!-- my Expertise -->
    <section>
        <div>
            <h1>Experience</h1>
            <div>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam numquam et quo ad aperiam laboriosam aliquam sunt consequuntur reiciendis est, repellat similique non deleniti aut ex velit alias expedita? Autem!
            </div>
        </div>
    </section>
    <script src="{{asset('assets/js/script.js')}}"></script>
</body>
</html>