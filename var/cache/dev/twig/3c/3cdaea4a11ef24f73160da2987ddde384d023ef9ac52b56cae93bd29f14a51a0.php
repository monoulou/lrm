<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_36240d46c59f697a97fd7ad0c7c42d7db8160946714d65dbea52ff93455359ab extends Twig_Template
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
        $__internal_c19fbbfbdf616b036b6d9fced3c26b9b8eb9b51c66a44df7008802d4e12de3e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c19fbbfbdf616b036b6d9fced3c26b9b8eb9b51c66a44df7008802d4e12de3e5->enter($__internal_c19fbbfbdf616b036b6d9fced3c26b9b8eb9b51c66a44df7008802d4e12de3e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_a3bff64537233c86b4c1c2c02ec4928321c7cd31a72dd031ce9432ddfe9a8afc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3bff64537233c86b4c1c2c02ec4928321c7cd31a72dd031ce9432ddfe9a8afc->enter($__internal_a3bff64537233c86b4c1c2c02ec4928321c7cd31a72dd031ce9432ddfe9a8afc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_c19fbbfbdf616b036b6d9fced3c26b9b8eb9b51c66a44df7008802d4e12de3e5->leave($__internal_c19fbbfbdf616b036b6d9fced3c26b9b8eb9b51c66a44df7008802d4e12de3e5_prof);

        
        $__internal_a3bff64537233c86b4c1c2c02ec4928321c7cd31a72dd031ce9432ddfe9a8afc->leave($__internal_a3bff64537233c86b4c1c2c02ec4928321c7cd31a72dd031ce9432ddfe9a8afc_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
", "@Twig/Exception/error.rdf.twig", "C:\\wamp64\\www\\ligne_rh\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
