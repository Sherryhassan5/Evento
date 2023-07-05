<?php 
echo'

html {
    scroll-behavior: smooth;
}


.main {
    background: url("img/bg_main.webp")no-repeat top;
    max-width: 100vw;
    // min-height: 130vh;
    height:940px;
    position: relative;
    z-index: 1;
}

.main::before {
    content: "";
    background: linear-gradient(to bottom, rgba(11, 0, 21, 0.865), rgba(11, 0, 21, 0.765), rgba(11, 0, 21, 0.665), rgba(11, 0, 21, 0.565), rgba(11, 0, 21, 0.565), rgba(11, 0, 21, 0.165), rgba(11, 0, 21, 0.165), rgba(11, 0, 21, 0.165), rgba(11, 0, 21, 0.265), rgba(11, 0, 21, 0.365), rgba(11, 0, 21, 0.465), rgba(11, 0, 21, 0.565), rgba(11, 0, 21, 0.765), rgba(11, 0, 21, 0.965), rgba(11, 0, 21, 0.965));
    position: absolute;
    top: 0px;
    left: 0px;
    right: 0px;
    bottom: -50px;
    z-index: 10;
}

nav {
    position: absolute;
    z-index: 11;

}

.nav-link {
    font-family: "Barlow", sans-serif;
    font-size: 15px !important;
    font-weight: 600;
    transition: all 0.2s ease-in;
}

.nav-link:hover {
    color: rgb(229, 38, 130) !important;
}

.navbar-nav {
    margin-right: 20px;
}

.button-book {
    transition: all 0.3s;
}


.button-book:hover {
    background-color: transparent !important;
    color: #FFC107 !important;
}

.button-buy {
    transition: all 0.3s;
    float: right;
}


.button-buy:hover {
    background-color: #FFC107 !important;
    color: white !important;
}



.big-text {
    /* font-family: "Anton", sans-serif; */
    font-family: "Balsamiq Sans", cursive;
    /* font-family: "Oswald", sans-serif; */
    font-size: 6rem;
    font-weight: 900;
    margin-top: 200px;
    line-height: 0.9;
}

#big-text1 {
    margin-top: 0px;
}

#big-text2 {
    margin-top: 0px;
}

.oc {
    height: 8vw;
    width: 8vw;
    border-radius: 50%;
    background-color: rgba(255, 255, 255, 0.117);
    /* text-align: center; */
    display: flex;
    align-items: center;
    justify-content: center;
}

.ic {
    height: 4vw;
    width: 4vw;
    background-color: rgba(255, 255, 255, 0.855);
    border-radius: 50%;
    border: 2px solid rgb(229, 38, 130);
    display: flex;
    align-items: center;
    overflow: hidden;
    justify-content: center;
    transition: all 0.3s;
}

.ic i {
    transition: all 0.2s;
}

.ic:hover i {
    background-color: #FFC107;
    color: white !important;
    padding: 100px;
}

.oc a {
    text-decoration: none;
}

.pink-text {

    font-size: 2.9rem;
    font-weight: 900;
    color: rgba(229, 38, 130, 0.887) !important;
}

.white-text {

    font-size: 2.9rem;
    font-weight: 900;
    /* color: rgba(229, 38, 130, 0.887) !important; */
}

.div-nav {
    margin-top: -40px;
}

.bg {
    background-color: rgb(11, 0, 21);
}

.lorem {
    color: rgba(255, 255, 255, 0.555);

}


.teacher-card-container {
    display: flex;
    justify-content:center;
    gap: 20px;
    padding: 20px 0px 50px 0px;
}

.social-icons {
    visibility: hidden;
    transition: all 0.2s;
    font-size: 20px;
    letter-spacing: 5px;
}

.teacher-des {
    line-height: 1.8;
    padding: 2px 10px;
}

.teacher-img {
    overflow: hidden;
}

.des {
    letter-spacing: 3px;
    margin-bottom: 10px;
    line-height: 2;
}

img {
    transition: all 0.6s;
}

.teachers-text {
    margin: 10px 13%;
}

.teacher-card:hover img {
    transform: scale(1.1);
}

.teacher-card a {
    color: white;
    text-decoration: none;
    transition: all 0.4s;

}

.name {
    margin-top: 20px;
}

.teacher-card:hover .name {
    color: #FFC107;
}

.teacher-card:hover .social-icons {
    visibility: visible;
}

.social-icons i {
    cursor: pointer;
}

.center {
    text-align: center;
}

.inner-bg {
    background-color: #0e0e0e;
}

.bd {
    position: relative;
}



.bd::after {
    content: "";
    position: absolute;
    left: 20px;
    right: 20px;
    bottom: -10px;
    /* background-color: white; */
    border: 1px dotted white;
}

.bg-extra{
    height:900px;
}

.bde {
    position: relative;
    padding-bottom: 30px;
}

.bde::after {
    content: "";
    position: absolute;
    left: 20px;
    right: 20px;
    bottom: 20px;
    /* background-color: white; */
    border: 1px dotted white;
}


.shape {
    position: relative;
    z-index: 1;
    margin-top: -50px;
}

.inner-bg-shape {
    background-color: #0e0e0e;
    position: relative;
    top: -100px;
    z-index: 10;
}

