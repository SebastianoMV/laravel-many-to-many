require('./bootstrap');


console.log('qua ci sto entranto');

//alert('1');

document.getElementById('formCreate').addEventListener('submit', function(event) {

  
  
  const titolo = document.forms["myForm"]["title"].value;

  if (titolo == "") {
    event.preventDefault();
    alert("Title non può essere vuoto");
  }
  event.return
  Value = false;

});

