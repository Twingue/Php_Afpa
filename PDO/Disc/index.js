const inputs = document.querySelectorAll('input');

const patterns = {

  year: /(?:(?:18|19|20|21)[0-9]{2})/i,
 // price : /^([1-9][0-9]{,2}(,[0-9]{3})*|[0-9]+)(\.[0-9]{1,9})?$/i,
  price : /^\d+(?:[.,]\d+)?$/i,
 
};

inputs.forEach((input) => {
  input.addEventListener('keyup', (e) => {
    validate(e.target, patterns[e.target.attributes.id.value]);
  });
});
 function validate(field, regex) {
   if (regex.test(field.value)) {
    field.className = 'form-control valid';

  } else {
     field.className = 'form-control invalid';
   }
}

