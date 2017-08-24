var $info = $('#tri-info');
$info.css('visibility', 'hidden');
$info.waypoint( function (){
    $info.css('visibility', '');
    $info.addClass('animated');
    $info.addClass('fadeIn');
},{ offset: '50%'});
var $win = $(window);
var $navbar = $('#mainnavbar');
var $brand = $('#brand');
var $menuIcons=$('.menu-icon');
$win.on('scroll', function(){
    var $bg = "rgba(0, 150, 136,"+$win.scrollTop()/900+") !important";
    $navbar.css('background-color', $bg);
    var $sizer = 40-((1+$win.scrollTop()-100)/10);
    var $iconSize= 30-((1+$win.scrollTop()-100)/10);

    if($win.scrollTop()>100 && $win.scrollTop()<200 ){
        $brand.css('height',$sizer+"px");
        $menuIcons.css('font-size',$iconSize+"px");
    }
    if($win.scrollTop()>200 ){
        $brand.css('height','30px');
        $menuIcons.css('font-size','20px');
    }
    if($win.scrollTop()<100){
        $brand.css('height','40px');
        $menuIcons.css('font-size','30px');
    }
});
