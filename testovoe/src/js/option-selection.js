const selectionChildren = document.querySelectorAll('.selection-child');

for (let i = 0; i < selectionChildren.length; i++) {
  const selectionChild = selectionChildren[i];
  selectionChild.addEventListener('click', function() {
    console.log(` нажал на ${this.id}`);
    const elements = document.querySelectorAll('.selection-check');
    elements.forEach(element => element.classList.remove('selected'));
    selectionChild.querySelector('.selection-check').classList.add('selected');

  });
}
