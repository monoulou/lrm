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
        $__internal_5fcfc546f4adf3737a81eab89a06df6e4619a2e9ee649dca9ce9485ee73713ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fcfc546f4adf3737a81eab89a06df6e4619a2e9ee649dca9ce9485ee73713ae->enter($__internal_5fcfc546f4adf3737a81eab89a06df6e4619a2e9ee649dca9ce9485ee73713ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_51e56d2884d0ef21f6e16add07f03e6d4a0257e7b6396a010ccb59baf08f6a63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51e56d2884d0ef21f6e16add07f03e6d4a0257e7b6396a010ccb59baf08f6a63->enter($__internal_51e56d2884d0ef21f6e16add07f03e6d4a0257e7b6396a010ccb59baf08f6a63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_5fcfc546f4adf3737a81eab89a06df6e4619a2e9ee649dca9ce9485ee73713ae->leave($__internal_5fcfc546f4adf3737a81eab89a06df6e4619a2e9ee649dca9ce9485ee73713ae_prof);

        
        $__internal_51e56d2884d0ef21f6e16add07f03e6d4a0257e7b6396a010ccb59baf08f6a63->leave($__internal_51e56d2884d0ef21f6e16add07f03e6d4a0257e7b6396a010ccb59baf08f6a63_prof);

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
