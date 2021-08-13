let form = document.querySelector('#form');

form.addEventListener('submit', (e) => {

  e.preventDefault();

  let denomination = document.querySelector('#denomination').value;
  let sum = document.querySelector('#sum').value;

  data = {
    'denomination': denomination,
    'sum': sum
  }

  async function postData(url = '', data = {}) {
    const response = await fetch(url, {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json'
      },
      body: JSON.stringify(data)
    });
    return await response.json();
  }

  postData('script.php', data)
    .then((data) => {
      changeContent(data.response);
    });

});

function changeContent(response) {

  let table = document.querySelector('#table');

  if (response.error == true) {
    table.innerHTML = '<tr><td><p>' + response['textError'] + '</p></td></tr>';
  }
  else {
    table.innerHTML = '<tr><td>Купюра</td><td>Количество</td></tr>';
    for (const key in response) {
      table.innerHTML += `<tr><td>${key}</td><td>${response[key]}</td></tr>`;
    }
  }
}


  
  
  