const linebar = document.querySelector('.linebar');
const nabr = document.querySelector('.navbr');
const links = document.querySelectorAll('.navbr li');

linebar.addEventListener("click", () => {
	nabr.classList.toggle("open");
});