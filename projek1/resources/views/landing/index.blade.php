<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio Laravel</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="responsiv.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap');

.poppins-light {
    font-family: "Poppins", sans-serif;
    font-weight: 300;
    font-style: normal;
  }
  
  .poppins-regular {
    font-family: "Poppins", sans-serif;
    font-weight: 400;
    font-style: normal;
  }
  

* {
    margin: 0;
    padding: 0;
}

body {
    font-family:"Poppins", sans-serif;
}

html {
    scroll-behavior: smooth;
}

p {
    color: rgb(85, 85, 85);
}

a, .btn {
    transition: all 300ms ease;
}

nav, .link {
    display: flex;
}

nav {
    justify-content: space-around;
    align-items: center;
    height: 17vh;
}

.link {
    gap: 2rem;
    list-style: none;
    font-size: 1.5rem;
}

a {
    color: black;
    text-decoration: underline;
    text-decoration-color: white;
}

a:hover {
    color: gray;
    text-decoration: underline;
    text-underline-offset: 1rem;
    text-decoration-color:  rgb(181, 181, 181);
}

.logo {
    font-size: 2rem;
}

.logo:hover {
    cursor: default;
}


#nav2 {
    display: none;
}

.menu {
    position: relative;
    display: inline-block;
}

.icon {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    height: 24px;
    width: 30px;
    cursor: pointer;
}

.icon span {
    width: 100%;
    height: 2px;
    background-color: black;
    transition: all 0.3 ease-in-out;
}

.menu-link {
    position: absolute;
    top: 100%;
    right: 0;
    background-color: white;
    width: fit-content;
    max-height: 0;
    overflow: hidden;
    transition: all 0.3 ease-in-out;
}

.menu-link a {
    display: block;
    padding: 10px;
    text-align: center;
    font-size: 1.5rem;
    color: black;
    text-decoration: none;
    transition: all 0.3 ease-in-out;
}

.menu-link li {
    list-style: none;
}

.menu-link.open {
    max-height: 300px;
}

.icon.open span:first-child {
    transform: rotate(45deg) translate(10px, 5px);
}

.icon.open span:nth-child(2) {
    opacity: 0;
}

.icon.open span:last-child {
    transform: rotate(-45deg) translate(10px, -5px);
}

.icon span:first-child {
    transform: none;
}

.icon span:first-child {
    opacity: 1;
}

.icon span:first-child {
    transform:   none;
}

section {
    padding-top: 4vh;
    height: 95vh;
    margin: 0 10rem;
    box-sizing: border-box;
    min-height: fit-content;
}

.section-container {
    display: flex;
}

#profile {
    display: flex;
    justify-content: center;
    gap: 5rem;
    height: 80vh;
}

.section__pic-container {
    display: flex;
    height: 400px;
    width: 400px;
    margin: auto 0;
}

.section__text {
    align-self: center;
    text-align: center;
}

.section__text p {
    font-weight: 600;
}

.section__text__p1 {
    text-align: center;
}

.section__text__p2 {
    text-align: center;
    font-size: 1.75rem;
    margin-bottom: 1rem;
}

.title {
    font-size: 3rem;
    text-align: center;
}

#socials-container {
    display: flex;
    justify-content: center;
    margin-top: 1rem;
    gap: 1rem;
}

.iconn {
    cursor: pointer;
    height: 2rem;
}

.btn-container {
    display: flex;
    justify-content: center;
    gap: 1rem;
}

.btn {
    font-weight: 600;
    transition: all 300ms ease;
    padding: 1rem;
    width: 8rem;
    border-radius: 2rem;
}

.btn-color-1,
.btn-color-2 {
    border: rgb(0, 0, 0) 0.1rem solid;
    color: rgb(0, 0, 0);
}


.btn-color-1:hover,
.btn-color-2:hover {
    cursor: pointer;
}


.btn-color-1,
.btn-color-2:hover {
    border: rgb(0, 0, 0);
    color: rgb(255, 255, 255);
}

.btn-color-1:hover {
    background: rgb(0, 0, 0);
    color: white;
}

