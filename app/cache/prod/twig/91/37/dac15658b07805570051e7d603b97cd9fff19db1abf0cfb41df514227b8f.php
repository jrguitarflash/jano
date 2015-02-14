<?php

/* AcmeErpBundle:Default:login.html.twig */
class __TwigTemplate_9137dac15658b07805570051e7d603b97cd9fff19db1abf0cfb41df514227b8f extends Twig_Template
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

\t\t<form name=\"login\" id=\"login\" method=\"post\" action=\"\" >

\t\t\t<input type=\"hidden\" name=\"accion\" value=\"\" >

\t\t\t<div>

\t\t\t\t<header>
\t\t\t\t\t<h1>Login</h1>
\t\t\t\t</header>

\t\t\t\t<section class=\"login\" >
\t\t\t\t\t\t<label >usuario</label>
\t\t\t\t\t\t<input type=\"text\"  name=\"user\" />
\t\t\t\t\t\t<label >clave</label>
\t\t\t\t\t\t<input type=\"password\" name=\"clave\" >
\t\t\t\t\t\t<label >Empresa</label>
\t\t\t\t\t\t<select name=\"empresa\" >
\t\t\t\t\t\t\t";
        // line 33
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
            // line 34
            echo "\t\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "empresa_id", array()), "html", null, true);
            echo "\" >";
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "emp_nombre", array()), "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "\t\t\t\t\t\t</select>
\t\t\t\t\t\t<label ></label>
\t\t\t\t\t\t<button id=\"logear\" >Ingresar</button>
\t\t\t\t\t\t<span>";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["mensaje"]) ? $context["mensaje"] : $this->getContext($context, "mensaje")), "html", null, true);
        echo "</span>
\t\t\t\t</section>

\t\t\t\t<footer>
\t\t\t\t\tElectrowerke 2015 | Derechos Reservados
\t\t\t\t</footer>

\t\t\t\t<!-- Test Data -->

\t\t\t\t<!--
\t\t\t\t<ul>
\t\t\t\t\t<li></li>
\t\t\t\t</ul>
\t\t\t\t-->
\t\t\t\t
\t\t\t\t

\t\t\t</div>

\t\t</form>

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
        return array (  82 => 39,  77 => 36,  66 => 34,  62 => 33,  40 => 14,  31 => 8,  27 => 7,  19 => 1,);
    }
}
