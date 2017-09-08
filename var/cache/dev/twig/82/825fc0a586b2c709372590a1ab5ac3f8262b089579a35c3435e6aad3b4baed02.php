<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_335978a132d6eb565fe885e7447f2e1be5f443924e88d59029f5564436c5720f extends Twig_Template
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
        $__internal_f25b784b8ceb3d92292d7542f052aacfe3fab719b703a2d9dfd3328ab0343644 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f25b784b8ceb3d92292d7542f052aacfe3fab719b703a2d9dfd3328ab0343644->enter($__internal_f25b784b8ceb3d92292d7542f052aacfe3fab719b703a2d9dfd3328ab0343644_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_8be2f9f4165dda5c0ad2728e8312a51d554da091e2c8fa909a1648d8ab56b242 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8be2f9f4165dda5c0ad2728e8312a51d554da091e2c8fa909a1648d8ab56b242->enter($__internal_8be2f9f4165dda5c0ad2728e8312a51d554da091e2c8fa909a1648d8ab56b242_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_f25b784b8ceb3d92292d7542f052aacfe3fab719b703a2d9dfd3328ab0343644->leave($__internal_f25b784b8ceb3d92292d7542f052aacfe3fab719b703a2d9dfd3328ab0343644_prof);

        
        $__internal_8be2f9f4165dda5c0ad2728e8312a51d554da091e2c8fa909a1648d8ab56b242->leave($__internal_8be2f9f4165dda5c0ad2728e8312a51d554da091e2c8fa909a1648d8ab56b242_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.atom.twig", "C:\\wamp64\\www\\ligne_rh\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
