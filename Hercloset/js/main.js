const grid = new Muuri('.grid', {
    layout: {
      rounding: false
    }
});

/*Para cargar las imagenes con una transicion*/
window.addEventListener('load', () => {
  grid.refreshItems().layout();
  document.getElementById('grid').classList.add('img-charging');
  
  /*Para filtrar las imagenes por categoria*/
  const enlaces = document.querySelectorAll('#categorias a');
  enlaces.forEach((elemento) => {
    elemento.addEventListener('click', (evento) => {
      /*Para evitar el comportamiento por defecto del navegador*/
      evento.preventDefault();
      enlaces.forEach((enlace) => enlace.classList.remove('activo'))
      evento.target.classList.add('activo');
      const categoria = evento.target.innerHTML.toLowerCase();
      categoria === 'todos' ? grid.filter('[data-categoria]') : grid.filter(`[data-categoria="${categoria}"]`);
    });
  });
  
  //Agregamos el listener para la barra de busqueda
  document.querySelector('#barra-busqueda').addEventListener('input', (evento)  => {
    const busqueda = evento.target.value;
    grid.filter((item) => item.getElement().dataset.etiquetas.includes(busqueda));
  });
});