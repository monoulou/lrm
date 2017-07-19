<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_5ca9ab1ab93f01d006ffdc8b5175ecfefb9485a954d11440e5bfd82c2b0d2ef2 extends Twig_Template
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
        $__internal_07c73330c762a4c67b470d543cc5fe346f2882cf2365f922f370c031eb45876c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07c73330c762a4c67b470d543cc5fe346f2882cf2365f922f370c031eb45876c->enter($__internal_07c73330c762a4c67b470d543cc5fe346f2882cf2365f922f370c031eb45876c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_c5840c7012027a18a997317964fcef8027a14f931c4e47a27a5e5ffe46bdfda4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5840c7012027a18a997317964fcef8027a14f931c4e47a27a5e5ffe46bdfda4->enter($__internal_c5840c7012027a18a997317964fcef8027a14f931c4e47a27a5e5ffe46bdfda4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_07c73330c762a4c67b470d543cc5fe346f2882cf2365f922f370c031eb45876c->leave($__internal_07c73330c762a4c67b470d543cc5fe346f2882cf2365f922f370c031eb45876c_prof);

        
        $__internal_c5840c7012027a18a997317964fcef8027a14f931c4e47a27a5e5ffe46bdfda4->leave($__internal_c5840c7012027a18a997317964fcef8027a14f931c4e47a27a5e5ffe46bdfda4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "@Twig/Exception/error.txt.twig", "C:\\wamp64\\www\\ligne_rh\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.txt.twig");
    }
}
