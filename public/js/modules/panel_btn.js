const d = document;
export default function panelBtn(){
	const $panel = d.getElementById("navbar"),
	$btn = d.getElementById("panel-btn");
	d.addEventListener("click",e=>{
		if(e.target.matches("#panel-btn") || e.target.matches("#panel-btn *")){
			
			$btn.classList.toggle("is-active");
			$panel.classList.toggle("navbar-active");
		}
	})
}