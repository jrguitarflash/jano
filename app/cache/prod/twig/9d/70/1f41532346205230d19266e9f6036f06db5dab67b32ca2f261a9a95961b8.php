<?php

/* AcmeErpBundle:Default:permiso.html.twig */
class __TwigTemplate_9d701f41532346205230d19266e9f6036f06db5dab67b32ca2f261a9a95961b8 extends Twig_Template
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
\t\t\t<select size=\"10\" >
\t\t\t\t<option>Electrowerke</option>
\t\t\t\t<option>Eltrotec</option>
\t\t\t</select>
\t\t</fieldset>

\t\t<fieldset>
\t\t\t<legend>Perfiles</legend>
\t\t\t<select size=\"10\" >
\t\t\t\t<option>Administracion</option>
\t\t\t\t<option>Comercial</option>
\t\t\t</select>
\t\t</fieldset>

\t\t<fieldset>
\t\t\t<legend>Accesos</legend>
\t\t\t<div class=\"acceso\" >
\t\t\t\t<ul class=\"acceso-niv\" >
\t\t\t\t\t<li>
\t\t\t\t\t\t<input type=\"checkbox\">Usuario
\t\t\t\t\t\t<ul class=\"acceso-niv\" >
\t\t\t\t\t\t\t<li><input type=\"checkbox\">Permisos</li>
\t\t\t\t\t\t\t<li><input type=\"checkbox\">Perfiles</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t<li><input type=\"checkbox\">Finanzas</li>
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
        return array (  39 => 4,  36 => 3,  11 => 1,);
    }
}
