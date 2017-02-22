<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
    <title>gallery</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="gallery.js"></script>
</head>
<body>

<section>
    <article>
        <div id="listingTable" class="box-images animation wid"></div>
            <span id="page"></span>
            <a href="javascript:prevPage()" id="btn_prev" class="btn-prev">Prev</a>
            <a href="javascript:nextPage()" id="btn_next" class="btn-next">Next Projects</a>
    </article>
</section>
   <div id="contenedorimagen" class="animated">
        <button id="cerrar">X</button>
        <div id="contimgcentra">
            <div id="cargaimagen"></div>
        </div>
    </div>

<script type="text/javascript">
$.fn.extend({
            animateCss: function (animationName, opc = 0) {
                var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
                this.addClass('animated ' + animationName).one(animationEnd, function() {
                    $(this).removeClass('animated ' + animationName);
                    if (opc==1){ $(this).hide(); }
                });
            }
        });
$(function(){
            var altoVentana = $(window).height();
            var anchoVentana = $(window).width();
            $("#contimgcentra").css({"width":anchoVentana, "height":altoVentana});
            $("img").click(function(){
                var urlimg = $(this).attr("src");
                $("#cargaimagen").html("<img src='"+urlimg+"'>");
                var aleaTorio = Math.random()*totalEfectos;
                aleaTorio = parseInt(aleaTorio);
                var efecto = efectos[aleaTorio];
                $("#contenedorimagen").show();
                $("#contenedorimagen").animateCss(efecto);
            })
            $("#cerrar").click(function(){
                $("#contenedorimagen").animateCss('fadeOut', 1);
                // $("#contenedorimagen").hide();
            });
        })

window.onload=function(){
            gallery();

        $('.animation').animateCss('lightSpeedIn');

        //$(".txt-des").css("line-height", $(".contenedor").height());     
        
       /*TweenMax.from('.animation', .4, {y: 100, opacity: 0});
        (".animation", 0.5, {scale:0.5, autoAlpha:0}, "animation")
        TweenMax.from(".animation",2,{top:400, ease:Back.easeOut});
        TweenLite.set(".animation", {css:{transformPerspective:400, perspective:400, transformStyle:"animation"}});*/
    }
    $('#btn_next').click(function() {     
      $('.animation').animateCss('flash');
});
    $(".animation").mouseover(function(){
    $(".img").animateCss('');
});

</script>

</body>
</html>


