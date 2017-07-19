<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_ed4522e1486dd2c4ff345f2c89ad0f3536db4e1460dbd513f6ac853d07d11341 extends Twig_Template
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
        $__internal_bf85e461ce1a2bddbda5bce65c089a910f94e1595c5dd384b663ca21eab85a56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf85e461ce1a2bddbda5bce65c089a910f94e1595c5dd384b663ca21eab85a56->enter($__internal_bf85e461ce1a2bddbda5bce65c089a910f94e1595c5dd384b663ca21eab85a56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_4fe8c5145e08c4024498394cd978fc29ca2ef2027835e3d5be7fefac457525e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fe8c5145e08c4024498394cd978fc29ca2ef2027835e3d5be7fefac457525e6->enter($__internal_4fe8c5145e08c4024498394cd978fc29ca2ef2027835e3d5be7fefac457525e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_bf85e461ce1a2bddbda5bce65c089a910f94e1595c5dd384b663ca21eab85a56->leave($__internal_bf85e461ce1a2bddbda5bce65c089a910f94e1595c5dd384b663ca21eab85a56_prof);

        
        $__internal_4fe8c5145e08c4024498394cd978fc29ca2ef2027835e3d5be7fefac457525e6->leave($__internal_4fe8c5145e08c4024498394cd978fc29ca2ef2027835e3d5be7fefac457525e6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
", "@Twig/Exception/error.atom.twig", "C:\\wamp64\\www\\ligne_rh\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
