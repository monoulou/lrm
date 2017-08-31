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
        $__internal_de1570d0c5c15eca8b18c9ea89bd9713d20d6bb0b6065ffbe9065fd864b0c0e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de1570d0c5c15eca8b18c9ea89bd9713d20d6bb0b6065ffbe9065fd864b0c0e0->enter($__internal_de1570d0c5c15eca8b18c9ea89bd9713d20d6bb0b6065ffbe9065fd864b0c0e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_4834ed664bb6e8de80c459f71a0930f15d19d954c85cfaa590373956bfc0c81b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4834ed664bb6e8de80c459f71a0930f15d19d954c85cfaa590373956bfc0c81b->enter($__internal_4834ed664bb6e8de80c459f71a0930f15d19d954c85cfaa590373956bfc0c81b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_de1570d0c5c15eca8b18c9ea89bd9713d20d6bb0b6065ffbe9065fd864b0c0e0->leave($__internal_de1570d0c5c15eca8b18c9ea89bd9713d20d6bb0b6065ffbe9065fd864b0c0e0_prof);

        
        $__internal_4834ed664bb6e8de80c459f71a0930f15d19d954c85cfaa590373956bfc0c81b->leave($__internal_4834ed664bb6e8de80c459f71a0930f15d19d954c85cfaa590373956bfc0c81b_prof);

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