.btn-color-1 {
    background: rgb(0, 0, 0);
    color: rgb(255, 255, 255);
}

.btn-color-2 {
    background: none;
}

.btn-color-2:hover {
    border: rgb(255, 255, 255) 0.1rem solid;
    color: rgb(255, 255, 255);
}

.btn-container {
    gap: 1rem;
}

.btn-color-2:hover {
    background-color: white;
    color: black; 
}

.btn-color-2:hover {
    background-color: black; 
    color: white; 
}

#about {
    position: relative;
}

.about-containers {
    gap: 2rem;
    margin-bottom: 2rem;
    margin-top: 2rem;
}

.about-details-container {
    justify-content: center;
    flex-direction: column;
}

.about-containers,
.about-details-container {
    display: flex;
}

.about-pic {
    border-radius: 2rem;
}

.details-container {
    padding: 1.5rem;
    flex: 1;
    background: white;
    border-radius: 2rem;
    border: rgb(53, 53, 53) 0.1rem solid;
    border-color: rgb(163, 163, 163);
    text-align: center;
}

.section-container {
    gap: 4rem;
    height: 80%;
}

.section__pic-container {
    height: 400px;
    width: 400px;
    margin: auto 0;
}

#experience {
    position: cente;
    align-items: center;
}

.experince-sub-title {
    color: rgb(85, 85, 85);
    font-weight: 600;
    font-size: 1.75rem;
    margin-bottom: 2rem;
}

.experience-details-container {
    display: flex;
    margin-left: -20px;
    align-items: center;
    justify-content: center;
    flex-direction: column;
}
.article-container {
    display: flex;
    text-align: center;
    gap: 2.5rem;
    justify-content: center;
}

article {
    display: flex;
    width: 10rem;
    justify-content: space-around;
    gap: 0.5rem;
}

article .iconn {
    cursor: default;
}

#contact {
    display: flex;
    justify-content: center;
    flex-direction: column;
    height: 70vh;
}

.container-info-upper-container {
    display: flex;
    justify-content: center;
    border-radius: 2rem;
    border: rgb(53, 53, 53) 0.1rem solid;
    background-color: rgb(163, 163, 163);
    background: (255, 255, 255);
    margin: 2rem auto;
    padding: 0.5rem;
}

.contact-info-container {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 0.5rem;
    margin: 1rem;
}

.contact-info-container p {
    font-size: larger;
}

.contact-icon {
    cursor: default;
}


#footer {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 2rem;
    background-color: rgb(163, 163, 163);
}
@media screen and (max-width: 1200px) {
    #nav1 {
        display: none;
    }

    #nav2 {
        display: flex;
    }
}
    </style>
