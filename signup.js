let erroreUs = false;
let errorePw = false;

function Username(event) {
    const input = event.currentTarget;
    input.classList.remove('bordoRosso');
    
    console.log(input.value);
    if(input.value === "") {
        erroreUs = true;
        input.classList.add('bordoRosso');
    } else{
        erroreUs = false;
    }
}
function Speciali(str) {
      const caratteriSpeciali = "$%&/()";
      for (let i = 0; i < str.length; i++) {
        if (caratteriSpeciali.includes(str[i])) {
          return true;
        }
      }
      return false;
    }
function Pass(event) {
    const passwordInput = event.currentTarget;
    passwordInput.classList.remove('bordoRosso');
    console.log(passwordInput.value);
    if(passwordInput.value.length < 8 || !Speciali(passwordInput.value)){ 
         errorePw = true;
        passwordInput.classList.add('bordoRosso');
    }
    else{
        errorePw = false;
    }

}

function Registra(event) {
    if(erroreUs || errorePw){
        event.preventDefault();
    }
}


document.querySelector('#username').addEventListener('blur', Username);
document.querySelector('#password').addEventListener('blur', Pass);
document.querySelector('form').addEventListener('submit', Registra);