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
        $__internal_e6d404643893ae0c0d6f0f7fe4f599d91946ea66aeaa53f5b217a8c7f281a5d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6d404643893ae0c0d6f0f7fe4f599d91946ea66aeaa53f5b217a8c7f281a5d5->enter($__internal_e6d404643893ae0c0d6f0f7fe4f599d91946ea66aeaa53f5b217a8c7f281a5d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_e8f82548b96f60c437fa560bff5e1500c5d7e84fa8fc04fb6a777cd64305343f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8f82548b96f60c437fa560bff5e1500c5d7e84fa8fc04fb6a777cd64305343f->enter($__internal_e8f82548b96f60c437fa560bff5e1500c5d7e84fa8fc04fb6a777cd64305343f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_e6d404643893ae0c0d6f0f7fe4f599d91946ea66aeaa53f5b217a8c7f281a5d5->leave($__internal_e6d404643893ae0c0d6f0f7fe4f599d91946ea66aeaa53f5b217a8c7f281a5d5_prof);

        
        $__internal_e8f82548b96f60c437fa560bff5e1500c5d7e84fa8fc04fb6a777cd64305343f->leave($__internal_e8f82548b96f60c437fa560bff5e1500c5d7e84fa8fc04fb6a777cd64305343f_prof);

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
