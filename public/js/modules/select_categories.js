import rootPath from "./root_path.js";
const d = document;
export default function selectCategories(){
	d.addEventListener("change",e=>{
		if(e.target.matches('#header__nav-select')){
			if(e.target.value !== "categorías"){
				location.href= rootPath+"/category/"+e.target.value;

			}			
		}
	})
}