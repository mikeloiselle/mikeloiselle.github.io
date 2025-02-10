function generate() {
  let numbers = [];
  for (i = 0; i < 10; i++) {
    let num = Math.floor(Math.random() * 100 + 1);
    numbers.push(num);
    console.log(numbers);
    document.getElementById("output").innerHTML += numbers[i] + "</br>";
  }
  document.getElementById("output").innerHTML += "</br>";
}

function generate2() {
  let attributes = ['Strength','Agility','Endurance','Intuition','Logic','Willpower','Charisma','Luck','Reputation','Magic'];
    let numbers = [];
    document.getElementById("better").innerHTML += "Name:__________________________</br></br>" + "Class__________________________</br></br>";
  for (i = 0; i < 10; i++) {
    let num = Math.floor(Math.random() * 100 + 1);
    numbers.push(num);
    console.log(numbers);
    document.getElementById("better").innerHTML += attributes[i] + ": "+ numbers[i]  +"</br>";
  }
  document.getElementById("better").innerHTML += "</br>";
}

