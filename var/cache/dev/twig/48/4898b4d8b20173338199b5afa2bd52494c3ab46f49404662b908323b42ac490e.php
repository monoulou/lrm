<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_26693739b2c38f3b2e59d82887d47ec51421e0d3079600ea8417714b37c5321f extends Twig_Template
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
        $__internal_6397b74d930ddcc2c6f8c8c3fc3168d0894afd3a53e5e7369ed115e4c1141b81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6397b74d930ddcc2c6f8c8c3fc3168d0894afd3a53e5e7369ed115e4c1141b81->enter($__internal_6397b74d930ddcc2c6f8c8c3fc3168d0894afd3a53e5e7369ed115e4c1141b81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_cd399e14c3db8e13d7d279f35727c44e107495e02d65b1b88a362b92cd1abeb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd399e14c3db8e13d7d279f35727c44e107495e02d65b1b88a362b92cd1abeb1->enter($__internal_cd399e14c3db8e13d7d279f35727c44e107495e02d65b1b88a362b92cd1abeb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_6397b74d930ddcc2c6f8c8c3fc3168d0894afd3a53e5e7369ed115e4c1141b81->leave($__internal_6397b74d930ddcc2c6f8c8c3fc3168d0894afd3a53e5e7369ed115e4c1141b81_prof);

        
        $__internal_cd399e14c3db8e13d7d279f35727c44e107495e02d65b1b88a362b92cd1abeb1->leave($__internal_cd399e14c3db8e13d7d279f35727c44e107495e02d65b1b88a362b92cd1abeb1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
", "TwigBundle:Exception:exception.css.twig", "C:\\wamp64\\www\\ligne_rh\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
