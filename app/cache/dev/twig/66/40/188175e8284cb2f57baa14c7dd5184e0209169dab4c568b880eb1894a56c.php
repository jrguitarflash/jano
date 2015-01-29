<?php

/* AcmeErpBundle:Default:home.html.twig */
class __TwigTemplate_6640188175e8284cb2f57baa14c7dd5184e0209169dab4c568b880eb1894a56c extends Twig_Template
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
\t\t<script type=\"text/javascript\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmeerp/js/script.js"), "html", null, true);
        echo "\" ></script>

\t</head>

\t<body>

\t\t<input type=\"hidden\" id=\"view\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["view"]) ? $context["view"] : $this->getContext($context, "view")), "html", null, true);
        echo "\" >

\t\t<form name=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["view"]) ? $context["view"] : $this->getContext($context, "view")), "html", null, true);
        echo "\" id=\"";
        echo twig_escape_filter($this->env, (isset($context["view"]) ? $context["view"] : $this->getContext($context, "view")), "html", null, true);
        echo "\"  method=\"post\" action=\"\" >

\t\t\t<input type=\"hidden\" name=\"accion\" value=\"\" >


\t\t\t<div>

\t\t\t\t<header>
\t\t\t\t\t<h1>Home</h1>
\t\t\t\t\t<div>
\t\t\t\t\t\t<span class=\"cuenta\" >
\t\t\t\t\t\t\t<ul class=\"cuenta-niv\" >
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<img src=\"\">&nbsp;<strong>";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "html", null, true);
        echo "</strong> ( ";
        echo twig_escape_filter($this->env, (isset($context["perfil"]) ? $context["perfil"] : $this->getContext($context, "perfil")), "html", null, true);
        echo " )
\t\t\t\t\t\t\t\t\t<ul class=\"cuenta-niv\" >
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Mi cuenta</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getUrl("acme_erp_inicio");
        echo "home\">Configuracion</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\" id=\"cerrar\" >Cerrar</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</span>
\t\t\t\t\t</div>\t\t
\t\t\t\t</header>

\t\t\t\t<section class=\"opcion\" >

\t\t\t\t\t<ul class=\"menu menu-niv\" >
\t\t\t\t\t\t<li><a href=\"#\" >inicio</a></li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\" >usuarios</a>
\t\t\t\t\t\t\t<ul class=\"menu-niv menu-tab\" >
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\" >permisos</a>
\t\t\t\t\t\t\t\t\t<ul class=\"menu-niv menu-sub\" >
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" >admin</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"menu-niv menu-sub\" >
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\" >admin1</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\" >admin2</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>\t
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\" >user</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\" >perfiles</a>
\t\t\t\t\t\t\t\t\t<ul class=\"menu-niv menu-sub\" >
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\" >admin1</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\" >admin2</a></li>
\t\t\t\t\t\t\t\t\t</ul>\t
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li><a href=\"#\" >menus</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li><a href=\"#\">Finanzas</a></li>
\t\t\t\t\t</ul>\t

\t\t\t\t</section>

\t\t\t\t";
        // line 76
        $this->displayBlock('contenido', $context, $blocks);
        // line 81
        echo "
\t\t\t\t<footer>
\t\t\t\t\tElectrowerke 2015 | Derechos Reservados
\t\t\t\t</footer>

\t\t\t</div>

\t\t</form>

\t</body>

</html>";
    }

    // line 76
    public function block_contenido($context, array $blocks = array())
    {
        // line 77
        echo "\t\t\t\t<section class=\"contenido\" >
\t\t\t\t\t<h2>Contenido home</h2>
\t\t\t\t</section>
\t\t\t\t";
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
        return array (  139 => 77,  136 => 76,  121 => 81,  119 => 76,  72 => 32,  64 => 29,  46 => 16,  41 => 14,  32 => 8,  28 => 7,  20 => 1,);
    }
}
