/*------------------------------------------------------------------------------
Fonction qui déplace horizontalement le carrousel selon le bouton touché
----------------------------------------------------------------------------- */
(function(){
			let carroussel = document.querySelectorAll('.carroussel2');
			let ctrlCarroussel = document.querySelectorAll('.ctrl-carroussel');
			let noCtrlCarroussel = 0;
			for(const elmCarrou of carroussel)
			{
			
			let bout = ctrlCarroussel[noCtrlCarroussel].querySelectorAll('input');
			noCtrlCarroussel++;

			let noBouton = 0;
			bout[0].checked = true;
			for (const bt of bout) {
				bt.value = noBouton++;
				console.log(bout.value);
				bt.addEventListener('mousedown', function(){
					elmCarrou.style.transform = "translateX("+ (-this.value * 100) +"vw)";
					console.log(elmCarrou.style.transform);
				})
			}
		}
        }())
