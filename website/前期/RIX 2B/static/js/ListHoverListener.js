function ListHoverListener(liSelector, dtSelector, currClass, mouseoverEvent) {
	const firstLi = document.querySelector(liSelector + ':first-of-type');
	const firstDts = document.querySelectorAll(dtSelector + ':first-of-type');
	firstLi.classList.add(currClass);
	for(let i=0; i<firstDts.length; i++){
	  firstDts[i].classList.add(currClass);
	}
	const lis = document.querySelectorAll(liSelector);
	for(let i=0; i<lis.length; i++){
	  lis[i].addEventListener(mouseoverEvent, function(){
		const index = i + 1;
		const dts = document.querySelectorAll(dtSelector + ':nth-of-type(' + index + ')');
		this.classList.add(currClass);
		for(let j=0; j<dts.length; j++){
		  dts[j].classList.add(currClass);
		}
		for(let k=0; k<lis.length; k++){
		  if(k !== i){
			lis[k].classList.remove(currClass);
			const otherDts = document.querySelectorAll(dtSelector + ':nth-of-type(' + (k+1) + ')');
			for(let l=0; l<otherDts.length; l++){
			  otherDts[l].classList.remove(currClass);
			}
		  }
		}
	  });
	};
}