.social-b {
    height: 40px;
    width: 40px;
    display: flex;
    justify-content: center;
    align-items: center;
}

.social {
    color: white;
    /* font-size: 1.1rem; */
    transition: all 0.5s;
}

.social-b:hover .social {
    transform: rotateY(180deg);
}

.link-f {
    transition: all 0.3s;
    text-decoration: none;
    margin-bottom: 10px;

}

.link-f:hover {
    color: white;
    transform: translate(1%);
    text-decoration: underline;
}

.input {
    background-color: transparent;
    display: block;
    width: 100%;
    padding: 10px;
    outline: none;
    color: white;
    border: 1px solid rgba(255, 255, 255, 0.117);
}

.hr {
    width: 100%;
    height: 1px;
    background-color: rgba(255, 255, 255, 0.617);

}


.sch-date {
    color: white;
    cursor: pointer;
}

.active1 {
    color: #FFC107;
    border-bottom: 4px solid #FFC107;
}


.seventeen {
    position: absolute;
    z-index: 100;
    margin-top: 100px;
}

.eighteen {
    position: absolute;
    z-index: 99;
    margin-top: 100px;
}

.nineteen {
    position: absolute;
    z-index: 98;
    margin-top: 100px;
}

.upper-sch {
    position: absolute;
    margin-bottom: 100px;
    z-index: 200;
}

.doodle {
    height: 40px;
    width: 40px;
    border-radius: 50%;
    cursor: pointer;
    z-index: 1020;
    position: fixed;
    display: flex;
    justify-content: center;
    align-items: center;
    right: 30px;
    bottom: 30px;
}

// blog page designing

.blog-bar{
    display:flex;
    flex-direction:column;
    gap:20px;
}

.blog-card{
    width:100%;
    margin-bottom:40px;
}
.blog-img{
    width:100%;
    min-height:450px;
    max-height:60vh;
    position:relative;
}

#blog-img1{
    background:url("/img/single_blog_1.webp") no-repeat center center/cover;
   
}


#blog-img2{
    background:url("/img/single_blog_2.webp") no-repeat center center/cover;
   
}

#blog-img3{
    background:url("/img/single_blog_3.webp") no-repeat center center/cover;
   
}

#blog-img4{
    background:url("/img/single_blog_4.webp") no-repeat center center/cover;
   
}




.blog-date{
    height:100px;
    width:100px;
    background-color: rgb(255, 78, 170);
    box-sizing:border-box;
    display:flex;
    flex-direction:column;
    justify-content:center;
    align-items:center;
    border-radius:8px;
    position:absolute;
    bottom:-20px;
    left:30px;
    transition:all 0.3s;

}
.blog-date-text{
    margin-bottom:0px;
    transition:all 0.3s;

}
.blog-date:hover{
    background-color:transparent;
}

.blog-date:hover .blog-date-text{
    color: rgb(255, 78, 170) !important;
}


.blog-desc{
    box-shadow:1px 1px 20px 2px rgba(255, 198, 170, 0.2); 
}

.blog-date-text-l{
    text-decoration:none;
    // font-weight:900;
    display:block;
    margin-bottom:30px;
    transition:all 0.3s;
}

.blog-date-text-l:hover{
    color:rgb(255, 78, 170) !important;
}


.blog-sm-link{
    text-decoration:none;
    transition:all 0.3s;
    color:rgba(255,78,170);
}

.blog-sm-link:hover{
    // font-size:15px;
    // transform:scale(0.7);
    color:rgba(255,58,100);
    
}



.side-bar{

display:flex;
flex-direction:column;
gap:40px;


}


.custom-file-label{
    background-color:rgb(255,78,170);
}


.side-link{
    text-decoration:none;
    color:black;
    transition:all 0.3s;
    display:block;
    margin-top:20px;
    margin-bottom:20px;
}
.side-link:hover{
    color:rgb(255,78,170);
}

.textarea{
    padding:15px;
    margin-bottom:40px;
}
.textarea::placeholder{
    color:white;
}

.text-at-end{
    margin-bottom:6px;
}




@media(max-width: 880px){


    .ic i {
    font-size:15px !important; 
    }

    .teacher-card-specific{
        width:100%;
    }


}

@media(max-width:765px){
    
    .teacher-card-container-specific{
        flex-direction:column;
    }
    .img-brand{
        width:45% !important;
    }


}

@media(max-width: 540px){


    .ic i {
    font-size:20px !important; 
    }

    
.oc {
    height: 18vw;
    width: 18vw;
    }

.ic {
    height: 9vw;
    width: 9vw;
    }

    .big-text{
        font-size:4.5rem;
    }

    .secondary{
        font-size:15px !important;
        margin-top:0px;
        margin-bottom:0px;
    }
    .teachers-text {
        margin: 4px 7%;
        font-size:10px;
    }
    .social-icons .fa-brands{
        font-size:10px;
    }

}


@media(max-width: 450px){
    .sch-date{
        font-size:15px !important;
    }
    .img-brand{
        width:80% !important;
        padding-top:50px !important;
    }

    .button-buy{
        font-size:12px;
    }
    .lorem{
        font-size:16px !important;
    }
}

@media(max-width: 375px){
    .big-text{
        font-size:4rem;
    }
    .lorem{
        text-align:center;
    }

}




';
?>