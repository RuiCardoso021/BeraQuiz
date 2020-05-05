let caja = document.querySelector('.caja');
let temporizador = {
  cuenta: 6
};

let actualizar = function() {
  caja.innerHTML = parseInt(temporizador.cuenta, 6);
};

let tween = TweenLite.to(
  temporizador,
  6, 
  {
    cuenta: 0, 
    onUpdate: actualizar
  }
);