<?php

/* AcmeErpBundle:Default:login.html.twig */
class __TwigTemplate_0453ae12cf9ee78a0dd012c4a32eaf3765d24ae3f845b6155fc6418f54c4bbe9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
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

\t\t<input type=\"hidden\" id=\"view\" value=\"login\" >

\t\t<div>

\t\t\t<header>
\t\t\t\t<h1>Login</h1>
\t\t\t</header>

\t\t\t<section class=\"login\" >
\t\t\t\t<label >usuario</label>
\t\t\t\t<input type=\"text\" />
\t\t\t\t<label >clave</label>
\t\t\t\t<input type=\"password\" >
\t\t\t\t<label >Empresa</label>
\t\t\t\t<select ></select>
\t\t\t\t<label ></label>
\t\t\t\t<button >Ingresar</button>
\t\t\t</section>

\t\t\t<footer>
\t\t\t\tElectrowerke 2015 | Derechos Reservados
\t\t\t</footer>

\t\t</div>

\t</body>

</html>";
    }

    public function getTemplateName()
    {
        return "AcmeErpBundle:Default:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 7,  19 => 1,);
    }
}
