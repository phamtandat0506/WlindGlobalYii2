// CIRCLE HST
let circles = document.querySelectorAll("div.circles > div");

Array.prototype.forEach.call(circles, function (circle, index) {
  let angle = (index * Math.PI) / 2.5;

  circle.style.top = Math.sin(angle) * 345 + "px";
  circle.style.left = Math.cos(angle) * 345 + "px";
});
// CIRCLE HST
