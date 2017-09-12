$('.bxslider').bxSlider({
    buildPager: function(slideIndex){
        switch(slideIndex){
            case 0:
                return '<img src="../images/trangchitiet/og1929-24agsr-0-2.jpg" />';
            case 1:
                return '<img src="../images/trangchitiet/og1929-24agsr-t4-1.jpg" />';
            case 2:
                return '<img src="../images/trangchitiet/og1929-24agsr-t5-1.jpg" />';
            case 3:
                return '<img src="../images/trangchitiet/og1929-24agsr-t6-1.jpg" />';
            case 4:
                return '<img src="../images/trangchitiet/og1929-24agsr-t7-1.jpg" />';
        }
    }
});