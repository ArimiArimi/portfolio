<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Your Portfolio Title</title>

    <style>
        body {
            padding: 0;
            margin: 0;
        }

        nav {
            position: fixed;
            z-index: 10;
            left: 0;
            right: 0;
            top: 0;
            font-family: 'Montserrat', sans-serif;
            padding: 0 5%;
            height: 70px;
            background-color: #f8f8f8;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        }

        nav .logo {
            float: left;
            width: 20%;
            height: 100%;
            display: flex;
            align-items: center;
            font-size: 24px;
            color: #333;
        }

        nav .links {
            float: right;
            padding: 0;
            margin: 0;
            width: 60% auto;
            height: 100%;
            display: flex;
            justify-content: space-around;
            align-items: center;
        }

        nav .links li {
            list-style: none;
            padding: 0;
        }

        nav .links a {
            display: block;
            padding: 20px;
            font-size: 20px;
            font-weight: bold;
            color: #333;
            text-decoration: none;
            overflow: hidden;
        }

        nav .links a:hover,
        nav .links li.active-link a {
            border-bottom: 5px solid;
        }

        #nav-toggle {
            position: absolute;
            top: -100px;
        }

        nav .icon-burger {
            display: none;
            position: absolute;
            right: 5%;
            top: 50%;
            transform: translateY(-50%);
        }

        nav .icon-burger .line {
            width: 30px;
            height: 3px;
            background-color: #333;
            margin: 3px;
            border-radius: 3px;
            transition: all .3s ease-in-out;
        }

        @media screen and (max-width: 940px) {
            .lipak_logo {
                height: 70px !important;
            }

            nav .links a {
                padding: 10px;
                font-size: 16px;
            }
        }

        @media screen and (max-width: 768px) {
            nav {
                height: 50px;
            }

            nav .logo {
                width: auto;
                justify-content: center;
            }

            .lipak_logo {
                height: 50px !important;
            }

            nav .links {
                float: none;
                position: fixed;
                z-index: 9;
                left: 0;
                right: 0;
                top: 50px;
                bottom: 100%;
                width: auto;
                height: auto;
                flex-direction: column;
                justify-content: space-evenly;
                background-color: rgba(0,0,0,.8);
                overflow: hidden;
                box-sizing: border-box;
                transition: all .5s ease-in-out;
            }

            nav .links a {
                font-size: 20px;
                color: #fff;
            }

            nav .links a:hover {
                transform: scale(1.1);
                background-color: rgba(0,0,0,.8);
            }

            nav :checked ~ .links {
                bottom: 0;
            }

            nav .icon-burger {
                display: block;
            }

            nav :checked ~ .icon-burger .line:nth-child(1) {
                transform: translateY(10px) rotate(225deg);
            }

            nav :checked ~ .icon-burger .line:nth-child(3){
                transform: translateY(-10px) rotate(-225deg);
            }

            nav :checked ~ .icon-burger .line:nth-child(2) {
                opacity: 0;
            }
        }
    </style>
</head>
<body>

    <nav>
        <input id="nav-toggle" type="checkbox">
        <div class="logo"><a href="index.php"><img src="img/logo.png" style="width: auto; height: 70px; padding-top: 10px;" class="lipak_logo"></a></div>
        <ul class="links">
            <li class="active-link"><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#what-i-do">What I Do</a></li>
            <li><a href="#portfolio">Portfolio</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>

        <label for="nav-toggle" class="icon-burger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </label>
    </nav>

    <script>
        // JavaScript to highlight active link on scroll
        document.addEventListener("DOMContentLoaded", function () {
            const sections = document.querySelectorAll("section"); // Adjust this selector based on your section structure
            const navLinks = document.querySelectorAll(".links a");

            function highlightNavLink() {
                let scrollPosition = window.scrollY;

                sections.forEach((section, index) => {
                    const top = section.offsetTop - 100; // Adjust the offset based on your design
                    const bottom = top + section.offsetHeight;

                    if (scrollPosition >= top && scrollPosition < bottom) {
                        navLinks.forEach((link) => {
                            link.classList.remove("active-link");
                        });
                        navLinks[index].classList.add("active-link");
                    }
                });
            }

            window.addEventListener("scroll", highlightNavLink);
        });
    </script>
</body>
</html>
