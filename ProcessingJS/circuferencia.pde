float angle;
float jitter;
float speed = 1.;
float x = width / 2;

void velocidade(String sIn) {
  //int x = Integer.parseInt(sIn); 
  int x = int(sIn);
  speed = x;
}

JavaScript javascript;

void setup() {
  size(360, 360);
  noStroke();
  fill(255);
  rectMode(CENTER);
}

void draw() {
  background(51);
  
  x += speed;
  ellipse(x, height / 2, 180, 180);

  if (x  - 180 > width){
    x = 10;
  }

}
