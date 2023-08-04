let pass = 'forhad';
let email = 'forhadhossain0619@gmail.com';

document.getElementById('loginBtn').addEventListener('click', function(e){
    e.preventDefault();
    let userEmail = document.getElementById('exampleInputEmail1').value;
    let userPass = document.getElementById('exampleInputPassword1').value;
    if(userEmail == email && userPass == pass){
        window.location.assign('/forhadFood.php');
        console.log('hello');
    }else{
        alert("Hey Tumi to Chul Korchoo")
    }
})

// const calculate = (num1,num2,text)=>{
//     if(text == 'add'){
//         const add = num1 + num2;
//         console.log(add);
//     }else if(text == 'subtract'){
//         const subtract = num1 - num2;
//         console.log(subtract);
//     }else if(text == 'multiply'){
//         const multiply = num1 * num2;
//         console.log(multiply);
//     }else if(text == 'modulus'){
//         const modulus = num1%num2;
//         console.log(modulus);
//     }else{
//         console.log('invalid oparation');
//     }
// }

// calculate(20,10,'add');
// calculate(20,10,'subtract');
// calculate(20,10,'multiply');
// calculate(20,10,'modulus');
// calculate(20,10,'sum');