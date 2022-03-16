import rootPath from "./root_path.js";
const d = document;
export default function selectCategories(){
	d.addEventListener("submit",e=>{
		if(e.target.matches('.navbar__search-form')){
			e.preventDefault();
			location.href= rootPath+"/search.php?search="+e.target.search.value;
		}
	})
}