<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
    <title>Test Front</title>
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/TweenMax.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/plugins/CSSPlugin.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/easing/EasePack.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/TweenLite.min.js"></script>
    <script type="text/javascript" src="js/gallery.js"></script>
    
    <script type="text/javascript">
    window.onload=function(){
            gallery();
       TweenMax.from('.uno', .4, {y: 100, opacity: 0});
        (".uno", 0.5, {scale:0.5, autoAlpha:0}, "uno")
        TweenMax.from(".uno",2,{top:400, ease:Back.easeOut});
        TweenLite.set(".uno", {css:{transformPerspective:400, perspective:400, transformStyle:"uno"}});
    }
    
</script>
</head>
<body>

<section>
    <article>
        <div id="listingTable" class="box-images uno"></div>
        page <span id="page"></span>
        <a href="javascript:prevPage()" id="btn_prev">Prev</a>
        <a href="javascript:nextPage()" id="btn_next">Next</a>
    </article>
</section>

<script
     src="https://code.jquery.com/jquery-1.12.4.min.js"
     integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
     crossorigin="anonymous">
</script>
<script type="text/javascript">
    $('#btn_next').click(function() {
      

        TweenMax.to(".uno",1,{right:500, delay:0.1});
        TweenMax.from(".uno",1,{left:500, delay:0.1});
        tl.to(".uno", 2, {x:500})
        TweenLite.to(".uno",graph, 2.5, { ease: Power2.easeOut, y: -500 });
});
</script>

</body>
</html>

       