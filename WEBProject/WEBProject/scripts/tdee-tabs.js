const totalCaloriesText = document.querySelector('.macronutrient-meaning strong');
const totalCalories = +totalCaloriesText.textContent;

document.querySelectorAll('.three-stages p').forEach((element, index) => {

    element.addEventListener('click', (event) => {
        document.querySelectorAll('.three-stages p').forEach((element) => element.classList.remove('active-macronutrient'));
        event.target.closest('p').classList.add('active-macronutrient');

        const activity = element.closest('p').textContent.trim();
        
        if (activity === 'Cutting') {
            totalCaloriesText.textContent = (totalCalories - 250);
        } else if (activity === 'Bulking') {
            totalCaloriesText.textContent = (totalCalories + 250);
        } else {
            totalCaloriesText.textContent = (totalCalories);
        }
 

        document.querySelectorAll('.ratios .maintenance-nutrient, .ratios .cutting-nutrient, .ratios .bulking-nutrient').forEach((nutrientBox, nodeIndex) => {
            if (index === nodeIndex) {
                nutrientBox.classList.add('show-nutrient-tab');
            } else {
                nutrientBox.classList.remove('show-nutrient-tab');
            }
        });
    });
});