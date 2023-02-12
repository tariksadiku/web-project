const checkIfStandardEmail = (str) => {
    if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(str))
     {
       return (true)
     }
       alert("You have entered an invalid email address!")
       return (false)
}

console.log(document.querySelector('.loginButton'));

document.querySelector('.loginButton')?.addEventListener('click', (event) => {
    event.preventDefault();
    const emailInput = document.querySelector('.loginEmail').value;
    const password = document.querySelector('.loginPassword').value;

    if (checkIfStandardEmail(emailInput) && password.length > 7) {
        window.location.href = '/html/index.html';
    }
});

document.querySelector('.registerButton')?.addEventListener('click', (event) => {
  event.preventDefault();
  const emailInput = document.querySelector('.loginEmail').value;
  const password = document.querySelector('.loginPassword').value;
  const nameInput = document.querySelector('.loginName').value;
  const surnameInput = document.querySelector('.loginSurname').value;

  if ((checkIfStandardEmail(emailInput) && password.length > 7) && (nameInput.length > 7 && surnameInput.length > 7)) {
      window.location.href = '/html/login.html';
  }
});