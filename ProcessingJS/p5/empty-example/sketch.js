let angle;
let jitter;
let speed = 0.2;

function setup() {
  size(640, 360);
  noStroke();
  fill(255);
  rectMode(CENTER);
}

function draw() {
  background(51);

  angle += speed;
  float c = cos(angle);
  translate(width/2, height/2);
  rotate(c);
  rect(0, 0, 180, 180);   
}