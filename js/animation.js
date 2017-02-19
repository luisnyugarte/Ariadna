
    window.onload=function(){
            gallery();
        TweenMax.from(".uno",2,{top:400, ease:Back.easeOut});
        TweenMax.to(".uno",2,{right:400, delay:2});
        TweenLite.to(".uno",graph, 2.5, { ease: Power2.easeOut, y: -500 });
    }
