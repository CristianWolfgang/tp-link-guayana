import rootPath from "./root_path.js";
const d=document;
export default function loader(){
	const $loader = d.createElement("div");
	$loader.classList.add("loader");
	$loader.innerHTML = "<img src='"+rootPath+"/public/images/loader.svg'>";
	d.body.insertAdjacentElement("afterbegin",$loader);
	d.body.style.overflowY = "hidden";

	window.addEventListener("load",e=>{
		setTimeout(()=>{
			d.body.removeChild($loader);
			d.body.style.overflowY="auto";
		},2000);
	})
};