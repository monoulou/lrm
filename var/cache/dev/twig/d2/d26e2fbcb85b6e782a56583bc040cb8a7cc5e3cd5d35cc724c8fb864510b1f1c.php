<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_2eed936553e46d4f6f4bfa9770f85249a23826259401105908a34c2ea3a239bc extends Twig_Template
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
        $__internal_e4af083abd04f098de46fb0f3b53b2c371b2c409545da282114d19a84a94c5d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4af083abd04f098de46fb0f3b53b2c371b2c409545da282114d19a84a94c5d7->enter($__internal_e4af083abd04f098de46fb0f3b53b2c371b2c409545da282114d19a84a94c5d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_2d3f2cdbdc47cb2cd763608d0be0df70a3cae68a066a43b2c8260eee57136cfe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d3f2cdbdc47cb2cd763608d0be0df70a3cae68a066a43b2c8260eee57136cfe->enter($__internal_2d3f2cdbdc47cb2cd763608d0be0df70a3cae68a066a43b2c8260eee57136cfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_e4af083abd04f098de46fb0f3b53b2c371b2c409545da282114d19a84a94c5d7->leave($__internal_e4af083abd04f098de46fb0f3b53b2c371b2c409545da282114d19a84a94c5d7_prof);

        
        $__internal_2d3f2cdbdc47cb2cd763608d0be0df70a3cae68a066a43b2c8260eee57136cfe->leave($__internal_2d3f2cdbdc47cb2cd763608d0be0df70a3cae68a066a43b2c8260eee57136cfe_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "TwigBundle:Exception:exception.js.twig", "C:\\wamp64\\www\\ligne_rh\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}