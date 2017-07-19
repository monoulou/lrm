<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_388acc687cb4dbd64cf5793d5ec239be08d6cd656b735b48bf4de929c31d42f4 extends Twig_Template
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
        $__internal_ab9eedfff21390b19ff3aad3564a843d33f4a4a9efd8dd5dd206e4def79751f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab9eedfff21390b19ff3aad3564a843d33f4a4a9efd8dd5dd206e4def79751f0->enter($__internal_ab9eedfff21390b19ff3aad3564a843d33f4a4a9efd8dd5dd206e4def79751f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_54a73264870e25d8eabbf229d9e3ee64b0badc6ef024d91294b388f58106836a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54a73264870e25d8eabbf229d9e3ee64b0badc6ef024d91294b388f58106836a->enter($__internal_54a73264870e25d8eabbf229d9e3ee64b0badc6ef024d91294b388f58106836a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_ab9eedfff21390b19ff3aad3564a843d33f4a4a9efd8dd5dd206e4def79751f0->leave($__internal_ab9eedfff21390b19ff3aad3564a843d33f4a4a9efd8dd5dd206e4def79751f0_prof);

        
        $__internal_54a73264870e25d8eabbf229d9e3ee64b0badc6ef024d91294b388f58106836a->leave($__internal_54a73264870e25d8eabbf229d9e3ee64b0badc6ef024d91294b388f58106836a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
", "@Twig/Exception/exception.atom.twig", "C:\\wamp64\\www\\ligne_rh\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.atom.twig");
    }
}
