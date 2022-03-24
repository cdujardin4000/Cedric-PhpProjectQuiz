$(function(){

    const FOOTER = $('footer');
    const NORESULTS = $('.no-result');
    const INPUT = $('#input');
    FOOTER.css({'padding-top': '2rem', 'padding-bottom': '2rem', 'margin-top': '2rem'});
    NORESULTS.css({'font-size': '2rem', 'margin': '2rem 0'});
    INPUT.css({'margin-bottom': '1rem'});
    $('.copyright').css({'text-align': 'center', 'color': '#ffca2c'});
    $('.mail:hover').css({'color': '#ffca2c'});
    $('.change-logo').css({'margin-top': '1rem'});
    $('label.statusMessage').css({'margin': '2rem 0','font-size': '2rem'});
    const TARGETSLIDER = $('.sliderTarget');
    let slider = document.createElement('div');
    slider.className = "slider";
    $('.slider').css({'position': 'relative','margin-top': '10rem'});

    let slide1 = document.createElement('div');
    slide1.className = "slide slide1";
    slider.append(slide1);

    let slide2 = document.createElement('div');
    slide2.className = "slide slide2";
    slider.append(slide2);

    let slide3 = document.createElement('div');
    slide3.className = "slide slide3";
    slider.append(slide3);

    let slide4 = document.createElement('div');
    slide4.className = "slide slide4";
    slider.append(slide4);

    let slide5 = document.createElement('div');
    slide5.className = "slide slide5";
    slider.append(slide5);

    console.log(slider);
    TARGETSLIDER.append(slider);
    $('.slider, .sliderTarget, .slide.slide1').css({'background': `url("./img/quiz1.jpg")`, 'background-size' : '100vw , 50%', 'background-position': 'center'});
    $('.slider, .sliderTarget, .slide.slide2').css({'background': 'url("./img/quiz2.jpg")', 'background-size' : '100vw , 50%', 'background-position': 'center'});
    $('.slider, .sliderTarget, .slide.slide3').css({'background': 'url("./img/quiz3.png")', 'background-size' : '100vw , 50%', 'background-position': 'center'});
    $('.slider, .sliderTarget, .slide.slide4').css({'background': 'url("./img/quiz4.jpg")', 'background-size' : '100vw , 50%', 'background-position': 'center'});
    $('.slider, .sliderTarget, .slide.slide5').css({'background': 'url("./img/quiz1.jpg")', 'background-size' : '100vw , 50%', 'background-position': 'center'});


});