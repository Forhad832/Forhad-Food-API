let pass = 'forhad';
let email = 'forhadhossain0619@gmail.com';

document.getElementById('loginBtn').addEventListener('click', function(e){
    e.preventDefault();
    let userEmail = document.getElementById('exampleInputEmail1').value;
    let userPass = document.getElementById('exampleInputPassword1').value;
    if(userEmail == email && userPass == pass){
        window.location.assign('/index.html');
        console.log('hello');
    }else{
        alert("Hey Tumi to Chul Korchoo")
    }
})