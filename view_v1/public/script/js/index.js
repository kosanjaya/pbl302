const dropdownButton = document.getElementById('dropdown');
const dropdownContent = document.getElementById('dropdown--Content');
const iconImage = document.getElementById('rotate-Icon');


dropdownButton.addEventListener('click', function() { 
  dropdownContent.classList.toggle('hidden');
  iconImage.classList.toggle('rotate-180');
});

document.addEventListener('click', function(event) {
  if (!dropdownButton.contains(event.target) && !dropdownContent.contains(event.target)) {
    dropdownContent.classList.add('hidden');
    iconImage.classList.remove('rotate-180');
  }
});

function selectOption(option) {
  dropdownButton.innerText = option;
  dropdownContent.classList.add('hidden');
  iconImage.classList.remove('rotate-180');
}
