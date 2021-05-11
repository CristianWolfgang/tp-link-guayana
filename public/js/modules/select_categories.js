const d = document;
export default function selectCategories(){
	d.addEventListener("change",e=>{
		if(e.target.matches('#header__nav-select')){
			if(e.target.value !== "categorías"){
				location.href= "http://localhost/tp-link-guayana/category/"+e.target.value;

			}			
		}
	})
}