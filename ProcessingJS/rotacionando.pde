float angle = 5.0;

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


    angle += angle;
    let c = cos(angle);
    translate(width / 2, height / 2);
    rotate(c);

    rect(0, 0, 180, 180);

}
