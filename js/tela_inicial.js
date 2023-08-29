function esqueceu()
{
  window.location.replace("senhaEsqueceu.php")
};

function cadastro()
{
  window.location.replace("Cadastro.html")
};

function Conta()
{
  window.location.replace("conta.php")
};
function adm()
{
  window.location.replace("adm_page.html")
};

function Logo1()
{
  window.location.replace("logado.php")
};

function Logo()
{
  window.location.replace("index.html")
};

function entrar()
{
  window.location.replace("login.php")
};


function carrinho()
{
  window.location.replace("carrinho.php")
};

function categoriaanimal()
{
  window.location.replace("categoria_animal.html")
};

function categoriaspeb()
{
  window.location.replace("categoria_pb.html")
};

function categoriascolorido()
{
  window.location.replace("categoria_colorido.html")
};

/* Abre e fecha menu lateral em modo mobile */

const menuMobile = document.querySelector(".menu-mobile");
const body = document.querySelector("body");

menuMobile.addEventListener("click", () => {
    menuMobile.classList.contains("bi-list")
    ? menuMobile.classList.replace("bi-list", "bi-x")
    : menuMobile.classList.replace("bi-x", "bi-list");
    body.classList.toggle("menu-nav-active");
});

/* Fecha o menu quando clicar em algum item e muda o icone para list */

const navitem = document.querySelectorAll('.nav-item')

navitem.forEach(item => {
    item.addEventListener("click", () => {
        if (body.classList.contains("menu-nav-active")) {
            body.classList.remove("menu-nav-active")
            menuMobile.classList.replace("bi-x", "bi-list")
        }
    })
});

const nav = document.querySelector('nav');

nav.addEventListener('touchstart', function() {
  nav.classList.toggle('hover');
});

let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
};

function myFunction() {
  let text = "Para continuar você precisa estar logado";
  if (confirm(text) == true) {
    window.location.replace ('login.php')
  }
}
function lancamentos()
{
  window.location.replace("lancamentos.html")
}

function categorias()
{
  window.location.replace("categorias.html")
};

function filamento()
{
  window.location.replace("filamento.html")
};

function termos()
{
  window.location.replace("termos.html")
};

function suporte()
{
  window.location.replace("suporte.html")
};

function p1()
{
  window.location.replace("compraUrubu.php")
};

function p2()
{
  window.location.replace("CompraBurgues.php")
};

function p3()
{
  window.location.replace("CompraCapitao.php")
};

function p4()
{
  window.location.replace("CompraMago.php")
};

function p5()
{
  window.location.replace("CompraPirata.php")
};

function p6()
{
  window.location.replace("CompraRobo.php")
};

function p7()
{
  window.location.replace("CompraDino.php")
};

function p8()
{
  window.location.replace("CompraMamute.php")
};

function p9()
{
  window.location.replace("CompraRuivo.php")
};

function p10()
{
  window.location.replace("CompraMumia.php")
};

function p11()
{
  window.location.replace("CompraMonstro.php")
};

function p12()
{
  window.location.replace("compraTubarao.php")
};

function p13()
{
  window.location.replace("CompraPinguim.php")
};

function p14()
{
  window.location.replace("CompraGato.php")
};

function p15()
{
  window.location.replace("CompraOgro.php")
};