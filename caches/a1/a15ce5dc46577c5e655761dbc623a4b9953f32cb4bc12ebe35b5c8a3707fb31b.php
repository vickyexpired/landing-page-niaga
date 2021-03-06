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
class __TwigTemplate_305b625d8fae53852f500eb98a424755a367a3628ed2f2f858a8d011c49c5569 extends Template
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

    <link rel=\"stylesheet\" type=\"text/css\" href=\"assets/css/custom.min.css\">

    <title>Landing Page - Niagahoster</title>
  </head>
  <body>
    <header class=\"site-header\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-12 col-md-7 text-promo\">
            <img src=\"assets/images/tag.png\" width=\"24\">
            Gratis Ebook 9 Cara Cerdas Menggunakan domain [ x ]
          </div>
          <div class=\"col-12 col-md-5 text-md-right\">
            <span class=\"contact\"><i class=\"fas fa-phone-alt mr-md-3\"></i> 0274-5305505</span>
            <span class=\"contact\"><i class=\"fas fa-comments mr-md-3\"></i> Live Chat</span>
            <span class=\"icon-member\"><i class=\"fas fa-user-circle\"></i></span> Member Area
          </div>
        </div>
      </div>
    </header>
    <nav class=\"ec-nav sticky-top bg-white\">
      <div class=\"container\">
        <div class=\"navbar p-0 navbar-expand-lg\">
          <div class=\"navbar-brand\">
            <a class=\"logo-default\" href=\"#\"><img alt=\"Logo Niagahoster\" src=\"assets/svg/nh-logo-blue.svg\" class=\"img-fluid\"></a>
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
          <div class=\"col-md-6 col-12\">
            <h2>PHP HOSTING</h2>
            <h3>Cepat, handal, penuh dengan modul PHP yang Anda butuhkan</h3>
            <ul>
              <li>Solusi PHP untuk performa query yang lebih cepat.</li>
              <li>Konsumsi memori yang lebih rendah.</li>
              <li>Support PHP 5.3, PHP 5.4, PHP 5.5, PHP 5.6, PHP 7</li>
              <li>Fitur enkripsi IonCube dan Zend Guard Loaders</li>
            </ul>
          </div>
          <div class=\"col-md-6 col-12 text-md-right text-sm-center\">
            <img src=\"assets/svg/illustration banner PHP hosting-01.svg\" width=\"420\">
          </div>
        </div>
      </div>
    </section>
    <section id=\"feature\">
      <div class=\"container feature-box\">
        <div class=\"row\">
          <div class=\"col-md-4\">
            <div class=\"img-feature text-center first\">
              <img src=\"assets/svg/illustration-banner-PHP-zenguard01.svg\" width=\"180\">
            </div>
            <div class=\"text-feature text-center\">
              PHP Zend Guard Loader
            </div>
          </div>
          <div class=\"col-md-4\">
            <div class=\"img-feature text-center\">
              <img src=\"assets/svg/icon-composer.svg\" width=\"130\">
            </div>
            <div class=\"text-feature text-center\">
              PHP Composer
            </div>
          </div>
          <div class=\"col-md-4\">
            <div class=\"img-feature text-center last\">
              <img src=\"assets/svg/icon-php-hosting-ioncube.svg\" width=\"180\">
            </div>
            <div class=\"text-feature text-center\">
              PHP ionCube Loader
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id=\"pricing\" class=\"pt-3 mb-3\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col text-center\">
            <h2>Paket Hosting Singapura yang Tepat</h2>
            <span class=\"subtitle\">Diskon 40% + Domain dan SSL Gratis untuk Anda</span>
          </div>
        </div>
        <div class=\"row mt-5 text-center\">
          ";
        // line 135
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["packages"] ?? null), "prices", [], "any", false, false, false, 135));
        foreach ($context['_seq'] as $context["_key"] => $context["package"]) {
            // line 136
            echo "            ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["package"], "is_best_seller", [], "any", false, false, false, 136), 1))) {
                // line 137
                echo "          <div class=\"col pricing-box\">
            <img src=\"assets/images/ribbon-best-seller.png\" width=\"40%\">
            <div class=\"package-title border border-right-0 p-1 active active-border\">
              ";
                // line 140
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["package"], "package_name", [], "any", false, false, false, 140), "html", null, true);
                echo "
            </div>
            <div class=\"package-price border border-top-0 border-right-0 p-2 active active-border\">
              <span class=\"price-strike\">Rp ";
                // line 143
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["package"], "price_strike", [], "any", false, false, false, 143), 0, ",", "."), "html", null, true);
                echo "</span> <br>
              ";
                // line 144
                $context["pre"] = twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["package"], "price", [], "any", false, false, false, 144),  -5, 2);
                // line 145
                echo "              ";
                $context["post"] = twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["package"], "price", [], "any", false, false, false, 145), 2, 3);
                // line 146
                echo "              <div class=\"price-normal mt-0 mb-0\">
                <sup>Rp </sup><span class=\"big\"><strong>";
                // line 147
                echo twig_escape_filter($this->env, ($context["pre"] ?? null), "html", null, true);
                echo "</strong></span><sup><strong>.";
                echo twig_escape_filter($this->env, ($context["post"] ?? null), "html", null, true);
                echo "</strong>/ bln</sup>
              </div>
            </div>
            <div class=\"package-total-user border border-top-0 border-right-0 p-2 active-darker active-border\">
              <strong>";
                // line 151
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["package"], "total_user", [], "any", false, false, false, 151), 0, ",", "."), "html", null, true);
                echo "</strong> Pengguna Terdaftar
            </div>
            <div class=\"package-features border border-top-0 p-4 active-border\">
              ";
                // line 154
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["package"], "features", [], "any", false, false, false, 154));
                foreach ($context['_seq'] as $context["_key"] => $context["feature"]) {
                    // line 155
                    echo "                ";
                    echo twig_get_attribute($this->env, $this->source, $context["feature"], "description", [], "any", false, false, false, 155);
                    echo " <br>
              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['feature'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 157
                echo "              <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["package"], "button_link", [], "any", false, false, false, 157), "html", null, true);
                echo "\" class=\"btn btn-outline-light active rounded-pill mt-5 font-weight-bold\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["package"], "button_label", [], "any", false, false, false, 157), "html", null, true);
                echo "</a>
            </div>
          </div>
            ";
            } else {
                // line 161
                echo "          <div class=\"col pricing-box\">
            <div class=\"package-title border border-right-0 p-1\">
              ";
                // line 163
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["package"], "package_name", [], "any", false, false, false, 163), "html", null, true);
                echo "
            </div>
            <div class=\"package-price border border-top-0 border-right-0 p-2\">
              <span class=\"price-strike\">Rp ";
                // line 166
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["package"], "price_strike", [], "any", false, false, false, 166), 0, ",", "."), "html", null, true);
                echo "</span> <br>
              ";
                // line 167
                $context["pre"] = twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["package"], "price", [], "any", false, false, false, 167),  -5, 2);
                // line 168
                echo "              ";
                $context["post"] = twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["package"], "price", [], "any", false, false, false, 168), 2, 3);
                // line 169
                echo "              <div class=\"price-normal mt-0 mb-0\">
                <sup>Rp </sup><span class=\"big\"><strong>";
                // line 170
                echo twig_escape_filter($this->env, ($context["pre"] ?? null), "html", null, true);
                echo "</strong></span><sup><strong>.";
                echo twig_escape_filter($this->env, ($context["post"] ?? null), "html", null, true);
                echo "</strong>/ bln</sup>
              </div>
            </div>
            <div class=\"package-total-user border border-top-0 border-right-0 p-2\">
              <strong>";
                // line 174
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["package"], "total_user", [], "any", false, false, false, 174), 0, ",", "."), "html", null, true);
                echo "</strong> Pengguna Terdaftar
            </div>
            <div class=\"package-features border border-top-0 border-right-0 p-4\">
              ";
                // line 177
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["package"], "features", [], "any", false, false, false, 177));
                foreach ($context['_seq'] as $context["_key"] => $context["feature"]) {
                    // line 178
                    echo "                ";
                    echo twig_get_attribute($this->env, $this->source, $context["feature"], "description", [], "any", false, false, false, 178);
                    echo " <br>
              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['feature'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 180
                echo "              <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["package"], "button_link", [], "any", false, false, false, 180), "html", null, true);
                echo "\" class=\"btn btn-outline-dark rounded-pill mt-5 font-weight-bold\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["package"], "button_label", [], "any", false, false, false, 180), "html", null, true);
                echo "</a>
            </div>
          </div>
            ";
            }
            // line 184
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['package'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 185
        echo "        </div>
      </div>
    </section>
    <section id=\"more-feature\" class=\"pt-5\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col text-center\">
            <h2>Powerful dengan Limit PHP yang Lebih Besar</h2>
          </div>
        </div>
        <div class=\"row text-center mt-3\">
          <div class=\"col-md-5 offset-md-1\">
            <table class=\"table table-bordered table-striped\">
              <tr>
                <td><i class=\"fa fa-check-circle text-success checkmark\"></i> max execution time 300s</td>
              </tr>
              <tr>
                <td><i class=\"fa fa-check-circle text-success checkmark\"></i> max execution time 300s</td>
              </tr>
              <tr>
                <td><i class=\"fa fa-check-circle text-success checkmark\"></i> php memory limit 1024 MB</td>
              </tr>
            </table>
          </div>
          <div class=\"col-md-5\">
            <table class=\"table table-bordered table-striped\">
              <tr>
                <td><i class=\"fa fa-check-circle text-success checkmark\"></i> post max size 128 MB</td>
              </tr>
              <tr>
                <td><i class=\"fa fa-check-circle text-success checkmark\"></i> upload max filesize 128 MB</td>
              </tr>
              <tr>
                <td><i class=\"fa fa-check-circle text-success checkmark\"></i> max input vars 2500</td>
              </tr>
            </table>
          </div>
        </div>
      </div>
      <hr>
    </section>
    <section id=\"included-feature\" class=\"pt-5\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col text-center\">
            <h2>Semua Paket Hosting Sudah Termasuk</h2>
          </div>
        </div>
        <div class=\"row text-center mt-4\">
          <div class=\"col-12 col-md-4\">
            <div class=\"img-feature text-center\">
              <img src=\"assets/svg/icon PHP Hosting_PHP Semua Versi.svg\" width=\"20%\">
            </div>
            <div class=\"text-feature\">
              <h3>PHP Semua Versi</h3>
              <p>Pilih Mulai dari versi PHP 5.3 s/d PHP 7. Ubah sesuka Anda!</p>
            </div>
          </div>
          <div class=\"col-12 col-md-4\">
            <div class=\"img-feature text-center\">
              <img src=\"assets/svg/icon PHP Hosting_My SQL.svg\" width=\"20%\">
            </div>
            <div class=\"text-feature\">
              <h3>MySQL Versi 5.6</h3>
              <p>Nikmati MySQL versi terbaru, tercepat, dan kaya akan fitur.</p>
            </div>
          </div>
          <div class=\"col-12 col-md-4\">
            <div class=\"img-feature text-center\">
              <img src=\"assets/svg/icon PHP Hosting_CPanel.svg\" width=\"20%\">
            </div>
            <div class=\"text-feature\">
              <h3>Panel Hosting cPanel</h3>
              <p>Kelola website dengan panel canggih yang familiar di hati Anda.</p>
            </div>
          </div>
        </div>
        <div class=\"row text-center\">
          <div class=\"col-12 col-md-4\">
            <div class=\"img-feature\">
              <img src=\"assets/svg/icon PHP Hosting_garansi uptime.svg\" width=\"20%\">
            </div>
            <div class=\"text-feature\">
              <h3>Garansi Uptime 99.9%</h3>
              <p>Data center yang mendukung kelangsungan website Anda 24/7.</p>
            </div>
          </div>
          <div class=\"col-12 col-md-4\">
            <div class=\"img-feature text-center\">
              <img src=\"assets/svg/icon PHP Hosting_InnoDB.svg\" width=\"20%\">
            </div>
            <div class=\"text-feature\">
              <h3>Database InnoDB Unlimited</h3>
              <p>Jumlah dan ukuran database yang tumbuh sesuai kebutuhan Anda.</p>
            </div>
          </div>
          <div class=\"col-12 col-md-4\">
            <div class=\"img-feature text-center\">
              <img src=\"assets/svg/icon PHP Hosting_My SQL remote.svg\" width=\"20%\">
            </div>
            <div class=\"text-feature\">
              <h3>Wildcard Remote MySQL</h3>
              <p>Mendukung s/d 25 max_user_connections dan 100 max_connections</p>
            </div>
          </div>
        </div>
        <hr>
    </section>
    <section id=\"support-feature\" class=\"mb-3 pt-5 border-bottom\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col text-center\">
            <h2>Mendukung Penuh Framework Laravel</h2>
          </div>
        </div>
        <div class=\"row\">
          <div class=\"col-md-6 col-12 pt-3\">
            <p class=\"subtitle text-justify text-md-left\">
              Tak perlu menggunakan dedicated server ataupun VPS yang mahal. Layanan PHP Hosting murah kami mendukung penuh framework favorit Anda
            </p>
            <ul>
              <li>
                <i class=\"fa fa-check-circle text-success\"></i> Install Laravel <strong>1 klik</strong> dengan Softaculous Installer
              </li>
              <li>
                <i class=\"fa fa-check-circle text-success\"></i> Mendukung ekstensi <strong>PHP MCrypt, phar, mbstring, json, dan fileinfo.</strong>
              </li>
              <li>
                <i class=\"fa fa-check-circle text-success\"></i> Tersedia <strong>Composer</strong> dan <strong>SSH</strong> untuk menginstal packages pilihan Anda. 
              </li>
            </ul>
            <p class=\"note\">Nb. Composer dan SSH hanya tersedia pada paket Personal dan Bisnis</p>
            <a href=\"#\" class=\"btn btn-outline-light rounded-pill font-weight-bold btn-choose\">Pilih Hosting Anda</a>
          </div>
          <div class=\"col-md-6 col-12 pt-5 text-center text-md-right text-xs-right\">
            <img src=\"assets/svg/illustration banner support laravel hosting.svg\" width=\"80%\">
          </div>
        </div>
      </div>
    </section>
    <section id=\"module-feature\" class=\"mb-3 pt-5\">
      <div class=\"container\">
        <div class=\"row mb-5\">
          <div class=\"col text-center\">
            <h2>Modul Lengkap untuk Menjalankan Aplikasi PHP Anda.</h2>
          </div>
        </div>
        <div class=\"row\">
          <div class=\"col-6 col-md-3\">
            <ul class=\"list-module\">
              <li>IcePHP</li>
              <li>apc</li>
              <li>apcu</li>
              <li>apm</li>
              <li>ares</li>
              <li>bcmath</li>
              <li>bcompiler</li>
              <li>big_int</li>
              <li>bitset</li>
              <li>bloomy</li>
              <li>bz2_filter</li>
              <li>clamav</li>
              <li>coin_acceptor</li>
              <li>crack</li>
              <li>dba</li>
            </ul>
          </div>
          <div class=\"col-6 col-md-3\">
            <ul class=\"list-module\">
              <li>http</li>
              <li>huffman</li>
              <li>idn</li>
              <li>igbinary</li>
              <li>imagick</li>
              <li>imap</li>
              <li>include</li>
              <li>inotify</li>
              <li>interbase</li>
              <li>intl</li>
              <li>ioncube_loader</li>
              <li>ioncube_loader_4</li>
              <li>jsmin</li>
              <li>json</li>
              <li>idap</li>
            </ul>
          </div>
          <div class=\"col-6 col-md-3\">
            <ul class=\"list-module\">
              <li>nd_pdo_mysql</li>
              <li>oauth</li>
              <li>oci8</li>
              <li>odbc</li>
              <li>opcache</li>
              <li>pdf</li>
              <li>pdo</li>
              <li>pdo_dblib</li>
              <li>pdo_firebird</li>
              <li>pdo_mysql</li>
              <li>pdo_odbc</li>
              <li>pdo_pgsql</li>
              <li>pdo_sqlite</li>
              <li>pgsql</li>
              <li>phalcon</li>
            </ul>
          </div>
          <div class=\"col-6 col-md-3\">
            <ul class=\"list-module\">
              <li>stats</li>
              <li>stem</li>
              <li>stomp</li>
              <li>suhosin</li>
              <li>sybase_ct</li>
              <li>sysvmsg</li>
              <li>sysvsem</li>
              <li>sysvshm</li>
              <li>tidy</li>
              <li>timezonedb</li>
              <li>trader</li>
              <li>translit</li>
              <li>uploadprogress</li>
              <li>uri_template</li>
              <li>uuid</li>
            </ul>
          </div>
        </div>
        <div class=\"row\">
          <div class=\"col text-center\">
            <a href=\"#\" class=\"btn btn-outline-secondary rounded-pill mt-3 font-weight-bold\">Selengkapnya</a>
          </div>
        </div>
      </div>
    </section>
    <section id=\"linux-feature\" class=\"pt-5\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-6 col-12\">
            <h3 class=\"mb-4\">Linux Hosting yang Stabil dengan Teknologi LVE</h3>
            <p class=\"mb-3 text-justify text-md-left\">SuperMicro <strong>Intel Xeon 24-Cores</strong> server dengan RAM <strong>128 GB</strong> dan teknologi <strong>LVE CloudLinux</strong> untuk stabilitas server Anda. Dilengkapi dengan <strong>SSD</strong> untuk kecepatan <strong>MySQL</strong> dan caching, Apache load balancer berbasis LiteSpeed Technologies, <strong>CageFS</strong> Security, <strong>Raid-10</strong> protection dan auto backup untuk keamanan website PHP Anda.</p>
            <a href=\"#\" class=\"btn btn-outline-light rounded-pill font-weight-bold btn-choose\">Pilih Hosting Anda</a>
          </div>
          <div class=\"col-md-6 col-12 pt-5 text-right\">
            <img src=\"assets/images/Image support.png\" width=\"80%\">
          </div>
        </div>
      </div>
    </section>
    <section id=\"share\">
      <div class=\"container\">
        <div class=\"row pt-4 pb-4\">
          <div class=\"col-md-8 d-block my-auto text-center text-md-left\">
            <span class=\"share-text\">Bagikan jika Anda menyukai halaman ini.</span>
          </div>
          <div class=\"col-md-4 text-center text-md-left\">
            <img src=\"assets/images/sosmed.png\" width=\"80%\">
          </div>
        </div>
      </div>
    </section>
    <section id=\"help\">
      <div class=\"container\">
        <div class=\"row pt-5 pb-5\">
          <div class=\"col-md-9 col-12 d-block my-auto text-center text-md-left\">
            <span class=\"help-text\">Perlu <strong>BANTUAN? </strong>Hubungi Kami : <strong>0274-5305505</strong></span>
          </div>
          <div class=\"col-md-3 col-12\">
            <div class=\"border-left text-center\">
              <a href=\"#\" class=\"btn btn-outline-light rounded-pill text-white\"><i class=\"fas fa-comments\"></i> Live Chat</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <footer>
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-3 col-sm-6 col-6\">
            <div class=\"footer-title\">Hubungi Kami</div>
            <div class=\"footer-content\">
              <p>
                <a href=\"tel:027453505505\">0274-53505505</a> <br>
                Senin - Minggu <br>
                24 Jam Nonstop
              </p>
            </div>
            <div class=\"footer-content\">
              <p>
                Jl. Selokan Mataram Monjali <br>
                Karangjati MT I/304 <br>
                Sinduadi, Mlati, Sleman <br>
                Yogyakarta 55284 <br>
              </p>
            </div>
          </div>
          <div class=\"col-md-3 col-sm-6 col-6\">
            <div class=\"footer-title\">Layanan</div>
            <div class=\"footer-content\">
              <ul>
                <li><a href=\"#\">Domain</a></li>
                <li><a href=\"#\">Shared Hosting</a></li>
                <li><a href=\"#\">Cloud VPS Hosting</a></li>
                <li><a href=\"#\">Managed VPS Hosting</a></li>
                <li><a href=\"#\">Web Builder</a></li>
                <li><a href=\"#\">Keamanan SSL / HTTPS</a></li>
                <li><a href=\"#\">Jasa Pembuatan Website</a></li>
                <li><a href=\"#\">Program Afiliasi</a></li>
              </ul>
            </div>
          </div>
          <div class=\"col-md-3 col-sm-6 col-6\">
            <div class=\"footer-title\">Service Hosting</div>
            <div class=\"footer-content\">
              <ul>
                <li><a href=\"#\">Hosting Murah</a></li>
                <li><a href=\"#\">Hosting Indonesia</a></li>
                <li><a href=\"#\">Hosting Singapura SG</a></li>
                <li><a href=\"#\">Hosting PHP</a></li>
                <li><a href=\"#\">Hosting Wordpress</a></li>
                <li><a href=\"#\">Hosting Laravel</a></li>
              </ul>
            </div>
          </div>
          <div class=\"col-md-3 col-sm-6 col-6\">
            <div class=\"footer-title\">TUTORIAL</div>
            <div class=\"footer-content\">
              <ul>
                <li><a href=\"#\">Knowledge Base</a></li>
                <li><a href=\"#\">Blog</a></li>
                <li><a href=\"#\">Cara Pembayaran</a></li>
                <li><a href=\"#\">Managed VPS Hosting</a></li>
                <li><a href=\"#\">Web Builder</a></li>
                <li><a href=\"#\">Keamanan SSL / HTTPS</a></li>
                <li><a href=\"#\">Jasa Pembuatan Website</a></li>
                <li><a href=\"#\">Program Afiliasi</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class=\"row\">
          <div class=\"col-md-3 col-sm-6 col-6\">
            <div class=\"footer-title\">Tentang Kami</div>
            <div class=\"footer-content\">
              <ul>
                <li><a href=\"#\">Tim Niagahoster</a></li>
                <li><a href=\"#\">Karir</a></li>
                <li><a href=\"#\">Events</a></li>
                <li><a href=\"#\">Penawaran & Promo Spesial</a></li>
                <li><a href=\"#\">Kontak Kami</a></li>
              </ul>
            </div>
          </div>
          <div class=\"col-md-3 col-sm-6 col-6\">
            <div class=\"footer-title\">Kenapa Pilih Niagahoster?</div>
            <div class=\"footer-content\">
              <ul>
                <li><a href=\"#\">Support Terbaik</a></li>
                <li><a href=\"#\">Garansi Harga Termurah</a></li>
                <li><a href=\"#\">Domain Gratis Selamanya</a></li>
                <li><a href=\"#\">Datacenter Hosting Terbaik</a></li>
                <li><a href=\"#\">Review Pelanggan</a></li>
              </ul>
            </div>
          </div>
          <div class=\"col-md-3 col-sm-12 col-12\">
            <div class=\"footer-title\">Newsletter</div>
            <div class=\"footer-content\">
              <form method=\"post\" id=\"form-newsletter\">
                <div class=\"input-group\">
                <label for=\"email\" class=\"sr-only\">Berlangganan</label>
                <input id=\"email\" class=\"form-control email_newsletter\" name=\"email\" value=\"\" placeholder=\"Email\" type=\"text\">
                <span class=\"input-group-btn\">
                <button class=\"btn btn-info btn2\" type=\"submit\">Berlangganan</button>
                </span>
                </div>
              </form>
              <p class=\"note\">
                Dapatkan promo dan konten menarik dari penyedia web hosting Anda.
              </p>
            </div>
          </div>
          <div class=\"col-md-3\">
            <img src=\"assets/images/sosmed-footer.png\" class=\"pt-5\">
          </div>
        </div>
        <div class=\"row\">
          <div class=\"col\">
            <div class=\"footer-title\">Pembayaran</div>
            <div class=\"footer-content\">
              <img src=\"assets/images/bank.png\">
              <p class=\"note\">Aktivasi instan dengan e-Payment. Hosting dan Domain langsung aktif!</p>
            </div>
          </div>
        </div>
        <div class=\"row footer-end\">
          <div class=\"col-md-9 col-sm-12 col-12\">
            <p>Copyright &copy; 2016 Niagahoster | Hosting powered by PHP7, CloudLinux, CloudFlare, BitNinja and DC Biznet Technovillage Jakarta</p>
            <p>Cloud VPS Murah powered by Webuzo Softaculous, Intel SSD, and cloud computing technology</p>
          </div>
          <div class=\"col-md-3 col-sm-12 col-12 text-md-right\">
            <a href=\"#\">Syarat dan Ketentuan</a> | <a href=\"#\">Kebijakan Privasi</a>
          </div>
        </div>
      </div>
    </footer>

    <script src=\"assets/js/vendors.bundle.js\"></script>
    <script src=\"assets/js/app.min.js\"></script>
  </body>
</html>";
    }

    public function getTemplateName()
    {
        return "landing.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  307 => 185,  301 => 184,  291 => 180,  282 => 178,  278 => 177,  272 => 174,  263 => 170,  260 => 169,  257 => 168,  255 => 167,  251 => 166,  245 => 163,  241 => 161,  231 => 157,  222 => 155,  218 => 154,  212 => 151,  203 => 147,  200 => 146,  197 => 145,  195 => 144,  191 => 143,  185 => 140,  180 => 137,  177 => 136,  173 => 135,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <link rel=\"stylesheet\" type=\"text/css\" href=\"assets/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css\" integrity=\"sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" />

    <link rel=\"stylesheet\" type=\"text/css\" href=\"assets/css/custom.min.css\">

    <title>Landing Page - Niagahoster</title>
  </head>
  <body>
    <header class=\"site-header\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-12 col-md-7 text-promo\">
            <img src=\"assets/images/tag.png\" width=\"24\">
            Gratis Ebook 9 Cara Cerdas Menggunakan domain [ x ]
          </div>
          <div class=\"col-12 col-md-5 text-md-right\">
            <span class=\"contact\"><i class=\"fas fa-phone-alt mr-md-3\"></i> 0274-5305505</span>
            <span class=\"contact\"><i class=\"fas fa-comments mr-md-3\"></i> Live Chat</span>
            <span class=\"icon-member\"><i class=\"fas fa-user-circle\"></i></span> Member Area
          </div>
        </div>
      </div>
    </header>
    <nav class=\"ec-nav sticky-top bg-white\">
      <div class=\"container\">
        <div class=\"navbar p-0 navbar-expand-lg\">
          <div class=\"navbar-brand\">
            <a class=\"logo-default\" href=\"#\"><img alt=\"Logo Niagahoster\" src=\"assets/svg/nh-logo-blue.svg\" class=\"img-fluid\"></a>
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
          <div class=\"col-md-6 col-12\">
            <h2>PHP HOSTING</h2>
            <h3>Cepat, handal, penuh dengan modul PHP yang Anda butuhkan</h3>
            <ul>
              <li>Solusi PHP untuk performa query yang lebih cepat.</li>
              <li>Konsumsi memori yang lebih rendah.</li>
              <li>Support PHP 5.3, PHP 5.4, PHP 5.5, PHP 5.6, PHP 7</li>
              <li>Fitur enkripsi IonCube dan Zend Guard Loaders</li>
            </ul>
          </div>
          <div class=\"col-md-6 col-12 text-md-right text-sm-center\">
            <img src=\"assets/svg/illustration banner PHP hosting-01.svg\" width=\"420\">
          </div>
        </div>
      </div>
    </section>
    <section id=\"feature\">
      <div class=\"container feature-box\">
        <div class=\"row\">
          <div class=\"col-md-4\">
            <div class=\"img-feature text-center first\">
              <img src=\"assets/svg/illustration-banner-PHP-zenguard01.svg\" width=\"180\">
            </div>
            <div class=\"text-feature text-center\">
              PHP Zend Guard Loader
            </div>
          </div>
          <div class=\"col-md-4\">
            <div class=\"img-feature text-center\">
              <img src=\"assets/svg/icon-composer.svg\" width=\"130\">
            </div>
            <div class=\"text-feature text-center\">
              PHP Composer
            </div>
          </div>
          <div class=\"col-md-4\">
            <div class=\"img-feature text-center last\">
              <img src=\"assets/svg/icon-php-hosting-ioncube.svg\" width=\"180\">
            </div>
            <div class=\"text-feature text-center\">
              PHP ionCube Loader
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id=\"pricing\" class=\"pt-3 mb-3\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col text-center\">
            <h2>Paket Hosting Singapura yang Tepat</h2>
            <span class=\"subtitle\">Diskon 40% + Domain dan SSL Gratis untuk Anda</span>
          </div>
        </div>
        <div class=\"row mt-5 text-center\">
          {% for package in packages.prices %}
            {% if package.is_best_seller == 1 %}
          <div class=\"col pricing-box\">
            <img src=\"assets/images/ribbon-best-seller.png\" width=\"40%\">
            <div class=\"package-title border border-right-0 p-1 active active-border\">
              {{ package.package_name }}
            </div>
            <div class=\"package-price border border-top-0 border-right-0 p-2 active active-border\">
              <span class=\"price-strike\">Rp {{ package.price_strike|number_format(0, ',', '.') }}</span> <br>
              {% set pre = package.price|slice(-5,2) %}
              {% set post = package.price|slice(2,3) %}
              <div class=\"price-normal mt-0 mb-0\">
                <sup>Rp </sup><span class=\"big\"><strong>{{ pre }}</strong></span><sup><strong>.{{ post }}</strong>/ bln</sup>
              </div>
            </div>
            <div class=\"package-total-user border border-top-0 border-right-0 p-2 active-darker active-border\">
              <strong>{{ package.total_user|number_format(0, ',', '.') }}</strong> Pengguna Terdaftar
            </div>
            <div class=\"package-features border border-top-0 p-4 active-border\">
              {% for feature in package.features %}
                {{ feature.description|raw }} <br>
              {% endfor %}
              <a href=\"{{ package.button_link }}\" class=\"btn btn-outline-light active rounded-pill mt-5 font-weight-bold\">{{ package.button_label }}</a>
            </div>
          </div>
            {% else %}
          <div class=\"col pricing-box\">
            <div class=\"package-title border border-right-0 p-1\">
              {{ package.package_name }}
            </div>
            <div class=\"package-price border border-top-0 border-right-0 p-2\">
              <span class=\"price-strike\">Rp {{ package.price_strike|number_format(0, ',', '.') }}</span> <br>
              {% set pre = package.price|slice(-5,2) %}
              {% set post = package.price|slice(2,3) %}
              <div class=\"price-normal mt-0 mb-0\">
                <sup>Rp </sup><span class=\"big\"><strong>{{ pre }}</strong></span><sup><strong>.{{ post }}</strong>/ bln</sup>
              </div>
            </div>
            <div class=\"package-total-user border border-top-0 border-right-0 p-2\">
              <strong>{{ package.total_user|number_format(0, ',', '.') }}</strong> Pengguna Terdaftar
            </div>
            <div class=\"package-features border border-top-0 border-right-0 p-4\">
              {% for feature in package.features %}
                {{ feature.description|raw }} <br>
              {% endfor %}
              <a href=\"{{ package.button_link }}\" class=\"btn btn-outline-dark rounded-pill mt-5 font-weight-bold\">{{ package.button_label }}</a>
            </div>
          </div>
            {% endif %}
          {% endfor %}
        </div>
      </div>
    </section>
    <section id=\"more-feature\" class=\"pt-5\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col text-center\">
            <h2>Powerful dengan Limit PHP yang Lebih Besar</h2>
          </div>
        </div>
        <div class=\"row text-center mt-3\">
          <div class=\"col-md-5 offset-md-1\">
            <table class=\"table table-bordered table-striped\">
              <tr>
                <td><i class=\"fa fa-check-circle text-success checkmark\"></i> max execution time 300s</td>
              </tr>
              <tr>
                <td><i class=\"fa fa-check-circle text-success checkmark\"></i> max execution time 300s</td>
              </tr>
              <tr>
                <td><i class=\"fa fa-check-circle text-success checkmark\"></i> php memory limit 1024 MB</td>
              </tr>
            </table>
          </div>
          <div class=\"col-md-5\">
            <table class=\"table table-bordered table-striped\">
              <tr>
                <td><i class=\"fa fa-check-circle text-success checkmark\"></i> post max size 128 MB</td>
              </tr>
              <tr>
                <td><i class=\"fa fa-check-circle text-success checkmark\"></i> upload max filesize 128 MB</td>
              </tr>
              <tr>
                <td><i class=\"fa fa-check-circle text-success checkmark\"></i> max input vars 2500</td>
              </tr>
            </table>
          </div>
        </div>
      </div>
      <hr>
    </section>
    <section id=\"included-feature\" class=\"pt-5\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col text-center\">
            <h2>Semua Paket Hosting Sudah Termasuk</h2>
          </div>
        </div>
        <div class=\"row text-center mt-4\">
          <div class=\"col-12 col-md-4\">
            <div class=\"img-feature text-center\">
              <img src=\"assets/svg/icon PHP Hosting_PHP Semua Versi.svg\" width=\"20%\">
            </div>
            <div class=\"text-feature\">
              <h3>PHP Semua Versi</h3>
              <p>Pilih Mulai dari versi PHP 5.3 s/d PHP 7. Ubah sesuka Anda!</p>
            </div>
          </div>
          <div class=\"col-12 col-md-4\">
            <div class=\"img-feature text-center\">
              <img src=\"assets/svg/icon PHP Hosting_My SQL.svg\" width=\"20%\">
            </div>
            <div class=\"text-feature\">
              <h3>MySQL Versi 5.6</h3>
              <p>Nikmati MySQL versi terbaru, tercepat, dan kaya akan fitur.</p>
            </div>
          </div>
          <div class=\"col-12 col-md-4\">
            <div class=\"img-feature text-center\">
              <img src=\"assets/svg/icon PHP Hosting_CPanel.svg\" width=\"20%\">
            </div>
            <div class=\"text-feature\">
              <h3>Panel Hosting cPanel</h3>
              <p>Kelola website dengan panel canggih yang familiar di hati Anda.</p>
            </div>
          </div>
        </div>
        <div class=\"row text-center\">
          <div class=\"col-12 col-md-4\">
            <div class=\"img-feature\">
              <img src=\"assets/svg/icon PHP Hosting_garansi uptime.svg\" width=\"20%\">
            </div>
            <div class=\"text-feature\">
              <h3>Garansi Uptime 99.9%</h3>
              <p>Data center yang mendukung kelangsungan website Anda 24/7.</p>
            </div>
          </div>
          <div class=\"col-12 col-md-4\">
            <div class=\"img-feature text-center\">
              <img src=\"assets/svg/icon PHP Hosting_InnoDB.svg\" width=\"20%\">
            </div>
            <div class=\"text-feature\">
              <h3>Database InnoDB Unlimited</h3>
              <p>Jumlah dan ukuran database yang tumbuh sesuai kebutuhan Anda.</p>
            </div>
          </div>
          <div class=\"col-12 col-md-4\">
            <div class=\"img-feature text-center\">
              <img src=\"assets/svg/icon PHP Hosting_My SQL remote.svg\" width=\"20%\">
            </div>
            <div class=\"text-feature\">
              <h3>Wildcard Remote MySQL</h3>
              <p>Mendukung s/d 25 max_user_connections dan 100 max_connections</p>
            </div>
          </div>
        </div>
        <hr>
    </section>
    <section id=\"support-feature\" class=\"mb-3 pt-5 border-bottom\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col text-center\">
            <h2>Mendukung Penuh Framework Laravel</h2>
          </div>
        </div>
        <div class=\"row\">
          <div class=\"col-md-6 col-12 pt-3\">
            <p class=\"subtitle text-justify text-md-left\">
              Tak perlu menggunakan dedicated server ataupun VPS yang mahal. Layanan PHP Hosting murah kami mendukung penuh framework favorit Anda
            </p>
            <ul>
              <li>
                <i class=\"fa fa-check-circle text-success\"></i> Install Laravel <strong>1 klik</strong> dengan Softaculous Installer
              </li>
              <li>
                <i class=\"fa fa-check-circle text-success\"></i> Mendukung ekstensi <strong>PHP MCrypt, phar, mbstring, json, dan fileinfo.</strong>
              </li>
              <li>
                <i class=\"fa fa-check-circle text-success\"></i> Tersedia <strong>Composer</strong> dan <strong>SSH</strong> untuk menginstal packages pilihan Anda. 
              </li>
            </ul>
            <p class=\"note\">Nb. Composer dan SSH hanya tersedia pada paket Personal dan Bisnis</p>
            <a href=\"#\" class=\"btn btn-outline-light rounded-pill font-weight-bold btn-choose\">Pilih Hosting Anda</a>
          </div>
          <div class=\"col-md-6 col-12 pt-5 text-center text-md-right text-xs-right\">
            <img src=\"assets/svg/illustration banner support laravel hosting.svg\" width=\"80%\">
          </div>
        </div>
      </div>
    </section>
    <section id=\"module-feature\" class=\"mb-3 pt-5\">
      <div class=\"container\">
        <div class=\"row mb-5\">
          <div class=\"col text-center\">
            <h2>Modul Lengkap untuk Menjalankan Aplikasi PHP Anda.</h2>
          </div>
        </div>
        <div class=\"row\">
          <div class=\"col-6 col-md-3\">
            <ul class=\"list-module\">
              <li>IcePHP</li>
              <li>apc</li>
              <li>apcu</li>
              <li>apm</li>
              <li>ares</li>
              <li>bcmath</li>
              <li>bcompiler</li>
              <li>big_int</li>
              <li>bitset</li>
              <li>bloomy</li>
              <li>bz2_filter</li>
              <li>clamav</li>
              <li>coin_acceptor</li>
              <li>crack</li>
              <li>dba</li>
            </ul>
          </div>
          <div class=\"col-6 col-md-3\">
            <ul class=\"list-module\">
              <li>http</li>
              <li>huffman</li>
              <li>idn</li>
              <li>igbinary</li>
              <li>imagick</li>
              <li>imap</li>
              <li>include</li>
              <li>inotify</li>
              <li>interbase</li>
              <li>intl</li>
              <li>ioncube_loader</li>
              <li>ioncube_loader_4</li>
              <li>jsmin</li>
              <li>json</li>
              <li>idap</li>
            </ul>
          </div>
          <div class=\"col-6 col-md-3\">
            <ul class=\"list-module\">
              <li>nd_pdo_mysql</li>
              <li>oauth</li>
              <li>oci8</li>
              <li>odbc</li>
              <li>opcache</li>
              <li>pdf</li>
              <li>pdo</li>
              <li>pdo_dblib</li>
              <li>pdo_firebird</li>
              <li>pdo_mysql</li>
              <li>pdo_odbc</li>
              <li>pdo_pgsql</li>
              <li>pdo_sqlite</li>
              <li>pgsql</li>
              <li>phalcon</li>
            </ul>
          </div>
          <div class=\"col-6 col-md-3\">
            <ul class=\"list-module\">
              <li>stats</li>
              <li>stem</li>
              <li>stomp</li>
              <li>suhosin</li>
              <li>sybase_ct</li>
              <li>sysvmsg</li>
              <li>sysvsem</li>
              <li>sysvshm</li>
              <li>tidy</li>
              <li>timezonedb</li>
              <li>trader</li>
              <li>translit</li>
              <li>uploadprogress</li>
              <li>uri_template</li>
              <li>uuid</li>
            </ul>
          </div>
        </div>
        <div class=\"row\">
          <div class=\"col text-center\">
            <a href=\"#\" class=\"btn btn-outline-secondary rounded-pill mt-3 font-weight-bold\">Selengkapnya</a>
          </div>
        </div>
      </div>
    </section>
    <section id=\"linux-feature\" class=\"pt-5\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-6 col-12\">
            <h3 class=\"mb-4\">Linux Hosting yang Stabil dengan Teknologi LVE</h3>
            <p class=\"mb-3 text-justify text-md-left\">SuperMicro <strong>Intel Xeon 24-Cores</strong> server dengan RAM <strong>128 GB</strong> dan teknologi <strong>LVE CloudLinux</strong> untuk stabilitas server Anda. Dilengkapi dengan <strong>SSD</strong> untuk kecepatan <strong>MySQL</strong> dan caching, Apache load balancer berbasis LiteSpeed Technologies, <strong>CageFS</strong> Security, <strong>Raid-10</strong> protection dan auto backup untuk keamanan website PHP Anda.</p>
            <a href=\"#\" class=\"btn btn-outline-light rounded-pill font-weight-bold btn-choose\">Pilih Hosting Anda</a>
          </div>
          <div class=\"col-md-6 col-12 pt-5 text-right\">
            <img src=\"assets/images/Image support.png\" width=\"80%\">
          </div>
        </div>
      </div>
    </section>
    <section id=\"share\">
      <div class=\"container\">
        <div class=\"row pt-4 pb-4\">
          <div class=\"col-md-8 d-block my-auto text-center text-md-left\">
            <span class=\"share-text\">Bagikan jika Anda menyukai halaman ini.</span>
          </div>
          <div class=\"col-md-4 text-center text-md-left\">
            <img src=\"assets/images/sosmed.png\" width=\"80%\">
          </div>
        </div>
      </div>
    </section>
    <section id=\"help\">
      <div class=\"container\">
        <div class=\"row pt-5 pb-5\">
          <div class=\"col-md-9 col-12 d-block my-auto text-center text-md-left\">
            <span class=\"help-text\">Perlu <strong>BANTUAN? </strong>Hubungi Kami : <strong>0274-5305505</strong></span>
          </div>
          <div class=\"col-md-3 col-12\">
            <div class=\"border-left text-center\">
              <a href=\"#\" class=\"btn btn-outline-light rounded-pill text-white\"><i class=\"fas fa-comments\"></i> Live Chat</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <footer>
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-3 col-sm-6 col-6\">
            <div class=\"footer-title\">Hubungi Kami</div>
            <div class=\"footer-content\">
              <p>
                <a href=\"tel:027453505505\">0274-53505505</a> <br>
                Senin - Minggu <br>
                24 Jam Nonstop
              </p>
            </div>
            <div class=\"footer-content\">
              <p>
                Jl. Selokan Mataram Monjali <br>
                Karangjati MT I/304 <br>
                Sinduadi, Mlati, Sleman <br>
                Yogyakarta 55284 <br>
              </p>
            </div>
          </div>
          <div class=\"col-md-3 col-sm-6 col-6\">
            <div class=\"footer-title\">Layanan</div>
            <div class=\"footer-content\">
              <ul>
                <li><a href=\"#\">Domain</a></li>
                <li><a href=\"#\">Shared Hosting</a></li>
                <li><a href=\"#\">Cloud VPS Hosting</a></li>
                <li><a href=\"#\">Managed VPS Hosting</a></li>
                <li><a href=\"#\">Web Builder</a></li>
                <li><a href=\"#\">Keamanan SSL / HTTPS</a></li>
                <li><a href=\"#\">Jasa Pembuatan Website</a></li>
                <li><a href=\"#\">Program Afiliasi</a></li>
              </ul>
            </div>
          </div>
          <div class=\"col-md-3 col-sm-6 col-6\">
            <div class=\"footer-title\">Service Hosting</div>
            <div class=\"footer-content\">
              <ul>
                <li><a href=\"#\">Hosting Murah</a></li>
                <li><a href=\"#\">Hosting Indonesia</a></li>
                <li><a href=\"#\">Hosting Singapura SG</a></li>
                <li><a href=\"#\">Hosting PHP</a></li>
                <li><a href=\"#\">Hosting Wordpress</a></li>
                <li><a href=\"#\">Hosting Laravel</a></li>
              </ul>
            </div>
          </div>
          <div class=\"col-md-3 col-sm-6 col-6\">
            <div class=\"footer-title\">TUTORIAL</div>
            <div class=\"footer-content\">
              <ul>
                <li><a href=\"#\">Knowledge Base</a></li>
                <li><a href=\"#\">Blog</a></li>
                <li><a href=\"#\">Cara Pembayaran</a></li>
                <li><a href=\"#\">Managed VPS Hosting</a></li>
                <li><a href=\"#\">Web Builder</a></li>
                <li><a href=\"#\">Keamanan SSL / HTTPS</a></li>
                <li><a href=\"#\">Jasa Pembuatan Website</a></li>
                <li><a href=\"#\">Program Afiliasi</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class=\"row\">
          <div class=\"col-md-3 col-sm-6 col-6\">
            <div class=\"footer-title\">Tentang Kami</div>
            <div class=\"footer-content\">
              <ul>
                <li><a href=\"#\">Tim Niagahoster</a></li>
                <li><a href=\"#\">Karir</a></li>
                <li><a href=\"#\">Events</a></li>
                <li><a href=\"#\">Penawaran & Promo Spesial</a></li>
                <li><a href=\"#\">Kontak Kami</a></li>
              </ul>
            </div>
          </div>
          <div class=\"col-md-3 col-sm-6 col-6\">
            <div class=\"footer-title\">Kenapa Pilih Niagahoster?</div>
            <div class=\"footer-content\">
              <ul>
                <li><a href=\"#\">Support Terbaik</a></li>
                <li><a href=\"#\">Garansi Harga Termurah</a></li>
                <li><a href=\"#\">Domain Gratis Selamanya</a></li>
                <li><a href=\"#\">Datacenter Hosting Terbaik</a></li>
                <li><a href=\"#\">Review Pelanggan</a></li>
              </ul>
            </div>
          </div>
          <div class=\"col-md-3 col-sm-12 col-12\">
            <div class=\"footer-title\">Newsletter</div>
            <div class=\"footer-content\">
              <form method=\"post\" id=\"form-newsletter\">
                <div class=\"input-group\">
                <label for=\"email\" class=\"sr-only\">Berlangganan</label>
                <input id=\"email\" class=\"form-control email_newsletter\" name=\"email\" value=\"\" placeholder=\"Email\" type=\"text\">
                <span class=\"input-group-btn\">
                <button class=\"btn btn-info btn2\" type=\"submit\">Berlangganan</button>
                </span>
                </div>
              </form>
              <p class=\"note\">
                Dapatkan promo dan konten menarik dari penyedia web hosting Anda.
              </p>
            </div>
          </div>
          <div class=\"col-md-3\">
            <img src=\"assets/images/sosmed-footer.png\" class=\"pt-5\">
          </div>
        </div>
        <div class=\"row\">
          <div class=\"col\">
            <div class=\"footer-title\">Pembayaran</div>
            <div class=\"footer-content\">
              <img src=\"assets/images/bank.png\">
              <p class=\"note\">Aktivasi instan dengan e-Payment. Hosting dan Domain langsung aktif!</p>
            </div>
          </div>
        </div>
        <div class=\"row footer-end\">
          <div class=\"col-md-9 col-sm-12 col-12\">
            <p>Copyright &copy; 2016 Niagahoster | Hosting powered by PHP7, CloudLinux, CloudFlare, BitNinja and DC Biznet Technovillage Jakarta</p>
            <p>Cloud VPS Murah powered by Webuzo Softaculous, Intel SSD, and cloud computing technology</p>
          </div>
          <div class=\"col-md-3 col-sm-12 col-12 text-md-right\">
            <a href=\"#\">Syarat dan Ketentuan</a> | <a href=\"#\">Kebijakan Privasi</a>
          </div>
        </div>
      </div>
    </footer>

    <script src=\"assets/js/vendors.bundle.js\"></script>
    <script src=\"assets/js/app.min.js\"></script>
  </body>
</html>", "landing.html", "/Applications/XAMPP/xamppfiles/htdocs/landing-niaga/templates/landing.html");
    }
}
