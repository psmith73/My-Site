let employees = [];
const urlAPI = `https://randomuser.me/api/?results=12&inc=name,picture,email,location,phone,dob&nat=US`;
const gridContainer = document.querySelector('.grid-container');
const overlay = document.querySelector('.overlay');
const modalContainer = document.querySelector('.modal-content');
const modalClose = document.querySelector('.modal-close');
let index;

//FETCH URL
fetch(urlAPI)
    .then(res => res.json())  //
    .then(res => res.results)
    .then(displayEmployees)
    .catch(err => console.log("Looks like there was a problem " + err));

//DISPLAY EMPLOYEE INFO ON CARDS
function displayEmployees(employeeData) {
  employees = employeeData; 
  let employeeHTML ='';
  employees.forEach((employee, index) => {
      let name = employee.name;
      let email = employee.email;
      let city = employee.location.city;
      let picture = employee.picture; 
      employeeHTML +=`
        <div class="card" data-index=${index}>
          <img class="avatar" src="${picture.large}" />
          <div class="text-container">
            <h2 class="name">${name.first} ${name.last}</h2>
            <p class="email">${email}</p>
            <p class="address">${city}</p>
          </div>
        </div>
        `;
  });

  gridContainer.innerHTML = employeeHTML;
}

//DISPLAY EMPLOYEE INFO ON OVERLAY
function displayModal(index) {
  let {name, dob, phone, email, location: {city, street, state, postcode}, picture} = employees[index];

  let date = new Date(dob.date);

  const modalHTML = `
    <img class = "avatar" src="${picture.large}" />
    <div class= "text.container">
      <h2 class= "name">${name.first} ${name.last}</h2>
      <p class= "email">${email}</p>
      <p class= "address">${city}</p>
      <hr />
      <p class= "phone">${phone}</p>
      <p class= "address">${street.number} ${street.name}, ${state} ${postcode}</p>
      <p class= "birthday"> Birthday: ${date.getMonth()}/${date.getDate()}/${date.getFullYear()}</p>
    </div>
    `;

    overlay.classList.remove("hidden");
    modalContainer.innerHTML = modalHTML;
}

//CLOSE OVERLAY
gridContainer.addEventListener('click', e => {
  if(e.target !== gridContainer) {
    const card = e.target.closest(".card");
    index = card.getAttribute('data-index');

    displayModal(index);
  }
});

modalClose.addEventListener('click', () => {
  overlay.classList.add("hidden");
});

//PREV & NEXT MOVEMENT ON OVERLAY
const prevBtn = document.querySelector('#left');
const nextBtn = document.querySelector('#right');
let cardMove;

prevBtn.addEventListener('click',() => {
  cardMove = parseInt(index);
  if(cardMove >= 1) {
  cardMove -= 1;
  index = cardMove;
  displayModal(cardMove);
  }
});

nextBtn.addEventListener('click',() => {
  cardMove = parseInt(index);
  if(cardMove <= 10) {
  cardMove += 1;
  index = cardMove;
  displayModal(cardMove);
  }
});

//SEARCH FUNCTIONALITY
const search = document.querySelector('.search');

search.addEventListener('keyup', (e) => {
    const input = e.target.value.toLowerCase();
    let cards = gridContainer.querySelectorAll('.card');

    cards.forEach( (person) => {
        const name = person.childNodes[3].childNodes[1].innerText.toLowerCase();
        if (!name.includes(input)) {
            person.classList.add('hidden');
        } else {
            person.classList.remove('hidden');
        }
    });
});