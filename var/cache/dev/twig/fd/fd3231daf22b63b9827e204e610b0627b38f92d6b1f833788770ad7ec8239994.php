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
        $__internal_3430760f2bbe2e113927b607b91f5fcaec8db2d281e8f17c5329dbcadb5fa78d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3430760f2bbe2e113927b607b91f5fcaec8db2d281e8f17c5329dbcadb5fa78d->enter($__internal_3430760f2bbe2e113927b607b91f5fcaec8db2d281e8f17c5329dbcadb5fa78d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_a92c005127eb11e4528b8f5365165acac4681aaafb67f8eefcdd3833f8836ff2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a92c005127eb11e4528b8f5365165acac4681aaafb67f8eefcdd3833f8836ff2->enter($__internal_a92c005127eb11e4528b8f5365165acac4681aaafb67f8eefcdd3833f8836ff2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_3430760f2bbe2e113927b607b91f5fcaec8db2d281e8f17c5329dbcadb5fa78d->leave($__internal_3430760f2bbe2e113927b607b91f5fcaec8db2d281e8f17c5329dbcadb5fa78d_prof);

        
        $__internal_a92c005127eb11e4528b8f5365165acac4681aaafb67f8eefcdd3833f8836ff2->leave($__internal_a92c005127eb11e4528b8f5365165acac4681aaafb67f8eefcdd3833f8836ff2_prof);

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
