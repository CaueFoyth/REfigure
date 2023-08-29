function Logo1()
{
  window.location.replace("logado.php")
};

// Resize the prototype to fit in the window, switch to regular fullscreen mode on mobile screens
var container = document.querySelector('.iphoneWrapper'),
    screenMargin = .2,
    desktopmode = 640;

function resizeScreen() {
  var screenHeight = container.offsetHeight,
      screenWidth = container.offsetWidth,
      windowHeight = document.documentElement.clientHeight / (1 + screenMargin),
      windowWidth = document.documentElement.clientWidth / (1 + screenMargin),
      windowFullWidth = document.body.offsetWidth,
      scale;

  if (windowFullWidth < desktopmode) {
    container.style.transform = '';
    return;
  }

  scale = Math.min(windowWidth/screenWidth, windowHeight/screenHeight);

  if (scale < 1) {
    container.style.transform = 'translate(-50%, -50%) scale(' + scale + ')';
  } else {
    container.style.transform = 'translate(-50%, -50%) scale(1)';
  };
};

window.onresize = resizeScreen;
resizeScreen();

// Payment: Expand the accordion
var radios = document.querySelectorAll('.payment-radioGroup > input');

for (var i = 0; i < radios.length; i++) {
  radios[i].addEventListener('change', expandAccordion);
}

function expandAccordion (event) {
  var allTabs = document.querySelectorAll('.payment-tab');
  for (var i = 0; i < allTabs.length; i++) {
    allTabs[i].classList.remove('payment-tab-isActive');
  }
  event.target.parentNode.parentNode.classList.add('payment-tab-isActive');
}