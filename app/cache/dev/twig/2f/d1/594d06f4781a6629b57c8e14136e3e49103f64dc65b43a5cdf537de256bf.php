<?php

/* AcmeErpBundle:Default:home.html.twig */
class __TwigTemplate_2fd1594d06f4781a6629b57c8e14136e3e49103f64dc65b43a5cdf537de256bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'contenido' => array($this, 'block_contenido'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!html DOCTYPE>

<html>

\t<head>

\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmeerp/css/estilos.css"), "html", null, true);
        echo "\">

\t</head>

\t<body>

\t\t<input type=\"hidden\" id=\"view\" value=\"home\" >

\t\t<div>

\t\t\t<header>
\t\t\t\t<h1>Home</h1>
\t\t\t\t<div>
\t\t\t\t\t<span class=\"cuenta\" >
\t\t\t\t\t\t<ul class=\"cuenta-niv\" >
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<img src=\"\">jraul
\t\t\t\t\t\t\t\t<ul class=\"cuenta-niv\" >
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Mi cuenta</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Configuracion</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Cerrar</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</span>
\t\t\t\t</div>\t\t
\t\t\t</header>

\t\t\t<section class=\"opcion\" >

\t\t\t\t<ul class=\"menu menu-niv\" >
\t\t\t\t\t<li><a href=\"#\" >inicio</a></li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"#\" >usuarios</a>
\t\t\t\t\t\t<ul class=\"menu-niv menu-tab\" >
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\" >permisos</a>
\t\t\t\t\t\t\t\t<ul class=\"menu-niv menu-sub\" >
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" >admin</a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"menu-niv menu-sub\" >
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\" >admin1</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\" >admin2</a></li>
\t\t\t\t\t\t\t\t\t\t</ul>\t
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\" >user</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\" >perfiles</a>
\t\t\t\t\t\t\t\t<ul class=\"menu-niv menu-sub\" >
\t\t\t\t\t\t\t\t\t<li><a href=\"#\" >admin1</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\" >admin2</a></li>
\t\t\t\t\t\t\t\t</ul>\t
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li><a href=\"#\" >menus</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t<li><a href=\"#\">Finanzas</a></li>
\t\t\t\t</ul>\t

\t\t\t</section>

\t\t\t";
        // line 70
        $this->displayBlock('contenido', $context, $blocks);
        // line 75
        echo "
\t\t\t<footer>
\t\t\t\tElectrowerke 2015 | Derechos Reservados
\t\t\t</footer>

\t\t</div>

\t</body>

</html>";
    }

    // line 70
    public function block_contenido($context, array $blocks = array())
    {
        // line 71
        echo "\t\t\t<section class=\"contenido\" >
\t\t\t\t<h2>Contenido home</h2>
\t\t\t</section>
\t\t\t";
    }

    public function getTemplateName()
    {
        return "AcmeErpBundle:Default:home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 71,  109 => 70,  96 => 75,  94 => 70,  28 => 7,  20 => 1,);
    }
}
