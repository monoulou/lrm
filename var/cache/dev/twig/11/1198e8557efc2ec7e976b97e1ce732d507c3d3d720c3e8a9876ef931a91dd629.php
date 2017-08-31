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
        $__internal_5bb018206aad97961195785d5d502398d79a6ab9a24f29f77319cba596dd69b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bb018206aad97961195785d5d502398d79a6ab9a24f29f77319cba596dd69b7->enter($__internal_5bb018206aad97961195785d5d502398d79a6ab9a24f29f77319cba596dd69b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_9289d9a79f172d3b0ac7a8b5eec897f9bad14bb4ef0a8ec2e0f65f42ba0585d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9289d9a79f172d3b0ac7a8b5eec897f9bad14bb4ef0a8ec2e0f65f42ba0585d6->enter($__internal_9289d9a79f172d3b0ac7a8b5eec897f9bad14bb4ef0a8ec2e0f65f42ba0585d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_5bb018206aad97961195785d5d502398d79a6ab9a24f29f77319cba596dd69b7->leave($__internal_5bb018206aad97961195785d5d502398d79a6ab9a24f29f77319cba596dd69b7_prof);

        
        $__internal_9289d9a79f172d3b0ac7a8b5eec897f9bad14bb4ef0a8ec2e0f65f42ba0585d6->leave($__internal_9289d9a79f172d3b0ac7a8b5eec897f9bad14bb4ef0a8ec2e0f65f42ba0585d6_prof);

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
