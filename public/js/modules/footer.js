const d = document;
export default function footer() {
	const $footer = d.querySelector(".footer__p");
	$footer.innerHTML += new Date().getFullYear();
}