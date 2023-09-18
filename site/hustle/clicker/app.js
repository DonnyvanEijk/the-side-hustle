let counthustle = document.getElementById('counthustle');
let hustlescounted = 0;
let hustle = document.getElementById('hustle');
let money = 0;
hustle.addEventListener('click', function() {
hustlescounted++
counthustle.innerText = hustlescounted
})

let dishes = 0;
let dishesprice = 10;



something.addEventListener('click', function() {
if(dishesprice < dishes) {
dishes -= dishesprice
dishesprice *= 1.1
dishesprice.innerText = dishesprice
dishes.innerText = dishes


}
})
setInterval(function() {
money++

}, 5000)
