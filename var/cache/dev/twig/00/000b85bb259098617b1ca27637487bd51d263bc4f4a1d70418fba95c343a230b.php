<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_5f7b4ce3807b074335ebc71512b746a50d38518c61bdefb62f64f2e205dca5f8 extends Twig_Template
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
        $__internal_8c51054959ec499f0c66eef3317ee52140c2114db2bc7d4b14a704e8068a3d4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c51054959ec499f0c66eef3317ee52140c2114db2bc7d4b14a704e8068a3d4a->enter($__internal_8c51054959ec499f0c66eef3317ee52140c2114db2bc7d4b14a704e8068a3d4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_e92b60559b24053ffbb30a32168679fa4d9cd39c6159614dea3f41fde6324717 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e92b60559b24053ffbb30a32168679fa4d9cd39c6159614dea3f41fde6324717->enter($__internal_e92b60559b24053ffbb30a32168679fa4d9cd39c6159614dea3f41fde6324717_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_8c51054959ec499f0c66eef3317ee52140c2114db2bc7d4b14a704e8068a3d4a->leave($__internal_8c51054959ec499f0c66eef3317ee52140c2114db2bc7d4b14a704e8068a3d4a_prof);

        
        $__internal_e92b60559b24053ffbb30a32168679fa4d9cd39c6159614dea3f41fde6324717->leave($__internal_e92b60559b24053ffbb30a32168679fa4d9cd39c6159614dea3f41fde6324717_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "@Twig/Exception/exception.js.twig", "C:\\wamp64\\www\\ligne_rh\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.js.twig");
    }
}
