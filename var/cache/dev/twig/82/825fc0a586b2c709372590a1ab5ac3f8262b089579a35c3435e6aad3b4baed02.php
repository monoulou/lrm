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
        $__internal_3b16efad7dff763bc7c2ecaf3b1b5d6dc85929dcf800afb31db306b123c3c554 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b16efad7dff763bc7c2ecaf3b1b5d6dc85929dcf800afb31db306b123c3c554->enter($__internal_3b16efad7dff763bc7c2ecaf3b1b5d6dc85929dcf800afb31db306b123c3c554_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_41bb602304578a3bd899b3c75884ec71ef0f4fa897add7eebd8f5a112758a7ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41bb602304578a3bd899b3c75884ec71ef0f4fa897add7eebd8f5a112758a7ac->enter($__internal_41bb602304578a3bd899b3c75884ec71ef0f4fa897add7eebd8f5a112758a7ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_3b16efad7dff763bc7c2ecaf3b1b5d6dc85929dcf800afb31db306b123c3c554->leave($__internal_3b16efad7dff763bc7c2ecaf3b1b5d6dc85929dcf800afb31db306b123c3c554_prof);

        
        $__internal_41bb602304578a3bd899b3c75884ec71ef0f4fa897add7eebd8f5a112758a7ac->leave($__internal_41bb602304578a3bd899b3c75884ec71ef0f4fa897add7eebd8f5a112758a7ac_prof);

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
