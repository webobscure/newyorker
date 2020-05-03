<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/footer.css">
    <title>Document</title>
</head>
<body>
    <div id="footer" class="expanded">
  <div class="footer-toggle">
   <button id="footer-toggle"> <i class="fas fa-arrow-down" style="font-size: 1.5rem;"></i> </button> 
  </div>

  <div class="visible-area  ">
    <ul>
      <li class="item">
        <a href="https://www.newyorker.de/ru/legal/imprint/">
          <span class="link-text">Выходные данные</span>
        </a>
      </li>
      <li class="item">
        <a href="https://www.newyorker.de/ru/legal/privacy/">
          <span class="link-text">Политика конфиденциальности</span>
        </a>
      </li>
      <li class="item">
        <a href="https://www.newyorker.de/ru/company/contact/">
          <span class="link-text">Контактные данные</span>
        </a>
      </li>
      <li class="item">
        <a href="https://www.newyorker.de/ru/company/">
          <span class="link-text">Бренд</span>
        </a>
      </li>
    </ul>
  </div>
  <div class="invisible-area show">
    <div class="nav-left">
      <ul>
          <li class="item"><a href="https://vk.com/newyorker.fashion" target="_blank"><i class="fab fa-vk"></i></a></li>
          
          <li class="item">
            <a href="https://instagram.com/newyorkeronline/" target="_blank" title="Instagram">
              <i class="fab fa-instagram"></i>
            </a>
          </li>
          
          <li class="item">
            <a href="https://youtube.com/user/newyorkertv" target="_blank" title="Youtube">
              <i class="fab fa-youtube"></i>
            </a>
          </li>
          
          <li class="item">
            <a href="https://twitter.com/NewYorkerOnline" target="_blank" title="Twitter">
              <i class="fab fa-twitter"></i>
            </a>
          </li>
          <li class="item">
            <a href="https://pinterest.com/newyorkeronline/" target="_blank" title="Pinterest">
              <i class="fab fa-pinterest"></i>
            </a>
          </li>
      </ul>
    </div>
    <div class="nav-divider"></div>
    <div class="nav-right">
      <ul>
          <li class="item">
            <a href="/ru/newsletter/" target="pp_iframe">
              <i class="fas fa-envelope-open-text"></i>
              </span><span class="link-text">Электронная рассылка</span>
            </a>
          </li>
          <li class="item show-on-mobile">
            <a href="/ru/stores/">
              <i class="fas fa-globe"></i>
              </span><span class="link-text">Магазины</span>
            </a>
          </li>
      </ul>
    </div>
  </div>
</div>
<script>
        const footerToggle = document.querySelector('.footer-toggle');
        const area = document.querySelector('.invisible-area');
        footerToggle.addEventListener('click', () => {
            if (area.className != 'show') { area.className = 'show'; }
            else { area.className = 'hide'; }
        });
$( document ).ready(function(){
	  $( ".hide" ).click(function(){ // задаем функцию при нажатиии на элемент с классом hide
	    $( ".invisible-area" ).hide(); // скрывыаем все элементы <p>
	  });
	  $( ".show" ).click(function(){ // задаем функцию при нажатиии на элемент с классом show
	    $( ".invisible-area" ).show(); // отображаем все элементы <p>
	  });
	});


    </script>
</body>
</html>