</head>
<body>
    <nav id="nav1">
        <div class="logo">Samuel Dae</div>
        <div>
            <ul class="link">
                <li>
                    <a href="#about">About</a>
                </li>
                <li>
                    <a href="#experience">Experience</a>
                </li>
                <li>
                    <a href="#projects">Projects</a>
                </li>
                <li>
                    <a href="#contact">Contact</a>
                </li>
            </ul>
        </div>
    </nav>
    <nav id="nav2">
        <div class="logo">Daerren</div>
        <div class="menu">
            <div class="icon" onclick="toggleMenu()">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="menu-link">
                <li>
                    <a href="#about" onclick="toggleMenu()">About</a>
                </li>
                <li>
                    <a href="#experience" onclick="toggleMenu()">Experience</a>
                </li>
                <li>
                    <a href="#projects" onclick="toggleMenu()">Projects</a>
                </li>
                <li>
                    <a href="#contact" onclick="toggleMenu()">Contact</a>
                </li>
            </div>
        </div>
    </nav>
    <section id="profile">
        <div class="section__pic-container">
            <img src="asset/linkedin Poto.jpeg" alt="Samuel profile" width="200px" height="250px">
        </div>
        <div class="section_text">
            <p class="section__text__p1">Hello, I'm</p>
            <h1 class="title">Samuel Daerren</h1>
            <p class="section__text__p2">Backend Developer</p>
            <div class="btn-container">
                <button class="btn btn-color-2" onclick="window.open('linken')">Download CV</button>
                <button class="btn btn-color-1" onclick="location.href='./#contact'">Contact Info</button>
            </div>
            <div id="socials-container">
                <img src="linkedin" alt="linkedin" class="iconn" onclick="location.href='https://linkedin.com/'">
                <img src="linkedin" alt="linkedin" class="iconn" onclick="location.href='https://linkedin.com/'">
            </div>
        </div>
    </section>
    <section id="about">
        <p class="section__text__p1">Get To Know More</p>
        <h1 class="title">About Me</h1>
        <div class="section-container">
            <div class="section__pic-container">
                <img src="linkedin" alt="" class="about-pic">
            </div>
            <div class="about-details-container">
                <div class="about-containers">
                    <div class="details-container">
                        <img src="linkedin" alt="" class="iconn">
                        <h3>Experience</h3>
                        <p>2+ years <br>Backend Developer</p>
                    </div>
                    <div class="details-container">
                        <img src="linkedin" alt="" class="iconn">
                        <h3>Education</h3>
                        <p>SMK Wikrama Bogor <br>Rekayasa Perangkat Lunak</p>
                    </div>
                </div>
                <div class="textcontainer">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                </div>
            </div>
        </div>
        <img src="linkedin" alt="" class="iconn arrow" onclick="location.href='./#experience'">
    </section>
    <sectioin id="experience">
        <p class="section__text__p1">Explore My</p>
        <h1 class="title">Experince</h1>
        <div class="experience-details-container">
            <div class="about-containers">
                <h2 class="experince-sub-title"></h2>
                <div class="article-container">
                    <article>
                        <img src="linkedin" alt="" class="iconn">
                        <div>
                            <h3>HTML</h3>
                            <p>Experienced</p>
                        </div>
                        <div>
                            <h3>CSS</h3>
                            <p>Experienced</p>
                        </div>
                        <div>
                            <h3>SASS</h3>
                            <p>Experienced</p>
                        </div>
                        <div>
                            <h3>JavaScript</h3>
                            <p>Basic</p>
                        </div>
                        <div>
                            <h3>PHP</h3>
                            <p>Intermadiate</p>
                        </div>
                        <div>
                            <h3>Laravel</h3>
                            <p>Basic</p>
                        </div>
                    </article>
                </div>  
            </div>
            <di class="experience-details-container">
                <div class="about-containers">
                    <h2 class="experince-sub-title"></h2>
                    <div class="article-container">
                        <article>
                            <img src="linkedin" alt="" class="iconn">
                            <div>
                                <h3>PHP</h3>
                                <p>Experienced</p>
                            </div>
                            <div>
                                <h3>Java</h3>
                                <p>Experienced</p>
                            </div>
                            <div>
                                <h3>Python</h3>
                                <p>Experienced</p>
                            </div>
                            <div>
                                <h3>SQL</h3>
                                <p>Basic</p>
                            </div>
                            <div>
                                <h3>Node.JS</h3>
                                <p>Intermadiate</p>
                            </div>
                            <div>
                                <h3>Laravel</h3>
                                <p>Basic</p>
                            </div>
                        </article>
                    </div>  
                </div>
    </sectioin>
    <section id="contact">
        <p class="section__text__p1">Get In Touch</p>
        <h1 class="title">Contact Me</h1>
        <div class="contact-info-container-info-container">
            <div class="contact-info-upper-container">
                <img src="linkedin" alt="" class="iconn contact-icon">
                <p>
                    <a href="#email">Gmail.com</a>
                </p>
                <p>
                    <a href="#email">linkedin.com</a>
                </p>
                <p>
                    <a href="#email">Instagram.com</a>
                </p>
            </div>
        </div>
    </section>
    <footer>
        <div class="footer-container">
            <div class="footer-text">
                <p>Copyright &copy; 2020</p>
            </div>
            <div class="footer-icons">
                <img src="linkedin" alt="" class="iconn">
    </footer>
    <script src="main.js"></script>
</body>
</html>