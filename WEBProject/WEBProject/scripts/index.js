let mainSliderIndex = 0;

const showSliderImage = (arrowIndex) => {
    document.querySelectorAll('.main_image').forEach((mainImage, index) => {
        if (arrowIndex === index) {
            mainImage.classList.add('show_main_image')
        } else {
            mainImage.classList.remove('show_main_image');
        }
    });
};

document.querySelectorAll('.arrow-left, .arrow-right').forEach((arrow) => {
    arrow.addEventListener('click', (event) => {
        if (event.target.classList.contains('arrow-left') && mainSliderIndex !== 0) {
            mainSliderIndex = mainSliderIndex - 1;
        }

        if (event.target.classList.contains('arrow-right')) {
            if (mainSliderIndex < 2) {
                mainSliderIndex = mainSliderIndex + 1;
            } else {
                mainSliderIndex = 0;
            }
        }

        showSliderImage(mainSliderIndex);
    });
});