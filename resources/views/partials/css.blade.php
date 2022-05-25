@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,500&display=swap');
*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: 'Poppins',sans-serif;
}
body{
    background: #000;
}
header{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 30px 100px;
    z-index: 100;
}
header .logo img{
    max-width: 150px;
}
.navigation{
    display: flex;
}
.navigation li{
    list-style: none;
    margin: 0 10px;
}
.navigation li a{
    color: antiquewhite;
    text-decoration: none;
    font-weight: 500;
    letter-spacing: 1px;
}
.navigation li:hover a{
    color: rgb(255, 38, 0);
}
.search{
    position: relative;
    width: 300px;
    height: 40px;
}
.search input{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    color: antiquewhite;
    background: transparent;
    border: 1px solid rgba(255, 255, 255,0.5);
    outline: none;
    border-radius: 4px;
    padding: 0 10px 0 45px;
    backdrop-filter: blur(10px);
}
.search input::placeholder{
    color: antiquewhite;
}
.search .fa-magnifying-glass{
    position: absolute;
    top: 50%;
    left: 10px;
    transform: translateY(-50%);
    padding-right: 10px;
    color: antiquewhite;
    border-right: 1px solid antiquewhite;
}
.banner{
    position: relative;
    width: 50%;
    min-height: 100vh;
    padding: 0 50px;
    display: flex;
    justify-content: flex-start;
    align-items: center;

}
.banner .bg{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
}
.content{
    position: absolute;
    z-index: 1;
    max-width: 550px;
}
.banner .content h4{
    color:rgba(255, 255, 255,0.5);
    font-weight: 500;
}
.banner .content h4 span{
    padding: 0 10px;
    border-right: 1px solid rgba(255, 255, 255,0.5);
}
.banner .content h4 span:first-child{
    padding-left: 0;
}
.banner .content h4 span:last-child{
    border-right: none;
}
.banner .content h4 span i{
    background: rgb(255, 1, 1);
    color: aliceblue;
    padding: 0 8px;
    display: inline-block;
    font-style: normal;
    border-radius: 2px;
}
.banner .content p{
    font-size: 1em;
    font-weight: 300;
    line-height: 1.5em;
    color: antiquewhite;
    margin: 10px 0 20px;
}
.banner .content .button{
    position: relative;
}
.banner .content .button a{
    position: relative;
    display: inline-block;
    margin-right: 10px;
    background: rgb(255, 0, 0);
    color: aliceblue;
    padding: 6px 20px;
    text-decoration: none;
    font-weight: 500;
    letter-spacing: 1px;
    text-transform: uppercase;
}
.banner .content .button a:nth-child(2){
    background: rgba(0, 0, 0,0.5);
    border: 1px solid rgba(255, 255, 255,0.1);
}
.banner .content .button a:hover:nth-child(2){
    background: #de0611;
}
.play{
    position: absolute;
    bottom: 30px;
    left: 100px;
    display: inline-block;
    justify-content: flex-start;
    align-items: center;
    color: antiquewhite;
    text-transform: uppercase;
    font-weight: 500;
    text-decoration: none;
    letter-spacing: 1px;
    font-size: 1.2em;
    cursor: pointer;
}
.play img{
    margin-right: 10px;
    max-width: 50px;
}
.trailer{
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    z-index: 100000;
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    backdrop-filter: blur(20px);
    visibility: hidden;
    opacity: 0;
}
.trailer iframe{
    max-width: 900px;
    outline: none;
}
.trailer.active{
    visibility: visible;
    opacity: 1;
}
.close{
    position: absolute;
    top: 30px;
    right: 30px;
    cursor: pointer;
    filter: invert(1);

}
@media (max-width:991px){
    header{
        display: flex;
        padding: 20px 50px;
        flex-direction: column;
    }
    .navigation{
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        margin: 10px 0;
    }
    .banner{
        padding: 100px 50px;
    }
    .banner .play{
        left: 50px;
        font-size: 1em;
    }
    .play img{
        margin-right: 10px;
        max-width: 40px;
    }
    .trailer video{
        max-width: 90%;
    }
}
@media (max-width: 600px){
    header{
        padding: 20px;
    }
    .search{
        position: relative;
        width: calc(100% - 20px);
        height: 40px;
    }
    .banner{
        padding: 220px 20px 100px;
    }
    .banner .play{
        left: 20px;
        font-size: 1em;
        bottom: 30px;
    }
}