<!-- ████████╗ ██████╗██╗  ██╗███████╗    ██████╗ ██████╗  ██████╗      ██╗███████╗ ██████╗████████╗
     ╚══██╔══╝██╔════╝╚██╗██╔╝██╔════╝    ██╔══██╗██╔══██╗██╔═══██╗     ██║██╔════╝██╔════╝╚══██╔══╝
        ██║   ██║      ╚███╔╝ ███████╗    ██████╔╝██████╔╝██║   ██║     ██║█████╗  ██║        ██║   
        ██║   ██║      ██╔██╗ ╚════██║    ██╔═══╝ ██╔══██╗██║   ██║██   ██║██╔══╝  ██║        ██║   
        ██║   ╚██████╗██╔╝ ██╗███████║    ██║     ██║  ██║╚██████╔╝╚█████╔╝███████╗╚██████╗   ██║   
        ╚═╝    ╚═════╝╚═╝  ╚═╝╚══════╝    ╚═╝     ╚═╝  ╚═╝ ╚═════╝  ╚════╝ ╚══════╝ ╚═════╝   ╚═╝   -->
<!-- @Gorpo Orko - 2020 -->
<?php
// ESTE SISTEMA SERIA UMA PAGINA DO REDIRECIONAMENTO RESTRITO ONDE O USUARIO É INFORMADO QUE NAO PODE ESTAR LA
session_start();
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<script type="text/javascript">
document.oncontextmenu =new Function("return false;")
document.onselectstart =new Function("return false;")
</script>

<head>
 <body background-image: src("http://i.imgur.com/NGKTTJE.jpg")> <link rel="SHORTCUT ICON" href="https://i.imgur.com/OyZ2Wia.png" type="image/x-icon" />
<style type="text/css">
body {
            background-image: url("http://i.imgur.com/NGKTTJE.jpg");
            background-repeat: no-repeat;
            background-size: 100%;
        }

