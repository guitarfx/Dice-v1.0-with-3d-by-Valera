function getFalseThrowLabel() {
  return `<section id="falseThrowLabel">
    <h1 class="noselect">Please throw the dice a little harder</h1>
  </section>`
}

var falseThrowLabel = null;

function showFalseThrowMessage() {
  var SHOW_TIME = 1200;

  if(!falseThrowLabel){
    falseThrowLabel = document.createElement('div');
    falseThrowLabel.innerHTML = getFalseThrowLabel();
    document.body.appendChild(falseThrowLabel);

    falseThrowLabel.style.opacity = "1";

    var tween = new TWEEN.Tween(falseThrowLabel.style)
          .to({ opacity: 0 }, SHOW_TIME)
          .easing(TWEEN.Easing.Quadratic.Out)
          .onUpdate(function() {
              //
          })
          .onComplete(function() {
            document.body.removeChild(falseThrowLabel);
            falseThrowLabel = null;
          })
          .start(); // Start the tween immediately.
    }
}
