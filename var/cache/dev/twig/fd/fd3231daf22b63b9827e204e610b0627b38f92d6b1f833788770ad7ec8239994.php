<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_79020d7d1e854160506f2a846a4725606d9f39a85a6763a81d8b1cd3fc79a402 extends Twig_Template
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
        $__internal_d69651ef9847c6ba8c4e06667fb76238ea387b361454769a37c12d5baa1a4e56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d69651ef9847c6ba8c4e06667fb76238ea387b361454769a37c12d5baa1a4e56->enter($__internal_d69651ef9847c6ba8c4e06667fb76238ea387b361454769a37c12d5baa1a4e56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_f1505c239d4df00b2d75f17ccf0113642f57fe7ca1fccc4f293854cd6b756e58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1505c239d4df00b2d75f17ccf0113642f57fe7ca1fccc4f293854cd6b756e58->enter($__internal_f1505c239d4df00b2d75f17ccf0113642f57fe7ca1fccc4f293854cd6b756e58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_d69651ef9847c6ba8c4e06667fb76238ea387b361454769a37c12d5baa1a4e56->leave($__internal_d69651ef9847c6ba8c4e06667fb76238ea387b361454769a37c12d5baa1a4e56_prof);

        
        $__internal_f1505c239d4df00b2d75f17ccf0113642f57fe7ca1fccc4f293854cd6b756e58->leave($__internal_f1505c239d4df00b2d75f17ccf0113642f57fe7ca1fccc4f293854cd6b756e58_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.atom.twig", "C:\\wamp64\\www\\ligne_rh\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