</style>

    <script type="text/javascript">
        var rev = "fwd";
        function titlebar(val) {
            var msg = "TCXS Project               STORE PLAYSTATION3";
            var res = " ";
            var speed = 20
            var pos = val;
            msg = "|" + msg + " |";
            var le = msg.length;
            if (rev == "fwd") {
                if (pos < le) {
                    pos = pos + 1;
                    scroll = msg.substr(0, pos);
                    document.title = scroll;
                    timer = window.setTimeout("titlebar(" + pos + ")", speed);
                } else {
                    rev = "bwd";
                    timer = window.setTimeout("titlebar(" + pos + ")", speed);
                }
            } else {
                if (pos > 0) {
                    pos = pos - 1;
                    var ale = le - pos;
                    scrol = msg.substr(ale, le);
                    document.title = scrol;
                    timer = window.setTimeout("titlebar(" + pos + ")", speed);
                } else {
                    rev = "fwd";
                    timer = window.setTimeout("titlebar(" + pos + ")", speed);
                }
            }
        }
        titlebar(0);
    </script>





    <style type="text/css">
        background: black url('https://wallpaper-house.com/data/out/9/wallpaper2you_321733.jpg');
        scroll repeat center center;
        background-repeat:fixed;
        color: #66FF00;
        a:hover {
            cursor: url(http://indiaonlineeducation.com/wp//wp-content/uploads/2016/u3k00+emxZu8gUkpvvrPArYuL2wjd5Uivs00URqddIM=.swf), progress !important;
        }

        h1 {
            color: #370909;
            font-size: 50px;
            margin: 1px auto;
            text-align: center;
            text-transform: uppercase;
            font-family: Orbitron;
        }

        .neon {
            color: #370909;
            text-shadow: 0 0 5px #b90303, 0 0 10px #b90303, 0 0 30px #c92626, 0 0 45px #c92626, 0 0 60px #c92626;
        }


        h2 {
            color: #370909;
            font-size: 50px;
            margin: 1px auto;
            text-align: center;
            text-transform: uppercase;
            font-family: Orbitron;
        }

        .neon {
            color: #370909;
            text-shadow: 0 0 5px #b90303, 0 0 10px #b90303, 0 0 30px #c92626, 0 0 45px #c92626, 0 0 60px #c92626;
        }

        h3 {
            color: #370909;
            font-size: 50px;
            margin: 1px auto;
            text-align: center;
            text-transform: uppercase;
            font-family: Orbitron;
        }

        .neon {
            color: #370909;
            text-shadow: 0 0 5px #b90303, 0 0 10px #b90303, 0 0 30px #c92626, 0 0 45px #c92626, 0 0 60px #c92626;
        }


        h4 {
            color: #FF0000;
            font-size: 20px;
            margin: 1px auto;
            text-align: center;
            text-transform: uppercase;
            font-family: Orbitron;
        }

        .neon {
            color: #370909;
            text-shadow: 0 0 5px #b90303, 0 0 10px #b90303, 0 0 30px #c92626, 0 0 45px #c92626, 0 0 60px #c92626;
        }


        .matrix {
            color: #370909;
            font-family: Arial, Courier, Monotype;
            font-size: 10pt;
            text-align: center;
            width: 10px;
            padding: 0px;
            margin: 0px;
        }

        .jokitz1 {
            text-align: center;
        }

        .jokitz2 {
            text-align: center;
            font-family: Courier;
        }

        img:hover {
            animation: shake 0.5s;
            animation-iteration-count: infinite;
        }

        @keyframes shake {
            0% {
                transform: translate(1px, 1px) rotate(0deg);
            }

            10% {
                transform: translate(-1px, -2px) rotate(-1deg);
            }

            20% {
                transform: translate(-3px, 0px) rotate(1deg);
            }

            30% {
                transform: translate(3px, 2px) rotate(0deg);
            }

            40% {
                transform: translate(1px, -1px) rotate(1deg);
            }

            50% {
                transform: translate(-1px, 2px) rotate(-1deg);
            }

            60% {
                transform: translate(-3px, 1px) rotate(0deg);
            }

            70% {
                transform: translate(3px, 1px) rotate(-1deg);
            }

            80% {
                transform: translate(-1px, -1px) rotate(1deg);
            }

            90% {
                transform: translate(1px, 2px) rotate(0deg);
            }

            100% {
                transform: translate(1px, -2px) rotate(-1deg);
            }
        }

    </style>
    <script type="text/javascript" language="javascript">
var rows=1; // must be an odd number
var speed=-1; // lower is faster
var reveal=2; // between 0 and 2 only. The higher, the faster the word appears
var effectalign="center" //enter "center" to center it.
var w3c=document.getElementById && !window.opera;;
var ie45=document.all && !window.opera;
var ma_tab, matemp, ma_bod, ma_row, x, y, columns, ma_txt, ma_cho;
var m_coch=new Array();
var m_copo=new Array();

window.onload=function() {
  if (!w3c && !ie45) return
  var matrix=(w3c)?document.getElementById("matrix"):document.all["matrix"];
  ma_txt=(w3c)?matrix.firstChild.nodeValue:matrix.innerHTML;
  ma_txt=" "+ma_txt+" ";
  columns=ma_txt.length;
  if (w3c) {
    while (matrix.childNodes.length) matrix.removeChild(matrix.childNodes[0]);
    ma_tab=document.createElement("table");
    ma_tab.setAttribute("border", 0);
    ma_tab.setAttribute("align", effectalign);
    ma_tab.style.backgroundColor="#000000";
    ma_bod=document.createElement("tbody");
    for (x=0; x<rows; x++) {
      ma_row=document.createElement("tr");
      for (y=0; y<columns; y++) {
        matemp=document.createElement("td");
        matemp.setAttribute("id", "Mx"+x+"y"+y);
        matemp.className="matrix";
        matemp.appendChild(document.createTextNode(String.fromCharCode(160)));
        ma_row.appendChild(matemp);
      }
      ma_bod.appendChild(ma_row);
    }
    ma_tab.appendChild(ma_bod);
    matrix.appendChild(ma_tab);
  } else {
    ma_tab='<ta'+'ble align="'+effectalign+'" border="0" style="background-color:#000000">';
    for (var x=0; x<rows; x++) {
      ma_tab+='<t'+'r>';
      for (var y=0; y<columns; y++) {
        ma_tab+='<t'+'d class="matrix" id="Mx'+x+'y'+y+'"> </'+'td>';
      }
      ma_tab+='</'+'tr>';
    }
    ma_tab+='</'+'table>';
    matrix.innerHTML=ma_tab;
  }
  ma_cho=ma_txt;
  for (x=0; x<columns; x++) {
    ma_cho+=String.fromCharCode(32+Math.floor(Math.random()*94));
    m_copo[x]=0;
  }
  ma_bod=setInterval("mytricks()", speed);
}


function mytricks() {

  x=0;

  for (y=0; y<columns; y++) {

    x=x+(m_copo[y]==100);

    ma_row=m_copo[y]%100;

    if (ma_row && m_copo[y]<100) {

      if (ma_row<rows+1) {

        if (w3c) {

          matemp=document.getElementById("Mx"+(ma_row-1)+"y"+y);

          matemp.firstChild.nodeValue=m_coch[y];

        }

        else {

          matemp=document.all["Mx"+(ma_row-1)+"y"+y];

          matemp.innerHTML=m_coch[y];

        }

        matemp.style.color="#81F2FF";

        matemp.style.fontWeight="bold";

      }

      if (ma_row>1 && ma_row<rows+2) {

        matemp=(w3c)?document.getElementById("Mx"+(ma_row-2)+"y"+y):document.all["Mx"+(ma_row-2)+"y"+y];

        matemp.style.fontWeight="normal";

        matemp.style.color="#00BBFF";

      }

      if (ma_row>2) {

          matemp=(w3c)?document.getElementById("Mx"+(ma_row-3)+"y"+y):document.all["Mx"+(ma_row-3)+"y"+y];

        matemp.style.color="#b00606";

      }

      if (ma_row<Math.floor(rows/2)+1) m_copo[y]++;

      else if (ma_row==Math.floor(rows/2)+1 && m_coch[y]==ma_txt.charAt(y)) zoomer(y);

      else if (ma_row<rows+2) m_copo[y]++;

      else if (m_copo[y]<100) m_copo[y]=0;

    }

    else if (Math.random()>0.9 && m_copo[y]<100) {

      m_coch[y]=ma_cho.charAt(Math.floor(Math.random()*ma_cho.length));

      m_copo[y]++;

    }

  }

  if (x==columns) clearInterval(ma_bod);

}



function zoomer(ycol) {

  var mtmp, mtem, ytmp;

  if (m_copo[ycol]==Math.floor(rows/2)+1) {

    for (ytmp=0; ytmp<rows; ytmp++) {

      if (w3c) {

        mtmp=document.getElementById("Mx"+ytmp+"y"+ycol);

        mtmp.firstChild.nodeValue=m_coch[ycol];

      }

      else {

        mtmp=document.all["Mx"+ytmp+"y"+ycol];

        mtmp.innerHTML=m_coch[ycol];

      }

      mtmp.style.color="#91060d";

      mtmp.style.fontWeight="bold";

    }

    if (Math.random()<reveal) {

      mtmp=ma_cho.indexOf(ma_txt.charAt(ycol));

      ma_cho=ma_cho.substring(0, mtmp)+ma_cho.substring(mtmp+1, ma_cho.length);

    }

    if (Math.random()<reveal-1) ma_cho=ma_cho.substring(0, ma_cho.length-1);

    m_copo[ycol]+=199;

    setTimeout("zoomer("+ycol+")", speed);

  }

  else if (m_copo[ycol]>200) {

    if (w3c) {

      mtmp=document.getElementById("Mx"+(m_copo[ycol]-201)+"y"+ycol);

      mtem=document.getElementById("Mx"+(200+rows-m_copo[ycol]--)+"y"+ycol);

    }

    else {

      mtmp=document.all["Mx"+(m_copo[ycol]-201)+"y"+ycol];

      mtem=document.all["Mx"+(200+rows-m_copo[ycol]--)+"y"+ycol];

    }

    mtmp.style.fontWeight="normal";

    mtem.style.fontWeight="normal";

    setTimeout("zoomer("+ycol+")", speed);

  }

  else if (m_copo[ycol]==200) m_copo[ycol]=100+Math.floor(rows/2);

  if (m_copo[ycol]>100 && m_copo[ycol]<200) {

    if (w3c) {

      mtmp=document.getElementById("Mx"+(m_copo[ycol]-101)+"y"+ycol);

      mtmp.firstChild.nodeValue=String.fromCharCode(160);

      mtem=document.getElementById("Mx"+(100+rows-m_copo[ycol]--)+"y"+ycol);

      mtem.firstChild.nodeValue=String.fromCharCode(160);

    }

    else {

      mtmp=document.all["Mx"+(m_copo[ycol]-101)+"y"+ycol];

      mtmp.innerHTML=String.fromCharCode(160);

      mtem=document.all["Mx"+(100+rows-m_copo[ycol]--)+"y"+ycol];

      mtem.innerHTML=String.fromCharCode(160);

    }

    setTimeout("zoomer("+ycol+")", speed);

  }

  

  //start

var h1 = document.getElementsByTagName("h1")[0],

text = h1.innerText || h1.textContent,

split = [], i, lit = 0, timer = null;

for(i = 0; i < text.length; ++i) {

split.push("<span>" + text[i] + "</span>");

}

h1.innerHTML = split.join("");

split = h1.childNodes;



var flicker = function() {

lit += 0.01;

if(lit >= 1) {

clearInterval(timer);

}

for(i = 0; i < split.length; ++i) {

if(Math.random() < lit) {

split[i].className = "neon";

} else {

split[i].className = "";

}

}

}
setInterval(flicker, 100);

}

</script>
</head>
<center>

<br><h1>TCXS PROJECT STORE PLAYSTATION3</h1>
<!-- <div id="matrix" class="auto-style8">IP: <?php echo $_SERVER['REMOTE_ADDR'] ?> -->
	<div id="matrix" class="auto-style8">REALIZE UMA DOACAO PELO QRCODE E TENHA SEU LOGIN
</div>
</center>
<br><br><br><br><br><br>
<center><img src="assets/qrcode.png" ></center>
</body>
</html>

<font color="#91060d"><footer id="det" style="position:fixed; left:0px; right:0px; bottom:0px; background:rgb(0,0,0); text-align:center; border-top: 1px solid #91060d; border-bottom: 1px solid #91060d"><font color="#91060d" face="Tahoma" size="2"><font color="91060d"><b> Caso seja um Doador apenas retorne realize seu login e desconsidere esta mensagem. Caso não tenha um login realize uma doação pelo Qrcode acima, são apenas R$15.oo </b></font>

 

