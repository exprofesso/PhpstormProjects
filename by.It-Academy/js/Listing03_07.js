var x = "Alfa";
show("Bravo");
function show(x) {
    document.write("<h1>Выполнение функции</h1>");
    document.write("<h2>Аргумент: "+x+"</h2>");
    document.write("Переменная: "+window.x+"<br>");

    for (x = 1; x < 10; x++){
        document.write(x);
    }



    var puzerki = [22,124, 3231, 17, 432, 25, 653, 352, 256, 654, 2, 13, 87, 63, 80, 54, 8, 91, 45, 82, 26, 77, 55, 246]
    var dlina = puzerki.length;
    alert(dlina);
}
