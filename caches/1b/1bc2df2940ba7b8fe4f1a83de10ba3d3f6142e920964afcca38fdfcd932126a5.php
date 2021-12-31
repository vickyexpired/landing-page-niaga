<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* landing.html */
class __TwigTemplate_0abe985d719e72bab93bf000143d113a79f03aca62bef94eed295f984729c5be extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!doctype html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <link rel=\"stylesheet\" type=\"text/css\" href=\"assets/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css\" integrity=\"sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" />

    <link rel=\"stylesheet\" type=\"text/css\" href=\"assets/css/custom.css\">

    <title>Landing Page - Niagahoster</title>
  </head>
  <body>
    <header class=\"site-header\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-12 col-md-7\">Gratis Ebook 9 Cara Cerdas Menggunakan domain [ x ]</div>
          <div class=\"col-12 col-md-5 text-right\">
            <i class=\"fas fa-phone-alt\"></i> 0274-5305505
            <i class=\"fas fa-comment\"></i> Live Chat
            <i class=\"fas fa-user-circle\"></i> Member Area
          </div>
        </div>
      </div>
    </header>
    <nav class=\"ec-nav sticky-top bg-white\">
      <div class=\"container\">
        <div class=\"navbar p-0 navbar-expand-lg\">
          <div class=\"navbar-brand\">
            <a class=\"logo-default\" href=\"#\"><img alt=\"\" src=\"assets/svg/nh-logo-blue.svg\" width=\"300\"></a>
          </div>
          <span aria-expanded=\"false\" class=\"navbar-toggler ml-auto collapsed\" data-target=\"#ec-nav__collapsible\" data-toggle=\"collapse\">
            <div class=\"hamburger hamburger--spin js-hamburger\">
              <div class=\"hamburger-box\">
                <div class=\"hamburger-inner\"></div>
              </div>
            </div>
          </span>
          <div class=\"collapse navbar-collapse when-collapsed\" id=\"ec-nav__collapsible\">
            <ul class=\"nav navbar-nav ec-nav__navbar ml-auto\">
              <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">Hosting</a>
              </li>
              <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">Domain</a>
              </li>
              <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">Server</a>
              </li>
              <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">Website</a>
              </li>
              <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">Afiliasi</a>
              </li>
              <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">Promo</a>
              </li>
              <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">Pembayaran</a>
              </li>
              <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">Review</a>
              </li>
              <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">Kontak</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
    <section id=\"hero\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col\">
            <h2>PHP HOSTING</h2>
            <h3>Cepat, handal, penuh dengan modul PHP yang Anda butuhkan</h3>
            <ul>
              <li>Solusi PHP untuk performa query yang lebih cepat.</li>
              <li>Konsumsi memori yang lebih rendah.</li>
              <li>Support PHP 5.3, PHP 5.4, PHP 5.5, PHP 5.6, PHP 7</li>
              <li>Fitur enkripsi IonCube dan Zend Guard Loaders</li>
            </ul>
          </div>
          <div class=\"col text-right\">
            <img src=\"assets/svg/illustration banner PHP hosting-01.svg\" width=\"420\">
          </div>
        </div>
      </div>
    </section>

    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p\" crossorigin=\"anonymous\"></script>
  </body>
</html>";
    }

    public function getTemplateName()
    {
        return "landing.html";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "landing.html", "/Applications/XAMPP/xamppfiles/htdocs/landing-niaga/templates/landing.html");
    }
}
