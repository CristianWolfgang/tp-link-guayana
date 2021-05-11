const d = document;
export default function selectCategories(){
	d.addEventListener("submit",e=>{
		if(e.target.matches('.navbar__search-form')){
			e.preventDefault();
			location.href= "http://localhost/tp-link-guayana/search?q="+e.target.search.value;
		}
	})
}