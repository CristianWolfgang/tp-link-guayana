const d = document;
export default function voiceRecon(){
	if('webkitSpeechRecognition' in window){
		d.addEventListener("DOMContentLoaded",e=>{
			const recon = new webkitSpeechRecognition(),
			$speakBox = d.createElement("div"),
			$speakBtn = d.createElement("button");
			$speakBox.id = "speak-box";
			$speakBtn.id="speak-btn";
			$speakBox.innerHTML=`<h2>Busqueda por voz</h2>
								<br>
								<br>
    							<h3>Escuchando...</h3>
    							<h3 id='result'></h3>`;
			$speakBtn.innerHTML=`<img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fmaxcdn.icons8.com%2FShare%2Ficon%2Fp1em%2FMusic%2Fmicrophone1600.png&f=1&nofb=1" alt="">`;
			d.body.insertAdjacentElement("afterbegin",$speakBox);
			d.querySelector(".navbar__search-form").insertAdjacentElement("afterend",$speakBtn);

			d.addEventListener("click",e=>{
				if(e.target.matches("#speak-btn") || e.target.matches("#speak-btn *")){
					recon.start();
				}
			})

			recon.continous = true;
			recon.interimResults = true;
			recon.lang = "es-VE";


			recon.onstart=e=>{
				d.documentElement.style.overflow = "hidden";
				$speakBox.style.display="block";
				d.getElementById("navbar").classList.remove("navbar-active");
			}
			recon.onresult=e=>{
				let results = Array.from(e.results),myResult;
				results.forEach(result=>{
					myResult = result[0].transcript;
					$speakBox.querySelector("#result").textContent=myResult;
				})
				setTimeout(()=>{
						location.href="http://localhost/tp-link-guayana/search?q="+myResult;
				},3500);
			}
			recon.onerror=e=>{
				
			}
			recon.onend=e=>{
				setTimeout(()=>{

					d.documentElement.style.overflow = "auto";
					$speakBox.style.display="none";
					d.getElementById("navbar").classList.add("navbar-active");
					
				},3000)
			}




			

		})
	}
}