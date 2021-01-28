<!DOCTYPE html>
<html lang="ar">
    <head>
        <meta charset="utf-8">
        <title>المنتجات</title>
        <!-- <link rel="stylesheet" type="text/css" href="../css/design.css"> -->
        <link rel="stylesheet" type="text/css" href="../css/product.css">
        <!-- <link rel="stylesheet" href="../css/Scrollbar.css"> -->
        <link rel="stylesheet" type="text/css" href="../font1/all.min.css">
        <link rel="stylesheet" type="text/css" href="../font1/fontawesome.min.css">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <style>
            *{
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    -ms-box-sizing: border-box;
    -o-box-sizing: border-box;
    box-sizing: border-box;
    padding: 0;
    margin: 0;
}
nav{
                height:95px;
                display:fixed;
                top:0;
                left:0;

            }
            nav span{
                /* position:absolute;
                top:-10px;
                 margin-right:-9px; */
                 float:right;
                 margin-right:20px;
                 line-height:90px;
                 text-transform:uppercase;
            }
            nav ul{
                line-height: 105px;
                margin-right:-10px;
            }
            nav span::first-letter{
    font-size: 60px;
    color:rgb(255, 140, 0);
    text-decoration: underline rgb(255, 140, 0);
}
nav ul{
    list-style-type: none;
    text-align: center;
    line-height: 110px;
   
}
nav ul li{
    display: inline-block;
     position: relative;
}
nav ul li a{
    text-decoration: none;
    color: rgb(255, 140, 0);
    margin-right:50px;
    padding: 5px;
    font-family: sans-serif,tahoma,'Segoe UI', Tahoma, Verdana;
    font-size: 25px;
    font-weight: bold;
    border-bottom: 2px solid transparent;
    transition: all .3s ease;
}
nav ul li a:hover,nav ul li a:focus{
    color: #fff;
    border-bottom: 2px solid rgba(255, 140, 0);
    cursor: pointer;
}
nav ul ul{
    display: none;
    position: absolute;
    top: 90px;
    left:0;
    text-align: center;
    width:100px;
    border-top: 2px solid rgba(255, 140, 0);
    background-color:rgba(0, 0, 0, .8);
    line-height: 50px;
    margin-left: -5px;
}
nav ul li:hover ul{
    display: block;
}
nav ul ul li{
    display: inline-block;
    display: list-item;
}
nav ul ul li a{
    text-decoration: none;
     padding: 10px;
     margin: 0;
}

