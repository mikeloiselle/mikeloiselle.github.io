var numbers = [];

function createBox() {
  for (i = 0; i < 3; i++) {
    document.getElementById("output").innerHTML +=
      "<img src=./assets/blank.png id=box" + i + ">";
  }
}

function equalOrNot() {
  // document.getElementById("output").innerHTML = "";

  function generate() {
    for (i = 0; i < 3; i++) {
      let num = Math.floor(Math.random() * 4 + 1);
      numbers.push(num);
      var current = "box" + i;
      if (numbers[i] == 1) {
        document.getElementById(current).src = "assets/mike.jpg";
      } else if (numbers[i] == 2) {
        document.getElementById(current).src = "assets/raph.jpg";
      } else if (numbers[i] == 3) {
        document.getElementById(current).src = "assets/leo.jpg";
      } else {
        document.getElementById(current).src = "assets/donny.jpg";
      }
    }
    //document.getElementById("output").innerHTML += "</br>";
    console.log(numbers);
    //return numbers;
    //numbers[0] = 1;
    //numbers[1] = 1;
    //numbers[2] = 1;

    if (numbers[0] == numbers[1] && numbers[1] == numbers[2]) {
      console.log("1 and 2 are equal");
      //document.getElementById("output").innerHTML +=
      //  "<img border: 0px; src=./assets/Mike.jpg>";
    }

    numbers = [];
  }

  // function checkMatch() {
  //   if (numbers[0] == numbers[1]) {
  //    console.log("1 and 2 are equal");
  //  }
  // }
  generate();
  // checkMatch();
}
