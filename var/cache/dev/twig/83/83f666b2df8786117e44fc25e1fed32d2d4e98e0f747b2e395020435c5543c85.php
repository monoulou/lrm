<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_78489aff4d81249a2e9741f399adc78295e9130f11884a738a1ed867e63b9fd7 extends Twig_Template
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
        $__internal_76240499a2afe2025e6796f0e0c32c8ba934e92eec7f663435117bfadb36762b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76240499a2afe2025e6796f0e0c32c8ba934e92eec7f663435117bfadb36762b->enter($__internal_76240499a2afe2025e6796f0e0c32c8ba934e92eec7f663435117bfadb36762b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_d5a362f025bc650f715671be07df155380ec022f4f85b1c4063ae8b9ec95984c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5a362f025bc650f715671be07df155380ec022f4f85b1c4063ae8b9ec95984c->enter($__internal_d5a362f025bc650f715671be07df155380ec022f4f85b1c4063ae8b9ec95984c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_76240499a2afe2025e6796f0e0c32c8ba934e92eec7f663435117bfadb36762b->leave($__internal_76240499a2afe2025e6796f0e0c32c8ba934e92eec7f663435117bfadb36762b_prof);

        
        $__internal_d5a362f025bc650f715671be07df155380ec022f4f85b1c4063ae8b9ec95984c->leave($__internal_d5a362f025bc650f715671be07df155380ec022f4f85b1c4063ae8b9ec95984c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "C:\\wamp64\\www\\ligne_rh\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
