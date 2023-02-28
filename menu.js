// Global variables
/*let pizzas = [];*/
let food = [];
let salad, meal, dessert, prepped, drink, puddin;

// Pizza object constructor
function FoodItem(salad, meal, dessert, prepped, drink, puddin, Cost) {
    this.saladName = salad,
        this.mealName = meal,
        this.dessertName = dessert,
        this.preppedMeals = prepped,
        this.drinkName = drink,
        this.puddinName = puddin,
        this.cost = Cost
}  
// get the user inputs
fetchInputs = () => {
    salad = document.getElementById("[name='salad']:checked").value;
    meal = document.querySelector("[name='meal']:checked").value;
    dessert = document.querySelectorAll("[name='dessert']:checked");
    prepped = document.querySelectorAll("[name='prepped']:checked");
    drink = document.querySelectorAll("[name='drink']:checked");
    puddin = document.querySelectorAll("[name='puddin']:checked");
    console.log(salad);
    console.log(meal);
    console.log(dessert);
    console.log(prepped);
    console.log(drink);
    console.log(puddin);
}
let totalcost;

// create new pizza object on every add
createFoodItem = () => {
    fetchInputs();
    meal = [];
    for (let i = 0; i < options.length; i++) {
        meal.push(options[i].value);
    };
    Cost = myFunction();
    function myFunction() {
        let saladCost
        let mealCost
        let dessertCost
        let preppedCost
        let drinkCost
        let puddinCost
        
        if (salad == 'Green Salad') {
            saladCost = 4.99;
        }
        console.log(saladCost);
        if (meal == 'Bugger') {
            mealCost = 3.99;
        }
        console.log(mealCost);
        if (dessert == 'Smoothie') {
            dessertCost = 2.99;
        }
        console.log(dessertCost);
        if (prepped == 'Prepped Salad') {
            preppedCost = 5.99;
        }
        console.log(preppedCost);
        if (drink == 'Lemon Juice') {
            drinkCost = 5.99;
        }
        console.log(drinkCost);
        if (puddin == 'Pudding') {
            puddinCost = 5.99;
        }
        console.log(puddinCost);
        
    }
    totalcost = crustCost + sizeCost + toppingsCost
        console.log(totalcost)
        return totalcost

};

const newFood = new FoodItem(salad, meal, dessert, prepped, drink, puddin, Cost)
food.push(newFood);
totalcost = 0;
for (let i = 0; i < food.length; i++) {
    totalcost += food[i].cost;
}

div = document.createElement('div')
div.setAttribute('class', 'list')
document.getElementById('item-list').appendChild(div)
p = document.createElement('p');
let orderText = document.createTextNode(newPizza.sizeName + ' ' + newPizza.crustName + ' ' + 'with' + ' ' + newPizza.toppingsType.join(', ').toString());
p.setAttribute('id', 'item');
p.appendChild(orderText);
div.appendChild(p);
p = document.createElement('p');
let subTotalText = document.createTextNode('@' + ' ' + newPizza.cost);
p.setAttribute('id', 'sub-total');
p.appendChild(subTotalText);
div.appendChild(p);
let totalText = ('Kshs' + ' ' + totalcost);
document.getElementById('totalCost').innerHTML = totalText
clearForm()
;

function clearForm(form) {
$(':input', form).each(function () {
    var type = this.type;
    var tag = this.tagName.toLowerCase();
    if (type == 'checkbox' || type == 'radio')
        this.checked = false;
    else if (tag == 'select')
        this.selectedIndex = 0;
});
};

