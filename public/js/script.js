document.onreadystatechange = function () {
    if(window.location.pathname=="/progress"){
        Slide_Button_Show_Event();
        Slider_Season();
    }
    if(window.location.pathname=="/"){
        infoClick();
    }
    if(window.location.pathname=="/info"){
        sliderStage();
    }
};
function sliderStage(){
    $('.hovertab').click(function () {
       if($('.hovertab').hasClass('js-hovertab')){
           $('.hovertab').removeClass('js-hovertab');
       }
       $(this).addClass('js-hovertab');
    });
}
function infoClick(){
    $('.main-CourseContainer').click(function () {
        window.location.replace("/info");
    });
}

function Slider_Season() {
    let Slides = document.querySelectorAll('.JS-PS-Slide');
    let SlideLeft = document.getElementById('SlideSwapLeft');
    let SlideRight = document.getElementById('SlideSwapRight');
    SlideRight.onclick = function () {
        for (let j = 0; j < Slides.length; j++) {
            if (!(Slides[j].classList.contains('PS-Slide-Hide'))) {
                console.log(Slides[j].classList.contains('PS-Slide-Hide'));
                if (Slides[j].nextElementSibling != null) {
                    Slides[j].classList.add('PS-Slide-Hide');
                    Slides[j].nextElementSibling.classList.remove('PS-Slide-Hide');
                    ShowSeasonInfo();
                    break;
                }
            }
        }
    };
    SlideLeft.onclick = function () {
        for (let j = 0; j < Slides.length; j++) {
            if (!(Slides[j].classList.contains('PS-Slide-Hide'))) {
                if (Slides[j].previousElementSibling != null) {
                    Slides[j].classList.add('PS-Slide-Hide');
                    Slides[j].previousElementSibling.classList.remove('PS-Slide-Hide');
                    ShowSeasonInfo();
                    break;
                }
            }
        }
    };
}

function ShowSeasonInfo() {
    let Slide = document.querySelector('.JS-PS-Slide.PS-Slide:not(.PS-Slide-Hide) .JS-Slide-Season-Info');
    //console.debug(Slide.querySelector('.JS-Season'));
    let DataStart = Slide.querySelector('.JS-Data-Start').textContent;
    let Season = Slide.querySelector('.JS-Season').textContent;
    let DataEnd = Slide.querySelector('.JS-Data-End').textContent;
    document.querySelector('.JS-Data-Start-Show').textContent = DataStart;
    document.querySelector('.JS-Season-Show').textContent = Season;
    document.querySelector('.JS-Data-End-Show').textContent = DataEnd;
}

function Slide_Button_Show_Event() {
    let Slide_Buttons_Click = document.querySelectorAll('.JS-PS-Slide-Row-Main-Show');
    for (let i = 0; i < Slide_Buttons_Click.length; i++) {
        Slide_Buttons_Click[i].onclick = SBC_Event;
    }

    function SBC_Event() {
        let HiddingRow = this.parentNode.nextElementSibling;
        if (HiddingRow.classList.contains('PS-Slide-Rows-Second-Hide')) {
            HiddingRow.classList.toggle('PS-Slide-Rows-Second-Hide');
            this.textContent = "(скрыть)";
        } else {
            HiddingRow.classList.toggle('PS-Slide-Rows-Second-Hide');
            this.textContent = "(раскрыть)";
        }
    };
}