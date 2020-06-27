const canvas = document.querySelector('#draw');
const ctx = canvas.getContext('2d');
canvas.width = window.innerWidth;
canvas.height = window.innerHeight;
ctx.strokeStyle = '#000';
ctx.lineJoin = 'round';
ctx.lineCap = 'round';
ctx.lineWidth = 1;
const colorDeFondo = '#fff';
ctx.fillStyle = colorDeFondo;
//ctx.globalCompositeOperation = 'multiply';
let isDrawing = false;
let lastX = 0;
let lastY = 0;
// let hue = 0;
// let direction = true;
function draw(e) {
    
    if (!isDrawing) return; //Stop the function if the user has not pressed left mouse button.
    // ctx.strokeStyle = `hsl(${hue}, 100%, 50%)`;
    ctx.beginPath();
    ctx.moveTo(lastX, lastY);
    ctx.lineTo(e.offsetX, e.offsetY);
    ctx.stroke();
    [lastX, lastY] = [e.offsetX, e.offsetY];
    // hue++;
    // if (hue >= 360) {
    //     hue = 0;
    // }
    // if (ctx.lineWidth >= 100 || ctx.lineWidth <= 1) {
    //     console.log(direction);
    //     direction = !direction;
    // }
    // if (direction) {
    //     ctx.lineWidth++;
    // } else {
    //     ctx.lineWidth--;
    // }
}
window.addEventListener('mousedown', (e) => {
    isDrawing = true;
    [lastX, lastY] = [e.offsetX, e.offsetY];
});
window.addEventListener('mousemove', draw);
window.addEventListener('mouseup', () => isDrawing = false);
window.addEventListener('mouseout', () => isDrawing = false);

 function LimpiarTrazado(){

      ctx.fillStyle = colorDeFondo;
      ctx.fillRect(0,0,window.innerWidth,window.innerHeight);
    }