const loadMeals = (searText)=>{
    const url = `https://www.themealdb.com/api/json/v1/1/search.php?s=${searText}`;

    fetch(url).then(res=> res.json())
    .then(data=> displayMeals(data.meals));
    document.getElementById('spinner').style.display = 'block';
   
}

const displayMeals = meals =>{
    const foodContainer = document.getElementById('food-container');
    foodContainer.innerHTML = '';
    
    meals.forEach((meal)=>{
    
        const newDiv = document.createElement('div');
        newDiv.classList.add('col-lg-6');
        newDiv.classList.add('item');
        newDiv.classList.add('mb-4');
        newDiv.innerHTML = `
        <div class="row shadow rounded align-items-center">
        <div class="col-lg-5">
            <img src="${meal.strMealThumb}" class="img-fluid" alt="food-item">
        </div>
        <div class="col-lg-7 food-item ">
            <h3>${meal.strMeal}</h3>
            <p>There are many variations of passages of available, but the majority have suffered</p>
           
            <button onclick="detailsMeal(${meal.idMeal})" type="button" class="border-0" data-bs-toggle="modal" data-bs-target="#mealsModal">
            View Details
  </button>
            </div>
        </div>
        `;
        foodContainer.appendChild(newDiv);
    document.getElementById('spinner').style.display = 'block';

    })
}

const detailsMeal = (idMeal)=>{
    const url = `https://www.themealdb.com/api/json/v1/1/lookup.php?i=${idMeal}`
    fetch(url)
    .then(res=> res.json())
    .then(data => showDetails(data.meals));

}
function showDetails(items){

    items.forEach((item)=>{
     
        const img = document.getElementById('img');
        img.src = item.strMealThumb;
           const exampleModalLabel = document.getElementById('exampleModalLabel');
        exampleModalLabel.innerText = item.strMeal;
    })
 
}
document.getElementById('searchBtn').addEventListener('click', function(){
    const input_filed = document.getElementById('input_filed').value;
    loadMeals(input_filed);
})
loadMeals('');


document.getElementById('showAllBtn').addEventListener('click', function(){
    const item = [...document.querySelectorAll('.item')];

    const currentElement = 6;
    for (let i = currentElement; i<item.length ; i++){
        item[i].style.display = 'block';
        console.log(item[i]);
    }

});
