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
        $__internal_eb353a56ce6c1f981962ecf0fcc5885abe45ab9f7b2aaa7efa2c644e1e0b5ff9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb353a56ce6c1f981962ecf0fcc5885abe45ab9f7b2aaa7efa2c644e1e0b5ff9->enter($__internal_eb353a56ce6c1f981962ecf0fcc5885abe45ab9f7b2aaa7efa2c644e1e0b5ff9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_8a675648bcf71b07591c313b26ececdf93657d92375564e8e4db3d0c3b51abde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a675648bcf71b07591c313b26ececdf93657d92375564e8e4db3d0c3b51abde->enter($__internal_8a675648bcf71b07591c313b26ececdf93657d92375564e8e4db3d0c3b51abde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_eb353a56ce6c1f981962ecf0fcc5885abe45ab9f7b2aaa7efa2c644e1e0b5ff9->leave($__internal_eb353a56ce6c1f981962ecf0fcc5885abe45ab9f7b2aaa7efa2c644e1e0b5ff9_prof);

        
        $__internal_8a675648bcf71b07591c313b26ececdf93657d92375564e8e4db3d0c3b51abde->leave($__internal_8a675648bcf71b07591c313b26ececdf93657d92375564e8e4db3d0c3b51abde_prof);

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
