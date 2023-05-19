var canvas = document.getElementById('chart');

canvas.width = window.innerWidth;
canvas.height = window.innerHeight;

var c = canvas.getContext('2d');

c.fillRect(100, 100, 100, 100);
c.fillRect(300, 100, 100, 100);
c.fillRect(300, 300, 100, 100);

//line
c.beginPath();
c.moveTo(100,200);
c.lineTo(300, 100);
c.lineTo(400,300);
c.strokeStyle = "#fa34a3";
c.stroke();

//Circles
for(var i = 0; i < 100; i++){
    var x = Math.random() * window.innerWidth + 400;
    var y = Math.random() * window.innerHeight;
    c.beginPath();
    c.arc(x, y, 30, 0, Math.PI * 2, false);
    c.strokeStyle = 'blue';
    c.stroke();
}