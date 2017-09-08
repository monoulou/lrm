<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_1e5b3a58e3b794909cad15608b44cadb1323834c15208f55c37d05345b6898d6 extends Twig_Template
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
        $__internal_c239bec1effe59a1f4b379fad3c336918c3cacb1879ccc9bb3a5352671348fdc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c239bec1effe59a1f4b379fad3c336918c3cacb1879ccc9bb3a5352671348fdc->enter($__internal_c239bec1effe59a1f4b379fad3c336918c3cacb1879ccc9bb3a5352671348fdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_3814c862eb491f076be18c68c98bbc5a41dffdec80521176102b7db32cc09314 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3814c862eb491f076be18c68c98bbc5a41dffdec80521176102b7db32cc09314->enter($__internal_3814c862eb491f076be18c68c98bbc5a41dffdec80521176102b7db32cc09314_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_c239bec1effe59a1f4b379fad3c336918c3cacb1879ccc9bb3a5352671348fdc->leave($__internal_c239bec1effe59a1f4b379fad3c336918c3cacb1879ccc9bb3a5352671348fdc_prof);

        
        $__internal_3814c862eb491f076be18c68c98bbc5a41dffdec80521176102b7db32cc09314->leave($__internal_3814c862eb491f076be18c68c98bbc5a41dffdec80521176102b7db32cc09314_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
", "TwigBundle:Exception:exception.rdf.twig", "C:\\wamp64\\www\\ligne_rh\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
