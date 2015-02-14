<?php

/* AcmeErpBundle:Default:permiso.html.twig */
class __TwigTemplate_ac37956728a34302bceac5301cd0eaf1d2771fd466ec5bd744cb0c1912b03393 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("AcmeErpBundle::Default/home.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'contenido' => array($this, 'block_contenido'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeErpBundle::Default/home.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        // line 4
        echo "<section class=\"contenido\" >
\t<h2>Contenido permiso</h2>

\t<div class=\"mensaje\" >
\t\tmensaje...!
\t</div>

\t<div class=\"permiso\" >

\t\t<fieldset>
\t\t\t<legend>Empresas</legend>
\t\t\t<select size=\"10\" id=\"empresa\" >
\t\t\t\t<!--
\t\t\t\t\t<option>Electrowerke</option>
\t\t\t\t\t<option>Electrowerke</option>
\t\t\t\t-->
\t\t\t\t";
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entidad"]) ? $context["entidad"] : $this->getContext($context, "entidad")));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 21
            echo "\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "id", array()), "html", null, true);
            echo "\" >";
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "empresa", array()), "html", null, true);
            echo "</option>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "\t\t\t</select>
\t\t</fieldset>

\t\t<fieldset>
\t\t\t<legend>Perfiles</legend>
\t\t\t<select size=\"10\"  id=\"perfil\" >
\t\t\t\t<!--
\t\t\t\t\t<option>Administracion</option>
\t\t\t\t\t<option>Comercial</option>
\t\t\t\t-->
\t\t\t</select>
\t\t</fieldset>

\t\t<fieldset>
\t\t\t<legend>Tableros</legend>
\t\t\t<div class=\"acceso\" >
\t\t\t\t<ul class=\"acceso-niv\" >
\t\t\t\t\t";
        // line 40
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tablero"]) ? $context["tablero"] : $this->getContext($context, "tablero")));
        foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
            // line 41
            echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<input type='checkbox' value=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "id", array()), "html", null, true);
            echo "\" name=\"tablero[]\" id=\"tablero\" />";
            echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "titulo", array()), "html", null, true);
            echo "
\t\t\t\t\t\t</li>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t</fieldset>

\t\t<fieldset>
\t\t\t<legend>Accesos</legend>
\t\t\t<div class=\"acceso\" >
\t\t\t\t<ul class=\"acceso-niv\" >
\t\t\t\t\t<!--
\t\t\t\t\t<li>
\t\t\t\t\t\t<input type=\"checkbox\">Usuario
\t\t\t\t\t\t<ul class=\"acceso-niv\" >
\t\t\t\t\t\t\t<li><input type=\"checkbox\">Permisos</li>
\t\t\t\t\t\t\t<li><input type=\"checkbox\">Perfiles</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t<li><input type=\"checkbox\">Finanzas</li>
\t\t\t\t\t-->
\t\t\t\t\t";
        // line 63
        echo (isset($context["acceso"]) ? $context["acceso"] : $this->getContext($context, "acceso"));
        echo "
\t\t\t\t</ul>
\t\t\t</div>
\t\t</fieldset>

\t\t<button>Guardar</button>

\t</div>

</section>
";
    }

    public function getTemplateName()
    {
        return "AcmeErpBundle:Default:permiso.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 63,  109 => 45,  98 => 42,  95 => 41,  91 => 40,  72 => 23,  61 => 21,  57 => 20,  39 => 4,  36 => 3,  11 => 1,);
    }
}