nav ul ul li a:focus{
    border-bottom: none;
  color: #fff;
}
.container{
    width: 100%;
    height: 100%;
    display:flex;
    flex:derection:row;
    flex-wrap:wrap;
justify-content:space-around;
position:relative;
margin-top:100px;
}
.container .box{
    position:relative;
    width:350px;
    height:400px;
    display:flex;
    flex:derection:row;
    flex-wrap:wrap;
justify-content:space-around;
box-shadow:0 0 4px rgba(0,0,0,.3),
           0 0 4px rgba(0,0,0,.3);
           margin-top:35px; 
           overflow:hidden; 
           background-image:linear-gradient(to bottom right,#eee,#EEE);
}
.container .box:after{
    content:"";
    display:block;
    clear:both;
}
.container .box .box_img{
    top:0;
    left:0;
    width:100%;
    height:80%;
   
}
.container .box .box_img img{
    width:100%;
    height:100%;
}
.container .box .content{
    background-color:#eee;
    display:flex;
    widht:100%;
    height:200%;
}
.container .box .content p{
    text-align:right;
    direction:rtl;
    display:flex;
    margin-block-start: .5em;
    margin-block-end: 1.5em;
    margin-inline-start: 0px;
    margin-inline-end: .5px;
    padding-inline-start: 10px;
    line-height: 1.5;
    font-family: 'Droid Arabic Kufi';
    text-align:-webkit-match-parent;
  clear:both;
  overflow:hidden;
  text-overflow:ellipsis;
  line-clamp:2;
  box-orient:horizontal;
}
.container .box .content a{
    text-decoration:none;
    background-image:linear-gradient(to bottom right,#3489db,#33ffff);
    color:#fff;
    position:absolute;
    bottom:0px;
    right:0px;
    padding:12px 15px;
    border-radius:10px 0 0;
    transition:all 1s ease-in-out;
} 
.container .box .content a:hover{
    background-image:linear-gradient(to bottom right,#66ffff,#3489db);
}
            nav{
                height:80px;

            }
            nav span{
                /* position:absolute;
                top:-10px;
                 margin-right:-9px; */
                 float:right;
                 margin-right:20px;
                 line-height:60px;
                 text-transform:uppercase;
            }
            nav ul{
                line-height: 80px;
                margin-right:-10px;
            }
            nav span::first-letter{
    font-size: 60px;
    color:rgb(255, 140, 0);
    text-decoration: underline rgb(255, 140, 0);
}

.social{
    position: fixed;
    top: 50%;
    right:1%;
    /* width: 100px; */
    float: right;
    display: flex;
   flex-direction: column;
    z-index: 10;
    margin-left: 15px;
    box-shadow:none;
  
}
.social a{
    width: 60px;
    height: 60px;
    border-radius: 50%;
    display: block;
    margin-bottom: 2px;
   padding: 12px 17px;
    line-height: 40px;
    cursor: pointer;
    text-decoration: none;
    transition: all .5s ease-in-out;
    font-size: 30px;
}

.social a:nth-child(1) {
    background: green;
    color: #fff;
}
.social a:hover{
    background-color: rgb(23, 158, 23);
} 
footer{
    position: relative;
    top: 2050px;
    text-align: center;
    width: 100%;
    height: 280px;
    background-color:#000;
    z-index: 3;
}
footer .father{
    width: 100%;
    height: 35vh;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: space-around;
}
footer .father .children{
    width: 100px;
    height: 100px;
}
footer .father .children .son{
    width: 100%;
    height: 90%;
    
}
footer .father .children .son img{
    width: 100%;
    height: 100%;
}
footer .aboutme{
    width: 100%;
    height: 60px;
    line-height: 40px;
     position: absolute;
    bottom: 0;
    border: 2px dotted #fff;
    color: #000;
    background-color: rgb(247, 136, 0);
}
.checkbtn{
    font-size: 30px;
    color: #fff;
    float: right;
    line-height: 100px;
    margin-right: 20px;
    cursor: pointer;
   z-index: 10;
   display: none;
   
}
#check{
    font-size: 30px;
    color: #fff;
    float: right;
    line-height: 90px;
    margin-right: 40px;
    cursor: pointer;
    display: none;
    z-index: 10;
}
@media screen and (max-width:952px){
    nav span{
        position: absolute;
        top: 5px;
        left:15px;
    }
    nav span:first-letter{
    font-size:60px;

    }
    nav ul{
    float: left;
}
nav ul li{
    display: inline-block;
}
nav ul li a{
    padding: 12px 7px;
    margin-right:5px;
    font-size: 16px;
}
}

@media screen and (max-width:858px)
{
    .checkbtn{
        display: block;
        z-index: 10;
    }
    span{
        position: absolute;
        top: 50px;
        left: 20px;
     }
    ul{
        position: absolute;
        width: 50%;
        height: 100vh;
        background-color: rgba(0, 0, 0, .8);
        top: 80px;
        float: left;
        white-space: nowrap;
        right: -100%;
        z-index: 12;
        text-align: center;
        transition: all .9s linear;
    }
    nav ul li{
        display: block;
        margin: 50px;
        line-height: 30px;
    }
    nav ul li a{
        font-size: 20px;
    }
    #check:checked ~ ul{
        right: 0;
    }
   
   .container{
    width: 100%;
    height:250px;
    overflow: hidden;
    z-index: 1;
}
.middle{
    position: absolute;
    top: 37%;
    left: 50%;
    transform: translate(-50%,-50%);
}
.con{
    width:100% ;
    height: 255%;
    background-color:rgba(255, 140, 0);
    display: flex;
    flex-wrap: wrap;
    justify-content:space-evenly;
    flex-direction: row;
    border: 2px dotted #000;
    overflow: auto;
    margin-bottom: -50px;
}
.m{
    position: absolute;
    top: 55%;
    left:0;
    transform: translate(0,0);
    margin-top: 45px;
    margin-bottom: 150px;
}
.con .box{
    margin-left: -3px;
    margin-bottom: -20px;
}
footer{
    margin-top: 300px;
    width: 100%;
    flex-wrap: wrap;

    position: absolute;
    bottom: 10px;
   z-index: 2;
}
footer .father{
    width: 100%;
    height: 30vh;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: space-around;
}
footer .father .children{
    width: 200px;
    height: 100px;
    flex-wrap: wrap;
}
footer .father .children .son{
    width: 100%;
    height: 90%;
    
}
footer .father .children .son img{
    width: 100%;
    height: 100%;
}
footer .aboutme{
    width: 100%;
    height: 60px;
    line-height: 40px;
     position: absolute;
    bottom: 15px;
    border: 2px dotted #fff;
    color: #000;
    background-color: rgb(247, 136, 0);
    z-index: 5;
}
}


     </style>
    </head>
    <body>
        <nav>
        <input type="checkbox" id="check" style=" float:right; margin-right:30px;margin-top:20px;">
            <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
            </label>
            <span>KSABattery</span>
         
             <ul>
                
                 <li><a href="choose.php">اختيار البطارية</a></li>
                 <li><a href="#" class="aa" style="border-bottom:2px solid #fff;">المنتجات</a></li>
                 <li><a href="index.php">الرئيسية</a></li>
             </ul>
             
        </nav>

        <div class="container">
        <?php
           $connect ="Server=MYSQL5025.site4now.net;Database=db_a6e846_alryadb;Uid=a6e846_alryadb;Pwd=aaxxmm0010";
           $getPro="select image,information from product2";
           $runPro=mysqli_query($connect,$getPro);
           while($rowPro=mysqli_fetch_array($runPro)){
             echo'
            <div class="box">
            <div class="box_img">
             <img src="../admin/image/'.$rowPro['image'].'">
             </div>
             <div class="content">
                 <p>'.$rowPro['information'].'</p>
                 <a href="https://wa.link/s6vi67" target="_blank">اطـلب الان</a>
             </div>
            </div>
             ';
           }
           ?>
            
        </div>
        <div class="social">
            <a href="https://wa.link/s6vi67" target="_blank"><i class="fab fa-whatsapp"></i></a>
          <!--End Footer-->
        </div>
          <div class="clrarfix"></div>
          <footer>
           <div class="father">
               <div class="children">
                   <div class="son">
                       <a href="pro.php" style="text-decoration:none"><img src="../images/k10.ico"></a>
                   </div>
               </div>
               <div class="children">
                   <div class="son">
                   <a href="pro.php" style="text-decoration:none"><img src="../images/k8.ico"></a>
                   </div>
               </div>
               <div class="children">
                   <div class="son">
                       <a href="pro.php" style="text-decoration:none"><img src="../images/k9.ico"></a>
                   </div>
               </div>
               <div class="children">
                   <div class="son">
                   <a href="pro.php" style="text-decoration:none"><img src="../images/k11.ico"></a>
                   </div>
               </div>
               <div class="children">
                   <div class="son">
                   <a href="pro.php" style="text-decoration:none"><img src="../images/5.ico"></a>
                   </div>
               </div>
               <div class="children">
                   <div class="son">
                   <a href="pro.php" style="text-decoration:none"><img src="../images/6.ico"></a>
                   </div>
               </div>
               <div class="children">
                   <div class="son">
                   <a href="pro.php" style="text-decoration:none"><img src="../images/7.ico"></a>
                   </div>
               </div>
           </div>
         <div class="aboutme">
        <h2 style="color: #000;">
            &copy;برمـجـة و تـطويـر : النــجـم ســوفـت
        </h2>
         </div>
       </footer>
    </body>
</html>