
function copia() {
  var el = document.createElement('textarea');
  el.value = "ts.mozzarelle.cloud";
  el.setAttribute('readonly', '');
  el.style = {position: 'absolute', left: '-9999px'};
  document.body.appendChild(el);
  el.select();
  document.execCommand('copy');
  document.body.removeChild(el);
  alert("Hai copiato l'IP");
}



window.onmousemove = logMouseMove;



function logMouseMove(e) {

  var x = e.clientX-(window.innerWidth/2);
  var y = e.clientY-200;

  distanza = Math.sqrt((Math.pow(x,2))+Math.pow(y,2));

  angolo = (Math.atan2(x,y)*(180.0/Math.PI))+90;
	// console.log(-angolo);
  image = document.getElementById('testa');
  if(-angolo <= -90){
    image.src='images/flip.png'
    image.style = 'transform: rotate('+-angolo+ 'deg)';
  	image.style = '-moz-transform: rotate('+-angolo+ 'deg)';
  	image.style = '-webkit-transform: rotate('+-angolo+ 'deg)';
    // console.log("flippa");
  }
  else {
    image.src='images/testa.png'
    image.style = 'transform: rotate('+-angolo+ 'deg)';
	image.style = '-moz-transform: rotate('+-angolo+ 'deg)';
	image.style = '-webkit-transform: rotate('+-angolo+ 'deg)';
  }
}
