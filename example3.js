function equalOrNot() {
    let num1 = Math.floor(Math.random() * 3 + 1);
    let num2 = Math.floor(Math.random() *3 +1);
    console.log(num1,num2);
    document.getElementById("output").innerHTML = "First number is " + num1 + "</br>" + "Second number is " + num2 + "</br>";
    
    if (num1 == num2){
        console.log("equals");
        document.getElementById("output").innerHTML += "Equal";
        
    }
    else {
        console.log("Not equals");
        document.getElementById("output").innerHTML += "Not equal";
    }

}