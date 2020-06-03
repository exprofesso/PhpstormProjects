

var localpoint1 = Math.round(Math.random()*5);
var localpoint2 = localpoint1 + 1;
var localpoint3 = localpoint2 + 1;


var hod;
var hit = 0;
var popytka = 0;
var itog = false;


while (itog == false){

    hot = prompt("Готовься стрелять, назови цифру от 0 до 6")
    if (hot < 0 || hot > 6){
        alert("Не верное число");
    } else {
        popytka = popytka + 1;

    if(hot == localpoint1 || hot == localpoint2  || hot == localpoint3){
        alert("Вы ПОПАЛИ!!!!");
        hit = hit + 1;
        if (hit == 3){
            itog = true;
            alert("ВЫ ПОТОПИЛИ КОРАБЛЬ!!!!")
        }

    } else {
        alert("МИМО пробуйте еще");
    }

    }
}

var rezultat = "Вам потребовалось " + popytka  + " ходов что бы потопить кораболь";
alert(rezultat);


